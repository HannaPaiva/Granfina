<?php



$rotas = [

// ***************** Páginas principais do admin

 'inicio' => 'admin@index',
 'admin_login' => 'admin@admin_login',

// ***************** Páginas principais do admin



 // ***************** SIDEBAR

 'calendario' => 'admin@calendario',
 'home_admin' => 'admin@home_admin', 


 'tabela_clientes' => 'admin@tabela_clientes', 
 'tabela_funcionarios' => 'admin@tabela_funcionarios',
 'tabela_servicos' => 'admin@tabela_servicos',

 // ***************** 




 // ***************** FUNÇÕES

 'admin_logout' => 'admin@admin_logout', 
 'cliente_apagar_Hard' => 'admin@cliente_apagar_Hard', 
 'cliente_apagar_soft' => 'admin@cliente_apagar_soft',
 'validar_login'  => 'admin@validar_login',
 'admin_login_submit'  => 'admin@admin_login_submit',
 'mostrar_calendario'  => 'admin@mostrar_calendario',

 // ***************** 


 'horarios' => 'admin@horarios', 

 'dia_semana' => 'admin@dia_semana',

 'servicos' => 'admin@servicos',
 
 'despesas' => 'admin@despesas',


 'apagar_evento' => 'admin@apagar_evento',

  // ***************** tab


  'criar_cliente_button' => 'admin@criar_cliente_button',

  'galeria'  => 'admin@galeria',
  
  'gere_cliente_update'  => 'admin@gere_cliente_update',

  // ***************** 

   'trocar_foto_cliente' => 'admin@trocar_foto_cliente',
  
   'admin_editar_cliente' => 'admin@admin_editar_cliente',

   'criar_evento_admin' => 'admin@criar_evento_admin',

    'funcionario_apagar_Hard'=> 'admin@funcionario_apagar_Hard'



];



// Agora vamos definir uma ação por defeito
// que vai definir o nosso fluxo de código
// e que vai ter o primeiro valor, como sendo inicio
// quando não for enviado nenhum valor vai para inicio



$acao = 'inicio';
// Verifique se a ação na query string

if (isset($_GET['a'])) {
 // Verifca se existe ação nas rotas

 if (!key_exists($_GET['a'], $rotas)) {
 $acao = 'inicio';
 } else {
 // então a ação só pode ser inicio ou loja

 $acao = $_GET['a'];
 }
}
// trata a definição da rota
// repara que o separador é o @ e o explode vai dividir a string
// sacando neste caso main@index o main e o index

$partes = explode('@', $rotas[$acao]);
//var_dump($partes); // Despejar o array

// Controlador, que é a classe onde são utilizados os controlos
//$controlador = ucfirst($partes[0]);
// Criar uma instanciação deste controlador, assim terei o caminho do controlador

$controlador = 'core\\controllers\\' . ucfirst($partes[0]);
// Método que ´a função desta clase controlador
$metodo = $partes[1];
// aqui é a instanciação
$ctr = new $controlador();
// Agora vou buscar o metodo, da classe controlador
$ctr->$metodo();
// por exemplo vou executar a classe que vai ser o controlador
// e o seu método
//echo "$controlador - $metodo";