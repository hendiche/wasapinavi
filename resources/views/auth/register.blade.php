@extends('layouts.app')

@section('content')
<div class="fluid-container">
    <div class="register-padding">
        {{-- <div class="card-header">{{ __('Register') }}</div> --}}
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="d-flex flex-column">
                <div class="d-flex justify-content-center">
                    <label for="name">{{ __('Name') }}</label>
                </div>
                <div>
                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                    @if ($errors->has('name'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="d-flex flex-column">
                <div class="d-flex justify-content-center">
                    <label for="email">{{ __('E-Mail Address') }}</label>
                </div>
                <div>
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                    @if ($errors->has('email'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="d-flex flex-column">
                <div class="d-flex justify-content-center">
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
            </div>

            <div class="d-flex flex-column">
                <div class="d-flex justify-content-center">
                    <label for="password-confirm">{{ __('Confirm Password') }}</label>
                </div>
                <div>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                </div>
            </div>

            <div class="d-flex justify-content-center login-form-padding">
                <button type="submit" class="btn btn-primary">
                    {{ __('Register') }}
                </button>
            </div>
            <div class="d-flex flex-row justify-content-center login-form-padding">
                <a href="{{ route('login') }}">Already have account? Login!!!</a>
            </div>
        </form>
    </div>
</div>
@endsection
