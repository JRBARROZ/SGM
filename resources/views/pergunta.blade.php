@extends('layouts.app')

@section('content')

{{$pergunta->titulo}}
{{$pergunta->texto}}
{{$pergunta->cursos[0]->sigla}}
{{$pergunta->created_at}}

@endsection