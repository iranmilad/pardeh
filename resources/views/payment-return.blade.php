@extends('layouts.free')

@section('title', 'عملیات پرداخت')

<?php
// get success or failure from url
$status = request()->query('status');

?>


@section('content')
<img class="-tw-z-10 tw-w-full tw-h-full tw-absolute tw-top-0 tw-left-0" src="{{ Vite::asset('resources/images/patternpad2.svg') }}" alt="">
<div class="action-wrapper d-flex justify-content-center align-items-center h-100">
    <div class="form p-4 border border-radius-3xl border-gray-200 tw-bg-white">
        <img src="{{ Vite::asset($status == 'success' ? 'resources/images/success.png' : 'resources/images/failure.png') }}" alt="" title="" class="mx-auto d-block tw-size-20">
        <div class="form-info text-center my-3">
            <h1 class="fw-bold fs-5">
                @if($status == 'success')
                پرداخت با موفقیت انجام شد
                @else
                پرداخت انجام نشد
                @endif
            </h1>
        </div>
        <table class="tw-w-full tw-mx-auto tw-my-8 payment-return-table">
            <tbody>
                <tr>
                    <th>نوع پرداخت</th>
                    <td class="text-end">درگاه پرداخت</td>
                </tr>
                <tr>
                    <th>درگاه</th>
                    <td class="text-end">سامان</td>
                </tr>
                <tr>
                    <th>شماره پیگیری</th>
                    <td class="text-end">12345</td>
                </tr>
                <tr>
                    <th>تاریخ</th>
                    <td class="text-end">14 فروردین 1401</td>
                </tr>
                <tr>
                    <th>شماره سفارش</th>
                    <td class="text-end">123456789</td>
                </tr>
                <tr>
                    <th>یادداشت</th>
                    <td class="text-end">این یک یاداشت برای شما است</td>
                </tr>
            </tbody>
        </table>
        <div class="d-grid gap-2 mt-3">

            @if($status == 'success')
            <a href="#" class="py-2 btn tw-bg-emerald-500 tw-text-white hover:tw-text-white hover:tw-bg-emerald-600 focus:tw-bg-emerald-600 active:tw-bg-emerald-600 btn-block border-radius-xl fw-bold">مشاهده سفارش</a>
            @else
            <div>
                <a href="#" class="w-100 py-2 btn tw-bg-red-500 tw-text-white hover:tw-text-white hover:tw-bg-red-600 focus:tw-bg-red-600 active:tw-bg-red-600 btn-block border-radius-xl fw-bold">پرداخت مجدد</a>
                <a href="/" class="w-100 py-2 btn btn-block border-radius-xl fw-bold">بازگشت به سایت</a>
            </div>
            @endif

        </div>
    </div>
</div>
@endsection