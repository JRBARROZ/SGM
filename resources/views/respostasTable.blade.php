<!--FOREACH LISTANDO RESPOSTAS-->
<tr class="mb-3">
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
	<script type="text/javascript">
		$('form').on('submit', function(event) {
			event.preventDefault();
			/* Act on the event */
			$.post($(this).attr('action'), $(this).serialize(), function() {
				/*optional stuff to do after success */
				respostas();
			});
		});
		$('.deletar').on('click', function(event) {
			event.preventDefault();
			/* Act on the event */
			if (window.confirm("Deseja apagar esta resposta ?")) {
			var that = $(this);
			$.get($(this).attr('href'), function(data) {
				/*optional stuff to do after success */
				that.parents('tr').remove();
				window.alert("Resposta apagada com sucesso.")
			});

			}
		});

		$('.correta').on('click', function(event) {
			event.preventDefault();
			/* Act on the event */
			if (window.confirm("Marcar resposta como correta ?")) {

			var that = $(this);
			$.get($(this).attr('href'), function(data) {
				/*optional stuff to do after success */
				$('tr').css('border', 'none');
				$('tr').css('transition', '0.3s');
				that.parents('tr').css('border-left', '6px solid #48bd48');
				that.parents('tr').css('transition', '0.3s');

			});
			}

		});
	</script>


