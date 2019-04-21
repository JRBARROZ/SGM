@extends('layouts.dashboard', ['current'=>'home'])

@section('content')
    <div class="row user-img"></div>
    <div class="row">
        <div class="col-12 text-center">
            <img src="{{asset($user->avatar)}}" alt="..." class="img-thumbnail rounded-circle user-profile-img">
            <h2>{{Auth::user()->name}} {{Auth::user()->sobrenome}}</h2>
            @switch(Auth::user()->tipo)
                @case('monitor')
                    <h3 class="text-secondary"><i>Monitor de (Redes de Computadores)</i></h3>          
                    @break
                @case('aluno')
                    @foreach($user->cursos as $item)
                        <h3 class="text-secondary"><i>Aluno do {{Auth::user()->periodo}}° Periodo - {{$item->sigla}}  </i></h3>          
                    @endforeach
                    @break
                @default
                    <h3 class="text-secondary"><i>Staff</i></h3>          
            @endswitch
        </div>
    </div>
    <hr>
    <br>
    <div class="row">
        {{-- Tópicos Fórum --}}
        @component('components.dsCard')
            @slot('nome')
                Tópicos no Fórum
            @endslot 
            @slot('valor')
                {{sizeof($perguntas)}}
            @endslot
            {{route('user.create')}}
        @endcomponent
        {{-- Tópicos Resolvidos --}}
        @component('components.dsCard')
            @slot('nome')
                Tópicos Resolvidos
            @endslot 
            @slot('valor')
                0
            @endslot
        @endcomponent
        {{-- Votos --}}
        @component('components.dsCard')
            @slot('nome')
                Votos
            @endslot 
            @slot('valor')
                0
            @endslot
        @endcomponent
    </div>
    <br><br>
@endsection