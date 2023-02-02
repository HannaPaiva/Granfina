<?php


// die(password_hash('123', PASSWORD_DEFAULT));
session_cache_expire(10);
session_start();


require_once('../vendor/autoload.php');



require_once('../core/rotas.php');


//criar objeto da classe database
// $bd = new Database();
// $clientes = $bd->select("SELECT * FROM clientes");
// echo "<pre>";
// print_r($clientes);

// echo "<br>";
// echo "<br>";


// echo $clientes[0]-> cli_nome . "<br>" ; 

// echo $clientes[2]-> cli_nome . "<br>" ; 
?>



