<?php

use core\classes\Database;

$bd = new Database();

$results = $bd->select("SELECT id, nome FROM clientes");




$results_servico = $bd->select("SELECT cod_servico, nome_servico FROM servicos");


$data = [
    'clients' => $results,
    'servicos' => $results_servico
];

extract($data);
?>


<div class="main-panel">
    <div class="content-wrapper">



        <link rel="stylesheet" href="assets/css/template.css">
        <?php include("criar_evento.php"); ?>
        <?php




        $array_eventos = array();
        foreach ($calendario as $eventos) {
            foreach ($eventos as $chave => $valor) {
                $array_eventos[$chave] = $valor;
            }
        }

        ?>
        <style>
            /* ********************************

                                        STYLES ADMIN*/


            .card {
                box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
            }

            .card {
                position: relative;
                display: flex;
                flex-direction: column;
                min-width: 0;
                word-wrap: break-word;
                background-color: #fff;
                background-clip: border-box;
                border: 0 solid rgba(0, 0, 0, .125);
                border-radius: .25rem;
            }

            .card-body {
                flex: 1 1 auto;
                min-height: 1px;
                padding: 1rem;
            }

            .gutters-sm {
                margin-right: -8px;
                margin-left: -8px;
            }

            .gutters-sm>.col,
            .gutters-sm>[class*=col-] {
                padding-right: 8px;
                padding-left: 8px;
            }

            .mb-3,
            .my-3 {
                margin-bottom: 1rem !important;
            }

            .bg-gray-300 {
                background-color: #e2e8f0;
            }

            .h-100 {
                height: 100% !important;
            }


            /* input[type="file"] {

                                          display: none;
                                        } */
        </style>

        <style>
            #calendar {
                max-width: 1100px;
                margin: 0 auto;
                color: black;

            }

            #calendar a {

                color: black;

            }

            .fc .fc-list-table td {
                color: black;
            }
        </style>




        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">


                        <br><br>
                        <h3 class="font-weight-bold">Calendário de Marcações</h3>




                        <div id='calendar' class="fc" style=" z-index: -1;"></div>








                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                var calendarEl = document.getElementById('calendar');

                                var calendar = new FullCalendar.Calendar(calendarEl, {
                                    locale: 'pt-pt',
                                    headerToolbar: {
                                        left: 'prev,next today',
                                        center: 'title',
                                        right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
                                    },

                                    buttonText: {

                                        today: "Hoje",
                                        month: "Mês",
                                        week: "Semana",
                                        day: "Dia",
                                        list: "Agenda"
                                    },
                                    //   initialDate: '2020-09-12',
                                    navLinks: true, // can click day/week names to navigate views
                                    editable: true,
                                    dayMaxEvents: true, // 
                                    selectable: true,
                                    selectMirror: true,
                                    select: function(arg) {


                                        var criar = new bootstrap.Modal(document.getElementById('criar_select'));
                                        var options2 = {
                                            year: 'numeric',
                                            month: 'numeric',
                                            day: 'numeric'
                                        };
                                        $('#criar_select #start').val(arg.startStr);



                                        $("#criar_select").modal('show');


                                    },
                                    eventClick: function(arg) {
                                        // if (confirm('Are you sure you want to delete this event?')) {
                                        //     arg.event.remove()
                                        // }
                                        // var myModal = new bootstrap.Modal(document.getElementById('modal'), options);
                                        // myModal.show()
                                        // alert(arg.event.end);
                                        var options = {
                                            weekday: 'long',
                                            year: 'numeric',
                                            month: 'long',
                                            day: 'numeric',
                                            hour: 'numeric',
                                            minute: 'numeric',
                                            second: 'numeric'
                                        };

                                        var options2 = {
                                            year: 'numeric',
                                            month: 'numeric',
                                            day: 'numeric'
                                        };


                                        var myModal = new bootstrap.Modal(document.getElementById('visualizar'));
                                        $('#visualizar #title').val(arg.event.title);
                                        $('#visualizar #start').val(arg.event.start.toLocaleDateString('fr-CA', options2));
                                        $('#visualizar #end').val(arg.event.end.toLocaleDateString('fr-CA', options2));

                                        $('#visualizar #servico').val(arg.event.servico);

                                        $('#visualizar #starttime').val(arg.event.start.toLocaleTimeString({
                                            hour: '2-digit',
                                            minute: '2-digit'
                                        }));
                                        $('#visualizar #endtime').val(arg.event.end.toLocaleTimeString({
                                            hour: '2-digit',
                                            minute: '2-digit'
                                        }));

                                        // $('#visualizar').text(arg.event.start);
                                        // myModal.arg.title
                                        $("#visualizar").modal('show');
                                        // myModal.show()


                                    },
                                    editable: true,
                                    dayMaxEvents: true, // allow "more" link when too many events

                                    events: [
                                        <?php foreach ($calendario as $evento) { ?> {
                                                title: '<?php echo json_encode($evento["title"]) ?>',
                                                color: '<?php echo ($evento["color"]) ?>',
                                                start: '<?php echo ($evento["start"]) ?>',
                                                end: '<?php echo ($evento["end"]) ?>',

                                                overlap: false,

                                            },

                                        <?php } ?>
                                    ],


                                    eventColor: '#378006'

                                });



                                calendar.render();

                            });
                        </script>


                        <!-- Modal -->
                        <div class="modal" id="visualizar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog moda">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Detalhes do evento</h5>

                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">

                                        <!-- partial -->


                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="card-title">Marcação</h4>

                                                <form class="forms-sample" action="?a=criar_evento_admin" method="POST">

                                                    <div class="form-group">
                                                        <label for="exampleInputUsername1">Cliente</label>
                                                        <input type="text" class="form-control" id="title" name="title">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Data</label>
                                                        <input type="date" class="form-control" id="start" value="2018-07-22" name="data">
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
                                                        <select class="form-select" id="servico">
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
                                                    <!-- 
                                                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                                    <button class="btn btn-light">Cancel</button> -->
                                                </form>
                                            </div>










                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">apagar</button>
                                                <button type="submit" class="btn btn-primary mr-2">Submit</button>
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
</div>




<div class="modal fade" id="criar_select" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

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

                                        <option value="<?= $client->nome ?>"> <?= ucfirst($client->nome) ?></option>
                                 
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

                                        <option value="<?= $servico->nome_servico ?>"> <?= ucfirst($servico->nome_servico) ?></option>

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
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                        <button type="submit" class="btn btn-primary mr-2">Criar evento</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



















