<?php

use core\classes\Database;




?>


<!-- ««««««««««««««««««« BOTÃO DE CRIAR EVENTO  »»»»»»»»»»»»»»»»»»»»»»»»»»»-->
<button type="button" class="btn btn-primary float" data-bs-toggle="modal" data-bs-target="#exampleModal3" style=" z-index: 1;">+</button>


<!-- Modal CRIAR -->
<div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">


                <h5 class="modal-title" id="exampleModalLabel">Criar marcação</h5>

                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <!-- partial -->


                <div class="card">
                    <div class="card-body">


                        <form class="forms-sample" action="?a=criar_evento_admin" method="POST">
                            <div class="form-group">
                                <label for="exampleInputUsername1">Cliente</label>
                                <select class="form-select" name="title">
                                    <option value="Cliente não especificado" selected>Escolha a cliente</option>
                                    <?php foreach ($clients as $client) : ?>

                                        <option value="<?= $client->id ?>"> <?= ucfirst($client->nome) ?></option>

                                    <?php


                                    endforeach; ?>
                                </select>
                                <!-- <input type="text" class="form-control" id="title" name="title"> -->
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Data</label>
                                <input type="date" class="form-control" id="start" name="data">
                            </div>


                            <div class="form-group">
                                <label for="exampleInputEmail1">Hora de inicio</label>
                                <input type="time" class="form-control" id="starttime" value="2018-07-22" name="starttime">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Hora de fim</label>
                                <input type="time" class="form-control" id="endtime" name="endtime">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Serviço</label>
                                <select class="form-select">
                                    <option selected>Escolha o serviço</option>
                                    <?php foreach ($servicos as $servico) : ?>

                                        <option value="<?= $servico->cod_servico ?>"> <?= ucfirst($servico->nome_servico) ?></option>

                                    <?php


                                    endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group" style="float:right">
                                <div>
                                    <input type="color" id="color" name="color" value="#e66465">
                                    <label for="color">Cor</label>
                                </div>
                            </div>

                    </div>










                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

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
    $('#start').attr('min', min);
</script>