@extends("layouts.main")
@section("main-container")
    @php
        $title = "Update Profile";
    @endphp
<div class="container mt-3">
    <div class="col-md-6 offset-3 form-box">
    <form method="POST" action="{{url('update/'.$user['id'])}}" enctype="multipart/form-data">
        @csrf
        @method("PUT")
    <div class="image-container">
        <img src="{{ asset("uploads/".$user["image"]) }}" style="width: 150px; height: 150px" class="img-thumbnail" />
    </div>
<div class="form-group">
  <label for="">Name :</label>
  <input type="text" value="{{ $user['name'] }}" name="name" class="form-control" name="" id="" aria-describedby="emailHelpId" placeholder="">
<span class="text-danger">
    @error('name')
    {{$message}}
@enderror
</span>
</div>
<div class="form-group">
    <label for="">Email :</label>
    <input type="text" value="{{ $user['email'] }}" name="email" class="form-control" name="" id="" aria-describedby="emailHelpId" placeholder="">
    <span class="text-danger">
        @error('email')
        {{$message}}
    @enderror
    </span>
</div>
    
    <div class="form-group">
        <label for="">Profile Image :</label>
        <input type="file" name="image" class="form-control">
        <span class="text-danger">
            @error('image')
            {{$message}}
        @enderror
        </span>
        <br>
        <input type="hidden" value="{{ $user['image'] }}" name="old_image"/> 
        <input type="submit" class="btn btn-success mt-3" value="Update"/> 
    </div>
</form>
</div>
</div>
@endsection