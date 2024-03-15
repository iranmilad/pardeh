@extends('layouts.primary')

<!-- please fill filters basis on what you want. i just used sample of all types of fields -->
<!-- please fill filters basis on what you want. i just used sample of all types of fields -->
<!-- please fill filters basis on what you want. i just used sample of all types of fields -->

<!-- please use uuid for inputs and labels like => id_knjlkj32 -->
<!-- please use uuid for inputs and labels like => id_knjlkj32 -->
<!-- please use uuid for inputs and labels like => id_knjlkj32 -->
<!-- please use uuid for inputs and labels like => id_knjlkj32 -->
<!-- Example -->
<!-- <label class="category-label-checkbox" for="id_knjlkj32">
    <span class="tw-text-xs">
        پرده زبرا و شید
    </span>
    <input type="radio" name="material" id="id_knjlkj32" value="material1">
</label> -->
<!-- Example -->

<!-- JS FILE: category.js -->

@section('title', config('app.name'))

@section('content')
<div class="container" id="catergory_page">

    <livewire:LoadWidget blockId="block_49" :slug="$category->alias ?? ''" />

    <div class="row">
        <form class="d-none d-lg-block col-12 col-lg-3 category-filters category-filters-desktop">
            <!-- REMOVE FILTERS -->
            <div class="card removeItemsBox d-none">
                <div class="card-header">
                    <div class="">
                        <button type="button" class="btn card-title tw-py-0.5 tw-flex tw-items-center tw-justify-between tw-w-full" data-bs-toggle="collapse" data-bs-target="#collapseRemoveFilters" aria-expanded="true">
                            <span>حذف فیلتر ها</span>
                            <i class="fa-solid fa-chevron-left"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body collapse show" id="collapseRemoveFilters">
                </div>
            </div>
            <!-- REMOVE FILTERS -->

            <livewire:color-options title="رنگ" name="colorBox" :options='[
                ["value" => "black", "label" => "سیاه", "color" => "#000"],
                ["value" => "gray", "label" => "خاکستری", "color" => "#475569"],
                ["value" => "orange", "label" => "نارنجی", "color" => "#f97316"],
                ["value" => "yellow", "label" => "زرد", "color" => "#eab308"],
                ["value" => "blue", "label" => "آبی", "color" => "#0ea5e9"],
                ["value" => "purple", "label" => "بنفش", "color" => "#8b5cf6"],
                ["value" => "pink", "label" => "صورتی", "color" => "#f43f5e"],
            ]' />
            <!-- PRICE RANGE -->
            <div class="card">
                <div class="card-header">
                    <div class="">
                        <button type="button" class="btn card-title tw-py-0.5 tw-flex tw-items-center tw-justify-between tw-w-full" data-bs-toggle="collapse" data-bs-target="#collapsePriceRange" aria-expanded="false">
                            <span> بازه قیمت تومان (متر مربع)</span>
                            <i class="fa-solid fa-chevron-left"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body collapse" id="collapsePriceRange">
                    <!-- START:PRICE INPUT -->
                    <div class="tw-mb-3 tw-ml-2 price-range" data-min="0" data-max="100000000" data-defaultmin="0" data-defaultmax="100000000"></div>
                    <!-- END:PRICE INPUT -->
                    <div class="tw-flex tw-items-center tw-justify-between">
                        <input class="maxPrice" type="text" name="maxprice" />
                        <input class="minPrice" type="text" name="minprice" />
                    </div>
                </div>
            </div>
            <!-- PRICE RANGE -->

            <livewire:checkbox-collapsible name="ability" title="قابلیت" :checkboxes='[
                ["id" => "قابل شستشو", "name" => "ability", "label" => "قابل شستشو", "value" => "قابل شستشو", "title" => "قابل شستشو"],
                ["id" => "ضد افتاب", "name" => "ability", "label" => "ضد افتاب", "value" => "ضد آفتاب", "title" => "ضد آفتاب"]
            ]' />





            <livewire:checkbox title=" کاربری" name="function" :options="[
                ['id' => 'آشپزخانه', 'name' => 'function', 'label' => 'اشپزخانه', 'value' => 'آشپزخانه'],
                ['id' => 'پذیرایی', 'name' => 'function', 'label' => 'پذیرایی', 'value' => 'پذیرایی'],
                ['id' => 'اتاق خواب', 'name' => 'function', 'label' => ' اتاق خواب', 'value' => 'اتاق خواب'],
                ['id' => 'اتاق کودک', 'name' => 'function', 'label' => 'اتاق کودک', 'value' => 'اتاق کودک'],
                ['id' => 'دفتر کار', 'name' => 'function', 'label' => ' دفتر کار', 'value' => 'دفتر کار'],
            ]" />



            <!-- <tlivewire:switch-box title="ویژگی سوییچ باکس" name="switchbox" :options="[
                    ['label' => 'ارسال از فردا', 'value' => '1','id'=>'futureSend'],
                    ['label' => 'ارسال فروشنده', 'value' => '1','id'=>'supplySend'],
            ]" /> -->

            <livewire:radio-box title="وضعیت انبار" name="inventor" :options='[
                ["id" => "inventory", "value" => "1", "label" => "موجود"],
                ["id" => "inventory", "value" => "0", "label" => "همه"]
            ]' />





        </form>
        <div class="col-12 col-lg-9 tw-rounded-2xl" id="products_boxes">
            <div class="tw-w-full tw-items-center tw-text-sm tw-mb-5 lg:tw-flex tw-hidden">
                <div class="tw-text-sm fw-bold">
                    <i class="fa-regular fa-arrow-down-wide-short"></i>
                    <span class="tw-text-gray-700">مرتب سازی : </span>
                </div>
                <form id="category-sort" class="tw-mr-4 tw-text-slate-800">
                    <label class="category-label-checkbox tw-mx-3" for="sort2">
                        <span class="tw-text-sm">جدیدترین ترین</span>
                        <input type="radio" name="sort" id="sort2" value="newest">
                    </label>
                    <label class="category-label-checkbox tw-mx-3" for="sort1">
                        <span class="tw-text-sm">پرفروش ترین</span>
                        <input type="radio" name="sort" id="sort1" value="bestselling">
                    </label>
                    <label class="category-label-checkbox tw-mx-3" for="sort3">
                        <span class="tw-text-sm">ارزان ترین</span>
                        <input type="radio" name="sort" id="sort3" value="cheapest">
                    </label>
                    <label class="category-label-checkbox tw-mx-3" for="sort4">
                        <span class="tw-text-sm">گرانترین ترین</span>
                        <input type="radio" name="sort" id="sort4" name="expensive">
                    </label>
                </form>
            </div>
            <div class="lg:tw-hidden mb-4 tw-flex tw-justify-between">
                <button class="btn custom-btn-primary tw-rounded-xl" data-bs-toggle="offcanvas" data-bs-target="#mobileFilter">
                    <i class="fa-duotone fa-filter-list"></i>
                    <span>فیلتر</span>
                </button>
                <select class="form-select tw-w-max" name="sort" id="category-sort-mobile">
                    <option default selected disabled value="">مرتب سازی</option>
                    <option value="newest">پرفروش ترین</option>
                    <option value="bestselling">جدیدترین ترین</option>
                    <option value="cheapest">ارزان ترین</option>
                    <option value="expensive">گرانترین ترین</option>
                </select>
            </div>
            <div class="row gy-2 gx-3 category-post">

            @foreach ($products as $product)
                <div class="col-sm-12 col-md-6 col-lg-4 position-relative tw-h-auto">
                    <x-product mobile name="{{ $product->title }}"  nobtn available="{{ ($product->quantity >0) ? true : false }}" stock="{{ $product->quantity }}" discountedPrice="{{ $product->sale_price }}" discount="{{  $product->discountPercentage  }}" price="{{ $product->price }}" image="{{ $product->img }}" link="{{ $product->link }}" />
                </div>
            @endforeach
            </div>

            <!-- PAGINATION -->
            <div id="category-pagination">
                <!-- for first load just do it -->
                <div class="first-pagination" data-total="{{ $category->calculatePageCount(12) }}" data-value="{{ $page ?? 1 }}"></div>
            </div>
            <!-- PAGINATION -->
        </div>
    </div>
</div>

    <!-- MOBILE FILTER -->
    <div class="offcanvas offcanvas-start" data-bs-scroll="false" data-bs-backdrop="true" tabindex="-1" id="mobileFilter" aria-labelledby="offcanvasBottomLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasBottomLabel">فیلتر ها</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body tw-overflow-y-auto">
            <form class="category-filters category-filters-mobile">
                <!-- REMOVE FILTERS -->
                <div class="card removeItemsBox d-none">
                    <div class="card-header">
                        <div class="">
                            <button type="button" class="btn card-title tw-py-0.5 tw-flex tw-items-center tw-justify-between tw-w-full" data-bs-toggle="collapse" data-bs-target="#collapseRemoveFilters" aria-expanded="true">
                                <span>حذف فیلتر ها</span>
                                <i class="fa-solid fa-chevron-left"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body collapse show" id="collapseRemoveFilters">
                    </div>
                </div>
                <!-- REMOVE FILTERS -->

                <!-- PRICE RANGE -->
                <div class="card">
                    <div class="card-header">
                        <div class="">
                            <button type="button" class="btn card-title tw-py-0.5 tw-flex tw-items-center tw-justify-between tw-w-full" data-bs-toggle="collapse" data-bs-target="#collapsePriceRange" aria-expanded="false">
                                <span>بازه قیمت</span>
                                <i class="fa-solid fa-chevron-left"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body collapse" id="collapsePriceRange">
                        <!-- START:PRICE INPUT -->
                        <div class="tw-mb-3 tw-ml-2 price-range" data-min="0" data-max="100" data-defaultmin="20" data-defaultmax="80"></div>
                        <!-- END:PRICE INPUT -->
                        <div class="tw-flex tw-items-center tw-justify-between">
                            <input class="maxPrice" type="text" name="maxprice" />
                            <input class="minPrice" type="text" name="minprice" />
                        </div>
                    </div>
                </div>
                <!-- PRICE RANGE -->

                <!-- COLLAPSIBLE CHECKBOX -->
                <div class="card">
                    <div class="card-header">
                        <div class="">
                            <button type="button" class="btn card-title tw-py-0.5 tw-flex tw-items-center tw-justify-between tw-w-full" data-bs-toggle="collapse" data-bs-target="#collapseCheckbox" aria-expanded="false">
                                <span>ویژگی چک باکس</span>
                                <i class="fa-solid fa-chevron-left"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body collapse" id="collapseCheckbox">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="checkbox" value="0" id="flexCheckDefault1" title="موجود" data-parent="چک باکس">
                            <label class="form-check-label tw-text-sm" for="flexCheckDefault1">
                                موجود
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="checkbox" value="1" id="flexCheckDefault2" title="همه" data-parent="چک باکس">
                            <label class="form-check-label tw-text-sm" for="flexCheckDefault2">
                                همه
                            </label>
                        </div>
                    </div>
                </div>
                <!-- COLLAPSIBLE CHECKBOX -->


                <!-- START:CHECKBOX -->
                <div class="card">
                    <div class="card-header">
                        <div class="">
                            <button type="button" class="btn card-title tw-py-0.5 tw-flex tw-items-center tw-justify-between tw-w-full" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" aria-expanded="false">
                                <span>دیزاین استایل</span>
                                <i class="fa-solid fa-chevron-left"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body collapse tw-flex tw-justify-start tw-flex-col" id="collapseWidthExample">
                    <label class="category-label-checkbox" for="material1_1">
                        <span class="tw-text-xs">
                            پرده زبرا و شید
                        </span>
                        <input type="radio" name="material" id="material1_1" value="material1">
                    </label>
                    <label class="category-label-checkbox" for="material2_2">
                        <span class="tw-text-xs">
                            پرده چین دار
                        </span>
                        <input type="radio" name="material" id="material2_2" value="material2">
                    </label>
                    <label class="category-label-checkbox" for="material3_3">
                        <span class="tw-text-xs">
                            پرده پانچی
                        </span>
                        <input type="radio" name="material" id="material3_3" value="material3">
                    </label>
                    <label class="category-label-checkbox" for="material4_4">
                        <span class="tw-text-xs">
                            پرده چاپی
                        </span>
                        <input type="radio" name="material" id="material4_4" value="material4">
                    </label>
                    <label class="category-label-checkbox" for="material5_5">
                        <span class="tw-text-xs">
                            پرده هازان
                        </span>
                        <input type="radio" name="material" id="material5_5" value="material5">
                    </label>
                </div>
                </div>
                <!-- END:CHECKBOX -->

                <!-- SWITCH BOX -->
                <div class="card">
                    <div class="card-header">
                        <div class="">
                            <button type="button" class="btn card-title tw-py-0.5 tw-flex tw-items-center tw-justify-between tw-w-full" data-bs-toggle="collapse" data-bs-target="#collapseSwitchBox" aria-expanded="false">
                                <span>ویژگی سوییچ باکس</span>
                                <i class="fa-solid fa-chevron-left"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body collapse" id="collapseSwitchBox">
                        <div class="form-check form-switch">
                            <label class="form-check-label tw-text-sm" for="flexCheckDefault1">
                                ارسال از فردا
                            </label>
                            <input class="form-check-input" type="checkbox" value="0" name="switchbox" id="flexCheckDefault1">
                        </div>
                        <div class="form-check form-switch">
                            <label class="form-check-label tw-text-sm" for="defaultx1">
                                ارسال فروشنده
                            </label>
                            <input class="form-check-input" type="checkbox" value="1" name="switchbox" id="defaultx1">
                        </div>
                    </div>
                </div>
                <!-- SWITCH BOX -->


                <!-- RADIO BOX -->
                <div class="card">
                    <div class="card-header">
                        <div class="">
                            <button type="button" class="btn card-title tw-py-0.5 tw-flex tw-items-center tw-justify-between tw-w-full" data-bs-toggle="collapse" data-bs-target="#collapseRadioBox" aria-expanded="false">
                                <span>ویژگی رادیو باکس</span>
                                <i class="fa-solid fa-chevron-left"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body collapse" id="collapseRadioBox">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" value="0" name="radiobox" id="flexCheckDefaultasas1">
                            <label class="form-check-label tw-text-sm" for="flexCheckDefaultasas1">
                                موجود
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" value="1" name="radiobox" id="flexCheckDefault2">
                            <label class="form-check-label tw-text-sm" for="flexCheckDefault2">
                                همه
                            </label>
                        </div>
                    </div>
                </div>
                <!-- RADIO BOX -->


                <!-- COLOR OPTIONS -->
                <div class="card">
                    <div class="card-header">
                        <div class="">
                            <button type="button" class="btn card-title tw-py-0.5 tw-flex tw-items-center tw-justify-between tw-w-full" data-bs-toggle="collapse" data-bs-target="#collapseColorOptions" aria-expanded="false">
                                <span>ویژگی رنگ</span>
                                <i class="fa-solid fa-chevron-left"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body collapse" id="collapseColorOptions">
                        <div class="tw-pr-0">
                            <div class="flex tw-flex-col tw-justify-start tw-space-y-2">
                                <div class="parde-color parde-color-row">
                                    <label class="">
                                        <svg width="35" height="35" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="50" cy="50" r="50" fill="#000" />
                                        </svg>
                                        <input type="checkbox" name="colorBox" value="black">
                                    </label>
                                    <span>سیاه</span>
                                </div>
                                <div class="parde-color parde-color-row">
                                    <label class="">
                                        <svg width="35" height="35" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="50" cy="50" r="50" fill="#475569" />
                                        </svg>
                                        <input type="checkbox" name="colorBox" value="gray">
                                    </label>
                                    <span>خاکستری</span>
                                </div>
                                <div class="parde-color parde-color-row">
                                    <label class="">
                                        <svg width="35" height="35" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="50" cy="50" r="50" fill="#f97316" />
                                        </svg>
                                        <input type="checkbox" name="colorBox" value="orange">
                                    </label>
                                    <span>نارنجی</span>
                                </div>
                                <div class="parde-color parde-color-row">
                                    <label class="">
                                        <svg width="35" height="35" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="50" cy="50" r="50" fill="#eab308" />
                                        </svg>
                                        <input type="checkbox" name="colorBox" valu="yellow">
                                    </label>
                                    <span>زرد</span>
                                </div>
                                <div class="parde-color parde-color-row">
                                    <label class="">
                                        <svg width="35" height="35" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="50" cy="50" r="50" fill="#0ea5e9" />
                                        </svg>
                                        <input type="checkbox" name="colorBox" value="blue">
                                    </label>
                                    <span>آبی</span>
                                </div>
                                <div class="parde-color parde-color-row">
                                    <label class="">
                                        <svg width="35" height="35" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="50" cy="50" r="50" fill="#8b5cf6" />
                                        </svg>
                                        <input type="checkbox" name="colorBox" value="purple">
                                    </label>
                                    <span>بنفش</span>
                                </div>
                                <div class="parde-color parde-color-row">
                                    <label class="">
                                        <svg width="35" height="35" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="50" cy="50" r="50" fill="#f43f5e" />
                                        </svg>
                                        <input type="checkbox" name="colorBox" value="pink">
                                    </label>
                                    <span>صورتی</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- COLOR OPTIONS -->

            </form>
        </div>
    </div>
    <!-- MOBILE FILTER -->
@endsection
