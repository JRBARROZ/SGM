@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group">
                            <input type="text" class="form-control" name="matricula" placeholder="Matrícula..." required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="senha" placeholder="Senha..." required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-block">Entrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
