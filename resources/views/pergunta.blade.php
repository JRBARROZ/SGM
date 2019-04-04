@extends('layouts.app')

@section('content')

{{$pergunta[0]->titulo}}
{{$pergunta[0]->texto}}
{{$pergunta[0]->sigla}}
{{$pergunta[0]->created_at}}

@endsection