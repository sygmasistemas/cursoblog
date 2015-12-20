<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Blog do curso</title>
    <link rel="stylesheet" href="{{asset('bower_components/bootstrap/dist/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
</head>
<body>
@include('partials.nav')
@yield('content')
@include('partials.footer')

<script src="{{asset('bower_components/jquery/dist/jquery.js')}}"></script>
<script src="{{asset('bower_components/bootstrap/dist/js/bootstrap.js')}}"></script>
</body>
</html>