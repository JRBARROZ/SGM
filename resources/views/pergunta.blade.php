@extends('layouts.app')

@section('content')
<div class="container mt-5 mb-5 p-0">
	<div class="row justify-content-center">
		<div class="col-md-8 m-3 p-0 border">
			<h3 class="m-auto p-3 bg-success text-light text-center" style="width: 100%;">Discussão</h3>
			<br>
			@if($pergunta[0]->users_id == Auth::id())
			<a href="{{ route('delete', $pergunta[0]->id) }}" class="float-right mr-2 text-danger"><span>Apagar</span></a>
			<a href="{{route('editar-pergunta', $pergunta[0]->id)}}}" class="float-right mr-2 text-info"><span>Editar</span></a>
			@endif
			<div class="m-4">
				<div class="row">
					<div class="col-8">

						<span class="h3 text-success bold d-block">
							@php
							echo nl2br($pergunta[0]->titulo);
							@endphp
						</span>
						<span class="h6 text-secondary font-italic">{{$pergunta[0]->created_at}}</span>
						<span class="h6 text-secondary font-italic">{{$pergunta[0]->users[0]->name}}</span>
					</div>
					<div class="col m-auto">
						<h4 class="badge badge-danger float-right">{{$pergunta[0]->cursos[0]->sigla}}</h4>
						@if($pergunta[0]->estado == "aberta")
						<span class="badge badge-info float-right text-light mr-2" id="estado">{{$pergunta[0]->estado}}</span>
						@else
						<span class="badge badge-success float-right text-light mr-2">{{$pergunta[0]->estado}}</span>
						@endif
					</div>
				</div>
				<br><br>
				<h5 class="text-secondary font-italic">
					@php
					echo nl2br($pergunta[0]->texto);
					@endphp
				</h5>
				<br>
				<table class="table mt-4">
					<tbody>
						<!--FOREACH LISTANDO RESPOSTAS-->
						@foreach($respostas as $resposta)
						@if($resposta->correta == 0)
						<tr>
							@else
							<tr style="border-left: 6px solid #559966">
								@endif
								<td>
									<div class="m-3">
										<div class="row justify-content-between">
											<h4 class="text-primary">{{ $resposta->users[0]->name }} - <span class="h6 text-secondary d-block">{{ $resposta->created_at }}</span></h4>
											@if($pergunta[0]->users_id == Auth::id())
												<a href="{{route('resposta-correta',[$pergunta[0]->id,$resposta->id])}}" class="text-primary correta">Correta</a>
											@endif
										</div>
										<br>
										<p class="text-secondary">{{ $resposta->texto }}</p>
										@auth
										@if($resposta->users_id == Auth::id())
										<a href="{{ route('remover-resposta', [$resposta->id, $pergunta[0]->id]) }}" class="text-danger deletar">Deletar</a>
										<a href="{{ route('editar-resposta', [$resposta->id, $pergunta[0]->id]) }}" class="text-info">Editar</a>
										@endif
										@endauth
									</div>

								</td>
							</tr>
							@endforeach

							<br>
							<tr>
								<td>
									<form class="m-3" method="POST" action="{{route('adicionar-resposta', $pergunta[0]->id)}}">
										@csrf
										@method('PUT')
										<div class="form-group">
											<label>Adicionar comentário:</label>
											<textarea class="form-control" name="resposta" required></textarea>
										</div>
										<button class="btn btn-success" type="submit">Publicar</button>
										<button class="btn btn-danger" type="reset">Cancelar</button>
									</form>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		$('.deletar').on('click', function(event) {
			event.preventDefault();
			/* Act on the event */
			var that = $(this);
			$.get($(this).attr('href'), function(data) {
				/*optional stuff to do after success */
				that.parents('tr').remove();
			});
		});
		$('.correta').on('click', function(event) {
			event.preventDefault();
			/* Act on the event */
			var that = $(this);
			$.get($(this).attr('href'), function(data) {
				/*optional stuff to do after success */
				$('tr').css('border', 'none');
				$('tr').css('transition', '0.3s');
				that.parents('tr').css('border-left', '6px solid #48bd48');
				that.parents('tr').css('transition', '0.3s');

			});

		});
	</script>
	@endsection
