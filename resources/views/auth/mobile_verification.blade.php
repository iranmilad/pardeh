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
                    <p class="fs-7">لطفا شماره موبایل خود را وارد کنید</p>
                </div>
            </div>
            <form method="post" action="{{ route('verify.mobile.code.form') }}" id="loginForm">
                @csrf
                <input type="text" name="mobile" class="form-control border-radius-xl" placeholder="09123456789">
                @if ($errors->has('mobile'))
                    <span class="text-danger">{{ $errors->first('mobile') }}</span>
                @endif
                <div class="d-grid gap-2 mt-3">
                    <button type="submit" class="btn custom-btn-primary btn-block border-radius-xl fw-bold">ادامه</button>
                </div>
            </form>
            <p class="text-center mt-3 gray-600 fs-7">ورود کد پیامک شده به معنای پذیرش <a href="/terms" class="nav-link  d-inline-block text-dark fw-bold p-0"><span>شرایط و قوانین</span></a> <span class="">نام سایت</span> است.</p>
        </div>
    </div>
@endsection
