@extends('layouts.app')

@section('content')
<div class="fluid-container">
    <div class="login-padding">
        {{-- <div>{{ __('Login') }}</div> --}}
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="d-flex flex-column">
                <div class="d-flex justify-content-center login-form-padding">
                    <label for="email">{{ __('E-Mail') }}</label>
                </div>
                <div>
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                    @if ($errors->has('email'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="d-flex justify-content-center login-form-padding">
                    <label for="password">{{ __('Password') }}</label>
                </div>
                <div>
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                    @if ($errors->has('password'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="d-flex justify-content-center login-form-padding">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Login') }}
                    </button>
                </div>
                <div class="d-flex flex-row justify-content-between login-form-padding col-4">
                    <div>
                        <a href="#" class="btn btn-primary">Login With FB</a>
                    </div>
                    <div>
                        <a href="#" class="btn btn-primary">Login With Google</a>
                    </div>
                </div>
                <div class="d-flex flex-row justify-content-center login-form-padding">
                    <a href="{{ route('register') }}">Don`t have account? Register!!!</a>
                </div>
            </div>

            {{-- <div class="form-group row">
                <div class="col-md-6 offset-md-4">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>
            </div> --}}

            {{-- <div class="form-group row mb-0">
                <div class="col-md-8 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Login') }}
                    </button>

                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                </div>
            </div> --}}
        </form>
    </div>
</div>
@endsection
