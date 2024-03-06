<!-- resources/views/home.blade.php -->
@extends('layouts.primary')

@section('title', 'بلاگ')

@section('content')

<livewire:LoadWidget blockId="block_14" />

<div class="container tw-mt-10">
    <div class="row">

        <!--                    Products In Cart:start-->
        <div class="col-sm-12 col-md-8 col-lg-8 col-xl-9">
            <livewire:LoadWidget blockId="block_15" />
        </div>
        <!--                    Products In Cart:end-->

        <!--                    Products Prices:start-->
        <div class="col-sm-12 col-md-4 col-lg-4 col-xl-3 tw-mt-3 lg:tw-mt-0">
            <div class="cart-cal  overflow-hidden">
                <!--                            All Prices:start-->
                <livewire:LoadWidget blockId="block_17" />
            </div>
            <div class="cart-cal tw-overflow-hidden">
                <div class="all-price d-flex justify-content-between align-items-center mb-3 px-3 pt-2">
                    <p class="fs-7 fw-bold">
                        دسته بندی ها
                    </p>
                </div>
                <ul class="tw-list-none">
                    <li class="blog-category-box">
                        <span class="title-dot">راهنمای خرید</span>
                        <div class="badge tw-bg-brand-500 rounded-pill">99</div>
                    </li>
                    <li class="blog-category-box">
                        <span class="title-dot">دکوراسیون داخلی</span>
                        <div class="badge tw-bg-brand-500 rounded-pill">99</div>
                    </li>
                    <li class="blog-category-box">
                        <span class="title-dot">تازه های صنعت پرده</span>
                        <div class="badge tw-bg-brand-500 rounded-pill">99</div>
                    </li>
                    <li class="blog-category-box">
                        <span class="title-dot">ترفند ها</span>
                        <div class="badge tw-bg-brand-500 rounded-pill">99</div>
                    </li>
                    <li class="blog-category-box">
                        <span class="title-dot">ترند های روز</span>
                        <div class="badge tw-bg-brand-500 rounded-pill">99</div>
                    </li>
                </ul>
            </div>
            <div class="cart-cal  overflow-hidden tw-mt-4">
                <livewire:LoadWidget blockId="block_16" />
            </div>
        </div>
        <!--                    Products Prices:end-->
    </div>
</div>
@endsection
