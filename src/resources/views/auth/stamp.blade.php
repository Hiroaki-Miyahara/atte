@extends('layouts.top_app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/stamp.css') }}">
@endsection

@section('content')
<div class="stamp__content">
    <div class="stamp-form__user">
            <p>{{ $my_user->name }}さんお疲れ様です！</p>
    </div>
    <div class="stamp-form__content">
        <div class="work-time">
            <form class="button__item" action="{{ route('workin') }}" method="post">
                @csrf
                <input class="work-start__button" name="work_start_time" type="submit" value="勤務開始">
            </form>
            <form class="button__item" action="{{ route('workout') }}" method="post">
                @csrf
                <input class="work-out__button" name="work_end_time" type="submit" value="勤務終了" disabled>
            </form>
        </div>
        <div class="break-time">
            <form class="button__item" action="{{ route('breakin') }}" method="post">
                @csrf
                <input class="break-start__button" name="break_start_time" type="submit" value="休憩開始" disabled>
            </form>
            <form class="button__item" action="{{ route('breakout') }}" method="post">
                @csrf
                <input class="break-out__button" name="break_end_time" type="submit" value="休憩終了" disabled>
            </form>
        </div>
    </div>
</div>
@endsection
