@extends('layouts.adm')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md">
				<div class="container">
					<br>
					<div class="row justify-content-center">
						<div class="col-lg-4">
							<div class="m-2 border text-center">
								<button class="btn btn-light btn-block text-dark" data-toggle="collapse" data-target="#reclamacoes">
									<h3>Atas</h3>
									<strong class="h4">7</strong>
								</button>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="m-2 border text-center">
								<button class="btn btn-light btn-block text-dark" data-toggle="collapse" data-target="#atas">
									<h3>Relatórios</h3>
									<strong class="h4">15</strong>
								</button>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="m-2 border text-center">
								<button class="btn btn-light btn-block text-dark" data-toggle="collapse" data-target="#monitores">
									<h3>Listar Monitores</h3>
									<strong class="h4">{{$totalMonitores}}</strong>
								</button>
							</div>
						</div>
					</div>

					<div class="row justify-content-center">

						<!--Div com lista de reclamações/denúncias feitas pelos usuários-->
						<div id="reclamacoes" class="col-12 collapse">
							<div class="m-2">
								<table class="table table-borderless table-hover">
									<thead class="text-center">
										<tr class="text-light bg-success">
											<th>Postagem</th>
											<th>Ações</th>
										</tr>
									</thead>
									<tbody>
										@for($i=0; $i < 7; $i++)
										<tr>
											<td><span>Motivo da reclamação/denúncia</span></td>
											<td class="text-center">
												<div class="row justify-content-center">
													<a href="#" class="m-2 text-primary">Visitar</a>
													<a href="#" class="m-2 text-danger">Deletar</a>
												</div>
											</td>
										</tr>
										@endfor
										</tbody>
								</table>
							</div>
						</div>

						<!--Listar arquivos de relatórios entregues-->
						<div id="atas" class="col-12 collapse">
							<div class="m-2">
								<table class="table table-hover table-borderless ">
									<thead class="text-center">
										<tr class="bg-success text-light">
											<th>Monitor</th>
											<th>Arquivo</th>
											<th>Curso</th>
											<th>Cadeira</th>
											<th>Data</th>
											<th>Ações</th>
										</tr>
									</thead>
									<tbody>
                                        <tr>
                                            <td>Nome do monitor</td>
                                            <td><a href="#">relatorio-tal.pdf</a></td>
                                            <td>Curso</td>
                                            <td>Cadeira</td>
                                            <td>00/00</td>
                                            <td>
                                                <div class="row justify-content-center">
                                                    <a href="#" class="m-2 text-primary">Imprimir</a>
                                                    <a href="#" class="m-2 text-danger">Deletar</a>
                                                </div>
                                            </td>
                                        </tr>
									</tbody>
								</table>
							</div>
						</div>

						<!--Listar contas de monitores para ações rápidas de edição-->
						<div id="monitores" class="col-12 collapse">
							<div class="m-2">
								<div class="mt-4 mb-4">
									<input id="filtroMonitores" type="text" class="form-control" placeholder="Filtrar por nome...">
								</div>
								<table class="table table-borderless table-hover">
									<thead>
										<tr class="text-light bg-success">
											<th>Nome do Monitor</th>
											<th>Curso</th>
											<th>Cadeira</th>
											<th>Período</th>
											<th>Ações</th>
										</tr>
									</thead>
									<tbody>
                                        @foreach($monitores as $monitor)
                                            @foreach($monitor->monitores as $cadeira)
                                                <tr>
                                                    <td id="nome">{{$cadeira->name}}</td>
                                                    <td>{{$cadeira->cursos[0]->sigla}}</td>
                                                    <td>{{$monitor->nome}}</td>
                                                    <td>{{$cadeira->periodo}}</td>
                                                    <td>
                                                        <div class="row justify-content-center">
                                                            <a href="{{route('user.show', ['id' => $cadeira->id])}}" class="m-2 text-primary">Visitar Perfil</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endforeach
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<br>
					<div class="row m-2">
						<div class="col-12">
							<h3 class="mb-2">Pendências</h3>
							<br>
							<div class="row">
								<table class="table table-hover table-borderless ">
									<thead class="text-center">
										<tr class="bg-success text-white">
											<th>Nome</th>
											<th>Cadeira</th>
											<th>Mês</th>
											<th>Opção</th>
										</tr>
									</thead>
									<tbody>
										@for($i=0; $i < 6; $i++)
										<tr>
											<td>Fulano de tals e pah</td>
											<td>Cadeira tal</td>
											<td>Junho</td>
											<td class="text-center">
												<a href="#" class="m-2 text-primary">Adverter</a>
												<a href="#" class="m-2 text-danger">Limpar</a>
											</td>
										</tr>
										@endfor
									</tbody>
								</table>
							</div>
						</div>
					</div>

					<div class="row m-2 mt-4">
						<div class="m-2">

						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		//Start do jQuery ao carregar a página
		$(document).ready(function(){
			//Captura do evento para filtragem
			$("#filtroMonitores").on("keyup", function(){
				//Captura do valor de entrada da busca
				var entrada = $(this).val();

				//Função para percorrer linhas da tabela com base na id
				$("#monitores #nome").each(function(){
					//Se não for encontrado o valor digitado no texto da linha atual(indexOf)...
					if($(this).text().indexOf(entrada) < 0){
						//...a estrutura pai (td) recebe o valor de display 'none'
						$(this).parent().css('display','none');
						//...senão, o atributo style é reiniciado
					}else{
						$(this).parent().attr('style','');
					}
				});
				//Caso o campo esteja vazio, todos os campos têm seus atributos reiniciados
				if(entrada.length == 0){
					$(this).parent().attr('style','');
				}
			});
		});
	</script>

@endsection
