<div class="product-basket tw-py-5"  id="{{ 'service_'.$order->id }}">
    <div class="tw-flex tw-flex-col lg:tw-flex-row tw-w-full">
        <div class="product-basket__image">
            <a href="{{ $order->link }}">
                <img class="tw-size-[145px]" src="{{ $order->img }}" alt="">
            </a>
        </div>

        <div class="product-basket__body">
            <div class="tw-flex tw-items-center tw-justify-between">
                <div class="tw-flex items-start tw-justify-center tw-flex-col">
                    <a href="{{ $order->link }}">
                        <strong class="tw-text-gray-500 text-sm md:text-base lg:text-xl leading-9">{{ $order->name }}</strong>
                    </a>
                    <div class="basket-product__variants mt-3 d-none">
                        <small class="tw-rounded tw-text-xs tw-py-1 tw-px-3 tw-ml-2 d-inline-block tw-bg-slate-100">گارانتی: 3 ساله</small>
                    </div>
                    <button class="btn custom-btn-primary tw-w-max tw-text-xs tw-mt-2 cart-show-detail" data-product-id="{{ $order->id }}">مشاهده جزئیات</button>
                </div>
                <!-- data-id IS PRODUCT ID. it works with js in app.js line:706 -->
                <button class="btn remove-item" data-id="{{ $order->id }}"><i class="fal fa-trash"></i></button>
            </div>

            <div class="tw-flex tw-flex-col lg:tw-flex-row lg:tw-items-center tw-justify-between tw-mt-4">
                <div class="product-counter"><small class="tw-ml-3 tw-text-sm">تعداد:</small>
                    <div class="product-counter-inner has-toast" data-max="2" data-min="1">
                        <span>عدد</span>
                        <button class="count-minus d-none"  title="" target="_self" style="opacity: 0.3;"><i class="fal fa-minus font-semibold"></i></button>
                        <input class="item-counter basket-items" type="number" id="ProductCount" min="1" value="{{ $order->quantity }}" name="count">
                        <button class="count-plus d-none"  title="" target="_self"><i class="fal fa-plus font-semibold"></i></button>
                    </div>
                </div>
                <div>
                    <div class="tw-flex tw-items-start tw-justify-start tw-mt-3">
                        <span class="tw-text-gray-500 lg:text-sm tw-text-sm font-medium">قیمت:</span>
                        <div class="tw-flex tw-items-end justify-end tw-flex-col tw-mr-3">
                            @if ($order->sale_price)
                                <b class="lg:text-sm tw-text-sm tw-text-indigo-500 tw-line-through">{{ $order->price }} تومان</b>
                                <b class="lg:text-sm tw-text-xs tw-text-gray-500">{{ $order->sale_price }} تومان</b>

                            @else
                                <b class="lg:text-sm tw-text-xs tw-text-gray-500">{{ $order->price }} تومان</b>
                            @endif
                        </div>
                    </div>
                    @if ($order->discountPercentage!=0)
                        <div class="tw-flex tw-items-center tw-justify-between tw-mt-3 tw-w-full">
                            <span class="tw-text-gray-500 lg:text-sm tw-text-sm font-medium">تخفیف:</span>
                            <div class="tw-flex tw-items-end justify-end tw-flex-col tw-mr-3">
                                <div class="badge tw-bg-red-500 rounded-pill">{{ $order->discountPercentage }}</div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    @if (!$order->service)
        <div class="tw-w-full border-top tw-pt-3 tw-mt-4 tour-guide">


            <span class="tw-font-semibold tw-text-gray-700">
                <i class="fa-solid fa-hand-holding-heart"></i>
                خدمات</span>
            <div class="tw-w-full tw-overflow-x-auto tw-mt-4 tw-pb-6 tw-flex tw-items-center tw-snap-x tw-snap-mandatory">
                <!-- START: Suggest box  ACTIVE -->
                <!-- href is linked to cart-service.blade.php div -->
                @if ($order->services->sewing)
                    <a href="{{ isset($order->sewing) ? '#service_'.$order->sewing : $order->services->sewing->category->link ?? '/category/خدمت-دوخت' }}{{ !isset($order->sewing) ? '?sewing='.$order->id : '' }}" class="suggest-box {{ isset($order->sewing) ? 'active' : ''}}">
                        <div class="tw-flex tw-flex-col tw-h-full">
                            <p class="tw-text-sm">
                                <span>
                                    <i class="fa-solid fa-reel"></i>
                                    آیا به خدمت دوخت برای پرده نیاز دارید ؟</span>
                            </p>
                            <div class="tw-flex-grow-0 tw-mt-auto tw-mr-auto">
                                <button class="suggest-add-btn">
                                    @if (isset($order->sewing))
                                    <span class="added">افزوده شده</span>
                                    @else
                                    <span class="tw-font-semibold tw-ml-2">مشاهده</span>
                                    @endif
                                    <i class="fa-solid fa-eye"></i>
                                </button>
                            </div>
                        </div>
                    </a>
                @endif
                <!-- END: Suggest box ACTIVE -->
                @if ($order->services->installer)
                    <a  href="{{ isset($order->installer) ? '#service_'.$order->installer : $order->services->installer->category->link ?? '/category/خدمت-نصب' }}{{ !isset($order->installer) ? '?installer='.$order->id : '' }}" class="suggest-box {{ isset($order->installer) ? 'active' : ''}}">
                        <div class="tw-flex tw-flex-col tw-h-full">
                            <p class="tw-text-sm">
                                <span>
                                    <i class="fa-solid fa-screwdriver-wrench"></i>
                                    آیا به نصاب نیاز دارید ؟</span>
                            </p>
                            <div class="tw-flex-grow-0 tw-mt-auto tw-mr-auto">
                                <button class="suggest-add-btn">
                                    @if (isset($order->installer))
                                        <span class="added">افزوده شده</span>
                                    @else
                                        <span class="tw-font-semibold tw-ml-2">مشاهده</span>
                                    @endif
                                    <i class="fa-solid fa-eye"></i>
                                </button>
                            </div>
                        </div>
                    </a>
                @endif

                @if ($order->services->design)
                    <a href="{{ isset($order->design) ? '#service_'.$order->design : $order->services->design->category->link ?? '/category/خدمت-طراحی' }}{{ !isset($order->design) ? '?design='.$order->id : '' }}" class="suggest-box {{ isset($order->design) ? 'active' : ''}}">
                        <div class="tw-flex tw-flex-col tw-h-full">
                            <p class="tw-text-sm">
                                <span>
                                    <i class="fa-solid fa-pen-ruler"></i>
                                    آیا به خدمت  طراحی نیاز دارید ؟</span>
                            </p>
                            <div class="tw-flex-grow-0 tw-mt-auto tw-mr-auto">
                                <button class="suggest-add-btn">
                                    @if (isset($order->design))
                                        <span class="added">افزوده شده</span>
                                    @else
                                        <span class="tw-font-semibold tw-ml-2">مشاهده</span>
                                    @endif
                                    <i class="fa-solid fa-eye"></i>
                                </button>
                            </div>
                        </div>
                    </a>
                @endif
            </div>
        </div>
    @endif
</div>
