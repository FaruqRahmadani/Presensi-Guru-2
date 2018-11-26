@extends('layouts.app')
@section('content')
{{-- batas --}}
<section class="login-block">
  <div class="container container-login">
    <div class="row">
      <div class="col-md-4 login-sec">
        <h2 class="text-center">Reset Password</h2>
        <form method="POST" action="" class="login-form">
          @csrf
          <div class="form-group">
            <label for="username">Username/Password</label>
            <input type="text" id="username" name="username" placeholder="username/password" class="form-control" value="{{ old('username') }}" required autofocus>
          </div>
          <div class="form-check">
            <div class="form-group">
              <button class="btn btn-primary float-right" type="submit">Reset</button>
            </div>
          </div>
        </form>
      </div>
      <div class="col-md-8 banner-sec">
        <div class="banner-text">
          <h2>Lorem ipsum dolor sit amet.</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus eum culpa sequi adipisci, quidem odit ut saepe vero, nesciunt debitis voluptates fugiat, veritatis excepturi soluta quisquam aperiam possimus ratione iste.</p>
        </div>
      </div>
    </div>
  </div>
</section>
{{-- batas  --}}
@endsection