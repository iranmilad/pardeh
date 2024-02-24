<div class="product-basket tw-py-5">
    <div class="tw-flex tw-flex-col lg:tw-flex-row tw-w-full">
        <div class="product-basket__image">
            <a href="/product">
                <img class="tw-size-[145px]" src="{{ Vite::asset('resources/images/single-product/1.jpg') }}" alt="">
            </a>
        </div>

        <div class="product-basket__body">
            <div class="tw-flex tw-items-center tw-justify-between">
                <div class="tw-flex items-start tw-justify-center tw-flex-col">
                    <a href="/product">
                        <strong class="tw-text-gray-500 text-sm md:text-base lg:text-xl leading-9">پرده پانچی آماده هازان (کتان) رنگ خردلی</strong>
                    </a>
                    <div class="basket-product__variants mt-3">
                        <small class="tw-rounded tw-text-xs tw-py-1 tw-px-3 tw-ml-2 d-inline-block tw-bg-slate-100">گارانتی: 3 ساله</small>
                    </div>
                    <button class="btn custom-btn-primary tw-w-max tw-text-xs tw-mt-2 cart-show-detail" data-product-id="1">مشاهده جزئیات</button>
                </div>
                <button class="btn remove-item" ><i class="fal fa-trash"></i></button>
            </div>

            <div class="tw-flex tw-flex-col lg:tw-flex-row lg:tw-items-center tw-justify-between tw-mt-4">
                <div class="product-counter"><small class="tw-ml-3 tw-text-sm">تعداد:</small>
                    <div class="product-counter-inner has-toast" data-max="2" data-min="1">

                        <a class="count-minus" href="/shop/basket/r166n/update?count=0&amp;sku_id=81261" title="" target="_self" style="opacity: 0.3;"><i class="fal fa-minus font-semibold"></i></a>
                        <input class="item-counter basket-items" type="number" id="ProductCount" min="1" value="1" name="count">
                        <a class="count-plus" href="/shop/basket/r166n/update?count=2&amp;sku_id=81261" title="" target="_self"><i class="fal fa-plus font-semibold"></i></a>
                    </div>
                </div>
                <div>
                    <div class="tw-flex tw-items-start tw-justify-start tw-mt-3">
                        <span class="tw-text-gray-500 lg:text-sm tw-text-sm font-medium">قیمت:</span>
                        <div class="tw-flex tw-items-end justify-end tw-flex-col tw-mr-3">
                            <b class="lg:text-sm tw-text-sm tw-text-indigo-500 tw-line-through">58,599,000 تومان</b>
                            <b class="lg:text-sm tw-text-xs tw-text-gray-500">56,000,000 تومان</b>
                        </div>
                    </div>
                    <div class="tw-flex tw-items-center tw-justify-between tw-mt-3 tw-w-full">
                        <span class="tw-text-gray-500 lg:text-sm tw-text-sm font-medium">تخفیف:</span>
                        <div class="tw-flex tw-items-end justify-end tw-flex-col tw-mr-3">
                            <div class="badge tw-bg-red-500 rounded-pill">20%</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tw-w-full border-top tw-pt-3 tw-mt-4 tour-guide">
        <span class="tw-font-semibold tw-text-gray-700">
            <i class="fa-solid fa-hand-holding-heart"></i>
            خدمات</span>
        <div class="tw-w-full tw-overflow-x-auto tw-mt-4 tw-pb-6 tw-flex tw-items-center tw-snap-x tw-snap-mandatory">
            <!-- START: Suggest box  ACTIVE -->
            <!-- href is linked to cart-service.blade.php div -->
            <a href="#service_1" class="suggest-box active">
                <div class="tw-flex tw-flex-col tw-h-full">
                    <p class="tw-text-sm">
                        <span>
                            <i class="fa-solid fa-reel"></i>
                            آیا به خدمت دوخت برای پرده نیاز دارید ؟</span>
                    </p>
                    <div class="tw-flex-grow-0 tw-mt-auto tw-mr-auto">
                        <button class="suggest-add-btn">
                            <span class="tw-font-semibold tw-ml-2">مشاهده</span>
                            <span class="added">افزوده شده</span>
                            <i class="fa-solid fa-eye"></i>
                        </button>
                    </div>
                </div>
            </a>
            <!-- END: Suggest box ACTIVE -->
            <div class="suggest-box">
                <div class="tw-flex tw-flex-col tw-h-full">
                    <p class="tw-text-sm">
                        <span>
                            <i class="fa-solid fa-screwdriver-wrench"></i>
                            آیا به نصاب نیاز دارید ؟</span>
                    </p>
                    <div class="tw-flex-grow-0 tw-mt-auto tw-mr-auto">
                        <button class="suggest-add-btn">
                            <span class="tw-font-semibold tw-ml-2">مشاهده</span>
                            <i class="fa-solid fa-eye"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="suggest-box">
                <div class="tw-flex tw-flex-col tw-h-full">
                    <p class="tw-text-sm">
                        <span>
                            <i class="fa-solid fa-pen-ruler"></i>
                            آیا به خدمت  طراحی نیاز دارید ؟</span>
                    </p>
                    <div class="tw-flex-grow-0 tw-mt-auto tw-mr-auto">
                        <button class="suggest-add-btn">
                            <span class="tw-font-semibold tw-ml-2">مشاهده</span>
                            <i class="fa-solid fa-eye"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>