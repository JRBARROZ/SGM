@extends('layouts.app')
@section('content')
<div class="container mt-4" >
		<div class="row d-flex justify-content-center">			
			<div class="col-md-8">
				<div class="card">
				<div class="card-header bg-success text-light h5 text-center">Crie sua conta</div>
                <div class="card-body">
				<form>
					<div class="form-group row">
						<div class="col form-group">
							<label class="label-form-group">Nome</label>
							<input class="form-control" name="name" type="text">
						</div>
						<div class="col form-group">
							<label class="label-form-group">Sobrenome</label>
							<input class="form-control" name="sobrenome" type="text">
						</div>
					</div>
					<div class="form-group row">
						<div class="col form-group">
							<label class="label-form-group">E-mail</label>
							<input class="form-control" name="email" type="text">
						</div>
						<div class="col form-group">
							<label class="label-form-group">Matricula</label>
							<input class="form-control" name="matricula" type="text">
						</div>
					</div>
					<div class="form-group row">
						<div class="col form-group">
							<label class="label-form-group">Curso</label>
							<select class="form-control" name="curso">
								<option disabled selected>curso</option>
								<option>IPI</option>
								<option>LOG</option>
								<option>QUA</option>
							</select>
						</div>
						<div class="col form-group">
							<label class="label-form-group">Periodo</label>
							<input class="form-control">
						</div>
						<div class="col form-group">
							<label class="label-form-group">Turno</label>
							<select class="form-control">
								<option selected disabled>turno</option>
								<option>Manhã</option>
								<option>Tarde</option>
								<option>Noite</option>
							</select>
						</div>
					</div>
					<div class="form-group row">
						<div class="col form-group">
							<label class="label-form-group">Senha</label>
							<input class="form-control">
						</div>
						<div class="col form-group">
							<label class="label-form-group">Confirmar senha</label>
							<input class="form-control">
						</div>
					</div>
				</form>

                </div>
					
				</div>

			</div>	
		</div>
	</div>
@endsection