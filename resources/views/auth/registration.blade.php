@extends('layouts.auth')

@section('title', 'ثبت نام')


@section('content')
<img class="-tw-z-10 tw-w-full tw-h-full tw-absolute tw-top-0 tw-left-0" src="{{ Vite::asset('resources/images/patternpad2.svg') }}" alt="">
<div class="action-wrapper d-flex justify-content-center align-items-center h-100">
    <div class="form p-4 border border-radius-3xl border-gray-200 tw-bg-white">
        <a href="/"><img src="https://placehold.co/600x400" alt="" title="" class="mx-auto d-block"></a>
        <div class="form-info text-right my-3">
            <h1 class="fw-bold fs-5">ثبت نام</h1>
            <div class="form-info-text my-4 gray-600">
                <p class="fs-7">مشخصات خود را وارد کنید</p>
            </div>
        </div>
        <form method="post" action="{{ route('register.submit') }}" id="registerForm">
            @csrf

            <input type="text" name="first_name" class="form-control border-radius-xl" placeholder="نام " autocomplete="off">
            <input type="text" name="last_name" class="form-control border-radius-xl mt-4 tw-text-right" placeholder="نام خانوادگی" autocomplete="off">
            <input type="number"name="mobile" class="form-control border-radius-xl mt-4 tw-text-right" placeholder="موبایل" autocomplete="off">
            <input type="password" id="password" name="password" class="form-control border-radius-xl mt-4" placeholder="رمز عبور" autocomplete="off">
            <input type="password" name="password_confirmation" class="form-control border-radius-xl mt-4" placeholder="تکرار رمز عبور" autocomplete="off">
            @if ($errors->has('mobile'))
                <span class="text-danger">{{ $errors->first('mobile') }}</span>
            @elseif ($errors->has('password'))
                <span class="text-danger">{{ $errors->first('password') }}</span>
            @elseif ($errors->has('password_confirmation'))
                <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
            @endif
            <div class="d-grid gap-2 mt-3">
                <button type="submit" class="btn custom-btn-primary btn-block border-radius-xl fw-bold">ثبت نام</button>
            </div>
        </form>
    </div>
</div>

@endsection
