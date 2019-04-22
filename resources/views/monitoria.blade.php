@extends('layouts.app')

@section('content')

	<div class="container mt-4">
		<div class="row justify-content-center">
			@auth
				@if(Auth::user()->tipo == "monitor")
					<div class="col-md-4 p-0">
						<div class="m-2">
							<h3 class="bg-success text-center text-light p-3">Agendar Monitoria</h3>
							<form action="">
								<div class="form-group">
								<label for="">
									Titulo da atividade:
								</label>
									<input type="text" class="form-control" name="titulo" placeholder="assunto da monitoria">
								</div>
								<div class="form-group">
									<label>
										Descrição da atividade:
									</label>
									<textarea class="form-control" name="descricao" placeholder="descrição da monitoria"></textarea>
								</div>
								<div class="form-group">
									<label for="">
										Início:
									</label>
									<input class="form-group form-control" type="time" name="hora_inicio">
								</div>
								<div>
									<label>
										Término:
									</label>
									<input class="form-control" type="time" name="hora_termino">
								</div>
								<div class="form-group">
									<label for="">
										Data
									</label>
									<input type="date" name="data" class="form-control">
								</div>
								<div class="form-group">
									<button class="btn btn-success">Salvar</button>
								</div>
							</form>
						</div>
					</div>
				@endif
			@endauth
			<div class="col-md-8">
				<div class="m-2 mb-5 p-0">
					<table class="table table-bordered text-center">
						<thead>
							<tr>
								<th class="bg-success text-light p-3 h3">Monitorias Agendadas por Você</th>
							</tr>
						</thead>
						<tbody>
							@forelse ($monitorias as $monitoria)
								<tr>
									<td>{{$monitoria->data}}</td>
									<td>{{$monitoria->hora_inicio}} // {{$monitoria->hora_fim}}</td>
									<td>{{$monitoria->titulo}}</td>
									<td>{{$monitoria->descricao}}</td>
								</tr>
							@empty
								<tr>
									<td class="text-center">Nenhuma monitoria agendada</td>
								</tr>
							@endforelse
						</tbody>
					</table>
				</div>
				<div class="m-2 p-0">
					<table class="table table-bordered text-center">
						<thead>
							<tr>
								<th class="bg-success text-light p-3 h3">Seus Monitores</th>
							</tr>
						</thead>
						<tbody>
							@forelse ($monitores as $monitor)
								<tr>
									<td>{{$monitor->name}}</td>
									<td>{{$monitor->email}}</td>
								</tr>
							@empty
								<tr>
									<td>Nenhum monitor no seu período ; -;</td>
								</tr>
							@endforelse
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
@endsection