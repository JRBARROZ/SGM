<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('bibliotecas/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bibliotecas/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sb-admin.min.css') }}">
    <style>
        .user-img{
            background:transparent url('{{asset('imagens/imgcadastro.jpg')}}') no-repeat center center;
            height:200px;
            margin-top:-50px;
            position:relative;
            min-height: 200px; 
            background-position: center;
            background-attachment: fixed;
            background-size: cover;
        }
        .user-img:before{
            content: '';
            top:0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            position: absolute;
        }
        .user-profile-img{
            margin-top:-50px;
            width: 150px;
            height: 130px;
            background-size: cover;
        }
        hr{ 
            border: 0; 
            height: 1px; 
            background-image: -webkit-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0);
            background-image: -moz-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0);
            background-image: -ms-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0);
            background-image: -o-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0); 
        }
    </style>
    <title>Dashboard</title>
</head>
<body class="bg-light fixed-nav sticky-footer" id="page-top">
    @component('components.dsNavbar', ['current'=>$current])   
    
    @endcomponent
    <div class="container-fluid" >
        <div class="content-wrapper">
            @yield('content') 
        </div>
        @component('components.dsFooter')
            
        @endcomponent    
    </div>
    <script type="text/javascript" src="{{ asset('bibliotecas/jquery/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bibliotecas/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bibliotecas/jquery-easing/jquery.easing.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/sb-admin.min.js') }}"></script>
</body>
</html>