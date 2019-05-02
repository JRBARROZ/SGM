@extends('layouts.app')

@section('content')
	<div class="container-fluid" id="lateral">
		<div class="row justify-content-between" id="lateral">
			<div class="col-md-2 bg-light shadow" id="lateral">
				<div class="mt-4 mb-3">
					<h3 class="mt-4">User Admin</h3>
					<hr>
					<button class="btn btn-link" data-toggle="collapse" data-target="#contas">Gerenciar Contas</button>
					<div class="collapse" id="contas">
						<a href="#" class="btn d-block text-left ml-4 btn-link text-secondary">Listar Alunos</a>
						<a href="#" class="btn d-block text-left ml-4 btn-link text-secondary">Listar Monitores</a>
						<a href="#" class="btn d-block text-left ml-4 btn-link text-secondary">Editar Conta</a>
						<a href="#" class="btn d-block text-left ml-4 btn-link text-secondary">Remover Conta</a>
					</div>
					<button class="btn  btn-link" data-toggle="collapse" data-target="#documentos">Documentações de Monitores</button>
					<div class="collapse" id="documentos">
						<a href="#" class="btn d-block text-left ml-4 btn-link text-secondary">Relatórios Mensais Entregues</a>
						<a href="#" class="btn d-block text-left ml-4 btn-link text-secondary">Histórico de Atas</a>
						<a href="#" class="btn d-block text-left ml-4 btn-link text-secondary">Pagamentos</a>
					</div>
					<button class="btn  btn-link" data-toggle="collapse" data-target='#opcoes'>Opções</button>
					<div class="collapse" id="opcoes">
						<a href="#" class="btn d-block text-left ml-4 btn-link  text-secondary">Opção 1</a>
						<a href="#" class="btn d-block text-left ml-4 btn-link  text-secondary">Opção 2</a>
						<a href="#" class="btn d-block text-left ml-4 btn-link  text-secondary">Opção 3</a>
					</div>
				</div>
			</div>

			<div class="col-md-9">
				<div class="m-2 mt-4">
					<div class="m-3 row justify-content-between" id="lateral">
						<div class="col-md-4 p-0">
							<div class="card m-2 text-center shadow" style="height: 145px;">
								<div class="card-header">
									<a href="#" class="h4 text-secondary">Contas Cadastradas</a>
								</div>
								<div class="card-body">
									<h5>000</h5>
								</div>
							</div>
						</div>
						<div class="col-md-4 p-0">
							<div class="card m-2 text-center shadow" style="height: 145px;">
								<div class="card-header">
									<a href="#" class="h4 text-secondary">Contas de Monitores</a>
								</div>
								<div class="card-body">
									<h5>000</h5>
								</div>
							</div>
						</div>
						<div class="col-md-4 p-0">
							<div class="card m-2 text-center shadow" style="height: 145px;">
								<div class="card-header">
									<a href="#" class="h4 text-secondary">Contas de Alunos</a>
								</div>
								<div class="card-body">
									<h5>000</h5>
								</div>
							</div>
						</div>
					</div>
					<div class="row m-4">
						<div class="card col p-0 shadow" style="max-height: 300px; overflow-y: hidden;">
							<div class="card-header">
								<h4>Mensagens de Usuários</h4>
							</div>
							<div class="card-body">
								<table class="table">
									<tbody>
										<tr>
											<td class="alert-info"><a href="#" class="text-dark">Reclamação sobre bug de sistema!</a></td>
										</tr>
										<tr>
											<td><a href="#" class="text-dark">Outro aviso...</a></td>
										</tr>
										<tr>
											<td class="alert-warning"><a href="#" class="text-dark">Dúvida sobre processos de monitoria</a></td>
										</tr>
										<tr>
											<td class="alert-danger"><a href="#" class="text-dark">Denúncia de post inadequado no fórum.</a></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection