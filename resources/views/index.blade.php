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
			<div class="col-md-8">
				@auth
					<form method="POST" action="{{route('adicionar-pergunta')}}" class="form-group">
						@csrf
						
						<label for="">Titulo da pergunta</label>
						<input type="text" name="titulo" maxlength="200" class="form-control">
						<label for="">Descrição da pergunta:</label>
						<textarea class="form-control" name="descricao" aria-label="With textarea" placeholder="descreva aqui sua dúvida"></textarea>
						<label for="">Curso:</label>
						<select class="form-control" name="curso">
							@foreach ($cursos as $curso)
								<option value="{{$curso->id}}"> {{$curso->nome}} - ({{$curso->sigla}})</option>
							@endforeach
						</select>
						<br>
						<button type="submit" class="btn btn-success">postar</button>
					</form>
				@endauth

				<table class="table" style="box-shadow: 0px 0px 10px #dadbdc;">
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
										<a href="{{route('exibir-pergunta', $pergunta->id)}}" class="h4 text-dark">{{$pergunta->titulo}}</a>
										<span class="badge badge-secondary  float-right mr-2">{{$pergunta->cursos[0]->sigla}}</span>
										@if($pergunta->estado == "Aberto")
											<span class="badge badge-info text-light float-right mr-2">{{$pergunta->estado}}</span>
										@else
											<span class="badge badge-success text-light float-right mr-2">{{$pergunta->estado}}</span>
										@endif
										<span class="h6 text-secondary d-block mt-2" style="font-size: 12px;">{{$pergunta->created_at}}</span>
										<h6 class="mt-3">
											<a href="#" class="text-success mr-1">tag</a>
											<a href="#" class="text-success mr-1">tag</a>
											<a href="#" class="text-success mr-1">tag</a>
											@if($pergunta->users_id == Auth::id())
												<a href="#" class="float-right mr-2 text-danger"><span>Deletar</span></a>
												<a href="#" class="float-right mr-2 text-info"><span>Editar</span></a>
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