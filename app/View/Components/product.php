<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Product extends Component
{
    public $name;
    public $image;
    public $image2;
    public $price;
    public $discountedPrice;
    public $discount;
    public $stock;
    public $available;
    public $mobile;
    public $link;
    public $nobtn;
    public $salePriceDate;

    /**
     * Create a new component instance.
     *
     * @param string $name
     * @param string|null $image
     * @param string|null $image2
     * @param string|null $price
     * @param string|null $discountedPrice
     * @param string|null $discount
     * @param string|null $stock
     * @param string|null $available
     * @param bool $mobile
     * @param string $link
     * @param bool|null $nobtn
     * @param string $sale_price_date
     */
    public function __construct(
        string $name,
        string $image = null,
        string $image2 = null,
        string $price = null,
        string $discountedPrice = null,
        string $discount = null,
        string $stock = null,
        string $available = null,
        bool $mobile = false,
        string $link = '',
        bool $nobtn = null,
        string $salePriceDate = ''
    ) {
        $this->name = $name;
        $this->image = $image;
        $this->image2 = $image2;
        $this->price = $price;
        $this->discountedPrice = $discountedPrice;
        $this->discount = $discount;
        $this->stock = $stock;
        $this->available = $available;
        $this->mobile = $mobile;
        $this->link = $link;
        $this->nobtn = $nobtn;
        $this->salePriceDate = $salePriceDate;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.product', [
            'name' => $this->name,
            'image' => $this->image,
            'image2' => $this->image2,
            'price' => $this->price,
            'discountedPrice' => $this->discountedPrice,
            'discount' => $this->discount,
            'stock' => $this->stock,
            'available' => $this->available,
            'mobile' => $this->mobile,
            'link' => $this->link,
            'nobtn' => $this->nobtn,
            'salePriceDate' => $this->salePriceDate
        ]);
    }
}
