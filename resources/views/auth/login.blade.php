@extends('layouts.app')

@section('content')
<body class="loginform">
<div class="login-box">
    <h2>Prisijungimas</h2>
    <form method="POST" action="{{ route('login') }}">
    @csrf
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
            <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror    
            <label for="password">{{ __('Slaptažodis') }}</label>
        </div>
            
        <div class="password-reset">
            @if (Route::has('password.reset'))
                <a href="{{ route('password.request') }}">
                    {{ __('Pamiršai slaptažodį?') }}
                </a>
            @endif
        </div>
        <!-- Login Button -->
        <div class="form-group">
            <div class="col-md-6">
                <a type="submit">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <button id="formButton">{{ __('Prisijungti') }}</button>
                </a>
            </div>
        </div>
    </form>
</div>
</body>
@endsection
