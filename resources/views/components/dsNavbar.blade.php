<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.html">Bem vindo, Jhonatas</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"data-target="#navbarCurso" aria-control="navbarCurso" aria-expanded="false" aria-label="Navegação Toggle">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div id="navbarCurso" class="collapse navbar-collapse">
        <ul class="navbar-nav navbar-sidenav" id="linksaccordion">
            <li class="nav-item" data-toggle="tooltip" data-placement="right">
                <a class="nav-link" @if($current == 'home') style="color:black;" @endif href="#">
                    <i class="fa fa-fw fa-home"></i>
                    <span class="nav-link-text">Home</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right">
                <a class="nav-link" @if($current == 'user') style="color:black;" @endif href="{{route('painel')}}">
                    <i class="fa fa-fw fa-user"></i>
                    <span class="nav-link-text">Perfil</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right">
                <a class="nav-link nav-link" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                    <i class="fa fa-fw fa-file"></i>
                    <span class="nav-link-text">Documentos</span>
                    
                    <i class="fa fa-fw fa-angle-down"></i>
                </a>
                <ul class="sidenav-second-level collapse" id="collapseExample">
                    <li>
                        <a href="">
                            <i class="fas fa-tasks"></i>
                            Gerar Atas
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="fas fa-chart-line"></i>
                            Gerar Relatório
                        </a>
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
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-sign-out-alt"></i>
                    Logout
                </a>
            </li>
        </ul>
    </div>
</nav>
