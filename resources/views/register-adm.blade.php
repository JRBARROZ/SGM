@extends('layouts.adm')

@section('content')


<div class="container mt-4" >
	<div class="row d-flex justify-content-center">			
		<div class="col-md-8">
			<div class="card">
				<div class="card-header bg-success text-light h5 text-center">Criar conta</div>
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
						<div class="form-group">
							<div class="form-group">
								<label class="label-form-group">{{ __('E-Mail') }}</label>
								<input class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" type="text" id="email" required autofocus>
								@if ($errors->has('email'))
					<span class="invalid-feedback" role="alert">
						<strong>{{ $errors->first('email') }}</strong>
					</span>
					@endif
							<br>
							<div class="form-group row">
							<div class="col form-group">
								<label class="label-form-group">Cargo</label>
								<select class="form-control" name="cargo">
									<option disabled selected>Selecionar</option>
									<option value="1">Docente</option>
									<option value="2">Administrativo</option>
								</select>
							</div>
							<div class="col form-group">
								<label class="label-form-group">Siape</label>
								<input class="form-control" name="siape" type="text" value="{{old('siape')}}">
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
							<button class="btn btn-secondary btn-lg btn-block bg-success text-light" type="submit">Finalizar cadastro</button>
						</div>
					</form>

				</div>

			</div>

		</div>	
	</div>
</div>

@endsection