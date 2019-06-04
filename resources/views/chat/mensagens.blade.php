@foreach($mensagens as $mensagem)
<div class="row mb-2">
	@if($mensagem['id'] == Auth::id())
	<div class="col-md-10">
		<div class="card-text bg-primary">
			@else
			<div class="col-md-10 offset-md-2">
				<div class="card-text bg-success">
					@endif
					<div class="row ml-2">
						<span class="text-sm-left text-muted font-italic">silvio</span>
					</div>
					<div class="row ml-2 text-break">
						{{$mensagem->mensagem}}
					</div>

				</div>
			</div>
		</div>
	</div>
</div>
@endforeach