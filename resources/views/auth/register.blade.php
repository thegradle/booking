@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="auth-form">
                <p class="auth-form--title">Створіть акаунт</p>

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="row">
                        <label for="email" class="col-form-label">Електронна адреса</label>
                    </div>

                    <div class="row">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>

                    <div class="row">
                        <label for="password" class="col-form-label">Пароль</label>
                    </div>

                    <div class="row">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>

                    <div class="row">
                        <label for="password-confirm" class="col-form-label">Підтвердити пароль</label>
                    </div>

                    <div class="row mb-3">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>

                    <div class="row mb-0">
                        <button type="submit" class="btn btn-main">
                            Створити акаунт
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
