<!-- resources/views/home.blade.php -->
@extends('layouts.primary')

@section('title', config('app.name'))

@section('content')
<!-- Your home page content here -->
<!--Header::start-->

<div class="container tw-mb-14">
    <div class="row">
        <!-- برای چپ چین یا راست چین فقط المان رو جابجا کنید -->
        <!-- برای چپ چین یا راست چین فقط المان رو جابجا کنید -->
        <!-- برای چپ چین یا راست چین فقط المان رو جابجا کنید -->
        <!-- برای چپ چین یا راست چین فقط المان رو جابجا کنید -->
        <div class="col-lg-6">
            <div class="tw-flex tw-flex-col tw-items-center text-center tw-gap-10 tw-pt-10">
                <h2 class="fw-bold">20% تخفیف بهار تابستان</h2>
                <p >
                    با آغاز فصل بهار و تابستان، از تخفیف ویژه 20% برای خرید پرده‌های شیک و باکیفیت بهره‌مند شوید. پرده‌های ما با طراحی‌های مدرن، زیبایی و حریم خصوصی را به خانه شما هدیه می‌دهند. همین حالا سفارش دهید و لذت ببرید!
                </p>
                <button class="btn btn-dark fs-7 tw-py-3 tw-px-6">اکنون بخرید</button>
            </div>
        </div>
        <div class="col-lg-6 -tw-order-1 lg:tw-order-none">
            <img class="tw-h-[300px] md:tw-h-[400px] lg:tw-h-[500px] tw-w-full tw-rounded-2xl" src="{{ Vite::asset('resources/images/single-product/1.jpg') }}" alt="">
        </div>
    </div>
</div>

<div class="container tw-mb-14">
    <div class="swiper usersSlider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img class="tw-relative tw-block tw-object-contain tw-rounded-xl tw-h-full tw-w-full" src="https://placehold.co/1200x400.svg" />
            </div>
            <div class="swiper-slide">
                <img class="tw-relative tw-block tw-object-contain tw-rounded-xl tw-h-full tw-w-full" src="https://placehold.co/1200x400.svg" />
            </div>
            <div class="swiper-slide">
                <img class="tw-relative tw-block tw-object-contain tw-rounded-xl tw-h-full tw-w-full" src="https://placehold.co/1200x400.svg" />
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</div>
<header class="header">
    <div class="container">
        <div class="blogGrid">
            <div href="#" class="biggrid">
                <div class="blogbiggrid tw-cursor-pointer tw-rounded-2xl tw-overflow-hidden tw-relative tw-h-full">
                    <!-- Slider:start -->
                    <div class="swiper tw-w-full firstSlider *:tw-select-none tw-h-full">
                        <div class="swiper-wrapper">
                            <a class="swiper-slide" href="#">
                                <img class="tw-w-full tw-h-full tw-object-contain" src="{{ Vite::asset('resources/images/slider1.jpg') }}" alt="">
                            </a>
                            <a class="swiper-slide" href="#">
                                <img class="tw-w-full tw-h-full tw-object-contain" src="{{ Vite::asset('resources/images/slider2.jpg') }}" alt="">
                            </a>
                            <a class="swiper-slide" href="#">
                                <img class="tw-w-full tw-h-full tw-object-contain" src="{{ Vite::asset('resources/images/slider3.webp') }}" alt="">
                            </a>
                            <a class="swiper-slide" href="#">
                                <img class="tw-w-full tw-h-full tw-object-contain" src="{{ Vite::asset('resources/images/slider4.webp') }}" alt="">
                            </a>
                        </div>
                        <div class="swiper-pagination"></div>

                    </div>
                    <!-- Slider:end -->
                </div>
            </div>
            <a href="#" class="smallgrid1 blogbiggrid">
                <img class="z- tw-rounded-2xl tw-block tw-relative tw-w-full tw-h-full tw-object-cover" src="{{Vite::asset('resources/images/auth2.jpg')}}" alt="">
            </a>
            <div class="smallgrid">
                <div class="row md:tw-h-full gx-3 gy-2">
                    <a href="#" class="col-md-6 tw-h-full">
                        <div class="smallgrid2 blogbiggrid">
                            <img class="z- tw-rounded-2xl tw-block tw-relative tw-w-full tw-h-full tw-object-cover" src="{{Vite::asset('resources/images/auth3.jpg')}}" alt="">
                        </div>
                    </a>
                    <a href="#" class="col-md-6 tw-h-full">
                        <div class="smallgrid3 blogbiggrid">
                            <img class="z- tw-rounded-2xl tw-block tw-relative tw-w-full tw-h-full tw-object-cover" src="{{Vite::asset('resources/images/auth3.jpg')}}" alt="">
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </div>
</header>
<!--Header::end-->


<div class="container">
    <!--    Categories:start-->
    <section class="categories mt-5">
        <h2 class="text-center fs-4">دسته بندی ها</h2>
        <div class="row mt-5">
            <div class="col-sm-12 col-md-12 col-lg-10 col-xl-10 offset-sm-0 offset-md-0 offset-lg-2 offset-xl-2 mb-3">
                <!--                Row:start-->
                <div class="row">
                    <!--                Category Item:start-->
                    <div class="col-4 col-lg-2 col-xl-2 mb-4 index-category">
                        <a class="index-category" href="" title="">
                            <div>
                                <img src="{{ Vite::asset('resources/images/categories/1.jpg') }}" alt="" class="tw-w-full tw-block tw-relative tw-rounded-xl img-fluid img-opacity">
                            </div>
                            <strong class="text-center d-block fs-7">خانه و آشپرخانه</strong>
                        </a>
                    </div>
                    <!--                Category Item:end-->
                    <!--                Category Item:start-->
                    <div class="col-4 col-lg-2 col-xl-2 mb-4">
                        <a class="index-category" href="" title="">
                            <div>
                                <img src="{{ Vite::asset('resources/images/categories/2.jpg') }}" alt="" class="tw-w-full tw-block tw-relative tw-rounded-xl img-fluid img-opacity">
                            </div>
                            <strong class="text-center d-block fs-7">اسباب بازی</strong>
                        </a>
                    </div>
                    <!--                Category Item:end-->
                    <!--                Category Item:start-->
                    <div class="col-4 col-lg-2 col-xl-2 mb-4">
                        <a class="index-category" href="" title="">
                            <div>
                                <img src="{{ Vite::asset('resources/images/categories/3.jpg') }}" alt="" class="tw-w-full tw-block tw-relative tw-rounded-xl img-fluid img-opacity">
                            </div>
                            <strong class="text-center d-block fs-7">شخصی</strong>
                        </a>
                    </div>
                    <!--                Category Item:end-->
                    <!--                Category Item:start-->
                    <div class="col-4 col-lg-2 col-xl-2 mb-4">
                        <a class="index-category" href="" title="">
                            <div>
                                <img src="{{ Vite::asset('resources/images/categories/4.jpg') }}" alt="" class="tw-w-full tw-block tw-relative tw-rounded-xl img-fluid img-opacity">
                            </div>
                            <strong class="text-center d-block fs-7">ورزش</strong>
                        </a>
                    </div>
                    <!--                Category Item:end-->
                    <!--                Category Item:start-->
                    <div class="col-4 col-lg-2 col-xl-2 mb-4">
                        <a class="index-category" href="" title="">
                            <div>
                                <img src="{{ Vite::asset('resources/images/categories/5.jpg') }}" alt="" class="tw-w-full tw-block tw-relative tw-rounded-xl img-fluid img-opacity">
                            </div>
                            <strong class="text-center d-block fs-7">ورزش</strong>
                        </a>
                    </div>
                    <!--                Category Item:end-->
                    <div class="clearfix"></div>
                    <!--                Category Item:start-->
                    <div class="col-4 col-lg-2 col-xl-2 mb-4">
                        <a class="index-category" href="" title="">
                            <div>
                                <img src="{{ Vite::asset('resources/images/categories/6.jpg') }}" alt="" class="tw-w-full tw-block tw-relative tw-rounded-xl img-fluid img-opacity">
                            </div>
                            <strong class="text-center d-block fs-7">خانه و آشپرخانه</strong>
                        </a>
                    </div>
                    <!--                Category Item:end-->
                    <!--                Category Item:start-->
                    <div class="col-4 col-lg-2 col-xl-2 mb-4">
                        <a class="index-category" href="" title="">
                            <div>
                                <img src="{{ Vite::asset('resources/images/categories/7.jpg') }}" alt="" class="tw-w-full tw-block tw-relative tw-rounded-xl img-fluid img-opacity">
                            </div>
                            <strong class="text-center d-block fs-7">اسباب بازی</strong>
                        </a>
                    </div>
                    <!--                Category Item:end-->
                    <!--                Category Item:start-->
                    <div class="col-4 col-lg-2 col-xl-2 mb-4">
                        <a class="index-category" href="" title="">
                            <div>
                                <img src="{{ Vite::asset('resources/images/categories/8.jpg') }}" alt="" class="tw-w-full tw-block tw-relative tw-rounded-xl img-fluid img-opacity">
                            </div>
                            <strong class="text-center d-block fs-7">شخصی</strong>
                        </a>
                    </div>
                    <!--                Category Item:end-->
                    <!--                Category Item:start-->
                    <div class="col-4 col-lg-2 col-xl-2 mb-4">
                        <a class="index-category" href="" title="">
                            <div>
                                <img src="{{ Vite::asset('resources/images/categories/9.jpg') }}" alt="" class="tw-w-full tw-block tw-relative tw-rounded-xl img-fluid img-opacity">
                            </div>
                            <strong class="text-center d-block fs-7">ورزش</strong>
                        </a>
                    </div>
                    <!--                Category Item:end-->
                    <!--                Category Item:start-->
                    <div class="col-4 col-lg-2 col-xl-2 mb-4">
                        <a class="index-category" href="" title="">
                            <div>
                                <img src="{{ Vite::asset('resources/images/categories/4.jpg') }}" alt="" class="tw-w-full tw-block tw-relative tw-rounded-xl img-fluid img-opacity">
                            </div>
                            <strong class="text-center d-block fs-7">ورزش</strong>
                        </a>
                    </div>
                    <!--                Category Item:end-->
                </div>
                <!--                Row:end-->
            </div>
        </div>
    </section>
    <!--    Categories:end-->
    <!--    Banners:start-->
    <div class="banners my-5">
        <div class="row">
            <div class="col-6">
                <a href="" title="">
                    <img src="{{ Vite::asset('resources/images/banner1.jpg') }}" alt="" class="img-fluid border-radius-3xl img-opacity">
                </a>
            </div>
            <div class="col-6">
                <a href="" title="">
                    <img src="{{ Vite::asset('resources/images/banner2.jpg') }}" alt="" class="img-fluid border-radius-3xl img-opacity">
                </a>
            </div>
        </div>
    </div>
    <!--    Banners:end-->
</div>

<div class="container">
    <section class="mt-5">
        <h2 class="text-right fs-6 fw-bold">تازه ترین محصولات</h2>
        <div class="container">
            <div class="row mt-3 gy-4 newest-product-grid">
                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 position-relative index-product">
                    <x-product link="/product" name="پرده جدیده کتان" price="12,000,000" image="{{Vite::asset('resources/images/single-product/1.jpg')}}" image2="{{Vite::asset('resources/images/auth.jpg')}}" />
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 position-relative index-product">
                    <x-product link="/product" name="پرده جدیده کتان" price="12,000,000" image="{{Vite::asset('resources/images/single-product/2.jpg')}}" image2="{{Vite::asset('resources/images/auth2.jpg')}}" />
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 position-relative index-product">
                    <x-product link="/product" name="پرده جدیده کتان" price="12,000,000" image="{{Vite::asset('resources/images/single-product/3.jpg')}}" image2="{{Vite::asset('resources/images/auth3.jpg')}}" />
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 position-relative index-product">
                    <x-product link="/product" name="پرده جدیده کتان" price="12,000,000" image="{{Vite::asset('resources/images/single-product/1.jpg')}}" image2="{{Vite::asset('resources/images/auth4.jpg')}}" />
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 position-relative index-product">
                    <x-product link="/product" name="پرده جدیده کتان" price="12,000,000" image="{{Vite::asset('resources/images/single-product/2.jpg')}}" image2="{{Vite::asset('resources/images/auth5.jpg')}}" />
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 position-relative index-product">
                    <x-product link="/product" name="پرده جدیده کتان" price="12,000,000" image="{{Vite::asset('resources/images/single-product/3.jpg')}}" image2="{{Vite::asset('resources/images/auth.jpg')}}" />
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 position-relative index-product">
                    <x-product link="/product" name="پرده جدیده کتان" price="12,000,000" image="{{Vite::asset('resources/images/single-product/1.jpg')}}" image2="{{Vite::asset('resources/images/auth2.jpg')}}" />
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 position-relative index-product">
                    <x-product link="/product" name="پرده جدیده کتان" price="12,000,000" image="{{Vite::asset('resources/images/single-product/2.jpg')}}" image2="{{Vite::asset('resources/images/auth3.jpg')}}" />
                </div>
            </div>
        </div>
    </section>
</div>

<div class="container">
    <!--Best Suggestions:start-->
    <div class="best-suggestions tw-py-10 tw-mt-16 tw-rounded-3xl tw-p-5 tw-px-8 tw-flex tw-flex-col">
        <!-- Slider:start -->
        <div class="tw-flex  tw-flex-col md:tw-flex-row tw-w-full tw-ml-4 tw-justify-center md:tw-justify-between tw-items-center">
            <h4 class="tw-font-bold tw-text-lg md:tw-text-2xl best-suggestion-title">
                پیشنهاد
                شگفت انگیز
            </h4>
            <div class="tw-flex">
                <div class="tw-flex">
                    <button class="" id="suggestions-products-prev"><i class="fa fa-chevron-right"></i></button>
                    <button class="" id="suggestions-products-next"><i class="fa fa-chevron-left"></i></button>
                </div>
                <button class="tw-text-sm tw-px-3 tw-py-2 tw-bg-transparent tw-text-white text-[#2d365d] tw-border-2 tw-border-solid border-white tw-rounded-xl tw-w-max hover:tw-bg-white hover:tw-text-[#ff3a4e]">مشاهده همه</button>
            </div>
        </div>
        <div class="swiper bestSuggestionsSlider tw-w-full tw-h-full tw-mt-4">
            <div class="swiper-wrapper tw-items-stretch">
                <div class="swiper-slide tw-bg-white tw-rounded-xl index-product"><x-product salePriceDate="1717228799000" name="پرده جدیده کتان" price="12,000,000" discount="5%" link="/product" discountedPrice="10,000,000" image="{{Vite::asset('resources/images/single-product/2.jpg')}}" link="/product" /></div>
                <div class="swiper-slide tw-bg-white tw-rounded-xl index-product"><x-product salePriceDate="1717228799000" name="پرده جدیده کتان" price="12,000,000" discount="5%" link="/product" discountedPrice="10,000,000" image="{{Vite::asset('resources/images/single-product/2.jpg')}}" link="/product" /></div>
                <div class="swiper-slide tw-bg-white tw-rounded-xl index-product"><x-product salePriceDate="1717228799000" name="پرده جدیده کتان" price="12,000,000" discount="5%" link="/product" discountedPrice="10,000,000" image="{{Vite::asset('resources/images/single-product/2.jpg')}}" link="/product" /></div>
                <div class="swiper-slide tw-bg-white tw-rounded-xl index-product"><x-product salePriceDate="1717228799000" name="پرده جدیده کتان" price="12,000,000" discount="5%" link="/product" discountedPrice="10,000,000" image="{{Vite::asset('resources/images/single-product/2.jpg')}}" link="/product" /></div>
                <div class="swiper-slide tw-bg-white tw-rounded-xl index-product"><x-product salePriceDate="1717228799000" name="پرده جدیده کتان" price="12,000,000" discount="5%" link="/product" discountedPrice="10,000,000" image="{{Vite::asset('resources/images/single-product/2.jpg')}}" link="/product" /></div>
                <div class="swiper-slide tw-bg-white tw-rounded-xl index-product"><x-product salePriceDate="1717228799000" name="پرده جدیده کتان" price="12,000,000" discount="5%" link="/product" discountedPrice="10,000,000" image="{{Vite::asset('resources/images/single-product/2.jpg')}}" link="/product" /></div>
            </div>
        </div>

        <!-- Slider:end -->
    </div>
    <!--Best Suggestions:End-->
</div>

<div class="container">
    <section class="mt-5 tw-flex tw-flex-col lg:tw-flex-row tw-items-center tw-justify-between">
        <h2 class="text-right  tw-w-max fw-bold fs-6">محصولات تخفیف دار</h2>
        <div class="tw-w-full tw-h-1 tw-bg-gray-300 tw-space-x-0 tw-mx-14 tw-hidden "></div>
        <div class="tw-flex tw-flex-row-reverse tw-items-center">
            <button class="tw-text-sm tw-px-5 tw-py-[10px] tw-bg-white text-[#2d365d] tw-border-2 tw-border-solid border-dark tw-rounded-xl tw-w-max hover:tw-bg-black hover:tw-text-white ">مشاهده همه</button>
            <button class="" id="discounted-products-next"><i class="fa fa-chevron-left"></i></button>
            <button class="" id="discounted-products-prev"><i class="fa fa-chevron-right"></i></button>
        </div>
    </section>
    <div class="swiper discountedSwiper tw-mt-6">
        <div class="swiper-wrapper tw-flex tw-items-stretch">
            <div class="swiper-slide index-product">
                <x-product name="پرده جدیده کتان" price="12,000,000" discount="5%" link="/product" discountedPrice="10,000,000" image="{{Vite::asset('resources/images/single-product/1.jpg')}}" />
            </div>
            <div class="swiper-slide index-product">
                <x-product name="پرده جدیده کتان" price="12,000,000" discount="5%" link="/product" discountedPrice="10,000,000" image="{{Vite::asset('resources/images/single-product/1.jpg')}}" />
            </div>
            <div class="swiper-slide index-product">
                <x-product name="پرده جدیده کتان" price="12,000,000" discount="5%" link="/product" discountedPrice="10,000,000" image="{{Vite::asset('resources/images/single-product/1.jpg')}}" />
            </div>
            <div class="swiper-slide index-product">
                <x-product name="پرده جدیده کتان" price="12,000,000" discount="5%" link="/product" discountedPrice="10,000,000" image="{{Vite::asset('resources/images/single-product/1.jpg')}}" />
            </div>
            <div class="swiper-slide index-product">
                <x-product name="پرده جدیده کتان" price="12,000,000" discount="5%" link="/product" discountedPrice="10,000,000" image="{{Vite::asset('resources/images/single-product/1.jpg')}}" />
            </div>
            <div class="swiper-slide index-product">
                <x-product name="پرده جدیده کتان" price="12,000,000" discount="5%" link="/product" discountedPrice="10,000,000" image="{{Vite::asset('resources/images/single-product/1.jpg')}}" />
            </div>
            <div class="swiper-slide index-product">
                <x-product name="پرده جدیده کتان" price="12,000,000" discount="5%" link="/product" discountedPrice="10,000,000" image="{{Vite::asset('resources/images/single-product/1.jpg')}}" />
            </div>
            <div class="swiper-slide index-product">
                <x-product name="پرده جدیده کتان" price="12,000,000" discount="5%" link="/product" discountedPrice="10,000,000" image="{{Vite::asset('resources/images/single-product/2.jpg')}}" />
            </div>
            <div class="swiper-slide index-product">
                <x-product name="پرده جدیده کتان" price="12,000,000" discount="5%" discountedPrice="10,000,000" image="{{Vite::asset('resources/images/single-product/3.jpg')}}" />
            </div>
        </div>
    </div>
</div>


<!-- Last Blog:START -->
<div class="container">
    <!--    Blog Section:start-->
    <section class="blog tw-mt-20">
        <div class="d-flex justify-content-between align-items-baseline mb-3">
            <h2 class="fw-bold fs-6">آخرین مطالب وبلاگ</h2>
            <a href="/blog" class="text-info fs-8">
                مطالب بیشتر
                <i class="fa fa-angle-left ps-1"></i>
            </a>
        </div>

        <!--        Blog Items:start-->
        <div class="container">
            <div class="row">
                <div class="swiper blogSwiper">
                    <div class="swiper-wrapper">
                        <a href="#" class="swiper-slide tw-rounded-3xl tw-bg-[var(--blog-box-bg)] tw-text-white">
                            <div class="tw-rounded-3xl overflow-hidden">
                                <figure class="tw-relative">
                                    <img class="tw-rounded-3xl tw-h-60 tw-block tw-w-full tw-object-cover" src="{{ Vite::asset('resources/images/blog/1.webp') }}" alt="" title="" class="img-fluid tw-max-h-52 tw-object-cover card-img">
                                    <h2 class="tw-text-sm title">برای تولید محتوا چه کاری انجام دهیم</h2>
                                </figure>
                                <div class="tw-text-white tw-text-xs tw-flex tw-items-center tw-justify-between tw-px-4 tw-py-4">
                                    <span>مرداد 13 1402</span>
                                    <div>
                                        <span class="fw-bold">دسته بندی: </span>
                                        <span>پرده کتان</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="swiper-slide tw-rounded-3xl tw-bg-[var(--blog-box-bg)] tw-text-white">
                            <div class="tw-rounded-3xl overflow-hidden">
                                <figure class="tw-relative">
                                    <img class="tw-rounded-3xl tw-h-60 tw-block tw-w-full tw-object-cover" src="{{ Vite::asset('resources/images/blog/1.webp') }}" alt="" title="" class="img-fluid tw-max-h-52 tw-object-cover card-img">
                                    <h2 class="tw-text-sm title">برای تولید محتوا چه کاری انجام دهیم</h2>
                                </figure>
                                <div class="tw-text-white tw-text-xs tw-flex tw-items-center tw-justify-between tw-px-4 tw-py-4">
                                    <span>مرداد 13 1402</span>
                                    <div>
                                        <span class="fw-bold">دسته بندی: </span>
                                        <span>پرده کتان</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="swiper-slide tw-rounded-3xl tw-bg-[var(--blog-box-bg)] tw-text-white">
                            <div class="tw-rounded-3xl overflow-hidden">
                                <figure class="tw-relative">
                                    <img class="tw-rounded-3xl tw-h-60 tw-block tw-w-full tw-object-cover" src="{{ Vite::asset('resources/images/blog/1.webp') }}" alt="" title="" class="img-fluid tw-max-h-52 tw-object-cover card-img">
                                    <h2 class="tw-text-sm title">برای تولید محتوا چه کاری انجام دهیم</h2>
                                </figure>
                                <div class="tw-text-white tw-text-xs tw-flex tw-items-center tw-justify-between tw-px-4 tw-py-4">
                                    <span>مرداد 13 1402</span>
                                    <div>
                                        <span class="fw-bold">دسته بندی: </span>
                                        <span>پرده کتان</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="swiper-slide tw-rounded-3xl tw-bg-[var(--blog-box-bg)] tw-text-white">
                            <div class="tw-rounded-3xl overflow-hidden">
                                <figure class="tw-relative">
                                    <img class="tw-rounded-3xl tw-h-60 tw-block tw-w-full tw-object-cover" src="{{ Vite::asset('resources/images/blog/1.webp') }}" alt="" title="" class="img-fluid tw-max-h-52 tw-object-cover card-img">
                                    <h2 class="tw-text-sm title">برای تولید محتوا چه کاری انجام دهیم</h2>
                                </figure>
                                <div class="tw-text-white tw-text-xs tw-flex tw-items-center tw-justify-between tw-px-4 tw-py-4">
                                    <span>مرداد 13 1402</span>
                                    <div>
                                        <span class="fw-bold">دسته بندی: </span>
                                        <span>پرده کتان</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="swiper-slide tw-rounded-3xl tw-bg-[var(--blog-box-bg)] tw-text-white">
                            <div class="tw-rounded-3xl overflow-hidden">
                                <figure class="tw-relative">
                                    <img class="tw-rounded-3xl tw-h-60 tw-block tw-w-full tw-object-cover" src="{{ Vite::asset('resources/images/blog/1.webp') }}" alt="" title="" class="img-fluid tw-max-h-52 tw-object-cover card-img">
                                    <h2 class="tw-text-sm title">برای تولید محتوا چه کاری انجام دهیم</h2>
                                </figure>
                                <div class="tw-text-white tw-text-xs tw-flex tw-items-center tw-justify-between tw-px-4 tw-py-4">
                                    <span>مرداد 13 1402</span>
                                    <div>
                                        <span class="fw-bold">دسته بندی: </span>
                                        <span>پرده کتان</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="swiper-slide tw-rounded-3xl tw-bg-[var(--blog-box-bg)] tw-text-white">
                            <div class="tw-rounded-3xl overflow-hidden">
                                <figure class="tw-relative">
                                    <img class="tw-rounded-3xl tw-h-60 tw-block tw-w-full tw-object-cover" src="{{ Vite::asset('resources/images/blog/1.webp') }}" alt="" title="" class="img-fluid tw-max-h-52 tw-object-cover card-img">
                                    <h2 class="tw-text-sm title">برای تولید محتوا چه کاری انجام دهیم</h2>
                                </figure>
                                <div class="tw-text-white tw-text-xs tw-flex tw-items-center tw-justify-between tw-px-4 tw-py-4">
                                    <span>مرداد 13 1402</span>
                                    <div>
                                        <span class="fw-bold">دسته بندی: </span>
                                        <span>پرده کتان</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="swiper-slide tw-rounded-3xl tw-bg-[var(--blog-box-bg)] tw-text-white">
                            <div class="tw-rounded-3xl overflow-hidden">
                                <figure class="tw-relative">
                                    <img class="tw-rounded-3xl tw-h-60 tw-block tw-w-full tw-object-cover" src="{{ Vite::asset('resources/images/blog/1.webp') }}" alt="" title="" class="img-fluid tw-max-h-52 tw-object-cover card-img">
                                    <h2 class="tw-text-sm title">برای تولید محتوا چه کاری انجام دهیم</h2>
                                </figure>
                                <div class="tw-text-white tw-text-xs tw-flex tw-items-center tw-justify-between tw-px-4 tw-py-4">
                                    <span>مرداد 13 1402</span>
                                    <div>
                                        <span class="fw-bold">دسته بندی: </span>
                                        <span>پرده کتان</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="swiper-slide tw-rounded-3xl tw-bg-[var(--blog-box-bg)] tw-text-white">
                            <div class="tw-rounded-3xl overflow-hidden">
                                <figure class="tw-relative">
                                    <img class="tw-rounded-3xl tw-h-60 tw-block tw-w-full tw-object-cover" src="{{ Vite::asset('resources/images/blog/1.webp') }}" alt="" title="" class="img-fluid tw-max-h-52 tw-object-cover card-img">
                                    <h2 class="tw-text-sm title">برای تولید محتوا چه کاری انجام دهیم</h2>
                                </figure>
                                <div class="tw-text-white tw-text-xs tw-flex tw-items-center tw-justify-between tw-px-4 tw-py-4">
                                    <span>مرداد 13 1402</span>
                                    <div>
                                        <span class="fw-bold">دسته بندی: </span>
                                        <span>پرده کتان</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!--        Blog Items:end-->
    </section>
    <!--    Blog Section:end-->
</div>
<!-- Last Blog:END1 -->
@endsection