<?php

namespace core\controllers;

use core\classes\Database;
use core\classes\EnviarEmail;
use core\classes\Studio;
use core\models\Clientes;
use core\models\Marcacoes;

class Main
{


    public function index()
    {

        Studio::Layout([


            'layouts/html_header',
            'pagina_inicial',
            'layouts/html_footer',



        ]);
    }



    public function servicos()
    {

        $a = $_GET['servico'];
        $marcacao = new Marcacoes();

        $results = $marcacao->select_servicos($a);

        $data = [
            'servicos' => $results
        ];





        Studio::Layout([




            'layouts/html_header',
            'servicos',
            'layouts/html_footer',



        ], $data);
    }



    public function marcar()
    {


        $marcacao = new Marcacoes();

        $results = $marcacao->criar_evento_cliente();



      
            Studio::Layout([




                'layouts/html_header',
                'sucesso_marcacao',
                'layouts/html_footer'



            ]);
      
        
    }









    public function studio()
    {

        $dados = [
            'titulo' => APP_NAME . ' ' . APP_VERSION,

        ];


        Studio::Layout([




            'layouts/html_header',
            'pagina_inicial',
            'layouts/html_footer',



        ],  $dados);
    }





    public function agendar()
    {

        $marcacao = new Marcacoes();

        $results = $marcacao->select_categorias();

        $data = [
            'categorias' => $results
        ];


        Studio::Layout([




            'layouts/html_header',
            'agendamento',
            'layouts/html_footer',



        ], $data);
    }




    public function mostrar_servicos()
    {


        $a = $_GET['servico'];
        $marcacao = new Marcacoes();

        $results = $marcacao->select_servicos($a);

        $data = [
            'servicos' => $results
        ];

        // Studio::printData($data);

        return extract($data);
    }










    public function novo_cliente()
    {


        if (Studio::clienteLogado()) {
            $this->index();
            return;
        }


        Studio::Layout([


            'layouts/html_header',
            'novo_cliente',
            'layouts/html_footer',

        ]);
    }





    public function login()
    {

        Studio::Layout([


            'layouts/html_header',
            'login',
            'layouts/html_footer',

        ]);
    }




    public function perfil_cliente()
    {

        Studio::Layout([


            'layouts/html_header',
            'perfil_cliente',
            'layouts/html_footer',

        ]);
    }





    //============================================================================
    // ----   login_submit
    //============================================================================


    public function login_submit()
    {

        /* Verificar se existe um utilizador logado */
        if (Studio::clienteLogado()) {
            $this->index();
            return;
        }

        // veriifca se foi efetuado um post do Formulário de Login
        if ($_SERVER['REQUEST_METHOD'] != 'POST') {
            if (Studio::clienteLogado()) {
                $this->index();
                return;
            }
        }

        // Validar campos
        if (
            !isset($_POST['senha']) || !filter_var(
                trim($_POST['email']),
                FILTER_VALIDATE_EMAIL
            )
        ) {
            // erro de preenchimento do form
            studio::redirect('login');
            return;
        }

        // Prepara os dados para o model
        $email = trim(strtolower($_POST['email']));
        $senha = trim($_POST['senha']);
        // Ir à bd (ver login)
        // carrega o model e verifica se o login é correto
        $cliente = new Clientes();
        // chama model Clientes, validar_login
        // Para verificar user e pass
        $resultado = $cliente->validar_login($email, $senha);
        // analisa o resultado


        // echo "<pre>";
        // print_r($resultado);
        // die("aa");



        if (is_bool($resultado)) {
            //Login inválido

            $_SESSION['erro'] = 'Login Inválido';


            Studio::redirect('login');
            return;
        } else {
            // Login Válido, criar sessão cliente
            // Coloca os dados na sessão / Criar sessão do cliente
            // Optamos por estes três códigos na sessão
            // studio::printData($resultado);

            $_SESSION['cliente'] = $resultado->id;

            $_SESSION['email'] = $resultado->email;

            $_SESSION['nome'] = $resultado->nome;
            // redirecionar para o inicio
            Studio::redirect("index");
        }
    }





    //====================================================
    public function criar_cliente()
    {



        // <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< REGEX <<<<<<<<<<<<<<<<<<<<<<<<<<<<<

        // EMAIL:   ^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9_.]+\.([a-zA-Z]{2,4})$
        // NOME: ^([a-zA-Z]{1,25})+ ([a-zA-Z]{0,25})$
        // SENHA: 


        if (Studio::clienteLogado()) {
            $this->index();
            return;
        }
        // Alguém pode querer entrar de forma forçada
        // colocando endereço no browser, não seguindo a sequência
        // do programa
        // Verifica se houve submissão de um formulário
        if ($_SERVER['REQUEST_METHOD'] != 'POST') {
            $this->index();
            return;
        }
        //*********************************************************************

        // Criação de um novo Cliente
        // 1- Verificar se a password 1 coincide com password 2
        if ($_POST['senha'] !== $_POST['senha2']) {
            // AS passwords são diferentes
            $_SESSION['erro'] = 'Senhas são Diferentes!!!!';
            $this->novo_cliente();
            return;
        }
        //*********************************************************************

        // verifica se na base de dados existe cliente com o mesmo email
        $cliente = new Clientes();
        if ($cliente->verificar_email_existe($_POST['email'])) {
            $_SESSION['erro'] = 'Este e-mail já está em utilização';
            $this->novo_cliente();
            return;
        }
        //*********************************************************************

        // //<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>>>>> Verificar e-mail

        // if (!isset($_POST["email"])) {
        //     Studio::redirect('novo_cliente', true);
        //     return;
        // } else {

        //     $campo = $_POST['email'];
        //     $pattern = "^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9_.]+\.([a-zA-Z]{2,4})$";
        //     $_SESSION['erro'] = "Insira um e-mail válido";

        //     if (!Studio::validar($campo, $pattern)) {

        //         Studio::redirect('novo_cliente', true);
        //         return;
        //     }
        // }

        // //<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>>>>> Verificar nome
        // if (!isset($_POST["nome"])) {
        //     Studio::redirect('novo_cliente', true);
        //     return;
        // } else {

        //     $campo = $_POST['nome'];
        //     $pattern = "^([a-zA-Z]{1,25})+ ([a-zA-Z]{0,25})$\   ";
        //     $_SESSION['erro'] = "Formato de nome não suportado";

        //     if (!Studio::validar($campo, $pattern)) {

        //         Studio::redirect('novo_cliente', true);
        //         return;
        //     }
        // }


        //<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>>>>> Verificar senha
        // if (!isset($_POST["senha"])) {
        //     Studio::redirect('novo_cliente', true);
        //     return;
        // } else {

        //     $campo = $_POST['senha'];
        //     $pattern = "^([a-zA-Z]{1,25})+ ([a-zA-Z]{0,25})$\   ";
        //     $_SESSION['erro'] = "A senha precisa conter:  ";

        //     if (!Studio::validar($campo, $pattern)) {

        //         Studio::redirect('novo_cliente', true);
        //         return;
        //     }
        // }



        // CLIENTE PRONTO PARA SER INSERIDO NA BD
        // ASSIM VAI DEVOLVER O VALOR DO PURL
        $purl = $cliente->registar_cliente();
        $email_cliente = strtolower(trim($_POST['email']));
        // $link = BASE_URL . '?a=confirmar_email&purl=' . $purl;

        $email = new EnviarEmail();
        $resultado = $email->enviar_email_confirmacao_novo_cliente($email_cliente, $purl);

        if ($resultado) {

            //apresenta o Layout Criar Novo Utilizador
            Studio::Layout([
                'layouts/html_header',
                'criar_cliente_sucesso',
                'layouts/html_footer',
            ]);
            return;
        } else {
            echo "Aconteceu um erro no envio de e-mail";
        }
    }


    // ****************************************************************
    //===================== logout ======================================
    public function logout()
    {

        unset($_SESSION['cliente']);
        unset($_SESSION['email']);
        unset($_SESSION['nome']);
        session_destroy();
        // redireciona para o inicio da aplicação
        Studio::redirect('inicio', false);
    }






    public function confirmar_email()
    {
        // Vamos agora verificar se o utilizador já existe
        if (Studio::clienteLogado()) {
            $this->index();
            return;
        }
        // Se não existe na query string um purl
        if (!isset($_GET['purl'])) {
            $this->index();
            return;
        }
        $purl = $_GET['purl'];
        // Veriifca se o purl é válido
        // if (strlen($purl) != 11) {
        //     $this->index();
        //     return;
        // }
        $cliente = new Clientes();
        $resultado = $cliente->validar_email($purl);
        if ($resultado) {
            Studio::Layout([
                'layouts/html_header',
                'conta_confirmada_sucesso',
                'layouts/html_footer',
            ]);
            return;
        } else {

            Studio::Layout([
                'layouts/html_header',
                'conta_confirmada_erro',
                'layouts/html_footer',
            ]);
            return;
        }
    }
}
