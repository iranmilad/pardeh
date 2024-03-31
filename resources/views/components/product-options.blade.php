<!-- notice: you can use random id for label and input. -->
<!-- notice: you can use random id for label and input. -->
<!-- notice: you can use random id for label and input. -->

<!-- use data-real="true" if you want to get calculated price and time after changing items. use in input -->
<!-- use data-real="true" if you want to get calculated price and time after changing items. use in input -->
<!-- use data-real="true" if you want to get calculated price and time after changing items. use in input -->

<!-- use checked in input to set default  -->

<form id="product-options">
    @csrf
    <!-- START: LOOP -->
    <!-- START: ACCORDION WITH SUB OPTION -->
    <!-- <div class="accordion subaccordion-product" id="subAcoordion2">
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed first-accodrdion-btn" type="button" data-bs-toggle="collapse" data-bs-target="#first1" aria-expanded="false" aria-controls="collapse">
                    پرده رو
                </button>
            </h2>
            <div id="first1" class="accordion-collapse collapse" data-bs-parent="#subAcoordion2">
                <div class="accordion-body">
                    <div class="accordion accordion-product" id="accordionExample">
                        START: COLOR
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#col23" aria-expanded="true" aria-controls="collapse123">
                                    <div class="stepNum">
                                        <span>1</span>
                                        <i class="fa-regular fa-circle-exclamation"></i>
                                    </div>
                                    انتخاب رنگ
                                </button>
                            </h2>
                            <div id="collapse123" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="alert alert-danger tw-text-sm">
                                        <i class="fa-regular fa-circle-exclamation"></i>
                                        لطفا یک رنگ را انتخاب کنید
                                    </div>
                                    <div class="box">
                                        <div class="tw-flex tw-items-center tw-justify-between mb-3">
                                            <span class="title">
                                                رنگ کلاسیک
                                                <a href="#"><i class="fa-regular fa-circle-question"></i></a>
                                            </span>
                                            <div class="product-option-next-prev">
                                                <button class="product-option-prev"><i class="fa fa-chevron-right"></i></button>
                                                <button class="product-option-next"><i class="fa fa-chevron-left"></i></button>
                                            </div>
                                        </div>
                                        <div class="swiper swiper-product-options">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <label class="product-template" for="m1">
                                                        <svg width="100%" height="135" xmlns="http://www.w3.org/2000/svg">
                                                            <rect width="100%" height="100%" fill="#334155" />
                                                        </svg>
                                                        <span>خاکستری</span>
                                                        <input type="radio" checked data-real="true" name="color[item]" value="#334155" id="m1">
                                                    </label>
                                                </div>
                                                <div class="swiper-slide">
                                                    <label class="product-template" for="m2">
                                                        <svg width="100%" height="135" xmlns="http://www.w3.org/2000/svg">
                                                            <rect width="100%" height="100%" fill="#ef4444" />
                                                        </svg>
                                                        <span>قرمز</span>
                                                        <input type="radio" data-real="true" name="color[item]" value="#ef4444" id="m2">
                                                    </label>
                                                </div>
                                                <div class="swiper-slide">
                                                    <label class="product-template" for="m3">
                                                        <svg width="100%" height="135" xmlns="http://www.w3.org/2000/svg">
                                                            <rect width="100%" height="100%" fill="#f97316" />
                                                        </svg>
                                                        <span>نارنجی</span>
                                                        <input type="radio" data-real="true" name="color[item]" value="#f97316" id="m3">
                                                    </label>
                                                </div>
                                                <div class="swiper-slide">
                                                    <label class="product-template" for="m4">
                                                        <svg width="100%" height="135" xmlns="http://www.w3.org/2000/svg">
                                                            <rect width="100%" height="100%" fill="#eab308" />
                                                        </svg>
                                                        <span>زرد</span>
                                                        <input type="radio" data-real="true" name="color[item]" value="#eab308" id="m4">
                                                    </label>
                                                </div>
                                                <div class="swiper-slide">
                                                    <label class="product-template" for="m5">
                                                        <svg width="100%" height="135" xmlns="http://www.w3.org/2000/svg">
                                                            <rect width="100%" height="100%" fill="#84cc16" />
                                                        </svg>
                                                        <span>سبز لیمویی</span>
                                                        <input type="radio" data-real="true" name="color[item]" value="#84cc16" id="m5">
                                                    </label>
                                                </div>
                                                <div class="swiper-slide">
                                                    <label class="product-template" for="m6">
                                                        <svg width="100%" height="135" xmlns="http://www.w3.org/2000/svg">
                                                            <rect width="100%" height="100%" fill="#22c55e" />
                                                        </svg>
                                                        <span>سبز</span>
                                                        <input type="radio" data-real="true" name="color[item]" value="#22c55e" id="m6">
                                                    </label>
                                                </div>
                                                <div class="swiper-slide">
                                                    <label class="product-template" for="m7">
                                                        <svg width="100%" height="135" xmlns="http://www.w3.org/2000/svg">
                                                            <rect width="100%" height="100%" fill="#06b6d4" />
                                                        </svg>
                                                        <span>آبی آسمانی</span>
                                                        <input type="radio" data-real="true" name="color[item]" value="#06b6d4" id="m7">
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        END: COLOR

                        START: MATERIAL
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#col" aria-expanded="true" aria-controls="collapse">
                                    <div class="stepNum">
                                        <span></span>
                                        <i class="fa-regular fa-circle-exclamation"></i>
                                    </div>
                                    انتخاب جنس پرده
                                </button>
                            </h2>
                            <div id="col" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="alert alert-danger tw-text-sm">
                                        <i class="fa-regular fa-circle-exclamation"></i>
                                        لطفا یک رنگ را انتخاب کنید
                                    </div>
                                    <div class="box">
                                        <div class="tw-flex tw-items-center tw-justify-between mb-3">
                                            <span class="title">
                                                کالکشن کلاسیک
                                                <a href="#"><i class="fa-regular fa-circle-question"></i></a>
                                            </span>
                                            <div class="product-option-next-prev">
                                                <button class="product-option-prev"><i class="fa fa-chevron-right"></i></button>
                                                <button class="product-option-next"><i class="fa fa-chevron-left"></i></button>
                                            </div>
                                        </div>
                                        <div class="swiper swiper-product-options">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <label class="product-template" for="mm1">
                                                        <img src="{{ Vite::asset('resources/images/materials/1.jpg') }}" alt="">
                                                        <span>کتان</span>
                                                        <input type="radio" data-real="true" checked name="material" id="mm1">
                                                    </label>
                                                </div>
                                                <div class="swiper-slide">
                                                    <label class="product-template" for="mm2">
                                                        <img src="{{ Vite::asset('resources/images/materials/2.jpg') }}" alt="">
                                                        <span>حریر</span>
                                                        <input type="radio" data-real="true" name="material" id="mm2">
                                                    </label>
                                                </div>
                                                <div class="swiper-slide">
                                                    <label class="product-template" for="mm3">
                                                        <img src="{{ Vite::asset('resources/images/materials/3.jpg') }}" alt="">
                                                        <span>مخمل</span>
                                                        <input type="radio" data-real="true" name="material" id="mm3">
                                                    </label>
                                                </div>
                                                <div class="swiper-slide">
                                                    <label class="product-template" for="mm4">
                                                        <img src="{{ Vite::asset('resources/images/materials/4.jpg') }}" alt="">
                                                        <span>هازان</span>
                                                        <input type="radio" data-real="true" name="material" id="mm4">
                                                    </label>
                                                </div>
                                                <div class="swiper-slide">
                                                    <label class="product-template" for="mm5">
                                                        <img src="{{ Vite::asset('resources/images/materials/5.jpg') }}" alt="">
                                                        <span>مخمل پتینه</span>
                                                        <input type="radio" data-real="true" name="material" id="mm5">
                                                    </label>
                                                </div>
                                                <div class="swiper-slide">
                                                    <label class="product-template" for="mm6">
                                                        <img src="{{ Vite::asset('resources/images/materials/6.jpg') }}" alt="">
                                                        <span>کتان مخمل</span>
                                                        <input type="radio" data-real="true" name="material" id="mm6">
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                         END: MATERIAL
                    </div>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed first-accodrdion-btn" type="button" data-bs-toggle="collapse" data-bs-target="#second2" aria-expanded="false" aria-controls="second">
                    پرده زیر
                </button>
            </h2>
            <div id="second2" class="accordion-collapse collapse" data-bs-parent="#subAcoordion2">
                <div class="accordion-body">
                    آیتم های نمونه پایین در اینجا قرار میگیرد
                </div>
            </div>
        </div>
    </div> -->
    <!-- END: ACCORDION WITH SUB OPTION -->



    <!-- START: OPTION -->
    <div class="accordion accordion-product" id="accordionExample">
        <input type="hidden" data-real="true" name="param[product]" value="{{ $product->id }}">

        @if(request()->has('installer'))
            <input type="hidden" data-real="true" name="param[installer]" value="{{ request()->input('installer') }}">
        @endif

        @if(request()->has('design'))
            <input type="hidden" data-real="true" name="param[design]" value="{{ request()->input('design') }}">
        @endif

        @if(request()->has('sewing'))
            <input type="hidden" data-real="true" name="param[sewing]" value="{{ request()->input('sewing') }}">
        @endif


        @foreach ($product->attributes()->get() as $attributes)



            @if($attributes->display_type =='color' )
                @php
                    $attribute=$attributes;
                @endphp
                <!-- START: COLOR -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="{{ '#col'.$loop->index  }}" aria-expanded="true" aria-controls="collapse">
                            <div class="stepNum">
                                <span>{{ $loop->index+1 }}</span>
                                <i class="fa-regular fa-circle-exclamation"></i>
                            </div>
                            انتخاب {{ $attribute->name }}
                        </button>
                    </h2>
                    <div id="{{ 'col'.$loop->index  }}" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
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
                                            <!-- Loop through attribute items and generate HTML for each color option -->
                                            @foreach($attribute->items()->get() as $item)
                                            <div class="swiper-slide">
                                                <label class="product-template" for="{{ $item->id }}">
                                                    @if ($item->img)
                                                        <img width="100%" height="135" src="{{$item->img}}" alt="{{ $item->name }}" srcset="">
                                                    @else
                                                        <svg width="100%" height="135" xmlns="http://www.w3.org/2000/svg">
                                                            <rect width="100%" height="100%" fill="{{ $item->name }}" />
                                                        </svg>
                                                    @endif
                                                    <span>{{ $item->details }}</span>
                                                    <input type="radio" data-real="true" name="param[{{ $attribute->id }}]" value="{{ $item->name }}" id="{{ $item->id }}" {{ $loop->first ? 'checked' : '' }}>
                                                </label>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
                <!-- END: COLOR -->

            @endif

            @if($attributes->display_type == 'material')
                @php
                    $attribute=$attributes;
                    $items = $attribute->items;
                @endphp

                <!-- START: item -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#col{{ $loop->index  }}" aria-expanded="true" aria-controls="collapse">
                            <div class="stepNum">
                                <span>{{ $loop->index+1 }}</span>
                                <i class="fa-regular fa-circle-exclamation"></i>
                            </div>
                            انتخاب {{ $attribute->name }}
                        </button>
                    </h2>
                    <div id="col{{ $loop->index  }}" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
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
                                        <!-- Loop through attribute items and generate HTML for each item option -->
                                        @foreach($items as $item)
                                        <div class="swiper-slide">
                                            <label class="product-template" for="{{ $item['name'] }}">
                                                <img src="{{ $item['img'] }}" alt="">
                                                <span>{{ $item['details'] }}</span>
                                                <input type="radio" data-real="true" name="param[{{ $attribute->id }}]"  id="{{ $item['name'] }}" value="{{ $item['name'] }}" {{ $loop->first ? 'checked' : '' }}>
                                            </label>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: item -->
            @endif




            @if($attributes->display_type == 'size')
                @php
                    $attribute=$attributes;
                    $items = $attribute->items;
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
                    <div id="col{{ $loop->index  }}" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
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
                                        @foreach($items as $item)
                                        <div class="swiper-slide">
                                            <div class="product-type" for="">
                                                <img src="{{ $item->img }}" alt="">
                                                <div class="tw-flex py-1 tw-items-center tw-justify-between my-1 body">
                                                    <span>{{ $item->details }} ( {{ $item->base_unit }} )</span>
                                                    <input class="form-control" name="param[{{ $attribute->id }}][{{ $item->name }}]" data-real="true" type="number" value="0" placeholder="{{ $item->base_unit }}">
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: OTHER OPTIONS -->
            @endif

            @if($attributes->display_type == 'model')
                @php
                    $attribute=$attributes;
                    $items = $attribute->items;
                @endphp
                <!-- START: MATERIAL -->
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
                    <div id="col{{ $loop->index  }}" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="alert alert-danger tw-text-sm">
                                <i class="fa-regular fa-circle-exclamation"></i>
                                لطفا {{$attribute->unit}} مورد نظر را انتخاب کنید
                            </div>
                            <div class="box">
                                <div class="tw-flex tw-items-center tw-justify-between mb-3">
                                    <span class="title">
                                        {{$attribute->name}}
                                        <a href="#"><i class="fa-regular fa-circle-question"></i></a>
                                    </span>
                                    <div class="product-option-next-prev">
                                        <button class="product-option-prev"><i class="fa fa-chevron-right"></i></button>
                                        <button class="product-option-next"><i class="fa fa-chevron-left"></i></button>
                                    </div>
                                </div>
                                <div class="swiper swiper-product-options">
                                    <div class="swiper-wrapper">
                                        @foreach($items as $item)
                                        <div class="swiper-slide">
                                            <label class="product-type" for="{{ $item->id }}">
                                                <img src="{{ $item->img }}" alt="">
                                                <span>{{ $item->details }}</span>
                                                <input type="radio" data-real="true" name="param[{{ $attribute->id }}]" value="{{ $item->name }}" id="{{ $item->id }}" {{ $loop->first ? 'checked' : '' }}>
                                            </label>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: MATERIAL -->
            @endif


            @if($attributes->display_type == 'priceModel')
                @php
                    $attribute=$attributes;
                    $items = $attribute->items;
                @endphp
                <!-- START: OTHER OPTIONS -->
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
                    <div id="col{{ $loop->index  }}" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="alert alert-danger tw-text-sm">
                                <i class="fa-regular fa-circle-exclamation"></i>
                                لطفا {{$attribute->unit}} مورد نظر را انتخاب کنید
                            </div>
                            <div class="box">
                                <div class="tw-flex tw-items-center tw-justify-between mb-3">
                                    <span class="title">
                                        {{$attribute->name}}
                                        <a href="#"><i class="fa-regular fa-circle-question"></i></a>
                                    </span>
                                    <div class="product-option-next-prev">
                                        <button class="product-option-prev"><i class="fa fa-chevron-right"></i></button>
                                        <button class="product-option-next"><i class="fa fa-chevron-left"></i></button>
                                    </div>
                                </div>
                                <div class="swiper swiper-product-options">
                                    <div class="swiper-wrapper">
                                        @foreach($items as $item)
                                        <div class="swiper-slide">
                                            <label class="product-type" for="{{ $item->id }}">
                                                <div class="tw-relative">
                                                    <img src="{{ $item->img }}" alt="">
                                                    <div class="tw-absolute -tw-bottom-2 tw-z-20 tw-right-0 tw-flex tw-items-center tw-w-full tw-px-1">
                                                    </div>
                                                </div>
                                                <input type="radio" name="param[{{ $attribute->id }}]" value="{{ $item->name }}" id="{{ $item->id }}" {{ $loop->first ? 'checked' : '' }}>
                                                <div class="tw-flex py-1 tw-items-center tw-justify-between my-1 body">
                                                    <div class="center-between">
                                                        <span>{{ $item->details }}</span>
                                                        <a href="#"><i class="fa-solid fa-circle-info"></i></a>
                                                    </div>
                                                    <!-- <div class="tw-w-full tw-px-2 tw-mt-2 d-none">
                                                        <span>
                                                            کنترل
                                                            <i class="fa-solid fa-circle-info tw-text-xs tw-text-indigo-500"></i>
                                                        </span>
                                                        <select class="form-select tw-text-xs" name="" id="">
                                                            <option value="" selected="">بله</option>
                                                            <option value="">خیر</option>
                                                        </select>
                                                    </div> -->

                                                    @if ($item->price>0)
                                                    <span class="tw-font-semibold tw-text-black tw-mt-auto">{{ $item->price }}
                                                        <svg style="width: 16px; height: 16px;" class="tw-inline-block">
                                                            <use xlink:href="#toman"></use>
                                                        </svg>
                                                    </span>
                                                    @else
                                                    <span class="tw-font-semibold tw-text-black tw-mt-auto">رایگان</span>
                                                    @endif
                                                </div>
                                            </label>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: OTHER OPTIONS -->
            @endif

            @if($attributes->display_type == 'options')
                @php
                    $attribute=$attributes;
                    $items = $attribute->items;
                @endphp
                    <!-- START: Options -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#col{{ $loop->index  }}" aria-expanded="true" aria-controls="collapse">
                                <div class="stepNum">
                                    <span>{{ $loop->index+1 }}</span>
                                    <i class="fa-regular fa-circle-exclamation"></i>
                                </div>
                                <span>انتخاب {{$attribute->name}}</span>
                            </button>
                        </h2>
                        <div id="col{{ $loop->index  }}" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <a class="ms-3 tw-text-xs tw-underline tw-text-left tw-w-full tw-flex tw-justify-end" href="#">راهنما</a>
                                <div class="alert alert-danger tw-text-sm">
                                    <i class="fa-regular fa-circle-exclamation"></i>
                                    لطفا گزینه مورد نظر  {{$attribute->name}} را انتخاب کنید
                                </div>
                                <div class="box">
                                    <div class="row mt-2">
                                        <div class="tw-hidden lg:tw-block col-lg-2  tw-text-7xl tw-text-amber-500">
                                            <i class="fa-regular fa-shield-check"></i>
                                        </div>
                                        <div class="col-12 col-lg-10">
                                            @foreach($items as $item)
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="param[{{ $attribute->id }}]" value="{{ $item->name }}" id="{{ $item->id }}" {{ $loop->first ? 'checked' : '' }}>
                                                <div>
                                                    <label class="form-check-label" for="{{ $item->id }}">
                                                        {{ $item->details }}
                                                    </label>

                                                    <span class="tw-text-indigo-500 ms-3">{{ $item->price>0 ? $item->price.' تومان ': 'رایگان' }} </span>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: Options -->

            @endif


            @if($attributes->display_type == 'value')
                @php
                    $attribute=$attributes;
                    $items = $attribute->items;
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
                    <div id="col{{ $loop->index  }}" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="alert alert-danger tw-text-sm">
                                <i class="fa-regular fa-circle-exclamation"></i>
                                لطفا گزینه مورد نظر  {{$attribute->name}} را انتخاب کنید
                            </div>
                            <div class="mb-3 tw-w-36">
                                @foreach($items as $item)
                                <label for="count_input" class="title form-label">
                                    {{ $item->details }}
                                    <a href="#"><i class="fa-regular fa-circle-question"></i></a>
                                </label>
                                <input data-real="true" name="param[{{ $attribute->id }}][{{ $item->name }}]" type="number" class="form-control tw-w-full" min="0" value="1" id="count_input" placeholder="{{ $item->base_unit }}">
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: OTHER OPTIONS -->
            @endif

        @endforeach


    </div>
    <!-- END: OPTION -->

    <!-- END: LOOP -->
</form>
