@extends('layouts.auth')

@section('content')
<div class="register-box">
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <a href="/" class="h1"><b>Lam</b>CRM</a>
      </div>
      <div class="card-body">
        <p class="login-box-msg">Đăng kí người dùng</p>

        <form method="POST" action="{{ route('register') }}">
            @csrf
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Họ và tên" name="name" value="{{ old('name') }}" required autofocus >
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="email" class="form-control" placeholder="Email" type="email" name="email" value="{{ old('email') }}" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Password"
                name="password"
                required autocomplete="new-password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Retype password"
                name="password_confirmation" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="input-group w-100">
            <div class="form-group w-100">
                <select class="custom-select" id="role" name='role' required>
                    <option selected>Loại tài khoản</option>
                    <option value="1">Admin</option>
                    <option value="2">Nhân Viên</option>
                </select>
            </div>
          </div>
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <p class="text-sm-left text-danger">{{$error}}</p>
                @endforeach
            @endif
          <div class="row">
            <div class="col-4">

            </div>
            <!-- /.col -->
            <div class="col-4 text-center">
              <button type="submit" class="btn btn-primary btn-block">Đăng kí</button>
            </div>
            <!-- /.col -->
          </div>
        </form>

        <div class="social-auth-links text-center">
          {{-- <a href="#" class="btn btn-block btn-primary">
            <i class="fab fa-facebook mr-2"></i>
            Sign up using Facebook
          </a>
          <a href="#" class="btn btn-block btn-danger">
            <i class="fab fa-google-plus mr-2"></i>
            Sign up using Google+
          </a> --}}
        </div>

        <a href="{{ route('login') }}" class="text-center">Tôi đã có tài khoản</a>
      </div>
      <!-- /.form-box -->
    </div><!-- /.card -->
</div>

@endsection
