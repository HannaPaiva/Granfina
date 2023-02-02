<?php

namespace core\controllers;

use core\models\AdminModel;
use core\classes\Database;
use core\classes\Studio;
use core\models\Clientes;

class admin
{




    public function index()
    {


        // VERIFICA SE EXISTE SESSÃO ADMIN ABERTA
        if (!Studio::adminLogado()) {
            Studio::redirect('admin_login', true);

            return;
        }


        Studio::Layout_admin([
            'admin/layouts/html_header',
            'admin/layouts/sidebar',
            'admin/layouts/html_footer',
        ]);
    }



    public function tabela_clientes()
    {


        $clientes = new Clientes();

        $results = $clientes->lista_clientes();

        $data = [
            'clientes' => $results
        ];
        //Studio::printData($results);

        Studio::Layout_admin([
            'admin/layouts/html_header',
            'admin/layouts/sidebar',
            'admin/teste',
            'admin/layouts/html_footer',


        ], $data);
    }

    public function calendario() //equivalente a função teste
    {


        Studio::Layout_admin([
            'admin/layouts/html_header',
            'admin/layouts/sidebar',
            'admin/calendario',
            'admin/layouts/html_footer',
        ]);
    }

    public function horarios() //equivalente a função teste
    {


        Studio::Layout_admin([
            'admin/layouts/html_header',
            'admin/layouts/sidebar',
            'admin/horarios',
            'admin/layouts/html_footer',
        ]);
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
        Studio::redirect('teste', true);
        return;
    }


    public function cliente_apagar_soft()
    {
        if (!isset($_GET['id'])) {
            Studio::redirect('teste', true);
        }
        if (!isset($_GET['status'])) {
            Studio::redirect('teste', true);
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
            Studio::redirect('teste', true);
            return;
        }

        if ($_SERVER['REQUEST_METHOD'] != 'POST') {
            Studio::redirect('teste', true);
            return;
        }



        $cliente = new Clientes();


        $cliente->registar_cliente_button();
    }
}
