@extends('layouts.master')
@section('content')
<div class="register-login-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="register-form">
                    <h2>{{ __('Register') }}</h2>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="group-input">
                            <label for="username">{{ __('Name') }}</label>
                            <input type="text" id="username" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        </div>


                        <div class="group-input">

                            <label for="email">{{ __('E-Mail Address') }}</label>

                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">


                        </div>

                        <div class="group-input">
                            <label for="password">{{ __('Password') }}</label>
                              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                        </div>

                        <div class="group-input">
                            <label for="password-confirm">{{ __('Confirm Password') }}</label>


                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>

                        <div class="group-input">

                            <button type="submit" class="site-btn register-btn">{{ __('Register') }}</button>
                                </button>
                            </div>
                        </div>
                    </form>
                    <div class="switch-login">
                        <a class="or-login" href="{{ route('login') }}">
                            {{ __('login') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
