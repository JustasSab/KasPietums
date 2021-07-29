@extends('layouts.app')

@section('content')
<body class="loginform">
<div class="login-box">
    <h2>Registracija</h2>
    <form method="POST" action="{{ route('register') }}">
    @csrf
        <!-- Name -->
        <div class="user-box">
            <input id="name" type="text" class="@error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name">
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            <label for="name">{{ __('Vardas') }}</label>
        </div>
        <!-- Email -->
        <div class="user-box">
            <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            <label for="email">{{ __('El. paštas') }}</label>
        </div>
        <!-- Password -->
        <div class="user-box">
            <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            <label for="password">{{ __('Slaptažodis') }}</label>
        </div>
        <!-- Confirm Password -->
        <div class="user-box">
            <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password">
            <label for="password-confirm">{{ __('Pakartoti slaptažodį') }}</label>
        </div>
        <!-- Registration Button -->
        <div class="form-group row">
            <div class="col-md-6">
                <a class="btn btn-link" type="submit">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <button id="formButton">{{ __('Registruotis') }}</button>
                </a>
            </div>
        </div>
    </form>
</div>
</body>
@endsection

