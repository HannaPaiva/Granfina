
<?php

use core\classes\Database;

$bd = new Database();

$clientes = $bd->select("SELECT COUNT(*) as total FROM clientes");

$funcionarios = $bd->select("SELECT COUNT(*) as total FROM funcionarios");

$marcacoes = $bd->select("SELECT COUNT(*) as total FROM calendario");


$hoje = $bd->select("SELECT COUNT(*) as total FROM calendario WHERE DATE(start) = CURDATE()");





$data = [
    'clientes' => $clientes,
    'funcionarios' => $funcionarios,
    'marcacoes' => $marcacoes,
    'hoje' => $hoje 
];

extract($data);
?>


<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-md-12 grid-margin">
        <div class="row">
          <div class="col-12 col-xl-8 mb-4 mb-xl-0">
            <h3 class="font-weight-bold">Bem-vindo, <?= $_SESSION['admin_nome'] ?></h3>
            <h6 class="font-weight-normal mb-0">Está tudo a correr bem. Você tem <span class="text-primary">0 notificações!</span></h6>
          </div>
          <div class="col-12 col-xl-4">
            <div class="justify-content-end d-flex">
              <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                <button class="btn btn-sm btn-light bg-white dropdown-toggle" type="button" id="dropdownMenuDate2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                  <i class="mdi mdi-calendar"> </i> Hoje:<?= date('d/m/Y'); ?>
                </button>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate2">
                  <a class="dropdown-item" href="#">Janeiro - Março</a>
                  <a class="dropdown-item" href="#">Março - Junho</a>
                  <a class="dropdown-item" href="#">Junho - Agosto</a>
               
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6 grid-margin stretch-card">
        <div class="card tale-bg">
          <div class="card-people mt-auto">

          <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>


<div class="wrapper">
<canvas id="round" height="200" style="width: 100%"></canvas>
</div>

<script>



 
  var chart = new Chart(round, {
    type: "doughnut",
    data: {
      labels: [
      
        "Lucros",
        "Despesas",
     
      ],
      labels2: [
        "Valor dos lucros",
        "Valor das despesas",
    
 
       
      ],

      
      datasets: [
        {
          data: [6, 5],
          backgroundColor: [
            // "rgb(255, 99, 132)",
            "rgb(200, 162, 235)",
            "rgb(26, 99, 132)",
            // "#1F3BB3",
            // "#FDD0C7",
            // "#52CDFF",
            // "#81DADA",
            
          ],

          hoverOffset: 4,
        },
      ],
    },
    options: {
      legend: {
        position: "bottom", // place legend on the right side of chart
        labels: {
          usePointStyle: true,
        },
        

      },

      animationEasing: "easeOutBounce",
      animateRotate: true,
      animateScale: false,
    
      maintainAspectRatio: true,
      showScale: true,

      tooltips: {
        backgroundColor: "#fff",
        titleFontSize: 14,
        titleFontColor: "#0B0F32",
        bodyFontColor: "#737F8B",
        bodyFontSize: 11,
        displayColors: false,
        
        callbacks: {
            title: function(tooltipItem, data) {
              return data['labels2'][tooltipItem[0]['index']];
            },
            label: function(tooltipItem, data) {
              return data['datasets'][0]['data'][tooltipItem['index']];
            }
          },
        
      },
    },
  });
</script>
          </div>
        </div>
      </div>


      <div class="col-md-6 grid-margin transparent" >
        <div class="row">
          <div class="col-md-6 mb-4 stretch-card transparent">
            <div class="card card-tale" >
              <div class="card-body">
                <p class="mb-4">Marcações de hoje</p>
                <?php foreach ($hoje as $marcar_hoje) : ?>
                <p class="fs-30 mb-2"><?= $marcar_hoje->total?></p>
                <?php endforeach; ?>
             
              </div>
            </div>
          </div>
          <div class="col-md-6 mb-4 stretch-card transparent">
            <div class="card card-dark-blue">
              <div class="card-body">
      
                <p class="mb-4">Total de marcações</p>
                <?php foreach ($marcacoes as $marcacao) : ?>
                <p class="fs-30 mb-2"><?= $marcacao->total?></p>
                <?php endforeach; ?>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
            <div class="card card-light-blue">
              <div class="card-body">
                <p class="mb-4">Número de funcionários</p>
                <?php foreach ($funcionarios as $funcionario) : ?>
                <p class="fs-30 mb-2"><?= $funcionario->total?></p>
                <?php endforeach; ?>
            
              </div>
            </div>
          </div>
          <div class="col-md-6 stretch-card transparent">
            <div class="card card-light-danger">
              <div class="card-body">
                <p class="mb-4">Número de clientes cadastrados</p>
                <?php foreach ($clientes as $cliente) : ?>
                <p class="fs-30 mb-2"><?= $cliente->total?></p>
                <?php endforeach; ?>
             
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">


            <p class="card-title" style="text-transform: none;">Despesas e lucros por ano</p>
            <!-- <p class="font-weight-500">The total number of sessions within the date range. It is the period time a user is actively engaged with your website, page or app, etc</p> -->
       
            <canvas id="order-chart"></canvas>




          </div>
        </div>
      </div>
      <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">


            <div class="d-flex justify-content-between">
              <p class="card-title" style="text-transform: none;">Despesas e lucros por mês</p>
              
            </div>
            <!-- <p class="font-weight-500">The total number of sessions within the date range. It is the period time a user is actively engaged with your website, page or app, etc</p> -->
            <div id="sales-legend" class="chartjs-legend mt-4 mb-2"></div>
            <canvas id="sales-chart"></canvas>




          </div>
        </div>
      </div>
    </div>
   

      </div>
    </div>
  </div>