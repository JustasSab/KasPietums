@section('title')
    KasPietums
@endsection

@extends('layouts.main')
@section('rightbar-content')
<body class="loginform">
    <div class="login-box">
        <h2>Slaptažodžio keitimas</h2>
        <form method="POST" action="{{ route('password.update') }}">
        @csrf

            <input type="hidden" name="token" value="{{ $token }}">
            <!-- Email -->
            <div class="user-box">
                <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email">
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
                <label for="password">{{ __('Password') }}</label>
            </div>
            <!-- Confirm Password -->
            <div class="user-box">
                <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password">
                <label for="password-confirm">{{ __('Patvirtinti slaptažodį') }}</label>
            </div>
            <!-- Button -->
            <div class="form-group">
                <div class="col-md-10">
                <a type="submit">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <button id="formButton">{{ __('Atnaujinti slaptažodį') }}</button>
                </a>
                </div>
            </div>
        </form>
    </div>
</body>
@endsection
