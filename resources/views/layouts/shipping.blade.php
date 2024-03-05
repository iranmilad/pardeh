@extends('layouts.primary')

<?php
$activeClass = "tw-text-indigo-500 pay";
$notActive = "gray-700 pay basket";
?>

@section('content')
<div class="container">
    <div class="payment">
        <!--    Payment Header:start-->
        <div class="payment-header border-radius-xl my-3 border-0 mb-5">
            <!--            Payment Timeline:start-->
            <div class="payment-timeline d-flex shipping justify-content-center align-items-baseline my-3">
                <a href="/cart" class="{{ Route::current()->uri() == 'cart' ? $activeClass : $notActive }}  mx-3 d-flex justify-content-between align-items-center">
                    <p>
                        <i class="fa fa-shopping-cart rotate-3d"></i>
                        سبد خرید
                    </p>
                </a>
                <a href="/shipping" class="{{ Route::current()->uri() == 'shipping' ? $activeClass : $notActive }} mx-3 d-flex justify-content-between align-items-center">
                    <p>
                        <i class="fa fa-truck rotate-3d"></i>
                        <span>اطلاعات مشتری</span>
                    </p>
                </a>
                <a href="/delivery" class="{{ Route::current()->uri() == 'delivery' ? $activeClass : $notActive }} mx-3 d-flex justify-content-between align-items-center">
                    <p>
                        <i class="fa fa-calendar-clock rotate-3d"></i>
                        <span>زمان تحویل</span>
                    </p>
                </a>
                <a href="/payment" class="{{ Route::current()->uri() == 'payment' ? $activeClass : $notActive }} mx-3 d-flex justify-content-between align-items-center">
                    <p>
                        <i class="fa fa-truck rotate-3d"></i>
                        <span>پرداخت</span>
                    </p>
                </a>
            </div>
            <!--            Payment Timeline:end-->
        </div>
        <!--    Payment Header:end-->
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-8 col-xl-9">
            @yield('shipping-content')
        </div>
        <!--                    Products Prices:start-->
        <div class="col-sm-12 col-md-12 col-lg-4 col-xl-3 tw-mt-3 lg:tw-mt-0">
            @if(Route::current()->uri() == 'cart')
            <div class="cart-cal border tw-rounded-2xl overflow-hidden">
                <form class="tw-flex tw-items-center tw-justify-between px-3 pt-3 mb-3">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="کد تخفیف">
                        <button class="btn btn-dark" type="button" id="button-addon2">اعمال</button>
                    </div>

                </form>
            </div>
            @endif
            <div class="cart-cal border tw-rounded-2xl overflow-hidden mt-3">
                <!--                            All Prices:start-->
                <div class="all-price d-flex justify-content-between align-items-center mb-3 px-3 pt-2">
                    <p class="fs-7 fw-bold">
                        قیمت کالاها
                        <span>(2)</span>
                    </p>
                    <p class="fs-7 gray-600 fw-bold">
                        19,200,000 تومان
                    </p>
                </div>
                <!--                            All Prices:end-->

                <!--                            All Prices Discounted:start-->
                <div class="all-price-discounted d-flex justify-content-between align-items-center mb-3 px-3 pt-2">
                    <p class="fs-7 fw-bold">
                        جمع سبد خرید
                    </p>
                    <p class="fs-7 gray-600 fw-bold">
                        19,000,000 تومان
                    </p>
                </div>
                <!--                            All Prices Discounted:end-->

                <!--                           Purchase:start-->
                <div class="purchase-profit d-flex justify-content-between align-items-center mb-3 px-3 pt-1">
                    <p class="fs-7 fw-bold text-primary">
                        سود شما از خرید
                    </p>
                    <p class="fs-6 fw-bold text-primary">
                        100,000 تومان
                    </p>
                </div>
                <!--                            Purchase:end-->

                <!--                            Checkout Btn:start-->
                <div class="d-grid gap-2 p-3">
                    <a href="" class="btn custom-btn-primary border-radius-xl">ادامه فرایند خرید</a>
                </div>
                <!--                            Checkout Btn:end-->
            </div>
            <p class="text-start mt-3 fs-8">
                هزینه این سفارش هنوز پرداخت نشده‌ و در صورت اتمام موجودی، کالاها از سبد حذف می‌شوند
            </p>
        </div>
        <!--                    Products Prices:end-->
    </div>
</div>

@endsection