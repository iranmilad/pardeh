<!-- notice: you can use random id for label and input. -->
<!-- notice: you can use random id for label and input. -->
<!-- notice: you can use random id for label and input. -->

<!-- use data-real="true" if you want to get calculated price and time after changing items. use in input -->
<!-- use data-real="true" if you want to get calculated price and time after changing items. use in input -->
<!-- use data-real="true" if you want to get calculated price and time after changing items. use in input -->

<!-- use checked in input to set default  -->

<form id="product-options">
    @csrf
    <!-- START: LOOP -->
    <!-- START: ACCORDION WITH SUB OPTION -->
    <!-- <div class="accordion subaccordion-product" id="subAcoordion2">
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed first-accodrdion-btn" type="button" data-bs-toggle="collapse" data-bs-target="#first1" aria-expanded="false" aria-controls="collapseOne">
                    پرده رو
                </button>
            </h2>
            <div id="first1" class="accordion-collapse collapse" data-bs-parent="#subAcoordion2">
                <div class="accordion-body">
                    <div class="accordion accordion-product" id="accordionExample">
                        START: COLOR
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne123" aria-expanded="true" aria-controls="collapseOne123">
                                    <div class="stepNum">
                                        <span>1</span>
                                        <i class="fa-regular fa-circle-exclamation"></i>
                                    </div>
                                    انتخاب رنگ
                                </button>
                            </h2>
                            <div id="collapseOne123" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="alert alert-danger tw-text-sm">
                                        <i class="fa-regular fa-circle-exclamation"></i>
                                        لطفا یک رنگ را انتخاب کنید
                                    </div>
                                    <div class="box">
                                        <div class="tw-flex tw-items-center tw-justify-between mb-3">
                                            <span class="title">
                                                رنگ کلاسیک
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
                                                    <label class="product-template" for="m1">
                                                        <svg width="100%" height="135" xmlns="http://www.w3.org/2000/svg">
                                                            <rect width="100%" height="100%" fill="#334155" />
                                                        </svg>
                                                        <span>خاکستری</span>
                                                        <input type="radio" checked data-real="true" name="color[item]" value="#334155" id="m1">
                                                    </label>
                                                </div>
                                                <div class="swiper-slide">
                                                    <label class="product-template" for="m2">
                                                        <svg width="100%" height="135" xmlns="http://www.w3.org/2000/svg">
                                                            <rect width="100%" height="100%" fill="#ef4444" />
                                                        </svg>
                                                        <span>قرمز</span>
                                                        <input type="radio" data-real="true" name="color[item]" value="#ef4444" id="m2">
                                                    </label>
                                                </div>
                                                <div class="swiper-slide">
                                                    <label class="product-template" for="m3">
                                                        <svg width="100%" height="135" xmlns="http://www.w3.org/2000/svg">
                                                            <rect width="100%" height="100%" fill="#f97316" />
                                                        </svg>
                                                        <span>نارنجی</span>
                                                        <input type="radio" data-real="true" name="color[item]" value="#f97316" id="m3">
                                                    </label>
                                                </div>
                                                <div class="swiper-slide">
                                                    <label class="product-template" for="m4">
                                                        <svg width="100%" height="135" xmlns="http://www.w3.org/2000/svg">
                                                            <rect width="100%" height="100%" fill="#eab308" />
                                                        </svg>
                                                        <span>زرد</span>
                                                        <input type="radio" data-real="true" name="color[item]" value="#eab308" id="m4">
                                                    </label>
                                                </div>
                                                <div class="swiper-slide">
                                                    <label class="product-template" for="m5">
                                                        <svg width="100%" height="135" xmlns="http://www.w3.org/2000/svg">
                                                            <rect width="100%" height="100%" fill="#84cc16" />
                                                        </svg>
                                                        <span>سبز لیمویی</span>
                                                        <input type="radio" data-real="true" name="color[item]" value="#84cc16" id="m5">
                                                    </label>
                                                </div>
                                                <div class="swiper-slide">
                                                    <label class="product-template" for="m6">
                                                        <svg width="100%" height="135" xmlns="http://www.w3.org/2000/svg">
                                                            <rect width="100%" height="100%" fill="#22c55e" />
                                                        </svg>
                                                        <span>سبز</span>
                                                        <input type="radio" data-real="true" name="color[item]" value="#22c55e" id="m6">
                                                    </label>
                                                </div>
                                                <div class="swiper-slide">
                                                    <label class="product-template" for="m7">
                                                        <svg width="100%" height="135" xmlns="http://www.w3.org/2000/svg">
                                                            <rect width="100%" height="100%" fill="#06b6d4" />
                                                        </svg>
                                                        <span>آبی آسمانی</span>
                                                        <input type="radio" data-real="true" name="color[item]" value="#06b6d4" id="m7">
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        END: COLOR 

                        START: MATERIAL
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <div class="stepNum">
                                        <span>2</span>
                                        <i class="fa-regular fa-circle-exclamation"></i>
                                    </div>
                                    انتخاب جنس پرده
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="alert alert-danger tw-text-sm">
                                        <i class="fa-regular fa-circle-exclamation"></i>
                                        لطفا یک رنگ را انتخاب کنید
                                    </div>
                                    <div class="box">
                                        <div class="tw-flex tw-items-center tw-justify-between mb-3">
                                            <span class="title">
                                                کالکشن کلاسیک
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
                                                    <label class="product-template" for="mm1">
                                                        <img src="{{ Vite::asset('resources/images/materials/1.jpg') }}" alt="">
                                                        <span>کتان</span>
                                                        <input type="radio" data-real="true" checked name="material" id="mm1">
                                                    </label>
                                                </div>
                                                <div class="swiper-slide">
                                                    <label class="product-template" for="mm2">
                                                        <img src="{{ Vite::asset('resources/images/materials/2.jpg') }}" alt="">
                                                        <span>حریر</span>
                                                        <input type="radio" data-real="true" name="material" id="mm2">
                                                    </label>
                                                </div>
                                                <div class="swiper-slide">
                                                    <label class="product-template" for="mm3">
                                                        <img src="{{ Vite::asset('resources/images/materials/3.jpg') }}" alt="">
                                                        <span>مخمل</span>
                                                        <input type="radio" data-real="true" name="material" id="mm3">
                                                    </label>
                                                </div>
                                                <div class="swiper-slide">
                                                    <label class="product-template" for="mm4">
                                                        <img src="{{ Vite::asset('resources/images/materials/4.jpg') }}" alt="">
                                                        <span>هازان</span>
                                                        <input type="radio" data-real="true" name="material" id="mm4">
                                                    </label>
                                                </div>
                                                <div class="swiper-slide">
                                                    <label class="product-template" for="mm5">
                                                        <img src="{{ Vite::asset('resources/images/materials/5.jpg') }}" alt="">
                                                        <span>مخمل پتینه</span>
                                                        <input type="radio" data-real="true" name="material" id="mm5">
                                                    </label>
                                                </div>
                                                <div class="swiper-slide">
                                                    <label class="product-template" for="mm6">
                                                        <img src="{{ Vite::asset('resources/images/materials/6.jpg') }}" alt="">
                                                        <span>کتان مخمل</span>
                                                        <input type="radio" data-real="true" name="material" id="mm6">
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                         END: MATERIAL
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
    </div> -->
    <!-- END: ACCORDION WITH SUB OPTION -->

    <!-- START: OPTION -->
    <div class="accordion accordion-product" id="accordionExample">
        <!-- START: COLOR -->
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne123" aria-expanded="true" aria-controls="collapseOne123">
                    <div class="stepNum">
                        <span>1</span>
                        <i class="fa-regular fa-circle-exclamation"></i>
                    </div>
                    انتخاب رنگ
                </button>
            </h2>
            <div id="collapseOne123" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <div class="alert alert-danger tw-text-sm">
                        <i class="fa-regular fa-circle-exclamation"></i>
                        لطفا یک رنگ را انتخاب کنید
                    </div>
                    <div class="box">
                        <div class="tw-flex tw-items-center tw-justify-between mb-3">
                            <span class="title">
                                رنگ کلاسیک
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
                                    <label class="product-template" for="m1">
                                        <svg width="100%" height="135" xmlns="http://www.w3.org/2000/svg">
                                            <rect width="100%" height="100%" fill="#334155" />
                                        </svg>
                                        <span>خاکستری</span>
                                        <input type="radio" checked data-real="true" name="color[item]" value="#334155" id="m1">
                                    </label>
                                </div>
                                <div class="swiper-slide">
                                    <label class="product-template" for="m2">
                                        <svg width="100%" height="135" xmlns="http://www.w3.org/2000/svg">
                                            <rect width="100%" height="100%" fill="#ef4444" />
                                        </svg>
                                        <span>قرمز</span>
                                        <input type="radio" data-real="true" name="color[item]" value="#ef4444" id="m2">
                                    </label>
                                </div>
                                <div class="swiper-slide">
                                    <label class="product-template" for="m3">
                                        <svg width="100%" height="135" xmlns="http://www.w3.org/2000/svg">
                                            <rect width="100%" height="100%" fill="#f97316" />
                                        </svg>
                                        <span>نارنجی</span>
                                        <input type="radio" data-real="true" name="color[item]" value="#f97316" id="m3">
                                    </label>
                                </div>
                                <div class="swiper-slide">
                                    <label class="product-template" for="m4">
                                        <svg width="100%" height="135" xmlns="http://www.w3.org/2000/svg">
                                            <rect width="100%" height="100%" fill="#eab308" />
                                        </svg>
                                        <span>زرد</span>
                                        <input type="radio" data-real="true" name="color[item]" value="#eab308" id="m4">
                                    </label>
                                </div>
                                <div class="swiper-slide">
                                    <label class="product-template" for="m5">
                                        <svg width="100%" height="135" xmlns="http://www.w3.org/2000/svg">
                                            <rect width="100%" height="100%" fill="#84cc16" />
                                        </svg>
                                        <span>سبز لیمویی</span>
                                        <input type="radio" data-real="true" name="color[item]" value="#84cc16" id="m5">
                                    </label>
                                </div>
                                <div class="swiper-slide">
                                    <label class="product-template" for="m6">
                                        <svg width="100%" height="135" xmlns="http://www.w3.org/2000/svg">
                                            <rect width="100%" height="100%" fill="#22c55e" />
                                        </svg>
                                        <span>سبز</span>
                                        <input type="radio" data-real="true" name="color[item]" value="#22c55e" id="m6">
                                    </label>
                                </div>
                                <div class="swiper-slide">
                                    <label class="product-template" for="m7">
                                        <svg width="100%" height="135" xmlns="http://www.w3.org/2000/svg">
                                            <rect width="100%" height="100%" fill="#06b6d4" />
                                        </svg>
                                        <span>آبی آسمانی</span>
                                        <input type="radio" data-real="true" name="color[item]" value="#06b6d4" id="m7">
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: COLOR -->

        <!-- START: MATERIAL -->
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <div class="stepNum">
                        <span>2</span>
                        <i class="fa-regular fa-circle-exclamation"></i>
                    </div>
                    انتخاب جنس پرده
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <div class="alert alert-danger tw-text-sm">
                        <i class="fa-regular fa-circle-exclamation"></i>
                        لطفا یک جنس را انتخاب کنید
                    </div>
                    <div class="box">
                        <div class="tw-flex tw-items-center tw-justify-between mb-3">
                            <span class="title">
                                کالکشن کلاسیک
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
                                    <label class="product-template" for="mm1">
                                        <img src="{{ Vite::asset('resources/images/materials/1.jpg') }}" alt="">
                                        <span>کتان</span>
                                        <input type="radio" data-real="true" checked name="material" id="mm1" value="1">
                                    </label>
                                </div>
                                <div class="swiper-slide">
                                    <label class="product-template" for="mm2">
                                        <img src="{{ Vite::asset('resources/images/materials/2.jpg') }}" alt="">
                                        <span>حریر</span>
                                        <input type="radio" data-real="true" name="material" id="mm2" value="2">
                                    </label>
                                </div>
                                <div class="swiper-slide">
                                    <label class="product-template" for="mm3">
                                        <img src="{{ Vite::asset('resources/images/materials/3.jpg') }}" alt="">
                                        <span>مخمل</span>
                                        <input type="radio" data-real="true" name="material" id="mm3" value="3">
                                    </label>
                                </div>
                                <div class="swiper-slide">
                                    <label class="product-template" for="mm4">
                                        <img src="{{ Vite::asset('resources/images/materials/4.jpg') }}" alt="">
                                        <span>هازان</span>
                                        <input type="radio" data-real="true" name="material" id="mm4" value="4">
                                    </label>
                                </div>
                                <div class="swiper-slide">
                                    <label class="product-template" for="mm5">
                                        <img src="{{ Vite::asset('resources/images/materials/5.jpg') }}" alt="">
                                        <span>مخمل پتینه</span>
                                        <input type="radio" data-real="true" name="material" id="mm5" value="5">
                                    </label>
                                </div>
                                <div class="swiper-slide">
                                    <label class="product-template" for="mm6">
                                        <img src="{{ Vite::asset('resources/images/materials/6.jpg') }}" alt="">
                                        <span>کتان مخمل</span>
                                        <input type="radio" data-real="true" name="material" id="mm6" value="6">
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: MATERIAL -->

        <!-- START: OTHER OPTIONS -->
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
            <div id="collapseOne2" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <div class="alert alert-danger tw-text-sm">
                        <i class="fa-regular fa-circle-exclamation"></i>
                        لطفا نوع نصب را انتخاب کنید
                    </div>
                    <div class="mb-3 tw-w-36">
                        <label for="count_input" class="title form-label">
                            تعداد
                            <a href="#"><i class="fa-regular fa-circle-question"></i></a>
                        </label>
                        <input data-real="true" name="count" type="number" class="form-control tw-w-full" min="0" value="1" id="count_input" placeholder="تعداد">
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
                                        <input type="radio" data-real="true" name="XYZ" value="XYZ1" id="BKJ23">
                                    </label>
                                </div>
                                <div class="swiper-slide">
                                    <label class="product-type" for="JBKH12">
                                        <img src="{{ Vite::asset('resources/images/product/outside.svg') }}" alt="">
                                        <span>بیرونی</span>
                                        <input type="radio" data-real="true" name="XYZ" value="XYZ2" id="JBKH12">
                                    </label>
                                </div>
                                <div class="swiper-slide">
                                    <label class="product-type" for="MLK12">
                                        <img src="{{ Vite::asset('resources/images/product/inside.svg') }}" alt="">
                                        <span>داخلی</span>
                                        <input type="radio" data-real="true" name="XYZ" value="XYZ3" id="MLK12">
                                    </label>
                                </div>
                                <div class="swiper-slide">
                                    <label class="product-type" for="BJK523">
                                        <img src="{{ Vite::asset('resources/images/product/outside.svg') }}" alt="">
                                        <span>بیرونی</span>
                                        <input type="radio" data-real="true" name="XYZ" value="XYZ4" id="BJK523">
                                    </label>
                                </div>
                                <div class="swiper-slide">
                                    <label class="product-type" for="MBN21">
                                        <img src="{{ Vite::asset('resources/images/product/inside.svg') }}" alt="">
                                        <span>داخلی</span>
                                        <input type="radio" data-real="true" name="XYZ" value="XYZ5" id="MBN21">
                                    </label>
                                </div>
                                <div class="swiper-slide">
                                    <label class="product-type" for="SGV214">
                                        <img src="{{ Vite::asset('resources/images/product/outside.svg') }}" alt="">
                                        <span>بیرونی</span>
                                        <input type="radio" data-real="true" name="XYZ" value="XYZ6" id="SGV214">
                                    </label>
                                </div>
                                <div class="swiper-slide">
                                    <label class="product-type" for="DNHG12">
                                        <img src="{{ Vite::asset('resources/images/product/inside.svg') }}" alt="">
                                        <span>داخلی</span>
                                        <input type="radio" data-real="true" name="XYZ" value="XYZ7" id="DNHG12">
                                    </label>
                                </div>
                                <div class="swiper-slide">
                                    <label class="product-type" for="SFBD">
                                        <img src="{{ Vite::asset('resources/images/product/outside.svg') }}" alt="">
                                        <span>بیرونی</span>
                                        <input type="radio" data-real="true" name="XYZ" value="XYZ8" id="SFBD">
                                    </label>
                                </div>
                                <div class="swiper-slide">
                                    <label class="product-type" for="DNGF2">
                                        <img src="{{ Vite::asset('resources/images/product/inside.svg') }}" alt="">
                                        <span>داخلی</span>
                                        <input type="radio" data-real="true" name="XYZ" value="XYZ9" id="DNGF2">
                                    </label>
                                </div>
                                <div class="swiper-slide">
                                    <label class="product-type" for="DFGN21">
                                        <img src="{{ Vite::asset('resources/images/product/outside.svg') }}" alt="">
                                        <span>بیرونی</span>
                                        <input type="radio" data-real="true" name="XYZ" value="XYZ10" id="DFGN21">
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
                                            <input class="form-control" width="width" data-real="true" type="number" value="5">
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product-type" for="">
                                        <img src="{{ Vite::asset('resources/images/product/Default_Height.jpg') }}" alt="">
                                        <div class="tw-flex py-1 tw-items-center tw-justify-between my-1 body">
                                            <span>طول(متر)</span>
                                            <input class="form-control" name="height" data-real="true" type="number" value="8" placeholder="عدد">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: OTHER OPTIONS -->

        <!-- START: OTHER OPTIONS -->
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
            <div id="collapseOne3" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
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
                                        <input type="radio" data-real="true" name="headrail" value="1">
                                    </label>
                                </div>
                                <div class="swiper-slide">
                                    <label class="product-type" for="">
                                        <img src="{{ Vite::asset('resources/images/product/2-on-1-headrail.jpg') }}" alt="">
                                        <span>بیرونی</span>
                                        <input type="radio" data-real="true" name="headrail" value="2">
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: OTHER OPTIONS -->

        <!-- START: OTHER OPTIONS -->
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
            <div id="collapseOne5" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
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
                                                <svg style="width: 16px; height: 16px;" class="tw-inline-block">
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
                                                <svg style="width: 16px; height: 16px;" class="tw-inline-block">
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
        <!-- END: OTHER OPTIONS -->
        
        <!-- START: WARRANTY -->
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
            <div id="collapseOne4" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <a class="ms-3 tw-text-xs tw-underline tw-text-left tw-w-full tw-flex tw-justify-end" href="#">راهنما</a>
                    <div class="alert alert-danger tw-text-sm">
                        <i class="fa-regular fa-circle-exclamation"></i>
                        لطفا مدت زمان گارانتی را انتخاب کنید
                    </div>
                    <div class="box">
                        <div class="row mt-2">
                            <div class="tw-hidden lg:tw-block col-lg-2">
                                <i class="fa-regular fa-shield-check tw-text-7xl tw-text-amber-500"></i>
                            </div>
                            <div class="col-12 col-lg-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="warranty" value="1warranty" id="warranty1">
                                    <div>
                                        <label class="form-check-label" for="warranty1">
                                            3 سال گارانتی محدود
                                        </label>
                                        <span class="tw-text-indigo-500 ms-3">رایگان</span>
                                    </div>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="warranty" value="2warranty" id="warranty2" checked>
                                    <div>
                                        <label class="form-check-label" for="warranty2">
                                            5 سال گارانتی محدود
                                        </label>
                                        <span class="tw-text-indigo-500 ms-3">60 هزارتومان</span>
                                    </div>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="warranty" value="3warranty" id="warranty3" checked>
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
        <!-- END: WARRANTY -->
    </div>
    <!-- END: OPTION -->

    <!-- END: LOOP -->
</form>