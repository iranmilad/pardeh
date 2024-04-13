@extends('layouts.dashboard')

@section('title', 'اطلاعات حساب')

@section('dashboard-content')
<!--                        User Panel Orders:start-->
<div class="user-panel-orders border border-radius-xl p-3 mb-3 mt-3 mt-lg-0 tw-shadow-sm">
    <p class="fw-bold mb-4">
        اطلاعات حساب
    </p>

    <form class="row form" id="userinfo" method="post" action="{{ route('dashboard.user-info.update') }}">
        @csrf
        <div class="col-md-6">
            <div class="mb-3">
                <label for="first_name" class="form-label fs-7 required">نام</label>
                <input name="first_name" type="text" class="form-control fs-7 peer {{ $errors->has('first_name') ? 'is-invalid' : '' }}" id="first_name" value="{{ old('first_name',$user->first_name) }}">
                @if($errors->has('first_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('first_name') }}
                    </div>
                @endif

            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="last_name" class="form-label fs-7 required">نام خانوادگی</label>

                <input name="last_name" type="text" class="form-control fs-7 {{ $errors->has('last_name') ? 'is-invalid' : '' }}" id="last_name" value="{{ old('last_name', $user->last_name) }}">
                @if($errors->has('last_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('last_name') }}
                    </div>
                @endif

            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="mobile" class="form-label fs-7 required">شماره موبایل</label>
                <input name="mobile" type="text" class="form-control fs-7 {{ $errors->has('mobile') ? 'is-invalid' : '' }}" id="mobile" value="{{ old('mobile', $user->mobile) }}" disabled>
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
                <input name="email" type="email" class="form-control fs-7 {{ $errors->has('email') ? 'is-invalid' : '' }}" id="email" value="{{ old('email', $user->email) }}">
                @if($errors->has('email'))
                <div class="invalid-feedback">
                    {{ $errors->first('email') }}
                </div>
                @endif
            </div>
        </div>

        <div class="col-md-6">
            <div class="mb-3">
                <label for="nationalcode" class="form-label fs-7">کد ملی</label>
                <input name="nationalcode" type="text" class="form-control fs-7 {{ $errors->has('nationalcode') ? 'is-invalid' : '' }}" id="nationalcode" value="{{ old('nationalcode', $user->nationalcode) }}">
                @if($errors->has('nationalcode'))
                <div class="invalid-feedback">
                    {{ $errors->first('nationalcode') }}
                </div>
                @endif
            </div>
        </div>

        <div class="col-md-6">
            <div class="mb-3">
                <label for="country" class="form-label fs-7">کشور</label>
                <select name="country" class="form-select fs-7 country {{ $errors->has('country') ? 'is-invalid' : '' }}" id="country">
                    <option value="iran" selected disabled>ایران</option>
                </select>
                @if($errors->has('country'))
                <div class="invalid-feedback">
                    {{ $errors->first('country') }}
                </div>
                @endif
            </div>
        </div>

        <div class="col-md-6">
            <div class="mb-3">
                <label for="province" class="form-label fs-7 required">استان</label>
                <select name="province" class="form-select fs-7 province {{ $errors->has('province') ? 'is-invalid' : '' }}" id="province" data-province-target="#city">
                    @if ($user->province==null)
                        <option value="" selected disabled>لطفاً یک استان را انتخاب کنید</option>
                    @else
                        <option value="{{ old('province', $user->province) }}">{{ $user->province }}</option>
                        <option value="{{ old('province', $user->province) }}" selected>{{ $user->province }} (پیش فرض)</option>
                    @endif

                </select>
                @if($errors->has("province"))
                <div class="invalid-feedback">
                    {{ $errors->first("province") }}
                </div>
                @endif
            </div>
        </div>

        <div class="col-md-6">
            <div class="mb-3">
                <label for="city" class="form-label fs-7 required">شهر</label>
                <select name="city" class="form-select fs-7 {{ $errors->has('city') ? 'is-invalid' : '' }}" id="city">
                    @if ($user->city==null)
                    <option disabled selected>لطفا ابتدا استان را انتخاب کنید</option>
                    @else
                    <option value="{{ old('city', $user->city) }}" selected>{{ $user->city }}</option>
                    @endif
                </select>
                @if($errors->has("city"))
                <div class="invalid-feedback">
                    {{ $errors->first("city") }}
                </div>
                @endif
            </div>
        </div>

        <div class="col-12">
            <div class="mb-3">
                <label for="address" class="form-label fs-7 required">آدرس</label>
                <input name="address" type="text" class="form-control fs-7 {{ $errors->has('address') ? 'is-invalid' : '' }}" id="address" placeholder="آدرس کامل" value="{{ old('address', $user->address) }}">
                @if($errors->has("address"))
                <div class="invalid-feedback">
                    {{ $errors->first("address") }}
                </div>
                @endif
            </div>
        </div>

        <div class="col-12">
            <div class="mb-3">
                <label for="postal_code" class="form-label fs-7 required">کد پستی 10 رقمی (انگلیسی وارد کنید)</label>
                <input name="postal_code" type="text" class="form-control fs-7 {{ $errors->has('postal_code') ? 'is-invalid' : '' }}" id="postal_code" value="{{ old('postal_code', $user->postal_code) }}">
                @if($errors->has("postal_code"))
                <div class="invalid-feedback">
                    {{ $errors->first("postal_code") }}
                </div>
                @endif
            </div>
        </div>

        <div class="col-12">
            <button class="btn btn-sm custom-btn-primary w-auto" type="submit">ذخیره اطلاعات</button>
        </div>
    </form>
</div>
<!--                        User Panel Orders:end-->
@endsection
