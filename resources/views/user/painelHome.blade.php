@extends('layouts.dashboard', ['current'=>'home'])

@section('content')
    <div class="row user-img"></div>
    <div class="row">
        <div class="col-12 text-center">
            <img src="{{asset('imagens/marsh.jpg')}}" alt="..." class="img-thumbnail rounded-circle user-profile-img">
            <h2>USERNAME</h2>
            <h3 class="text-secondary"><i>Monitor de (Cadeira)</i></h3>         
        </div>
    </div>
    <hr>
@endsection