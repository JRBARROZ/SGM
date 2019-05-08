@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-md-4">
            <div class="m-2">
                <button class="btn btn-primary btn-block mb-1" data-toggle="collapse" data-target="#formCadastro" style="border-radius: 0px;">Agendar Monitoria</button>

                <div id="formCadastro" class="collapse shadow p-3 ">
                    <form action="{{ route('monitoria-agendar') }}" method="POST">
                        @csrf
                            <div class="form-group">
                                <label>
                                    Titulo da atividade: *
                                </label>
                                <input type="text"  name="titulo" class="form-control" placeholder="assunto da monitoria" required autofocus="">
                            </div>
                            <div class="form-group">
                                <label>
                                    Descrição da atividade: *
                                </label>
                                <textarea class="form-control" name="descricao" placeholder="descrição da monitoria" required></textarea>
                            </div>
                            <div class="form-group">
                                <label>
                                    Início: *
                                </label>
                                <input class="form-control" type="time" name="hora_inicio" required>
                            </div>
                            <div class="form-group">
                                <label>
                                    Término: *
                                </label>
                            <input class="form-control" type="time" name="hora_fim" required>
                            </div>
                            <div class="form-group">
                                <label>
                                    Data: *
                                </label>
                            <input type="date" name="data" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-success" type="submit">Salvar</button>
                                <button class="btn btn-danger" type="reset" data-toggle="collapse" data-target="#formCadastro">Cancelar</button>
                            </div>
                    </form>
                </div>

                <button class="btn btn-success btn-block mt-3" data-toggle="collapse" data-target="#formRelatorio" style="border-radius: 0px;">Gerar Relatório</button>

                <div id="formRelatorio" class="collapse p-3 shadow">
                    <p>*Para gerar seu relatório, selecione um intervalo de datas referente ao período vigente.</p>
                    <hr>
                    <form action="">
                        @csrf
                        <div class="form-group">
                            Data de Início:
                            <input type="date" class="form-control" name="data_ini">
                        </div>
                        <div class="form-group">
                            Data Final:
                            <input type="date" class="form-control" name="data_fim">
                        </div>
                        <div class="form-group">
                           <button class="btn btn-primary" type="submit">Gerar Relatório</button>
                           <button class="btn btn-danger" type="reset" data-toggle="collapse" data-target="#formRelatorio">Cancelar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
            <div class="m-2">
                <table class="table table-bordered table-hover text-center table-responsive m-auto m-2">
                    <thead>
                        <tr>
                            <th class="bg-success text-light text-center p-3 h3" colspan="6">{{$curso->nome}}</th>
                        </tr>
                        <tr class="text-center">
                            <th>Títutlo</th>
                            <th>Descrição</th>
                            <th>Início / Termino</th>
                            <th>Data</th>
                            <th>Periodo</th>
                            <th>ID para botões</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($monitorias as $monitoria)
                            <tr>
                                <td>{{$monitoria->titulo}}</td>
                                <td>{{$monitoria->descricao}}</td>
                                <td>{{$monitoria->hora_inicio}} / {{$monitoria->hora_fim}}</td>
                                <td>{{$monitoria->data}}</td>
                                <td>{{$monitoria->periodo}}</td>
                                <td>
                                    <a href="{{ route('ataIndex', $monitoria->id) }}">Ata</a>
                                    <a href="{{ route('monitoria-deletar', $monitoria->id) }}" class="p-2 btn-link text-danger">Deletar</a>
                                </td>
                            </tr>
                        @empty
                        <tr>
                            <td colspan="6">Você ainda não agendou nenhuma monitoria.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
