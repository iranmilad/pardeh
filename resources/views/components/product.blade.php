<a class="product {{ isset($mobile) ? 'product-mobile' : ''}} {{$image2 ? 'product-two-image' : ''}} {{!$nobtn ? 'show-btn' : ''}}" href="{{$link}}">
    <!-- The whole future lies in uncertainty: live immediately. - Seneca -->
    <img class="thumbnail" src="{{ $image ?: Vite::asset('resources/images/image-broken.png') }}" alt="{{ $name }}">
    <img class="thumbnail-2" src="{{ $image2 ?: '' }}" alt="{{ $name }}">
    <div class="body">
        <span class="title tw-text-right tw-w-full tw-font-semibold">{{$name}}</span>
        @if(!isset($available))
            @if(isset($discountedPrice))
                <div class="tw-w-full  tw-center tw-justify-between">
                    <span class="badge tw-bg-red-500 rounded-pill">{{ $discount }}</span>
                    <span class="tw-text-sm">{{$price}}
                    <svg style="width: 16px; height: 16px; fill: var(--undefined);">
                        <use xlink:href="#toman"></use>
                    </svg>
                    </span>
                </div>
                <span class="tw-line-through tw-text-gray-400 tw-text-xs tw-pl-[22px] tw-text-left tw-w-full">{{$discountedPrice}}</span>
                @if(isset($stock))
                    <span class="tw-text-xs tw-text-red-500 tw-text-right tw-w-full">
                        <i class="fa-duotone fa-store"></i>
                        {{$stock}} عدد در انبار
                    </span>
                @endif
                <button class="show">مشاهده محصول</button>
            @else
                <span class="price tw-w-full tw-text-left">
                    {{ $price }}
                    <svg style="width: 16px; height: 16px; fill: var(--undefined);">
                        <use xlink:href="#toman"></use>
                    </svg>
                </span>
                @if(isset($stock))
                    <span class="tw-text-xs tw-text-red-500 tw-text-right tw-w-full">
                    <i class="fa-duotone fa-store"></i>
                        {{$stock}} عدد در انبار
                    </span>
                @endif
                <button class="show">مشاهده محصول</button>
            @endif
        @else
            <button class="show unavailable">محصول ناموجود</button>
            <span class="unavailable-badge">ناموجود</span>
        @endif
    </div>

</a>
