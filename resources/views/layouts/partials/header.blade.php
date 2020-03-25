<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{asset("css/app.css")}}">
    <title>Document</title>
</head>

<body>

  <header>
    <nav class="navbar fixed-top navbar-expand-lg navbar-light topheader ">
      <div class="container-xl">
      <a class="navbar-brand" href="{{route("home")}}">Blog personale</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="{{route("posts.index")}}">Notizie<span class="sr-only"></span></a>
          </li>
        </ul>
      </div>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">

          <li>
            <a class="btn btn-primary" href="{{route("posts.create")}}">Aggiungi</a>
          </li>

        </ul>
      </div>
      </div>
    </nav>
  </header>
