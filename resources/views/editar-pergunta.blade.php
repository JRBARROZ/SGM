@extends('layouts.app')

@section('content')

<form method="POST" action="{{route('salvar-pergunta', $id)}}" class="form-group">
	@csrf
	@method('PUT')
	<label for="">Titulo da pergunta</label>
	<input type="text" name="titulo" maxlength="200" value="{{ $pergunta->titulo }}" class="form-control">
	<label for="">Descrição da pergunta:</label>
	<textarea class="form-control" name="descricao" aria-label="With textarea" placeholder="descreva aqui sua dúvida">{{ $pergunta->texto }}</textarea>
	<label for="">Curso:</label>
	<select class="form-control" name="curso">
		@foreach ($cursos as $curso)
			<option value="{{$curso->id}}"> {{$curso->nome}} - ({{$curso->sigla}})</option>
		@endforeach
	</select>
	<br>
	<button type="submit" class="btn btn-success">salvar</button>
</form>


@endsection