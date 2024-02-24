<form id="product-options">
    @csrf
    <!-- START: LOOP -->
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
                        <input data-real="true" name="count" type="number" class="form-control tw-w-full" min="0" value="1" id="count" placeholder="تعداد">
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
                                        <input type="radio" name="XYZ" value="XYZ1" id="BKJ23">
                                    </label>
                                </div>
                                <div class="swiper-slide">
                                    <label class="product-type" for="JBKH12">
                                        <img src="{{ Vite::asset('resources/images/product/outside.svg') }}" alt="">
                                        <span>بیرونی</span>
                                        <input type="radio" name="XYZ" value="XYZ2" id="JBKH12">
                                    </label>
                                </div>
                                <div class="swiper-slide">
                                    <label class="product-type" for="MLK12">
                                        <img src="{{ Vite::asset('resources/images/product/inside.svg') }}" alt="">
                                        <span>داخلی</span>
                                        <input type="radio" name="XYZ" value="XYZ3" id="MLK12">
                                    </label>
                                </div>
                                <div class="swiper-slide">
                                    <label class="product-type" for="BJK523">
                                        <img src="{{ Vite::asset('resources/images/product/outside.svg') }}" alt="">
                                        <span>بیرونی</span>
                                        <input type="radio" name="XYZ" value="XYZ4" id="BJK523">
                                    </label>
                                </div>
                                <div class="swiper-slide">
                                    <label class="product-type" for="MBN21">
                                        <img src="{{ Vite::asset('resources/images/product/inside.svg') }}" alt="">
                                        <span>داخلی</span>
                                        <input type="radio" name="XYZ" value="XYZ5" id="MBN21">
                                    </label>
                                </div>
                                <div class="swiper-slide">
                                    <label class="product-type" for="SGV214">
                                        <img src="{{ Vite::asset('resources/images/product/outside.svg') }}" alt="">
                                        <span>بیرونی</span>
                                        <input type="radio" name="XYZ" value="XYZ6" id="SGV214">
                                    </label>
                                </div>
                                <div class="swiper-slide">
                                    <label class="product-type" for="DNHG12">
                                        <img src="{{ Vite::asset('resources/images/product/inside.svg') }}" alt="">
                                        <span>داخلی</span>
                                        <input type="radio" name="XYZ" value="XYZ7" id="DNHG12">
                                    </label>
                                </div>
                                <div class="swiper-slide">
                                    <label class="product-type" for="SFBD">
                                        <img src="{{ Vite::asset('resources/images/product/outside.svg') }}" alt="">
                                        <span>بیرونی</span>
                                        <input type="radio" name="XYZ" value="XYZ8" id="SFBD">
                                    </label>
                                </div>
                                <div class="swiper-slide">
                                    <label class="product-type" for="DNGF2">
                                        <img src="{{ Vite::asset('resources/images/product/inside.svg') }}" alt="">
                                        <span>داخلی</span>
                                        <input type="radio" name="XYZ" value="XYZ9" id="DNGF2">
                                    </label>
                                </div>
                                <div class="swiper-slide">
                                    <label class="product-type" for="DFGN21">
                                        <img src="{{ Vite::asset('resources/images/product/outside.svg') }}" alt="">
                                        <span>بیرونی</span>
                                        <input type="radio" name="XYZ" value="XYZ10" id="DFGN21">
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
    <!-- END: LOOP -->
</form>
