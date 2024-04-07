@extends('layouts.primary')

@section('title', "ورود به حساب کاربری")


@section('content')
<div class="container">
    <div class="row">

        <!--                        Cart Header:start-->
        <div class="cart-header my-4">
            <div class="row col-md-12">
                <p> برای ادامه فرایند باید وارد حساب کاربری خود شوید در صورتی که حساب کاربری ندارید ابتدا ثبت نام کنید</p>
            </div>

        </div>

        <div class="row form">
            <div class="col-md-3">
                <div class="mb-3">
                    <a href="/login" class="login-register-btn tw-h-[46px]">
                        <i class="fa-solid fa-user-large"></i>
                        <span class="tw-hidden md:tw-block"> ورود به حساب کاربری</span>
                    </a>
                </div>
            </div>
        </div>
        <!--                        Cart Header:end-->

        <div class="row form">
            <div class="col-md-3">
                <div class="mb-3">
                    <a href="/register" class="login-register-btn tw-h-[46px]">
                        <i class="fa-solid fa-user-plus"></i>
                        <span class="tw-hidden md:tw-block"> ثبت نام</span>
                    </a>
                </div>
            </div>
        </div>
        <!--                        Cart Header:end-->

    </div>
</div>
@endsection

