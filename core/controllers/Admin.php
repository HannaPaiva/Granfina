<?php

namespace core\controllers;

use core\models\AdminModel;
use core\classes\Database;
use core\classes\Studio;
use core\models\Clientes;
use core\models\Marcacoes;

class admin
{
    public function galeria()
    {




        Studio::Layout_admin([
            'admin/layouts/html_header',
            'admin/layouts/header',
            'admin/layouts/sidebar',
            'admin/galeria',
            'admin/layouts/footer',
            'admin/layouts/html_footer',
        ]);
    }


    public function pesquisar_cliente()
    {
        if (!isset($_GET['id'])) {
        }

        $id = Studio::aesDesencriptar($_GET['id']);
        return $id;
    }


    public function trocar_foto_cliente()
    {


        $bd = new Database();

        $id = $_POST["id"];

        $target_dir = "../admin/assets/images/clientes/";

        $target_file = $target_dir . basename($_FILES["foto"]["name"]);
        // Esse código apaga a foto antiga do cliente, se existir, e depois a atualiza
        if (!file_exists($target_file)) {


            $antes = $bd->select("SELECT * from clientes WHERE id = '" . $id . "' ");
            $old =  $target_dir . $antes->avatar;
            if (file_exists($old)) {
                unlink($old);
            }
        } else {

            Studio::redirect("tabela_clientes", true);
            return;
        }


        if (move_uploaded_file($_FILES['foto']['tmp_name'],  trim($target_file))) {

            $bd->update("UPDATE clientes SET avatar = '" . $_FILES['foto']['name'] . "' WHERE id = '" . $id . "'");
        } else {
            print "Upload failed!";
        }

        Studio::redirect("tabela_clientes", true);
    }





    //***********************  Atualiza categoria ****************************************** 
    public function admin_editar_cliente()
    {



        /* Verificar se existe um admin logado */
        if (!Studio::adminLogado()) {
            Studio::redirect('inicio', true);
            return;
        }

        // Verifca se existe um id na query string
        if (!isset($_GET['a'])) {
            Studio::redirect('inicio', true);
            return;
        }


      

    
        $id = Studio::aesDesencriptar($_POST['id']);



           $clientes = new Clientes();
 


            // Faz a atualização da categoria

            $resultado = $clientes->admin_editar_cliente($id);



            Studio::redirect('tabela_clientes', true);
     




        
 

        // fIM, CASO EXISTISSE ALGUMA VALIDAÇÃO ERRADA!!!
    }

    public function index()
    {


        // VERIFICA SE EXISTE SESSÃO ADMIN ABERTA
        if (!Studio::adminLogado()) {
            Studio::redirect('admin_login', true);

            return;
        }


        Studio::Layout_admin([
            'admin/layouts/head',
            'admin/layouts/log_header',
            'admin/layouts/log_sidebar',
            'admin/inicio',
            'admin/layouts/log_footer',

        ]);
    }



    public function tabela_clientes()
    {

        // VERIFICA SE EXISTE SESSÃO ADMIN ABERTA
        if (!Studio::adminLogado()) {
            Studio::redirect('admin_login', true);

            return;
        }

        $clientes = new Clientes();

        $results = $clientes->lista_clientes();

        $data = [
            'clientes' => $results
        ];
        //Studio::printData($results);

        Studio::Layout_admin([
            'admin/layouts/head',
            'admin/layouts/log_header',
            'admin/layouts/log_sidebar',
            'admin/tabela_clientes',
            'admin/layouts/log_footer',



        ], $data);
    }



    public function despesas()
    {

        // VERIFICA SE EXISTE SESSÃO ADMIN ABERTA
        if (!Studio::adminLogado()) {
            Studio::redirect('admin_login', true);

            return;
        }

        $clientes = new Clientes();

        $results = $clientes->lista_clientes();

        $data = [
            'clientes' => $results
        ];
        //Studio::printData($results);

        Studio::Layout_admin([
            'admin/layouts/head',
            'admin/layouts/log_header',
            'admin/layouts/log_sidebar',
            'admin/despesas',
            'admin/layouts/log_footer',



        ], $data);
    }




    public function servicos()
    {
       // VERIFICA SE EXISTE SESSÃO ADMIN ABERTA
       if (!Studio::adminLogado()) {
        Studio::redirect('admin_login', true);

        return;
    }

      
        $marcacao = new Marcacoes();

        $results = $marcacao->tabela_servicos();

        $data = [
            'servicos' => $results
        ];

        // Studio::printData($data);
  

        Studio::Layout_admin([
            'admin/layouts/head',
            'admin/layouts/log_header',
            'admin/layouts/log_sidebar',
            'admin/servicos',
            'admin/layouts/log_footer',
    



        ], $data);

      
    }




    public function tabela_funcionarios()
    {

        // VERIFICA SE EXISTE SESSÃO ADMIN ABERTA
        if (!Studio::adminLogado()) {
            Studio::redirect('admin_login', true);

            return;
        }

        $funcionarios = new AdminModel();

        $results = $funcionarios->lista_funcionarios();

        $data = [
            'funcionarios' => $results
        ];
        //Studio::printData($results);

        Studio::Layout_admin([
            'admin/layouts/head',
            'admin/layouts/log_header',
            'admin/layouts/log_sidebar',
            'admin/tabela_funcionarios',
            'admin/layouts/log_footer',



        ], $data);
    }




    public function calendario()
    {
        // VERIFICA SE EXISTE SESSÃO ADMIN ABERTA
        if (!Studio::adminLogado()) {
            Studio::redirect('admin_login', true);

            return;
        }

        $calendario = new Marcacoes();

        $results = $calendario->mostrar_calendario();

        $data = [
            'calendario' => $results
        ];

        // Studio::printData($data);


        Studio::Layout_admin([


            'admin/layouts/head',
            'admin/layouts/log_header',
            'admin/layouts/log_sidebar',

            'admin/calendario',
            'admin/layouts/log_footer',
        ], $data);


        // Studio::Layout_admin([
        //     'admin/layouts/html_header',
        //     'admin/layouts/sidebar',
        //     'admin/calendario',
        //     'admin/layouts/html_footer',
        // ]);

    }


    // public function listar_eventos(){


    // }

    public function horarios() 
    {


        Studio::Layout_admin([
            'admin/layouts/head',
            'admin/layouts/log_header',
            'admin/layouts/log_sidebar',

            'admin/horarios',
            'admin/layouts/log_footer',

        ]);
    }

    public function dia_semana() 
    {

        $admin = new AdminModel();

       $resultado = $admin->update_dia_semana();
       $data = [
        'semana' => $resultado
    ];
    }




    //user: admin@admin.com
    //senha: 123

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

    public function admin_login_submit()
    {
        // Lista de lista_clientes
        /* Verificar se existe um utilizador logado */
        if (Studio::adminLogado()) {
            Studio::redirect('inicio', true);
            return;
        }
        // veriifca se foi efetuado um post do Formulário de Login Admin
        if ($_SERVER['REQUEST_METHOD'] != 'POST') {
            if (Studio::adminLogado()) {
                Studio::redirect('inicio', true);
                return;
            }
        }
        // Validar campos vieram devidamente preenchidos
        if (
            !isset($_POST['text_admin']) ||
            !isset($_POST['text_password'])
        ) {
            // erro de preenchimento do form
            $_SESSION['erro'] = 'Login Inválido';
            studio::redirect('admin_login', true);
            return;
        }
        // Prepara os dados para o model
        $admin = trim(strtolower($_POST['text_admin']));
        $password = trim($_POST['text_password']); //123

        // Ir à bd (ver login)
        // carrega o model e verifica se o login é correto
        $admin_model = new AdminModel();
        // chama model Clientes, validar_login
        // Para verificar user e pass
        $resultado = $admin_model->validar_login($admin, $password);

        // analisa o resultado
        if (is_bool($resultado)) {
            //Login inválido
            $_SESSION['erro'] = 'Login Inválido';

            Studio::redirect('admin_login', true);

            return;
        } else {

            $_SESSION['admin'] = $resultado->id_admin;
            $_SESSION['admin_utilizador'] = $resultado->utilizador;
            $_SESSION['admin_nome'] = $resultado->nome;
            // Studio::printData($resultado);
            // redirecionar para a páginal inicial Backoffice
            Studio::redirect('inicio', true);
        }
    }



    //********************* admin_logout ****************************
    public function admin_logout()
    {
        // Faz o logout do admin da sessão
        unset($_SESSION['admin']);
        unset($_SESSION['admin_utilizador']);
        Studio::redirect('inicio', true);
    }


    //************************************************
    public function cliente_apagar_Hard()
    {
        if (!isset($_GET['id'])) {
        }


        $id = Studio::aesDesencriptar($_GET['id']);
        $cliente = new Clientes();

        $results = $cliente->cliente_apagar_Hard($id);
        Studio::redirect('tabela_clientes', true);
        return;
    }


    public function cliente_apagar_soft()
    {
        if (!isset($_GET['id'])) {
            Studio::redirect('tabela_clientes', true);
        }
        if (!isset($_GET['status'])) {
            Studio::redirect('tabela_clientes', true);
        }
        //   die("aaa");


        $id = $_GET['id'];
        $status = $_GET['status'];
        $cliente = new Clientes();

        $cliente->cliente_apagar_soft($id, $status);

        return;
    }



    public function criar_cliente_button()
    {
        //************************************************************************* */


        if (!Studio::adminLogado()) {
            Studio::redirect('tabela_clientes', true);
            return;
        }

        if ($_SERVER['REQUEST_METHOD'] != 'POST') {
            Studio::redirect('tabela_clientes', true);
            return;
        }



        $cliente = new Clientes();


        $cliente->registar_cliente_button();
    }


    public function criar_funcionario()
    {
        //************************************************************************* */


        if (!Studio::adminLogado()) {
            Studio::redirect('tabela_clientes', true);
            return;
        }

        if ($_SERVER['REQUEST_METHOD'] != 'POST') {
            Studio::redirect('tabela_clientes', true);
            return;
        }



        $admin = new AdminModel();

        $nome = trim(strtolower($_POST['text_admin']));
        // servico
        // email
        // data_aniversario  
        // permissao
        // telefone

        $password = trim($_POST['text_password']); //123


        $admin->criar_funcionario();
    }







    public function criar_evento_admin()
    {

        $marcacao = new Marcacoes();
        $marcacao->criar_evento_admin();
        Studio::redirect('calendario', true);
 
    }










public function funcionario_apagar_Hard(){
    if (!isset($_GET['id'])) {
    }


    $id = Studio::aesDesencriptar($_GET['id']);
    $funcionario = new AdminModel();

    $results = $funcionario->funcionario_apagar_Hard($id);
    Studio::redirect('tabela_funcionarios', true);
    return;
}



}

