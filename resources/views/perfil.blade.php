@extends('layouts.app')

@section('content')

<div class="col-md-8 mb-5">
				<table class="table table-bordered" >
					<thead class="bg-success">
						<tr class="text-center">
							<th><h3 class="text-light">Expore nossas postagens</h3></th>
						</tr>
					</thead>
					<tbody>
						@foreach($perguntas as $pergunta)
							<tr>
								<td>
									<div class="m-3">
										<div class="row">
											<div class="col-8">
												<a href="{{route('exibir-pergunta', $pergunta->id)}}" class="h4 text-dark">{{$pergunta->titulo}}</a>
												<span class="h6 text-secondary d-block mt-2" style="font-size: 12px;">{{$pergunta->created_at}}</span>
											</div>
											<div class="col m-auto text-right">
												<span class="badge badge-secondary  float-right mr-2">{{$pergunta->cursos[0]->sigla}}</span>
												@if($pergunta->estado == "aberta")
													<span class="badge badge-info text-light mr-2">{{$pergunta->estado}}</span>
												@else
													<span class="badge badge-success text-light mr-2">{{$pergunta->estado}}</span>
												@endif
											</div>
										</div>
										<h6 class="mt-3">
											<a href="#" class="text-success mr-1">tag</a>
											<a href="#" class="text-success mr-1">tag</a>
											<a href="#" class="text-success mr-1">tag</a>
											@if($pergunta->users_id == Auth::id())
												<a href="{{ route('delete', $pergunta->id) }}" class="float-right mr-2 text-danger"><span>Apagar</span></a>
												<a href="{{route('editar-pergunta', $pergunta->id)}}}" class="float-right mr-2 text-info"><span>Editar</span></a>
											@endif
										</h6>
									</div>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>

@endsection