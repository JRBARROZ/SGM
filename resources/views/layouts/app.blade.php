<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ config('app.name', 'Laravel') }}</title>

  {{-- fontes --}}
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300'>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:400,700,300'>   
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

  <!-- Styles -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="{{asset('css/register.css')}}">
  <link rel="stylesheet" href="{{asset('css/login.css')}}">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('css/user.css')}}">
  <style>
    .hover:hover{cursor:pointer;background-color:#F0F0F0;}
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-md navbar-dark bg-success ">
    <a href="{{url('/')}}" class="nav-item navbar-brand h4">SGM</a>
    @guest
    <ul class="navbar navbar-nav ml-auto">
      <li class="nav-item">
        <a href="{{ route('login') }}" class="nav-link text-light"><span class="fas fa-sign-in-alt mr-2"></span>Entrar</a>
      </li>
      @if (Route::has('register'))
      <li class="nav-item">
        <a href="{{route('register')}}" class="nav-link text-light"><span class="fas fa-user-plus mr-2"></span>Cadastre-se</a>
      </li>
    </ul>
    @endif
    @else
    <ul class="navbar navbar-nav">
      @if (Auth::user()->tipo == 'monitor')
      <li class="nav-item ml-2">
        <a class="nav-link text-light" href="{{ route('monitoria-monitor') }}">Área do monitor</a>
      </li>
      @endif
      <li class="nav-item ml-2">
        <a href="{{url('/')}}" class="nav-link text-light">Início</a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link text-light">Documentação</a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link text-light">Horários</a>
      </li>
      <li class="nav-item">
        <a href="{{ route('monitoria-index') }}" class="nav-link text-light">Monitoria</a>
      </li>
    </ul>
    <ul class="navbar navbar-nav ml-auto">
      <li class="nav-item">
        <a href="{{ route('user.index') }}" class="nav-link text-light"><span class="fas fa-user mr-2 text-light"></span>{{ Auth::user()->name }}</a>
      </li>
      <li class="nav-item">
        <a href="{{ route('logout') }}" class="nav-link text-light" 
        onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
        <span class="fas fa-sign-out-alt mr-2 text-light"></span>Sair</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
        </form>
      </li>
    </ul>
    @endguest
  </nav>
  <main>
    @yield('content')
  </main>
</body>
<!-- Footer -->
<footer class="page-footer font-small bg-success text-light" style="bottom: 0;position: absolute;width: 100%">

  <!-- Footer Links -->
  <div class="container-fluid text-center text-md-left ">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-6 mt-md-0 mt-3">
        <div class="row" style="bottom: 0;position: absolute;">
          <div class="col">
            <img src="https://image.winudf.com/v2/image/ZGV2Lmlnb3J4cDUuaWZfZXN0dWRhbnRlX2ljb25fMTUyMDc3NTY2MV8wMTI/icon.png?w=170&fakeurl=1" class="card card-link bg-success border-0 ml-0">
          </div>
          <!-- Content -->
          <div class="col mr-4 ">
          <h5 class="text-uppercase mt-3">SGM</h5> 
            <p>O projeto SGM tem como objetivo facilitar o método de integração de monitorias com os alunos nos campus IFPE. Com o intuito de apresentar uma plantaforma inovadora, rápida e dinâmica.</p>
          </div>
        </div>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none pb-3">

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        <h5 class="text-uppercase mt-3">Redes Sociais</h5>

        <ul class="list-unstyled text-light">
          <li>
            <a class="text-light" href="https://github.com/murielson/SGM"><span class="fab fa-github-square btn-lg"> Github</span></a>
          </li>
          <li>
            <a class="text-light" href="#!"><span class="fab fa-facebook-square btn-lg"> Facebook</span></a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        <h5 class="text-uppercase mt-3 ">Colaboradores</h5>

        <ul class="list-unstyled text-light">
          <li>
            <a class="text-light" href="#!"><span class="fas fa-user-tie"> Carlos Monteiro</span></a>
          </li>
          <li>
            <a class="text-light" href="#!"><span class="fas fa-user-tie"> Eduardo Bispo</span> </a>
          </li>
          <li>
            <a class="text-light" href="#!"><span class="fas fa-user-tie"> Fernanda Batista</span>  </a>
          </li>
          <li>
            <a class="text-light" href="#!"><span class="fas fa-user-tie"> Jhonatan Rodrigues</span>  </a>
          </li>
          <li>
            <a class="text-light" href="#!"><span class="fas fa-user-tie"> Silvio Paiva</span>  </a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2018 Copyright:
    <a href="{{url('/')}}"> Sistema de Gerenciamento de Monitorias - SGM</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
</html>