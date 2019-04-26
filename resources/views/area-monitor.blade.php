@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-md-4 p-0">
            <div class="m-2">
                <h3 class="bg-success text-light text-center p-3">Agendar Monitoria</h3>
                <form action="{{ route('monitoria-agendar') }}" method="POST">
                    @csrf
                        <div class="form-group">
                            <label>
                                Titulo da atividade:
                            </label>
                            <input type="text"  name="titulo" class="form-control" placeholder="assunto da monitoria">
                        </div>
                        <div class="form-group">
                            <label>
                                Descrição da atividade:
                            </label>
                            <textarea class="form-control" name="descricao" placeholder="descrição da monitoria"></textarea>
                        </div>
                        <div class="form-group">
                            <label>
                                Início:
                            </label>
                            <input class="form-control" type="time" name="hora_inicio">
                        </div>
                        <div class="form-group">
                            <label>
                                Término:
                            </label>
                        <input class="form-control" type="time" name="hora_fim">
                        </div>
                        <div class="form-group">
                            <label>
                                Data
                            </label>
                        <input type="date" name="data" class="form-control">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success">Salvar</button>
                        </div>
                </form>
            </div>
        </div>
        <div class="col-md-8">
            <div class="m-2">
                <table class="table table-bordered table-hover">
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
                                <td>{{$monitoria->id}}
                                    <a href="{{ route('ataIndex', $monitoria->id) }}" class="float-right mr-2 text-info"><span>gerar ata</span></a>

                                </td>
                            </tr>
                        @empty
                        <tr>
                            <td>Nenhuma monitoria agendada</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>



@endsection
