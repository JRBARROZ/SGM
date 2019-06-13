@extends('layouts.app')

@section('content')

<div class="container mt-5">
	<h3>Editar resposta</h3>
		<form class="form-group" method="POST" action="{{ route('salvar-resposta', [$resposta->id, $perg]) }}">
			@csrf
			@method('PUT')
			<div class="form-group">
				<label>Texto: *</label>
				<textarea class="form-control" name="texto" required>{{ $resposta->texto }}</textarea>
			</div>
			<br>
			<button type="submit" class="btn btn-success">Salvar</button>
		</form>
</div>
<script type="text/javascript">
	$('button[type=submit]').on('click', function(event) {
		window.alert("Resposta editada com sucesso .");

	});
</script>
@endsection
