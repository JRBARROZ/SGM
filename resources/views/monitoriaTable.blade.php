@forelse ($monitorias as $monitoria)
<tr>
	<td>{{$monitoria->titulo}}</td>
	<td>{{$monitoria->descricao}}</td>
	<td>{{$monitoria->hora_inicio}} / {{$monitoria->hora_fim}}</td>
	<td>{{$monitoria->data}}</td>
	<td>{{$monitoria->periodo}}</td>
	<td>
		<a href="{{ route('ataIndex', $monitoria->id) }}">Ata</a>
		<a href="{{ route('monitoria-deletar', $monitoria->id) }}" class="p-2 btn-link text-danger apagar" >Deletar</a>
	</td>
</tr>
@empty
<tr>
	<td colspan="6">Você ainda não agendou nenhuma monitoria.</td>
</tr>
@endforelse
<script type="text/javascript">
	$('.apagar').on('click', function(event) {
		event.preventDefault();
		/* Act on the event */
		var confirm = window.confirm("Deseja cancelar esse evento ?");
		if (confirm) {
			var that = $(this);
			$.get($(this).attr('href'), function(data) {
				that.parents('tr').remove();
				window.alert("Evento cancelado.")
			});			
		}
	});
</script>