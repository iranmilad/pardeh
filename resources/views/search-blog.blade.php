<!-- resources/views/home.blade.php -->
@extends('layouts.primary')

@section('title', 'بلاگ')

@section('content')
<div class="container">
    <div class="tw-text-center mb-5">
        <h4>وبلاگ</h4>
    </div>
</div>

<div class="container tw-mt-10">
    <div class="row">
        <!--                    Products In Cart:start-->
        <div class="col-sm-12 col-md-8 col-lg-8 col-xl-9">
            <h5>جستجوی برای : {{ request()->get('s') ?? '' }}</h5>
            <div class="alert tw-bg-amber-500 tw-text-white tw-rounded-xl">
                <i class="fa-solid fa-circle-exclamation"></i>
                <span>چیزی یافت نشد</span>
            </div>
            <div class="row gx-4 gy-4 mt-1 tw-items-stretch">
                <a href="/post" class="col-12 col-lg-6">
                    <div class="card post-box-blog">
                        <img class="img" src="{{Vite::asset('resources/images/single-product/1.jpg')}}" alt="">
                        <h5 class="title">نکته ی مهم خرید پرده برای پنچره پشت مبل</h5>
                        <div class="body">
                            <!-- SHORT DESC. !!JUST P TAG!! -->
                            <p class="">۵ نکته مهم خرید پرده برای پنجره پشت مبل! با ایزی پرده همراه باشید انواع پرده های ایزی پرده برای خرید پرده بر روی دسته بندی مورد نظر خود کلیک کنید پرده آماده مخمل _ پردده ... </p>
                            <div class="footer">
                                <div class="tw-flex tw-justify-between tw-items-center tw-text-slate-500 mt-3">
                                    <span>
                                        <i class="fa-duotone fa-clock"></i>
                                        2024-01-01
                                    </span>
                                    <div class="">
                                        <div class="tw-w-max badge badge-primary custom-btn-primary rounded-pill">آموزش</div>
                                        <div class="tw-w-max badge badge-primary custom-btn-primary rounded-pill">خبر</div>
                                    </div>
                                </div>
                                <button class="mt-4 tw-rounded-2xl tw-w-full btn btn-sm custom-btn-primary" href="/post">
                                    ادامه مطلب
                                </button>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="counter-a"></div>
            <div class="counter-a"></div>
            <nav class="cs-pagination mt-5 tw-w-max tw-mx-auto">
                <a href=""><i class="fa-solid fa-chevron-right"></i></a>
                <span>1</span>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#" class="dots">...</a>
                <a href="#">6</a>
                <a href="#">7</a>
                <a href="#">8</a>
                <a href=""><i class="fa-solid fa-chevron-left"></i></a>
            </nav>
        </div>
        <!--                    Products In Cart:end-->

        <!--                    Products Prices:start-->
        <div class="col-sm-12 col-md-4 col-lg-4 col-xl-3 tw-mt-3 lg:tw-mt-0">
            <div class="cart-cal  overflow-hidden">
                <!--                            All Prices:start-->
                <div class="all-price d-flex justify-content-between align-items-center mb-3 px-3 pt-2">
                    <p class="fs-7 fw-bold">
                        جستجو
                    </p>
                </div>
                <form action="" method="get">
                    <div class="input-group mb-3">
                        <input type="text" name="s" class="form-control fs-8" placeholder="عنوان خود را وارد کنید" value="{{ request()->get('s') ?? '' }}">
                        <button class="btn custom-btn-primary tw-rounded-tl-lg tw-rounded-bl-lg" type="submit" id="button-addon2"><i class="fab fa-sistrix fw-md text-white"></i></button>
                    </div>
                </form>
            </div>
            <div class="cart-cal  overflow-hidden">
                <!--                            All Prices:start-->
                <div class="all-price d-flex justify-content-between align-items-center mb-3 px-3 pt-2">
                    <p class="fs-7 fw-bold">
                        پربازدید ترین مطالب
                    </p>
                </div>
                <div class="tw-flex tw-items-start mt-3 tw-border-0 tw-border-b tw-border-gray-200 tw-pb-4 tw-border-solid">
                    <img class="tw-block tw-relative tw-rounded-2xl tw-size-16" src="{{Vite::asset('resources/images/single-product/3.jpg')}}" alt="">
                    <div class="tw-pr-3">
                        <p class="tw-text-sm">خرید پرده آماده یا خرید پرده زبرا؟</p>
                    </div>
                </div>
                <div class="tw-flex tw-items-start mt-3 tw-border-0 tw-border-b tw-border-gray-200 tw-pb-4 tw-border-solid">
                    <img class="tw-block tw-relative tw-rounded-2xl tw-size-16" src="{{Vite::asset('resources/images/single-product/1.jpg')}}" alt="">
                    <div class="tw-pr-3">
                        <p class="tw-text-sm">چه پرده ای مناسب حفظ حریم خصوصی می باشد؟</p>
                    </div>
                </div>
                <div class="tw-flex tw-items-start mt-3 tw-border-0 tw-border-b tw-border-gray-200 tw-pb-4 tw-border-solid">
                    <img class="tw-block tw-relative tw-rounded-2xl tw-size-16" src="{{Vite::asset('resources/images/single-product/2.jpg')}}" alt="">
                    <div class="tw-pr-3">
                        <p class="tw-text-sm">پرده کتابخانه یا اتاق مطالعه را چطور انتخاب کنیم؟</p>
                    </div>
                </div>
                <div class="tw-flex tw-items-start mt-3 tw-border-0 tw-border-b tw-border-gray-200 tw-pb-4 tw-border-solid">
                    <img class="tw-block tw-relative tw-rounded-2xl tw-size-16" src="{{Vite::asset('resources/images/single-product/6.jpg')}}" alt="">
                    <div class="tw-pr-3">
                        <p class="tw-text-sm">پرفروش ترین پرده بازار کدام است؟ راهنما خرید پرده آماده</p>
                    </div>
                </div>
                <div class="tw-flex tw-items-start mt-3 tw-border-0 tw-border-b tw-border-gray-200 tw-pb-4 tw-border-solid">
                    <img class="tw-block tw-relative tw-rounded-2xl tw-size-16" src="{{Vite::asset('resources/images/single-product/5.jpg')}}" alt="">
                    <div class="tw-pr-3">
                        <p class="tw-text-sm">چه پرده هایی مناسب برای دیوار به رنگ آبی روشن می باشد</p>
                    </div>
                </div>
                <div class="tw-flex tw-items-start mt-3 tw-border-0 tw-border-b tw-border-gray-200 tw-pb-4 tw-border-solid">
                    <img class="tw-block tw-relative tw-rounded-2xl tw-size-16" src="{{Vite::asset('resources/images/single-product/3.jpg')}}" alt="">
                    <div class="tw-pr-3">
                        <p class="tw-text-sm">خرید پرده آماده یا خرید پرده زبرا؟</p>
                    </div>
                </div>
                <div class="tw-flex tw-items-start mt-3 tw-border-0 tw-border-b tw-border-gray-200 tw-pb-4 tw-border-solid">
                    <img class="tw-block tw-relative tw-rounded-2xl tw-size-16" src="{{Vite::asset('resources/images/single-product/1.jpg')}}" alt="">
                    <div class="tw-pr-3">
                        <p class="tw-text-sm">چه پرده ای مناسب حفظ حریم خصوصی می باشد؟</p>
                    </div>
                </div>
                <div class="tw-flex tw-items-start mt-3 tw-border-0 tw-border-b tw-border-gray-200 tw-pb-4 tw-border-solid">
                    <img class="tw-block tw-relative tw-rounded-2xl tw-size-16" src="{{Vite::asset('resources/images/single-product/2.jpg')}}" alt="">
                    <div class="tw-pr-3">
                        <p class="tw-text-sm">پرده کتابخانه یا اتاق مطالعه را چطور انتخاب کنیم؟</p>
                    </div>
                </div>
                <div class="tw-flex tw-items-start mt-3 tw-border-0 tw-border-b tw-border-gray-200 tw-pb-4 tw-border-solid">
                    <img class="tw-block tw-relative tw-rounded-2xl tw-size-16" src="{{Vite::asset('resources/images/single-product/6.jpg')}}" alt="">
                    <div class="tw-pr-3">
                        <p class="tw-text-sm">پرفروش ترین پرده بازار کدام است؟ راهنما خرید پرده آماده</p>
                    </div>
                </div>
                <div class="tw-flex tw-items-start mt-3 tw-border-0 tw-border-b tw-border-gray-200 tw-pb-4 tw-border-solid">
                    <img class="tw-block tw-relative tw-rounded-2xl tw-size-16" src="{{Vite::asset('resources/images/single-product/5.jpg')}}" alt="">
                    <div class="tw-pr-3">
                        <p class="tw-text-sm">چه پرده هایی مناسب برای دیوار به رنگ آبی روشن می باشد</p>
                    </div>
                </div>
            </div>
        </div>
        <!--                    Products Prices:end-->
    </div>
</div>
@endsection