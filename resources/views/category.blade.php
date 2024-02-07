@extends('layouts.primary')

@section('title', config('app.name'))

@section('content')
<div class="container" id="catergory_page">
    <div class="tw-flex tw-items-center tw-justify-between">
        <span class="tw-font-bold">دسته بندی های دیگر</span>
        <div>
            <div class="tw-flex">
                <button class="" id="category-products-prev"><i class="fa fa-chevron-right"></i></button>
                <button class="" id="category-products-next"><i class="fa fa-chevron-left"></i></button>
            </div>
        </div>
    </div>
    <div class="row mb-4 mt-1 category-main gy-3">
        <div class="col-12">
            <div class="swiper category-boxes-slider">
                <div class="swiper-wrapper">
                    <a href="#" class="swiper-slide text-dark">
                        <div class="card">
                            <div class="card-body tw-rounded-xl">
                                <img class="tw-w-full tw-h-28 tw-block tw-relative tw-rounded-md tw-object-cover" src="{{ Vite::asset('resources/images/categories/1.jpg') }}" alt="">
                                <span class="tw-text-[13px] mt-1 fw-medium tw-flex tw-items-center tw-justify-center">پرده آشپزخانه</span>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="swiper-slide text-dark">
                        <div class="card">
                            <div class="card-body tw-rounded-xl">
                                <img class="tw-w-full tw-h-28 tw-block tw-relative tw-rounded-md tw-object-cover" src="{{ Vite::asset('resources/images/categories/2.jpg') }}" alt="">
                                <span class="tw-text-[13px] mt-1 fw-medium tw-flex tw-items-center tw-justify-center">پرده پانچی</span>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="swiper-slide text-dark">
                        <div class="card">
                            <div class="card-body tw-rounded-xl">
                                <img class="tw-w-full tw-h-28 tw-block tw-relative tw-rounded-md tw-object-cover" src="{{ Vite::asset('resources/images/categories/3.jpg') }}" alt="">
                                <span class="tw-text-[13px] mt-1 fw-medium tw-flex tw-items-center tw-justify-center">پرده تور کتان</span>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="swiper-slide text-dark">
                        <div class="card">
                            <div class="card-body tw-rounded-xl">
                                <img class="tw-w-full tw-h-28 tw-block tw-relative tw-rounded-md tw-object-cover" src="{{ Vite::asset('resources/images/categories/4.jpg') }}" alt="">
                                <span class="tw-text-[13px] mt-1 fw-medium tw-flex tw-items-center tw-justify-center">پرده مخمل</span>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="swiper-slide text-dark">
                        <div class="card">
                            <div class="card-body tw-rounded-xl">
                                <img class="tw-w-full tw-h-28 tw-block tw-relative tw-rounded-md tw-object-cover" src="{{ Vite::asset('resources/images/categories/5.jpg') }}" alt="">
                                <span class="tw-text-[13px] mt-1 fw-medium tw-flex tw-items-center tw-justify-center">پرده هتلی</span>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="swiper-slide text-dark">
                        <div class="card">
                            <div class="card-body tw-rounded-xl">
                                <img class="tw-w-full tw-h-28 tw-block tw-relative tw-rounded-md tw-object-cover" src="{{ Vite::asset('resources/images/categories/6.jpg') }}" alt="">
                                <span class="tw-text-[13px] mt-1 fw-medium tw-flex tw-items-center tw-justify-center">پرده کرکره ای</span>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="swiper-slide text-dark">
                        <div class="card">
                            <div class="card-body tw-rounded-xl">
                                <img class="tw-w-full tw-h-28 tw-block tw-relative tw-rounded-md tw-object-cover" src="{{ Vite::asset('resources/images/categories/7.jpg') }}" alt="">
                                <span class="tw-text-[13px] mt-1 fw-medium tw-flex tw-items-center tw-justify-center">پرده زبرا</span>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="swiper-slide text-dark">
                        <div class="card">
                            <div class="card-body tw-rounded-xl">
                                <img class="tw-w-full tw-h-28 tw-block tw-relative tw-rounded-md tw-object-cover" src="{{ Vite::asset('resources/images/categories/8.jpg') }}" alt="">
                                <span class="tw-text-[13px] mt-1 fw-medium tw-flex tw-items-center tw-justify-center">پرده رومن</span>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="swiper-slide text-dark">
                        <div class="card">
                            <div class="card-body tw-rounded-xl">
                                <img class="tw-w-full tw-h-28 tw-block tw-relative tw-rounded-md tw-object-cover" src="{{ Vite::asset('resources/images/categories/9.jpg') }}" alt="">
                                <span class="tw-text-[13px] mt-1 fw-medium tw-flex tw-items-center tw-justify-center">آستر پرده</span>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="swiper-slide text-dark">
                        <div class="card">
                            <div class="card-body tw-rounded-xl">
                                <img class="tw-w-full tw-h-28 tw-block tw-relative tw-rounded-md tw-object-cover" src="{{ Vite::asset('resources/images/categories/1.jpg') }}" alt="">
                                <span class="tw-text-[13px] mt-1 fw-medium tw-flex tw-items-center tw-justify-center">پرده طرح دار</span>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="swiper-slide text-dark">
                        <div class="card">
                            <div class="card-body tw-rounded-xl">
                                <img class="tw-w-full tw-h-28 tw-block tw-relative tw-rounded-md tw-object-cover" src="{{ Vite::asset('resources/images/categories/2.jpg') }}" alt="">
                                <span class="tw-text-[13px] mt-1 fw-medium tw-flex tw-items-center tw-justify-center">پرده حریر</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="d-none d-lg-block col-12 col-lg-3 category-filters">
            <div class="card">
                <div class="card-header">
                    <span class="card-title">بازه قیمت</span>
                </div>
                <div class="card-body">
                    <!-- START:PRICE INPUT -->
                    <div class="tw-mb-3 tw-ml-2 price-range1" data-min="0" data-max="100" data-defaultmin="20" data-defaultmax="80"></div>
                    <!-- END:PRICE INPUT -->
                    <div class="tw-flex tw-items-center tw-justify-between">
                        <input class="maxPrice" type="text" />
                        <input class="minPrice" type="text" />
                    </div>
                </div>
            </div>
            <!-- START:CHECKBOX -->
            <div class="card">
                <div class="card-header">
                    <span class="card-title">ویژگی چک باکس</span>
                </div>
                <div class="card-body">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label tw-text-sm" for="flexCheckDefault">
                            موجود
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label tw-text-sm" for="flexCheckDefault">
                            همه
                        </label>
                    </div>
                </div>
            </div>
            <!-- END:CHECKBOX -->

            <!-- START:SWITCH -->
            <div class="card">
                <div class="card-header">
                    <span class="card-title">ویژگی سوییچ باکس</span>
                </div>
                <div class="card-body">
                    <div class="form-check form-switch">
                        <label class="form-check-label tw-text-sm" for="flexCheckDefault">
                            ارسال از فردا
                        </label>
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    </div>
                    <div class="form-check form-switch">
                        <label class="form-check-label tw-text-sm" for="defaultx">
                            ارسال فروشنده
                        </label>
                        <input class="form-check-input" type="checkbox" value="" id="defaultx">
                    </div>
                </div>
            </div>
            <!-- END:SWITCH -->

            <!-- RADIO  -->
            <div class="card">
                <div class="card-header">
                    <span class="card-title">ویژگی رادیو باکس</span>
                </div>
                <div class="card-body">

                    <div class="form-check">
                        <input class="form-check-input" name="x" type="radio" value="" id="flexCheckDefault">
                        <label class="form-check-label tw-text-sm" for="flexCheckDefault">
                            موجود
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="x" type="radio" value="" id="flexCheckDefault">
                        <label class="form-check-label tw-text-sm" for="flexCheckDefault">
                            همه
                        </label>
                    </div>
                </div>
            </div>
            <!-- RADIO  -->

            <!-- START:COLOR -->
            <div class="card">
                <div class="card-header">
                    <span class="card-title">ویژگی رنگ</span>
                </div>
                <div class="card-body">
                    <div class="tw-flex tw-items-start tw-justify-between tw-flex-wrap">
                        <div class="parde-color">
                            <label class="">
                                <img src="https://dkstatics-public.digikala.com/digikala-static/f275e126421d91ecdaaf0aa80310d3ac39510346_1670664302.png" alt="">
                                <input type="checkbox">
                            </label>
                            <span>بنفش</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END:COLOR -->
        </div>
        <div class="col-12 col-lg-9" id="products_boxes">
            <div class="tw-w-full tw-items-center tw-text-sm tw-mb-5 lg:tw-flex tw-hidden">
                <div class="tw-text-sm fw-bold">
                    <i class="fa-regular fa-arrow-down-wide-short"></i>
                    <span class="tw-text-gray-700">مرتب سازی : </span>
                </div>
                <div class="tw-mr-4 tw-text-slate-800">
                    <a class="tw-mx-3 tw-text-gray-700 hover:tw-text-indigo-500  tw-mr-0" href="">پرفروش ترین</a>
                    <a class="tw-mx-3 tw-text-gray-700 hover:tw-text-indigo-500 " href="">جدیدترین ترین</a>
                    <a class="tw-mx-3 tw-text-gray-700 hover:tw-text-indigo-500 " href="">ارزان ترین</a>
                    <a class="tw-mx-3 tw-text-gray-700 hover:tw-text-indigo-500 " href="">گرانترین ترین</a>
                </div>
            </div>
            <div class="lg:tw-hidden mb-4 tw-flex tw-justify-between">
                <button class="btn custom-btn-primary tw-rounded-lg" data-bs-toggle="offcanvas" data-bs-target="#mobileFilter">
                    <i class="fa-duotone fa-filter-list"></i>
                    <span>فیلتر</span>
                </button>
                <select class="form-select tw-w-max" name="" id="">
                    <option default selected disabled value="">مرتب سازی</option>
                    <option value="">پرفروش ترین</option>
                    <option value="">جدیدترین ترین</option>
                    <option value="">ارزان ترین</option>
                    <option value="">گرانترین ترین</option>
                </select>
            </div>
            <div class="row gy-2 gx-3 category-post">
                <div class="col-sm-12 col-md-6 col-lg-4 position-relative tw-h-auto">
                    <x-product mobile name="محصول 1" nobtn price="25,000,000" image="{{ Vite::asset('resources/images/auth.jpg') }}" />
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4  position-relative tw-h-auto">
                    <x-product mobile name="محصول 1" nobtn price="25,000,000" discountedPrice="20,000,000" discount="5%" image="{{ Vite::asset('resources/images/auth2.jpg') }}" />
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4  position-relative tw-h-auto">
                    <x-product mobile name="محصول 1" nobtn stock="3" price="25,000,000" discountedPrice="20,000,000" discount="5%" image="{{ Vite::asset('resources/images/auth3.jpg') }}" />
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4  position-relative tw-h-auto">
                    <x-product mobile name="محصول 1" nobtn available="false" image="{{ Vite::asset('resources/images/auth4.jpg') }}" />
                </div>
            </div>
            <nav class="cs-pagination mt-5 tw-w-max tw-mx-auto">
                <a href=""><i class="fa-solid fa-chevron-right"></i></a>
                <span>1</span>
                <a href="#">2</a>
                <a href="#">3</a>
                <span href="#" class="dots">...</span>
                <a href="#">6</a>
                <a href="#">7</a>
                <a href="#">8</a>
                <a href=""><i class="fa-solid fa-chevron-left"></i></a>
            </nav>
        </div>
    </div>

    <!-- MOBILE FILTER -->
    <div class="offcanvas offcanvas-start" data-bs-scroll="false" data-bs-backdrop="true" tabindex="-1" id="mobileFilter" aria-labelledby="offcanvasBottomLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasBottomLabel">فیلتر ها</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body tw-overflow-y-auto">
            <div class="category-filters">
                <div class="card">
                    <div class="card-header">
                        <span class="card-title">بازه قیمت</span>
                    </div>
                    <div class="card-body">
                        <!-- START:PRICE INPUT -->
                        <div class="tw-mb-3 tw-ml-2 price-range" data-min="0" data-max="100" data-defaultmin="20" data-defaultmax="80"></div>
                        <!-- END:PRICE INPUT -->
                        <div class="tw-flex tw-items-center tw-justify-between">
                            <input class="maxPrice" type="text" />
                            <input class="minPrice" type="text" />
                        </div>
                    </div>
                </div>
                <!-- START:CHECKBOX -->
                <div class="card">
                    <div class="card-header">
                        <span class="card-title">ویژگی چک باکس</span>
                    </div>
                    <div class="card-body">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label tw-text-sm" for="flexCheckDefault">
                                موجود
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label tw-text-sm" for="flexCheckDefault">
                                همه
                            </label>
                        </div>
                    </div>
                </div>
                <!-- END:CHECKBOX -->

                <!-- START:SWITCH -->
                <div class="card">
                    <div class="card-header">
                        <span class="card-title">ویژگی سوییچ باکس</span>
                    </div>
                    <div class="card-body">
                        <div class="form-check form-switch">
                            <label class="form-check-label tw-text-sm" for="flexCheckDefault">
                                ارسال از فردا
                            </label>
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        </div>
                        <div class="form-check form-switch">
                            <label class="form-check-label tw-text-sm" for="defaultx">
                                ارسال فروشنده
                            </label>
                            <input class="form-check-input" type="checkbox" value="" id="defaultx">
                        </div>
                    </div>
                </div>
                <!-- END:SWITCH -->

                <!-- RADIO  -->
                <div class="card">
                    <div class="card-header">
                        <span class="card-title">ویژگی رادیو باکس</span>
                    </div>
                    <div class="card-body">

                        <div class="form-check">
                            <input class="form-check-input" name="x" type="radio" value="" id="flexCheckDefault">
                            <label class="form-check-label tw-text-sm" for="flexCheckDefault">
                                موجود
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="x" type="radio" value="" id="flexCheckDefault">
                            <label class="form-check-label tw-text-sm" for="flexCheckDefault">
                                همه
                            </label>
                        </div>
                    </div>
                </div>
                <!-- RADIO  -->

                <!-- START:COLOR -->
                <div class="card color-category-mobile">
                    <div class="card-header">
                        <span class="card-title">ویژگی رنگ</span>
                    </div>
                    <div class="card-body">
                        <div class="tw-flex tw-items-start tw-justify-between tw-flex-wrap">
                            <div class="parde-color">
                                <label class="">
                                    <img src="https://dkstatics-public.digikala.com/digikala-static/f275e126421d91ecdaaf0aa80310d3ac39510346_1670664302.png" alt="">
                                    <input type="checkbox">
                                </label>
                                <span>بنفش</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END:COLOR -->
            </div>
        </div>
    </div>
    <!-- MOBILE FILTER -->
</div>
@endsection