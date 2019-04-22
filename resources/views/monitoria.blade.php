@extends('layouts.app')

@section('content')

	<div class="container mt-4">
		<div class="row justify-content-center">
			<div class="col-md-8 mb-5">
				<table class="table table-bordered">
					<thead class="bg-success">
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
				<br>
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