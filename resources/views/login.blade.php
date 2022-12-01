@extends("layouts.main")
@section("main-container")
<div class="container col-md-6 bg-light mt-5 mb-5 p-5">
  @php
    $title="Login";
@endphp
<form method="POST" action="{{ route("login") }}">
  @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="text" name="email" class="form-control" value="{{ old('email') }}" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  <span class="text-danger">
    @error("email")
      {{ $message }}
    @enderror
  </span>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password"  class="form-control" id="exampleInputPassword1">
    <span class="text-danger">
      @error("password")
        {{ $message }}
      @enderror
    </span>
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection