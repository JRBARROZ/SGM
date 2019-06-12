@extends('layouts.app', ['current'=>'perguntasUser'])

@section('content')
<div class="container">
    <div class="title bg-success text-center text-white" style="margin-top:3%;padding:10px;">
        <h2>Seus Tópicos</h2>
    </div>
    <br>
    @if(sizeof($perguntas) == 0)
        @if(Auth::user()->tipo == 'admin' || Auth::user()->tipo == 'aluno')
            <h2 class="text-dark">Parece que esse monitor não tem tópicos no nosso fórum :/</h2>  
        @else
            <h2 class="text-dark">Parece que você não tem tópicos no nosso fórum :/</h2>  
        @endif
    <div class="row">
        @else
        @foreach ($perguntas as $item)
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 slide-fwd-center">
            <a href="{{route('exibir-pergunta', $item->id)}}" class="text-dark">        
                <div class="box-card text-center">                            
                    <div class="title">
                        <h5>{{$item->titulo}}</h5>
                        <p class="text-secondary"><i>{{$data}} - {{Auth::user()->name}}</i></p>
                    </div>
                    <h2></h2>
                    <a href="{{route('exibir-pergunta', $item->id)}}">Ver Discussão >></a>
                </div>
            </a>
        </div>
        
        @endforeach
    </div>
    @endif
</div>
@endsection