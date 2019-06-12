@extends('layouts.adm')

@section('content')
<div class="container mt-4" >
	<div class="row d-flex justify-content-center">			
		<div class="col-md-8">
			<div class="card">
				<div class="card-header bg-success text-light h5 text-center">Crie sua conta</div>
				<div class="card-body">
					<form action="{{route('register')}}" method="POST">
						@csrf
						<div class="form-group row">
							<div class="col form-group">
								<label class="label-form-group">Nome</label>
								<input class="form-control {{$errors->has('name') ? 'is-invalid' : '' }}" required autofocus value="{{old('name')}}" name="name" type="text">
								@if ($errors->has('name'))
								<span class="invalid-feedback" role='alert'>
									<strong>{{$errors->first('name')}}</strong>
								</span>
								@endif
							</div>
							<div class="col form-group">
								<label class="label-form-group">Sobrenome</label>
								<input class="form-control {{$errors->has('sobrenome') ? 'is-invalid' : ''}}" required autofocus value="{{old('sobrenome')}}" name="sobrenome" type="text">
								@if ($errors->has('sobrenome'))
								<span class="invalid-feedback" role='alert'>
									<strong>{{$errors->first('sobrenome')}}</strong>
								</span>
								@endif
							</div>
						</div>
						<div class="form-group row">
							<div class="col form-group">
								<label class="label-form-group">{{ __('E-Mail') }}</label>
								<input class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" type="text" id="email" required autofocus>
								@if ($errors->has('email'))
					<span class="invalid-feedback" role="alert">
						<strong>{{ $errors->first('email') }}</strong>
					</span>
					@endif
							</div>
							<div class="col form-group">
								<label class="label-form-group">Matricula</label>
								<input class="form-control" name="matricula" type="text" value="{{old('matricula')}}">
							</div>
						</div>
						<div class="form-group row">
							<div class="col form-group">
								<label class="label-form-group">Curso</label>
								<select class="form-control" name="curso">
									<option disabled selected>Selecionar</option>
									<option value="1">Informática Para Internet</option>
									<option value="2">Logística</option>
									<option value="3">Gestão da Qualidade</option>
								</select>
							</div>
							<div class="col form-group">
								<label class="label-form-group">Periodo</label>
								<input type="number" class="form-control" data-width="100%"  name="periodo" required>
							</div>
							<div class="col form-group">
								<label class="label-form-group">Turno</label>
								<select class="form-control">
									<option selected disabled>Selecionar</option>
									<option>Manhã</option>
									<option>Tarde</option>
									<option>Noite</option>
								</select>
							</div>
						</div>
						<div class="form-group row">
							<div class="col form-group">
								<label class="label-form-group">Senha</label>
								<input class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" data-width="100%" name="password" type="password" required autofocus >
								@if ($errors->has('password'))
						<span class="invalid-feedback" role="alert">
							<strong>{{ $errors->first('password') }}</strong>
						</span>
						@endif
							</div>
							<div class="col form-group">
								<label class="label-form-group">Confirmar senha</label>
								<input class="form-control" type="password" name="password_confirmation" required autofocus>
							</div>
						</div>
						<div class="col form-group">
							<button class="btn btn-secondary btn-lg btn-block bg-success" type="submit">Finalizar cadastro</button>
						</div>
							<a href="/register-adm" class="btn btn-link">Cadastro Admin/Professor</a>
					</form>

				</div>

			</div>

		</div>	
	</div>
</div>
@endsection