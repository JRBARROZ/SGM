@extends('layouts.app', ['current'=>'home'])

@section('content')
<div class="container">
    <br><br>
    <div class="row">
        @if($user->id == Auth::id() || Auth::user()->tipo == 'admin')
            <div class="card text-center max" style="width:100%;max-width:500px;border:none;margin-left:10px;margin-right:10px;">
        @else
            <div class="card text-center max" style="width:100%;border:none;margin-left:10px;margin-right:10px;">
        @endif    
            <div class="col user-img">
            </div>
            <div class="col text-center" >
                <img src="{{asset('storage/avatar/'.$user->avatar)}}" alt="..." class="img-thumbnail rounded-circle user-profile-img">
                <h2 class="text-dark">{{$user->name}} {{$user->sobrenome}}</h2>
                @switch($user->tipo)
                    @case('monitor')
                        <h3 class="text-secondary"><i>Monitor</i></h3>
                    @break
                @case('aluno')
                    @foreach($user->cursos as $item)
                        <h3 class="text-secondary"><i>Aluno do {{$user->periodo}}° Periodo - {{$item->sigla}}  </i></h3>
                    @endforeach
                @break

                @default
                    <h3 class="text-secondary"><i>Staff</i></h3>
                @endswitch
                    <h4 class="text-secondary"><i> IFPE - Instituto Federal de Pernambuco</i></h4>
                <hr>
            </div>
        </div>
        <hr>
        @if($user->id == Auth::id() || Auth::user()->tipo == 'admin')
            <div class="col">
                <div class="card" style="margin-top:3%;border:none;">
                    <div class="card-title bg-success" style="padding:11px;">
                        <h3 class="text-light text-center"><i class="fa fa-fw fa-user"></i> Seus dados</h3>
                    </div>
                    <div class="card-body">
                        {{Form::open(['route'=>['user.update', 'id'=>$user->id], 'method'=>'PUT','enctype'=>'multipart/form-data'])}}
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="nome">NOME :</label>
                                    {{Form::text('nome', $user->name, ['id'=>'nome', 'class'=>'form-control input', 'placeholder'=>'Seu Nome', 'required'])}}
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="sobreNome" class="">SOBRENOME :</label>
                                    {{Form::text('sNome', $user->sobrenome, ['id'=>'sobreNome','class'=>'form-control input', 'placeholder'=>'Seu Segundo Nome', 'required'])}}
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="matricula">MATRICULA :</label>
                                    {{Form::text('matricula', $user->matricula, ['id'=>'matricula','class'=>'form-control input', 'placeholder'=>'Sua Matrícula ', 'required'])}}
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="periodo">PERÍODO:</label>
                                    {{Form::number('periodo', $user->periodo, ['id'=>'periodo','class'=>'form-control input', 'placeholder'=>'Seu Período ', 'required', 'min'=>0,'max'=>'4'])}}
                                </div>
                                <div class="form-group col-md-3">
                                    @foreach($user->cursos as $item)
                                        @switch($item->id)
                                            @case(1)
                                                <label for="curso">CURSO :</label>
                                                {{Form::select('curso', array(
                                                    1 => "Informática para a Internet",
                                                    2 => 'Logística',
                                                    3 =>'Gestão da Qualidade'),
                                                    null,['id'=>'curso','class'=>'form-control', 'required'=>true])}}
                                            @break
                                            @case(2)
                                                <label for="curso">CURSO :</label>
                                                {{Form::select('curso', array(
                                                    2 => "Logística",
                                                    1 => 'Informática para a Internet',
                                                    3 =>'Gestão da Qualidade'),
                                                    null,['id'=>'curso','class'=>'form-control', 'required'=>true])}}
                                            @break
                                            @case(3)
                                                <label for="curso">CURSO :</label>
                                                {{Form::select('curso', array(
                                                    3 => "Gestão da Qualidade",
                                                    1 => 'Informática para a Internet',
                                                    2 =>'Logística'),
                                                    null,['id'=>'curso','class'=>'form-control', 'required'=>true])}}
                                            @break
                                        @endswitch
                                    @endforeach
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="turno">TURNO :</label>
                                    {{Form::select('turno', array('M' => 'Manhã', 'T' => 'Tarde'),null,['id'=>'turno','class'=>'form-control', 'required'=>true])}}
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="">E-MAIL :</label>
                                    {{Form::text('email', $user->email, ['class'=>'form-control input', 'placeholder'=>'Seu E-mail','required'])}}
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="prImg">IMAGEM PRINCIPAL :</label>
                                    <div class="input-group">
                                            <div class="custom-file">
                                                {{Form::file('principal', ['id'=>'inputGroupFile04', 'class'=>'custom-file-input', 'files' => true])}}
                                                <label class="custom-file-label" for="inputGroupFile04">Enviar Imagem</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="form-group col-md-6">
                                    <label for="capImg">IMAGEM DE CAPA :</label>
                                    {{Form::file('capa', ['id'=>'capImg', 'class'=>'form-control', 'files' => true])}}
                                </div> --}}
                                @if(session('erro'))
                                    <div class="alert alert-danger col-12">
                                        {{ session('erro')}}
                                    </div>
                                @endif
                                {{-- <div class="form-group col-md-6">
                                    <label for="">PASSWORD :</label>
                                    {{Form::text('nome', null, ['class'=>'form-control input', 'placeholder'=>'Senha'])}}
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="">PASSWORD :</label>
                                    {{Form::text('nome', null, ['class'=>'form-control input', 'placeholder'=>'Repita a Senha'])}}
                                </div> --}}
                                {{Form::submit('Salvar Perfil', ['class'=>'btn btn-success','style="cursor:pointer;"'])}}
                        {{Form::close()}}
                    </div>
                </div>
            </div>
        @endif
    </div>
    <br>
    <div class="row">
        @component('components.dsCard')
            @slot('nome')
                Tópicos
            @endslot
            @slot('valor')
                {{sizeof($perguntas)}}
            @endslot
                {{-- {{route('user.create')}} --}}
                {{route('testing', $user->id)}}
        @endcomponent

        @if(Auth::user()->tipo != 'aluno')    
            @component('components.dsCard')
                @slot('nome')
                    Atas
                @endslot
                    @slot('valor')
                    {{$atas}}
                @endslot
                    {{route('listagem', $user->id)}}
            @endcomponent
        @endif
        @component('components.dsCard')
            @slot('nome')
                Votos
            @endslot
            @slot('valor')
                0
            @endslot
                Catraca
        @endcomponent
    </div>
    <br>
</div>
@endsection
