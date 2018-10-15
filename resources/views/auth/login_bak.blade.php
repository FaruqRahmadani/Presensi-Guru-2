@extends('layouts.app')
@section('content')
{{-- batas --}}
<section class="login-block">
  <div class="container">
    <div class="row">
      <div class="col-md-4 login-sec">
        <h2 class="text-center">Login</h2>
        <form action="" class="login-form">
          <div class="form-group">
            <label for="username">Username</label>
            <input type="username" id="username" name="username" placeholder="username" class="form-control">
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="password" class="form-control">
          </div>
          <div class="form-check">
            <label for="" class="form-check-label">
              <input type="checkbox" class="form-check-input">
              Ingatkan Saya
            </label>
            <div class="form-group">
              <button class="btn btn-primary float-right" type="submit">Login</button>
            </div>
          </div>
        </form>
      </div>
      <div class="col-md-8 banner-sec"></div>
    </div>
  </div>
</section>
{{-- batas  --}}
{{-- <div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">{{ __('Login') }}</div>
        <div class="card-body">
          <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group row">
              <label for="username" class="col-sm-4 col-form-label text-md-right">{{ __('Username') }}</label>
              <div class="col-md-6">
                <input id="username" type="username" class="form-control" name="username" value="{{ old('username') }}" required autofocus>
                {{-- @if ($errors->has('username'))
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('username') }}</strong>
                </span>
                @endif --}}
              </div>
            </div>
            <div class="form-group row">
              <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
              <div class="col-md-6">
                <input id="password" type="password" class="form-control" name="password" required>
                {{-- @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif --}}
              </div>
            </div>
            <div class="form-group row">
              <div class="col-md-6 offset-md-4">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                  <label class="form-check-label" for="remember">
                    {{ __('Remember Me') }}
                  </label>
                </div>
              </div>
            </div>
            <div class="form-group row mb-0">
              <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-primary">
                {{ __('Login') }}
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div> --}}
@endsection