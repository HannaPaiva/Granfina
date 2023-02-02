
<?php

use core\classes\Database;

$bd = new Database();

$horarios = $bd->select("SELECT * from horario_funcionamento");







$data = [
    'horarios' => $horarios,

];

extract($data);
?>


<div class="main-panel">
    <div class="content-wrapper">


        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-12">

                                <br><br>
                                <br>



                                <form action="?a=dia_semana" method = "POST">

                    
         
         

                                    <h3 class="font-weight-bold">Horários</h3>
                                    <?php foreach ($horarios as $horario) : ?>

                                    <div class="form-check form-switch">
                                        <label for="flexSwitchCheckDefault"> <?= $horario->dia_semana ?></label>
                                        &emsp;&emsp;&emsp;  <input class="form-check-input" name="check" type="checkbox" role="switch" id="flexSwitchCheckDefault" 
                                         <?= $horario->aberto == "aberto" ? "checked" : "unchecked" ?>>
                                         <label for="flexSwitchCheckDefault"> <?= $horario->aberto ?></label>
                                    </div>

                                   <br> <input type="hidden" value = "<?= $horario->id_dia ?>" name = "id" >
                                        <input type="hidden" value = "<?= $horario->aberto ?>" name = "aberto" >
                                    <?php endforeach; ?>



                                    <br><br>

                                
                                </form>






                            </div>



                        </div>

                    </div>



                </div>

            </div>

        </div>

    </div>