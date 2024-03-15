<a class="product {{ isset($mobile) ? 'product-mobile' : ''}} {{ isset($image2) ? 'product-two-image' : ''}} {{!isset($nobtn) ? 'show-btn' : ''}}" href="{{  $link ?? '' }}">
    <!-- The whole future lies in uncertainty: live immediately. - Seneca -->
    <img class="thumbnail" src="{{ $image ?: Vite::asset('resources/images/image-broken.png') }}" alt="{{ isset($name) ?? '' }}">
    <img class="thumbnail-2" src="{{ $image2 ?? '' }}" alt="{{ $name ?? ''}}">

    <div class="body">
        <span class="title tw-text-right tw-w-full tw-font-semibold">{{$name ?? ''}}</span>
        @if((isset($available) && $available == true) or !isset($available))
            <div class="tw-w-full tw-center {{($discountedPrice && $discountedPrice != null) ? 'tw-justify-between' : 'tw-justify-end'}}">
                @if(($discountedPrice && $discountedPrice != null))
                <span class="badge tw-bg-red-500 rounded-pill">{{ $discount ?? ''}}</span>
                @endif

                @if($price)
                    <span class="tw-text-sm">{{$price ?? ''}}
                        <svg style="width: 16px; height: 16px; fill: var(--undefined);">
                            <use xlink:href="#toman"></use>
                        </svg>
                    </span>
                @endif
            </div>
                <span class="tw-line-through tw-text-gray-400 tw-text-xs tw-pl-[22px] tw-text-left tw-w-full">{{$discountedPrice ?? ''}}</span>
                @if($stock and $stock<3 and $stock>0)
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
