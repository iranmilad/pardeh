<div>

        <div class="tw-w-full tw-items-center tw-text-sm tw-mb-5 lg:tw-flex tw-hidden">
            <div class="tw-text-sm fw-bold">
                <i class="fa-regular fa-arrow-down-wide-short"></i>
                <span class="tw-text-gray-700">مرتب سازی : </span>
            </div>
            <form wire:submit.prevent="sortBy" id="category-sort" class="tw-mr-4 tw-text-slate-800">
                <label class="category-label-checkbox tw-mx-3" for="sort2">
                    <span class="tw-text-sm">جدیدترین ترین</span>
                    <input wire:model="sortBy" type="radio" id="sort2" value="newest">
                </label>
                <label class="category-label-checkbox tw-mx-3" for="sort1">
                    <span class="tw-text-sm">پرفروش ترین</span>
                    <input wire:model="sortBy" type="radio" id="sort1" value="bestselling">
                </label>
                <label class="category-label-checkbox tw-mx-3" for="sort3">
                    <span class="tw-text-sm">ارزان ترین</span>
                    <input wire:model="sortBy" type="radio" id="sort3" value="cheapest">
                </label>
                <label class="category-label-checkbox tw-mx-3" for="sort4">
                    <span class="tw-text-sm">گرانترین ترین</span>
                    <input wire:model="sortBy" type="radio" id="sort4" value="expensive">
                </label>
                <button type="submit" class="tw-text-sm">اعمال</button>
            </form>
        </div>
        <div class="lg:tw-hidden mb-4 tw-flex tw-justify-between">
            <button class="btn custom-btn-primary tw-rounded-xl" data-bs-toggle="offcanvas" data-bs-target="#mobileFilter">
                <i class="fa-duotone fa-filter-list"></i>
                <span>فیلتر</span>
            </button>
            <form wire:submit.prevent="sortBy">
                <select wire:model="sortBy" class="form-select tw-w-max" id="category-sort-mobile">
                    <option default selected disabled value="">مرتب سازی</option>
                    <option value="newest">پرفروش ترین</option>
                    <option value="bestselling">جدیدترین ترین</option>
                    <option value="cheapest">ارزان ترین</option>
                    <option value="expensive">گرانترین ترین</option>
                </select>
            </form>
        </div>

        <div class="row gy-2 gx-3 category-post">
            @foreach ($products as $product)
                <div class="col-sm-12 col-md-6 col-lg-4 position-relative tw-h-auto">
                    <x-product mobile name="{{ $product->title }}"  nobtn available="true" stock="{{ $product->quantity }}" discountedPrice="{{ $product->sale_price }}" discount="{{  $product->discountPercentage  }}" price="{{ $product->price }}" image="{{ $product->img }}" />
                </div>
            @endforeach
        </div>

        <!-- PAGINATION -->
        <div id="category-pagination"  class="d-flex justify-content-center">
            <!-- for first load just do it -->
            {{ $products->links() }}
            <!-- <div class="first-pagination" data-total="10" data-value="2"></div> -->
        </div>
        <!-- PAGINATION -->

</div>
