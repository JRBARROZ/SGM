<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Ata {{date('d/m/Y')}}</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <style>
        *{
            margin-top: 10px;
        }
        .title-background{
            border-bottom: 2px solid #454d55;
            border-top: 2px solid #454d55;
            padding: 5px;
            margin-top: 20px;
            background-image: url('{{asset('imagens/dimension.png')}}');
        }
        .table{
            cursor:pointer;
        }
        tr:hover{
            background-color: #F0F0F0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="title-background text-center">
             Ata - {{$sigla[0]['nome']}} - {{date('d/m/Y')}}
        </h2>
        @hasSection ('body')
            @yield('body')
        @else
            Não chegou nenhum dado!
        @endif
    </div>
    <script src="{{asset('js/app.js')}}" type="text/javascript"></script>
    <script>
        $(function(){
            $('#atas tr').click(function(event) {
                if (event.target.type !== 'checkbox') {
                    $(':checkbox', this).trigger('click');
                }
            });
        }); 
    </script>
</body>
</html>