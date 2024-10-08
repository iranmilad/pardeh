@extends('layouts.dashboard')

@section('title', 'جزئیات سفارش')

@section('dashboard-css')
@endsection

@section('dashboard-content')
<!--                        User Panel Orders:start-->
<div class="user-panel-orders border border-radius-xl p-3 mb-3 mt-3 mt-lg-0 tw-shadow-sm">
    <div class="d-flex align-items-center tw-justify-between mb-3">
        <p class="fw-bold d-flex tw-items-center">
            <button class="btn btn-sm custom-btn-primary me-2 my-0"><i class="fa-solid fa-arrow-right"></i></button>
            جزئیات سفارش
        </p>
        <span href="#" class="tw-text-[var(--primary)]  tw-text-sm">
            <i class="fa-duotone fa-file-invoice"></i>
            <span>مشاهده فاکتور</span>
        </span>
    </div>
    <hr>
    <div class="d-flex align-items-center gap-4 tw-flex-wrap">
        <div class="labely">
            <span>کد پیگیری سفارش: </span>
            <label for="">{{ $order->payment->ref_id ?? '-' }}</label>
        </div>
        <div class="labely">
            <span>تاریخ ثبت سفارش:</span>
            <label for="">{{ $order->createdAtShamsi }}</label>
        </div>
    </div>
    <div class="d-flex align-items-center gap-4 tw-flex-wrap mt-4">
        <div class="labely">
            <span>تحویل گیرنده:</span>
            <label for=""> {{ $order->customer_name }}</label>
        </div>
        <div class="labely">
            <span>شماره موبایل: </span>
            <label for="">{{ $order->customer_phone_number }}</label>
        </div>
        <div class="labely">
            <span>آدرس: </span>
            <label for="">{{ $order->shipping_address }}</label>
        </div>
    </div>
    <div class="d-flex align-items-center gap-4 tw-flex-wrap mt-4">
        <div class="labely">
            <span>مبلغ:</span>
            <label for="">{{ $order->payment->amount ?? 0 }} <svg style="width: 16px; height: 16px; fill: var(--undefined);">
                    <use xlink:href="#toman"></use>
                </svg></label>
        </div>
        <div class="labely">
            <span>روش پرداخت: </span>
            @if ($order->paymentMethod=='cash')
                <label for=""> درگاه پرداخت  </label>
            @elseif ($order->paymentMethod=='credit')
                <label for=""> کارت اعتباری </label>
            @else
                <label for=""> چک  </label>
            @endif
        </div>
    </div>
</div>


<div class="user-panel-orders border border-radius-xl p-3 mb-3 mt-3 mt-lg-0 tw-shadow-sm">
    <div class="d-flex align-items-center tw-justify-between mb-3">
        <p class="fw-bold d-flex tw-items-center">
            جزئیات مرسوله ها
        </p>
    </div>
    <div class="row gy-4">
        <div class="col-12 col-md-6">
            <div class="labely">
                <span>مرسوله ها: </span>
                <label for="">{{ $order->basket()->cart->count }}</label>
            </div>
            <div class="labely">
                <span>زمان تحویل: </span>
                <label for="">  {{ $order->deliveryDateShamsi }}  - {{ $order->delivery_time }}</label>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <label class="fs-7 mb-2 tw-text-emerald-500">درحال پردازش</label>
            <div class="progress tw-h-2" role="progressbar">
                <div class="progress-bar tw-bg-emerald-500" style="width: {{$order->percentOfFinishedItem() }}%"></div>
            </div>
        </div>
        <div class="col-12 mt-4">
            <div class="d-flex align-items-center tw-gap-6 tw-justify-between">
                <div class="labely">
                    <span>هزینه ارسال: </span>
                    <label for="">{{  $order->basket()->cart->deliveryCost }} <svg style="width: 16px; height: 16px; fill: var(--undefined);">
                            <use xlink:href="#toman"></use>
                        </svg></label>
                </div>
                <div class="labely">
                    <span>مبلغ مرسوله: </span>
                    <label for="">{{  $order->basket()->cart->total }} <svg style="width: 16px; height: 16px; fill: var(--undefined);">
                            <use xlink:href="#toman"></use>
                        </svg></label>
                </div>
                <div class="labely tw-text-[var(--primary)]">
                    <span>مبلغ قابل پرداخت</span>
                    <label for="">{{  $order->basket()->cart->totalPayed }} <svg style="width: 16px; height: 16px; fill: var(--undefined);">
                        <use xlink:href="#toman"></use>
                    </svg></label>
                </div>
            </div>
        </div>
        <?php
        for ($i = 0; $i < 2; $i++) : ?>
            <?php $id = uniqid(); ?>
            <div class="col-12 mt-4 pb-3 text-dark">
                <a href="#" class="d-flex tw-w-full text-dark">
                    <div class="tw-relative tw-w-max">
                        <img class="tw-size-28 tw-rounded-xl" src="{{ Vite::asset('resources/images/posts/4.jpg') }}" alt="">
                        <div class="tw-bg-slate-800 tw-flex tw-items-center tw-justify-center tw-rounded-md tw-text-white tw-text-xs tw-min-w-5 tw-h-5 tw-absolute -tw-top-2 -tw-left-2 tw-mx-auto tw-max-w-max tw-shadow-md">2</div>
                    </div>
                    <div class="tw-flex tw-flex-col tw-w-full tw-mr-3 lg:tw-mr-7 mt-lg-0">
                        <h6 class="fw-bold">محصول نمونه</h6>
                        <span class="fw-bold tw-text-lg mt-2">6,290,000 <svg style="width: 16px; height: 16px; fill: var(--undefined);">
                                <use xlink:href="#toman"></use>
                            </svg></span>
                        <div class="tw-flex tw-flex-row tw-w-full lg:tw-w-max tw-justify-between lg:tw-justify-start">
                            <button type="button" class="btn fs-7 px-0  tw-max-w-max tw-text-[var(--primary)] mt-2" data-bs-toggle="collapse" data-bs-target="#id_<?= $id; ?>">مشاهده جزئیات</button>
                            <button class="btn fs-7 px-0 tw-w-max tw-text-[var(--primary)] mt-2 lg:tw-mr-6 send-comment-btn-order" data-id="1212">ارسال نظر</button>
                        </div>
                    </div>
                </a>
                <div class="collapse mt-2" id="id_<?= $id; ?>">
                    <div class="card card-body tw-rounded-xl tw-shadow-sm">
                        <div class="row">
                            <div class="col-6 col-md-4 col-lg-3 labely">
                                <span>تعداد: </span>
                                <label for="">2</label>
                            </div>
                            <div class="col-6 col-md-4 col-lg-3 labely">
                                <span>طول: </span>
                                <label for="">5 متر</label>
                            </div>
                            <div class="col-6 col-md-4 col-lg-3 labely">
                                <span>عرض: </span>
                                <label for="">10 متر</label>
                            </div>
                            <div class="col-6 col-md-4 col-lg-3 labely">
                                <span>رنگ: </span>
                                <label for="">مشکی</label>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif





        </div>
    </div>


    <!--                        User Panel Orders:end-->
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @endsection
