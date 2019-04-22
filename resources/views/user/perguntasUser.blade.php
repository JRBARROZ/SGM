@extends('layouts.dashboard', ['current'=>'perguntasUser'])

@section('content')
<div class="card bg-dark" style="padding:10px;border:none;margin-top:10px;">
    <div class="row">
        @foreach ($perguntas as $item)
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 slide-fwd-center" style="box-shadow:none;">
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
    </div>
@endsection