<?php

// Usar métodos da classe studio
use core\classes\Studio;
?>

<div class="main-panel">
  <div class="content-wrapper">

    <?php include("criar_cliente.php");?>


    <!-- ««« TABELA DE DADOS  »»»-->
    <div id="conteudo" class="col-md-12">
      <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">

              <div class="row">
                <div class="col-12">

                  <br><br>
                  <h3 class="font-weight-bold">Tabela de Clientes</h3>





                  <!-- ««««««««««««««««««« HEADERS DA TABELA »»»»»»»»»»»»»»»»»»»»»»»»»»»-->
                  <table class="table table-responsive" id="tabela-clientes">
                    <thead class="text-center">
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">##</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Email</th>
                        <th scope="col">Status</th>
                        <th scope="col">Data de nascimento</th>
                        <th scope="col">Idade</th>
                        <th scope="col">Ligua</th>
                        <th scope="col">Apagado a</th>
                        <th scope="col">último update</th>
                        <th scope="col">Data de Entrada</th>
                      </tr>
                    </thead>
                    <tbody class="text-center">


                      <!-- ««««««««««««««««««« VALORES DA BD  »»»»»»»»»»»»»»»»»»»»»»»»»»»-->
                      <?php foreach ($clientes as $cliente) : ?>

                        <tr>

                          <!-- «« Encriptar ID para as funções e modais-->
                          <?php $value = Studio::aesEncriptar($cliente->id);
                          ?>


                          <!-- BUTTON TRIGGER MODAL APAGAR -->
                          <td scope="row"> <button type="button" class="btn btn-primary delbtn" data-bs-toggle="modal" data-bs-target="#ModalApagar-<?= $value ?>"> Apagar</button></td>



                          <!-- BUTTON TRIGGER MODAL EDITAR -->
                          <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalEditar-<?= $value ?>">Editar</button></td>


                          <td><?= $cliente->nome ?></td>
                          <td><?= $cliente->email ?></td>
                          <td>
                            <!-- SWITCH ATIVO E DESATIVADO -->
                            <div class="form-check form-switch">
                              <input class="form-check-input" name="check" type="checkbox" role="switch" id="flexSwitchCheckDefault" 
                              onclick="location.href = '?a=cliente_apagar_soft&id=<?= $cliente->id ?>&status=<?= $cliente->status ?>'" <?= $cliente->status == "ativo" ? "checked" : "unchecked" ?>>
                              <label class="form-check-label" for="flexSwitchCheckDefault" id="status" ><?= $cliente->status ?> </label>
                            </div>
                          </td>

                          <!-- «««««««««« Data de nascimento no formato de dia/mes/ano-->
                          <td><?= date("d/m/Y", strtotime($cliente->datanasc)) ?> </td>
                          <td><?= $cliente->idade ?> </td>
                          <td><?= $cliente->lingua ?> </td>
                          <td><?= $cliente->deleted_at ?> </td>
                          <td><?= $cliente->last_update ?> </td>
                          <td><?= date("d/m/Y", strtotime($cliente->data_entrada)) ?> </td>
                        </tr>


                        <!-- Modal APAGAR -->



                        <div class="modal fade" id="ModalApagar-<?= $value ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Apagar conta?</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">

                                <p>Você tem certeza que deseja apagar este cliente?</p>
                                <p>Cuidado! Esta ação não pode ser desfeita!</p>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancelar</button>
                                <a href="?a=cliente_apagar_Hard&id=<?= $value ?>"> <button type="button" class="btn btn-primary" onclick="document.getElementById('id01').style.display='none'">Apagar</button></a>
                              </div>
                            </div>
                          </div>
                        </div>



                        <!-- Modal EDITAR -->
                        <!-- <link rel="stylesheet" href="admin/assets/css/app.css"> -->
                        <div class="modal fade" id="ModalEditar-<?= $value ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                          <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Modal Editar</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <div class="container">
                                  <div class="main-body">

                                    <div class="row gutters-sm">
                                      <div class="col-md-4 mb-3">
                                        <div class="card">
                                          <div class="card-body">
                                            <div class="d-flex flex-column align-items-center text-center">



                                              <?php if (($cliente->avatar == "")) : ?>
                                                <label for="file-upload" class="custom-file-upload">
                                                  <div class="rounded-circle" style="width:150">
                                                    <img src="admin\assets\images\icons\user.png" width="100%" height="150" id="foto" style="display: block; border-radius: 50%;">
                                                  </div>
                                                </label>


                                              <?php else : ?>
                                                <label for="file-upload" class="custom-file-upload" title="clique aqui para alterar a foto de perfil">
                                                  <div class="rounded-circle" style="width:150">


                                                    <img src="admin\assets\images\clientes\<?= $cliente->avatar ?>" width="100%" height="150" id="foto" style="display: block; border-radius: 50%;">
                                                  </div>
                                                </label>

                                              <?php endif; ?>




                                              <div class="mt-3" style="margin-top: 0 !important;">



                                                <form action="?a=trocar_foto_cliente" method="POST" enctype="multipart/form-data">


                                                  <input type="hidden" name="id" value="<?= $cliente->id ?>">



                                                  <input type="file" accept="image/*" name="foto" onchange="loadFile(event)" required>
                                                  <button type="submit" class="btn btn-primary " >confirmar foto</button>


                                                </form>
                                              </div>

                                              <!-- <?php if (($cliente->avatar == "")) : ?>

                                             



                                              <?php else : ?>
                                                <img src="admin\assets\images\clientes\<?= $cliente->avatar ?>" class="rounded-circle" width="150" height="150" id="foto">



                                              <?php endif; ?>




                                              <div class="mt-3">


                                                <input type="file" accept="image/*" onchange="loadFile(event)">

                                              </div>
 -->






                                              <div class="mt-3">
                                                <h4><?= $cliente->nome ?></h4>
                                                <p class="text-secondary mb-1">Cliente de nível 1</p>
                                                <p class="text-muted font-size-sm">Conosco desde <?= date("d/m/Y", strtotime($cliente->data_entrada)) ?> </p>

                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="card mt-3">
                                          <ul class="list-group list-group-flush">
                                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                              <h6 class="mb-0"><img src="admin\assets\images\icons\email.png" width="15px" height="15" class="rounded-circle">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <line x1="2" y1="12" x2="22" y2="12"></line>
                                                <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
                                                </svg>E-mail
                                              </h6>
                                              <span class="text-secondary"><?= $cliente->email ?></span>
                                            </li>

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

                                        <div class="card mt-3">
                                          <ul class="list-group list-group-flush">
                                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">


                                              <h6 class="d-flex align-items-center mb-3">Histórico de marcações</h6>








                                            </li>
                                          </ul>
                                        </div>



                                      </div>




                                      <style>
                                        /* ********************************

                                        STYLES ADMIN*/

                                        #foto {
                                          FILTER: progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod=scale)
                                        }

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
                                      <div class="col-md-8">
                                        <div class="card mb-3">
                                          <div class="card-body">
                                            <div class="row">
                                           
                                                <form class="forms-sample" method = "post" action="?a=admin_editar_cliente">

                                                <input type="hidden" name = "id" value = "<?= $value ?>">
                                                  <div class="form-group">
                                                    <label for="exampleInputUsername1">Nome</label>
                                                    <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Username" name = "nome" value=<?= $cliente->nome ?>>
                                                  </div>
                                                  <div class="form-group">
                                                    <label for="exampleInputEmail1">Email</label>
                                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name = "email" value=<?= $cliente->email ?>>
                                                  </div>
                                                  <div class="form-group">
                                                    <label for="exampleInputPassword1">Data de nascimento</label>
                                                    <input type="date" class="form-control" id="exampleInputPassword1" name= "datanasc" value=<?= $cliente->datanasc ?>>
                                                  </div>
                                                  <div class="form-group">
                                                    <label for="exampleSelectGender">Gênero </label>
                                                    <select class="form-control" id="exampleSelectGender" name="genero" value=<?= $cliente->genero ?>>
                                                      
                                                      <option value="feminino">Feminino</option>
                                                      <option value="masculino">Masculino</option>
                                                      <option value="outro">Outro</option>
                                                    </select>
                                                  </div>
                                                  <div class="form-group">
                                                    <label for="exampleSelectGender">Status</label>
                                                    <select class="form-control" id="exampleSelectGender" name="status" value=<?= $cliente->status ?>>
                                                      <option value="ativo">Ativo</option>
                                                      <option value="desativado">Desativado</option>

                                                    </select>
                                                  </div>

                                                  <div class="form-group">
                                                    <label for="exampleTextarea1">Observações</label>
                                                    <textarea class="form-control" id="exampleTextarea1" name = "obs" rows="4" maxlength="400"><?= $cliente->obs ?></textarea>
                                                  </div>
                                                  <button type="submit" class="btn btn-primary mr-2">editar</button>

                                                </form>

                                            </div>
                                          </div>
                                        </div>




                                      </div>
                                    </div>

                                  </div>
                                </div>

                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Ver mais </button>
                              </div>

                            </div>

                          </div>
                        </div>
                </div>

              <?php


                      endforeach; ?>

              </tbody>
              </table>

              </div>

            </div>
          </div>

        </div>
      </div>


    </div>

  </div>







  <!-- JAVASCRIPT DA TABELA DE DADOS -->
  <script>
    $(document).ready(function() {
      $('#tabela-clientes').DataTable({


        language: {

          lengthMenu: "Apresenta _MENU_ clientes por Página ",
          zeroRecords: "Não existem Clientes ",
          info: "Mostrando _PAGE_ de _PAGES_ ",
          infoEmpty: "Sem clientes inseridos",
          infoFiltered: "(Filtrado do número total de clientes ->  _MAX_ )",
          "search": "Pesquisar:"
        },


      });


    });
  </script>



  <script>


  var loadFile = function(event) {
    var output = document.getElementById('foto');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src) // free memory
    }
  };



</script>
