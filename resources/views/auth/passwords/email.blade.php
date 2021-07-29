@extends('layouts.app')

@section('content')
<body class="loginform">
<div class="login-box">
    <h2>Slaptažodžio keitimas</h2>
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <form method="POST" action="{{ route('password.email') }}">
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
    <!-- Button -->
        <div class="form-group">
            <div class="col-md-10">
            <a type="submit">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <button id="formButton">{{ __('Gauti nuoradą') }}</button>
            </a>
            </div>
        </div>
    </form>
</div>
</body>
@endsection
