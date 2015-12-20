@extends('template')

@section('content')
    <div class="container">
        <div class="row">
            <ul>
                @foreach($posts as $post)
                    <li>{{$post}}</li>
                @endforeach
            </ul>


        </div>
    </div>
@stop