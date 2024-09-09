@extends('layouts.shipping')

@section('title', "سبد خرید")

@section('shipping-content')
<div class="tw-px-5" x-data="{ modal: false }">
    <!-- Cart Header:start-->
    <div class="cart-header d-flex justify-content-between align-items-center my-4">
        <p class="fw-bold">
            سبد خرید شما
            <button class="btn" id="show-tour-guide">
                <i class="fa-solid fa-circle-question"></i>
            </button>
        </p>
        <button class="btn btn-danger btn-sm tw-px-4 tw-rounded-xl" id="remove-all-carts">حذف همه</button>
    </div>
    <!-- Cart Header:end-->

    @foreach ($orders->orderItems as $item)
        <x-cart :order="$item" />
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
    @endforeach




</div>
@endsection



@section("shipping-menu")

    <div class="cart-cal border tw-rounded-2xl overflow-hidden">
        @if($orders->basket()->cart->discount_amount > 0)
            <div class="alert alert-success mt-3  m-3">
                کد تخفیف اعمال شده است.
            </div>
            <form class="tw-flex tw-items-center tw-justify-between px-3 pt-3 mb-3" action="{{ route('removeDiscount', $orders->id) }}" method="POST">
                @csrf
                <button class="btn btn-danger" type="submit">حذف کد تخفیف</button>
            </form>
        @else
            <form class="tw-flex tw-items-center tw-justify-between px-3 pt-3 mb-3" action="{{ route('applyDiscount', $orders->id) }}" method="POST">
                @csrf
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="کد تخفیف" name="discount_code">
                    <input type="hidden" name="value" value="{{ $orders->basket()->cart->total }}">
                    <button class="btn btn-dark" type="submit" id="button-addon2">اعمال</button>
                </div>
            </form>
        @endif

        @if (session('success'))
            <div class="alert alert-success mt-3">
                {{ session('success') }}
            </div>
        @elseif (session('error'))
            <div class="alert alert-danger mt-3">
                {{ session('error') }}
            </div>
        @endif
    </div>



    <div class="cart-cal border tw-rounded-2xl overflow-hidden mt-3">
        <!--                            All Prices:start-->
        <div class="all-price d-flex justify-content-between align-items-center mb-3 px-3 pt-2">
            <p class="fs-7 fw-bold">

                قیمت کالاها
                <span>({{ $orders->basket()->cart->count  }})</span>
            </p>
            <p class="fs-7 gray-600 fw-bold">
            {{ $orders->basket()->cart->total  }} تومان
            </p>
        </div>
        <!--                            All Prices:end-->

        <!--                            All Prices Discounted:start-->
        <div class="all-price-discounted d-flex justify-content-between align-items-center mb-3 px-3 pt-2">
            <p class="fs-7 fw-bold">
                تخفیف
            </p>
            <p class="fs-7 gray-600 fw-bold">
                {{ $orders->basket()->cart->discount_amount}} تومان
            </p>
        </div>
        <!--                            All Prices Discounted:end-->

        <!--                           Purchase:start-->
        <div class="purchase-profit d-flex justify-content-between align-items-center mb-3 px-3 pt-1">
            <p class="fs-7 fw-bold text-primary">
                مبلغ قابل پرداخت
            </p>
            <p class="fs-6 fw-bold text-primary">
                {{ $orders->basket()->cart->totalPayed  }} تومان
            </p>
        </div>
        <!--                            Purchase:end-->

        <!--                            Checkout Btn:start-->
        <div class="d-grid gap-2 p-3">
            <a type="submit" id="shipping-pay" class="btn custom-btn-primary border-radius-xl" href="{{ route('shipping') }}">ادامه فرایند خرید</a>
        </div>
        <!--                            Checkout Btn:end-->
    </div>
    <p class="text-start mt-3 fs-8">
        هزینه این سفارش هنوز پرداخت نشده‌ و در صورت اتمام موجودی، کالاها از سبد حذف می‌شوند
    </p>
@endsection
