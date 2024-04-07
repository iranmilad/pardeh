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
                @yield('shipping-menu')
            </div>
            <!--                    Products Prices:end-->

    </div>
</div>

@endsection
