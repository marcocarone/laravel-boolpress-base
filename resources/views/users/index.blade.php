@extends('layouts.layout')

@section('main')


<div class="container-xl margin50">

    @foreach ($users as $user)

    <div class="card m-2">

        <div class="card-body">
            <img class="img-thumbnail" src="{{$user->avatar->img}}" alt="">
            <h3 class="card-text "> ID utente: {{$user->id}}</h3>
            <h2 class="card-text mt-3"> Nome: {{$user->name}}</h2>
            <h3 class="card-text "> Email: {{$user->email}}</h3>
            <div class="btn-toolbar">
                <a class="btn btn-primary m-1" href="{{route("users.show", $user)}}">Info<span class="sr-only"></span></a>
            </div>


        </div>
    </div>
    @endforeach
</div>


@endsection
