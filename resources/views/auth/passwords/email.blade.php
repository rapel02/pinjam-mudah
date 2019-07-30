@extends('layouts.template')

@section('content')
<div class="columns is-centered">
    <div class="column is-one-third is-family-primary" align="center">
        <h1 class="title centered">Reset Password</h1>
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <div class="form-group row">
                    <input type="email" class="input is-primary{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required placeholder="E-mail Address">

                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <br>
                <div class="form-group row mb-0">
                    <button type="submit" class="button is-danger">
                        {{ __('Send Password Reset Link') }}
                    </button>
                </div>
            </form>
    </div>
</div>
@endsection
