<?php

use core\classes\Database;
use core\classes\Studio;

$bd = new Database();
// var_dump($_SESSION);
// die();

$parametros = [

  ':id' =>  $_SESSION['cliente'],

];




$results = $bd->select("SELECT * FROM clientes WHERE id = :id", $parametros);




$results_marcacoes = $bd->select("SELECT * FROM marcacoes");


$data = [
  'clientes' => $results,
  'marcacoes' => $results_marcacoes
];

extract($data);
// Studio::printData($data);
?>







<!-- Page Header Start -->
<div class="page-header">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2>Teu perfil Granfina</h2>
      </div>

    </div>
  </div>
</div>


<style>
  img {
    border-radius: 50%;
  }
</style>
<!-- Contact Start -->
<div class="contact">
  <div class="container">
    <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
      <p>Consultar dados</p>
      <h2>Teus dados </h2>
    </div>
  </div>
</div>








<!-- Single Post Start-->
<div class="single-content wow fadeInUp">
  <div class="container">
    <div class="row">


      <?php foreach ($clientes as $cliente) : ?>



        <div class="col-md-4 mb-3">
          <div class="card">
            <div class="card-body">
              <div class="d-flex flex-column align-items-center text-center">
                <img src="admin/assets/images/icons/user.png" alt="cliente" class="rounded-circle" width="150">
                <div class="mt-3">
                  <h4><?= ucfirst($cliente->nome) ?></h4>

                  <p class="text-muted font-size-sm"> Entrou a <?= date("d/m/Y", strtotime($cliente->data_entrada))  ?></p>

                </div>
              </div>
            </div>
          </div>
          <div class="card mt-3">
            <ul class="list-group list-group-flush">

              <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter mr-2 icon-inline text-info">
                    <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path>
                  </svg>Twitter</h6>
                <span class="text-secondary">@</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram mr-2 icon-inline text-danger">
                    <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                    <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                    <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                  </svg>Instagram</h6>
                <span class="text-secondary">@</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook mr-2 icon-inline text-primary">
                    <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                  </svg>Facebook</h6>
                <span class="text-secondary">@</span>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-8">
          <div class="card mb-3">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Nome</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  <?= ucfirst($cliente->nome) ?>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Email</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  <?= $cliente->email ?>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Data de nascimento </h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  <?= date("d/m/Y", strtotime($cliente->datanasc)) ?>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Gênero</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  <?= ucfirst($cliente->genero) ?>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Sobre</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  <?= ucfirst($cliente->sobre) ?>
                </div>
              </div>
              <hr>

            </div>

            <div class="row gutters-sm">
              <div class="col-sm-6 mb-3">
                <div class="card h-100">
                  <div class="card-body">
            
                    <h5 class="widget-title">Serviços consultados</h5>
                    <div class="category-widget">
                      <ul>

                       <a href="">  </a>

                      </ul>
                    </div>

                  </div>
                </div>
              </div>
              <div class="col-sm-6 mb-3">
                <div class="card h-100">
                  <div class="card-body">
               
                    <h5 class="widget-title">Histórico de Marcações</h5>
                    <div class="recent-post">
                      <div class="post-item">

                        <div class="post-text">
                          <a href="">    </a>
                          
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
    </div>
  </div>
</div>





<!-- 
            <div class="col-lg-8">
              <div class="single-content wow fadeInUp">



                <center>
                  <div class="rounded-circle" style="width:150px">
                    <img src="admin/assets/images/icons/user.png" alt="Image">
                  </div>
                </center>
                <br>
                <h2>Nome: <?= ucfirst($cliente->nome) ?></h2>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer molestie, lorem eu eleifend bibendum, aug
                  ue purus mollis sapien, non rhoncus eros leo in nunc. Donec a nulla vel turpis consectetur tempor ac vel justo
                  . In hac habitasse platea dictumst. Cras nec sollicitudin eros. Nunc eu enim non turpis sagittis rhoncus consec
                  tetur id augue. Mauris dignissim neque felis. Phasellus mollis mi a pharetra cursus. Maecenas vulputate augue placera
                  t lacus mattis, nec ornare risus sollicitudin.
                </p>



              </div>

              <div class="single-bio wow fadeInUp">
                <div class="single-bio-img">
                  <img src="img/user.jpg" />
                </div>
                <div class="single-bio-text">
                  <h3>último atendimento realizado por:</h3>
                  <p>
                    Lorem ipsum dolor sit amet elit. Integer lorem augue purus mollis sapien, non eros leo in nunc. Donec a nulla vel turpis tempor ac vel justo. In hac platea dictumst.
                  </p>
                </div>
              </div>


            </div>

            <div class="col-lg-4">
              <div class="sidebar">

                <div class="sidebar-widget wow fadeInUp">
                  <h2 class="widget-title">Categorias consultadas</h2>
                  <div class="category-widget">
                    <ul>

                      <li><a href="">National</a><span>(98)</span></li>



                    </ul>
                  </div>
                </div>



                <div class="sidebar-widget wow fadeInUp">
                  <h2 class="widget-title">Histórico de Marcações</h2>
                  <div class="recent-post">
                    <div class="post-item">

                      <div class="post-text">
                        <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                        <div class="post-meta">
                          <p>By<a href="">Admin</a></p>
                          <p>In<a href="">Design</a></p>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>


              </div>
            </div>
          </div>
        </div>
    </div>

  </div>
</div> -->
<?php


      endforeach; ?>
<!-- Single Post End-->


<br><br><br><br><br><br><br><br><br><br>
