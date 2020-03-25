@extends('layouts.layout')

@section('main')


<form class="margin50" action="{{route("posts.update", $post)}}" method="post">
    {{-- inserisco alert con errori --}}
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    @csrf
    @method("PATCH")
    <div class="container-xl">
        <div class="form-row">
            <div class="form-group col-md-3">
                <input class="form-control" type="text" name="slug" value="{{$post->slug}}" placeholder="slug">
            </div>
            <div class="form-group col-md-3">
                <input class="form-control" type="text" name="titolo" value="{{$post->titolo}}" placeholder="titolo">
            </div>
            <div class="form-group col-md-3">
                <input class="form-control" type="text" name="img" value="{{$post->img}}" placeholder="img">
            </div>

            <div class="form-group col-md-3">
                <input class="form-control" type="text" name="autore" value="{{$post->autore}}" placeholder="autore">
            </div>
            <div class="form-group col-md-12">

                <textarea class="form-control" name="descrizione" rows="6" cols="80" placeholder="inserisci il testo dell'articolo">{{$post->descrizione}}</textarea>
            </div>

            <div class="form-group col-md-12">
            <button class="btn btn-primary" type="submit" name="button">Salva</button>
            </div>


        </div>
    </div>
</form>

@endsection
