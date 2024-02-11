@extends('layouts.primary')

@section('title', 'محصول')

@section('content')
<div class="bigLoading">
<div class="spinner-border text-primary" role="status">
  <span class="visually-hidden">صبر کنید ...</span>
</div>
</div>
<div class="container" id="main-product">
    <x-breadcrumb />
    <div class="row" id="product-preview">
        <!-- <div class="mobile-review-product">
            <img src="https://placehold.co/600x400" alt="">
        </div> -->
        <div class="col-lg-5 tw-h-full lg:tw-sticky lg:tw-top-[5px] image-reviews">
            <div class="swiper productImage">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img class="tw-block tw-relative tw-w-full tw-h-full tw-object-cover " src="{{ Vite::asset('resources/images/single-product/1.jpg') }}" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img class="tw-block tw-relative tw-w-full tw-h-full tw-object-cover " src="{{ Vite::asset('resources/images/single-product/2.jpg') }}" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img class="tw-block tw-relative tw-w-full tw-h-full tw-object-cover " src="{{ Vite::asset('resources/images/single-product/3.jpg') }}" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img class="tw-block tw-relative tw-w-full tw-h-full tw-object-cover " src="{{ Vite::asset('resources/images/single-product/4.jpg') }}" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img class="tw-block tw-relative tw-w-full tw-h-full tw-object-cover " src="{{ Vite::asset('resources/images/single-product/5.jpg') }}" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img class="tw-block tw-relative tw-w-full tw-h-full tw-object-cover " src="{{ Vite::asset('resources/images/single-product/6.jpg') }}" alt="">
                    </div>
                </div>
                <div class="swiper-button-prev" id="product-preview-images-prev"></div>
                <div class="swiper-button-next" id="product-preview-images-next"></div>
            </div>
            <div class="tw-flex mt-3">
                <div thumbsSlider="" class="swiper tw-w-full productImages me-2">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img class="tw-block tw-relative tw-w-full tw-h-full tw-object-cover " src="{{ Vite::asset('resources/images/single-product/1.jpg') }}" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img class="tw-block tw-relative tw-w-full tw-h-full tw-object-cover " src="{{ Vite::asset('resources/images/single-product/2.jpg') }}" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img class="tw-block tw-relative tw-w-full tw-h-full tw-object-cover " src="{{ Vite::asset('resources/images/single-product/3.jpg') }}" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img class="tw-block tw-relative tw-w-full tw-h-full tw-object-cover " src="{{ Vite::asset('resources/images/single-product/4.jpg') }}" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img class="tw-block tw-relative tw-w-full tw-h-full tw-object-cover " src="{{ Vite::asset('resources/images/single-product/5.jpg') }}" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img class="tw-block tw-relative tw-w-full tw-h-full tw-object-cover " src="{{ Vite::asset('resources/images/single-product/6.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="swiper-button-prev" id="product-images-prev"></div>
                    <div class="swiper-button-next" id="product-images-next"></div>
                </div>
                <a href="#" class="tw-w-[20%] tw-text-sm tw-h-auto tw-bg-[#1e3b6f] hover:tw-text-white tw-text-white tw-flex tw-flex-col tw-items-center tw-justify-center">
                    <i class="fa-solid fa-play"></i>
                    <span>ویدئو</span>
                </a>
            </div>
        </div>
        <div class="col-lg-7 px-4 product-options mt-4 mt-lg-0">
            <h3 class="fw-bold">پرده ی جدید طرح کتان</h3>
            <div class="row">
                <div class="col-lg-7">
                    <div class="tw-text-emerald-500 tw-text-sm tw-flex tw-items-center">
                        <i class="fa-regular fa-circle-check tw-ml-2 tw-text-base"></i>
                        <span>موجود در انبار</span>
                    </div>
                    <div class="tw-flex tw-items-center">
                        <div class="stared" data-stars="4"></div>
                        <a class="tw-text-indigo-500 tw-mr-3">دیدگاه (500)</a>
                    </div>
                    <p class="tw-text-sm tw-leading-loose">
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته <a href="#product-tabs-card" class="tw-text-indigo-500">بیشتر ...</a>
                    </p>
                </div>
                <div class="col-lg-5">
                    <div class="card tw-rounded-lg border-0 tw-bg-gray-100">
                        <div class="card-body">
                            <div class="tw-flex tw-items-center tw-text-sm tw-justify-between pb-4">
                                <span class="tw-text-gray-500">تخفیف : </span>
                                <span class="badge tw-bg-red-500 tw-rounded-full">50%</span>
                            </div>
                            <div class="tw-flex tw-items-center tw-text-sm tw-justify-between tw-py-4 border-top">
                                <span class="tw-text-gray-500">زمان تحویل : </span>
                                <span>7 روز</span>
                            </div>
                            <div class="tw-flex tw-items-center tw-text-sm tw-justify-between tw-py-4 border-top">
                                <span class="tw-text-gray-500">قیمت : </span>
                                <span>12,000,000
                                    <svg style="width: 16px; height: 16px; fill: var(--undefined);">
                                        <use xlink:href="#toman"></use>
                                    </svg>
                                </span>
                            </div>
                            <div class="tw-w-full tw-pt-4 border-top tw-flex tw-items-center tw-justify-center">
                                <button class="btn custom-btn-primary tw-rounded-lg tw-text-sm tw-w-max">افزودن به سبد خرید</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- START: ACCORDION WITH SUB OPTION -->
            <div class="accordion subaccordion-product" id="subAcoordion2">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed first-accodrdion-btn" type="button" data-bs-toggle="collapse" data-bs-target="#first1" aria-expanded="false" aria-controls="collapseOne">
                            پرده رو
                        </button>
                    </h2>
                    <div id="first1" class="accordion-collapse collapse" data-bs-parent="#subAcoordion2">
                        <div class="accordion-body">
                            <div class="accordion accordion-product" id="accordionExample2">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne2x" aria-expanded="true" aria-controls="collapseOne">
                                            <div class="stepNum">
                                                <span>2</span>
                                                <i class="fa-regular fa-circle-exclamation"></i>
                                            </div>
                                            انتخاب سایز ، نوع نصب ، تعداد
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseOne2x" class="accordion-collapse collapse" data-bs-parent="#accordionExample2">
                                    <div class="accordion-body">
                                        <div class="alert alert-danger tw-text-sm">
                                            <i class="fa-regular fa-circle-exclamation"></i>
                                            لطفا نوع نصب را انتخاب کنید
                                        </div>
                                        <div class="box">
                                            <div class="tw-flex tw-items-center tw-justify-between mb-3">
                                                <span class="title">
                                                    نوع نصب
                                                    <a href="#"><i class="fa-regular fa-circle-question"></i></a>
                                                </span>
                                                <div class="product-option-next-prev">
                                                    <button class="product-option-prev"><i class="fa fa-chevron-right"></i></button>
                                                    <button class="product-option-next"><i class="fa fa-chevron-left"></i></button>
                                                </div>
                                            </div>
                                            <div class="swiper swiper-product-options">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <label class="product-type" for="BKJ23">
                                                            <img src="{{ Vite::asset('resources/images/product/inside.svg') }}" alt="">
                                                            <span>داخلی</span>
                                                            <input type="radio" name="XYZ" id="BKJ23">
                                                        </label>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <label class="product-type" for="JBKH12">
                                                            <img src="{{ Vite::asset('resources/images/product/outside.svg') }}" alt="">
                                                            <span>بیرونی</span>
                                                            <input type="radio" name="XYZ" id="JBKH12">
                                                        </label>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <label class="product-type" for="MLK12">
                                                            <img src="{{ Vite::asset('resources/images/product/inside.svg') }}" alt="">
                                                            <span>داخلی</span>
                                                            <input type="radio" name="XYZ" id="MLK12">
                                                        </label>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <label class="product-type" for="BJK523">
                                                            <img src="{{ Vite::asset('resources/images/product/outside.svg') }}" alt="">
                                                            <span>بیرونی</span>
                                                            <input type="radio" name="XYZ" id="BJK523">
                                                        </label>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <label class="product-type" for="MBN21">
                                                            <img src="{{ Vite::asset('resources/images/product/inside.svg') }}" alt="">
                                                            <span>داخلی</span>
                                                            <input type="radio" name="XYZ" id="MBN21">
                                                        </label>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <label class="product-type" for="SGV214">
                                                            <img src="{{ Vite::asset('resources/images/product/outside.svg') }}" alt="">
                                                            <span>بیرونی</span>
                                                            <input type="radio" name="XYZ" id="SGV214">
                                                        </label>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <label class="product-type" for="DNHG12">
                                                            <img src="{{ Vite::asset('resources/images/product/inside.svg') }}" alt="">
                                                            <span>داخلی</span>
                                                            <input type="radio" name="XYZ" id="DNHG12">
                                                        </label>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <label class="product-type" for="SFBD">
                                                            <img src="{{ Vite::asset('resources/images/product/outside.svg') }}" alt="">
                                                            <span>بیرونی</span>
                                                            <input type="radio" name="XYZ" id="SFBD">
                                                        </label>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <label class="product-type" for="DNGF2">
                                                            <img src="{{ Vite::asset('resources/images/product/inside.svg') }}" alt="">
                                                            <span>داخلی</span>
                                                            <input type="radio" name="XYZ" id="DNGF2">
                                                        </label>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <label class="product-type" for="DFGN21">
                                                            <img src="{{ Vite::asset('resources/images/product/outside.svg') }}" alt="">
                                                            <span>بیرونی</span>
                                                            <input type="radio" name="XYZ" id="DFGN21">
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box">
                                            <div class="tw-flex tw-items-center tw-justify-between mb-3">
                                                <span class="title">
                                                    طول و عرض
                                                    <a href="#"><i class="fa-regular fa-circle-question"></i></a>
                                                </span>
                                                <div class="product-option-next-prev">
                                                    <button class="product-option-prev"><i class="fa fa-chevron-right"></i></button>
                                                    <button class="product-option-next"><i class="fa fa-chevron-left"></i></button>
                                                </div>
                                            </div>
                                            <div class="swiper swiper-product-options">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <div class="product-type" for="">
                                                            <img src="{{ Vite::asset('resources/images/product/Default_Width.jpg') }}" alt="">
                                                            <div class="tw-flex py-1 tw-items-center tw-justify-between my-1 body">
                                                                <span>عرض(متر)</span>
                                                                <input class="form-control" type="number" value="5">
                                                            </div>
                                                            <input type="radio">
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="product-type" for="">
                                                            <img src="{{ Vite::asset('resources/images/product/Default_Height.jpg') }}" alt="">
                                                            <div class="tw-flex py-1 tw-items-center tw-justify-between my-1 body">
                                                                <span>طول(متر)</span>
                                                                <input class="form-control" type="number" value="8" placeholder="عدد">
                                                            </div>
                                                            <input type="radio">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed first-accodrdion-btn" type="button" data-bs-toggle="collapse" data-bs-target="#second2" aria-expanded="false" aria-controls="second">
                            پرده زیر
                        </button>
                    </h2>
                    <div id="second2" class="accordion-collapse collapse" data-bs-parent="#subAcoordion2">
                        <div class="accordion-body">
                            آیتم های نمونه پایین در اینجا قرار میگیرد
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: ACCORDION WITH SUB OPTION -->

            <!-- START: OPTION -->
            <div class="accordion accordion-product" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <div class="stepNum">
                                <span>1</span>
                                <i class="fa-regular fa-circle-exclamation"></i>
                            </div>
                            انتخاب رنگ
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="alert alert-danger tw-text-sm">
                                <i class="fa-regular fa-circle-exclamation"></i>
                                لطفا یک رنگ را انتخاب کنید
                            </div>
                            <div class="box">
                                <span class="title">کالکشن کلاسیک</span>
                                <div class="row mt-2 g-3">
                                    <div class="col-2">
                                        <label class="product-template" for="m1">
                                            <img src="{{ Vite::asset('resources/images/materials/1.jpg') }}" alt="">
                                            <span>کتان</span>
                                            <input type="radio" name="material" id="m1">
                                        </label>
                                    </div>
                                    <div class="col-2">
                                        <label class="product-template">
                                            <img src="{{ Vite::asset('resources/images/materials/2.jpg') }}" alt="">
                                            <span>حریر</span>
                                            <input type="radio" name="material" id="m2">
                                        </label>
                                    </div>
                                    <div class="col-2">
                                        <label class="product-template">
                                            <img src="{{ Vite::asset('resources/images/materials/3.jpg') }}" alt="">
                                            <span>مخمل</span>
                                            <input type="radio" name="material" id="m3">
                                        </label>
                                    </div>
                                    <div class="col-2">
                                        <label class="product-template">
                                            <img src="{{ Vite::asset('resources/images/materials/4.jpg') }}" alt="">
                                            <span>هازان</span>
                                            <input type="radio" name="material" id="m4">
                                        </label>
                                    </div>
                                    <div class="col-2">
                                        <label class="product-template">
                                            <img src="{{ Vite::asset('resources/images/materials/5.jpg') }}" alt="">
                                            <span>مخمل پتینه</span>
                                            <input type="radio" name="material" id="m5">
                                        </label>
                                    </div>
                                    <div class="col-2">
                                        <label class="product-template">
                                            <img src="{{ Vite::asset('resources/images/materials/6.jpg') }}" alt="">
                                            <span>کتان مخمل</span>
                                            <input type="radio" name="material" id="m6">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: OPTION -->

            <!-- START: OPTION -->
            <div class="accordion accordion-product" id="accordionExample2">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne2" aria-expanded="true" aria-controls="collapseOne">
                            <div class="stepNum">
                                <span>3</span>
                                <i class="fa-regular fa-circle-exclamation"></i>
                            </div>
                            انتخاب سایز ، نوع نصب ، تعداد
                        </button>
                    </h2>
                </div>
                <div id="collapseOne2" class="accordion-collapse collapse" data-bs-parent="#accordionExample2">
                    <div class="accordion-body">
                        <div class="alert alert-danger tw-text-sm">
                            <i class="fa-regular fa-circle-exclamation"></i>
                            لطفا نوع نصب را انتخاب کنید
                        </div>
                        <div class="mb-3 tw-w-36">
                            <label for="count" class="title form-label">
                                تعداد
                                <a href="#"><i class="fa-regular fa-circle-question"></i></a>
                            </label>
                            <input type="number" class="form-control tw-w-full" min="0" value="1" id="count" placeholder="تعداد">
                        </div>
                        <div class="box">
                            <div class="tw-flex tw-items-center tw-justify-between mb-3">
                                <span class="title">
                                    نوع نصب
                                    <a href="#"><i class="fa-regular fa-circle-question"></i></a>
                                </span>
                                <div class="product-option-next-prev">
                                    <button class="product-option-prev"><i class="fa fa-chevron-right"></i></button>
                                    <button class="product-option-next"><i class="fa fa-chevron-left"></i></button>
                                </div>
                            </div>
                            <div class="swiper swiper-product-options">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <label class="product-type" for="BKJ23">
                                            <img src="{{ Vite::asset('resources/images/product/inside.svg') }}" alt="">
                                            <span>داخلی</span>
                                            <input type="radio" name="XYZ" id="BKJ23">
                                        </label>
                                    </div>
                                    <div class="swiper-slide">
                                        <label class="product-type" for="JBKH12">
                                            <img src="{{ Vite::asset('resources/images/product/outside.svg') }}" alt="">
                                            <span>بیرونی</span>
                                            <input type="radio" name="XYZ" id="JBKH12">
                                        </label>
                                    </div>
                                    <div class="swiper-slide">
                                        <label class="product-type" for="MLK12">
                                            <img src="{{ Vite::asset('resources/images/product/inside.svg') }}" alt="">
                                            <span>داخلی</span>
                                            <input type="radio" name="XYZ" id="MLK12">
                                        </label>
                                    </div>
                                    <div class="swiper-slide">
                                        <label class="product-type" for="BJK523">
                                            <img src="{{ Vite::asset('resources/images/product/outside.svg') }}" alt="">
                                            <span>بیرونی</span>
                                            <input type="radio" name="XYZ" id="BJK523">
                                        </label>
                                    </div>
                                    <div class="swiper-slide">
                                        <label class="product-type" for="MBN21">
                                            <img src="{{ Vite::asset('resources/images/product/inside.svg') }}" alt="">
                                            <span>داخلی</span>
                                            <input type="radio" name="XYZ" id="MBN21">
                                        </label>
                                    </div>
                                    <div class="swiper-slide">
                                        <label class="product-type" for="SGV214">
                                            <img src="{{ Vite::asset('resources/images/product/outside.svg') }}" alt="">
                                            <span>بیرونی</span>
                                            <input type="radio" name="XYZ" id="SGV214">
                                        </label>
                                    </div>
                                    <div class="swiper-slide">
                                        <label class="product-type" for="DNHG12">
                                            <img src="{{ Vite::asset('resources/images/product/inside.svg') }}" alt="">
                                            <span>داخلی</span>
                                            <input type="radio" name="XYZ" id="DNHG12">
                                        </label>
                                    </div>
                                    <div class="swiper-slide">
                                        <label class="product-type" for="SFBD">
                                            <img src="{{ Vite::asset('resources/images/product/outside.svg') }}" alt="">
                                            <span>بیرونی</span>
                                            <input type="radio" name="XYZ" id="SFBD">
                                        </label>
                                    </div>
                                    <div class="swiper-slide">
                                        <label class="product-type" for="DNGF2">
                                            <img src="{{ Vite::asset('resources/images/product/inside.svg') }}" alt="">
                                            <span>داخلی</span>
                                            <input type="radio" name="XYZ" id="DNGF2">
                                        </label>
                                    </div>
                                    <div class="swiper-slide">
                                        <label class="product-type" for="DFGN21">
                                            <img src="{{ Vite::asset('resources/images/product/outside.svg') }}" alt="">
                                            <span>بیرونی</span>
                                            <input type="radio" name="XYZ" id="DFGN21">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box">
                            <div class="tw-flex tw-items-center tw-justify-between mb-3">
                                <span class="title">
                                    طول و عرض
                                    <a href="#"><i class="fa-regular fa-circle-question"></i></a>
                                </span>
                                <div class="product-option-next-prev">
                                    <button class="product-option-prev"><i class="fa fa-chevron-right"></i></button>
                                    <button class="product-option-next"><i class="fa fa-chevron-left"></i></button>
                                </div>
                            </div>
                            <div class="swiper swiper-product-options">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="product-type" for="">
                                            <img src="{{ Vite::asset('resources/images/product/Default_Width.jpg') }}" alt="">
                                            <div class="tw-flex py-1 tw-items-center tw-justify-between my-1 body">
                                                <span>عرض(متر)</span>
                                                <input class="form-control " type="number" value="5">
                                            </div>
                                            <input type="radio">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product-type" for="">
                                            <img src="{{ Vite::asset('resources/images/product/Default_Height.jpg') }}" alt="">
                                            <div class="tw-flex py-1 tw-items-center tw-justify-between my-1 body">
                                                <span>طول(متر)</span>
                                                <input class="form-control " type="number" value="8" placeholder="عدد">
                                            </div>
                                            <input type="radio">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- START: OPTION -->
            <div class="accordion accordion-product" id="accordionExample3">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne3" aria-expanded="true" aria-controls="collapseOne">
                            <div class="stepNum">
                                <span>4</span>
                                <i class="fa-regular fa-circle-exclamation"></i>
                            </div>
                            انتخاب قابلیت
                        </button>
                    </h2>
                    <div id="collapseOne3" class="accordion-collapse collapse" data-bs-parent="#accordionExample3">
                        <div class="accordion-body">
                            <div class="alert alert-danger tw-text-sm">
                                <i class="fa-regular fa-circle-exclamation"></i>
                                لطفا نوع هد ریل را انتخاب کنید
                            </div>
                            <div class="box">
                                <div class="tw-flex tw-items-center tw-justify-between mb-3">
                                    <span class="title">
                                        نوع هد ریل
                                        <a href="#"><i class="fa-regular fa-circle-question"></i></a>
                                    </span>
                                    <div class="product-option-next-prev">
                                        <button class="product-option-prev"><i class="fa fa-chevron-right"></i></button>
                                        <button class="product-option-next"><i class="fa fa-chevron-left"></i></button>
                                    </div>
                                </div>
                                <div class="swiper swiper-product-options">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <label class="product-type" for="">
                                                <img src="{{ Vite::asset('resources/images/product/standard-headrail.jpg') }}" alt="">
                                                <span>داخلی</span>
                                                <input type="radio">
                                            </label>
                                        </div>
                                        <div class="swiper-slide">
                                            <label class="product-type" for="">
                                                <img src="{{ Vite::asset('resources/images/product/2-on-1-headrail.jpg') }}" alt="">
                                                <span>بیرونی</span>
                                                <input type="radio">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: OPTION -->

            <!-- START: OPTION -->
            <div class="accordion accordion-product" id="accordionExample4">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne5" aria-expanded="true" aria-controls="collapseOne">
                            <div class="stepNum">
                                <span>5</span>
                                <i class="fa-regular fa-circle-exclamation"></i>
                            </div>
                            انتخاب حالت بالابر
                        </button>
                    </h2>
                    <div id="collapseOne5" class="accordion-collapse collapse" data-bs-parent="#accordionExample4">
                        <div class="accordion-body">
                            <div class="alert alert-danger tw-text-sm">
                                <i class="fa-regular fa-circle-exclamation"></i>
                                لطفا حالت بالابر را انتخاب کنید
                            </div>
                            <div class="box">
                                <div class="tw-flex tw-items-center tw-justify-between mb-3">
                                    <span class="title">
                                        حالت بالابر
                                        <a href="#"><i class="fa-regular fa-circle-question"></i></a>
                                    </span>
                                    <div class="product-option-next-prev">
                                        <button class="product-option-prev"><i class="fa fa-chevron-right"></i></button>
                                        <button class="product-option-next"><i class="fa fa-chevron-left"></i></button>
                                    </div>
                                </div>
                                <div class="swiper swiper-product-options">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide tw-h-auto">
                                            <label class="product-type" for="qwerty">
                                                <div class="tw-relative">
                                                    <img src="https://placehold.co/138" alt="">
                                                    <div class="tw-absolute -tw-bottom-2 tw-z-20 tw-right-0 tw-flex tw-items-center tw-w-full tw-px-1">
                                                        <a href="" class="tw-text-sm tw-p-1 tw-py-0 tw-rounded-s-sm tw-bg-white border tw-border-indigo-500 tw-text-indigo-500 tw-ml-1">
                                                            <i class="fa-solid fa-play"></i>
                                                        </a>
                                                        <a href="" class="tw-text-sm tw-p-1 tw-py-0 tw-rounded-s-sm tw-bg-white border tw-border-indigo-500 tw-text-indigo-500 tw-ml-1">
                                                            <i class="fa-solid fa-arrow-up-right-from-square"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <input type="radio" name="xyzabc" id="qwerty">
                                                <div class="tw-flex py-1 tw-items-center tw-justify-between my-1 body">
                                                    <div class="center-between">
                                                        <span>زنجیر و محافظ</span>
                                                        <a href="#"><i class="fa-solid fa-circle-info"></i></a>
                                                    </div>
                                                    <span class="tw-font-semibold tw-text-black tw-mt-auto">رایگان</span>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="swiper-slide tw-h-auto">
                                            <label class="product-type" for="qwerty1">
                                                <div class="tw-relative">
                                                    <img src="https://placehold.co/138" alt="">
                                                    <div class="tw-absolute -tw-bottom-2 tw-z-20 tw-right-0 tw-flex tw-items-center tw-w-full tw-px-1">
                                                        <a href="" class="tw-text-sm tw-p-1 tw-py-0 tw-rounded-s-sm tw-bg-white border tw-border-indigo-500 tw-text-indigo-500 tw-ml-1">
                                                            <i class="fa-solid fa-play"></i>
                                                        </a>
                                                        <a href="" class="tw-text-sm tw-p-1 tw-py-0 tw-rounded-s-sm tw-bg-white border tw-border-indigo-500 tw-text-indigo-500 tw-ml-1">
                                                            <i class="fa-solid fa-arrow-up-right-from-square"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <input type="radio" name="xyzabc" id="qwerty1">
                                                <div class="tw-flex py-1 tw-items-center tw-justify-between my-1 body">
                                                    <div class="center-between">
                                                        <span>بی سیم</span>
                                                        <a href="#"><i class="fa-solid fa-circle-info"></i></a>
                                                    </div>
                                                    <span class="tw-font-semibold tw-text-black tw-mt-auto">1,000,000
                                                        <svg style="width: 16px; height: 16px; fill: var(--undefined);" class="tw-inline-block">
                                                            <use xlink:href="#toman"></use>
                                                        </svg>
                                                    </span>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="swiper-slide tw-h-auto">
                                            <label class="product-type" for="qwerty1">
                                                <div class="tw-relative">
                                                    <img src="https://placehold.co/138" alt="">
                                                    <div class="tw-absolute -tw-bottom-2 tw-z-20 tw-right-0 tw-flex tw-items-center tw-w-full tw-px-1">
                                                        <a href="" class="tw-text-sm tw-p-1 tw-py-0 tw-rounded-s-sm tw-bg-white border tw-border-indigo-500 tw-text-indigo-500 tw-ml-1">
                                                            <i class="fa-solid fa-play"></i>
                                                        </a>
                                                        <a href="" class="tw-text-sm tw-p-1 tw-py-0 tw-rounded-s-sm tw-bg-white border tw-border-indigo-500 tw-text-indigo-500 tw-ml-1">
                                                            <i class="fa-solid fa-arrow-up-right-from-square"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <input type="radio" name="xyzabc" id="qwerty1">
                                                <div class="tw-flex py-1 tw-items-center tw-justify-between my-1 body">
                                                    <div class="center-between">
                                                        <span>همراه با موتور</span>
                                                        <a href="#"><i class="fa-solid fa-circle-info"></i></a>
                                                    </div>
                                                    <div class="tw-w-full tw-px-2 tw-mt-2">
                                                        <span>
                                                            کنترل
                                                            <i class="fa-solid fa-circle-info tw-text-xs tw-text-indigo-500"></i>
                                                        </span>
                                                        <select class="form-select tw-text-xs" name="" id="">
                                                            <option value="" selected>بله</option>
                                                            <option value="">خیر</option>
                                                        </select>
                                                    </div>
                                                    <div class="tw-w-full tw-px-2 tw-mt-2">
                                                        <span>
                                                            اتصال با وای فای
                                                            <i class="fa-solid fa-circle-info tw-text-xs tw-text-indigo-500"></i>
                                                        </span>
                                                        <select class="form-select tw-text-xs" name="" id="">
                                                            <option value="">بله</option>
                                                            <option value="" selected>خیر</option>
                                                        </select>
                                                    </div>
                                                    <span class="tw-font-semibold tw-text-black tw-mt-auto">1,000,000
                                                        <svg style="width: 16px; height: 16px; fill: var(--undefined);" class="tw-inline-block">
                                                            <use xlink:href="#toman"></use>
                                                        </svg>
                                                    </span>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: OPTION -->

            <!-- START: WARRANTY -->
            <div class="accordion accordion-product" id="accordionExample4">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne4" aria-expanded="true" aria-controls="collapseOne">
                            <div class="stepNum">
                                <span>6</span>
                                <i class="fa-regular fa-circle-exclamation"></i>
                            </div>
                            <span>انتخاب گارانتی</span>
                        </button>
                    </h2>
                    <div id="collapseOne4" class="accordion-collapse collapse" data-bs-parent="#accordionExample4">
                        <div class="accordion-body">
                            <a class="ms-3 tw-text-xs tw-underline tw-text-left tw-w-full tw-flex tw-justify-end" href="#">راهنما</a>
                            <div class="alert alert-danger tw-text-sm">
                                <i class="fa-regular fa-circle-exclamation"></i>
                                لطفا مدت زمان گارانتی را انتخاب کنید
                            </div>
                            <div class="box">
                                <div class="row mt-2">
                                    <div class="tw-hidden lg:tw-block col-lg-2">
                                        <img class="tw-w-[100px] tw-h-[100px]" src="{{ Vite::asset('resources/images/icon_warranty.png') }}" alt="">
                                    </div>
                                    <div class="col-12 col-lg-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="warranty" id="warranty1">
                                            <div>
                                                <label class="form-check-label" for="warranty1">
                                                    3 سال گارانتی محدود
                                                </label>
                                                <span class="tw-text-indigo-500 ms-3">رایگان</span>
                                            </div>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="warranty" id="warranty2" checked>
                                            <div>
                                                <label class="form-check-label" for="warranty2">
                                                    5 سال گارانتی محدود
                                                </label>
                                                <span class="tw-text-indigo-500 ms-3">60 هزارتومان</span>
                                            </div>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="warranty" id="warranty3" checked>
                                            <div>
                                                <label class="form-check-label" for="warranty3">
                                                    5 سال گارانتی نامحدود
                                                </label>
                                                <span class="tw-text-indigo-500 ms-2">120 هزارتومان</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: WARRANTY -->

            <div class="alert tw-bg-indigo-200 tw-text-indigo-700 tw-flex tw-items-center tw-justify-between tw-border-r-[3px] tw-py-2 tw-border-r-indigo-400">
                <div class="tw-flex tw-items-center">
                    <div class="tw-rounded-full tw-flex tw-items-center tw-justify-center">
                        <i class="fa-duotone fa-screwdriver-wrench"></i>
                    </div>
                    <label class="form-check-label tw-mr-3" for="installer">
                        آیا به نصاب نیاز دارید ؟
                    </label>
                </div>
                <div class="installer_product">
                    <label for="installer_yes">
                        <span>بله</span>
                        <input type="radio" name="installer" id="installer_yes">
                    </label>
                    <label for="installer_no">
                        <span>خیر</span>
                        <input type="radio" name="installer" id="installer_no">
                    </label>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="mt-5" id="product-tabs-card">
    <div class="container">
        <ul class="nav nav-tabs nav-pills" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#specifications" type="button" role="tab" aria-controls="specifications" aria-selected="true">مشخصات</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#description" type="button" role="tab" aria-controls="description" aria-selected="false">توضیحات</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#comments" type="button" role="tab" aria-controls="comments" aria-selected="false">دیدگاه ها (2)</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#measureguide" type="button" role="tab" aria-controls="comments" aria-selected="false">راهنمای اندازه گیری و نصب</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#video" type="button" role="tab" aria-controls="comments" aria-selected="false">ویدئو</button>
            </li>
        </ul>
    </div>
</div>

<div class="container">
    <div class="tab-content mt-3" id="product-tab">
        <div class="tab-pane fade show active " id="specifications" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
            <div class="container">
                <span class="tw-text-slate-700 tw-text-lg tw-font-semibold">مشخصات کلی</span>
                <div class="row">
                    <div class="col-6">
                        <!-- START:DESCRIPTION -->
                        <div class="tw-mt-3">
                            <span class="fs-6 fw-bold">توضیحات</span>
                            <p class="fs-7"> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p>
                        </div>
                        <!-- END: DESCRIPTION -->

                        <!-- START: FEATURES -->
                        <div class="box mt-3">
                            <span class="fs-7 fw-bold">ویژگی ها</span>
                            <ul class="tab-pane-list">
                                <li>ویژگی 1</li>
                                <li>ویژگی 2</li>
                                <li>ویژگی 3</li>
                                <li>ویژگی 4</li>
                                <li>ویژگی 5</li>
                            </ul>
                        </div>
                        <!-- END: FEATURES -->

                        <!-- START: FEATURES -->
                        <div class="box mt-3">
                            <span class="fs-7 fw-bold">انتخاب ها</span>
                            <ul class="tab-pane-list">
                                <li>انتخاب 1</li>
                                <li>انتخاب 2</li>
                                <li>انتخاب 3</li>
                                <li>انتخاب 4</li>
                                <li>انتخاب 5</li>
                            </ul>
                        </div>
                        <!-- END: FEATURES -->
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade tw-bg-gray-50 tw-rounded-xg tw-p-5" id="description" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
            <p>
                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
            </p>
            <figure>
                <img src="{{ Vite::asset('resources/images/auth2.jpg') }}" alt="Trulli">
                <figcaption>Fig.1 - Trulli, Puglia, Italy.</figcaption>
            </figure>
            <p>
                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
            </p>
        </div>
        <div class="tab-pane fade lg:tw-px-20" id="comments" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
            <span class="tw-text-slate-700 tw-text-lg tw-font-semibold">امتیاز و دیدگاه کاربران</span>
            <div class="row mt-3">
                <div class="col-12 tw-flex tw-flex-row ">
                    <div class="row tw-w-full">
                        <div class="col-4 col-lg-3">
                            <div class="tw-flex tw-flex-col tw-justify-start tw-w-max tw-h-auto items-ce">
                                <span>امتیاز محصول</span>
                                <div class="mt-4">
                                    <span class=" tw-text-slate-700 tw-text-4xl tw-font-black">4.5 / 5</span>
                                </div>
                                <div>
                                    <div class="stared" data-stars="4" data-no-label>
                                        <div class="star-container tw-text-yellow-500 tw-text-sm"></div>
                                    </div>
                                </div>
                                <div class="">
                                    <span class="tw-text-xs tw-text-gray-400">دیدگاه (500)</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-8 col-lg-4">
                            <div class="tw-w-full tw-mr-4 tw-h-full tw-flex tw-flex-col tw-justify-between tw-space-y-4">
                                <div class="tw-flex tw-flex-row tw-items-center">
                                    <span class="tw-text-xs tw-text-gray-500 tw-w-[53px] tw-text-nowrap">5 ستاره</span>
                                    <div class="progress rating tw-h-4 tw-w-full tw-mx-2" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar rating" style="width: 80%"></div>
                                    </div>
                                    <span class="tw-text-xs tw-text-gray-600 tw-font-semibold">80%</span>
                                </div>
                                <div class="tw-flex tw-flex-row tw-items-center">
                                    <span class="tw-text-xs tw-text-gray-500 tw-w-[53px] tw-text-nowrap">4 ستاره</span>
                                    <div class="progress rating tw-h-4 tw-w-full tw-mx-2" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar rating" style="width: 60%"></div>
                                    </div>
                                    <span class="tw-text-xs tw-text-gray-600 tw-font-semibold">60%</span>
                                </div>
                                <div class="tw-flex tw-flex-row tw-items-center">
                                    <span class="tw-text-xs tw-text-gray-500 tw-w-[53px] tw-text-nowrap">3 ستاره</span>
                                    <div class="progress rating tw-h-4 tw-w-full tw-mx-2" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar rating" style="width: 40%"></div>
                                    </div>
                                    <span class="tw-text-xs tw-text-gray-600 tw-font-semibold">40%</span>
                                </div>
                                <div class="tw-flex tw-flex-row tw-items-center">
                                    <span class="tw-text-xs tw-text-gray-500 tw-w-[53px] tw-text-nowrap">2 ستاره</span>
                                    <div class="progress rating tw-h-4 tw-w-full tw-mx-2" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar rating" style="width: 30%"></div>
                                    </div>
                                    <span class="tw-text-xs tw-text-gray-600 tw-font-semibold">30%</span>
                                </div>
                                <div class="tw-flex tw-flex-row tw-items-center">
                                    <span class="tw-text-xs tw-text-gray-500 tw-w-[53px] tw-text-nowrap"> 1 ستاره</span>
                                    <div class="progress rating tw-h-4 tw-w-full tw-mx-2" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar rating" style="width: 20%"></div>
                                    </div>
                                    <span class="tw-text-xs tw-text-gray-600 tw-font-semibold">20%</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4 offset-lg-1 mt-4 mt-lg-0">
                            <div class="row tw-justify-end">
                                <div class="col-6">
                                    <div class="mb-3 tw-text-sm">
                                        <label for="sortby" class="form-label">مرتب کردن بر اساس</label>
                                        <select class="form-select" name="ReviewSortSelect" id="sortby">
                                            <option value="">اخیرا</option>
                                            <option value="">زیاد به کم</option>
                                            <option value="">کم به زیاد</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3 tw-text-sm">
                                        <label for="sortby" class="form-label">فیلتر کردن بر اساس</label>
                                        <select class="form-select" name="ReviewFilterSelect" id="sortby">
                                            <option value="">تمام دیدگاه ها</option>
                                            <option value="">دیدگاه همراه با متن</option>
                                            <option value="">دیدگاه همراه با عکس</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <input class="form-control" type="text" placeholder="جستجوی کلمات کلیدی" name="ReviewSearch">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="my-3">
                    <span>عکس های مشتریان</span>
                </div>
                <div class="swiper product-review-images">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img class="tw-block tw-relative tw-w-[90%] tw-h-full tw-object-cover " src="{{ Vite::asset('resources/images/single-product/1.jpg') }}" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img class="tw-block tw-relative tw-w-[90%] tw-h-full tw-object-cover " src="{{ Vite::asset('resources/images/single-product/2.jpg') }}" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img class="tw-block tw-relative tw-w-[90%] tw-h-full tw-object-cover " src="{{ Vite::asset('resources/images/single-product/3.jpg') }}" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img class="tw-block tw-relative tw-w-[90%] tw-h-full tw-object-cover " src="{{ Vite::asset('resources/images/single-product/4.jpg') }}" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img class="tw-block tw-relative tw-w-[90%] tw-h-full tw-object-cover " src="{{ Vite::asset('resources/images/single-product/5.jpg') }}" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img class="tw-block tw-relative tw-w-[90%] tw-h-full tw-object-cover " src="{{ Vite::asset('resources/images/single-product/6.jpg') }}" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img class="tw-block tw-relative tw-w-[90%] tw-h-full tw-object-cover " src="{{ Vite::asset('resources/images/single-product/1.jpg') }}" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img class="tw-block tw-relative tw-w-[90%] tw-h-full tw-object-cover " src="{{ Vite::asset('resources/images/single-product/2.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-rating-box mt-3">
                <div class="col-5 col-lg-2">
                    <div class="tw-flex tw-items-start tw-flex-col tw-ml-2 lg:tw-ml-4 tw-space-y-2">
                        <div class="rating-box">
                            <span class="rating-title">امتیاز 1</span>
                            <div class="stared" data-stars="4" data-no-label></div>
                        </div>
                        <div class="rating-box">
                            <span class="rating-title">امتیاز 2</span>
                            <div class="stared" data-stars="4" data-no-label></div>
                        </div>
                        <div class="rating-box">
                            <span class="rating-title">امتیاز 3</span>
                            <div class="stared" data-stars="4" data-no-label></div>
                        </div>
                        <div class="rating-box">
                            <span class="rating-title">امتیاز 4</span>
                            <div class="stared" data-stars="4" data-no-label></div>
                        </div>
                        <div class="rating-box">
                            <span class="rating-title">امتیاز 5</span>
                            <div class="stared" data-stars="4" data-no-label></div>
                        </div>
                    </div>
                </div>
                <div class="col-7 col-lg-6">
                    <span class="tw-text-base tw-text-gray-800 tw-font-semibold">فرهاد باقری</span>
                    <p class="tw-text-sm tw-leading-loose">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد</p>
                </div>
            </div>
            <hr>
        </div>
        <div class="tab-pane" id="measureguide" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
            این یک قسمت برای توضیحات نصب و اندازه گیری می باشد که توسط ادمین قابل ویرایش است
        </div>
        <div class="tab-pane" id="video" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
            <span class="tw-text-slate-700 tw-text-lg tw-font-semibold">ویدئو ها</span>
            <!-- STAR: VIDEO CONTAINER -->
            <div class="lg:tw-w-3/5 tw-mx-auto tw-mt-4">
                <!-- START: VIDEO -->
                <video class="cs-player" playsinline controls>
                    <source src="{{Vite::asset('resources/videos/curtain.mp4')}}" type="video/mp4" />
                </video>
                <!-- END: VIDEO -->
            </div>
            <!-- END: VIDEO CONTAINER -->
        </div>
    </div>
</div>

<div class="tw-z-[9999]">
    <!-- START:STICKY -->
    <div class="sticky-bottom active">
        <div class="container tw-px-2 lg:tw-px-40">
            <div class="tw-w-full tw-justify-between tw-flex tw-items-center">
                <div class="tw-flex tw-items-start tw-flex-col">
                    <div class="tw-text-base">
                        <span class="tw-text-gray-600">
                            <i class="fa-solid fa-tag"></i>
                            قیمت : </span>
                        <span class="tw-font-semibold tw-text-gray-700">1,200,000 تومان</span>
                    </div>
                    <div class="tw-text-base">
                        <span class="tw-text-gray-600">
                            <i class="fa-solid fa-truck-clock"></i>
                            زمان تحویل: </span>
                        <span class="tw-font-semibold tw-text-gray-700">7 روز </span>
                    </div>
                </div>
                <div>
                    <button class="btn custom-btn-primary tw-rounded-lg tw-py-2">
                        <i class="fa-solid fa-basket-shopping"></i>
                        افزودن به سبد خرید</button>
                </div>
            </div>
        </div>
    </div>
    <!-- END:STICKY -->

    <!-- START: STICKY -->
    <div class="sticky-bottom">
        <div class="container tw-px-2 lg:tw-px-40">
            <div class="tw-w-full tw-justify-between tw-flex tw-items-center">
                <div class="tw-flex tw-items-start tw-flex-col">
                    <div class="tw-text-base">
                        <span class="tw-text-gray-600">
                            <i class="fa-duotone fa-screwdriver-wrench tw-ml-3"></i>
                            آیا به خدمت نصب نیاز دارید ؟
                        </span>
                    </div>
                </div>
                <div class="installer_product">
                    <label for="installer_yes">
                        <span>بله</span>
                        <input type="radio" name="installer2" id="installer_yes">
                    </label>
                    <label for="installer_no">
                        <span>خیر</span>
                        <input type="radio" name="installer2" id="installer_no">
                    </label>
                </div>
            </div>
        </div>
    </div>
    <!-- END: STICKY -->
</div>

<a href="#firstPixel" id="backtotop">
    <i class="fa-solid fa-arrow-up"></i>
</a>

@endsection