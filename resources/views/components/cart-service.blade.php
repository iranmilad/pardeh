<!-- id: service_1 is used in cart.blade.php suggest box. -->

<div class="product-basket tw-py-5" id="service_1">
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
                        <strong class="tw-text-gray-500 text-sm md:text-base lg:text-xl leading-9"><b class="tw-text-[var(--primary)]">دوخت</b> برای پرده پانچی آماده هازان (کتان) رنگ خردلی</strong>
                    </a>
                </div>
                <button class="remove-item btn"><i class="fal fa-trash"></i></button>
            </div>

            <div class="tw-flex tw-flex-col lg:tw-flex-row lg:tw-items-center tw-justify-end tw-mt-4">
                <div>
                    <div class="tw-flex tw-items-start tw-justify-start tw-mt-3">
                        <span class="tw-text-gray-500 lg:text-sm tw-text-sm font-medium">قیمت:</span>
                        <div class="tw-flex tw-items-end justify-end tw-flex-col tw-mr-3">
                            <b class="lg:text-sm tw-text-sm tw-text-[var(--primary)] tw-line-through">58,599,000 تومان</b>
                            <b class="lg:text-sm tw-text-xs tw-text-gray-500">56,000,000 تومان</b>
                        </div>
                    </div>
                    <div class="tw-flex tw-items-center tw-justify-between tw-mt-3 tw-w-full">
                        <span class="tw-text-gray-500 lg:text-sm tw-text-sm font-medium">تخفیف:</span>
                        <div class="tw-flex tw-items-end justify-end tw-flex-col tw-mr-3">
                            <div class="badge tw-bg-[var(--sale-badge)]  rounded-pill">20%</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
