<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top " id="mainNav" >
    <a class="navbar-brand" href="{{route('index')}}"><h1 class="badge badge-success">SGM</h1></a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCurso" aria-control="navbarCurso" aria-expanded="false" aria-label="Navegação Toggle">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div id="navbarCurso" class="collapse navbar-collapse">
        <ul class="navbar-nav navbar-sidenav" id="linksaccordion" >
            <li class="nav-item" data-toggle="tooltip" data-placement="right" style="border-top:2px solid green;margin-top:8px;">
                <a class="nav-link" href="{{route('index')}}">
                    <i class="fa fa-fw fa-home" style="font-size:20px;"></i>
                    <span class="nav-link-text" >Principal</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right">
                <a class="nav-link nav-link-collapse collapse" href="#linkscomponentes" data-toggle="collapse" data-parent="#linksaccordion">
                    <i class="fa fa-fw fa-file" style="font-size:20px;"></i>
                    <span class="nav-link-text">Documentos</span>
                </a>
                <ul class="sidenav-second-level collapse" id="linkscomponentes">
                    <li>
                        <a href="#">Gerar Atas</a>
                    </li>
                    <li>
                        <a href="#">Gerar Relatório</a>
                    </li>
                </ul>
            </li>
            {{-- <li class="nav-item" data-toggle="tooltip" data-placement="right">
                <a @if($current == "user") class="nav-link text-dark" @else class="nav-link" @endif href="{{route('user.edit', Auth::id())}}">
                    <i class="fa fa-fw fa-wrench" style="font-size:20px;"></i>
                    <span class="nav-link-text">Editar Perfil</span>
                </a>
            </li> --}}
            <li class="nav-item" data-toggle="tooltip" data-placement="right">
                    <a class="nav-link nav-link-collapse collapse" href="#linkPerfil" data-toggle="collapse" data-parent="#linksaccordion">
                        <i class="fa fa-fw fa-user-circle" style="font-size:20px;"></i>
                        <span class="nav-link-text">Perfil</span>
                    </a>
                    <ul class="sidenav-second-level collapse" id="linkPerfil">
                        <li>
                            <a href="{{route('user.index')}}">
                                <i class="fa fa-fw fa-user"></i>
                                Visualizar Perfil
                            </a>
                        </li>
                        <li>
                            <a href="{{route('user.edit', Auth::id())}}">
                                <i class="fa fa-fw fa-wrench"></i>
                                Editar Perfil
                            </a>
                        </li>
                    </ul>
                </li>
        </ul>
        <ul class="navbar-nav sidenav-toggler">
            <li class="nav-item">
                <a id="sidenavToggler" class="nav-link text-center" style="background:	#E0E0E0;">
                    <i class="fa fa-fw fa-angle-left"></i>
                </a>
            </li>
        </ul>
        {{-- <ul class="navbar-nav ml">
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
                                Alguém respondeu seu tópico!
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
        </ul> --}}
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                {!! Form::open(['route'=>'logout']) !!}
                <div class="nav-link" href="{{ route('logout') }}">
                    <label for="id" style="cursor:pointer;" class="text-success">
                        <i class="fa fa-sign-out">
                            {!! Form::submit('Logout', ['class'=>'badge badge-success', 'id'=>'id']) !!}
                        </i>
                        Sair
                    </label>
                </div>
                {!! Form::close() !!}
            </li>
        </ul>
    </div>
</nav>