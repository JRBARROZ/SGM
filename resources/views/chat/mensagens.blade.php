@foreach($mensagens as $mensagem)
<div class="row mb-2">
	@if($mensagem->user_id == Auth::id())
	<div class="col-md-10">
		<div class="card-text" style="background-color: lightgreen">
			@else
			<div class="col-md-10 offset-md-2 bg-success">
				<div class="card-text">
					@endif
					<div class="row ml-2">
						<span class="text-sm-left font-italic text-white">{{$mensagem->user->name}}</span>
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