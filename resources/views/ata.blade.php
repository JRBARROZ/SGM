@extends('layouts.ataLayout')

@section('body')
    
    <ul class="list-inline">
        <li class="list-inline-item font-weight-bold text-secondary">Monitor :</li>
        <li class="list-inline-item">{{$privilegio['name']}}</li>
        {{-- <li class="list-inline-item font-weight-bold text-secondary">Orientador :</li> --}}
        {{-- <li class="list-inline-item">Dados</li> --}}
    </ul>
    <ul class="list-inline">
        @if($privilegio['cargo'] == 'bolsista')
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
                <input type="hidden" value="{{date('d/m/Y')}}" name="data">
                    @csrf
                    <table class="table table-borderless text-center" id="atas">
                    <thead class="thead-dark">
                        <th class="text-justify">Aluno (a)</th>
                        <th scope="col">Curso</th>
                        <th scope="col">Data</th>
                        <th scope="col">Presença</th>
                    </thead>
                    <tbody>
                        @forelse ($alunos as $key => $item)   
                            <tr id="r">
                                <td class="text-justify">{{$item['name']}}</td>
                                <td>{{$sigla[0]['sigla']}}</td>
                                <td>{{date('d/m/Y')}}</td> 
                                <td>
                                    <input type="checkbox" id="{{$key}}" name="value[]" value="{{$item['name']}}" class="">
                                </td>
                            </tr>
                        @empty
                            Sua query veio sem dados.
                        @endforelse
                    </tbody>
                </table>
              {!! Form::submit('Salvar Ata', ['class'=> 'btn btn-success', 'id'=>'btn-submit']); !!}
            {!! Form::close(); !!}
        </div>
    </div>
    <br>
@endsection