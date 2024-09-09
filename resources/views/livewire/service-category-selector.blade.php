<div>
    <!-- نمایش فرم انتخاب دسته‌بندی برای هر سرویس -->
    <form wire:submit.prevent="save">
        <!-- input hidden برای product_id -->
        <input type="hidden" name="product_id" value="{{ $productId }}" wire:model="productId">

        <!-- انتخاب سرویس -->
        <div class="form-group">
            <label for="serviceType" class="form-label">انتخاب سرویس:</label>
            <select wire:model="selectedServiceType" id="serviceType" class="form-control">
                <option value="">انتخاب کنید</option>
                @foreach ($selectedServicesType as $service)
                    <option value="{{ $service }}">
                        @switch($service)
                            @case('sewing')
                                دوخت
                                @break
                            @case('design')
                                طراحی
                                @break
                            @case('installer')
                                نصب
                                @break
                            @default
                                نامعلوم
                        @endswitch
                    </option>
                @endforeach
            </select>
        </div>

        <!-- انتخاب دسته‌بندی -->
        <div class="form-group mt-4">
            <label for="categorySelect" class="form-label">انتخاب دسته‌بندی:</label>
            <x-advanced-search type="category" label="" name="category" solid :selected="$selectedCategory" />
        </div>

        <!-- دکمه ذخیره -->
        <div class="mt-4">
            <button type="submit" class="btn btn-primary">ذخیره</button>
        </div>
    </form>

    <!-- نمایش پیام موفقیت -->
    @if (session()->has('message'))
        <div class="alert alert-success mt-4">
            {{ session('message') }}
        </div>
    @endif
</div>
