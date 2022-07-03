@extends('layouts/auth')

@section('title')
<title>
    Sign In | Ship Shine!
</title>
@endsection

@section('content')
{{-- Body --}}
  <body style="background-color: #288afb">
    <!-- Page content -->
    <div class="container pt-7">
      <div class="row d-flex justify-content-center">
        <div
          class="col-4 d-flex justify-content-center align-items-center"
          style="background-color: #6daffc; border-radius: 10px 0 0 10px"
          ;
        >
          <img
            src="{{ asset('img/brand/shipshine.png') }}"
            alt="logo"
            style="width: 60%"
            ;
          />
        </div>
        <div
          class="col-4 pt-4 pb-5"
          style="background-color: #fff; border-radius: 0 10px 10px 0"
          ;
        >
        <form method="POST" action="{{ route('login') }}">
          @csrf
          <h1 class="font-weight-bold my-4 text-center">WELCOME</h1>
          <h4>Email</h4>
          <div class="form-group">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="16"
                    height="16"
                    fill="currentColor"
                    class="bi bi-envelope-fill"
                    viewBox="0 0 16 16"
                  >
                    <path
                      d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"
                    />
                  </svg>
                </span>
              </div>
              <input
                type="email"
                class="form-control @error('email') is-invalid @enderror"
                placeholder="Email"
                name="email"
                aria-label="email"
                aria-describedby="basic-addon1"
                value="{{ old('email') }}"
                required
                autocomplete="email"
                autofocus
              />
              @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
          </div>

          <h4>Password</h4>
          <div class="form-group">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="16"
                    height="16"
                    fill="currentColor"
                    class="bi bi-lock-fill"
                    viewBox="0 0 16 16"
                  >
                    <path
                      d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"
                    />
                  </svg>
                </span>
              </div>
              <input
                type="password"
                class="form-control @error('password') is-invalid @enderror"
                placeholder="Password"
                aria-label="Password"
                id="password"
                name="password"
                aria-describedby="basic-addon1"
                required
                autocomplete="current-password"
              />
            </div>
          </div>

          <h5 class="my-3">
            Belum punya akun ? <a href="{{ route('register') }}">Daftar</a>
          </h5>
          <button type="submit" class="btn btn-lg btn-block" style="background-color: #288afb; color: #fff";>
            Login
          </button>
        </form>
        </div>
      </div>
    </div>
@endsection
