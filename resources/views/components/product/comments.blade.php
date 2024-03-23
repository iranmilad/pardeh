<span class="tw-text-slate-700 tw-text-lg tw-font-semibold">امتیاز و دیدگاه کاربران</span>
<div class="row mt-3">
    <div class="col-12 tw-flex tw-flex-row ">
        <div class="row tw-w-full">
            <div class="col-4 col-lg-3">
                <div class="tw-flex tw-flex-col tw-justify-start tw-w-max tw-h-auto items-ce">
                    <span>امتیاز محصول</span>
                    <div class="mt-4">
                        <span class=" tw-text-slate-700 tw-text-4xl tw-font-black">5 / {{ $product->overallRatingAverage() }} </span>
                    </div>
                    <div>
                        <x-rating readOnly rate="{{ $product->overallRatingAverage() }}" />
                    </div>
                    <div class="">
                        <span class="tw-text-xs tw-text-gray-400">دیدگاه ({{$product->reviews()->count()}})</span>
                    </div>
                </div>
            </div>
            <div class="col-8 col-lg-4">
                <div class="tw-w-full tw-mr-4 tw-h-full tw-flex tw-flex-col tw-justify-between tw-space-y-4">
                    <div class="tw-flex tw-flex-row tw-items-center">
                        <span class="tw-text-xs tw-text-gray-500 tw-w-[53px] tw-text-nowrap">کیفیت</span>
                        <div class="progress rating tw-h-4 tw-w-full tw-mx-2" role="progressbar" aria-label="Basic example" aria-valuenow="{{ $product->qualityRatingAverage() }}" aria-valuemin="0" aria-valuemax="5">
                            <div class="progress-bar rating" style="width: {{ ($product->qualityRatingAverage()/5)*100 }}%"></div>
                        </div>
                        <span class="tw-text-xs tw-text-gray-600 tw-font-semibold">{{ round(($product->qualityRatingAverage()/5)*100) }}%</span>
                    </div>
                    <div class="tw-flex tw-flex-row tw-items-center">
                        <span class="tw-text-xs tw-text-gray-500 tw-w-[53px] tw-text-nowrap">عملکرد</span>
                        <div class="progress rating tw-h-4 tw-w-full tw-mx-2" role="progressbar" aria-label="Basic example" aria-valuenow="{{ $product->performanceRatingAverage() }}" aria-valuemin="0" aria-valuemax="5">
                            <div class="progress-bar rating" style="width: {{ ($product->performanceRatingAverage()/5)*100 }}%"></div>
                        </div>
                        <span class="tw-text-xs tw-text-gray-600 tw-font-semibold">{{ round(($product->performanceRatingAverage()/5)*100) }}%</span>
                    </div>
                    <div class="tw-flex tw-flex-row tw-items-center">
                        <span class="tw-text-xs tw-text-gray-500 tw-w-[53px] tw-text-nowrap">زیبایی</span>
                        <div class="progress rating tw-h-4 tw-w-full tw-mx-2" role="progressbar" aria-label="Basic example" aria-valuenow="{{ $product->designRatingAverage() }}" aria-valuemin="0" aria-valuemax="5">
                            <div class="progress-bar rating" style="width: {{ ($product->designRatingAverage()/5)*100 }}%"></div>
                        </div>
                        <span class="tw-text-xs tw-text-gray-600 tw-font-semibold">{{ round(($product->designRatingAverage()/5)*100) }}%</span>
                    </div>
                    <div class="tw-flex tw-flex-row tw-items-center">
                        <span class="tw-text-xs tw-text-gray-500 tw-w-[53px] tw-text-nowrap">قیمت</span>
                        <div class="progress rating tw-h-4 tw-w-full tw-mx-2" role="progressbar" aria-label="Basic example" aria-valuenow="{{ $product->priceRatingAverage() }}" aria-valuemin="0" aria-valuemax="5">
                            <div class="progress-bar rating" style="width: {{ ($product->priceRatingAverage()/5)*100 }}%"></div>
                        </div>
                        <span class="tw-text-xs tw-text-gray-600 tw-font-semibold">{{ round(($product->priceRatingAverage()/5)*100) }}%</span>
                    </div>
                    <div class="tw-flex tw-flex-row tw-items-center">
                        <span class="tw-text-xs tw-text-gray-500 tw-w-[53px] tw-text-nowrap">کاربری</span>
                        <div class="progress rating tw-h-4 tw-w-full tw-mx-2" role="progressbar" aria-label="Basic example" aria-valuenow="{{ $product->easeOfUseRatingAverage() }}" aria-valuemin="0" aria-valuemax="5">
                            <div class="progress-bar rating" style="width: {{ ($product->easeOfUseRatingAverage()/5)*100 }}%"></div>
                        </div>
                        <span class="tw-text-xs tw-text-gray-600 tw-font-semibold">{{ round(($product->easeOfUseRatingAverage()/5)*100) }}%</span>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-4 offset-lg-1 mt-4 mt-lg-0 d-none">
                <div class="row tw-justify-end">
                    <div class="col-6">
                        <div class="mb-3 tw-text-sm">
                            <label for="sortby" class="form-label">مرتب کردن بر اساس</label>
                            <select class="form-select" name="ReviewSortSelect" id="sortby">
                                <option value="">اخیرا</option>
                                <option value="">زیاد به کم</option>
                                <option value="">کم به زیاد</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3 tw-text-sm">
                            <label for="sortby" class="form-label">فیلتر کردن بر اساس</label>
                            <select class="form-select" name="ReviewFilterSelect" id="sortby">
                                <option value="">تمام دیدگاه ها</option>
                                <option value="">دیدگاه همراه با متن</option>
                                <option value="">دیدگاه همراه با عکس</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <input class="form-control" type="text" placeholder="جستجوی کلمات کلیدی" name="ReviewSearch">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@if (Auth::check() && Auth::user()->hasRole('admin'))
<div>
    <button class="btn custom-btn-primary tw-rounded-xl" data-bs-toggle="modal" data-bs-target="#commentModal">
        <span>نوشتن دیدگاه</span>
    </button>
</div>
@endif
<div class="alert alert-success tw-mt-3 tw-rounded-lg d-none">
    <i class="fa-solid fa-circle-check"></i>
    <span class="tw-text-sm">دیدگاه شما با موفقیت ثبت شد و پس از تایید نمایش داده خواهد شد</span>
</div>





