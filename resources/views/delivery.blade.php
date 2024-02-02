@extends('layouts.shipping')

@section('title', "زمان تحویل")

@section('shipping-content')


<div class="border border-radius-xl tw-px-5 pb-4 pt-3 shipping-delivery-time">
    <p class="fw-bold mb-3">
        زمان تحویل
    </p>
    <div class="card mb-4 border-0">
        <div class="card-body">
            <div class="tw-center tw-w-max mb-4">
                <div class="tw-p-2 tw-py-1 tw-bg-indigo-500 tw-text-white tw-rounded-md"><i class="fa-solid fa-truck"></i></div>
                <h6 class="tw-ml-5 tw-mr-2">ارسال عادی</h6>
                <div class="tw-p-2 tw-py-1 tw-text-xs tw-bg-gray-100 tw-rounded-md">4 کالا</div>
            </div>
            <div class="tw-flex tw-items-center mb-3">
                <img class="tw-size-24 tw-rounded-lg tw-mx-1.5" src="{{ Vite::asset('resources/images/single-product/1.jpg') }}" />
                <img class="tw-size-24 tw-rounded-lg tw-mx-1.5" src="{{ Vite::asset('resources/images/single-product/2.jpg') }}" />
                <img class="tw-size-24 tw-rounded-lg tw-mx-1.5" src="{{ Vite::asset('resources/images/single-product/3.jpg') }}" />
                <img class="tw-size-24 tw-rounded-lg tw-mx-1.5" src="{{ Vite::asset('resources/images/single-product/5.jpg') }}" />
            </div>
            <span class="fs-7 tw-text-gray-500">هزینه ی ارسال : </span>
            <span class="fs-7 tw-text-gray-800 tw-font-semibold">رایگان</span>
        </div>
    </div>

    <div class="card mb-4 border-0">
        <div class="card-body">
            <div class="tw-center tw-w-max mb-4">
                <div class="tw-p-2 tw-py-1 tw-bg-amber-500 tw-text-white tw-rounded-md"><i class="fa-solid fa-truck-ramp-box"></i></div>
                <h6 class="tw-ml-5 tw-mr-2">کالا های خدمتی</h6>
                <div class="tw-p-2 tw-py-1 tw-text-xs tw-bg-gray-100 tw-rounded-md">4 کالا</div>
            </div>
            <div class="tw-flex tw-items-center mb-3">
                <img class="tw-size-24 tw-rounded-lg tw-mx-1.5" src="{{ Vite::asset('resources/images/single-product/1.jpg') }}" />
                <img class="tw-size-24 tw-rounded-lg tw-mx-1.5" src="{{ Vite::asset('resources/images/single-product/2.jpg') }}" />
                <img class="tw-size-24 tw-rounded-lg tw-mx-1.5" src="{{ Vite::asset('resources/images/single-product/3.jpg') }}" />
                <img class="tw-size-24 tw-rounded-lg tw-mx-1.5" src="{{ Vite::asset('resources/images/single-product/5.jpg') }}" />
            </div>
            <span class="fs-7 tw-text-gray-500">انتخاب زمان تحویل : </span>
            <div class="border px-3 py-1 pb-3 tw-rounded-lg mt-3">
                <ul class="nav nav-tabs" id="" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">
                            <span>شنبه</span>
                            <span>12</span>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">
                            <span>یکشنبه</span>
                            <span>13</span>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">
                            <span>دوشنبه</span>
                            <span>14</span>
                        </button>
                    </li>
                </ul>
                <form class="tab-content mt-4" id="myTabContent">
                    <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                        <div class="tw-center tw-w-max tw-flex-wrap">
                            <div class="form-check">
                                <input type="radio" class="form-check-input" id="A" name="ABC">
                                <label for="A">ساعت 9 </label>
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" id="B" name="ABC">
                                <label for="B">ساعت 12 </label>
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" id="C" name="ABC">
                                <label for="C">ساعت 3 </label>
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" id="D" name="ABC">
                                <label for="D">ساعت 6 </label>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                        <div class="tw-center tw-w-max tw-flex-wrap">
                            <div class="form-check">
                                <input type="radio" class="form-check-input" id="E" name="ABC">
                                <label for="E">ساعت 1 </label>
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" id="F" name="ABC">
                                <label for="F">ساعت 2 </label>
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" id="G" name="ABC">
                                <label for="G">ساعت 3 </label>
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" id="H" name="ABC">
                                <label for="H">ساعت 4 </label>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
                        <div class="tw-center tw-w-max tw-flex-wrap">
                            <div class="form-check">
                                <input type="radio" class="form-check-input" id="I" name="ABC">
                                <label for="I">ساعت 5 </label>
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" id="J" name="ABC">
                                <label for="J">ساعت 6 </label>
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" id="K" name="ABC">
                                <label for="K">ساعت 7 </label>
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" id="L" name="ABC">
                                <label for="L">ساعت 8</label>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="border p-3 mt-3 fs-7 tw-rounded-lg">
                قبل از تحویل کالا با شما تماس گرفته میشود
            </div>
        </div>
    </div>
</div>
@endsection