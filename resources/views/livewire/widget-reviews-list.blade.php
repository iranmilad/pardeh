<div>

    @foreach ($reviews as $review)

        @if ($review->images)
            <div>
                <div class="my-3">
                    <span class="tw-font-semibold">تصاویر ارسالی</span>
                </div>
                <div class="swiper product-review-images">
                    <div class="swiper-wrapper">

                            @foreach (json_decode($review->images,true) as $image)
                                <div class="swiper-slide">
                                    <img class="tw-block tw-relative tw-w-[90%] tw-aspect-square tw-object-cover tw-rounded-xl " data-fancybox="comments" src="{{ asset($image) }}" alt="">
                                </div>
                            @endforeach

                    </div>
                </div>
            </div>
        @endif

        <div class="product-rating-box mt-5">
            <div class="col-5 col-lg-2">
                <div class="tw-flex tw-items-start tw-flex-col tw-ml-2 lg:tw-ml-4 tw-space-y-2">
                    <div class="rating-box">
                        <span class="rating-title"> کیفیت</span>
                        <x-rating readOnly rate="{{ $review->quality }}" />
                    </div>
                    <div class="rating-box">
                        <span class="rating-title">عملکرد</span>
                        <x-rating readOnly rate="{{ $review->performance }}" />
                    </div>
                    <div class="rating-box">
                        <span class="rating-title">زیبایی</span>
                        <x-rating readOnly rate="{{ $review->design }}" />
                    </div>
                    <div class="rating-box">
                        <span class="rating-title">قیمت</span>
                        <x-rating readOnly rate="{{ $review->price }}" />
                    </div>
                    <div class="rating-box">
                        <span class="rating-title">کاربری</span>
                        <x-rating readOnly rate="{{ $review->ease_of_use }}" />
                    </div>
                </div>
            </div>
            <div class="col-7 col-lg-6">
                <span class="tw-text-base tw-text-gray-800 tw-font-semibold">{{ $review->name }}</span>
                <p class="tw-text-sm tw-leading-loose">{!! $review->text !!}</p>
            </div>
        </div>


    @endforeach




    <nav class="cs-pagination mt-5 tw-mx-auto tw-w-full tw-overflow-x-auto tw-justify-center">
        {{ $reviews->links() }}
    </nav>


</div>
