<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ata 00/00/000</title>
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
    </style>
</head>
<body>
    <div class="container">
        {{-- <div class="text-center"> --}}
            {{-- <img src="{{asset('imagens/ifpe2.png')}}" alt=""> --}}
        {{-- </div> --}}
        <h2 class="title-background text-center">
             Ata - Redes de Computadores - 00/00/0000
        </h2>
        <ul class="list-inline">
            <li class="list-inline-item font-weight-bold text-secondary">Monitor :</li>
            <li class="list-inline-item">Jhonatas Rodrigues de Barros</li>
            <li class="list-inline-item font-weight-bold text-secondary">Orientador :</li>
            <li class="list-inline-item">Ramon Motta Farias</li>
        </ul>
        <ul class="list-inline">
                <li class="list-inline-item font-weight-bold text-secondary">Bolsista (X)</li>
                <li class="list-inline-item text font-weight-bold text-secondary">Voluntário (X)</li>
            </ul>
        <div class="row">
            <div class="col"> 
                <table class="table table-borderless text-center">
                    <thead class="thead-dark">
                        <th scope="col text-justify" class="text-justify">Aluno (a)</th>
                        <th scope="col">Curso</th>
                        <th scope="col">Data</th>
                        <th scope="col text-right">Presença</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-justify">Jhonatas Rodrigues de Barros</td>
                            <td>IPI</td>
                            <td>00/00/2000</td>
                            <td>P</td>
                        </tr>
                        <tr>
                            <td class="text-justify">Eduardo Bispo Ferreira</td>
                            <td>IPI</td>
                            <td>00/00/2000</td>
                            <td>F</td>
                        </tr>
                        <tr>
                            <td class="text-justify">Major Silvio Paiva</td>
                            <td>IPI</td>
                            <td>01/03/2000</td>
                            <td>P</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </body>
</html>