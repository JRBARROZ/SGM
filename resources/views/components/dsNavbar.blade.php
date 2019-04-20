<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.html">Bem vindo, Jhonatas!</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCurso" aria-control="navbarCurso" aria-expanded="false" aria-label="Navegação Toggle">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div id="navbarCurso" class="collapse navbar-collapse">
        <ul class="navbar-nav navbar-sidenav" id="linksaccordion">
            <li class="nav-item" data-toggle="tooltip" data-placement="right">
                <a class="nav-link" href="#">
                    <i class="fa fa-fw fa-home"></i>
                    <span class="nav-link-text">Principal</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right">
                <a class="nav-link" href="#">
                    <i class="fa fa-fw fa-user"></i>
                    <span class="nav-link-text">Perfil</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right">
                <a class="nav-link nav-link-collapse collapse" href="#linkscomponentes" data-toggle="collapse" data-parent="#linksaccordion">
                    <i class="fa fa-fw fa-file"></i>
                    <span class="nav-link-text">Documentos</span>
                </a>
                <ul class="sidenav-second-level collapse" id="linkscomponentes">
                    <li>
                        <a href="login.html">Gerar Atas</a>
                    </li>
                    <li>
                        <a href="recuperar.html">Gerar Relatório</a>
                    </li>
                </ul>
            </li>
        </ul>
        <ul class="navbar-nav sidenav-toggler">
            <li class="nav-item">
                <a id="sidenavToggler" class="nav-link text-center">
                    <i class="fa fa-fw fa-angle-left"></i>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav ml">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-fw fa-bell"></i>
                    <span class="d-lg-none">
                        Alertas
                        <span class="badge badge-pill badge-warning">5 novos</span>
                    </span>
                    <span class="indicator text-warning d-none d-lg-block">
                        <i class="fa fa-fw fa-circle"></i>
                    </span>
                </a>
                <div class="dropdown-menu" aria-labelledby="alertsDropdown">
                    <h6 class="dropdown-header">Novos Alertas</h6>
                    <div class="dropdown-divider"></div>
                    <a  class="dropdown-item" href="#">
                        <span class="text-success">
                            <strong>
                                <i class="fa fa-fw fa-long-arrow-up"></i>
                                Atualização de Estado
                            </strong>
                        </span>
                        <span class="small float-left text-muted">14:30</span>
                        <div class="dropdown-message small">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. 
                        </div>
                        <div class="dropdown-divider"></div>
                    </a>
                </div>    
            </li>   
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fa fa-sign-out"></i>
                    Logout
                </a>
            </li>
        </ul>
    </div>
</nav>