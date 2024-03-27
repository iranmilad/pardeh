<div class="offcanvas offcanvas-start tw-z-[999999]" data-bs-backdrop="static" tabindex="-1" id="miniCart" aria-labelledby="miniCartLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="miniCartLabel">سبد خرید</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <!-- empty  -->
        <div id="mini-cart-empty" class="tw-text-center " style="display: none;">
            سبد خرید خالی است
        </div>
        <!-- empty -->

        <div class="tw-h-[calc(105%-46px)] tw-pb-[46px] tw-relative" id="mini-cart-items-container">
            <div class="tw-h-full tw-overflow-auto" id="mini-cart-items"></div>

            <div id="mini-cart-calculated" style="display: none;" class="tw-w-full tw-h-[46px] tw-absolute tw-left-0 tw-bottom-0 tw-rounded-xl tw-bg-gray-100 tw-px-3">
                <div class="tw-w-full tw-h-full tw-flex tw-items-center tw-justify-between">
                    <div class="tw-flex tw-items-center tw-justify-center tw-ml-3">
                        <span class="tw-text-gray-800 tw-text-sm">مبلغ کل:</span>
                        <span class="tw-text-gray-800 tw-text-sm" id="mini-cart-price"><svg style="width: 16px; height: 16px; fill: var(--undefined);">
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