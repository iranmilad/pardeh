@extends('layouts.dashboard')

@section('title', 'پنل کاربری')

@section('dashboard-content')

<!-- SPECEFIC DISCOUNT -->
<div class="user-panel-orders border border-radius-xl p-3 mb-3 mt-3 mt-lg-0 tw-shadow-sm tw-relative tw-overflow-hidden">
    <div class="tw-flex tw-items-center tw-justify-between">
        <img class="tw-absolute tw-w-full tw-h-full tw-object-cover tw-z-10" src="{{ Vite::asset('resources/images/pattern.png') }}" alt="">
        <p class="tw-z-20 fw-bold">کد تخفیف اختصاصی شما</p>
        <span class="tw-z-20 px-3 py-1 tw-bg-slate-800 tw-w-max tw-rounded-md tw-text-white">TEST_CODE</span>
    </div>
</div>
<!-- SPECEFIC DISCOUNT -->
<!-- User Panel Orders:start -->
<div class="user-panel-orders border border-radius-xl p-3 mb-3 mt-3 mt-lg-0 tw-shadow-sm">
    <p class="fw-bold mb-4 d-flex tw-items-center">
        سفارش های من
    </p>
    <div class="row">
        <div class="col-4 tw-flex-col lg:tw-flex-row tw-flex tw-items-center tw-border-gray-300 tw-border-solid tw-border-0 tw-border-l">
            <img class="tw-size-12 lg:tw-size-16" src="{{ Vite::asset('resources/images/status-processing.png') }}" alt="">
            <div class="tw-flex tw-flex-col tw-justify-center tw-items-center mt-2 md:mt-0 tw-space-y-1 md:tw-space-y-2 ms-lg-3">
                <span class="tw-text-sm lg:tw-text-base fw-bold">{{ auth()->user()->getOpenOrdersCount() }} سفارش</span>
                <span class="tw-text-xs">جاری</span>
            </div>
        </div>
        <div class="col-4 tw-flex-col lg:tw-flex-row tw-flex tw-items-center tw-border-gray-300 tw-border-solid tw-border-0 tw-border-l">
            <img class="tw-size-12 lg:tw-size-16" src="{{ Vite::asset('resources/images/status-delivered.png') }}" alt="">
            <div class="tw-flex tw-flex-col tw-justify-center tw-items-center mt-2 md:mt-0 tw-space-y-1 md:tw-space-y-2 ms-lg-3">
                <span class="tw-text-sm lg:tw-text-base fw-bold">{{ auth()->user()->getCompletedOrdersCount() }} سفارش</span>
                <span class="tw-text-xs">تحویل شده</span>
            </div>
        </div>
        <div class="col-4 tw-flex-col lg:tw-flex-row tw-flex tw-items-center">
            <img class="tw-size-12 lg:tw-size-16" src="{{ Vite::asset('resources/images/status-canceled.png') }}" alt="">
            <div class="tw-flex tw-flex-col tw-justify-center tw-items-center mt-2 md:mt-0 tw-space-y-1 md:tw-space-y-2 ms-lg-3">
                <span class="tw-text-sm lg:tw-text-base fw-bold">{{ auth()->user()->getCanceledOrdersCount() }} سفارش</span>
                <span class="tw-text-xs">لغو شده</span>
            </div>
        </div>
    </div>
</div>
<!-- User Panel Orders:end -->


<!--                        User Panel Status:start-->
<div class="user-panel-status mb-3">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-7 col-xl-8 mb-3">
            <!--                        My Wallet:start-->
            <div class="user-panel-wallet p-4 tw-rounded-xl tw-shadow-sm tw-h-full d-flex tw-flex-col tw-items-start tw-justify-center">
                <p class="gray-600 mb-2">اعتبار شما</p>
                <h4 class="text-white fs-2">{{ number_format($user->calculateAvailableCredit()) }} تومان</h4>
                @if ($user->lastPaidPayment())
                    <p class="gray-600 mb-1">آخرین شارژ حساب در: {{ $user->lastPaidPayment()->dueDateShamsi ?? '-' }}</p>
                @endif
                @if($user->nextUnpaidPaymentDueDate())
                    <label class="tw-text-white mb-1" for="">تاریخ سر رسید بعدی: {{ $user->nextUnpaidPaymentDueDate()->dueDateShamsi ?? '-' }}</label>
                @endif
            </div>
            <!--                        My Wallet:end-->
        </div>
        <div class="col-sm-12 col-md-12 col-lg-5 col-xl-4">
            <!--                        My Current Status:start-->
            <div class="user-panel-current-status h-100">
                <div class="d-flex flex-column justify-content-between h-100">
                    <!--                                           User All Buy:start-->
                    <div class="user-all-buys p-3 mb-3 tw-rounded-xl tw-shadow-sm">
                        <div class="d-flex justify-content-start align-items-center">
                            <span class="border-radius-circle d-flex justify-content-center align-items-center tw-bg-white/35 tw-size-12">
                                <i class="fa-duotone fa-dollar-sign"></i>
                            </span>
                            <div class="ms-3">
                                <p class="fs-7 gray-150">مبلغ کل سفارشات</p>
                                <p class="fs-5">{{ number_format($user->getTotalOrderAmount()) }} تومان</p>

                            </div>
                        </div>
                        <a href="/dashboard/orders" class="text-white fs-8 mt-4 d-block">مشاهده تاریخچه سفارشات
                            <i class="fa fa-angle-left"></i>
                        </a>
                    </div>
                    <!--                                           User All Buy:end-->

                    <!--                                           User All Club Points:start-->
                    <div class="user-all-club-points p-3 mb-3 tw-rounded-xl tw-shadow-sm">
                        <div class=" d-flex justify-content-start align-items-center">
                            <span class="border-radius-circle d-flex justify-content-center align-items-center tw-bg-white/35 tw-size-12">
                                <i class="fa-duotone fa-comments"></i>
                            </span>
                            <div class="ms-3">
                                <p class="fs-7 gray-150">دیدگاه های شما</p>
                                <p class="fs-5">{{ count($comments) }}</p>

                            </div>
                        </div>
                        <a href="/dashboard/comments" class="text-white fs-8 mt-4 d-block">مشاهده دیدگاه ها
                            <i class="fa fa-angle-left"></i>
                        </a>
                    </div>
                    <!--                                           User All Club Points:end-->
                </div>
            </div>
            <!--                        My Current Status:end-->
        </div>
    </div>
</div>
<!--                        User Panel Status:end-->

<!--                        User Panel Orders:start-->
<div class="user-panel-orders border border-radius-xl p-3 mb-3 mt-3 mt-lg-0 tw-shadow-sm">
    <p class="fw-bold mb-4 d-flex tw-items-center">
        لیست علاقه مندی من
    </p>
    <div class="row">
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
                        <a href="{{ $favorite->link }}" class="btn btn-sm w-100 tw-rounded-xl mt-4">مشاهده محصول</a>
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
<!--                        User Panel Orders:end-->
@endsection
