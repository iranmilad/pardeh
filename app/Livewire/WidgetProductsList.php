<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use Livewire\WithPagination;

class WidgetProductsList extends Component
{
    use WithPagination;

    public $sortBy = null;
    private $type= "category";
    private $products;
    private $options;
    private $slug;
    protected $paginationTheme = 'bootstrap';

    public function mount($slug=null,$type,$options)
    {
        $this->type = $type;
        $this->slug = $slug;
        $this->options = json_decode($options, true);
        $count = $this->options['count'] ?? 12;

        if ($this->type == "category") {
            $category = Category::where(['alias' => $slug])->first();
            $this->products = $category->products()->paginate($count);
        }
        elseif($this->type == "search") {
            $this->products = Product::latest()->paginate($count);
        }
    }

    public function sortBy()
    {
        if ($this->sortBy === 'newest') {

            $this->products = $this->products::orderByDesc('created_at')->paginate($this->options['count'] ?? 12);
        } elseif ($this->sortBy === 'bestselling') {
            // Logic for sorting by bestselling
        } elseif ($this->sortBy === 'cheapest') {
            // Logic for sorting by cheapest
        } elseif ($this->sortBy === 'expensive') {
            // Logic for sorting by expensive
        }
    }

    public function render()
    {

        $products = $this->products;

        return view('livewire.widget-products-list', compact('products'));
    }
}
