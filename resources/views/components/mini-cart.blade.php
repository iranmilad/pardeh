<div class="offcanvas offcanvas-start tw-z-[999999]" tabindex="-1" id="miniCart" aria-labelledby="miniCartLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="miniCartLabel">سبد خرید</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <!-- empty  -->
        <div class="tw-text-center">
            سبد خرید خالی است
        </div>
        <!-- empty -->

        <div class="tw-h-[calc(105%-70px)] tw-pb-[70px] tw-relative">
            <!-- START: Box -->
            <div class="mini-cart-box">
                <div class="tw-flex tw-items-center tw-justify-center tw-w-20 tw-h-20 tw-bg-gray-100 tw-rounded-xl tw-mr-3">
                    <img class="tw-w-full tw-h-full tw-block tw-rounded-xl" src="{{ Vite::asset('resources/images/single-product/1.jpg') }}" alt="">
                </div>
                <div class="tw-flex-1 tw-mr-2 tw-h-full">
                    <div class="tw-flex tw-items-start tw-flex-row tw-justify-between tw-h-full">
                        <div class="tw-h-full tw-flex tw-flex-col tw-items-start tw-flex-grow">
                            <h3 class="tw-text-sm tw-font-medium tw-mb-1">پرده مخمل عریض</h3>
                            <div class="tw-flex tw-items-center">
                                <span class="tw-text-gray-500 tw-text-sm">قیمت:</span>
                                <span class="tw-text-gray-800 tw-text-sm">2,000,000 <svg style="width: 16px; height: 16px; fill: var(--undefined);">
                                        <use xlink:href="#toman"></use>
                                    </svg></span>
                            </div>
                        </div>
                        <div class="tw-flex tw-flex-col tw-items-end tw-justify-between tw-h-full">
                            <button class="btn remove-item" data-id="123"><i class="fal fa-trash"></i></button>
                            <div class="product-counter-inner has-toast" data-max="2" data-min="1">
                                <input class="item-counter basket-items border tw-text-left tw-rounded-md tw-text-gray-600" style="margin-left: 0;font-size: 1rem;" type="number" id="ProductCount" min="1" value="1" name="count">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Box -->
            <!-- START: Box -->
            <div class="mini-cart-box">
                <div class="tw-flex tw-items-center tw-justify-center tw-w-20 tw-h-20 tw-bg-gray-100 tw-rounded-xl tw-mr-3">
                    <img class="tw-w-full tw-h-full tw-block tw-rounded-xl" src="{{ Vite::asset('resources/images/single-product/2.jpg') }}" alt="">
                </div>
                <div class="tw-flex-1 tw-mr-2 tw-h-full">
                    <div class="tw-flex tw-items-start tw-flex-row tw-justify-between tw-h-full">
                        <div class="tw-h-full tw-flex tw-flex-col tw-items-start tw-flex-grow">
                            <h3 class="tw-text-sm tw-font-medium tw-mb-1">پرده برقی مشکی پر کلاغی</h3>
                            <div class="tw-flex tw-items-center">
                                <span class="tw-text-gray-500 tw-text-sm">قیمت:</span>
                                <span class="tw-text-gray-800 tw-text-sm">1,200,000 <svg style="width: 16px; height: 16px; fill: var(--undefined);">
                                        <use xlink:href="#toman"></use>
                                    </svg></span>
                            </div>
                        </div>
                        <div class="tw-flex tw-flex-col tw-items-end tw-justify-between tw-h-full">
                            <button class="btn remove-item" data-id="123"><i class="fal fa-trash"></i></button>
                            <div class="product-counter-inner has-toast" data-max="2" data-min="1">
                                <input class="item-counter basket-items border tw-text-left tw-rounded-md tw-text-gray-600" style="margin-left: 0;font-size: 1rem;" type="number" id="ProductCount" min="1" value="3" name="count">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Box -->
            <div class="tw-w-full tw-h-[70px] tw-absolute tw-left-0 tw-bottom-0 tw-rounded-xl tw-bg-gray-100 tw-px-3">
                <div class="tw-w-full tw-h-full tw-flex tw-items-center tw-justify-between">
                    <div class="tw-flex tw-items-center tw-justify-center tw-ml-3">
                        <span class="tw-text-gray-800 tw-text-sm">مبلغ کل:</span>
                        <span class="tw-text-gray-800 tw-text-sm" id="mini-cart-price">3,200,000 <svg style="width: 16px; height: 16px; fill: var(--undefined);">
                                <use xlink:href="#toman"></use>
                            </svg></span>
                    </div>
                    <a href="{{ route('cart') }}" class="btn custom-btn-primary tw-text-sm tw-mr-3 tw-rounded-xl">مشاهده سبد خرید</a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>