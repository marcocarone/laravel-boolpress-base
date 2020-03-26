@extends('layouts.layout')

@section('main')


<div class="container-xl margin50">
    @foreach ($photos as $photo)

    <div class="card m-2">

        <div class="card-body">
            <img class="card-img-top" src="{{$photo->img}}" alt="">
            <div class="btn-toolbar">
                <a class="btn btn-primary m-1" href="{{route("photos.show", $photo)}}">Vedi<span class="sr-only"></span></a>
            </div>


        </div>
    </div>
    @endforeach
</div>


@endsection
