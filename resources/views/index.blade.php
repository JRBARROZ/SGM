@extends('layouts.app')

@section('content')

<div class="jubotron p-4" style="min-height: 10vh">
	<div class="container text-center">
		<h2 class="text-success">SGM</h2>
		<h5 class="text-success d-none d-md-block">Sistema de Gerenciamento de Monitorias</h5>
		<h5 class="text-secondary d-none d-md-block">Feito por alunos para alunos!</h5>
	</div>
</div>
<div class="container">
	<div class="row justify-content-center">
		@auth
		<div class="col-md-3 col-10 mr-3 ml-3 mb-5 mt-0 p-0 border">
			<h3 class="m-auto text-center text-light p-3 bg-success">Deixe sua dúvida</h3>
			<form method="POST" action="{{route('adicionar-pergunta')}}" class="m-2 p-3">
				@csrf
				<input type="text" name="titulo" maxlength="200" class="form-group form-control" required placeholder="Título da pergunta..." required>
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
				<tbody id="perguntas">

				</tbody>
			</table>
			{{$perguntas->links()}}
		</div>
	</div>
</div>

<script type="text/javascript">
	
	function perguntas(){
		$.get('{{route('Pergunta-Table')}}', function(data) {
			/*optional stuff to do after success */
			$('#perguntas').html(data);
		});
	}
	perguntas();
	$('form').on('submit', function(event) {
		event.preventDefault();
		/* Act on the event */
		$.post($(this).attr('action'), $(this).serialize(), function(data) {
			/*optional stuff to do after success */
			$('form').trigger('reset');
			perguntas();
		});
	});
</script>
@endsection
</body>
</html>
