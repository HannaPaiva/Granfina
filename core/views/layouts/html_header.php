<!DOCTYPE html>
<html lang="pt-PT">

<head>
    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php

    use core\classes\Studio;
    //$_SESSION['cliente'] = 1; 

    ?>
    <title> <?= APP_NAME . ' ' . APP_VERSION ?></title>

    <link rel="icon" type="image/x-icon" href="admin\assets\images\icons\logos\logo_rosa.png">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/css/all.min.css">
    <!-- <link rel="stylesheet" href="assets/css/app.css"> -->
    <link rel="stylesheet" href="assets/css/style.css">





    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="assets/lib/flaticon/font/flaticon.css" rel="stylesheet">
    <link href="assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <script type="text/javascript" src="assets/js/jquery.min.js"></script>



    <style>
        @media screen and (min-width: 768px) {
            .navbar-ex1-collapse {
                height: auto !important;
            }
            .dropdownMenuButton1{
                display: block;
                text-align: center;
            }
        }
    </style>

</head>


<body>


    <!-- Top Bar Start -->
    <div class="top-bar d-none d-md-block">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="top-bar-left">
                        <div class="text">
                            <i class="far fa-clock"></i>
                            <h2>8:00 - 21:00</h2>
                            <p>Seg - Sáb</p>
                        </div>
                        <div class="text">
                            <i class="fa fa-phone-alt"></i>
                            <h2>+351 963 188 912</h2>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="top-bar-right">
                        <div class="social">
                            <a href=""><i class="fab fa-twitter"></i></a>
                            <a href=""><i class="fab fa-facebook-f"></i></a>
                            <!-- <a href=""><i class="fab fa-linkedin-in"></i></a> -->
                            <a href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Top Bar End -->

    <!-- Nav Bar Start -->
    <div class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container-fluid">
            <a href="?a=inicio" class="navbar-brand"> Granfina </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
                <div class="navbar-nav ml-auto">
                    <a href="?a=inicio#sobre" class="nav-item nav-link active" onclick="smoothScroll(document.getElementById('sobre'))">Sobre</a>
                    <a href="?a=inicio#servicos " class="nav-item nav-link" onclick="smoothScroll(document.getElementById('servicos'))">Serviços</a>
                    <a href="?a=inicio#precos" class="nav-item nav-link" onclick="smoothScroll(document.getElementById('precos'))">Preços</a>
                    <a href="?a=inicio#equipa" class="nav-item nav-link" onclick="smoothScroll(document.getElementById('equipa'))">Equipa</a>
                    <a href="?a=inicio#contactos" class="nav-item nav-link" onclick="smoothScroll(document.getElementById('contactos'))">Contactos</a>
                    <a href="?a=inicio#galeria" class="nav-item nav-link" onclick="smoothScroll(document.getElementById('galeria'))">Galeria</a>


                    <?php if (Studio::clienteLogado()) : ?>

                        <div class="dropdown">
                            <a class=" nav-link dropdown-toggle nav-link dropdown-toggle" role="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" >
                                <i class="fas fa-user mr-6"></i> <?= $_SESSION['email'] ?> </a>
                               
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="?a=perfil_cliente"> <i class="fas fa-user mr-6"></i> Meu perfil </a></li>

                                <li><a class="dropdown-item" href="?a=logout">sair</a></li>

                            </ul>
                        </div>


                        <a class="btn btn-nav-login" href="?a=agendar">Marcar</a>




                        <!-- <div class="collapse navbar-collapse dropdown" id="navbarNavDarkDropdown">



                            <ul class="navbar-nav">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fas fa-user mr-6"></i> <?= $_SESSION['email'] ?> </a>


                                    <ul class="dropdown-menu " aria-labelledby="navbarDarkDropdownMenuLink">
                                        <li><a class="dropdown-item" href="?a=perfil_cliente"> <i class="fas fa-user mr-6"></i> Meu perfil </a></li>

                                        <li><a class="dropdown-item" href="?a=logout">sair</a></li>
                                    </ul>
                                </li>
                            </ul>
                       

                        </div> -->







                    <?php else : ?>





                        <a class="btn btn-nav-register" href="?a=novo_cliente">Registar</a>
                        <li></li>
                        <a class="btn btn-nav-login" href="?a=login">Login</a>








                    <?php endif; ?>


                </div>
            </div>
        </div>
    </div>


    <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a href="?a=inicio"><img id="logo" src="assets/images/icons/logo.png" alt="logo.png" width="200px"> </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">

                <div class="navbar-nav ml-auto mb-2 mb-lg-0 navbar-collapse justify-content-end">
                    <li class="nav-item ">
                        <a class="nav-link" aria-current="page" href="?a=inicio#sobre">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?a=inicio#equipa">Equipa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="?a=servicos">Serviços</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?a=inicio#contactos">Contactos</a>
                    </li>

                    
                    <li class="nav-item">
                        <a  class="nav-link" href="?a=agendar">Agendar marcação</a>
                    </li>

                   
                    <?php if (Studio::clienteLogado()) : ?>
                   


                        <br>
                        <div class="dropdown">

                            <a href="?a=minha_conta" class="nav-item dropdown-toggle">
                                <i class="fas fa-user mr-6"></i> <?= $_SESSION['email'] ?> </a>

                            <div class="dropdown-content">
                                <a href="?a=minha_conta">Minha conta</a>
                                <a href="#">Histórico de marcações</a>
                                <a href="?a=logout">sair</a>
                            </div>
                        </div>



                    <?php else : ?>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="?a=login"> login </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="?a=novo_cliente"> Criar conta </a>
                        </li>
                 

                    <?php endif; ?>







                </div>



            </div>
        </div>
    </nav>

 -->

    </head>