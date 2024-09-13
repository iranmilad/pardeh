
@extends('layouts.shipping')

@section('title', "زمان تحویل")

@section('shipping-content')


    <div class="border tw-rounded-2xl tw-px-5 pb-4 pt-3 shipping-delivery-time">
        <p class="fw-bold mb-3">
            زمان و نوع ارسال
        </p>
        <div class="card mb-4 border-0">
            <div class="card-body">
                <div class="col-md-12 mb-4">
                    <label for="deliveryType1" class="payment-method">
                        <div class="tw-flex tw-items-start">
                            <input class="form-check-input tw-ml-3 tw-w-4" type="radio" name="deliveryType" id="deliveryType1" value="home_delivery" {{($orders->basket()->cart->deliveryType=='home_delivery') ? 'checked' :''}}>
                            <i class="fas fa-shipping-fast  fs-3 tw-h-4"></i>

                        </div>
                        <a href="/delivery/home_delivery" style="color:black">
                            <div class="tw-flex tw-items-start tw-flex-col tw-mr-3">
                                <span class="tw-text-base fw-bold ">تحویل در محل (تحویل 3 تا 7 روزکاری)</span>
                                <span class="tw-text-sm text-start"><b id="deliveryType_price">{{($orders->basket()->cart->deliveryType=='home_delivery') ?  $orders->basket()->cart->deliveryCost  . " تومان ": "" }}</b> </span>
                            </div>
                        </a>
                    </label>

                    <label for="deliveryType2" class="payment-method">
                        <div class="tw-flex tw-items-start">
                            <input class="form-check-input tw-ml-3 tw-w-4" type="radio" name="deliveryType" id="deliveryType2" value="store_delivery" {{($orders->basket()->cart->deliveryType=='store_delivery') ? 'checked' :''}}>
                            <i class="fa-solid fa-shop fs-3 tw-h-4"></i>
                        </div>
                        <a href="/delivery/store_delivery" style="color:black">
                            <div class="tw-flex tw-items-start tw-flex-col tw-mr-3">
                                <span class="tw-text-base fw-bold ">تحویل در فروشگاه</span>
                                <span class="tw-text-sm text-start"> {{($orders->basket()->cart->deliveryType=='store_delivery') ? 'رایگان' :''}}</span>
                            </div>
                        </a>
                        </label>

                </div>
                <!-- <div class="tw-center tw-w-max mb-4">
                    <div class="tw-p-2 tw-py-1 tw-bg-indigo-500 tw-text-white tw-rounded-md"><i class="fa-solid fa-truck"></i></div>
                    <h6 class="tw-ml-5 tw-mr-2">ارسال عادی</h6>
                    <div class="tw-p-2 tw-py-1 tw-text-xs tw-bg-gray-100 tw-rounded-md">4 کالا</div>
                </div>
                <div class="tw-flex tw-items-center mb-3">
                    <img class="tw-size-24 tw-rounded-xl tw-mx-1.5" src="/images/single-product/1.jpg" />
                    <img class="tw-size-24 tw-rounded-xl tw-mx-1.5" src="/images/single-product/2.jpg" />
                    <img class="tw-size-24 tw-rounded-xl tw-mx-1.5" src="/images/single-product/3.jpg" />
                    <img class="tw-size-24 tw-rounded-xl tw-mx-1.5" src="/images/single-product/5.jpg" />
                </div>
                <span class="fs-7 tw-text-gray-500">هزینه ی ارسال : </span>
                <span class="fs-7 tw-text-gray-800 tw-font-semibold">رایگان</span> -->
            </div>
        </div>

        <div class="card mb-4 border-0">
            <div class="card-body">
                <!-- <div class="tw-center tw-w-max mb-4">
                    <div class="tw-p-2 tw-py-1 tw-bg-amber-500 tw-text-white tw-rounded-md"><i class="fa-solid fa-truck-ramp-box"></i></div>
                    <h6 class="tw-ml-5 tw-mr-2">کالا های خدمتی</h6>
                    <div class="tw-p-2 tw-py-1 tw-text-xs tw-bg-gray-100 tw-rounded-md">4 کالا</div>
                </div>
                <div class="tw-flex tw-items-center mb-3">
                    <img class="tw-size-24 tw-rounded-xl tw-mx-1.5" src="/images/single-product/1.jpg" />
                    <img class="tw-size-24 tw-rounded-xl tw-mx-1.5" src="/images/single-product/2.jpg" />
                    <img class="tw-size-24 tw-rounded-xl tw-mx-1.5" src="/images/single-product/3.jpg" />
                    <img class="tw-size-24 tw-rounded-xl tw-mx-1.5" src="/images/single-product/5.jpg" />
                </div> -->
                <span class="fs-7 tw-text-gray-500">انتخاب زمان تحویل یا مراجعه : </span>
                <div class="border px-3 py-1 pb-3 tw-rounded-xl mt-5">
                    <form class="tab-content mt-4" name="deliveryForm" id="deliveryForm" method="post" action="{{ route('delivery.store')}}">
                        @csrf
                        <input type="hidden" name="deliveryType" value="{{ $orders->basket()->cart->deliveryType }}">
                        <ul class="nav nav-tabs mb-3" id="" role="tablist">
                            @foreach ($availableTime['dates'] as $key => $date)
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link {{ $key === 0 ? 'active' : '' }}" id="{{ $date['dayWeek'] }}-tab" data-bs-toggle="tab" data-bs-target="#{{ $date['dayWeek'] }}-tab-pane" type="button" role="tab" aria-controls="{{ $date['dayWeek'] }}-tab-pane" aria-selected="{{ $key === 0 ? 'true' : 'false' }}">
                                        <span>{{ $date['dayWeek'] }}</span>
                                        <span>{{ $date['dayMonth'] }}</span>
                                    </button>
                                </li>
                            @endforeach
                        </ul>
                        @foreach ($availableTime['dates'] as $key => $date)
                            <div class="tab-pane fade {{ $key === 0 ? 'show active' : '' }}" id="{{ $date['dayWeek'] }}-tab-pane" role="tabpanel" aria-labelledby="{{ $date['dayWeek'] }}-tab" tabindex="0">
                                <div class="tw-center tw-w-max tw-flex-wrap">
                                    @foreach ($date['time'] as $time)
                                        <div class="form-check mt-3">
                                            <label for="{{ $date['dayWeek'] }}-{{ $loop->index }}">{{ $time }}</label>
                                            <input type="radio" class="form-check-input" id="{{ $date['dayWeek'] }}-{{ $loop->index }}"  name="time" value="{{$date['dayMonth'].' '.$time }}" {{ $loop->index==1 ? 'selected' : ''}} >
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                        <label id="time-error" class="is-invalid invalid-feedback" for="time">لطفا تاریخ و ساعت تحویل را مشخص کنید</label>
                    </form>
                </div>

                <div class="border p-3 mt-3 fs-7 tw-rounded-xl">
                    قبل از تحویل کالا با شما تماس گرفته میشود
                </div>
            </div>
        </div>
    </div>
@endsection



@section("shipping-menu")


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
        <!--                            All Prices delivery:start-->
        <div class="all-price-delivery d-flex justify-content-between align-items-center mb-3 px-3 pt-2">
            <p class="fs-7 fw-bold">
                هزینه ارسال
            </p>
            <p class="fs-7 gray-600 fw-bold">
                {{ $orders->basket()->cart->deliveryCost }} تومان
            </p>
        </div>
        <!--                            All Prices delivery:end-->
        <!--                           Purchase:start-->
        <div class="purchase-profit d-flex justify-content-between align-items-center mb-3 px-3 pt-1">
            <p class="fs-7 fw-bold text-primary">
                مبلغ قابل پرداخت
            </p>
            <p class="fs-6 fw-bold text-primary">
                <b id="total">{{ $orders->basket()->cart->totalPayed  }}</b> تومان
            </p>
        </div>
        <!--                            Purchase:end-->

        <!--                            Checkout Btn:start-->
        <div class="d-grid gap-2 p-3">
            <button type="submit" name="delivery-pay" id="delivery-pay" class="btn custom-btn-primary border-radius-xl">ادامه فرایند خرید</button>
        </div>
        <!--                            Checkout Btn:end-->
    </div>
    <p class="text-start mt-3 fs-8">
        هزینه این سفارش هنوز پرداخت نشده‌ و در صورت اتمام موجودی، کالاها از سبد حذف می‌شوند
    </p>
@endsection
