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
  <script src=" {{ asset('js/app.js') }} "></script>
</head>
<body>
  <nav class="navbar navbar-expand-md navbar-dark bg-success ">
    <a href="{{url('/')}}" class="nav-item h4 btn btn-outline-light mt-auto mb-auto">SGM</a>
    <!-- Botão de menu para telas mobile com efeito collapse (aparecer e desaparecer algo) -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Div englobando todo o conteúdo que deverá desaparecer ao diminuir a tela -->
    <div class="collapse navbar-collapse" id="navbar">
      @guest

      <ul class="navbar navbar-nav ml-auto">
        <li class="nav-item">
          <a href="{{ route('login') }}" class="nav-link text-light" 
          onclick="event.preventDefault();
          $.get($(this).attr('href'), function(data) {
            /*optional stuff to do after success */
            $('main').html(data);
          });
          "><span class="fas fa-sign-in-alt mr-2"></span>Entrar</a>
        </li>
        @if (Route::has('register'))
        <li class="nav-item">
          <a href="#" class="nav-link text-light" onclick="event.preventDefault();
          $.get('{{route('register')}}', function(data) {
            /*optional stuff to do after success */
            $('main').html(data);
          });
          "><span class="fas fa-user-plus mr-2"></span>Cadastre-se</a>
        </li>
      </ul>
      @endif
      @else
      <ul class="navbar navbar-nav mr-auto">
        @if (Auth::user()->tipo == 'monitor')
        <li class="nav-item ml-2">
          <a class="nav-link text-light" href="{{ route('monitoria-monitor') }}">Área do monitor</a>
        </li>
        @endif
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
      <ul class="navbar navbar-nav mr-0">
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
    </div>
  </nav>
  <main style="min-height: 61.9vh">
    @yield('content')
  </main>
</body>
<!-- Footer -->
<footer class="page-footer font-small bg-success text-light mt-5 footer navbar-fixed-bottom">
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-md">
        <img  src="https://image.winudf.com/v2/image/ZGV2Lmlnb3J4cDUuaWZfZXN0dWRhbnRlX2ljb25fMTUyMDc3NTY2MV8wMTI/icon.png?w=170&fakeurl=1" class="card card-link bg-success border-0 m-auto">
      </div>
      <div class="col-md">
        <h5 class="text-uppercase mt-3">SGM</h5>
        <p>O projeto SGM tem como objetivo facilitar o método de integração de monitorias com os alunos nos campus IFPE. Com o intuito de apresentar uma plantaforma inovadora, rápida e dinâmica.</p>
      </div>
      <div class="col-md">
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
      <div class="col-md">
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
    </div>
    <div class="footer-copyright text-center py-3">© 2018 Copyright:
      <a href="{{url('/')}}" class="text-light mb-2" style="text-decoration: underline;"> Sistema de Gerenciamento de Monitorias - SGM</a>
    </div>
  </div>
</footer>
</html>
