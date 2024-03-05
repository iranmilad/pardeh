@extends('layouts.primary')

<!-- when you load a product if it unavialable, use let-me-know box & let-me-know-sticky -->
<!-- PLEASE CHECK product.js line:237 -->
<!-- PLEASE CHECK product.js line:237 -->
<!-- PLEASE CHECK product.js line:237 -->

@section('title', 'محصول')

@section('content')
<div class="bigLoading">
    <div class="spinner-border text-primary" role="status">
        <span class="visually-hidden">صبر کنید ...</span>
    </div>
</div>
<div class="container" id="main-product">
    <x-breadcrumb />
    <div class="row" id="product-preview">
        <!-- <div class="mobile-review-product">
            <img src="https://placehold.co/600x400" alt="">
        </div> -->
        <div class="col-lg-4 col-xl-5 tw-h-full lg:tw-sticky lg:tw-top-[5px] image-reviews">
            <div class="swiper productImage">
                <div class="swiper-wrapper tw-max-h-[700px]">
                    <div class="swiper-slide">
                        <img class="zoom tw-block tw-relative tw-w-full tw-h-full tw-object-cover tw-rounded-2xl" data-fancybox="gallery" src="{{ Vite::asset('resources/images/single-product/1.jpg') }}" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img class="tw-block tw-relative tw-w-full tw-h-full tw-object-cover tw-rounded-2xl" data-fancybox="gallery" src="{{ Vite::asset('resources/images/single-product/2.jpg') }}" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img class="tw-block tw-relative tw-w-full tw-h-full tw-object-cover tw-rounded-2xl" data-fancybox="gallery" src="{{ Vite::asset('resources/images/single-product/3.jpg') }}" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img class="tw-block tw-relative tw-w-full tw-h-full tw-object-cover tw-rounded-2xl" data-fancybox="gallery" src="{{ Vite::asset('resources/images/single-product/4.jpg') }}" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img class="tw-block tw-relative tw-w-full tw-h-full tw-object-cover tw-rounded-2xl" data-fancybox="gallery" src="{{ Vite::asset('resources/images/single-product/5.jpg') }}" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img class="tw-block tw-relative tw-w-full tw-h-full tw-object-cover tw-rounded-2xl" data-fancybox="gallery" src="{{ Vite::asset('resources/images/single-product/6.jpg') }}" alt="">
                    </div>
                </div>
                <div class="swiper-button-prev" id="product-preview-images-prev"></div>
                <div class="swiper-button-next" id="product-preview-images-next"></div>
            </div>
            <div class="tw-flex mt-3">
                <div thumbsSlider="" class="swiper tw-w-full productImages me-2">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img class="tw-block tw-relative tw-w-full tw-h-full tw-object-cover tw-rounded-xl" src="{{ Vite::asset('resources/images/single-product/1.jpg') }}" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img class="tw-block tw-relative tw-w-full tw-h-full tw-object-cover tw-rounded-xl" src="{{ Vite::asset('resources/images/single-product/2.jpg') }}" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img class="tw-block tw-relative tw-w-full tw-h-full tw-object-cover tw-rounded-xl" src="{{ Vite::asset('resources/images/single-product/3.jpg') }}" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img class="tw-block tw-relative tw-w-full tw-h-full tw-object-cover tw-rounded-xl" src="{{ Vite::asset('resources/images/single-product/4.jpg') }}" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img class="tw-block tw-relative tw-w-full tw-h-full tw-object-cover tw-rounded-xl" src="{{ Vite::asset('resources/images/single-product/5.jpg') }}" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img class="tw-block tw-relative tw-w-full tw-h-full tw-object-cover tw-rounded-xl" src="{{ Vite::asset('resources/images/single-product/6.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="swiper-button-prev" id="product-images-prev"></div>
                    <div class="swiper-button-next" id="product-images-next"></div>
                </div>
                <a href="#" class="tw-w-[20%] tw-text-sm tw-h-auto tw-bg-[#1e3b6f] hover:tw-text-white tw-text-white tw-flex tw-flex-col tw-items-center tw-justify-center tw-rounded-xl">
                    <i class="fa-solid fa-play"></i>
                    <span>ویدئو</span>
                </a>
            </div>
        </div>
        <div class="col-lg-8 col-xl-7 px-4 product-options mt-4 mt-lg-0">
            <h3 class="fw-bold">پرده ی جدید طرح کتان</h3>
            <div class="row">
                <div class="col-lg-7">
                    <div class="tw-text-emerald-500 tw-text-sm tw-flex tw-items-center">
                        <i class="fa-regular fa-circle-check tw-ml-2 tw-text-base"></i>
                        <span>موجود در انبار</span>
                    </div>
                    <div class="tw-flex tw-items-center">
                        <x-rating readOnly rate="4" />
                        <a class="tw-text-indigo-500 tw-mr-3">دیدگاه (500)</a>
                    </div>
                    <p class="tw-text-sm tw-leading-loose">
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته <a href="#product-tabs-card" class="tw-text-indigo-500">بیشتر ...</a>
                    </p>
                </div>
                <div class="col-lg-5">
                    <div class="card tw-rounded-xl border-0 tw-bg-gray-100">
                        <div class="card-body" id="main-cart-price-details">
                            <div class="tw-flex tw-items-center tw-text-sm tw-justify-between pb-4">
                                <span class="tw-text-gray-500">تخفیف : </span>
                                <span class="badge tw-bg-red-500 tw-rounded-full">50%</span>
                            </div>
                            <div class="tw-flex tw-items-center tw-text-sm tw-justify-between tw-py-4 border-top">
                                <span class="tw-text-gray-500">زمان تحویل : </span>
                                <span>7 روز</span>
                            </div>
                            <div class="tw-flex tw-items-center tw-text-sm tw-justify-between tw-py-4 border-top">
                                <span class="tw-text-gray-500">قیمت : </span>
                                <div class="tw-flex tw-flex-col tw-items-end">
                                    <span>10,000,000
                                        <svg style="width: 16px; height: 16px; fill: var(--undefined);">
                                            <use xlink:href="#toman"></use>
                                        </svg>
                                    </span>
                                    <span class="tw-text-xs tw-text-gray-400">12,000,000
                                        <svg class="tw-fill-gray-400" style="width: 16px; height: 16px;">
                                            <use xlink:href="#toman"></use>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                            <div class="tw-w-full tw-pt-4 border-top tw-flex-row  tw-flex tw-items-center tw-justify-between">
                                <!-- ADD TO FAVORITE BUTTON -->
                                <button class="btn wishlist-btn tw-bg-emerald-400 hover:tw-bg-emerald-500 hover:tw-text-white tw-text-white tw-rounded-xl tw-text-sm tw-w-max" data-bs-toggle="tooltip" data-bs-title="This top tooltip is themed via CSS variables.">
                                    <i class="fa-regular fa-heart"></i>
                                </button>
                                <!-- ADD TO CART BUTTON -->
                                <x-add-to-cart />
                            </div>

                            <!-- LET ME KNOW -->
                            <!-- <div>
                                <h4 class="text-center tw-text-brand-500">ناموجود</h4>
                                <div class="text-center tw-text-sm">
                                    این کالا فعلا موجود نیست اما می‌توانید زنگوله را بزنید تا به محض
                                    موجود شدن، به شما خبر دهیم.
                                </div>
                                <div class="tw-w-full tw-flex tw-items-center tw-justify-center">
                                    <button class="btn custom-btn-primary btn-sm btn-block tw-rounded-xl tw-w-full mt-3 let-me-know">
                                        <i class="fa-solid fa-bell tw-ml-2"></i>
                                        خبرم کن
                                    </button>
                                </div>
                            </div> -->
                            <!-- LET ME KNOW -->
                        </div>
                    </div>
                </div>
            </div>

            <x-product-options />
        </div>
    </div>
</div>
<div class="mt-5" id="product-tabs-card">
    <div class="container">
        <ul class="nav nav-tabs nav-pills tw-whitespace-nowrap tw-overflow-x-auto tw-w-full tw-flex-nowrap" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#specifications" type="button" role="tab" aria-controls="specifications" aria-selected="true">مشخصات</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#description" type="button" role="tab" aria-controls="description" aria-selected="false">توضیحات</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#comments" type="button" role="tab" aria-controls="comments" aria-selected="false">دیدگاه ها (2)</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#measureguide" type="button" role="tab" aria-controls="comments" aria-selected="false">راهنمای اندازه گیری و نصب</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#video" type="button" role="tab" aria-controls="comments" aria-selected="false">ویدئو</button>
            </li>
        </ul>
    </div>
</div>

<div class="container">
    <div class="tab-content mt-3" id="product-tab">
        <div class="tab-pane fade show active " id="specifications" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
            <x-product.specification />
        </div>
        <div class="tab-pane fade tw-bg-gray-50 tw-rounded-xl tw-p-5" id="description" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
            <x-product.description />
        </div>
        <div class="tab-pane fade lg:tw-px-20" id="comments" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
            <x-product.comments />
        </div>
        <div class="tab-pane" id="measureguide" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
            <x-product.measure />
        </div>
        <div class="tab-pane" id="video" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
            <x-product.video />
        </div>
    </div>
</div>

<div class="tw-z-[9999]">
    <!-- START:STICKY -->
    <div class="sticky-bottom active">
        <div class="container tw-px-2 lg:tw-px-40">
            <div class="tw-w-full tw-justify-between tw-flex tw-items-center">
                <div class="tw-flex tw-items-center">
                    <img id="product-sticky-thumbnail" class="tw-hidden lg:tw-block tw-relative tw-w-[60px] tw-object-cover tw-rounded-xl tw-ml-5" src="{{ Vite::asset('resources/images/single-product/1.jpg') }}" alt="">
                    <div class="tw-flex tw-items-start tw-flex-col sticky-price-time">
                        <!-- UNAVAILABLE TEXT -->
                            <!-- <span class='tw-text-sm tw-text-brand-500'>ناموجود</span> -->
                        <!-- UNAVAILABLE TEXT -->
                        <div class="tw-text-sm md:tw-text-base">
                            <span class="tw-text-gray-600 tw-font-semibold">
                                <i class="fa-solid fa-tag"></i>
                                قیمت : </span>
                            <span class="tw-font-semibold tw-text-gray-700 price-sticky-tag">1,200,000 تومان</span>
                        </div>
                        <div class="tw-text-sm md:tw-text-base">
                            <span class="tw-text-gray-600 tw-font-semibold">
                                <i class="fa-solid fa-truck-clock"></i>
                                زمان تحویل: </span>
                            <span class="tw-font-semibold tw-text-gray-700 time_delivery_sticky_tag">7 روز </span>
                        </div>
                    </div>
                </div>
                <div class="sticky-add-to-cart-btn">
                    <x-add-to-cart />

                    <!-- UNAVAILABLE BUTTON -->
                    <button class="btn custom-btn-primary btn-sm btn-block tw-rounded-xl tw-w-full mt-3 tw-px-3 let-me-know"> <i class="fa-solid fa-bell tw-ml-2"></i> خبرم کن </button>
                    <!-- UNAVAILABLE BUTTON -->
                </div>
            </div>
        </div>
    </div>
    <!-- END:STICKY -->

</div>

<a href="#firstPixel" id="backtotop">
    <i class="fa-solid fa-arrow-up"></i>
</a>

@endsection