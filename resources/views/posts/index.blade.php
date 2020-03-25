@extends('layouts.layout')

@section('main')


<div class="container-xl margin50">
    @foreach ($posts as $post)

    <div class="card m-2">

        <div class="card-body">
            <img class="card-img-top" src="{{$post->img}}" alt="{{$post->titolo}}">
            <h2 class="card-title mt-3"> Titolo: {{$post->titolo}}</h2>

            <p class="card-text"> Descrizione: {{$post->descrizione}}</p>
            <h3 class="card-text"> Autore: {{$post->autore}}</h3>
            <div class="btn-toolbar">
                <a class="btn btn-primary m-1" href="{{route("posts.show", $post)}}">Vedi<span class="sr-only"></span></a>
              
            </div>


        </div>
    </div>
    @endforeach
</div>


@endsection
