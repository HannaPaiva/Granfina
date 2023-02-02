<?php

use core\classes\Database;
use core\classes\Studio;



?>

<!-- Hero Start -->
<div class="herohead">
  <div class="container-fluid">

  </div>
</div>





<div class="container">
  <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">


    <p>Faça parte da família Granfina</p>
    <h2> Registo de novo Cliente</h2>
  </div>
  <div class="row my-5">

    <div class="col-lg-12 col-md-12 col-sm-12 class-item filter-1 wow fadeInUp" data-wow-delay="0.0s">
      <div class="class-wrap">

        <div class="class-text">

          <div class="col-md-5 mx-auto">
            <div class="myform form ">

              <?php $valor_selecionado = "Escolha"; ?>


            </div>
            <form action="?a=criar_cliente" method="post">

              <!-- pattern="(?=.[a-z])(?=.[A-Z])(?=.\d)(?=.[@$!%?&])[A-Za-z\d@$!%?&]{8,20}" -->

              <!-- Cod Client autoicrement-->

              <!-- nome -->
              <div class="my-3">
              <label>Nome</label>
              <input type="text" name="nome" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+" title="O seu formato de nome não é suportado" minlength="1" maxlength="100" placeholder="nome" class="form-control" required>
              </div>

              <!-- email -->
              <div class="my-3">
              <label> Email</label>
              <input type="email" name="email" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9_.]+\.([a-zA-Z]{2,4})" placeholder="email" class="form-control" required>
              </div>

              <!-- senha -->
              <div class="my-3">
                <label> senha </label>
                <input type="password" name="senha" placeholder="senha" pattern="^([a-zA-Z0-9@*#]{8,15})$" class="form-control" required>
              </div>

              <!-- senha2 -->
              <div class="my-3">
                <label> Repetir senha </label>
                <input type="password" name="senha2" placeholder="repetir senha" pattern= "^([a-zA-Z0-9@*#]{8,15})$" class="form-control" required>
              </div>

              <!-- lingua -->
              <div class="my-3 ">
              <label> Escolha a língua </label>
                <select name="lingua" class="form-select" aria-label="Default select example" placeholder = "lingua">
                  <option> Escolha uma língua</option>
                <option value="pt">
                    PT
                  </option>
                  <option value="en">
                    EN
                  </option>

                </select>
              </div>


              <div class="my-3">
                <label> Data de nascimento </label>
                <input type="date" name="datanasc" class="form-control" required>
              </div>



              <div class="my-3 form-control">
                <label> Género: </label>
                
                <input type="radio" id="feminino" name="genero" value="feminino" checked>
                <label for="feminino">Feminino</label>



                <input type="radio" id="masculino" name="genero" value="masculino">
                <label for="masculino">Masculino</label>



                <input type="radio" id="outro" name="genero" value="Outro">
                <label for="outro">Outro</label>
              </div>


              <!-- telemovel -->

              <!-- <div class="my-3">
                    <label> Telemóvel </label>
                    <input type="text" name="telemovel" placeholder="telemovel" class="form-control">
                </div> -->

              <!-- botão submit -->
              <div class="my-4">
                <input type="submit" name="submit" value="criar conta" class="btn btn-primary">
              </div>


              <?php

              if (isset($_SESSION['erro'])) : ?>

                <div class="alert-danger" text-center p2>

                  <?= $_SESSION['erro'] ?>
                  <?php unset($_SESSION['erro']) ?>
                </div>
              <?php endif; ?>


            </form>

          </div>
        </div>
      </div>



    </div>
  </div>
</div>


</div>
</div>