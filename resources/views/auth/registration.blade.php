@extends('layouts.auth')

@section('title', 'ثبت نام')


@section('content')
<img class="-tw-z-10 tw-w-full tw-h-full tw-absolute tw-top-0 tw-left-0" src="{{ Vite::asset('resources/images/patternpad2.svg') }}" alt="">
<div class="row tw-h-screen">
    <div class="col-12 col-md-6 tw-flex  tw-justify-center">
        <div class="tw-pt-10 tw-w-full sm:tw-w-[90%] md:tw-h-3/4 lg:tw-w-2/3 2xl:tw-w-1/2 ">
            <div class="form p-4 ">
            <a href="/"><img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="" title="" width="150" height="150" class="mx-auto d-block"></a>
                <div class="form-info text-center my-3">
                    <h1 class="fw-bold fs-5">ثبت نام</h1>
                    <div class="form-info-text my-4 gray-600">
                        <p class="fs-7">مشخصات خود را وارد کنید</p>
                    </div>
                </div>
                <form method="post" action="{{ route('register.submit') }}" id="registerForm">
                    @csrf
                    <div class="input-group has-validation">
                        <input type="text" name="first_name" class="form-control border-radius-xl {{ $errors->has('first_name') ? 'is-invalid' : '' }}" placeholder="نام" autocomplete="off" id="first_name" aria-describedby="inputGroupPrepend" required>
                        <div class="invalid-feedback">
                            @if($errors->has("first_name"))
                            {{$errors->first("first_name")}}
                            @endif
                        </div>
                    </div>

                    <div class="input-group mt-4 has-validation">
                        <input type="text" name="last_name" class="form-control border-radius-xl {{ $errors->has('last_name') ? 'is-invalid' : '' }}" placeholder="نام خانوادگی" autocomplete="off" id="last_name" aria-describedby="inputGroupPrepend" required>
                        <div class="invalid-feedback">
                            @if($errors->has("last_name"))
                            {{$errors->first("last_name")}}
                            @endif
                        </div>
                    </div>

                    <div class="input-group has-validation mt-4">
                        <input type="mobile" name="mobile" class="form-control border-radius-xl tw-text-right {{ $errors->has('email') ? 'is-invalid' : '' }}" placeholder="شماره همراه" autocomplete="off" id="mobile" aria-describedby="inputGroupPrepend" required>
                        <div class="invalid-feedback">
                            @if($errors->has("mobile"))
                            {{$errors->first("mobile")}}
                            @endif
                        </div>
                    </div>

                    <div class="input-group has-validation mt-4">
                        <input type="password" id="password" name="password" class="form-control border-radius-xl {{ $errors->has('password') ? 'is-invalid' : '' }}" placeholder="رمز عبور" autocomplete="off" aria-describedby="inputGroupPrepend" required>
                        <div class="invalid-feedback">
                            @if($errors->has("password"))
                            {{$errors->first("password")}}
                            @endif
                        </div>
                    </div>

                    <div class="input-group has-validation mt-4">
                        <input type="password" name="password_confirmation" class="form-control border-radius-xl {{ $errors->has('password_confirmation') ? 'is-invalid' : '' }}" placeholder="تکرار رمز عبور" autocomplete="off" id="repass" aria-describedby="inputGroupPrepend" required>
                        <div class="invalid-feedback">
                            @if($errors->has("password_confirmation"))
                            {{$errors->first("password_confirmation")}}
                            @endif
                        </div>
                    </div>
                    <div class="d-grid gap-2 mt-3">
                        <button type="submit" class="btn custom-btn-primary btn-block border-radius-xl fw-bold">ثبت نام</button>
                    </div>
                    <p class="text-center mt-3 gray-600 fs-7">ثبت نام شما به معنای پذیرش <a href="/terms" class="nav-link  d-inline-block text-dark fw-bold p-0"><span>شرایط و قوانین</span></a> <span class="">{{ config("app.name") }}</span> است.</p>
                    <div class="tw-w-full tw-text-center tw-text-sm tw-mt-6">
                        <a class="fw-bold" href="/login">ورود به حساب کاربری</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="tw-hidden md:tw-block col-md-6 tw-p-5">
        <img class="tw-rounded-2xl tw-object-cover tw-w-full tw-h-full tw-relative tw-block" src="{{ Vite::asset('resources/images/auth2.jpg') }}" alt="">
    </div>
</div>
@endsection
