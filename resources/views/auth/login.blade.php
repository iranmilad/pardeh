@extends('layouts.auth')

@section('title', 'ورود')


@section('content')
<img class="-tw-z-10 tw-w-full tw-h-full tw-absolute tw-top-0 tw-left-0" src="{{ Vite::asset('resources/images/patternpad2.svg') }}" alt="">
<div class="row tw-h-screen">
    <div class="col-12 col-md-6 tw-flex  tw-justify-center">

        <div class="tw-pt-10 tw-w-full sm:tw-w-[90%] md:tw-h-3/4 lg:tw-w-2/3 2xl:tw-w-1/2 ">
            <div class="form p-4 ">
                <a href="/"><img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="" title="" width="150" height="150" class="mx-auto d-block"></a>
                <div class="form-info tw-text-center my-3">
                    <h1 class="fw-bold fs-5">ورود</h1>
                    <div class="form-info-text my-4 gray-600">
                        <p class="fs-7">لطفا شماره موبایل و رمز عبور خود را وارد کنید</p>
                    </div>
                </div>
                <div class='wave -one'> </div>
                <div class='wave -two'> </div>
                <form method="post" action="{{ route('login') }}" id="loginForm">
                    @csrf
                    <div class="input-group has-validation">
                        <input type="text" name="mobile"  class="form-control border-radius-xl {{ $errors->has('phone') ? 'is-invalid' : '' }}" placeholder="شماره تلفن" autocomplete="off" id="phone" aria-describedby="inputGroupPrepend" required>
                        <div class="invalid-feedback">
                            @if($errors->has("mobile"))
                                {{$errors->first("mobile")}}
                            @endif
                        </div>
                    </div>

                    <div class="input-group has-validation mt-3">
                        <input type="password" name="password" class="form-control border-radius-xl {{ $errors->has('password') ? 'is-invalid' : '' }}" placeholder="رمز عبور" autocomplete="off" id="password" aria-describedby="inputGroupPrepend" required>
                        <div class="invalid-feedback">
                            @if($errors->has("password"))
                                {{$errors->first("password")}}
                            @endif
                        </div>
                    </div>

                    <div class="tw-flex tw-items-center tw-justify-between mt-3">
                        <div class="form-check">
                            <input class="form-check-input" name="rememberme" type="checkbox" value="" id="rememberme">
                            <label class="form-check-label fs-7 ms-2" for="rememberme">
                                مرا بخاطر بسپار
                            </label>
                        </div>
                        <a class="fs-7" href="{{ route('mobile.verification.form') }}">فراموشی رمز عبور</a>
                    </div>

                    <div class="d-grid gap-2 mt-3">
                        <button type="submit" class="btn tw-bg-primary btn-block border-radius-xl fw-bold tw-text-white">ادامه</button>
                    </div>
                </form>
                <p class="text-center mt-3 gray-600 fs-7">ورود شما به معنای پذیرش <a href="/terms" class="nav-link  d-inline-block text-dark fw-bold p-0"><span>شرایط و قوانین</span></a> <span class="">{{config('app.name')}}</span> است.</p>
                <div class="tw-w-full tw-text-center tw-text-sm tw-mt-6">
                    <span>حساب کاربری ندارید ؟</span>
                    <a class="fw-bold tw-text-primary" href="{{ route('register.form') }}">ثبت نام</a>
                </div>
            </div>
        </div>
    </div>
    <div class="tw-hidden md:tw-block col-md-6  tw-p-5">
        <img class="tw-rounded-2xl tw-object-cover tw-w-full tw-h-full tw-relative tw-block fade-in " src="{{ Vite::asset('resources/images/auth.jpg') }}" alt="">
    </div>
</div>
@endsection
