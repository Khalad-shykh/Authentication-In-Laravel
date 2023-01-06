@extends("layouts.main")
@section("main-container")
  @php
    $title="Login";
@endphp

  <div class="container mt-3">
    <div class="form-box">
      <div class="form-tab">
        <ul class="nav nav-pills nav-fill" role="tablist">
      <li class="nav-item">
          <a class="nav-link active">Login</a>
      </li>
  </ul>
  <div class="tab-content">
      <div class="mt-3" id="signin-2" role="tabpanel" aria-labelledby="signin-tab-2">
        <form method="POST" action="{{ route("login1") }}">
          @csrf
          <div class="form-group">
            <label for="singin-email-2">Username or email address *</label>
            <input type="text"  value="{{ old('email') }}" class="form-control" id="singin-email-2" name="email" >
            <span class="text-danger">
              @error("email")
                {{ $message }}
              @enderror
            </span>
          </div><!-- End .form-group -->

          <div class="form-group">
            <label for="singin-password-2">Password *</label>
            <input type="password" class="form-control" id="singin-password-2" name="password">
            <span class="text-danger">
              @error("password")
                {{ $message }}
              @enderror
            </span>
          </div><!-- End .form-group -->

          <div class="form-footer">
            <button type="submit" class="btn btn-outline-primary-2">
                    <span>LOG IN</span>
                  <i class="icon-long-arrow-right"></i>
                  </button>

          <a href="{{url("/Register")}}" class="forgot-link">I do'nt have an Account !</a>
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
              <a href="#" class="btn btn-login btn-f">
                <i class="icon-facebook-f"></i>
                Login With Facebook
              </a>
            </div><!-- End .col-6 -->
          </div><!-- End .row -->
        </div><!-- End .form-choice -->
      </div><!-- .End .tab-pane -->
</div><!-- End .form-tab -->
    </div><!-- End .form-box -->
  </div><!-- End .container -->
@endsection