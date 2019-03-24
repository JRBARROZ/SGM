@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                            <div class="form-group">
                                <input type="text" class="form-control" name="nome" placeholder="Nome completo...">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="sobrenome" placeholder="sobrenome...">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="tipo" placeholder="tipo...">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="periodo" placeholder="periodo...">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="curso" placeholder="curso...">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="matricula" placeholder="Matrícula..." required>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="senha1" placeholder="Senha..." required>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="senha2" placeholder="Repita a senha..." required>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="E-mail válido" required>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success btn-block">Cadastrar</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
