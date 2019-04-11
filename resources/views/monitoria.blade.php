@extends('layouts.app')

@section('content')
<div class="jumbotron" style="padding: 20px; width: 100%;">

	<div class="container">
		<div class="row justify-content-center">
			@auth
				@if(Auth::user()->tipo == "monitor")
					<div class="col-md-3 col-6 mr-3 mb-5 mt-0 p-0">
						<h3>Agendar Monitoria</h3>
						<form action="">
							<label for="">
								Titulo da atividade
								<input type="text" class="form-group form-control" name="titulo" placeholder="assunto da monitoria">
								Descrição da atividade
								<input type="text" class="form-group form-control" name="descricao" placeholder="descrição da monitoria">
							</label>

							<label for="">
								Horário
								inicio:
								<input class="form-group form-control" type="time" name="hora_inicio">
								termino:
								<input class="form-group form-control" type="time" name="hora_termino">
							</label>
							<label for="">
								Data
								<input type="date" name="data" class="form-group form-control">
							</label>
							<br>
							<button class="btn btn-success">Salvar</button>
						</form>
					</div>
				@endif
			@endauth
			<div class="col-md-8 mb-5">
				<table class="table table-bordered">
					<tr align="center">
						<th>Data</th>
						<th>Horário</th>
						<th>Titulo</th>
						<th>Descrição</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
@endsection