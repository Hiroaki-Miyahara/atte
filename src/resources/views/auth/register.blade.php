@extends('layouts.login_app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('content')
<div class="register__content">
    <div class="register-form__heading">
        <h2>会員登録</h2>
    </div>
    <form class="form" action="/register" method="post">
        @csrf
        <div class="form__content">
            <div class="form__input--text">
                <input type="text" name="name" placeholder="名前" value="{{ old('name')}}" />
            </div>
            <div class="form__error">
                @error('name')
                {{ $message }}
                @enderror
            </div>
        </div>
        <div class="form__content">
            <div class="form__input--text">
                <input type="email" name="email" placeholder="メールアドレス" value="{{ old('email')}}" />
            </div>
            <div class="form__error">
                @error('email')
                {{ $message }}
                @enderror
            </div>
        </div>
        <div class="form__content">
            <div class="form__input--text">
                <input type="password" name="password" placeholder="パスワード" />
            </div>
            <div class="form__error">
                @error('password')
                {{ $message }}
                @enderror
            </div>
        </div>
        <div class="form__content">
            <div class="form__input--text">
                <input type="password" name="password_confirmation" placeholder="確認用パスワード" />
            </div>
            <div class="form__error">
                @error('password')
                {{ $message }}
                @enderror
            </div>
        </div>
        <div class="form__button">
            <button class="form__button-submit" type="submit">会員登録</button>
        </div>
    </form>
    <div class="login__group">
        <div class="login__group-title">
            <p>アカウントをお持ちの方はこちらから</p>
        </div>
        <div class="login__group-link">
            <a class="login__link-submit" href="/login">ログイン</a>
        </div>
    </div>
</div>
@endsection
