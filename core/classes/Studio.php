<?php


namespace core\classes;


use FFI\Exception;

class Studio
{

    


    //******************************************************/
    //***************** printData *************************************/

    public static function printData($data, $die = true)
    {
        if (is_array($data) || is_object($data)) {
            echo "<pre>";
            print_r($data);
        } else {
            echo "<pre>";
            echo $data;
        }
        if ($die) {
            die("FIM");
        }
    }



    //******************************************************/
    //***************** ENCRIPTACAO *************************************/
    public static function aesEncriptar($valor)
    {
        return bin2hex(openssl_encrypt(
            $valor,
            'aes-256-cbc',
            AES_KEY,
            OPENSSL_RAW_DATA,
            AES_IV
        ));
    }



    //******************************************************/
    //***************** DESENCRIPTACAO *************************************/
    public static function aesDesencriptar($valor)
    {
        return openssl_decrypt(
            hex2bin($valor),
            'aes-256-cbc',
            AES_KEY,
            OPENSSL_RAW_DATA,
            AES_IV
        );
    }



    //******************************************************/
    //***************** redirect *************************************/
    public static function redirect($rota = '', $admin = false)
    {
        // Faz o redirecionamento para a URL desejada (rota)
        if (!$admin) {
            header("Location: " . BASE_URL . "?a=$rota");
        } else {
            header("Location: " . BASE_URL . "/admin?a=$rota");
        }
    }

    // Chamamento do nosso layout
    // Static function, porque não quero fazer uma instanciação da class Store
    // quero fazer executar o método dela automaticamente
    // Vai servir para apresentar as views da aplicação
    public static function Layout_admin($estruturas, $dados = null)
    {
        // Estruturas são a coleção de ficheiros (html_header.php .....)
        // seguindo a sequência de apresentação
        //html_header.php nav_bar.php inicio.php html_footer.php
        // Verifica se estruturas é um array
        if (!is_array($estruturas)) // Se não for array
        {
            throw new Exception("Coleção de estruturas inválida");
        }
        // variáveis
        if (!empty($dados) && is_array($dados)) {
            // significa que foram enviadas informações, que queremos
            // Passar para dentro das nossas views
            extract($dados);
        }
        // apresentar as views da aplicação
        // Ficheiros que estão colocados dentro das views
        foreach ($estruturas as $estrutura) {
            include("../../core/views/$estrutura.php"); // como vou usar extensões php
        }
    }

    //================================================================
    //================== Admin Logado ===========================
    public static function adminLogado()
    {
        // Verifica se temos um admin logado / em sessão
        // SE EXISTIR um cliente na sessão vai devolver true
        return isset($_SESSION['admin']);
    }





    # Função que ajuda a desenhar o controle HTML select
    #
    public static function combobox($arrDados, $valorSelecionado = null)
    {
        // echo "<pre>";
        // print_r($arrDados);
        // die("combobox");

        echo "<option></option>";
        foreach ($arrDados as $key => $value) {
            $selected = ($valorSelecionado == $key) ? "selected=\"selected\"" : null;
            echo "<option value=\"$key\" $selected >$value</option>";
        }
    }


    public static function Layout($estruturas, $dados = null)
    {


        if (!is_array($estruturas)) {

            throw new Exception("Colecao inválida");
        }


        if (!empty($dados) && is_array($dados)) {
            extract($dados);
        }



        foreach ($estruturas as $estrutura) {
            include("../core/views/$estrutura.php");
        }
    }

    public static function clienteLogado()
    {


        return isset($_SESSION['cliente']);
    }

    //******************************************************/
    //***************** criarHash *************************************/
    public static function criarHash($num_caracteres = 12)
    {
        // Criar hashes
        $chars =
            '01234567890123456789abcdefghijlmnopqrstuvwxyzabcdefgh
ijlmnopqrstuvwxyzABCDEFGHIJLMNOPQRSTUVWXYZABCDEFGHIJLM
NOPQRSTUVWXYZ';
        return trim(substr(str_shuffle($chars), 0, $num_caracteres));
    }




// «««««««««««««««««««««««««««««««««««««««««««««

    public static function validar($campo, $pattern, $erro = null)
    {

        if (preg_match($pattern, $campo)) {
            return true;
        } else {
            $_SESSION['erro'] = $erro;
            return false;
        }

/* EMAIL /^ [\w-\.]+@([\w-]+\.)+[\w-]{2,4} $/



*/
        
    }













}
