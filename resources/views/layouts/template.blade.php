<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>

    </head>
    <body>
        @include('layouts.header')
        <br>
        @include('layouts.message')
        @yield('content')
        <br>
        @include('layouts.footer')
    </body>
</html>

<style>
.box{
    width: 20%;
    display: inline-block;
    margin-right: 10px;
}

.inline-block{
    display: inline-block;
}

.block{
    display: block;
    width: 100%;
}

.mid-pad{
    text-align: center; 
    margin-right: 2.2%;
    margin-left: 2.2%; 
    margin-bottom: 40px;
}

.small-pad{
    text-align: center; 
    margin-right: 1%;
    margin-left: 1%; 
    margin-bottom: 30px;
}

.fit-300{
    width:300px; 
    height:300px; 
    object-fit: scale-down;
}

.fit-150{
    width:150px; 
    height:150px; 
    object-fit: scale-down;
}


.no-color{
    color:inherit;
    text-decoration: none;
}
.no-color:hover{
    color:inherit;
    text-decoration: none;
}
</style>
