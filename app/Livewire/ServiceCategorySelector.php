<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Service;
use Illuminate\Support\Facades\Log;

class ServiceCategorySelector extends Component
{
    public $selectedServiceType;
    public $selectedCategory = [];
    public $selectedServicesType = ['sewing', 'design', 'installer'];
    public $productId;  // فیلد مخفی برای ذخیره شناسه محصول

    public function mount($productId)
    {
        $this->productId = $productId; // مقداردهی اولیه فیلد مخفی با کد محصول
    }

    public function save()
    {
        // اتصال دسته‌بندی‌ها به خدمات انتخاب شده
        foreach ($this->selectedServicesType as $serviceType) {
            // پیدا کردن سرویس بر اساس نوع و کد محصول یا ایجاد یک نمونه جدید
            $service = Service::firstOrCreate(
                ['type' => $serviceType, 'product_id' => $this->productId]
            );

            // اتصال دسته‌بندی به سرویس
            if ($this->selectedCategory) {
                log::info($this->selectedCategory);
                $service->categories()->sync($this->selectedCategory);

            }
        }

        session()->flash('message', 'دسته‌بندی‌ها با موفقیت برای سرویس‌ها ذخیره شد.');
    }

    public function render()
    {
        $categories = Category::all()->map(function ($category) {
            return [
                'id' => $category->id,
                'text' => $category->title,
            ];
        });

        return view('livewire.service-category-selector', [
            'categories' => $categories,
        ]);
    }
}
