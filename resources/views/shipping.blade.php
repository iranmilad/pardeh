@extends('layouts.shipping')

@section('title', "اطلاعات مشتری")

@section('shipping-content')
<div class="border tw-rounded-2xl tw-px-5">

        <!--                        Cart Header:start-->
        <div class="cart-header d-flex justify-content-between align-items-center my-4">
            <p class="fw-bold">
                اطلاعات مشتری
            </p>
        </div>

        <div class="row col-md-12 mt-2">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>


        <!--                        Cart Header:end-->
        <form class="row form" id="shippingForm" method="post" action="{{ route('shipping.store')}}">
            @csrf
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="first_name" class="form-label fs-7">نام</label>
                    <input  type="text" class="form-control fs-7" name="first_name" id="first_name" value="{{ old('first_name', $user->first_name) }}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="last_name" class="form-label fs-7">نام خانوادگی</label>
                    <input  type="text" class="form-control fs-7" id="last_name"  name="last_name" value="{{ old('last_name', $user->last_name) }}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="mobile" class="form-label fs-7">شماره موبایل</label>
                    <input  type="text" class="form-control fs-7" id="mobile" name="mobile" value="{{ old('mobile', $user->mobile) }}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="email" class="form-label fs-7">آدرس ایمیل</label>
                    <input  class="form-control fs-7" name="email" type="email" id="email" value="{{ old('email', $user->email) }}">
                </div>
            </div>
            <!-- <div class="col-md-6 d-none">
                <div class="mb-3">
                    <label for="nationalcode" class="form-label fs-7">کد ملی</label>
                    <input name="nationalcode" type="text" class="form-control fs-7" id="nationalcode">
                </div>
            </div> -->
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="country" class="form-label fs-7">کشور</label>
                    <select name="country" class="form-select fs-7 country" id="country">
                        <option value="iran" selected>ایران</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="province" class="form-label fs-7">استان</label>
                    <select name="province" class="form-select fs-7 province " id="province" data-province-target="#city">
                        @if ($user->province==null)
                            <option value="" selected disabled>لطفاً یک استان را انتخاب کنید</option>

                        @else
                            <option value="{{ old('province', $user->province) }}">{{ $user->province }}</option>
                            <option value="{{ old('province', $user->province) }}" selected>{{ $user->province }} (پیش فرض)</option>
                        @endif
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="city" class="form-label fs-7">شهر</label>
                    <select name="city" class="form-select fs-7 " id="city">
                        @if ($user->city==null)
                        <option disabled selected>لطفا ابتدا استان را انتخاب کنید</option>
                        @else
                        <option value="{{ old('city', $user->city) }}" selected>{{ $user->city }}</option>
                        @endif
                    </select>
                </div>
            </div>
            <div class="col-12">
                <div class="mb-3">
                    <label for="address" class="form-label fs-7">آدرس</label>
                    <input  type="address" class="form-control fs-7" name="address" id="address" placeholder="آدرس کامل" value="{{ old('address', $user->address) }}">
                </div>
            </div>
            <div class="col-12">
                <div class="mb-3">
                    <label for="postal_code" class="form-label fs-7">کد پستی 10 رقمی (انگلیسی وارد کنید)</label>
                    <input name="postal_code" type="text" class="form-control fs-7" id="postal_code" value="{{ old('postal_code', $user->postal_code) }}">
                </div>
            </div>
            <div class="col-12">
                <div class="form-check mb-3">
                    <input  class="form-check-input" type="checkbox" value="" name="sendtoanotheraddress" id="sendtoanotheraddress">
                    <label class="form-check-label ms-2 fs-7" for="sendtoanotheraddress">
                        سفارش به آدرس دیگری حمل شود
                    </label>
                </div>
            </div>
            <div id="anotherAddress" style="display: none;">
                <div class="row tw-rounded-xl mb-3 tw-mx-auto tw-bg-gray-50 tw-border tw-border-solid tw-border-gray-100">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="shipping_first_name" class="form-label fs-7">نام</label>
                            <input name="shipping_first_name" type="text" class="form-control fs-7" id="shipping_first_name">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="shipping_last_name" class="form-label fs-7">نام خانوادگی</label>
                            <input name="shipping_last_name" type="text" class="form-control fs-7" id="shipping_last_name">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="shipping_mobile" class="form-label fs-7">شماره موبایل</label>
                            <input name="shipping_mobile" type="text" class="form-control fs-7" id="shipping_mobile">
                        </div>
                    </div>
                    <!-- <div class="col-md-6">
                        <div class="mb-3">
                            <label for="shipping_nationalcode" class="form-label fs-7">کد ملی</label>
                            <input name="shipping_nationalcode" type="text" class="form-control fs-7" id="shipping_nationalcode">
                        </div>
                    </div> -->
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="shipping_country" class="form-label fs-7">کشور</label>
                            <select name="shipping_country" class="form-select fs-7 shipping_country" id="shipping_country">
                                <option value="iran" selected disabled>ایران</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="shipping_province" class="form-label fs-7">استان</label>
                            <select name="shipping_province" class="form-select fs-7 province" id="shipping_province" data-province-target="#shipping_city">
                                <option disabled selected>--انتخاب کنید --</option>
                                <option value="1">1</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="shipping_city" class="form-label fs-7">شهر</label>
                            <select name="shipping_city" class="form-select fs-7 " id="shipping_city">
                                <option disabled selected>لطفا ابتدا استان را انتخاب کنید</option>
                                <option value="2">1</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="shipping_address" class="form-label fs-7">آدرس</label>
                            <input name="shipping_address" type="text" class="form-control fs-7" id="shipping_address" placeholder="آدرس کامل">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="shipping_postal_code" class="form-label fs-7">کد پستی 10 رقمی (انگلیسی وارد کنید)</label>
                            <input name="shipping_postal_code" type="text" class="form-control fs-7" id="shipping_postal_code">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="mb-3">
                    <label for="note" class="form-label fs-7">یادداشت سفارش (اختیاری)</label>
                    <textarea class="form-control fs-7" name="note" id="note" cols="30" rows="10" placeholder="یادداشت ها درباره سفارش شما ، برای مثال نکات مهم برای تحویل بار "></textarea>
                </div>
            </div>
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

        <!--                           Purchase:start-->
        <div class="purchase-profit d-flex justify-content-between align-items-center mb-3 px-3 pt-1">
            <p class="fs-7 fw-bold  tw-text-[var(--primary)]">
                مبلغ قابل پرداخت
            </p>
            <p class="fs-6 fw-bold  tw-text-[var(--primary)]">
                {{ $orders->cart->total  }} تومان
            </p>
        </div>
        <!--                            Purchase:end-->

        <!--                            Checkout Btn:start-->
        <div class="d-grid gap-2 p-3">
            <button type="submit" id="shipping-pay" class="btn tw-bg-primary tw-text-white border-radius-xl">ادامه فرایند خرید</button>
        </div>
        <!--                            Checkout Btn:end-->
    </div>
    <p class="text-start mt-3 fs-8">
        هزینه این سفارش هنوز پرداخت نشده‌ و در صورت اتمام موجودی، کالاها از سبد حذف می‌شوند
    </p>
@endsection
