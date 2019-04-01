@extends('layouts.app')

<style>
	.form-group .form-control, .form-group select{
		background: none;
		border: none;
		border-bottom: 1px gray solid;
		border-radius: 0px;
		margin-top: 15px;
		padding: 20px 10px;
		color: black;
	}
</style>

@section('content')
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6 text-center text-light position-relative" style="height: 100%; background-image: url('https://image.freepik.com/fotos-gratis/local-de-trabalho-com-cafe-notebook-smartphone-e-laptop_1112-252.jpg'); background-size: cover;">
				<div class="position-absolute" style="background-color: rgba(0,0,0,0.5); height: 100%; width: 98.5%;">
					<h1 style="margin-top: 45%;">Sistema de Gerenciamento de Monitorias</h1>
					<br>
					<h2>Crie já sua conta!</h2>
				</div>
			</div>
			<div class="col-md-6">
				<div class="container" style="margin-top: 25%;">
					<form action="{{route('register')}}" method="POST">
						@csrf
						<div class="row">
							<div class="col-md-6 form-group">
								<label>Nome:</label>
								<input type="text" name="name" class="form-control {{$errors->has('name') ? 'is-invalid' : '' }}" required autofocus value="{{old('name')}}">
								@if ($errors->has('name'))
									<span class="invalid-feedback" role='alert'>
										<strong>{{$errors->first('name')}}</strong>
									</span>
								@endif
							</div>
							<div class="col-md-6 form-group">
								<label>Sobrenome:</label>
								<input type="text" name="sobrenome" class="form-control {{$errors->has('sobrenome') ? 'is-invalid' : ''}}" required autofocus value="{{old('sobrenome')}}">
								@if ($errors->has('sobrenome'))
									<span class="invalid-feedback" role='alert'>
										<strong>{{$errors->first('sobrenome')}}</strong>
									</span>
								@endif
							</div>
						</div>
						<div class="row">
							<div class="form-group col-sm">
								<label>{{__('matricula')}}</label>
								<input type="text" name="matricula" class="form-control" value="{{old('matricula')}}">
							</div>
						</div>
						<div class="row">
							<div class="form-group col-sm">
								<label>Curso</label>
								<select name="curso" class="form-control col-md">
									<option value="1">Informática Para Internet</option>
									<option value="2">Logística</option>
									<option value="3">Gestão da Qualidade</option>
								</select>
							</div>
							<div class="form-group col-sm">
								<label for="periodo">Período</label>
        				<input type="number" class="form-control" data-width="100%" name="periodo" required>
							</div>
							<div class="form-group col-sm">
								<label for="Turnos">Turno</label>
				        <select class="form-control" data-size="5" data-live-search="true" data-width="100%" name="Turnos" required>
			              <option selected disabled>Selecionar</option>
			              <option>Manhã</option>
			              <option>Tarde</option>
			          </select>
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
							<div class="form-group col-sm">
								<label for="passwordRepeat">{{ __('Senha') }}</label>
		            <input class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" data-width="100%" type="password" name="password" id="password" required autofocus/>
		            @if ($errors->has('password'))
		                <span class="invalid-feedback" role="alert">
		                    <strong>{{ $errors->first('password') }}</strong>
		                </span>
		            @endif
							</div>
							<div class="form-group col-sm">
			          <label for="password-confirm">{{ __('Confirme a Senha') }}</label>
			          <input class="form-control" type="password" name="password_confirmation" required autofocus/>
			          </div>
		          </div>
						</div>
						<br>
						<button class="btn btn-success ml-3">Concluir cadastro</button>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection