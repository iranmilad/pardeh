@extends('layouts.auth')

@section('title', 'بازبابی رمز عبور')

<!-- THIS PAGE HAS A URL TO SEND SMS CODE: /js/confirm-code:108 -->
<!-- THIS PAGE HAS A URL TO SEND SMS CODE: /js/confirm-code:108 -->
<!-- THIS PAGE HAS A URL TO SEND SMS CODE: /js/confirm-code:108 -->


@section('content')
<img class="-tw-z-10 tw-w-full tw-h-full tw-absolute tw-top-0 tw-left-0" src="{{ Vite::asset('resources/images/patternpad2.svg') }}" alt="">
<div class="row tw-h-screen">
    <div class="col-12 col-md-6 tw-flex  tw-justify-center">
        <div class="tw-pt-10 tw-w-full sm:tw-w-[90%] md:tw-h-3/4 lg:tw-w-2/3 2xl:tw-w-1/2 ">
            <div class="form p-4 ">
            <a href="/"><img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="" title="" width="150" height="150" class="mx-auto d-block"></a>

                <div class="form-info tw-text-center my-3">
                    <h1 class="fw-bold fs-5">کد بازیابی را وارد کنید</h1>
                </div>
                <form class="mt-5" id="verifyForm" method="post" action="{{ route('verify.remember.submit') }}">
                    @csrf
                    <div class="enter-code d-flex justify-content-between align-items-center ltr">
                        <input type="text" placeholder="○" class="pin form-control tw-mx-1 text-center fs-4 border-radius-2xl">
                        <input type="text" placeholder="○" class="pin form-control tw-mx-1 text-center fs-4 border-radius-2xl">
                        <input type="text" placeholder="○" class="pin form-control tw-mx-1 text-center fs-4 border-radius-2xl">
                        <input type="text" placeholder="○" class="pin form-control tw-mx-1 text-center fs-4 border-radius-2xl">
                        <input type="text" placeholder="○" class="pin form-control tw-mx-1 text-center fs-4 border-radius-2xl">
                    </div>
                    <input type="hidden" name="gu_id" value="{{ $id }}">
                    <input type="hidden" name="mobile" value="{{ $mobile }}">
                    <div class="input-group has-validation">
                        <input type="text" name="code" style="visibility: hidden;opacity: 0;" class="form-control border-radius-xl {{ $errors->has('code') ? 'is-invalid' : '' }}"  id="code" >
                        <div class="invalid-feedback">
                            @if($errors->has("code"))
                                {{$errors->first("code")}}
                            @endif
                        </div>
                    </div>

                    <div class="d-grid gap-2 mt-3">
                        <button type="submit" class="btn custom-btn-primary btn-block border-radius-xl fw-bold">ادامه</button>
                    </div>
                </form>
                <div class="tw-flex tw-justify-between tw-items-center mt-3">
                    <a href="{{ route('mobile.verification.form') }}" class="nav-link tw-text-[var(--primary)] btn-block fs-7 border-radius-xl fw-bold">تغییر شماره تلفن</a>
                    <span class="tw-cursor-text tw-bg-transparent tw-border-none tw-outline-none tw-text-[var(--primary)] p-0 d-block" id="count">1:00</span>

                </div>
            </div>
        </div>
    </div>
    <div class="tw-hidden md:tw-block col-md-6 tw-p-5">
        <img class="tw-rounded-2xl tw-object-cover tw-w-full tw-h-full tw-relative tw-block" src="{{ Vite::asset('resources/images/auth3.jpg') }}" alt="">
    </div>
</div>
@endsection

@section('scripts')
<script src="{{ Vite::asset('resources/js/confirm-code.js') }}"></script>
@endsection
