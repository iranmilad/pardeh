<form class="main-search tw-flex">
    <input wire:model.live="searchTerm" type="text" placeholder="جستجوی محصول یا دسته بندی">

    @if(!empty($results))
    <div class="searchButton" wire:loading.class="searchLoading" wire:target="searchTerm">
        <button class="btn" wire:click="clear" type="button" id="mainSearchClose">
            <i class="fas fa-times fw-md fs-5 text-white"></i>
        </button>
        <button type="button" class="btn loadingBtn">
            <svg class="tw-animate-spin -tw-ml-1 tw-mr-3 tw-h-5 tw-w-5 tw-text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="white" stroke-width="4"></circle>
                <path class="opacity-75" fill="#6366f1" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
            </svg>
        </button>
    </div>
    @else
    <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
    @endif
    <div class="main-search-result {{ !empty($results->products) ? 'd-block' : 'd-none' }}">
        <div class="inside">
            <h6 class="tw-mx-4">نتایج جستجو</h6>
            @if(!empty($results))
            @if($results->categories->count() > 0)
            <div class="searches mt-2 mx-3">
                <span class="py-2 d-block fs-7">
                    <i class="fa-duotone fa-grid-2"></i>
                    دسته بندی های مرتبط
                </span>
                @foreach($results->categories as $category)

                <a href="{{$category->link}}" title="" class="badge bg-primary fs-7 rounded-pill tw-p-2 tw-px-3 hover:tw-text-white">{{$category->name}}</a>

                @endforeach
            </div>
            @endif

            @if($results->products->count() > 0)
            <span class="py-2 d-block fs-7 mx-3 mt-4">
                <i class="fa-duotone fa-store"></i>
                محصولات مرتبط</span>
            @foreach($results->products as $product)
            <!-- Search Item:start-->
            <a href="#" class="search-result-item position-relative border-bottom p-3 text-dark ">
                <img src="{{ asset($product->thumbnail) }}" class="tw-w-16 tw-h-16 fw-md fs-5 gray-500 tw-block tw-relative tw-rounded-md" alt="{{ $product->name }}">
                <div class="d-inline-block ms-2">
                    <span class="d-inline-block fw-bold ms-1">{{ $product->name }}</span>

                    <span class="d-block tw-text-gray-500 fs-7">
                    @if (property_exists($product,"categories") && $product->categories->isNotEmpty())
                        در دسته
                        @foreach ($product->categories as $category)
                            <strong>{{ $category->title }}</strong>
                        @endforeach
                    @else
                        بدون دسته بندی
                    @endif
                    </span>
                </div>
            </a>
            <!-- Search Item:end-->
            @endforeach
            @endif
            @endif
        </div>
    </div>
</form>
