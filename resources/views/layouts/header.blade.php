<!doctype html>
<html lang="en">
  <head>
    <title>{{$title}}</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#"><img src=" {{ url("images/laravel.png") }}" height="50px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="{{'/'}}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              @guest
              <a class="nav-link" href="{{'/Register'}}">Register</a>
              @endguest
              
            </li>
            @if (auth()->check())
            <li class="">
              <a class="nav-link " href="{{route('logout') }}">Logout</a>
            </li>
            @else
            <li class="">
              <a class="nav-link " href="{{ route('login') }}">Login</a>
            </li>
            @endif
           
          </ul>
        </div>
      </nav>