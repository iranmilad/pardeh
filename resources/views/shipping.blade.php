@extends('layouts.shipping')

@section('title', "اطلاعات مشتری")

@section('shipping-content')
<div class="border border-radius-xl tw-px-5">
    <!--                        Cart Header:start-->
    <div class="cart-header d-flex justify-content-between align-items-center my-4">
        <p class="fw-bold">
            اطلاعات مشتری
        </p>
    </div>
    <!--                        Cart Header:end-->
    <form class="row form" id="shippingForm" method="post" action="/">
        <div class="col-md-6">
            <div class="mb-3">
                <label for="name" class="form-label fs-7">نام</label>
                <input name="name" type="text" class="form-control fs-7" id="name">
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="family" class="form-label fs-7">نام خانوادگی</label>
                <input name="family" type="text" class="form-control fs-7" id="family">
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="mobile" class="form-label fs-7">شماره موبایل</label>
                <input name="mobile" type="text" class="form-control fs-7" id="mobile">
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="email" class="form-label fs-7">آدرس ایمیل</label>
                <input name="email" type="email" class="form-control fs-7" id="email">
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="nationalcode" class="form-label fs-7">کد ملی</label>
                <input name="nationalcode" type="text" class="form-control fs-7" id="nationalcode">
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="country" class="form-label fs-7">کشور</label>
                <select name="country" class="form-select fs-7 country" id="country">
                    <option value="iran" selected disabled>ایران</option>
                </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="province" class="form-label fs-7">استان</label>
                <select name="province" class="form-select fs-7 province" id="province" data-province-target="#city">
                </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="city" class="form-label fs-7">شهر</label>
                <select name="city" class="form-select fs-7 " id="city">
                    <option disabled selected>لطفا ابتدا استان را انتخاب کنید</option>
                </select>
            </div>
        </div>
        <div class="col-12">
            <div class="mb-3">
                <label for="address" class="form-label fs-7">آدرس</label>
                <input name="address" type="address" class="form-control fs-7" id="address" placeholder="آدرس کامل">
            </div>
        </div>
        <div class="col-12">
            <div class="mb-3">
                <label for="postal_code" class="form-label fs-7">کد پستی 10 رقمی (انگلیسی وارد کنید)</label>
                <input name="postal_code" type="text" class="form-control fs-7" id="postal_code">
            </div>
        </div>
        <div class="col-12">
            <div class="form-check mb-3">
                <input name="sendtoanotheraddress" class="form-check-input" type="checkbox" value="" id="sendtoanotheraddress" data-bs-toggle="collapse" data-bs-target="#anotherAddress">
                <label class="form-check-label ms-2 fs-7" for="sendtoanotheraddress">
                    سفارش به آدرس دیگری حمل شود
                </label>
            </div>
        </div>
        <div class="row collapse tw-rounded-lg mb-3 tw-mx-auto tw-bg-gray-50 tw-border tw-border-solid tw-border-gray-100" id="anotherAddress">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="shipping_name" class="form-label fs-7">نام</label>
                    <input name="shipping_name" type="text" class="form-control fs-7" id="shipping_name">
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="shipping_family" class="form-label fs-7">نام خانوادگی</label>
                    <input name="shipping_family" type="text" class="form-control fs-7" id="shipping_family">
                </div>
            </div>
            <div class="col-12">
                <div class="mb-3">
                    <label for="shipping_mobile" class="form-label fs-7">شماره موبایل</label>
                    <input name="shipping_mobile" type="text" class="form-control fs-7" id="shipping_mobile">
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="shipping_nationalcode" class="form-label fs-7">کد ملی</label>
                    <input name="shipping_nationalcode" type="text" class="form-control fs-7" id="shipping_nationalcode">
                </div>
            </div>
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
        <div class="col-12">
            <div class="mb-3">
                <label for="note" class="form-label fs-7">یادداشت سفارش (اختیاری)</label>
                <textarea class="form-control fs-7" name="note" id="note" cols="30" rows="10" placeholder="یادداشت ها درباره سفارش شما ، برای مثال نکات مهم برای تحویل بار "></textarea>
            </div>
        </div>
    </form>
</div>
@endsection