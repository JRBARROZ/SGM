@extends('layouts.app')

@section('content')
{{$curso->nome}}
</br>
@forelse ($monitorias as $monitoria)
    {{$monitoria->data}}
    {{$monitoria->hora_inicio}}
    {{$monitoria->hora_fim}}
    {{$monitoria->titulo}}
    {{$monitoria->descricao}}
@empty
    algo caso n tenha nenhuma monitoria agendada por ele
@endforelse

<h3>Agendar Monitoria</h3>
<form action="{{ route('monitoria-agendar') }}" method="POST">
    @csrf
        Titulo da atividade
        <input type="text"  name="titulo" placeholder="assunto da monitoria">
        </br>
        Descrição da atividade
        <textarea  name="descricao" placeholder="descrição da monitoria"></textarea>
        </br>
        Horário
        inicio:
        <input  type="time" name="hora_inicio">
        </br>
        termino:
        <input  type="time" name="hora_fim">
        </br>
        Data
        <input type="date" name="data" >
        </br>
    <button class="btn btn-success">Salvar</button>
</form>



@endsection