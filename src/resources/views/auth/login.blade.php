@extends('layouts.login_app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('content')
<div class="login__content">
    <div class="login__form__heading">
        <h2>ログイン</h2>
    </div>
    <form class="from" action="/login" method="post">
        @csrf
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
        <div class="form__button">
            <button class="form__button-submit" type="submit">ログイン</button>
        </div>
    </form>
    <div class="login__group">
        <div class="login__group-title">
            <p>アカウントをお持ちでない方はこちらから</p>
        </div>
        <div class="login__group-link">
            <a class="login__link-submit" href="/register">会員登録</a>
        </div>
    </div>
</div>
@endsection
