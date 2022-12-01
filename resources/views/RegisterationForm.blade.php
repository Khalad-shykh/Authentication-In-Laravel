@extends("layouts.main")
@section("main-container")
@php
    $title="Register";
@endphp
<div class="container col-md-6 mt-5 mb-5 bg-light p-3">
    <form method="POST" action="{{ route('Register')}}">
        @csrf
        <h3 class="text-center">Register</h3>
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" name="name" class="form-control" value="{{old('name')}}" id="exampleInputName" aria-describedby="nameHelp">
        <span class="text-danger">
        @error('name')
            {{$message}}
        @enderror    
        </span>  
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="text" name="email" value="{{old('email')}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <span class="text-danger">
            @error('email')
                {{$message}}
            @enderror    
            </span>  
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" name="password" class="form-control" id="exampleInputPassword1">
          <span class="text-danger">
            @error('password')
                {{$message}}
            @enderror    
            </span>  
        </div>
        <div class="form-group">
            <label for="exampleInputConfirmPassword1">Confirm Password</label>
            <input type="password" name="confirm_pass" class="form-control" id="exampleInputConfirmPassword1">
            <span class="text-danger">
                @error('confirm_pass')
                    {{$message}}
                @enderror    
                </span>    
        </div>
        <div class="form-group form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Remember me</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
@endsection