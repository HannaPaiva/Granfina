<?php


$rotas = [
 



    //*********************** LINKS DA NAVBAR ***********************
  
  
    'inicio' => 'main@index',

    'sobre' => 'main@sobre',

    'equipa' => 'main@equipa',

    'servicos' => 'main@servicos',

    'contactos' => 'main@contactos',
   
    'agendar'  => 'main@agendar',

    'perfil_cliente' => 'main@perfil_cliente',

    //***************************************************************

    // Criação e login de Clientes
  
    'login' => 'main@login',

    'novo_cliente' => 'main@novo_cliente',

    'criar_cliente' => 'main@criar_cliente',

    'login_submit' => 'main@login_submit',
    
    'logout' => 'main@logout',

    'mostrar_servicos' => 'main@mostrar_servicos',

    'criar_cliente_sucesso' => 'main@criar_cliente_sucesso',


   //*********************** marcação ***********************
    'confirmar_email' => 'main@confirmar_email',

    'marcar' => 'main@marcar'


];



$acao = 'inicio';

if (isset($_GET['a'])) {

    if (!key_exists($_GET['a'], $rotas)) {

        $acao = 'inicio';
    } else {

        $acao = $_GET['a'];
    }
}

$partes = explode('@', $rotas[$acao]);



$controlador = 'core\\Controllers\\' . ucfirst($partes[0]);
$metodo = $partes[1];

$ctr = new $controlador();

// Agora vou buscar o metodo, da classe controlador
$ctr->$metodo();

