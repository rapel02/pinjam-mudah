@extends('layouts.template')

@section('content')
<div class="columns is-mobile">
    <div class="column is-7" style="position: relative;">
        <img src = "{{ asset('images/logo_transparent2.png') }}" width="25%" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -60%);">
        <img src = "{{ asset('images/quotes2.png') }}" width="50%" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, 80%);">
    </div>
    <div class="column is-4 box" align="center" style="background-color:#DCDCDC;">
        <h1 class="title centered">Daftar</h1>
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="form-group row">
                <input class="input is-primary{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus placeholder="Name">

                @if ($errors->has('name'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>
            <br>
            <div class="form-group row">
                <input type="email" class="input is-primary{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required placeholder="E-mail">

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
                <input type="password" class="input is-primary" name="password_confirmation" required placeholder="Confirm Password">
            </div>
            <br>
            <div class="form-group row">
                <input class="checkbox" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="form-check-label" for="remember">
                    Saya telah membaca syarat dan ketentuan yang berlaku
                </label>
            </div>
            <br>
            <div class="form-group row mb-0">
                <button type="submit" class="button is-link">
                    {{ __('Daftar') }}
                </button>
            </div>
        </form>
    </div>
</div>

@endsection
