@extends("layouts.main")
@section("main-container")
@php
    $title="Register";
@endphp

<div class="container mt-3">
    <div class="form-box">
      <div class="form-tab">
        <ul class="nav nav-pills nav-fill" role="tablist">
      <li class="nav-item">
          <a class="nav-link active" id="register-tab-2" data-toggle="tab" href="#register-2" role="tab" aria-controls="register-2" aria-selected="true">Register</a>
      </li>
  </ul>
      <div class="tab-pane fade show active" id="register-2" role="tabpanel" aria-labelledby="register-tab-2">
        <form method="POST" action="{{ route('Register')}}">
          @csrf
          <div class="form-group">
            <label for="register-email-2">Your Name *</label>
            <input type="text" class="form-control" id="name-email-2" name="name" >
            <span class="text-danger">
              @error('name')
                  {{$message}}
              @enderror    
              </span> 
          </div><!-- End .form-group -->

          <div class="form-group">
            <label for="register-email-2">Your email address *</label>
            <input type="text" class="form-control" id="register-email-2" name="email" >
            <span class="text-danger">
              @error('email')
                  {{$message}}
              @enderror    
              </span> 
          </div><!-- End .form-group -->

          <div class="form-group">
            <label for="register-password-2">Password *</label>
            <input type="password" class="form-control" id="register-password-2" name="password" >
            <span class="text-danger">
              @error('password')
                  {{$message}}
              @enderror    
              </span> 
          </div><!-- End .form-group -->
          <div class="form-group">
            <label for="register-confirm-password-2">Confirm Password *</label>
            <input type="password" class="form-control" id="register-password-2" name="confirm_pass" >
            <span class="text-danger">
              @error('confirm_pass')
                  {{$message}}
              @enderror    
              </span> 
          </div> 

          <div class="form-footer">
            <button type="submit" class="btn btn-outline-primary-2">
                    <span>SIGN UP</span>
                  <i class="icon-long-arrow-right"></i>
                  </button>
                  <a href="{{url("/login")}}" class="forgot-link">Click me for login</a>
          </div><!-- End .form-footer -->
        </form>
        <div class="form-choice">
          <p class="text-center">or sign in with</p>
          <div class="row">
            <div class="col-sm-6">
              <a href="#" class="btn btn-login btn-g">
                <i class="icon-google"></i>
                Login With Google
              </a>
            </div><!-- End .col-6 -->
            <div class="col-sm-6">
              <a href="#" class="btn btn-login  btn-f">
                <i class="icon-facebook-f"></i>
                Login With Facebook
              </a>
            </div><!-- End .col-6 -->
          </div><!-- End .row -->
        </div><!-- End .form-choice -->
      </div><!-- .End .tab-pane -->
  </div><!-- End .tab-content -->
</div><!-- End .form-tab -->
    </div><!-- End .form-box -->
  </div><!-- End .container -->
@endsection