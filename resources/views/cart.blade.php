@extends('layouts.shipping')

@section('title', "سبد خرید")

@section('shipping-content')
<div class="tw-px-5" x-data="{ modal: false }">
    <!--                        Cart Header:start-->
    <div class="cart-header d-flex justify-content-between align-items-center my-4">
        <p class="fw-bold">
            سبد خرید شما
            <button class="btn" id="show-tour-guide">
                <i class="fa-solid fa-circle-question"></i>
            </button>
        </p>
        <button class="btn custom-btn-danger btn-sm tw-px-4 tw-rounded-xl" id="remove-all-carts">حذف همه</button>
    </div>
    <!--                        Cart Header:end-->

    <x-cart />
    

    <div class="modal fade" tabindex="-1" id="detailsModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <h5 class="modal-title">جزئیات محصول شما</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                </div>
                <div class="modal-footer border-0">
                    <button type="button" class="btn btn-secondary tw-px-3 btn-sm tw-rounded-xl" data-bs-dismiss="modal">بستن</button>
                </div>
            </div>
        </div>
    </div>

    <!-- START: Header -->
    <div class="cart-header d-flex justify-content-between align-items-center my-4">
        <p class="fw-bold">
            خدمات
        </p>
    </div>
    <!-- END: Header -->
    <x-cart-service />

    <div class="container">
    <section class="mt-5 tw-flex tw-flex-col lg:tw-flex-row tw-items-center tw-justify-between">
        <h2 class="text-right  tw-w-max fw-bold fs-6">محصولات مرتبط</h2>
        <div class="tw-w-full tw-h-1 tw-bg-gray-300 tw-space-x-0 tw-mx-14 tw-hidden "></div>
        <div class="tw-flex tw-flex-row-reverse tw-items-center">
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

</div>
@endsection