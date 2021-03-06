@extends('template')

@section('content')

    @foreach($posts as $post)
        <h2>
            <a href="{{route('show', [$post['id']])}}">{{$post['titulo']}}</a>
        </h2>
        <p class="lead">
            by <a href="index.php">Start Bootstrap</a>
        </p>
        <p><span class="glyphicon glyphicon-time"></span> Posted on August 28, 2013 at 10:00 PM</p>
        <hr>
        <img class="img-responsive" src="http://placehold.it/900x300" alt="">
        <hr>
        <p>{{$post['texto']}}</p>
        <a class="btn btn-primary" href="{{route('show', [$post['id']])}}">Saiba Mais <span class="glyphicon glyphicon-chevron-right"></span></a>

        <hr>
    @endforeach
@stop