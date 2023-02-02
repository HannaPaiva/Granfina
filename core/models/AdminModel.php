<?php

namespace core\models;

use core\classes\Database;
use core\classes\Studio;

class AdminModel
{
    //========================================================
    //*******************************************************************

    // ADMIN - VALIDAR LOGIN
    public function validar_login($utilizador_admin, $password)
    {
        // Vai verificar se o login é válido
        $parametros = [
            ':utilizador_admin' => $utilizador_admin
        ];
        $bd = new Database();
        $resultados = $bd->select("SELECT * FROM admins WHERE utilizador = :utilizador_admin AND deleted_at IS NULL", $parametros);


        if (count($resultados) != 1) {
            // Não existe Admin
            return false;
        } else {
            // Temos utilizador Admin, verifcar a password
            // Que está codificada

            $utilizador_admin = $resultados[0];

            // Studio::printData($resultados);
            // Verifar a pass

            if (!password_verify($password, $utilizador_admin->senha)) {
                //die('pass invalida');
                // password inválida
                return false;
            } else {
                // Login é válido // Utilizador existe e a pass está OK
                $_SESSION['admin'] = $utilizador_admin;

                return $utilizador_admin;


            }
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



    public function lista_funcionarios()
    {
        // Esta função não tem parâmetros, porque não queremos ir procurar
        // por algo específico, queremos sim, que nos dê os registos todos
        // da tabela clientes
        //Primeiro - Instanciar o objeto que trata das operações de CRUD
        // objeto database
        $bd = new Database();
        // Não existem parametros recebidos


        $resultados = $bd->select("SELECT * FROM funcionarios");
        // Chegado aqui podes começar por verificar se estamos a obter os

        // dos clientes
        // Chamada da famosa função que criamos, para nos ajudar neste efeito
        // Studio::printData($resultados);
        return $resultados;
    }






    public function criar_funcionario()
    {
        // Vai verificar se o login é válido
       
        $bd = new Database();
        $resultados = $bd->select("SELECT * FROM admins WHERE utilizador = :utilizador_admin AND deleted_at IS NULL");

    }

      
    public function funcionario_apagar_Hard($id){

        $bd = new Database();
        $parametros = [
            ':id' => strtolower(trim($id)),
        ];

        $bd->delete("DELETE FROM funcionarios WHERE id = :id", $parametros);
        // Studio::redirect('teste', true);
        return;



    }

    public function update_dia_semana() 
    {

      
     
    }







}


