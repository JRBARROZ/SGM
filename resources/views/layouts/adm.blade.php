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
    <a href="{{url('/')}}" class="nav-item h4 btn btn-outline-light mt-auto mb-auto mr-3">SGM</a>
    
    @guest
    <ul class="navbar navbar-nav ml-auto">
      <li class="nav-item">
        <span class="text-center text-light">Acesso Restrito</span>
      </li>
    @else
    <ul class="navbar navbar-nav mr-auto">
      <li class="nav-item">
        <a href=" {{route('index')}} " class="nav-link text-light">Início</a>
      </li>
      <li class="nav-item">
        <a href="{{ route('monitoria-index') }}" class="nav-link text-light">Monitorias</a>
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
  </nav>
  <main style="min-height: 74.2vh">
    @yield('content')
  </main>
</body>
<!-- Footer -->
<footer class="page-footer font-small bg-success text-light mt-5 footer navbar-fixed-bottom">
  <div class="container-fluid">
    <div class="footer-copyright text-center py-3">© 2018 Copyright:
      <a href="{{url('/')}}" class="text-light mb-2" style="text-decoration: underline;"> Sistema de Gerenciamento de Monitorias - SGM</a>
    </div>
  </div>
</footer>
</html>
