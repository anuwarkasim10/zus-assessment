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
        <img src="{{asset('images/logo/background.png')}}" alt="" style="height: 115%; z-index: -1; position: fixed;">
      </div>
    </div>
    <!-- /Left Text-->

    <!-- Register-->
    <div class="d-flex col-lg-4 align-items-center auth-bg px-2 p-lg-5" style="overflow-y: hidden">
      <div class="col-12 col-sm-8 col-md-6 col-lg-12 px-xl-2 mx-auto">
        <div class="card-title fw-bold mb-1 text-center">
            <img src="{{asset('images/logo/logo.png')}}" alt="" width="100">
        </div>

        <h2 class="card-title fw-bold mb-1 text-center">REGISTER</h2>

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="mb-1">
                <label for="name" class="form-label">{{ __('Name') }}</label>
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>

            <div class="mb-1">
                <label for="email" class="form-label">{{ __('Email Address') }}</label>

                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

            </div>

            <div class="mb-1">
                <label for="email" class="form-label">{{ __('Phone No') }}</label>

                    <input id="phone" type="tel" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

            </div>

            <div class="mb-1">
                <label for="password" class="form-label">{{ __('Password') }}</label>


                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

            </div>

            <div class="mb-1">
                <label for="password-confirm" class="form-label">{{ __('Confirm Password') }}</label>


                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

            </div>

            <div class="row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Register') }}
                    </button>
                </div>
            </div>
        </form>


      </div>
    </div>
    <!-- /Login-->
  </div>
</div>

<script>
$(document).ready(function() {
    function phoneMask() {
        var num = $(this).val().replace(/\D/g,'');
        $(this).val( num.substring(0,11));
}
$('#phone').keyup(phoneMask);
});

</script>
@endsection

@section('vendor-script')
<script src="{{asset(mix('vendors/js/forms/validation/jquery.validate.min.js'))}}"></script>
@endsection

@section('page-script')
<script src="{{asset(mix('js/scripts/pages/auth-login.js'))}}"></script>
@endsection
