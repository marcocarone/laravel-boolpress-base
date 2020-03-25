@extends('layouts.layout')

@section('main')


<form class="margin50" action="{{route("posts.store")}}" method="post">
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
    @method("POST")
    <div class="container-xl">
        <div class="form-row">
            <div class="form-group col-md-3">
                <input class="form-control" type="text" name="slug" value="" placeholder="slug">
            </div>
            <div class="form-group col-md-3">
                <input class="form-control" type="text" name="titolo" value="" placeholder="titolo">
            </div>
            <div class="form-group col-md-3">
                <input class="form-control" type="text" name="img" value="" placeholder="img">
            </div>

            <div class="form-group col-md-3">
                <input class="form-control" type="text" name="autore" value="" placeholder="autore">
            </div>
            <div class="form-group col-md-12">

                <textarea class="form-control" name="descrizione" rows="6" cols="80" placeholder="inserisci il testo dell'articolo"></textarea>
            </div>

            <div class="form-group col-md-12">
            <button class="btn btn-primary" type="submit" name="button">Salva</button>
            </div>


        </div>
    </div>
</form>

@endsection
