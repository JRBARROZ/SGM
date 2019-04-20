<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ds.css') }}">
    <title>Dashboard</title>
</head>
<body class="bg-light fixed-nav sticky-footer" id="page-top">
    @component('components.dsNavbar', ['current'=>$current])   
    @endcomponent
    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12" style="background-color:red;">
                    
                </div>
            </div>
        </div>
        @component('components.dsFooter')
            
        @endcomponent    
    </div>
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/ds.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/easing.js') }}"></script>
</body>
</html>