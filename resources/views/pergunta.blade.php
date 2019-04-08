@extends('layouts.app')

@section('content')

<div class="container mt-5 mb-5 p-0">
	<div class="row justify-content-center">
		<div class="col-md-8 m-3 p-0" style="box-shadow: 0px 0px 10px #dadada;">
			<h3 class="m-auto p-3 bg-success text-light text-center" style="width: 100%;">Discussão</h3>
			<br>
			<div class="m-4">
				<div class="row">
					<div class="col-8">
						<span class="h3 text-success bold d-block">{{$pergunta->titulo}}</span>
						<span class="h6 text-secondary font-italic">{{$pergunta->created_at}}</span>
					</div>
					<div class="col m-auto">
						<h4 class="badge badge-danger float-right">{{$pergunta->cursos[0]->sigla}}</h4>
						@if($pergunta->estado == "aberta")
							<span class="badge badge-info float-right text-light mr-2">{{$pergunta->estado}}</span>
						@else
							<span class="badge badge-success float-right text-light mr-2">{{$pergunta->estado}}</span>
						@endif
					</div>
				</div>
				<br><br>
				<h5 class="text-secondary font-italic">
					{{$pergunta->texto}}
				</h5>
				<br>
				<table class="table mt-4">
					<tbody>
						<!--FOREACH LISTANDO RESPOSTAS-->
						<tr>
							<td>
								<div class="m-3">
									<h4 class="text-success">Dono Pergunta - <span class="h6 text-secondary">00/00/0000</span></h4>
									<br>
									<p class="text-secondary">Dono da pergunta, quando logado, tem seu nome em cor success e é adicionado o botão deletar.</p>
									<a href="#" class="text-danger">Deletar</a>
								</div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="m-3">
									<h4 class="text-primary">Fulano de tal - <span class="h6 text-secondary">00/00/0000</span></h4>
									<br>
									<p class="text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									consequat.</p>
								</div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="m-3">
									<h4 class="text-primary">Fulano de tal - <span class="h6 text-secondary">00/00/0000</span></h4>
									<br>
									<p class="text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									consequat.</p>
								</div>
							</td>
						</tr>
						<br>
						<tr>
							<td>
								<form class="m-3">
									<div class="form-group">
										<label>Adicionar comentário:</label>
										<textarea class="form-control" required></textarea>
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
@endsection