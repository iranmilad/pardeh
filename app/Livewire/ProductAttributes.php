<?php

namespace App\Livewire;

use Livewire\Component;

class ProductAttributes extends Component
{
    public $product;
    public $selectedCombinationStock = true; // تغییر به true برای شروع
    public $selectedCombinationPrice = 0;
    public $selectedAttributes = [];
    public $openAccordionIndex = null;

    protected $listeners = ['checkStockAndPrice'];

    public function mount($product)
    {
        $this->product = $product;

        // Set default selected attributes
        foreach ($this->product->attributes as $attribute) {
            if ($attribute->properties->isNotEmpty()) {
                // Set the first property value as default for each attribute
                $this->selectedAttributes[$attribute->id] = $attribute->properties->first()->id;
            }
        }

        // Initialize the first accordion to be open by default
        $this->openAccordionIndex = 0;
    }

    public function checkStockAndPrice()
    {
        $independentAttributes = [];
        $dependentAttributes = [];

        // دسته‌بندی ویژگی‌ها به مستقل و وابسته
        foreach ($this->product->attributes as $attribute) {
            if ($attribute->independent) {
                $independentAttributes[] = $attribute;
            } else {
                $dependentAttributes[] = $attribute;
            }
        }

        // بررسی موجودی و قیمت ویژگی‌های مستقل
        // foreach ($independentAttributes as $attribute) {
        //     $selectedValue = $this->selectedAttributes[$attribute->id] ?? null;
        //     $combination = $this->product->getIndependentCombinationDetails($attribute->id, $selectedValue);

        //     if ($combination && $combination->stock_quantity > 0) {
        //         // Update price for each independent attribute
        //         $this->selectedCombinationPrice += $combination->sale_price ?? $combination->price;
        //     } else {
        //         // If any independent attribute has no stock, set to false
        //         $this->selectedCombinationStock = false;
        //     }
        // }

        // بررسی موجودی و قیمت ویژگی‌های وابسته
        if (!empty($dependentAttributes)) {
            $combination = $this->product->getCombinationDetails($dependentAttributes);

            if ($combination && $combination->stock_quantity > 0) {
                $this->selectedCombinationPrice += $combination->sale_price ?? $combination->price;
            } else {
                // If no valid dependent combination found, set to false
                $this->selectedCombinationStock = false;
            }
        }
    }

    public function toggleAccordion($index)
    {
        $this->openAccordionIndex = $index;
    }

    public function render()
    {
        return view('livewire.product-attributes');
    }
}
