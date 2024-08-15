@extends('layouts.shipping')

@section('title', "روش پرداخت")

@section('shipping-content')
<div class="border tw-rounded-2xl tw-px-4">
    <!--                        Cart Header:start-->
    <div class="cart-header d-flex justify-content-between align-items-center my-4">
        <p class="fw-bold">
            روش پرداخت
        </p>
    </div>
    <!--                        Cart Header:end-->

    <form action="" x-data="{ selectedMethod: '' }">

        <label for="credit_payment" class="payment-method">
            <div class="tw-flex tw-items-start">
                <input class="form-check-input tw-ml-3 tw-w-4" type="radio" name="payment-method" id="credit_payment" checked>
                <i class="fa-solid fa-credit-card fs-3 tw-h-4"></i>
            </div>
            <div class="tw-flex tw-items-start tw-flex-col tw-mr-3">
                <span class="tw-text-base fw-bold ">پرداخت اینترنی</span>
                <span class="tw-text-sm ">پرداخت آنلاین با تمامی کارت‌های بانکی</span>
            </div>
        </label>

        @if ($user->credit_payment_active==true)
            <div class="payment-accordion">
                <label for="wallet_payment" class="payment-method">
                    <div class="tw-flex tw-items-start">
                        <input class="form-check-input tw-ml-3 tw-w-4" type="checkbox" name="other-payment-method" id="wallet_payment" {{ $orders->cart->paymentMethod=='credit' ? 'checked' : '' }}>
                        <i class="fa-solid fa-wallet fs-3 tw-h-4"></i>
                    </div>
                    <a href="{{ $orders->cart->paymentMethod=='credit' ? '/payment' : '/payment/credit' }}" style="{{ $orders->cart->paymentMethod!='credit' ? 'color:black' : '' }}">
                        <div class="tw-flex tw-items-start tw-flex-col tw-mr-3">
                            <span class="tw-text-base fw-bold ">پرداخت اعتباری</span>
                            <span class="tw-text-sm ">پرداخت با اعتبار حساب کاربری</span>
                        </div>
                    </a>
                    </label>
                <div class="payment-accordion-body {{ $orders->cart->paymentMethod=='credit' ? '' : 'tw-hidden' }}">
                    <!-- START:EACH PRODUCT -->
                    <div class="tw-bg-gray-50 p-2 tw-rounded-xl tw-border tw-border-solid tw-border-gray-200 mb-3">
                        @if ($orders->cart->availableCreditPlan>0)
                        <span>پلن پرداخت اعتباری</span>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>مبلغ</th>
                                        <th>تاریخ سر رسید</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders->cart->totalTimeline as $timeline)

                                        <tr>
                                            <td scope="row">{{ $loop->index+1  }}</td>
                                            <td>{{ number_format($timeline->amount) }} <svg style="width: 16px; height: 16px; fill: var(--undefined);">
                                                    <use xlink:href="#toman"></use>
                                                </svg></td>
                                            <td>{{ $timeline->month }}</td>
                                        </tr>

                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                        @else
                        <tr>طرج پلن اعتباری برای کالاهای موجود در سبد خرید وجود ندارد</tr>
                        @endif
                    </div>
                    <!-- END:EACH PRODUCT -->
                </div>
            </div>
        @else
            <!-- START: DISABLED METHOD -->
            <label class="payment-method disabled">
                <div class="tw-flex tw-items-start">
                    <i class="fa-solid fa-wallet fs-3 tw-h-4"></i>
                </div>
                <div class="tw-flex tw-items-start tw-flex-col tw-mr-3">
                    <span class="tw-text-base fw-bold">پرداخت اعتباری غیر فعال شده</span>
                    <span class="tw-text-sm ">این قابلیت برای شما در دسترس نیست</span>
                </div>
            </label>
            <!-- END: DISABLED METHOD -->
        @endif



        @if ($user->check_payment_active==true)
            <div class="payment-accordion">
                <label for="check_payment" class="payment-method">
                    <a href="{{ $orders->cart->paymentMethod=='check' ? '/payment' : '/payment/check' }}" style="{{ $orders->cart->paymentMethod!='check' ? 'color:black' : '' }}">
                        <div class="tw-flex tw-items-start">
                            <input class="form-check-input tw-ml-3 tw-w-4" type="checkbox" name="other-payment-method" id="check_payment" {{ $orders->cart->paymentMethod=='check' ? 'checked' : '' }}>
                            <i class="fa-solid fa-money-check-pen fs-3 tw-h-4"></i>
                        </div>
                    </a>
                    <div class="tw-flex tw-items-start tw-flex-col tw-mr-3">
                        <span class="tw-text-base fw-bold">پرداخت با چک</span>
                        <span class="tw-text-sm ">امنیت و انتخاب پرداخت از طریق چک</span>
                    </div>
                </label>
                <div class="payment-accordion-body {{ $orders->cart->paymentMethod=='check' ? '' : 'tw-hidden' }}">
                    <!-- START:EACH PRODUCT -->
                    <div class="tw-bg-gray-50 p-2 tw-rounded-xl tw-border tw-border-solid tw-border-gray-200 mb-3">
                        <span>سررسید چک های دریافتی</span>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>مبلغ چک</th>
                                        <th>تاریخ سر رسید</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders->cart->totalCheckTimeline as $timeline)

                                        <tr>
                                            <td scope="row">{{ $loop->index+1  }}</td>
                                            <td>{{ number_format($timeline->amount) }} <svg style="width: 16px; height: 16px; fill: var(--undefined);">
                                                    <use xlink:href="#toman"></use>
                                                </svg></td>
                                            <td>{{ $timeline->DueDateShamsi }}</td>
                                        </tr>

                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- END:EACH PRODUCT -->
                </div>
            </div>
        @else
            <!-- START: DISABLED METHOD -->
            <label class="payment-method disabled">
                <div class="tw-flex tw-items-start">
                    <i class="fa-solid fa-money-check-pen fs-3 tw-h-4"></i>
                </div>
                <div class="tw-flex tw-items-start tw-flex-col tw-mr-3">
                    <span class="tw-text-base fw-bold">پرداخت چک غیر فعال شده</span>
                    <span class="tw-text-sm ">این قابلیت برای شما در دسترس نیست</span>
                </div>
            </label>
            <!-- END: DISABLED METHOD -->
        @endif


    </form>

</div>
@endsection


@section("shipping-menu")


    <div class="cart-cal border tw-rounded-2xl overflow-hidden mt-3">
        <!--                            All Prices:start-->
        <div class="all-price d-flex justify-content-between align-items-center mb-3 px-3 pt-2">
            <p class="fs-7 fw-bold">
                قیمت کالاها
                <span>({{ $orders->cart->count  }})</span>
            </p>
            <p class="fs-7 gray-600 fw-bold">
            {{ $orders->cart->total  }} تومان
            </p>
        </div>
        <!--                            All Prices:end-->

        <!--                            All Prices Discounted:start-->
        <div class="all-price-discounted d-flex justify-content-between align-items-center mb-3 px-3 pt-2">
            <p class="fs-7 fw-bold">
                تخفیف
            </p>
            <p class="fs-7 gray-600 fw-bold">
                0 تومان
            </p>
        </div>
        <!--                            All Prices Discounted:end-->
        <!--                            All Prices delivery:start-->
        <div class="all-price-delivery d-flex justify-content-between align-items-center mb-3 px-3 pt-2">
            <p class="fs-7 fw-bold">
                هزینه ارسال
            </p>
            <p class="fs-7 gray-600 fw-bold">
                {{ $orders->cart->deliveryCost }} تومان
            </p>
        </div>
        <!--                            All Prices delivery:end-->

        <!--                            All Prices delivery:start-->
        <div class="all-price-delivery d-flex justify-content-between align-items-center mb-3 px-3 pt-2">
            <p class="fs-7 fw-bold">
                کیف پول اعتباری
            </p>
            <p class="fs-7 gray-600 fw-bold">
                {{ $orders->cart->availableCreditPlan }} تومان
            </p>
        </div>
        <!--                            All Prices delivery:end-->

        <!--                            All Prices delivery:start-->
        <div class="all-price-delivery d-flex justify-content-between align-items-center mb-3 px-3 pt-2">
            <p class="fs-7 fw-bold">
                استناد پرداختی
            </p>
            <p class="fs-7 gray-600 fw-bold">
                {{ $orders->cart->availableCheck }} تومان
            </p>
        </div>
        <!--                            All Prices delivery:end-->

        <!--                           Purchase:start-->
        <div class="purchase-profit d-flex justify-content-between align-items-center mb-3 px-3 pt-1">
            <p class="fs-7 fw-bold text-primary">
                مبلغ قابل پرداخت
            </p>
            <p class="fs-6 fw-bold text-primary">
                <b id="total">{{ $orders->cart->totalPayed  }}</b> تومان
            </p>
        </div>
        <!--                            Purchase:end-->

        <!--                            Checkout Btn:start-->
        <div class="d-grid gap-2 p-3">
            <a  class="btn custom-btn-primary border-radius-xl" href="/orderComplete">پرداخت و تکمیل سفارش</a>
        </div>
        <!--                            Checkout Btn:end-->
    </div>
    <p class="text-start mt-3 fs-8">
        هزینه این سفارش هنوز پرداخت نشده‌ و در صورت اتمام موجودی، کالاها از سبد حذف می‌شوند
    </p>
@endsection
