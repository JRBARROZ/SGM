@extends('layouts.app')

@section('content')
	<div class="jumbotron" style="padding: 20px;">
		<div class="container text-center">
			<h2>Sistema de Gerenciamento de Monitorias</h2>
			<h5>Feito por alunos para auxiliar alunos!</h5>
		</div>
	</div>

	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-10 border rounded">
				<br>
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

				<h3 class="ml-3">Explore nossas perguntas
					<form action="" class="float-right form-inline mr-3">
						<label class="h5 mr-2">Filtrar postagens: </label>
						<input type="text" class="form-control d-inline mr-2" placeholder="Palavra, tag ou curso...">
						<button type="submit" class="btn btn-success">Buscar</button>
					</form>
				</h3>
				<hr>
					<div id="posts">
				@foreach($perguntas as $pergunta)
						<div id="post-info" class="border-bottom">
							<a href="{{route('exibir-pergunta', $pergunta->id)}}" class="text-dark">
								<h4 class="d-inline">{{$pergunta->titulo}}</h4>
							</a>
								<span class="text-secondary ml-2">{{$pergunta->created_at}}</span>
								@if($pergunta->users_id == Auth::id())
								<a href="{{route('delete',$pergunta->id)}}"><span id="curso" class="badge badge-secondary float-right">DEL</span></a>
								<a href="{{route('editar-pergunta',$pergunta->id)}}"><span id="curso" class="badge badge-secondary float-right">editar</span></a>
								@endif
								<span id="curso" class="badge badge-secondary float-right">{{$pergunta->cursos[0]->sigla}}</span>
								<span id="estado" class="badge badge-info float-right mr-2">{{$pergunta->estado}}</span>
								<h6>
									<a href="#" class="badge badge-secondary">tag</a>
									<a href="#" class="badge badge-secondary">tag</a>
									<a href="#" class="badge badge-secondary">tag</a>
								</h6>
						</div>
				@endforeach
					
				</div>
			</div>
		</div>
	</div>
	
@stop
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>