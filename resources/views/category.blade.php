@extends('layouts.primary')

<!-- please fill filters basis on what you want. i just used sample of all types of fields -->
<!-- please fill filters basis on what you want. i just used sample of all types of fields -->
<!-- please fill filters basis on what you want. i just used sample of all types of fields -->

<!-- JS FILE: category.js -->

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
        <form class="d-none d-lg-block col-12 col-lg-3 category-filters category-filters-desktop">
            <!-- REMOVE FILTERS -->
            <div class="card removeItemsBox d-none">
                <div class="card-header">
                    <div class="">
                        <button type="button" class="btn card-title tw-py-0.5 tw-flex tw-items-center tw-justify-between tw-w-full" data-bs-toggle="collapse" data-bs-target="#collapseRemoveFilters" aria-expanded="true">
                            <span>حذف فیلتر ها</span>
                            <i class="fa-solid fa-chevron-left"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body collapse show" id="collapseRemoveFilters">
                </div>
            </div>
            <!-- REMOVE FILTERS -->

            <!-- PRICE RANGE -->
            <div class="card">
                <div class="card-header">
                    <div class="">
                        <button type="button" class="btn card-title tw-py-0.5 tw-flex tw-items-center tw-justify-between tw-w-full" data-bs-toggle="collapse" data-bs-target="#collapsePriceRange" aria-expanded="false">
                            <span>بازه قیمت</span>
                            <i class="fa-solid fa-chevron-left"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body collapse" id="collapsePriceRange">
                    <!-- START:PRICE INPUT -->
                    <div class="tw-mb-3 tw-ml-2 price-range" data-min="0" data-max="100" data-defaultmin="20" data-defaultmax="80"></div>
                    <!-- END:PRICE INPUT -->
                    <div class="tw-flex tw-items-center tw-justify-between">
                        <input class="maxPrice" type="text" name="maxprice" />
                        <input class="minPrice" type="text" name="minprice" />
                    </div>
                </div>
            </div>
            <!-- PRICE RANGE -->

            <!-- COLLAPSIBLE CHECKBOX -->
            <div class="card">
                <div class="card-header">
                    <div class="">
                        <button type="button" class="btn card-title tw-py-0.5 tw-flex tw-items-center tw-justify-between tw-w-full" data-bs-toggle="collapse" data-bs-target="#collapseCheckbox" aria-expanded="false">
                            <span>ویژگی چک باکس</span>
                            <i class="fa-solid fa-chevron-left"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body collapse" id="collapseCheckbox">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="checkbox" value="0" id="flexCheckDefault1" title="موجود" data-parent="چک باکس">
                        <label class="form-check-label tw-text-sm" for="flexCheckDefault1">
                            موجود
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="checkbox" value="1" id="flexCheckDefault2" title="همه" data-parent="چک باکس">
                        <label class="form-check-label tw-text-sm" for="flexCheckDefault2">
                            همه
                        </label>
                    </div>
                </div>
            </div>
            <!-- COLLAPSIBLE CHECKBOX -->


            <!-- START:CHECKBOX -->
            <div class="card">
                <div class="card-header">
                    <div class="">
                        <button type="button" class="btn card-title tw-py-0.5 tw-flex tw-items-center tw-justify-between tw-w-full" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" aria-expanded="false">
                            <span>دیزاین استایل</span>
                            <i class="fa-solid fa-chevron-left"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body collapse tw-flex tw-justify-start tw-flex-col" id="collapseWidthExample">
                    <label class="category-label-checkbox" for="material1">
                        <span class="tw-text-xs">
                            پرده زبرا و شید
                        </span>
                        <input type="radio" name="material" id="material1" value="material1">
                    </label>
                    <label class="category-label-checkbox" for="material2">
                        <span class="tw-text-xs">
                            پرده چین دار
                        </span>
                        <input type="radio" name="material" id="material2" value="material2">
                    </label>
                    <label class="category-label-checkbox" for="material3">
                        <span class="tw-text-xs">
                            پرده پانچی
                        </span>
                        <input type="radio" name="material" id="material3" value="material3">
                    </label>
                    <label class="category-label-checkbox" for="material4">
                        <span class="tw-text-xs">
                            پرده چاپی
                        </span>
                        <input type="radio" name="material" id="material4" value="material4">
                    </label>
                    <label class="category-label-checkbox" for="material5">
                        <span class="tw-text-xs">
                            پرده هازان
                        </span>
                        <input type="radio" name="material" id="material5" value="material5">
                    </label>
                </div>
            </div>
            <!-- END:CHECKBOX -->

            <!-- SWITCH BOX -->
            <div class="card">
                <div class="card-header">
                    <div class="">
                        <button type="button" class="btn card-title tw-py-0.5 tw-flex tw-items-center tw-justify-between tw-w-full" data-bs-toggle="collapse" data-bs-target="#collapseSwitchBox" aria-expanded="false">
                            <span>ویژگی سوییچ باکس</span>
                            <i class="fa-solid fa-chevron-left"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body collapse" id="collapseSwitchBox">
                    <div class="form-check form-switch">
                        <label class="form-check-label tw-text-sm" for="flexCheckDefault1">
                            ارسال از فردا
                        </label>
                        <input class="form-check-input" type="checkbox" value="0" name="switchbox" id="flexCheckDefault1">
                    </div>
                    <div class="form-check form-switch">
                        <label class="form-check-label tw-text-sm" for="defaultx1">
                            ارسال فروشنده
                        </label>
                        <input class="form-check-input" type="checkbox" value="1" name="switchbox" id="defaultx1">
                    </div>
                </div>
            </div>
            <!-- SWITCH BOX -->


            <!-- RADIO BOX -->
            <div class="card">
                <div class="card-header">
                    <div class="">
                        <button type="button" class="btn card-title tw-py-0.5 tw-flex tw-items-center tw-justify-between tw-w-full" data-bs-toggle="collapse" data-bs-target="#collapseRadioBox" aria-expanded="false">
                            <span>ویژگی رادیو باکس</span>
                            <i class="fa-solid fa-chevron-left"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body collapse" id="collapseRadioBox">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="0" name="radiobox" id="flexCheckDefault1">
                        <label class="form-check-label tw-text-sm" for="flexCheckDefault1">
                            موجود
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="1" name="radiobox" id="flexCheckDefault2">
                        <label class="form-check-label tw-text-sm" for="flexCheckDefault2">
                            همه
                        </label>
                    </div>
                </div>
            </div>
            <!-- RADIO BOX -->


            <!-- COLOR OPTIONS -->
            <div class="card">
                <div class="card-header">
                    <div class="">
                        <button type="button" class="btn card-title tw-py-0.5 tw-flex tw-items-center tw-justify-between tw-w-full" data-bs-toggle="collapse" data-bs-target="#collapseColorOptions" aria-expanded="false">
                            <span>ویژگی رنگ</span>
                            <i class="fa-solid fa-chevron-left"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body collapse" id="collapseColorOptions">
                    <div class="tw-pr-0">
                        <div class="flex tw-flex-col tw-justify-start tw-space-y-2">
                            <div class="parde-color parde-color-row">
                                <label class="">
                                    <svg width="35" height="35" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="50" cy="50" r="50" fill="#000" />
                                    </svg>
                                    <input type="checkbox" name="colorBox" value="black">
                                </label>
                                <span>سیاه</span>
                            </div>
                            <div class="parde-color parde-color-row">
                                <label class="">
                                    <svg width="35" height="35" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="50" cy="50" r="50" fill="#475569" />
                                    </svg>
                                    <input type="checkbox" name="colorBox" value="gray">
                                </label>
                                <span>خاکستری</span>
                            </div>
                            <div class="parde-color parde-color-row">
                                <label class="">
                                    <svg width="35" height="35" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="50" cy="50" r="50" fill="#f97316" />
                                    </svg>
                                    <input type="checkbox" name="colorBox" value="orange">
                                </label>
                                <span>نارنجی</span>
                            </div>
                            <div class="parde-color parde-color-row">
                                <label class="">
                                    <svg width="35" height="35" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="50" cy="50" r="50" fill="#eab308" />
                                    </svg>
                                    <input type="checkbox" name="colorBox" valu="yellow">
                                </label>
                                <span>زرد</span>
                            </div>
                            <div class="parde-color parde-color-row">
                                <label class="">
                                    <svg width="35" height="35" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="50" cy="50" r="50" fill="#0ea5e9" />
                                    </svg>
                                    <input type="checkbox" name="colorBox" value="blue">
                                </label>
                                <span>آبی</span>
                            </div>
                            <div class="parde-color parde-color-row">
                                <label class="">
                                    <svg width="35" height="35" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="50" cy="50" r="50" fill="#8b5cf6" />
                                    </svg>
                                    <input type="checkbox" name="colorBox" value="purple">
                                </label>
                                <span>بنفش</span>
                            </div>
                            <div class="parde-color parde-color-row">
                                <label class="">
                                    <svg width="35" height="35" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="50" cy="50" r="50" fill="#f43f5e" />
                                    </svg>
                                    <input type="checkbox" name="colorBox" value="pink">
                                </label>
                                <span>صورتی</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- COLOR OPTIONS -->

        </form>
        <div class="col-12 col-lg-9 tw-rounded-2xl" id="products_boxes">
            <div class="tw-w-full tw-items-center tw-text-sm tw-mb-5 lg:tw-flex tw-hidden">
                <div class="tw-text-sm fw-bold">
                    <i class="fa-regular fa-arrow-down-wide-short"></i>
                    <span class="tw-text-gray-700">مرتب سازی : </span>
                </div>
                <form id="category-sort" class="tw-mr-4 tw-text-slate-800">
                    <label class="category-label-checkbox tw-mx-3" for="sort2">
                        <span class="tw-text-sm">جدیدترین ترین</span>
                        <input type="radio" name="sort" id="sort2" value="newest">
                    </label>
                    <label class="category-label-checkbox tw-mx-3" for="sort1">
                        <span class="tw-text-sm">پرفروش ترین</span>
                        <input type="radio" name="sort" id="sort1" value="bestselling">
                    </label>
                    <label class="category-label-checkbox tw-mx-3" for="sort3">
                        <span class="tw-text-sm">ارزان ترین</span>
                        <input type="radio" name="sort" id="sort3" value="cheapest">
                    </label>
                    <label class="category-label-checkbox tw-mx-3" for="sort4">
                        <span class="tw-text-sm">گرانترین ترین</span>
                        <input type="radio" name="sort" id="sort4" name="expensive">
                    </label>
                </form>
            </div>
            <div class="lg:tw-hidden mb-4 tw-flex tw-justify-between">
                <button class="btn custom-btn-primary tw-rounded-xl" data-bs-toggle="offcanvas" data-bs-target="#mobileFilter">
                    <i class="fa-duotone fa-filter-list"></i>
                    <span>فیلتر</span>
                </button>
                <select class="form-select tw-w-max" name="" id="category-sort-mobile">
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

            <!-- PAGINATION -->
            <div id="category-pagination">
                <!-- for first load just do it -->
                <div class="first-pagination" data-total="10" data-value="1"></div>
            </div>
            <!-- PAGINATION -->
        </div>
    </div>

    <!-- MOBILE FILTER -->
    <div class="offcanvas offcanvas-start" data-bs-scroll="false" data-bs-backdrop="true" tabindex="-1" id="mobileFilter" aria-labelledby="offcanvasBottomLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasBottomLabel">فیلتر ها</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body tw-overflow-y-auto">
            <form class="category-filters category-filters-mobile">
                <!-- REMOVE FILTERS -->
                <div class="card removeItemsBox d-none">
                    <div class="card-header">
                        <div class="">
                            <button type="button" class="btn card-title tw-py-0.5 tw-flex tw-items-center tw-justify-between tw-w-full" data-bs-toggle="collapse" data-bs-target="#collapseRemoveFilters" aria-expanded="true">
                                <span>حذف فیلتر ها</span>
                                <i class="fa-solid fa-chevron-left"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body collapse show" id="collapseRemoveFilters">
                    </div>
                </div>
                <!-- REMOVE FILTERS -->

                <!-- PRICE RANGE -->
                <div class="card">
                    <div class="card-header">
                        <div class="">
                            <button type="button" class="btn card-title tw-py-0.5 tw-flex tw-items-center tw-justify-between tw-w-full" data-bs-toggle="collapse" data-bs-target="#collapsePriceRange" aria-expanded="false">
                                <span>بازه قیمت</span>
                                <i class="fa-solid fa-chevron-left"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body collapse" id="collapsePriceRange">
                        <!-- START:PRICE INPUT -->
                        <div class="tw-mb-3 tw-ml-2 price-range" data-min="0" data-max="100" data-defaultmin="20" data-defaultmax="80"></div>
                        <!-- END:PRICE INPUT -->
                        <div class="tw-flex tw-items-center tw-justify-between">
                            <input class="maxPrice" type="text" name="maxprice" />
                            <input class="minPrice" type="text" name="minprice" />
                        </div>
                    </div>
                </div>
                <!-- PRICE RANGE -->

                <!-- COLLAPSIBLE CHECKBOX -->
                <div class="card">
                    <div class="card-header">
                        <div class="">
                            <button type="button" class="btn card-title tw-py-0.5 tw-flex tw-items-center tw-justify-between tw-w-full" data-bs-toggle="collapse" data-bs-target="#collapseCheckbox" aria-expanded="false">
                                <span>ویژگی چک باکس</span>
                                <i class="fa-solid fa-chevron-left"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body collapse" id="collapseCheckbox">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="checkbox" value="0" id="flexCheckDefault1" title="موجود" data-parent="چک باکس">
                            <label class="form-check-label tw-text-sm" for="flexCheckDefault1">
                                موجود
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="checkbox" value="1" id="flexCheckDefault2" title="همه" data-parent="چک باکس">
                            <label class="form-check-label tw-text-sm" for="flexCheckDefault2">
                                همه
                            </label>
                        </div>
                    </div>
                </div>
                <!-- COLLAPSIBLE CHECKBOX -->


                <!-- START:CHECKBOX -->
                <div class="card">
                    <div class="card-header">
                        <div class="">
                            <button type="button" class="btn card-title tw-py-0.5 tw-flex tw-items-center tw-justify-between tw-w-full" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" aria-expanded="false">
                                <span>دیزاین استایل</span>
                                <i class="fa-solid fa-chevron-left"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body collapse tw-flex tw-justify-start tw-flex-col" id="collapseWidthExample">
                        <label class="category-label-checkbox" for="material1">
                            <span class="tw-text-xs">
                                پرده زبرا و شید
                            </span>
                            <input type="radio" name="material" id="material1" value="material1">
                        </label>
                        <label class="category-label-checkbox" for="material2">
                            <span class="tw-text-xs">
                                پرده چین دار
                            </span>
                            <input type="radio" name="material" id="material2" value="material2">
                        </label>
                        <label class="category-label-checkbox" for="material3">
                            <span class="tw-text-xs">
                                پرده پانچی
                            </span>
                            <input type="radio" name="material" id="material3" value="material3">
                        </label>
                        <label class="category-label-checkbox" for="material4">
                            <span class="tw-text-xs">
                                پرده چاپی
                            </span>
                            <input type="radio" name="material" id="material4" value="material4">
                        </label>
                        <label class="category-label-checkbox" for="material5">
                            <span class="tw-text-xs">
                                پرده هازان
                            </span>
                            <input type="radio" name="material" id="material5" value="material5">
                        </label>
                    </div>
                </div>
                <!-- END:CHECKBOX -->

                <!-- SWITCH BOX -->
                <div class="card">
                    <div class="card-header">
                        <div class="">
                            <button type="button" class="btn card-title tw-py-0.5 tw-flex tw-items-center tw-justify-between tw-w-full" data-bs-toggle="collapse" data-bs-target="#collapseSwitchBox" aria-expanded="false">
                                <span>ویژگی سوییچ باکس</span>
                                <i class="fa-solid fa-chevron-left"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body collapse" id="collapseSwitchBox">
                        <div class="form-check form-switch">
                            <label class="form-check-label tw-text-sm" for="flexCheckDefault1">
                                ارسال از فردا
                            </label>
                            <input class="form-check-input" type="checkbox" value="0" name="switchbox" id="flexCheckDefault1">
                        </div>
                        <div class="form-check form-switch">
                            <label class="form-check-label tw-text-sm" for="defaultx1">
                                ارسال فروشنده
                            </label>
                            <input class="form-check-input" type="checkbox" value="1" name="switchbox" id="defaultx1">
                        </div>
                    </div>
                </div>
                <!-- SWITCH BOX -->


                <!-- RADIO BOX -->
                <div class="card">
                    <div class="card-header">
                        <div class="">
                            <button type="button" class="btn card-title tw-py-0.5 tw-flex tw-items-center tw-justify-between tw-w-full" data-bs-toggle="collapse" data-bs-target="#collapseRadioBox" aria-expanded="false">
                                <span>ویژگی رادیو باکس</span>
                                <i class="fa-solid fa-chevron-left"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body collapse" id="collapseRadioBox">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" value="0" name="radiobox" id="flexCheckDefault1">
                            <label class="form-check-label tw-text-sm" for="flexCheckDefault1">
                                موجود
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" value="1" name="radiobox" id="flexCheckDefault2">
                            <label class="form-check-label tw-text-sm" for="flexCheckDefault2">
                                همه
                            </label>
                        </div>
                    </div>
                </div>
                <!-- RADIO BOX -->


                <!-- COLOR OPTIONS -->
                <div class="card">
                    <div class="card-header">
                        <div class="">
                            <button type="button" class="btn card-title tw-py-0.5 tw-flex tw-items-center tw-justify-between tw-w-full" data-bs-toggle="collapse" data-bs-target="#collapseColorOptions" aria-expanded="false">
                                <span>ویژگی رنگ</span>
                                <i class="fa-solid fa-chevron-left"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body collapse" id="collapseColorOptions">
                        <div class="tw-pr-0">
                            <div class="flex tw-flex-col tw-justify-start tw-space-y-2">
                                <div class="parde-color parde-color-row">
                                    <label class="">
                                        <svg width="35" height="35" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="50" cy="50" r="50" fill="#000" />
                                        </svg>
                                        <input type="checkbox" name="colorBox" value="black">
                                    </label>
                                    <span>سیاه</span>
                                </div>
                                <div class="parde-color parde-color-row">
                                    <label class="">
                                        <svg width="35" height="35" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="50" cy="50" r="50" fill="#475569" />
                                        </svg>
                                        <input type="checkbox" name="colorBox" value="gray">
                                    </label>
                                    <span>خاکستری</span>
                                </div>
                                <div class="parde-color parde-color-row">
                                    <label class="">
                                        <svg width="35" height="35" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="50" cy="50" r="50" fill="#f97316" />
                                        </svg>
                                        <input type="checkbox" name="colorBox" value="orange">
                                    </label>
                                    <span>نارنجی</span>
                                </div>
                                <div class="parde-color parde-color-row">
                                    <label class="">
                                        <svg width="35" height="35" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="50" cy="50" r="50" fill="#eab308" />
                                        </svg>
                                        <input type="checkbox" name="colorBox" valu="yellow">
                                    </label>
                                    <span>زرد</span>
                                </div>
                                <div class="parde-color parde-color-row">
                                    <label class="">
                                        <svg width="35" height="35" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="50" cy="50" r="50" fill="#0ea5e9" />
                                        </svg>
                                        <input type="checkbox" name="colorBox" value="blue">
                                    </label>
                                    <span>آبی</span>
                                </div>
                                <div class="parde-color parde-color-row">
                                    <label class="">
                                        <svg width="35" height="35" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="50" cy="50" r="50" fill="#8b5cf6" />
                                        </svg>
                                        <input type="checkbox" name="colorBox" value="purple">
                                    </label>
                                    <span>بنفش</span>
                                </div>
                                <div class="parde-color parde-color-row">
                                    <label class="">
                                        <svg width="35" height="35" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="50" cy="50" r="50" fill="#f43f5e" />
                                        </svg>
                                        <input type="checkbox" name="colorBox" value="pink">
                                    </label>
                                    <span>صورتی</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- COLOR OPTIONS -->

            </form>
        </div>
    </div>
    <!-- MOBILE FILTER -->
</div>
@endsection