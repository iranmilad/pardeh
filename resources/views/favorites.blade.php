@extends('layouts.primary')

<!-- THIS PAGE IS USED WHEN USER IS NOT LOGGED IN -->
<!-- IF USER LOGIN, DONT USE THIS PAGE !!! -->
<!-- THIS PAGE ALWAYS USE COOKIE. NO DATABASE -->

@section('title', config('app.name'))

@section('content')
<div class="container">
    <div class="contact-us-header border-bottom-gray-150 pb-2">
        <h2 class="fs-5 fw-bold">علاقه مندی ها</h2>
        <div class="vertical-line"></div>
    </div>


    <div class="row mt-4">


        @if($favorites && count($favorites) > 0)
            @foreach($favorites as $favorite)
            <div class="col-md-4">
                <div class="product-item-s2 p-3 position-relative tw-rounded-xl tw-shadow-sm hover:tw-shadow-md">
                    <!-- Product Item Image:start-->
                    <div class="product-item-s2-img text-center mb-3 position-relative">
                        <img src="{{ $favorite->img }}" alt="" class="object-contain" style="min-height: 160px;">
                        <!-- Delete Product From Wish List:start-->
                        <div class="product-item-s2-delete position-absolute !tw-opacity-100 !tw-visible">
                            <a href="{{ '/delete-wishlist/'.$favorite->id }}" class="tw-cursor-pointer d-flex text-danger tw-rounded-xl justify-content-center align-items-center" title="حذف از لیست علاقه مندی"><i class="fa fa-trash-alt"></i></a>
                        </div>
                        <!-- Delete Product From Wish List:end-->

                        <!-- Add Product To Shopping Cart:start-->
                        <div class="product-item-s2-add-to-cart !tw-opacity-100 !tw-visible">
                            <a href="{{ $favorite->link }}" class="btn btn-sm btn-primary w-100 tw-rounded-xl mt-4">مشاهده محصول</a>
                        </div>
                        <!-- Add Product To Shopping Cart:end-->
                    </div>
                    <!-- Product Item Image:end-->

                    <!-- Product Item Name:start-->
                    <div class="product-item-s2-name">
                        <h5 class="fs-7">
                            {{ $favorite->title }}
                        </h5>
                    </div>
                    <!-- Product Item Name:end-->
                </div>
            </div>
            @endforeach
        @else
        <p class="text-center">محصولی به علاقه مندی شما اضافه نشده است.</p>
        @endif
    </div>
</div>

@endsection
