<a class="product {{ isset($mobile) && $mobile === true ? 'product-mobile' : ''}} {{ isset($image2) ? 'product-two-image' : ''}} {{!isset($nobtn) ? 'show-btn' : ''}}" href="{{  $link ?? '' }}">
    <!-- The whole future lies in uncertainty: live immediately. - Seneca -->
    <img class="thumbnail" src="{{ $image ?: Vite::asset('resources/images/image-broken.png') }}" alt="{{ isset($name) ?? '' }}">
    <img class="thumbnail-2" src="{{ $image2 ?? '' }}" alt="{{ $name ?? ''}}">

    <div class="body">
        <span class="title tw-text-right tw-w-full tw-font-semibold">{{$name ?? ''}}</span>
        @if((isset($available) && $available == true) or !isset($available))
            <div class="tw-w-full tw-center {{($discountedPrice && $discountedPrice != null) ? 'tw-justify-between' : 'tw-justify-end'}}">
                @if(($discountedPrice && $discountedPrice != null))
                <span class="badge tw-bg-[var(--sale-badge)]  rounded-pill">{{ $discount + $product->calculateTotalPriceWithAttributes() ?? ''}}</span>
                @endif

                @if($price)
                    <span class="tw-text-sm">{{$price + $product->calculateTotalPriceWithAttributes() ?? ''}}
                        <svg style="width: 16px; height: 16px; fill: var(--undefined);">
                            <use xlink:href="#toman"></use>
                        </svg>
                    </span>
                @endif
            </div>
                {{-- <div class="tw-w-full tw-justify-between tw-flex tw-items-center">
                @if(isset($salePriceDate) && !empty($salePriceDate))
                    <div dir="ltr" x-data="countdown({{ $salePriceDate }})" x-init="startCountdown">
                        <div id="countdown" class="product-box-countdown">
                            <span x-text="formattedHours"></span>:<span x-text="formattedMinutes"></span>:<span x-text="formattedSeconds"></span>
                        </div>
                    </div>
                @endif
                    <span class="tw-line-through tw-text-gray-400 tw-text-xs tw-pl-[22px] tw-text-left tw-w-full">{{$discountedPrice ?? ''}}</span>
                </div> --}}
                @if($stock ?? null)
                    <span class="stock-span">
                        <i class="fa-duotone fa-store"></i>
                        {{$stock}} عدد در انبار
                    </span>
                @endif
            <button class="show">مشاهده محصول</button>
        @else
            <button class="show unavailable">محصول ناموجود</button>
            <span class="unavailable-badge">ناموجود</span>
        @endif
    </div>

</a>
