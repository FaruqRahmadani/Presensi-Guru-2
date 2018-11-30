@extends('layouts.app')
@section('content')
  <section class="login-block">
    <div class="container container-login">
      <div class="row">
        <div class="col-md-4 login-sec">
          <h2 class="text-center">Reset Password</h2>
          <div class="portlet-handler ui-sortable-handle mb-4">
            <div class="row mb-5">
              <div class="col-12">
                <form method="POST" action="{!!route('resetPasswordSubmit')!!}" class="login-form">
                  @csrf
                  <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control" value="{{$user->nama}}" disabled>
                  </div>
                  @if ($user->tipe == 2)
                    <div class="form-group">
                      <label>Sekolah</label>
                      <input type="text" class="form-control" value="{{$user->Sekolah->nama}}" disabled>
                    </div>
                  @endif
                  <div class="form-group">
                    <label>Password Baru</label>
                    <input type="password" name="password" placeholder="Password Baru" class="form-control" required autofocus>
                  </div>
                  <div class="form-group">
                    <label>Konfirmasi Password Baru</label>
                    <input type="password" name="password_confirmation" placeholder="Konfirmasi Password Baru" class="form-control" required>
                  </div>
                  <div class="form-check">
                    <div class="form-group">
                      <button class="btn btn-primary float-right" type="submit">Reset</button>
                    </div>
                  </div>
                  <a href="{!!route('login')!!}"><i class="fa fa-chevron-circle-left"></i> Kembali ke halaman login</a>
                </form>
              </div>
            </div>
          </div>
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
@endsection
