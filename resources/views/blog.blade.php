<!-- resources/views/home.blade.php -->
@extends('layouts.primary')

@section('title', 'بلاگ')

@section('content')
<div class="container">
    <div class="tw-text-center mb-5">
        <h4>وبلاگ</h4>
    </div>
    <div class="blogGrid">
        <a href="#" class="biggrid">
            <div class="blogbiggrid tw-cursor-pointer tw-rounded-2xl tw-overflow-hidden tw-relative tw-h-full">
                <img class="tw-z-10 tw-relative tw-block tw-object-cover tw-h-full tw-w-full" src="{{Vite::asset('resources/images/auth.jpg')}}" />
                <div class="tw-flex tw-flex-col tw-items-end tw-pt-3 tw-absolute tw-bottom-0 tw-left-0 tw-z-20 tw-w-full tw-h-full tw-px-7 index-blog-swiper-bg">
                    <div class="tw-w-max badge badge-primary custom-btn-primary rounded-pill">آموزش</div>
                </div>
                <div class="tw-absolute tw-bottom-0 tw-z-30 tw-right-0 tw-px-5 tw-pb-3 tw-text-white index-blog-swiper-bg">
                    <h6 class="tw-leading-relaxed">چگونه پرده ها می توانند یک اتاق خواب دنج ایجاد کنند؟</h6>
                </div>
            </div>
        </a>
        <a href="#" class="smallgrid1 blogbiggrid">
            <div class="tw-flex tw-flex-col tw-items-end tw-pt-3 tw-absolute tw-bottom-0 tw-left-0 tw-z-20 tw-w-full tw-h-full tw-px-7 index-blog-swiper-bg">
                <div class="tw-w-max badge badge-primary custom-btn-primary rounded-pill">آموزش</div>
            </div>
            <img class="z- tw-rounded-2xl tw-block tw-relative tw-w-full tw-h-full tw-object-cover" src="{{Vite::asset('resources/images/auth2.jpg')}}" alt="">
            <div class="tw-absolute tw-bottom-0 tw-z-30 tw-right-0 tw-px-5 tw-pb-3 tw-text-white index-blog-swiper-bg">
                <h6 class="tw-leading-relaxed">آیا پرده متناسب با رنگ دیوار باید انتخاب شود ؟</h6>
            </div>
        </a>
        <div class="smallgrid">
            <div class="row md:tw-h-full gx-3 gy-2">
                <a href="#" class="col-md-6 tw-h-full">
                    <div class="smallgrid2 blogbiggrid">
                        <div class="tw-flex tw-flex-col tw-items-end tw-pt-3 tw-absolute tw-bottom-0 tw-left-0 tw-z-20 tw-w-full tw-h-full tw-px-7 index-blog-swiper-bg">
                            <div class="tw-w-max badge badge-primary custom-btn-primary rounded-pill">آموزش</div>
                        </div>
                        <img class="z- tw-rounded-2xl tw-block tw-relative tw-w-full tw-h-full tw-object-cover" src="{{Vite::asset('resources/images/auth3.jpg')}}" alt="">
                        <div class="tw-absolute tw-bottom-0 tw-z-30 tw-right-0 tw-px-5 tw-pb-3 tw-text-white index-blog-swiper-bg">
                            <h6 class="tw-leading-relaxed">چرا پرده تیره طرفدار بیشتری برای دکوراسیون مدرن دارد!؟</h6>
                        </div>
                    </div>
                </a>
                <a href="#" class="col-md-6 tw-h-full">
                    <div class="smallgrid3 blogbiggrid">
                        <div class="tw-flex tw-flex-col tw-items-end tw-pt-3 tw-absolute tw-bottom-0 tw-left-0 tw-z-20 tw-w-full tw-h-full tw-px-7 index-blog-swiper-bg">
                            <div class="tw-w-max badge badge-primary custom-btn-primary rounded-pill">آموزش</div>
                        </div>
                        <img class="z- tw-rounded-2xl tw-block tw-relative tw-w-full tw-h-full tw-object-cover" src="{{Vite::asset('resources/images/auth3.jpg')}}" alt="">
                        <div class="tw-absolute tw-bottom-0 tw-z-30 tw-right-0 tw-px-5 tw-pb-3 tw-text-white index-blog-swiper-bg">
                            <h6 class="tw-leading-relaxed">چرا پرده تیره طرفدار بیشتری برای دکوراسیون مدرن دارد!؟</h6>
                        </div>
                    </div>
                </a>
            </div>
        </div>

    </div>
</div>

<div class="container tw-mt-10">
    <div class="row">
        <!--                    Products In Cart:start-->
        <div class="col-sm-12 col-md-8 col-lg-8 col-xl-9">
            <h5>جدیدترین مطالب</h5>
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
                <a href="/post" class="col-12 col-lg-6">
                    <div class="card post-box-blog">
                        <img class="img" src="{{Vite::asset('resources/images/single-product/5.jpg')}}" alt="">
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
                <a href="/post" class="col-12 col-lg-6">
                    <div class="card post-box-blog">
                        <img class="img" src="{{Vite::asset('resources/images/single-product/6.jpg')}}" alt="">
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
                <a href="/post" class="col-12 col-lg-6">
                    <div class="card post-box-blog">
                        <img class="img" src="{{Vite::asset('resources/images/single-product/5.jpg')}}" alt="">
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
                <div class="input-group mb-3">
                    <input type="text" class="form-control fs-8" placeholder="عنوان خود را وارد کنید">
                    <button class="btn custom-btn-primary" type="button" id="button-addon2"><i class="fab fa-sistrix fw-md text-white"></i></button>
                </div>
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