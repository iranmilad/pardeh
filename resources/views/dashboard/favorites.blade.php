@extends('layouts.dashboard')

<!-- THIS PAGE IS USED WHEN USER IS LOGGED IN -->
<!-- IF USER IS NOT LOGIN, DONT USE THIS PAGE !!! -->
<!-- THIS PAGE ALWAYS USE COOKIE. NO DATABASE -->

@section('title', 'علاقه مندی ها')

@section('dashboard-content')

<p class="fw-bold mb-4 d-flex tw-items-center">
    علاقه مندی ها
</p>

<div class="row">
    @php
    $favorites = json_decode(Cookie::get('favorites'), true);
    @endphp

    @if($favorites && count($favorites) > 0)
    @foreach($favorites as $favorite)
    <div class="col-md-4">
        <div class="product-item-s2 p-3 position-relative tw-rounded-lg tw-shadow-sm hover:tw-shadow-md">
            <!-- Product Item Image:start-->
            <div class="product-item-s2-img text-center mb-3 position-relative">
                <img src="{{ Vite::asset('resources/images/posts/1.jpg') }}" alt="" class="object-contain">
                <!-- Delete Product From Wish List:start-->
                <div class="product-item-s2-delete position-absolute !tw-opacity-100 !tw-visible">
                    <a data-id="{{ $favorite }}" class="tw-cursor-pointer remove-favorite-user d-flex text-danger tw-rounded-lg justify-content-center align-items-center" title="حذف از لیست علاقه مندی"><i class="fa fa-trash-alt"></i></a>
                </div>
                <!-- Delete Product From Wish List:end-->

                <!-- Add Product To Shopping Cart:start-->
                <div class="product-item-s2-add-to-cart !tw-opacity-100 !tw-visible">
                    <a href="" class="btn btn-sm w-100 tw-rounded-lg">افزودن به سبد خرید</a>
                </div>
                <!-- Add Product To Shopping Cart:end-->
            </div>
            <!-- Product Item Image:end-->

            <!-- Product Item Name:start-->
            <div class="product-item-s2-name">
                <h5 class="fs-7">
                    لپ تاپ ایسوس مدل هیرو سون
                </h5>
            </div>
            <!-- Product Item Name:end-->
        </div>
    </div>
    @endforeach
    @else

</div>
<p class="text-center">محصولی به علاقه مندی شما اضافه نشده است.</p>
@endif
</div>

@endsection