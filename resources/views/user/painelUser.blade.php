@extends('layouts.dashboard', ['current'=>'user'])

@section('content')
<div class="card bg-light" style="padding:10px;border:none;">
    <div class="card-title" style="border-bottom:2px dotted green">
        <h3 class="text-success text-center"><i class="fa fa-fw fa-user"></i> Altere seus dados</h3>
    </div>
    <div class="card-body">
        {{Form::open(['route'=>['user.update', 'id'=>Auth::id()], 'method'=>'PUT','enctype'=>'multipart/form-data'])}}
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
                    <label for="curso">CURSO :</label>
                    {{Form::select('curso', array(null => "Por favor Selecione", 1 => 'Informática para a Internet', 2 => 'Logística', 3 =>'Gestão da Qualidade'), null,['id'=>'curso','class'=>'form-control', 'required'=>true])}}    
                </div>
                <div class="form-group col-md-3">
                    <label for="turno">TURNO :</label>
                    {{Form::select('turno', array(null => "Por favor Selecione", 'M' => 'Manhã', 'T' => 'Tarde'),null,['id'=>'turno','class'=>'form-control', 'required'=>true])}}
                </div>
                <div class="form-group col-md-12">
                    <label for="">E-MAIL :</label>
                    {{Form::text('email', $user->email, ['class'=>'form-control input', 'placeholder'=>'Seu E-mail','required'])}}
                </div>
                <div class="form-group col-md-6">
                    <label for="prImg">IMAGEM PRINCIPAL :</label>
                    <div class="inputup">
                        {{Form::file('principal', ['id'=>'prImg', 'class'=>'form-control upload', 'files' => true])}}
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
            </div>
            {{Form::submit('Salvar Perfil', ['class'=>'btn btn-success','style="cursor:pointer;"'])}}
        {{Form::close()}}
    </div>
</div>    
@endsection