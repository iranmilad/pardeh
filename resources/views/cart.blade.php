@extends('layouts.shipping')

@section('title', "سبد خرید")

@section('shipping-content')
<div class="border border-radius-xl tw-px-5">
    <!--                        Cart Header:start-->
    <div class="cart-header d-flex justify-content-between align-items-center my-4">
        <p class="fw-bold">
            سبد خرید شما
        </p>
        <button class="btn custom-btn-primary btn-sm">حذف همه</button>
    </div>
    <!--                        Cart Header:end-->

    <!--                        Cart Content:start-->
    <div class="cart-content">
        <!--                Shopping Cart Box:start-->
        <div class="card shopping-cart-box border-0">
            <!--                    Cart Body:start-->
            <div class="card-body cartParent">
                <!--                    Shopping Cart Item:start-->
                <div class="shopping-cart-item py-3 border-bottom-gray-150">
                    <div class="row">
                        <div class="col-sm-12 col-md-5 col-lg-4 col-xl-3">
                            <!--                    Shopping Cart Item Right:start-->
                            <div class="shopping-cart-item-right me-3">
                                <img src="https://placehold.co/115x115" alt="image" class="object-contain">
                                <div class="shop-item-edit-box d-flex justify-content-between align-items-center px-3 pt-2 pb-1 border-radius-xl">
                                    <span class="addition"><i class="fas fa-plus"></i></span>
                                    <span class="fs-5">1</span>
                                    <span class=""><i class="far fa-trash-alt"></i></span>
                                </div>
                            </div>
                            <!--                    Shopping Cart Item Right:end-->
                        </div>
                        <div class="col-sm-12 col-md-7 col-lg-8 col-xl-9 mt-4">
                            <!--                    Shopping Cart Item Left:start-->
                            <div class="shopping-cart-item-left text-start">
                                <h3 class="fs-6">پرده آماده مخمل طلاکوب طوسی روشن</h3>
                                <span class="fs-4 pt-3 d-block">
                                    <span class="productPrice">169000</span> تومان
                                </span>
                            </div>
                            <!--                    Shopping Cart Item Left:end-->
                            <!--                                        Shopping Cart Transfer To Next Cart:start-->
                            <button href="" class="btn text-info fs-7 float-end mt-4">
                                نمایش جزئیات
                                <i class="fa fa-angle-left align-middle ps-2"></i>
                            </button>
                            <!--                                        Shopping Cart Transfer To Next Cart:end-->
                        </div>
                    </div>
                </div>
                <!--                    Shopping Cart Item:start-->
            </div>
            <!--                    Cart Body:end-->
        </div>
        <!--                Shopping Cart Box:end-->

    </div>
    <!--                        Cart Content:end-->
</div>
@endsection