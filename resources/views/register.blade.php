@extends('layouts.app')

@section('content')

    <div class="signup__container" style="width: 100%;height: 100%;">
    <div class="container__child signup__thumbnail">

      <div class="thumbnail__content text-center">
        <h1 class="heading--primary">Sistema de Gerenciamento de Monitoria</h1><br>
        <h2 class="heading--primary">Crie já sua conta</h2>
      </div>
      <div class="thumbnail__links">
        <ul class="list-inline m-b-0 text-center">
          <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
          <li><a href="https://github.com/Murielson/SGM" target="_blank"><i class="fa fa-github"></i></a></li>
          <li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
        </ul>
      </div>
      <div class="signup__overlay"></div>
    </div>
    <div class="container__child signup__form">
      <form action="{{route('register')}}" method="POST">
        @csrf

        <div class="row">
          <div class="col-md-6 col-xs-6">
            <div class="form-group">
            <label for="name">Nome</label>
            <input class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" data-width="100%" type="text" name="name" value="{{ old('name') }}" id="name" required autofocus/>
              @if ($errors->has('name'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
              @endif

          </div>
        </div>

        <div class="row">
           <div class="col-md-6 col-xs-6">
              <div class="form-group">
                <label for="sobrenome">{{ __('sobrenome') }}</label>
                <input class="form-control {{ $errors->has('sobrenome') ? ' is-invalid' : '' }}" type="text" name="sobrenome" value="{{ old('sobrenome') }}" id="sobrenome" required autofocus/>
                @if ($errors->has('sobrenome'))
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('sobrenome') }}</strong>
                  </span>
                @endif
              </div>
            </div>
          </div>
        </div>

        <div class="form-group">
          <label for="matricula">{{ __('matricula') }}</label>
          <input class="form-control {{ $errors->has('matricula') ? ' is-invalid' : '' }}" type="text" name="matricula" id="matricula" required autofocus/>
          @if ($errors->has('matricula'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('matricula') }}</strong>
            </span>
          @endif

        </div>

        <div class="row">
    <div class="col-md-4 col-xs-4">
      <div class="form-group">
        <label for="Cursos">Curso</label>
        <select class="form-control" data-size="5" data-live-search="true" data-width="100%" name="Cursos" required>
              <option selected disabled>Selecionar</option>
              <option value="0">Informática para Internet</option>
              <option value="1">Logística</option>
              <option value="2">Gestão da Qualidade</option>
          </select>
      </div>
    </div>
    <div class="col-md-4 col-xs-4">
      <div class="form-group">
        <label for="periodo">Período</label>
        <input type="number" class="form-control" data-width="100%" name="periodo" required>
      </div>
    </div>
    <div class="col-md-4 col-xs-4">
      <div class="form-group">
        <label for="Turnos">Turno</label>
        <select class="form-control" data-size="5" data-live-search="true" data-width="100%" name="Turnos" required>
              <option selected disabled>Selecionar</option>
              <option>Manhã</option>
              <option>Tarde</option>
          </select>
      </div>
    </div>
  </div>

        <div class="form-group">
          <label for="email">{{ __('E-Mail') }}</label>
          <input class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" type="text" name="email" id="email" required autofocus/>
          @if ($errors->has('email'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
          @endif

        </div>

        <div class="row">
          <div class="col-md-6 col-xs-6">
            <div class="form-group">
            <label for="passwordRepeat">{{ __('Senha') }}</label>
            <input class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" data-width="100%" type="password" name="password" id="password" required autofocus/>
            @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
          </div>
        </div>

        <div class="row">
        	 <div class="col-md-6 col-xs-6">
      	  <div class="form-group">
          <label for="password-confirm">{{ __('Confirm Password') }}</label>
          <input class="form-control" type="password" name="password_confirmation" required autofocus/>
          </div>
          </div>
        </div>
        </div>

        <div class="m-t-lg">
          <ul class="list-inline" style="padding-left: 40px !important;">
            <li>
              <input class="btn btn--form" type="submit" value="Cadastrar" />
            </li>
            <li>
              <a class="signup__link" href="login.blade.php">Já possui uma conta? Entrar</a>
            </li>
          </ul>
        </div>
      </form>  
    </div>
  </div>
@endsection