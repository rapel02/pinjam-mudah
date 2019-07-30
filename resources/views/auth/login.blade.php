@extends('layouts.template')

@section('content')
<div class="columns is-centered">
    <div class="column is-one-third is-family-primary" align="center">
        <h1 class="title centered">Masuk</h1>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group row">
                <input type="email" class="input is-primary{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus placeholder="E-mail">

                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
            <br>
            <div class="form-group row">
                <input type="password" class="input is-primary{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Password">

                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
            <br>
            <div class="form-group row">
                <input class="checkbox" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>

                <label class="form-check-label" for="remember">
                    Ingat Saya
                </label>
            </div>

            <div class="form-group row mb-0">
                <button type="submit" class="button is-link">
                    {{ __('Login') }}
                </button>
                <br>
                @if (Route::has('password.request'))
                    <a class="button is-link is-inverted" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
            </div>
        </form>
    </div>
</div>
@endsection
