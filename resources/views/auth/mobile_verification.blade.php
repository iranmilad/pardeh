@extends('layouts.auth')

@section('title', 'بازیابی رمز عبور')


@section('content')
<img class="-tw-z-10 tw-w-full tw-h-full tw-absolute tw-top-0 tw-left-0" src="{{ Vite::asset('resources/images/patternpad2.svg') }}" alt="">
<div class="row tw-h-screen">
    <div class="col-12 col-md-6 tw-flex  tw-justify-center">
        <div class="tw-pt-10 tw-w-full sm:tw-w-[90%] md:tw-h-3/4 lg:tw-w-2/3 2xl:tw-w-1/2 ">
            <div class="form p-4 ">
                <a href="/"><img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="" title="" width="150" height="150" class="mx-auto d-block"></a>
                <div class="form-info tw-text-center my-3">
                    <h1 class="fw-bold fs-5">بازیابی رمز عبور</h1>
                    <div class="form-info-text my-4 gray-600">
                        <p class="fs-7">شماره تلفن خود را وارد کنید</p>
                    </div>
                </div>
                <form method="post" action="" id="changepassForm">
                    @csrf
                    <div class="input-group has-validation">
                        <input type="text" name="mobile" class="form-control border-radius-xl {{ $errors->has('mobile') ? 'is-invalid' : '' }}" placeholder="شماره تلفن" autocomplete="off" id="mobile" aria-describedby="inputGroupPrepend" required>
                        <div class="invalid-feedback">
                            @if($errors->has("mobile"))
                            {{$errors->first("mobile")}}
                            @endif
                        </div>
                    </div>


                    <div class="d-grid gap-2 mt-3">
                        <button type="submit" class="btn custom-btn-primary btn-block border-radius-xl fw-bold">ادامه</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="tw-hidden md:tw-block col-md-6 tw-p-5">
        <img class="tw-rounded-2xl tw-object-cover tw-w-full tw-h-full tw-relative tw-block" src="{{ Vite::asset('resources/images/auth4.jpg') }}" alt="">
    </div>
</div>
@endsection
