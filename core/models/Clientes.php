<?php

namespace core\models;
use DateTime;

use core\classes\Database;
use core\classes\Studio;
use core\controllers\Main;

class Clientes
{


    public function validar_email($purl)
    {
       
        // Validar o email do cliente
        $bd = new Database();
        $parametros = [
            ':purl' => $purl
        ];
        $resultados = $bd->select(
            "SELECT * FROM clientes WHERE purl = :purl",
            $parametros
        );


        // Studio::printData($purl);
        // Verifca se foi encontrado o cliente
        if (count($resultados) != 1) {
            return false;
        }
        // Foi encontrado o Purl
        $id_cliente = $resultados[0]->id;

        // Já posso atualizar os dados
        $parametros = [
            ':id_cliente' => $id_cliente
        ];
    
        // Vou atualizar na bd o campo ativo do user, ativo passa a 1
        // e meto o purl a nulo
        $bd->update("UPDATE clientes SET purl = NULL, status='ativo',
   last_update=NOW()", $parametros);
        return true;
    }








    public function categoria_upload_verifica($pasta)
    {


        $_SESSION['erro'] = "";
        // echo $_POST['text_decricao'];
        // echo '<br>';
        // echo $_POST['categoria_icone'];
        // die('op');

        // echo '<pre>';
        // print_r($_FILES);
        // die('upload');


        // $pasta_destino = "../admin/assets/images/categorias/";
        $pasta_destino = $pasta;
        $mime_aceites = [
            'image/jpeg',
            'image/png',
            'image/gif'
        ];


        // Tratamento dos ficheiros
        foreach ($_FILES as $file) { // cada volta que dermos corremos cada uma das propriedades
            // movimentação dos ficheiros, para a pasta de destino final

            // Verificar se imagem é do tipo esperado
            if (!in_array($file['type'], $mime_aceites)) {
                if ($file['type'] <> "") {
                    $_SESSION['erro'] = 'Imagem não é do tipo esperado';

                    // store::redirect('gere_categoria_update_erro&id=' . Store::aesEncriptar($_POST['id_categoria']), true);
                    return;
                }
            }

            // continue; //não permitindo assim que seja feito o upload   

            // verifcar se o ficheiro tem tamanho fisico inferior ou igual ao limite máximo
            // de 500Kb

            if ($file['size'] > IMAGE_SIZE) {
                $_SESSION['erro'] = 'Tamanho de imagem superior a ' . IMAGE_SIZE;
                return;
            }


            // Verificar as dimensões do ficheiro
            // Neste caso estou a definir um máximo de largura (width) 
            // e largura (height) -- defini no config

            // Se carreguei imagem 
            if ($file['name'] <> "") {

                $dimensoes = getimagesize($file['tmp_name']);
                if (($dimensoes[0] > IMAGE_WIDTH) || ($dimensoes[1] > IMAGE_HEIGHT)) {
                    $_SESSION['erro'] = 'Tamanho de Largura ' . IMAGE_WIDTH . ' ou Altura ' . IMAGE_HEIGHT . 'Superiores às Definidas';
                    return;
                }

                // Cao contrário move o ficheiro escolhido para a pasta destino

                move_uploaded_file($file['tmp_name'], $pasta_destino . $file['name']);
            }

            // Se não carreguei imagem

        }
    }


    public function admin_editar_cliente($id)
    {


        $bd = new Database();


        $parametros = [
            // NOME DOS PARAMETROS = NOME DOS CAMPOS
            ':id' => $id,
            ':nome' => trim($_POST["nome"]),
            ':email' => strtolower(trim($_POST["email"])),
        
            ':datanasc' => date("Y-m-d", strtotime($_POST["datanasc"])),
      
            ':status' => $_POST['status'],
   
            ':nivel' => '',
            ':genero' => $_POST['genero'],
            ':obs' => trim($_POST['obs']),
        ];



        $bd->update("
            UPDATE clientes 
            SET 
            nome = :nome, email = :email, datanasc = :datanasc, status = :status, 
            nivel = :nivel, genero = :genero, obs = :obs
            WHERE id = :id 
            ", $parametros);
    }



    public function verificar_email_existe($email)
    {
        // Verifica se já existe outra conta com o mesmo email
        // Verifica na BD se existe cliente com mesmo email
        // é criado o namespace da database
        // parametro por exemplo :email podia ser e: PDO
        // este método evita SQLInjection
        $bd = new Database();
        $parametros = [
            ':email' => strtolower(trim($email))
        ];
        $resultados = $bd->select("SELECT email FROM clientes WHERE email = :email", $parametros);
        // se o cliente já existe
        if (count($resultados) != 0) {
            // AS passwords são diferentes
            return true;
        } else {
            return false;
        }
    }





    public function admin_login()
    {

        // VERIFICA SE EXISTE SESSÃO ADMIN ABERTA
        if (Studio::adminLogado()) {
            Studio::redirect('inicio', true);
            return;
        }
        //apresenta backoffice
        // QUADRO DE LOGIN
        Studio::Layout_admin([
            'admin/layouts/html_header',
            'admin/login_frm',
            'admin/layouts/html_footer',
        ]);
    }





    public function registar_cliente()
    {


        $bd = new Database();
        $purl = Studio::criarHash();



 
        $nasc = date('Y-m-d', strtotime($_POST['datanasc']));

        $lingua = $_POST['lingua'];
      
        $k = new DateTime($nasc);
        $hoje =  new DateTime(date('Y-m-d H:i:s'));
        $intervalo = $k->diff($hoje);
        $idade = $intervalo->format('%r%y');
     







        $parametros = [
            // NOME DOS PARAMETROS = NOME DOS CAMPOS

            ':nome' => strtolower($_POST["nome"]),
            ':email' => strtolower(trim($_POST["email"])),
            ':senha' => password_hash($_POST['senha'], PASSWORD_DEFAULT),
            ':datanasc' => $nasc,
            ':idade' => $idade,
            ':lingua' => $lingua,
            ':status' => "desativado",
            ':purl' => $purl, //$purl,
            ':avatar' => '', //$purl,
            ':nivel' => 0,
            ':genero' => $_POST["genero"],
            ':obs' => '',
            ':sobre' => '',

        ];


        // A FUNCIONAR »»»»»»»»»»»»»»»»»»»»»»»»»»»»

        $bd->insert("INSERT INTO clientes VALUES(
            0, 
            :nome, 
            :email, 
            :senha, 
            :datanasc, 
            :idade, 
            :lingua, 
            NOW(), 
            NOW(), 
            NULL, 
            :status, 
            :purl, 
            :avatar,
            :nivel,
            :genero,
            :obs,
            :sobre
            )", $parametros);

        return $purl;
    }


    //************************************************************************* */
    // CLIENTE - VALIDAR LOGIN
    public function validar_login($email, $password)
    {
        // Vai verificar se o login é válido
        $parametros = [
            ':email' => $email
        ];

        $bd = new Database();

        $resultados = $bd->select("
    SELECT * FROM clientes
    WHERE email = :email
    AND status = 'ativo'
    AND deleted_at IS NULL", $parametros);


        if (count($resultados) != 1) {
            // Não existe utilizador
            return false;
        } else {
            // Temos o email, vamos verifcar a password
            // Que está codificada
            $email = $resultados[0];
            // Verifar a pass
            if (!password_verify($password, $email->senha)) {
                // password inválida
                return false;
            } else {
                // Login é válido // Utilizador existe e a pass está OK
                return $email;
            }
        }
    }



    public function lista_clientes()
    {
        // Esta função não tem parâmetros, porque não queremos ir procurar
        // por algo específico, queremos sim, que nos dê os registos todos
        // da tabela clientes
        //Primeiro - Instanciar o objeto que trata das operações de CRUD
        // objeto database
        $bd = new Database();
        // Não existem parametros recebidos


        $resultados = $bd->select("SELECT * FROM clientes");
        // Chegado aqui podes começar por verificar se estamos a obter os

        // dos clientes
        // Chamada da famosa função que criamos, para nos ajudar neste efeito
        // Studio::printData($resultados);
        return $resultados;
    }


    public function selecionar_cliente()
    {
        // Esta função não tem parâmetros, porque não queremos ir procurar
        // por algo específico, queremos sim, que nos dê os registos todos
        // da tabela clientes
        //Primeiro - Instanciar o objeto que trata das operações de CRUD
        // objeto database
        $bd = new Database();
        // Não existem parametros recebidos


        $resultados = $bd->select("SELECT * FROM clientes");
        // Chegado aqui podes começar por verificar se estamos a obter os

        // dos clientes
        // Chamada da famosa função que criamos, para nos ajudar neste efeito
        // Studio::printData($resultados);
        return $resultados;
    }










    public function cliente_apagar_Hard($id)
    {


        $bd = new Database();
        $parametros = [
            ':id' => $id,
        ];


      

        $bd->delete("DELETE FROM clientes WHERE id = :id", $parametros);
        // Studio::redirect('teste', true);
        return;
    }


    public function cliente_apagar_soft($id, $status)
    {


        $bd = new Database();

        //verificar o valor do campo status

        if ($status == "ativo") {

            $st = "desativado";
        } else {
            $st = "ativo";
        }


        $parametros = [
            ':id' => strtolower(trim($id)),
            ':status' => strtolower(trim($st)),

        ];

        if ($status == "ativo") {

            $bd->update("UPDATE clientes SET deleted_at = NOW(), status = :status, last_update = NOW()
            WHERE id = :id", $parametros);
        } else {
            $bd->update("UPDATE clientes SET status = :status, last_update = NOW(), deleted_at = NULL WHERE id = :id", $parametros);
        }



        Studio::redirect('tabela_clientes', true);
        return;
    }


    public function registar_cliente_button()
    {
        //corrigir
        // email (?:[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:(2(5[0-5]|[0-4][0-9])|1[0-9][0-9]|[1-9]?[0-9]))\.){3}(?:(2(5[0-5]|[0-4][0-9])|1[0-9][0-9]|[1-9]?[0-9])|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])

        $bd = new Database();


        // var_dump($_POST);
        // die();
        $status = trim($_POST["status"]);

        $lingua = trim($_POST["t_lang"]);



        $nasc = date('Y-m-d', strtotime($_POST['datanasc']));
      
        $k = new DateTime($nasc);
        $hoje =  new DateTime(date('Y-m-d H:i:s'));
        $intervalo = $k->diff($hoje);
        $idade = $intervalo->format('%r%y');
     
        $parametros = [
            // NOME DOS PARAMETROS = NOME DOS CAMPOS

            ':nome' => strtolower($_POST["t_nome"]),
            ':email' => strtolower(trim($_POST["t_email"])),
            ':senha' => password_hash($_POST['t_pass'], PASSWORD_DEFAULT),
            ':datanasc' => date("Y-m-d", strtotime($_POST["t_nasc"])),
            ':idade' => $idade,
            ':lingua' => $lingua,
            ':status' => $status,
            ':purl' => NULL, //$purl,
            ':avatar' => '',
            ':nivel' => '',
            ':genero' => '',
            ':obs' => '',
            ':sobre' => '',

        ];


        // A FUNCIONAR »»»»»»»»»»»»»»»»»»»»»»»»»»»»

        $bd->insert("INSERT INTO clientes VALUES(
            0, 
            :nome, 
            :email, 
            :senha, 
            :datanasc, 
            :idade, 
            :lingua, 
            NOW(), 
            NOW(), 
            NULL, 
            :status, 
            :purl, 
            :avatar,
            :nivel,
            :genero,
            :obs,
            :sobre
            )", $parametros);

        Studio::redirect('tabela_clientes', true);

        return;
    }
}
