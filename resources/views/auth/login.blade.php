@extends('layouts.master')

@section('content')

<div class="register-login-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="login-form">

                    <h2>{{ __('Login') }}</h2>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="group-input">
                            <label for="email">{{ __('E-Mail Address') }}</label>
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                            @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="group-input">
                            <label for="password">{{ __('Password') }}</label>
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                            @if ($errors->has('password'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif

                        </div>
                        <div class="group-input gi-check">
                            <div class="gi-more">
                                <label>
                                  <input type="checkbox" id="save-pass" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                                  <span class="checkmark"></span>
                                </label>

                                <a class="forget-pass" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>

                            </div>
                        </div>
                        <button type="submit" class="site-btn login-btn">
                            {{ __('Login') }}
                        </button>
                    </form>
                    <div class="switch-login">
                        <a class="or-login" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
