@extends('layouts.app')

@section('content')

<div class="jumbotron" style="padding: 20px; width: 100%;">
		<div class="container text-center">
			<h2 class="text-success">Sistema de Gerenciamento de Monitorias</h2>
			<h5 class="text-secondary">Feito por alunos para auxiliar alunos!</h5>
		</div>
	</div>
	<div class="container">
		<div class="row justify-content-center">
			@auth
				<div class="col-md-3 col-6 mr-3 ml-3 mb-5 mt-0 p-0">
					<h3 class="m-auto text-center text-light p-3 bg-success">Deixe sua dúvida</h3>
					<br>
					<form method="POST" action="{{route('adicionar-pergunta')}}">
						@csrf
						<input type="text" name="titulo" maxlength="200" class="form-group form-control" required placeholder="Título da pergunta...">
						<textarea class="form-group form-control" name="descricao" aria-label="With textarea" placeholder="Descreva aqui sua dúvida..." required></textarea>
						<div class="form-group">
							<select class="form-control" name="curso" required>
								@foreach ($cursos as $curso)
									<option value="{{$curso->id}}">
										{{$curso->nome}} - ({{$curso->sigla}})
									</option>
								@endforeach
							</select>
						</div>
						<button type="submit" class="btn btn-success btn-block">Postar</button>
						<button type="reset" class="btn btn-outline-danger btn-block">Cancelar</button>
					</form>
				</div>
			@endauth
			<div class="col-md-8 mb-5">
				<table class="table table-bordered table-hover" >
					<thead class="bg-success">
						<tr class="text-center">
							<th><h3 class="text-light">Explore nossas postagens</h3></th>
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
												<span class="h6 text-secondary d-block mt-2" style="font-size: 12px;">{{$pergunta->users[0]->name}}</span>
												<span class="h6 text-secondary d-block mt-2" style="font-size: 12px;">{{$pergunta->created_at}}</span>
											</div>
											<div class="col m-auto text-right">
												<a href="{{ route('pergunta-curso', $pergunta->cursos[0]->id) }}">  <span class="badge badge-secondary  float-right mr-2">{{$pergunta->cursos[0]->sigla}}</span> </a>
												@if($pergunta->estado == "aberta")
													<a href="{{ route('pergunta-estado', $pergunta->estado) }}"> <span class="badge badge-info text-light mr-2">{{$pergunta->estado}}</span> </a>
												@else
													<a href="{{ route('pergunta-estado', $pergunta->estado) }}"> <span class="badge badge-success text-light mr-2">{{$pergunta->estado}}</span> </a>
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
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
