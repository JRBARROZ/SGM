<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Ata</title>
</head>
<body>
    <header>
        <div class="text-center">
            <img src="http://cebas.mec.gov.br/images/jpg/brasao_oficial.png" style="width: 10%">
            <div class="font-weight-bold">Ministério da Educação</div>
            <div>Secretaria de Educação Profissional e Tecnologia</div>
            <div>Instituto Federal de Educação, Ciência e Tecnologia de Pernambuco</div>
            <div class="font-italic">Campus Igarassu</div>
            <p class="mt-3 font-weight-bold"><u>EDITAL 03/2019 - MONITORIA</u></p>
        </div>
    </header>
    <main>
        <div class="row ml-5 justify-center">
            @if($user->cargo == 'bolsista')
                <div class="" style="margin-left:500px;">
                    <div class="">Voluntário/a (  )</div>
                </div>
                <div>
                    <div class="">Bolsista ( X )</div>
                </div>
            @else
                <div class="" style="margin-left:500px;">
                    <div class="">Voluntário/a ( X )</div>
                </div>
                <div>
                    <div class="">Bolsista (  )</div>
                </div>
            @endif
        </div>
        <hr>
        <div class="row ml-5">Monitor: {{$user->name}}</div>
		<div class="row ml-5">Orientador: {{$orientador[0]->name}}</div>
        <div class="row ml-5">Disciplina: {{$dados_monitor[0]->nome}}</div>
        <div class="row ">
            <table class="mt-5 table table-bordered text-center" style="width:1000px;margin-left:48%;">
                <thead>
                    <tr style="border-color: red">
                        <td class="">
                            Aluno(a)
                        </td>
                        <td class="">
                            Curso
                        </td>
                        <td class="">
                            Data
                        </td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($ata as $item)
                            <tr>
                                <td>{{$item->nome}}</td>
                                <td>{{$user->cursos[0]->sigla}}</td>
                                <td>{{$data}}</td>
                            </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
    <footer class="fixed-bottom">
            <p class="text-center">Av. Alfredo Bandeira de Melo, 320 (Rod. BR-101 Norte, Km 43,5) - CEP: 53620-444 — Igarassu/PE
            (81) 3334-3511 — daee@igarassu.ifpe.edu.br — www.ifpe.edu.br
            <p>
    </footer>
</body>
