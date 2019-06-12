@extends('layouts.app')

@section('content')
<div class="container">
    <table class="table table-borderless mt-5 text-center">
        <thead class="bg-success text-white">
            <tr>
                <th scope="col">Data</th>
                <th scope="col">Horário</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @if(sizeof($atas) > 0)
                @foreach ($atas as $item)
                    <tr style="text-align:center;">
                        <td>Ata - {{$item->data}}</td>
                        <td>{{$horario}}</td>
                        <td>
                            <a href="{{route('atasPdf', $item->id)}}">Baixar</a>
                            <a class="ml-3 text-danger" onclick="confirmacao()" href="{{route('ataDestroy', $item->id)}}">Deletar</a>
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
</div>
<script>
function confirmacao() {
    if (confirm("Você realmente deseja deletar o documento?")) {
    } else {
      return false;
    }
} 
</script>
@endsection