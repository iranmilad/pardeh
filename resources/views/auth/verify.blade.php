@extends('layouts.auth')

@section('title', 'بازیابی رمز عبور')



@section('content')
    <img class="-tw-z-10 tw-w-full tw-h-full tw-absolute tw-top-0 tw-left-0" src="{{ Vite::asset('resources/images/patternpad2.svg') }}" alt="">
    <div class="action-wrapper d-flex justify-content-center align-items-center h-100">
        <div class="form p-4 border border-radius-3xl border-gray-200 tw-bg-white">
            <a href="/"><img src="https://placehold.co/600x400" alt="" title="" class="mx-auto d-block"></a>
            <a href="login.html"><i class="fa fa-arrow-right position-absolute"></i></a>
            <div class="form-info text-right my-3">
                <h1 class="fw-bold fs-5">کد بازیابی پیامک شده را وارد کنید</h1>
            </div>
            <form class="mt-5" id="verifyForm" method="post" action="{{ route('verify.remember.submit') }}">
                @csrf
                <div class="enter-code d-flex justify-content-between align-items-center ltr">
                    <input type="text" name="pin1" class="pin form-control text-center fs-4 border-radius-2xl">
                    <input type="text" name="pin2" class="pin form-control text-center fs-4 border-radius-2xl">
                    <input type="text" name="pin3" class="pin form-control text-center fs-4 border-radius-2xl">
                    <input type="text" name="pin4" class="pin form-control text-center fs-4 border-radius-2xl">
                    <input type="text" name="pin5" class="pin form-control text-center fs-4 border-radius-2xl">
                </div>
                <input type="hidden" name="gu_id" value="{{ $id }}">
                <input type="hidden" name="mobile" value="{{ $mobile }}">
                <input type="text" name="code" id="code" style="visibility: hidden;opacity: 0;">
                @if ($errors)
                    <span class="text-danger">{{ $errors }}</span>
                @endif

                <div class="d-grid gap-2 mt-3">
                    <button type="submit" class="btn custom-btn-primary btn-block border-radius-xl fw-bold">ادامه</button>
                </div>
            </form>
            <div class="tw-flex tw-justify-between tw-items-center mt-3">
                <a href="{{ route('register.form') }}" class="nav-link tw-text-indigo-500 btn-block fs-7 border-radius-xl fw-bold">تغییر شماره تلفن</a>
                <span class="tw-cursor-text tw-bg-transparent tw-border-none tw-outline-none tw-text-indigo-500 p-0 d-block" id="count">1:00</span>
                <button class="tw-bg-transparent tw-border-none fs-7 tw-outline-none tw-text-indigo-500 p-0 d-none" id="resendcode">ارسال مجدد کد</button>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script src="@vite('resources/js/confirm-code.js')"></script>
@endsection
