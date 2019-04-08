@extends('layouts.app')

@section('content')
<div class="container mt-5">
	<div class="row justify-content-center">
		<div class="col-md-6 p-0" style="box-shadow: 0px 0px 10px #dadbdc;">
			<h3 class="bg-success p-3 text-center text-light">Editar Postagem</h3>
			<div class="p-4">
				<form method="POST" action="{{route('salvar-pergunta', $id)}}" class="form-group">
					@csrf
					@method('PUT')
					<div class="form-group">
						<label for="">Titulo da pergunta</label>
						<input type="text" name="titulo" maxlength="200" value="{{ $pergunta->titulo }}" class="form-control">
					</div>
					<div class="form-group">
						<label for="">Descrição da pergunta:</label>
						<textarea class="form-control" name="descricao" aria-label="With textarea" placeholder="descreva aqui sua dúvida">{{ $pergunta->texto }}</textarea>
					</div>
					<div class="form-group">
						<label for="">Curso:</label>
						<select class="form-control" name="curso">
							@foreach ($cursos as $curso)
								<option value="{{$curso->id}}"> {{$curso->nome}} - ({{$curso->sigla}})</option>
							@endforeach
						</select>
					</div>
					<br>
					<button type="submit" class="btn btn-success">Concluir</button>
				</form>
			</div>
		</div>
	</div>
</div>


@endsection