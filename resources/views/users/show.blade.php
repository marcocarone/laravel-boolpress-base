@extends('layouts.layout')

@section('main')

{{-- @dd($user->photos); --}}
<div class="container-xl margin50">


    <div class="card m-2">

        <div class="card-body">
            <img class="img-thumbnail" src="{{$user->avatar->img}}" alt="">
            <h3 class="card-text "> ID utente: {{$user->id}}</h3>
            <h2 class="card-text mt-3"> Nome: {{$user->name}}</h2>
            <h3 class="card-text "> Email: {{$user->email}}</h3>

            <div class="card-body">
                <h2 class="card-text mt-3"> Foto caricate:</h2>
                @foreach ($user->photos as $photo)
                <img class="card-img-top mb-3" src="{{$photo->img}}" alt="">
                @endforeach
            </div>

        </div>
    </div>

</div>


@endsection
