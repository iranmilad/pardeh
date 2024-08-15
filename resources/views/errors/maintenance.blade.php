@extends('layouts.free')


@section('title', 'بروزرسانی')

@section('content')
<img class="-tw-z-10 tw-w-full tw-h-full tw-absolute tw-top-0 tw-left-0" src="{{ Vite::asset('resources/images/patternpad2.svg') }}" alt="">
<div class="tw-absolute tw-top-2/4 tw-left-2/4 d-flex justify-content-center align-items-center h-100" style="transform: translate(-50%,-50%);">
    <div class="form p-4 border border-radius-3xl border-gray-200 tw-bg-white">
        <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="" title="" class="mx-auto d-block tw-size-40">
        <div class="form-info text-center my-3 tw-pb-20">
            <h1 class="fw-bold fs-5">بزودی برمیگردیم</h1>
        </div>
        <div dir="ltr" x-data="countdown(1720526496000)" x-init="startCountdown">
            <div id="countdown" class="product-box-countdown maintenance tw-space-x-4 lg:tw-space-x-10">
                <div class="tw-flex tw-items-center tw-justify-center tw-flex-col">
                    <span x-text="formattedDays"></span> روز
                </div>
                <div class="tw-flex tw-items-center tw-justify-center tw-flex-col">
                    <span x-text="formattedHours"></span> ساعت
                </div>
                <div class="tw-flex tw-items-center tw-justify-center tw-flex-col">
                    <span x-text="formattedMinutes"></span> دقیقه
                </div>
                <div class="tw-flex tw-items-center tw-justify-center tw-flex-col">
                    <span x-text="formattedSeconds"></span> ثانیه
                </div>
            </div>
        </div>
    </div>
</div>
@endsection