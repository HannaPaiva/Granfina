
<!-- NAV  -->
<!-- 
<div class="container-fluid ">
  <div class="row mb-3">

    <div class="col-md-3">
      <div class="sideb">

        <div class="mb-3">
          <a href="?a=inicio">Início </a>
        </div>
        <div class="mb-3">
          <a href="?a=teste">Clientes </a>
        </div>
        <div class="mb-3">
          <a href=" #">Calendário</a>
        </div>
      </div>

https://docs.mobiscroll.com/5-15-1/eventcalendar#event-onEventClick


    </div> -->








<div class="container-fluid overflow-hidden sideb">
    <div class="row vh-100 overflow-auto">
        <div class="col-3 col-sm-3 col-xl-2 px-sm-2 px-0 bg-dark d-flex sticky-top">
            <ul class="nav nav-pills flex-sm-column flex-row flex-nowrap flex-shrink-1 flex-sm-grow-0 flex-grow-1 mb-sm-auto mb-0 justify-content-center align-items-center align-items-sm-start" id="menu">

                <li>
                    <a href="?a=teste" class="nav-link px-sm-0 px-2">
                        <i class="fs-5 bi-table"></i><span class="ms-1 d-none d-sm-inline">Clientes</span></a>
                </li>
                <li>
                    <a href="?a=calendario" class="nav-link px-sm-0 px-2">
                        <i class="fs-5 bi-table"></i><span class="ms-1 d-none d-sm-inline">Calendário</span></a>
                </li>

                <li>
                    <a href="?a=galeria" class="nav-link px-sm-0 px-2">
                        <i class="fs-5 bi-table"></i><span class="ms-1 d-none d-sm-inline">Galeria</span></a>
                </li>

                <li class="dropdown">
                    <a href="#" class="nav-link dropdown-toggle px-sm-0 px-2" id="dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fs-5 bi-bootstrap"></i><span class="ms-1 d-none d-sm-inline">Gerir</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdown">
                        <li><a class="dropdown-item" href="?a=horarios">Horários</a></li>
                        <li><a class="dropdown-item" href="#">Funcionários</a></li>
                        <li><a class="dropdown-item" href="#">Serviços</a></li>
                        <li><a class="dropdown-item" href="#">Marcações</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Sign out</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="nav-link px-sm-0 px-2">
                        <i class="fs-5 bi-grid"></i><span class="ms-1 d-none d-sm-inline">Produtos</span></a>
                </li>
                <li>
                    <a href="#" class="nav-link px-sm-0 px-2">
                        <i class="fs-5 bi-people"></i><span class="ms-1 d-none d-sm-inline">Faturação</span> </a>
                </li>
            </ul>



            <div class="dropdown py-sm-3 mt-sm-auto ms-auto ms-sm-0">
                <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="admin/assets/images/icons/icon.png" width="28" height="28" class="rounded-circle">
                    <span class="d-none d-sm-inline mx-1"><?= $_SESSION['admin'] ?></span>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                    <li><a class="dropdown-item" href="#">New project...</a></li>
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="?a=admin_logout">Sair</a></li>
                </ul>
            </div>


        </div>

