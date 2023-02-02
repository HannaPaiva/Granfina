<!DOCTYPE html>
<html lang="pt-PT">

<head>
    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php

    use core\classes\Studio;

    ?>
    <title> <?= APP_NAME . ' ' . APP_VERSION ?></title>

    <link rel="icon" type="image/x-icon" href="assets/images/icons/icon.png">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="admin/assets/css/app.css">
    <link rel="stylesheet" type="text/css" href="../assets/dataTables/datatables.min.css" />



    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="../assets/dataTables/datatables.min.js"></script>
    <script type="text/javascript" src="../assets/dataTables/datatables.min.js"></script>



    <link href='admin\assets\fullcalendar\lib\main.css' rel='stylesheet' />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src='admin\assets\fullcalendar\lib\main.js'></script>
    <script src="admin\assets\fullcalendar\locales\pt-br.js"></script>


    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="assets/lib/flaticon/font/flaticon.css" rel="stylesheet">
    <link href="assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <link rel="icon" type="image/x-icon" href="admin\assets\images\icons\logos\logo_rosa.png">






    <!-- <link rel="stylesheet" href="assets/css/app.css"> -->
    <link rel="stylesheet" href="assets/css/style.css">

<style>
  
</style>

</head>


<body>



    <!-- Nav Bar Start -->
    <div class="navbar nav-sticky navbar-dark">
        <div class="container-fluid">
            <a href="?a=inicio" class="navbar-brand">Granfina<span></span></a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>




            <?php if (Studio::adminLogado()) : ?>



                <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
                    <div class="navbar-nav ml-auto">
                        <a href="?a=minha_conta" class="nav-item nav-link active"> A minha conta </a>
                        <a class="nav-link" aria-current="page" href="?a=admin_logout">logout</a>
                    </div>











                <?php else : ?>



                    <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
                        <div class="navbar-nav ml-auto">
                            <a href="/" class="nav-item nav-link active"> vista de visitante</a>
                        </div>







                    <?php endif; ?>


                    </div>
                </div>
        </div>
    </div>




    </head>