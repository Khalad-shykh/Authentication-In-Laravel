@extends("layouts.main")
@section("main-container")
@php
    $title="Home";
@endphp
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            @if (auth()->check())
<h1>Welcome {{ auth()->user()->name }}</h1>
@else
    <h1>Welcome Home</h1>
    @endif
            <p class="lead">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis blanditiis voluptatibus eos debitis, expedita officia dicta magnam sed libero ratione facilis nulla aliquid, quod dolore at, ipsum deleniti inventore placeat.</p>
            <hr class="my-2">
            <p>More info</p>
            <p class="lead">
                <a class="btn btn-primary btn-lg" href="#" role="button">Explore !</a>
            </p>
        </div>
    </div>
    </div>
    @if (session()->has('success'))
        <div class="badge-primary fixed-bottom rounded-pill w-75 col-3 m-2 ml-auto flash">
            <p class="mt-2">{{session('success'); }}</p>
        </div>
    @endif
@endsection