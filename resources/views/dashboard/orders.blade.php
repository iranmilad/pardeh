@extends('layouts.dashboard')

@section('title', 'سفارش ها')

@section('dashboard-content')
<!--                        User Panel Orders:start-->
<div class="user-panel-orders border border-radius-xl p-3 mb-3 mt-3 mt-lg-0 tw-shadow-sm tw-relative">
    <div class="fw-bold mb-4 d-flex tw-items-center tw-justify-between">
        <span>تاریخچه سفارشات</span>
        <button data-bs-toggle="collapse" data-bs-target="#searchCollapse" class="btn user-orders-search"><i class="fa-regular fa-magnifying-glass"></i></button>
    </div>
    <div class="collapse tw-w-full tw-absolute tw-top-0 tw-left-0 " id="searchCollapse">
        <div class="card card-body border-0 border-bottom border-radius-xl tw-w-full tw-shadow-sm">
            <form class="tw-w-full tw-flex tw-items-center tw-justify-between" action="">
                <input class="form-control" type="text" placeholder="عنوان کالا یا شماره سفارش">
                <button class="btn" type="button" data-bs-toggle="collapse" data-bs-target="#searchCollapse"><i class="fa-solid fa-circle-xmark"></i></button>
            </form>
        </div>
    </div>

    <div class="tw-w-full">
        <nav class="tw-overflow-auto">
            <div class="nav nav-tabs tw-w-max md:tw-w-full tw-overflow-x-auto tw-overflow-y-hidden" id="tab-user-orders" role="tablist">
                <a href="#nav-processing" class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" role="tab">جاری</a>
                <a href="#nav-finished" class="nav-link " id="nav-home-tab" data-bs-toggle="tab" role="tab">
                    تحویل شده
                    <span class="badge">12</span>
                </a>
                <a href="#nav-returned" class="nav-link" id="nav-home-tab" data-bs-toggle="tab" role="tab">
                    مرجوع شده
                    <span class="badge">3</span>
                </a>
                <a href="#nav-canceled" class="nav-link" id="nav-home-tab" data-bs-toggle="tab" role="tab">
                    لغو شده
                    <span class="badge">3</span>
                </a>
            </div>
        </nav>
    </div>
    <div class="tab-content" id="nav-user-orders">
        <div class="tab-pane fade show active" id="nav-processing" role="tabpanel" tabindex="0">
            <div class="w-100 tw-mx-auto tw-flex tw-items-center tw-justify-center tw-flex-col">
                <img src="{{ Vite::asset('resources/images/order-empty.svg') }}" alt="">
                <span class="tw-mt-4">هنوز سفارشی ثبت نشده است</span>
            </div>
        </div>
        <div class="tab-pane fade " id="nav-finished" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
            <a href="/dashboard/order?id=56810298" class="card card-body nav-link text-dark tw-rounded-xl tw-shadow-sm hover:tw-shadow-md tw-transition-all">
                <div class="tw-flex tw-items-center tw-justify-between">
                    <span class=" tw-flex tw-items-center tw-text-sm fw-bold">
                        <i class="tw-text-emerald-500 fa-duotone fa-circle-check me-1"></i>
                        تحویل شده
                    </span>
                    <span><i class="fa-solid fa-chevron-left"></i></span>
                </div>
                <div class="tw-gap-x-6 tw-justify-between lg:tw-justify-normal tw-flex tw-items-center tw-flex-wrap order-details-span mt-2 border-bottom pb-3">
                    <div>
                        <span>تاریخ:</span>
                        <label>۵ اسفند ۱۴۰۱</label>
                    </div>
                    <div>
                        <span>کد سفارش:</span>
                        <label>56810298</label>
                    </div>
                    <div>
                        <span>مبلغ:</span>
                        <label>6,618,000 <svg style="width: 16px; height: 16px; fill: var(--undefined);"><use xlink:href="#toman"></use></svg></label>
                    </div>
                    <div>
                        <span>تخفیف:</span>
                        <label>62,000 <svg style="width: 16px; height: 16px; fill: var(--undefined);"><use xlink:href="#toman"></use></svg></label>
                    </div>
                </div>
                <div class="tw-gap-6 tw-justify-between lg:tw-justify-normal tw-flex tw-items-center tw-flex-wrap order-details-img mt-3 border-bottom pb-3">
                    <div>
                        <img src="{{ Vite::asset('resources/images/posts/1.jpg') }}" alt="">
                    </div>
                    <div>
                        <img src="{{ Vite::asset('resources/images/posts/2.jpg') }}" alt="">
                    </div>
                    <div>
                        <img src="{{ Vite::asset('resources/images/posts/3.jpg') }}" alt="">
                    </div>
                    <div>
                        <img src="{{ Vite::asset('resources/images/posts/4.jpg') }}" alt="">
                    </div>
                </div>
                <span href="#" class="text-primary mt-3 tw-text-sm">
                    <i class="fa-duotone fa-file-invoice"></i>
                    <span>مشاهده فاکتور</span>
                </span>
            </a>

            <nav class="cs-pagination mt-5 tw-mx-auto tw-w-auto tw-overflow-x-auto">
                <a href=""><i class="fa-solid fa-chevron-right"></i></a>
                <span>1</span>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#">...</a>
                <a href="#">6</a>
                <a href="#">7</a>
                <a href="#">8</a>
                <a href=""><i class="fa-solid fa-chevron-left"></i></a>
            </nav>
        </div>
        <div class="tab-pane fade" id="nav-returned" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
            <div class="w-100 tw-mx-auto tw-flex tw-items-center tw-justify-center tw-flex-col">
                <img src="{{ Vite::asset('resources/images/order-empty.svg') }}" alt="">
                <span class="tw-mt-4">هنوز سفارشی ثبت نشده است</span>
            </div>
        </div>
        <div class="tab-pane fade" id="nav-canceled" role="tabpanel" aria-labelledby="nav-disabled-tab" tabindex="0">
            <div class="w-100 tw-mx-auto tw-flex tw-items-center tw-justify-center tw-flex-col">
                <img src="{{ Vite::asset('resources/images/order-empty.svg') }}" alt="">
                <span class="tw-mt-4">هنوز سفارشی ثبت نشده است</span>
            </div>
        </div>
    </div>
</div>
<!--                        User Panel Orders:end-->
@endsection