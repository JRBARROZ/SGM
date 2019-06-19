@extends('layouts.adm')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md">
				<div class="container">
					<br>
					<div class="row justify-content-center">
						<div class="col-lg-6">
							<div class="m-2 border text-center">
								<button class="btn btn-light btn-block text-dark" data-toggle="collapse" data-target="#atas">
									<h3>Alunos</h3>
									<strong class="h4">{{$totalAlunos}}</strong>
								</button>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="m-2 border text-center">
								<button class="btn btn-light btn-block text-dark" data-toggle="collapse" data-target="#monitores">
									<h3>Monitores</h3>
									<strong class="h4">{{$totalMonitores}}</strong>
								</button>
							</div>
						</div>
					</div>

					<div class="row justify-content-center">
						<!--Listar arquivos de relatórios entregues-->
						<div id="atas" class="col-12 collapse">
							<div class="m-2">
								<div class="mt-4 mb-4">
									<input type="text" class="form-control" placeholder="Filtrar por nome...">
								</div>
							</div>
							<div class="m-2">
								<table class="table table-hover table-borderless ">
									<thead class="">
										<tr class="bg-success text-light">
											<th>Aluno</th>
											<th>Curso</th>
											<th>Periodo</th>
											<th class="text-center">Ações</th>
										</tr>
									</thead>
									<tbody>
										@foreach ($alunos as $item)
											<tr>
												<td>{{$item->name}}</td>
												<td>{{$item->cursos[0]->sigla}}</td>
												<td>{{$item->periodo}}</td>
												<td>
													<div class="row justify-content-center">
                                                        <a href="{{route('user.show', ['id' => $item->id])}}" class="m-2 text-primary">Visitar Perfil</a>
                                                    </div>
												</td>
											</tr>
										@endforeach
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
											<th class="text-center">Ações</th>
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
							<h3>Relatórios entregues :</h3>
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
