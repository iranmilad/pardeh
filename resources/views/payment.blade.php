@extends('layouts.shipping')

@section('title', "روش پرداخت")

@section('shipping-content')
<div class="border border-radius-xl tw-px-4">
    <!--                        Cart Header:start-->
    <div class="cart-header d-flex justify-content-between align-items-center my-4">
        <p class="fw-bold">
            روش پرداخت
        </p>
    </div>
    <!--                        Cart Header:end-->

    <form action="">

        <label for="credit_payment" class="payment-method">
            <div class="tw-flex tw-items-start">
                <input class="form-check-input tw-ml-3 tw-w-4" type="radio" name="payment-method" id="credit_payment">
                <i class="fa-solid fa-credit-card fs-3 tw-h-4"></i>
            </div>
            <div class="tw-flex tw-items-start tw-flex-col tw-mr-3">
                <span class="tw-text-base fw-bold ">پرداخت اینترنی</span>
                <span class="tw-text-sm ">پرداخت آنلاین با تمامی کارت‌های بانکی</span>
            </div>
        </label>

        <div class="payment-accordion">
            <label for="wallet_payment" class="payment-method">
                <div class="tw-flex tw-items-start">
                    <input class="form-check-input tw-ml-3 tw-w-4" type="checkbox" name="other-payment-method" id="wallet_payment">
                    <i class="fa-solid fa-wallet fs-3 tw-h-4"></i>
                </div>
                <div class="tw-flex tw-items-start tw-flex-col tw-mr-3">
                    <span class="tw-text-base fw-bold ">پرداخت اعتباری</span>
                    <span class="tw-text-sm ">پرداخت با اعتبار حساب کاربری</span>
                </div>
            </label>
            <div class="payment-accordion-body tw-hidden">
                <!-- START:EACH PRODUCT -->
                <div class="tw-bg-gray-50 p-2 tw-rounded-lg tw-border tw-border-solid tw-border-gray-200 mb-3">
                    <span>محصول شماره 1</span>
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
                                <tr>
                                    <td scope="row">1</td>
                                    <td>25,000,000 <svg style="width: 16px; height: 16px; fill: var(--undefined);">
                                            <use xlink:href="#toman"></use>
                                        </svg></td>
                                    <td>25-3-1402</td>
                                </tr>
                                <tr>
                                    <td scope="row">2</td>
                                    <td>25,000,000 <svg style="width: 16px; height: 16px; fill: var(--undefined);">
                                            <use xlink:href="#toman"></use>
                                        </svg></td>
                                    <td>25-3-1402</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- END:EACH PRODUCT -->
            </div>
        </div>

        <div class="payment-accordion">
            <label for="check_payment" class="payment-method">
                <div class="tw-flex tw-items-start">
                    <input class="form-check-input tw-ml-3 tw-w-4" type="checkbox" name="other-payment-method" id="check_payment">
                    <i class="fa-solid fa-money-check-pen fs-3 tw-h-4"></i>
                </div>
                <div class="tw-flex tw-items-start tw-flex-col tw-mr-3">
                    <span class="tw-text-base fw-bold">پرداخت با چک</span>
                    <span class="tw-text-sm ">امنیت و انتخاب پرداخت از طریق چک</span>
                </div>
            </label>
            <div class="payment-accordion-body tw-hidden">
                <!-- START:EACH PRODUCT -->
                <div class="tw-bg-gray-50 p-2 tw-rounded-lg tw-border tw-border-solid tw-border-gray-200 mb-3">
                    <span>محصول شماره 1</span>
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
                                <tr>
                                    <td scope="row">1</td>
                                    <td>25,000,000 <svg style="width: 16px; height: 16px; fill: var(--undefined);">
                                            <use xlink:href="#toman"></use>
                                        </svg></td>
                                    <td>25-3-1402</td>
                                </tr>
                                <tr>
                                    <td scope="row">2</td>
                                    <td>25,000,000 <svg style="width: 16px; height: 16px; fill: var(--undefined);">
                                            <use xlink:href="#toman"></use>
                                        </svg></td>
                                    <td>25-3-1402</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- END:EACH PRODUCT -->
            </div>
        </div>

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
    </form>

</div>
@endsection