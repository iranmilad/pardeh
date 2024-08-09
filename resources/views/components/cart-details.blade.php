<div>
    <div class="tw-flex tw-items-start">
        <img class="tw-w-32 tw-h-32 tw-rounded-xl tw-block" src="{{ Vite::asset($img) }}" alt="">
        <div class="tw-mr-3">
            <h6 class="tw-text-gray-600 tw-font-semibold">{{ $title }}</h6>
            <div class="row tw-mt-6">
                <div class="col-12 tw-text-sm">
                    <span class="tw-text-gray-500">قیمت: <span class="tw-text-gray-900">{{ $price }}</span></span>
                </div>
                <div class="col-12 tw-text-sm">
                    <span class="tw-text-gray-500">قیمت با تخفیف: <span class="tw-text-gray-900">{{ $discounted_price }}</span></span>
                </div>
                <div class="col-12 tw-text-sm">
                    <span class="badge tw-bg-[var(--sale-badge)]  tw-px-2 rounded-pill">تخفیف: {{ $discount }}</span>
                </div>
            </div>

        </div>
    </div>



    <div class="tw-mt-4"><span class="tw-text-sm">گزینه ها:</span></div>
    <div class="row tw-mt-2">
        @foreach($options as $key => $value)
        <div class="col-6 tw-text-sm">
            <span class="tw-text-gray-500">{{$key}} : </span>
            <span class="tw-text-gray-900">{{$value}}</span>
        </div>
        @endforeach
    </div>
</div>