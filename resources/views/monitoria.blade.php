@extends('layouts.app')

@section('content')

	<div class="container" style="padding: 20px; width: 100%;">
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
								<textarea class="form-group form-control" name="descricao" placeholder="descrição da monitoria"></textarea>
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
					<thead class="bg-success">
						<tr align="center">
							<th colspan="4">Monitorias agendadas por você</th>
						</tr>
					</thead>
					<tbody>
						<tr align="center">
							<th>Data</th>
							<th>Horário</th>
							<th>Titulo</th>
							<th>Descrição</th>
						</tr>

						<tr>
							<td>
								10/06/2018
							</td>
							<td>
								08:00 / 10:00
							</td>
							<td>
								Aula de monitoria
							</td>

							<td>
								Subquery e outras coisas toppen
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
@endsection