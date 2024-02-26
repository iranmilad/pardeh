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
                        <x-rating readOnly rate="4" />
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
    <button class="btn custom-btn-primary tw-rounded-xl" data-bs-toggle="modal" data-bs-target="#commentModal">
        <span>نوشتن دیدگاه</span>
    </button>
</div>
<div class="alert alert-success tw-mt-3 tw-rounded-lg">
    <i class="fa-solid fa-circle-check"></i>
    <span class="tw-text-sm">دیدگاه شما با موفقیت ثبت شد و پس از تایید نمایش داده خواهد شد</span>
</div>
<div>
    <div class="my-3">
        <span class="tw-font-semibold">عکس های مشتریان</span>
    </div>
    <div class="swiper product-review-images">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img class="tw-block tw-relative tw-w-[90%] tw-aspect-square tw-object-cover tw-rounded-xl " data-fancybox="comments" src="{{ Vite::asset('resources/images/single-product/1.jpg') }}" alt="">
            </div>
            <div class="swiper-slide">
                <img class="tw-block tw-relative tw-w-[90%] tw-aspect-square tw-object-cover tw-rounded-xl " data-fancybox="comments" src="{{ Vite::asset('resources/images/single-product/2.jpg') }}" alt="">
            </div>
            <div class="swiper-slide">
                <img class="tw-block tw-relative tw-w-[90%] tw-aspect-square tw-object-cover tw-rounded-xl " data-fancybox="comments" src="{{ Vite::asset('resources/images/single-product/3.jpg') }}" alt="">
            </div>
            <div class="swiper-slide">
                <img class="tw-block tw-relative tw-w-[90%] tw-aspect-square tw-object-cover tw-rounded-xl " data-fancybox="comments" src="{{ Vite::asset('resources/images/single-product/4.jpg') }}" alt="">
            </div>
            <div class="swiper-slide">
                <img class="tw-block tw-relative tw-w-[90%] tw-aspect-square tw-object-cover tw-rounded-xl " data-fancybox="comments" src="{{ Vite::asset('resources/images/single-product/5.jpg') }}" alt="">
            </div>
            <div class="swiper-slide">
                <img class="tw-block tw-relative tw-w-[90%] tw-aspect-square tw-object-cover tw-rounded-xl " data-fancybox="comments" src="{{ Vite::asset('resources/images/single-product/6.jpg') }}" alt="">
            </div>
            <div class="swiper-slide">
                <img class="tw-block tw-relative tw-w-[90%] tw-aspect-square tw-object-cover tw-rounded-xl " data-fancybox="comments" src="{{ Vite::asset('resources/images/single-product/1.jpg') }}" alt="">
            </div>
            <div class="swiper-slide">
                <img class="tw-block tw-relative tw-w-[90%] tw-aspect-square tw-object-cover tw-rounded-xl " data-fancybox="comments" src="{{ Vite::asset('resources/images/single-product/2.jpg') }}" alt="">
            </div>
        </div>
    </div>
</div>
<div class="product-rating-box mt-3">
    <div class="col-5 col-lg-2">
        <div class="tw-flex tw-items-start tw-flex-col tw-ml-2 lg:tw-ml-4 tw-space-y-2">
            <div class="rating-box">
                <span class="rating-title">امتیاز 1</span>
                <x-rating readOnly rate="4" />
            </div>
            <div class="rating-box">
                <span class="rating-title">امتیاز 2</span>
                <x-rating readOnly rate="4" />
            </div>
            <div class="rating-box">
                <span class="rating-title">امتیاز 3</span>
                <x-rating readOnly rate="4" />
            </div>
            <div class="rating-box">
                <span class="rating-title">امتیاز 4</span>
                <x-rating readOnly rate="4" />
            </div>
            <div class="rating-box">
                <span class="rating-title">امتیاز 5</span>
                <x-rating readOnly rate="4" />
            </div>
        </div>
    </div>
    <div class="col-7 col-lg-6">
        <span class="tw-text-base tw-text-gray-800 tw-font-semibold">فرهاد باقری</span>
        <p class="tw-text-sm tw-leading-loose">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد</p>
    </div>


</div>

<nav class="cs-pagination mt-5 tw-mx-auto tw-w-full tw-overflow-x-auto tw-justify-center">
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

<x-product-comment-modal />
<x-uploadFileModal />