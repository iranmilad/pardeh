@extends('layouts.dashboard')

@section('title', 'اطلاعات حساب')

@section('dashboard-content')
<!--                        User Panel Orders:start-->
<div class="user-panel-orders border border-radius-xl p-3 mb-3 mt-3 mt-lg-0 tw-shadow-sm">
    <p class="fw-bold mb-4">
        اطلاعات حساب
    </p>

    <form class="row form" id="userinfo" method="post" action="/">
        <div class="col-md-6">
            <div class="mb-3">
                <label for="name" class="form-label fs-7 required">نام</label>
                <input name="name" type="text" class="form-control fs-7 peer {{ $errors->has('name') ? 'is-invalid' : '' }}" id="name">
                <div class="invalid-feedback">
                    @if($errors->has("name"))
                    {{$errors->first("name")}}
                    @endif
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="family" class="form-label fs-7 required">نام خانوادگی</label>
                <input name="family" type="text" class="form-control fs-7 {{ $errors->has('family') ? 'is-invalid' : '' }}" id="family">
                <div class="invalid-feedback">
                    @if($errors->has("family"))
                    {{$errors->first("family")}}
                    @endif
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="mobile" class="form-label fs-7 required">شماره موبایل</label>
                <input name="mobile" type="text" class="form-control fs-7 {{ $errors->has('mobile') ? 'is-invalid' : '' }}" id="mobile">
                <div class="invalid-feedback">
                    @if($errors->has("mobile"))
                    {{$errors->first("mobile")}}
                    @endif
                </div>
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
                <label for="province" class="form-label fs-7 required">استان</label>
                <select name="province" class="form-select fs-7 province {{ $errors->has('province') ? 'is-invalid' : '' }}" id="province" data-province-target="#city">
                </select>
                <div class="invalid-feedback">
                    @if($errors->has("province"))
                    {{$errors->first("province")}}
                    @endif
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="city" class="form-label fs-7 required">شهر</label>
                <select name="city" class="form-select fs-7 {{ $errors->has('city') ? 'is-invalid' : '' }}" id="city">
                    <option disabled selected>لطفا ابتدا استان را انتخاب کنید</option>
                </select>
                <div class="invalid-feedback">
                    @if($errors->has("city"))
                    {{$errors->first("city")}}
                    @endif
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="mb-3">
                <label for="address" class="form-label fs-7 required">آدرس</label>
                <input name="address" type="address" class="form-control fs-7 {{ $errors->has('address') ? 'is-invalid' : '' }}" id="address" placeholder="آدرس کامل">
                <div class="invalid-feedback">
                    @if($errors->has("address"))
                    {{$errors->first("address")}}
                    @endif
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="mb-3">
                <label for="postal_code" class="form-label fs-7 required">کد پستی 10 رقمی (انگلیسی وارد کنید)</label>
                <input name="postal_code" type="text" class="form-control fs-7 {{ $errors->has('postal_code') ? 'is-invalid' : '' }}" id="postal_code">
                <div class="invalid-feedback">
                    @if($errors->has("postal_code"))
                    {{$errors->first("postal_code")}}
                    @endif
                </div>
            </div>
        </div>
        <div class="col-12">
            <button class="btn btn-sm custom-btn-primary w-auto">ذخیره اطلاعات</button>
        </div>
    </form>
</div>
<!--                        User Panel Orders:end-->
@endsection