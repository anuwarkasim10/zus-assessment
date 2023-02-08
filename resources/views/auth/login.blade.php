@php
$configData = app\Helpers\Helper::applClasses();
@endphp
@extends('layouts/fullLayoutMaster')

@section('title', '')

@section('page-style')
  {{-- Page Css files --}}
  <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/form-validation.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('css/base/pages/authentication.css')) }}">
@endsection

@section('content')
<div class="auth-wrapper auth-cover">
  <div class="auth-inner row m-0">
    <!-- Brand logo-->
    <a class="brand-logo" href="#">
      <svg viewBox="0 0 139 95" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="28">
        <defs>
          <lineargradient id="linearGradient-1" x1="100%" y1="10.5120544%" x2="50%" y2="89.4879456%">
            <stop stop-color="#000000" offset="0%"></stop>
            <stop stop-color="#FFFFFF" offset="100%"></stop>
          </lineargradient>
          <lineargradient id="linearGradient-2" x1="64.0437835%" y1="46.3276743%" x2="37.373316%" y2="100%">
            <stop stop-color="#EEEEEE" stop-opacity="0" offset="0%"></stop>
            <stop stop-color="#FFFFFF" offset="100%"></stop>
          </lineargradient>
        </defs>
      </svg>
    </a>
    <!-- /Brand logo-->

    <!-- Left Text-->
    <div class="d-none d-lg-flex col-lg-8 align-items-center p-5">
      <div class="w-100 d-lg-flex align-items-center justify-content-center px-5">
        <img src="{{asset('images/logo/background.png')}}" alt="" style="height: 100%; z-index: -1; position: absolute;">
      </div>
    </div>
    <!-- /Left Text-->

    <!-- Login-->
    <div class="d-flex col-lg-4 align-items-center auth-bg px-2 p-lg-5">
      <div class="col-12 col-sm-8 col-md-6 col-lg-12 px-xl-2 mx-auto">
        <div class="card-title fw-bold mb-1 text-center">
            <img src="{{asset('images/logo/logo.png')}}" alt="" width="100">
        </div>

        <h2 class="card-title fw-bold mb-1 text-center">LOGIN</h2>

        <form class="auth-login-form mt-2" method="POST" action="{{ route('login') }}">
            @csrf
          <div class="mb-1">
            <label class="form-label" for="login-email">Email</label>
            <input class="form-control" id="email" type="email" name="email" placeholder="john@example.com" aria-describedby="login-email" autofocus="" tabindex="1" />
          </div>
          <div class="mb-1">
            <div class="d-flex justify-content-between">
              <label class="form-label" for="login-password">Password</label>
              <a href="{{ route('password.request') }}">
                <small>Forgot Password?</small>
              </a>
            </div>
            <div class="input-group input-group-merge form-password-toggle">
              <input class="form-control form-control-merge" id="password" type="password" name="password" placeholder="············" aria-describedby="login-password" tabindex="2" />
              <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
            </div>
          </div>
          <div class="mb-1">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}/>
              <label class="form-check-label" for="remember-me"> Remember Me</label>
            </div>
          </div>
          <div style="gap: 5px; display: grid;">
            <button class="btn btn-primary w-100" tabindex="4">Sign in</button>
            <a href="{{ url('/register') }}" class="btn btn-outline-primary w-100" tabindex="4">Sign up</a>
          </div>

        </form>


      </div>
    </div>
    <!-- /Login-->
  </div>
</div>
@endsection

@section('vendor-script')
<script src="{{asset(mix('vendors/js/forms/validation/jquery.validate.min.js'))}}"></script>
@endsection

@section('page-script')
<script src="{{asset(mix('js/scripts/pages/auth-login.js'))}}"></script>
@endsection
