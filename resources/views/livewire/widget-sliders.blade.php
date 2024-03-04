<div>
    @if (isset($options['type']) && $options['type'] === 'template1')
        <!-- Slider:start -->
        <div class="swiper firstSlider *:tw-select-none">
            <div class="swiper-wrapper">
            @foreach($sliders as $slider)
                @foreach($slider->images as $image)
                <div class="swiper-slide">
                    <a class="tw-max-w-max tw-mx-auto tw-relative tw-block" href="{{ $image->link }}" title="{{ $image->title }}">
                        <img src="{{ asset($image->image) }}" class="img-fluid tw-block tw-relative lg:tw-rounded-lg" alt="">
                    </a>
                </div>
                @endforeach
            @endforeach
            </div>
            <div id="firstSlider-products-next" class="swiper-button-next bg-light border-radius-circle"></div>
            <div id="firstSlider-products-prev" class="swiper-button-prev bg-light border-radius-circle"></div>
            <div class="swiper-pagination"></div>
        </div>
    <!-- Slider:end -->
    @endif
</div>
