<?php
namespace core\controllers;
use core\classes\Studio;
use core\classes\Database;
use core\classes\EnviarEmail;
use core\models\Clientes;
use core\models\Marcacoes;


$a = 1;
$bd = new Database();
$marcacao = new Marcacoes();

$results = $marcacao->select_servicos($a);


$parametros = [

  ':id' =>  $_SESSION['cliente'],

];


$results2 = $bd->select("SELECT * FROM clientes WHERE id = :id", $parametros);



$data = [
  'servicos' => $results,
  'clientes' => $results2
];

// Studio::printData($data);

extract($data);
?>







<!-- Hero Start -->
<div class="hero">
  <div class="container-fluid">
    <div class="row align-items-center">
      <div class="col-sm-12 col-md-6"><br><br><br><br>
        <div class="hero-text">
          <h1>Fazer marcação</h1>



        </div>
      </div>

    </div>
  </div>
</div>
<!-- Hero End -->


<!-- Price Start -->
<div class="price">
  <div class="container">
    <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
      <p>Reserve uma hora conosco!</p>
      <h2>Preencha os espaços a seguir</h2>
    </div>
    <div class="row">
      <div class="col-md-4 wow fadeInUp" data-wow-delay="0.0s">


        <div class="price-item">
          <div class="price-header">
            <div class="price-title">
              <h2>Categoria</h2>
            </div>

          </div>
          <div class="price-body">
            <div class="price-description">

              <center>
                <div style="width: 300px;">

                  <form method="POST" action="?a=marcar">
                    <select class="form-select" required>
                      <option selected>Escolha a categoria</option>
                      <?php foreach ($categorias as $categoria) : ?>

                        <option value="<?= $categoria->nome ?>"> <?= ucfirst($categoria->nome) ?></option>

                      <?php


                      endforeach; ?>
                    </select>

                </div>
            </div>
          </div>

        </div>
      </div>
      </center>
      <!-- <div class="col-md-4 wow fadeInUp" data-wow-delay="0.3s">
        <div class="price-item featured-item">
          <div class="price-header">

            <div class="price-title">
              <h2>Serviços</h2>
            </div>

          </div>
          <div class="price-body">
            <div class="price-description">

              <center>
                <div style="width: 300px;">

                  <form>
                    <select class="form-select" id="mySelect">
                      <option selected>Escolha o serviço</option>



                    </select>
                  </form>
              </center>
            </div>
          </div>

        </div>
      </div> -->

      <div class="col-md-4 wow fadeInUp" data-wow-delay="0.3s">
        <div class="price-item featured-item">
          <div class="price-header">

            <div class="price-title">
              <h2>Quando</h2>
            </div>

          </div>
          <div class="price-body">

            <center>
              <div style="width: 300px;">

                <input type="date" class="form-control" id="dt" name="data" required>


              </div>


            </center>

          </div>

        </div>
      </div>




 <div class="col-md-4 wow fadeInUp" data-wow-delay="0.0s">

      
        <div class="price-item">
          <div class="price-header">
            <div class="price-title">
              <h2>Hora</h2>
            </div>

          </div>
          <div class="price-body">
            <div class="price-description">

              <center>
                <div style="width: 300px;">
                   <?php foreach ($clientes as $cliente) : ?>
                <input type="hidden" value = "<?= $cliente-> nome ?>" id = "title" name = "title">

                <?php


      endforeach; ?>
                 <input type="time" class = "form-control" name = "starttime" required>

                </div>
            </div>
          </div>

        </div>
      </div>
      </center>


    </div>
  </div>
</div>

<div class="about wow fadeInUp" data-wow-delay="0.1s">
  <center>
    <div class="about-text">

      <button type="submit" class = "btn btn-primary">Marcar</button>
    </div>
  </center>
</div>




</form>





<!-- About End -->


<script>
  //Display Only Date till today //

  var dtToday = new Date();
  var month = dtToday.getMonth() + 1; // getMonth() is zero-based
  var day = dtToday.getDate();
  var year = dtToday.getFullYear();


  if (month < 10)
    month = '0' + month.toString();
  if (day < 10)
    day = '0' + day.toString();

  var min = year + '-' + month + '-' + day;
  $('#dt').attr('min', min);
</script>













<script>
  function mostrar_servicos(str) {

    e.preventDefault();
    if (str == "") {

      document.getElementById("mySelect").innerHTML = "";
      return;
    }



    var xmlhttp = new XMLHttpRequest();




    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {

        <?php foreach ($servicos as $servico) { ?>

          var x = document.createElement("OPTION");
          x.setAttribute("value", "volvocar");
          var t = document.createTextNode("Volvo");
          x.appendChild(t);
          document.getElementById("mySelect").appendChild(x);



        <?php } ?>


      }
    }


    xmlhttp.open("GET", "?a=mostrar_servicos&id=" + str, true);
    xmlhttp.send();
  }
</script>