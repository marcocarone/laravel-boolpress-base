@extends('layouts.layout')

@section('main')


<div class="container-xl margin50">


    <div class="card m-2">

        <div class="card-body">
            <img class="card-img-top" src="{{$post->img}}" alt="{{$post->titolo}}">
            <h2 class="card-title mt-3"> Titolo: {{$post->titolo}}</h2>

            <p class="card-text"> Descrizione: {{$post->descrizione}}</p>
            <h3 class="card-text"> Autore: {{$post->autore}}</h3>
            <div class="btn-toolbar">

                <a class="btn btn-warning m-1" href="{{route("posts.edit", $post)}}">Modifica<span class="sr-only"></span></a>
                <form action="" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger m-1" type="submit">Cancella</button>
                </form>
            </div>


        </div>
    </div>

</div>


@endsection
