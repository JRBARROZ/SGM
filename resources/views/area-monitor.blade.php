@extends('layouts.app')

@section('content')

<div class="col-md-3 col-6 mr-3 mb-5 mt-0 p-0">
    <h3>Agendar Monitoria</h3>
    <form action="{{ route('monitoria-agendar') }}" method="POST">
            Titulo da atividade
            <input type="text" class="form-group form-control" name="titulo" placeholder="assunto da monitoria">
            Descrição da atividade
            <textarea class="form-group form-control" name="descricao" placeholder="descrição da monitoria"></textarea>
            Horário
            inicio:
            <input class="form-group form-control" type="time" name="hora_inicio">
            termino:
            <input class="form-group form-control" type="time" name="hora_fim">
            Data
            <input type="date" name="data" class="form-group form-control">
        <button class="btn btn-success">Salvar</button>
    </form>
</div>



@endsection