<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class product extends Component
{
    public $name;
    public $image;
    public $price;
    public $discountedPrice;
    public $discount;
    public $stock;
    public $available;
    public $mobile;
    public $link;

    /**
     * Create a new component instance.
     *
     * @param string $name
     * @param string|null $image
     */
    public function __construct(
        string $name,
        string $image = null,
        string $price = null,
        string $discountedPrice = null,
        string $discount = null,
        string $stock = null,
        string $available = null,
        bool $mobile = false,
        string $link = ''
    ) {
        $this->name = $name;
        $this->image = $image;
        $this->price = $price;
        $this->discountedPrice = $discountedPrice;
        $this->discount = $discount;
        $this->stock = $stock;
        $this->available = $available;
        $this->mobile = $mobile;
        $this->link = $link;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.product', [
            'name' => $this->name, 'image' => $this->image, 'price' => $this->price,
            'discountedPrice' => $this->discountedPrice, 'discount' => $this->discount,
            'stock' => $this->stock, 'available' => $this->available, 'mobile' => $this->mobile, 'link' => $this->link
        ]);
    }
}
