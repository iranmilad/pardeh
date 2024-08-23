<?php
namespace App\Livewire;

use Livewire\Component;

class ProductAttributes extends Component
{
    public $product;
    public $selectedCombinationStock = 0;
    public $selectedCombinationPrice = 0;
    public $selectedAttributes = [];

    protected $listeners = ['checkStockAndPrice'];

    public function mount($product)
    {
        $this->product = $product;

        // Set default selected attributes
        foreach ($this->product->attributes as $attribute) {
            if ($attribute->properties->isNotEmpty()) {
                // Set the first property value as default for each attribute
                $this->selectedAttributes[$attribute->id] = $attribute->properties->first()->value;
            }
        }
    }

    public function checkStockAndPrice()
    {
        $combination = $this->product->getCombinationDetails($this->selectedAttributes);
        if ($combination && $combination->stock_quantity > 0) {
            $this->selectedCombinationStock = $combination->stock_quantity;
            $this->selectedCombinationPrice = $combination->sale_price ?? $combination->price;
        }
        else {
            $this->selectedCombinationStock = 0;
            $this->selectedCombinationPrice = 0;
        }
    }

    public function render()
    {
        return view('livewire.product-attributes');
    }
}
