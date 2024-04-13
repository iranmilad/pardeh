@extends('layouts.dashboard')

@section('title', 'تغییر رمزعبور')

@section('dashboard-content')
<!--                        User Panel Orders:start-->
<div class="user-panel-orders border border-radius-xl p-3 mb-3 mt-3 mt-lg-0 tw-shadow-sm">
    <p class="fw-bold mb-4">
        تغییر رمزعبور
    </p>

    <form class="row form mb-5" id="changepass-dashboard" method="post" action="{{ route('dashboard.setNewPassword')}}">
        @csrf
        <div class="col-md-12">
            <div class="mb-3">
                <label for="currentpass" class="form-label fs-7 required">رمز عبور فعلی</label>
                <input name="currentpass" type="password" class="form-control fs-7 peer {{ $errors->has('currentpass') ? 'is-invalid' : '' }}" id="currentpass">
                <div class="invalid-feedback">
                    @if($errors->has("currentpass"))
                    {{$errors->first("currentpass")}}
                    @endif
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="password" class="form-label fs-7 required">رمز عبور</label>
                <input name="password" type="password" class="form-control fs-7 peer {{ $errors->has('password') ? 'is-invalid' : '' }}" id="password">
                <div class="invalid-feedback">
                    @if($errors->has("password"))
                    {{$errors->first("password")}}
                    @endif
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="password_confirmation" class="form-label fs-7 required">تکرار رمز عبور</label>
                <input name="password_confirmation" type="password" class="form-control fs-7 peer {{ $errors->has('password_confirmation') ? 'is-invalid' : '' }}" id="password_confirmation">
                <div class="invalid-feedback">
                    @if($errors->has("password_confirmation"))
                    {{$errors->first("password_confirmation")}}
                    @endif
                </div>
            </div>
        </div>
        <div class="col-12">
            <button class="btn btn-sm custom-btn-primary w-auto">ذخیره</button>
        </div>
    </form>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

</div>
<!--                        User Panel Orders:end-->
@endsection
