@extends('layouts.layout')

@section('main')


<div class="container-xl margin50">


    <div class="card m-2">

        <div class="card-body">
            <img class="card-img-top" src="{{$photo->img}}" alt="">
            <h3 class="card-text mt-3"> Autore: {{$photo->user->name}}</h3>
        </div>
    </div>

</div>


@endsection
