<div>
    <!-- notice: you can use random id for label and input. -->
    <form id="product-options">
        @csrf
        <!-- START: OPTION -->
        <div class="accordion accordion-product" id="accordionExample">

            @if(request()->has('installer'))
                <input type="hidden" data-real="true" name="param[installer]" value="{{ request()->input('installer') }}">
            @endif

            @if(request()->has('design'))
                <input type="hidden" data-real="true" name="param[design]" value="{{ request()->input('design') }}">
            @endif

            @if(request()->has('sewing'))
                <input type="hidden" data-real="true" name="param[sewing]" value="{{ request()->input('sewing') }}">
            @endif

            <input type="hidden" data-real="true" name="param[product]" value="{{ $product->id }}">

            @foreach ($product->attributes()->get() as $attribute)

                @if($attribute->display_type == 'color' )
                    @php
                        $attribute = $attribute;
                    @endphp
                    <!-- START: COLOR -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="{{ '#col'.$loop->index }}" aria-expanded="true" aria-controls="collapse">
                                <div class="stepNum">
                                    <span>{{ $loop->index+1 }}</span>
                                    <i class="fa-regular fa-circle-exclamation"></i>
                                </div>
                                انتخاب {{ $attribute->name }}
                            </button>
                        </h2>

                        <div id="{{ 'col'.$loop->index }}" class="accordion-collapse collapse {{ $loop->first ? 'show' : ''}}" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="alert alert-danger tw-text-sm">
                                    <i class="fa-regular fa-circle-exclamation"></i>
                                    لطفا یک گزینه را انتخاب کنید
                                </div>
                                <div class="box">
                                    <div class="tw-flex tw-items-center tw-justify-between mb-3">
                                        <span class="title">
                                            {{ $attribute->name }}
                                            <a href="#"><i class="fa-regular fa-circle-question"></i></a>
                                        </span>
                                        <div class="product-option-next-prev">
                                            <button class="product-option-prev"><i class="fa fa-chevron-right"></i></button>
                                            <button class="product-option-next"><i class="fa fa-chevron-left"></i></button>
                                        </div>
                                    </div>
                                    <div class="swiper swiper-product-options">
                                        <div class="swiper-wrapper">
                                            @php
                                                $firstSelect=false;
                                            @endphp
                                            @forelse($attribute->properties as $item)

                                                <div class="swiper-slide {{ $firstSelect==false ? 'swiper-slide-active' : '' }}">
                                                    <label class="product-template {{ !$item->isInStock($product->id) ? 'not_found' : '' }}" for="{{ $item->id }}">
                                                        @if ($item->img)
                                                            <img width="100%" height="135" src="{{ $item->img }}" alt="{{ $item->value }}" srcset="">
                                                        @else
                                                            <svg width="100%" height="135" xmlns="http://www.w3.org/2000/svg">
                                                                <rect width="100%" height="100%" fill="{{ $item->value }}" />
                                                            </svg>
                                                        @endif
                                                        <span>{{ $item->description }}</span>

                                                        @if ($item->isInStock($product->id))
                                                            <input type="radio" data-real="true" name="param[{{ $attribute->id }}]" value="{{ $item->value }}" id="{{ $item->id }}" wire:model.defer="selectedAttributes.{{ $attribute->id }}" wire:click="checkStockAndPrice"  {{ $selectedAttributes[$attribute->id] == $item->value ? 'checked' : '' }}>
                                                            @php
                                                                $firstSelect=true;
                                                            @endphp
                                                        @else
                                                            <input type="radio" data-real="true" name="param[{{ $attribute->id }}]" value="{{ $item->value }}" id="{{ $item->id }}" disabled>
                                                        @endif
                                                    </label>
                                                </div>
                                            @empty
                                                <div> خصوصیتی برای این ویژگی تعریف نشده</div>
                                            @endforelse
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: COLOR -->
                @endif

                @if($attribute->display_type == 'material')
                    @php
                        $attribute = $attribute;
                        $items = $attribute->properties;
                    @endphp

                    <!-- START: MATERIAL -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#col{{ $loop->index }}" aria-expanded="true" aria-controls="collapse">
                                <div class="stepNum">
                                    <span>{{ $loop->index+1 }}</span>
                                    <i class="fa-regular fa-circle-exclamation"></i>
                                </div>
                                انتخاب {{ $attribute->name }}
                            </button>
                        </h2>
                        <div id="col{{ $loop->index }}" class="accordion-collapse collapse {{ $loop->first ? 'show' : ''}}" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="alert alert-danger tw-text-sm">
                                    <i class="fa-regular fa-circle-exclamation"></i>
                                    لطفا یک گذینه را انتخاب انتخاب کنید
                                </div>
                                <div class="box">
                                    <div class="tw-flex tw-items-center tw-justify-between mb-3">
                                        <span class="title">
                                            {{ $attribute->name }}
                                            <a href="#"><i class="fa-regular fa-circle-question"></i></a>
                                        </span>
                                        <div class="product-option-next-prev">
                                            <button class="product-option-prev"><i class="fa fa-chevron-right"></i></button>
                                            <button class="product-option-next"><i class="fa fa-chevron-left"></i></button>
                                        </div>
                                    </div>
                                    <div class="swiper swiper-product-options">
                                        <div class="swiper-wrapper">
                                            @forelse($items as $item)
                                                <div class="swiper-slide">
                                                    <label class="product-template {{ !$item->isInStock($product->id) ? 'not_found' : '' }}" for="{{ $item->value }}">
                                                        <img src="{{ $item->img }}" alt="">
                                                        <span>{{ $item->description }}</span>
                                                        @if ($item->isInStock($product->id))
                                                            <input type="radio" data-real="true" name="param[{{ $attribute->id }}]" id="{{ $item->value }}" value="{{ $item->value }}" wire:model.defer="selectedAttributes.{{ $attribute->id }}" wire:click="checkStockAndPrice">
                                                        @else
                                                            <input type="radio" data-real="true" name="param[{{ $attribute->id }}]" id="{{ $item->value }}" value="{{ $item->value }}" disabled>
                                                        @endif
                                                    </label>
                                                </div>
                                            @empty
                                                <div> خصوصیتی برای این ویژگی تعریف نشده</div>
                                            @endforelse
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: MATERIAL -->
                @endif

                @if($attribute->display_type == 'size')
                    @php
                        $attribute=$attribute;
                        $items = $attribute->properties;
                    @endphp
                    <!-- START: OTHER OPTIONS Size-->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#col{{ $loop->index  }}" aria-expanded="true" aria-controls="collapse">
                                <div class="stepNum">
                                    <span>{{ $loop->index+1 }}</span>
                                    <i class="fa-regular fa-circle-exclamation"></i>
                                </div>
                                انتخاب {{$attribute->name}}
                            </button>
                        </h2>
                        <div id="col{{ $loop->index  }}" class="accordion-collapse collapse  {{ $loop->first ? 'show' : ''}}" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="alert alert-danger tw-text-sm">
                                    <i class="fa-regular fa-circle-exclamation"></i>
                                    لطفا {{$attribute->unit}} مورد نظر را انتخاب کنید
                                </div>
                                <div class="box">
                                    <div class="tw-flex tw-items-center tw-justify-between mb-3">
                                        <span class="title">
                                            {{ $attribute->unit }}
                                            <a href="#"><i class="fa-regular fa-circle-question"></i></a>
                                        </span>
                                        <div class="product-option-next-prev">
                                            <button class="product-option-prev"><i class="fa fa-chevron-right"></i></button>
                                            <button class="product-option-next"><i class="fa fa-chevron-left"></i></button>
                                        </div>
                                    </div>
                                    <div class="swiper swiper-product-options">
                                        <div class="swiper-wrapper">
                                            @forelse ($items as $item)
                                                <div class="swiper-slide">
                                                    <div class="product-type" for="">
                                                        <img src="{{ $item->img }}" alt="">
                                                        <div class="tw-flex py-1 tw-items-center tw-justify-between my-1 body">
                                                            <span>{{ $item->description }} ( {{ $item->base_unit }} )</span>
                                                            @if ($item->isInStock($product->id))
                                                                <input class="form-control" name="param[{{ $attribute->id }}][{{ $item->value }}]" data-real="true" type="number" value="0" placeholder="{{ $item->base_unit }}">
                                                            @else
                                                                <input class="form-control" name="param[{{ $attribute->id }}][{{ $item->value }}]" data-real="true" type="number" value="0" placeholder="{{ $item->base_unit }}" disabled>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            @empty
                                                <div> خصوصیتی برای این ویژگی تعریف نشده</div>
                                            @endforelse
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: OTHER OPTIONS -->
                @endif

                @if($attribute->display_type == 'model')
                    @php
                        $attribute = $attribute;
                        $items = $attribute->properties;
                    @endphp

                    <!-- START: MODEL -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#col{{ $loop->index }}" aria-expanded="true" aria-controls="collapse">
                                <div class="stepNum">
                                    <span>{{ $loop->index+1 }}</span>
                                    <i class="fa-regular fa-circle-exclamation"></i>
                                </div>
                                انتخاب {{ $attribute->name }}
                            </button>
                        </h2>
                        <div id="col{{ $loop->index }}" class="accordion-collapse collapse {{ $loop->first ? 'show' : ''}}" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="alert alert-danger tw-text-sm">
                                    <i class="fa-regular fa-circle-exclamation"></i>
                                    لطفا {{ $attribute->unit }} مورد نظر را انتخاب کنید
                                </div>
                                <div class="box">
                                    <div class="tw-flex tw-items-center tw-justify-between mb-3">
                                        <span class="title">
                                            {{ $attribute->name }}
                                            <a href="#"><i class="fa-regular fa-circle-question"></i></a>
                                        </span>
                                        <div class="product-option-next-prev">
                                            <button class="product-option-prev"><i class="fa fa-chevron-right"></i></button>
                                            <button class="product-option-next"><i class="fa fa-chevron-left"></i></button>
                                        </div>
                                    </div>
                                    <div class="swiper swiper-product-options">
                                        <div class="swiper-wrapper">
                                            @forelse($items as $item)
                                                <div class="swiper-slide">
                                                    <label class="product-template {{ !$item->isInStock($product->id) ? 'not_found' : '' }}" for="{{ $item->value }}">
                                                        <img src="{{ $item->img }}" alt="">
                                                        <span>{{ $item->description }}</span>
                                                        @if ($item->isInStock($product->id))
                                                            <input type="radio" data-real="true" name="param[{{ $attribute->id }}]" id="{{ $item->value }}" value="{{ $item->value }}" wire:model.defer="selectedAttributes.{{ $attribute->id }}" wire:click="checkStockAndPrice">
                                                        @else
                                                            <input type="radio" data-real="true" name="param[{{ $attribute->id }}]" id="{{ $item->value }}" value="{{ $item->value }}" disabled>
                                                        @endif
                                                    </label>
                                                </div>
                                            @empty
                                                <div> خصوصیتی برای این ویژگی تعریف نشده</div>
                                            @endforelse
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: MODEL -->
                @endif

                @if($attribute->display_type == 'priceModel')
                    @php
                        $items = $attribute->properties;
                    @endphp
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#col{{ $loop->index }}" aria-expanded="true" aria-controls="collapse">
                                <div class="stepNum">
                                    <span>{{ $loop->index + 1 }}</span>
                                    <i class="fa-regular fa-circle-exclamation"></i>
                                </div>
                                انتخاب {{ $attribute->name }}
                            </button>
                        </h2>
                        <div id="col{{ $loop->index }}" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="alert alert-danger tw-text-sm">
                                    <i class="fa-regular fa-circle-exclamation"></i>
                                    لطفا {{ $attribute->unit }} مورد نظر را انتخاب کنید
                                </div>
                                <div class="box">
                                    <div class="tw-flex tw-items-center tw-justify-between mb-3">
                                        <span class="title">
                                            {{ $attribute->name }}
                                            <a href="#"><i class="fa-regular fa-circle-question"></i></a>
                                        </span>
                                        <div class="product-option-next-prev">
                                            <button class="product-option-prev"><i class="fa fa-chevron-right"></i></button>
                                            <button class="product-option-next"><i class="fa fa-chevron-left"></i></button>
                                        </div>
                                    </div>
                                    <div class="swiper swiper-product-options">
                                        <div class="swiper-wrapper">
                                            @forelse ($items as $item)
                                                @php
                                                    $combinations = $item->attributeCombinations->where('product_id', $product->id);
                                                @endphp
                                                <div class="swiper-slide">
                                                    <label class="product-type {{ !$item->isInStock($product->id) ? 'not_found' : '' }}" for="{{ $item->id }}">
                                                        <div class="tw-relative">
                                                            <img src="{{ $item->img }}" alt="">
                                                            <div class="tw-absolute -tw-bottom-2 tw-z-20 tw-right-0 tw-flex tw-items-center tw-w-full tw-px-1"></div>
                                                        </div>
                                                        @if ($item->isInStock($product->id))
                                                            <input type="radio" name="param[{{ $attribute->id }}]" value="{{ $item->value }}" id="{{ $item->id }}" wire:model.defer="selectedAttributes.{{ $attribute->id }}" wire:click="checkStockAndPriceAndPrice">
                                                        @else
                                                            <input type="radio" name="param[{{ $attribute->id }}]" value="{{ $item->value }}" id="{{ $item->id }}" disabled>
                                                        @endif
                                                        <div class="tw-flex py-1 tw-items-center tw-justify-between my-1 body">
                                                            <div class="center-between">
                                                                <span>{{ $item->description }}</span>
                                                                <a href="#"><i class="fa-solid fa-circle-info"></i></a>
                                                            </div>
                                                            @if ($combinations->isNotEmpty())
                                                                @foreach ($combinations as $combination)
                                                                    @if ($combination->price > 0)
                                                                        <span class="tw-font-semibold tw-text-black tw-mt-auto">{{ $combination->sale_price ?? $combination->price }}
                                                                            <svg style="width: 16px; height: 16px;" class="tw-inline-block">
                                                                                <use xlink:href="#toman"></use>
                                                                            </svg>
                                                                        </span>
                                                                    @else
                                                                        <span class="tw-font-semibold tw-text-black tw-mt-auto">رایگان</span>
                                                                    @endif
                                                                @endforeach
                                                            @else
                                                                <span class="tw-font-semibold tw-text-black tw-mt-auto">رایگان</span>
                                                            @endif
                                                        </div>
                                                    </label>
                                                </div>
                                            @empty
                                                <div> خصوصیتی برای این ویژگی تعریف نشده</div>
                                            @endforelse
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

                @if($attribute->display_type == 'value')
                    @php
                        $attribute=$attribute;
                        $items = $attribute->properties;
                    @endphp
                    <!-- START: OTHER OPTIONS Count -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#col{{ $loop->index  }}" aria-expanded="true" aria-controls="collapse">
                                <div class="stepNum">
                                    <span>{{ $loop->index+1 }}</span>
                                    <i class="fa-regular fa-circle-exclamation"></i>
                                </div>
                                {{$attribute->name}}
                            </button>
                        </h2>
                        <div id="col{{ $loop->index  }}" class="accordion-collapse collapse  {{ $loop->first ? 'show' : ''}}" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="alert alert-danger tw-text-sm">
                                    <i class="fa-regular fa-circle-exclamation"></i>
                                    لطفا گزینه مورد نظر  {{$attribute->name}} را انتخاب کنید
                                </div>
                                <div class="mb-3 tw-w-36">
                                    @forelse ($items as $item)

                                            <label for="count_input" class="title form-label">
                                                {{ $item->description }}
                                                <a href="#"><i class="fa-regular fa-circle-question"></i></a>
                                            </label>
                                            @if ($item->isInStock($product->id))
                                            <input data-real="true" name="param[{{ $attribute->id }}][{{ $item->value }}]" type="number" class="form-control tw-w-full" min="0" value="1" id="count_input" placeholder="{{ $item->base_unit }}">
                                            @else
                                            <input data-real="true" name="param[{{ $attribute->id }}][{{ $item->value }}]" type="number" class="form-control tw-w-full" min="0" value="1" id="count_input" placeholder="{{ $item->base_unit }}" disabled>
                                            @endif
                                    @empty
                                        <div> خصوصیتی برای این ویژگی تعریف نشده</div>
                                    @endforelse
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: OTHER OPTIONS -->
                @endif


            @endforeach

            <!-- START: OTHER OPTIONS Count -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#col{{ $product->attributes->count()+1  }}" aria-expanded="true" aria-controls="collapse">
                        <div class="stepNum">
                            <span>{{ $product->attributes->count()+1  }}</span>
                            <i class="fa-regular fa-circle-exclamation"></i>
                        </div>
                        تعداد سفارش
                    </button>
                </h2>
                <div id="col{{ $product->attributes->count()+1  }}" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div class="alert alert-danger tw-text-sm">
                            <i class="fa-regular fa-circle-exclamation"></i>
                            لطفا تعداد مورد نظر را انتخاب کنید
                        </div>
                        <div class="mb-3 tw-w-36">

                            <label for="count_input" class="title form-label">
                                تعداد سفارش
                                <a href="#"><i class="fa-regular fa-circle-question"></i></a>
                            </label>
                            <input data-real="true" name="quantity" type="number" class="form-control tw-w-full" min="0" value="1" id="count_input" placeholder="عدد ">
                        </div>
                        {{-- <div class="box">
                            <div class="row mt-2">
                                <div class="tw-hidden lg:tw-block col-lg-2">
                                    <i class="fa-regular fa-shield-check tw-text-7xl tw-text-amber-500"></i>
                                </div>
                                <div class="col-12 col-lg-10">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="warranty" value="1warranty" id="warranty1">
                                        <div>
                                            <label class="form-check-label" for="warranty1">
                                                3 سال گارانتی محدود
                                            </label>
                                            <span class="tw-text-[var(--primary)] ms-3">رایگان</span>
                                        </div>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="warranty" value="2warranty" id="warranty2" checked>
                                        <div>
                                            <label class="form-check-label" for="warranty2">
                                                5 سال گارانتی محدود
                                            </label>
                                            <span class="tw-text-[var(--primary)] ms-3">60 هزارتومان</span>
                                        </div>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="warranty" value="3warranty" id="warranty3" checked>
                                        <div>
                                            <label class="form-check-label" for="warranty3">
                                                5 سال گارانتی نامحدود
                                            </label>
                                            <span class="tw-text-[var(--primary)] ms-2">120 هزارتومان</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
            <!-- END: OTHER OPTIONS -->
            <div>
                @if ($selectedCombinationStock==0)
                    <p>ترکیب درخواست شده ناموجود است</p>
                @endif

            </div>
        </div>
        <!-- END: OPTION -->
        <!-- END: LOOP -->
    </form>
</div>
