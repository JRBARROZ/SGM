@extends('layouts.app')

@section('content')

	<div class="container" style="padding: 20px; width: 100%;">
		<div class="row justify-content-center">
			<div class="col-md-8 mb-5">
				<table>
					<tr>
						<th>Nome</th>
						<th>email</th>
					</tr>
					@forelse ($monitores as $monitor)
						<tr>
							<td>{{$monitor->nome}}</td>
							<td>{{$monitor->email}}</td>
						</tr>
					@empty
						<tr>
							<td>Nenhum monitor no seu período ; -;</td>
						</tr>
					@endforelse
				</table>
				<table class="table table-bordered">
					<thead class="bg-success">
						<tr align="center">
							<th colspan="4">Monitorias agendadas para você</th>
						</tr>
					</thead>
					<tbody>
						<tr align="center">
							<th>Data</th>
							<th>Horário</th>
							<th>Titulo</th>
							<th>Descrição</th>
						</tr>
						@forelse ($monitorias as $monitoria)
							<tr>
								<td>{{$monitoria->data}}</td>
								<td>{{$monitoria->hora_inicio}} // {{$monitoria->hora_fim}}</td>
								<td>{{$monitoria->titulo}}</td>
								<td>{{$monitoria->descricao}}</td>
							</tr>
						@empty
							<tr>
								<td colspan="4">Nenhuma monitoria agendada</td>
							</tr>
						@endforelse
					</tbody>
				</table>
			</div>
		</div>
	</div>
@endsection