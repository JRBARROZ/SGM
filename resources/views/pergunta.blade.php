@extends('layouts.app')

@section('content')
<div class="container mt-5 mb-5 p-0">
	<div class="row justify-content-center">
		<div class="col-md-8 m-3 p-0 border">
			<h3 class="m-auto p-3 bg-success text-light text-center" style="width: 100%;">Discussão</h3>
			<br>
			@if($pergunta[0]->users_id == Auth::id())
			<a href="{{ route('delete', $pergunta[0]->id) }}" class="float-right mr-2 text-danger apagar"><span>Apagar</span></a>
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
					<tbody id="respostas"></tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		

		function respostas(){
			$.get('{{route('resposta-table',$pergunta[0]->id)}}', function(data) {
				/*optional stuff to do after success */
				$('#respostas').html(data);
			});
		}
		respostas();
		$('.apagar').on('click', function(event) {
			event.preventDefault();
			/* Act on the event */
			if (window.confirm("Deseja apagar esta resposta ?")) {
			var that = $(this);
			$.get($(this).attr('href'), function(data) {
				/*optional stuff to do after success */
				that.parents('tr').remove();
				window.alert("Pergunta apagada com sucesso.")
				window.location.href = '{{route('index')}}';

			});

			}
		});
		
	</script>
	@endsection
