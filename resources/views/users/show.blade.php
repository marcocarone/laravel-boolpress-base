@extends('layouts.layout')

@section('main')

{{-- @dd($user->photos); --}}
<div class="container-xl margin50">


    <div class="card m-2">

        <div class="card-body">
            {{-- <img class="card-img-top" src="{{$photo->img}}" alt=""> --}}
            <h3 class="card-text "> ID utente: {{$user->id}}</h3>
            <h2 class="card-text mt-3"> Nome: {{$user->name}}</h2>
            <h3 class="card-text "> Email: {{$user->email}}</h3>
            @foreach ($user->photos as $photo)
            <div class="card-body">
                <h2 class="card-text mt-3"> Foto caricate:</h2>
                <img class="card-img-top" src="{{$photo->img}}" alt="">
            </div>
            @endforeach
        </div>
    </div>

</div>


@endsection
