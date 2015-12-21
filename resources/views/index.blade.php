@extends('template')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-10">
                <h1>{{$posts[0]['titulo']}}</h1>
                <p>Categoria: <a href="#">{{$posts[0]['categoria']}}</a></p>
                <p>{{str_limit($posts[0]['texto'], 100)}}</p>
                <a href="#" class="btn btn-primary">Ler mais</a>
            </div>
            <div class="col-sm-2">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <p>CATEGORIAS</p>
                    </div>
                    <div class="panel-content">
                        <ul>
                            @foreach($posts as $post)
                                <li style="list-style: none"><a class="btn btn-link" href="#">{{$post['categoria']}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <h1>{{$posts[1]['titulo']}}</h1>
                <p>Categoria: <a href="#">{{$posts[1]['categoria']}}</a></p>
                <p>{{str_limit($posts[1]['texto'], 100)}}</p>
                <a href="#" class="btn btn-primary">Ler mais</a>
            </div>
            <div class="col-sm-4">
                <h1>{{$posts[2]['titulo']}}</h1>
                <p>Categoria: <a href="#">{{$posts[2]['categoria']}}</a></p>
                <p>{{str_limit($posts[2]['texto'], 100)}}</p>
                <a href="#" class="btn btn-primary">Ler mais</a>
            </div>
            <div class="col-sm-4">
                <h1>{{$posts[3]['titulo']}}</h1>
                <p>Categoria: <a href="#">{{$posts[3]['categoria']}}</a></p>
                <p>{{str_limit($posts[3]['texto'], 100)}}</p>
                <a href="#" class="btn btn-primary">Ler mais</a>
            </div>
        </div>
    </div>
@stop