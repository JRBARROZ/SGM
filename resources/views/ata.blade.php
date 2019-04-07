@extends('layouts.ataLayout')

@section('body')
    <ul class="list-inline">
        <li class="list-inline-item font-weight-bold text-secondary">Monitor :</li>
        <li class="list-inline-item">{{$monitor['name']}}</li>
        <li class="list-inline-item font-weight-bold text-secondary">Orientador :</li>
        <li class="list-inline-item">Dados</li>
    </ul>
    <ul class="list-inline">
        @if($monitor['cargo'] == 'bolsista')
            <li class="list-inline-item font-weight-bold text-secondary">Bolsista (X)</li>
            <li class="list-inline-item text font-weight-bold text-secondary">Voluntário ( )</li>
        @else
            <li class="list-inline-item font-weight-bold text-secondary">Bolsista ( )</li>
            <li class="list-inline-item text font-weight-bold text-secondary">Voluntário (X)</li>
        @endif    
    </ul>
    <div class="row">
        <div class="col">
            {!! Form::open(['route'=>'index-atas']); !!}
                    @csrf
                    <table class="table table-hover text-center">
                    <thead class="thead-dark">
                        <th class="text-justify">Aluno (a)</th>
                        <th scope="col">Curso</th>
                        <th scope="col">Data</th>
                        <th scope="col">Presença</th>
                    </thead>
                    <tbody>
                        @forelse ($alunos as $key => $item)   
                            <tr>
                                <td class="text-justify">{{$item['name']}}</td>
                                <td>IPI</td>
                                <td>{{date('d/m/Y')}}</td> 
                                <td>
                                    <input type="checkbox" id="{{$key}}" name="options[{{$key}}]" value="{{$item['name']}}">
                                </td>
                            </tr>
                        @empty
                            Sua query veio sem dados.
                        @endforelse
                    </tbody>
                </table>
              {!! Form::submit('Salvar Ata', ['class'=> 'btn btn-success']); !!}
            {!! Form::close(); !!}
        </div>
    </div>
    <br>
@endsection