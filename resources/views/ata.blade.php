@extends('layouts.app')
    @if (session('check'))
        <div class="alert alert-success">
            {{ session('check') }}
        </div>
    @endif
@section('content')
<div class="container mt-4">
    <ul class="list-inline">
        <li class="list-inline-item font-weight-bold text-secondary">Ata : </li>
        <li class="list-inline-item">{{$dados_monitor[0]->nome}}</li>
        <li class="list-inline-item font-weight-bold text-secondary">Data : </li>
        <li class="list-inline-item">{{date('d/m/Y')}}</li>
    </ul>
    <ul class="list-inline">
        <li class="list-inline-item font-weight-bold text-secondary">Monitor :</li>
        <li class="list-inline-item">{{Auth::user()->name}}</li>
        <li class="list-inline-item font-weight-bold text-secondary">Orientador :</li>
        <li class="list-inline-item">{{$orientador[0]->name}}</li>
    </ul>
    <ul class="list-inline">
        @if(Auth::user()->cargo == 'bolsista')
            <li class="list-inline-item font-weight-bold text-secondary">Bolsista (X)</li>
            <li class="list-inline-item text font-weight-bold text-secondary">Voluntário ( )</li>
        @else
            <li class="list-inline-item font-weight-bold text-secondary">Bolsista ( )</li>
            <li class="list-inline-item text font-weight-bold text-secondary">Voluntário (X)</li>
        @endif
    </ul>
    {!! Form::open(['route'=>['ataStore', $monitoria_id]]) !!}
        <div class="row">
            <div class="col"> 
                <table class="table table-borderless text-center">
                    <thead class= "table-dark bg-success">
                        <th scope="col text-justify" class="text-justify">Aluno (a)</th>
                        <th scope="col">Curso</th>
                        <th scope="col">Data</th>
                        <th scope="col text-right">Presença</th>
                    </thead>
                    <tbody>
                        @forelse ($alunos as $aluno) 
                            <tr class="hover">
                                <td class="text-justify">{{$aluno->name}}</td>
                                <td>{{$aluno->cursos[0]->sigla}}</td>
                                <td>{{date('d/m/Y')}}</td>
                                <td>{!! Form::checkbox('presente[]', $aluno->id,false)!!}</td>
                            </tr>
                        @empty
                        
                        @endforelse
                    </tbody>
                </table>
                <hr>
            </div>
        </div>
        {!! Form::submit('Salvar',['class'=>'btn btn-success'])!!}
    {!! Form::close() !!}
</div>
@endsection