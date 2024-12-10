<?php

namespace App\View\Components;

use Closure;
use App\Models\Menu;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class FooterMenu extends Component
{
    public $menu;
    private $menu_style;
    /**
     * Create a new component instance.
     */
    public function __construct($alias,$style=null)
    {
        $this->menu_style = $style;
        $this->menu  = Menu::where(['alias'=>$alias,])
        ->first();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {

        return view('components.footer-menu', ['menu' => $this->menu,'menu_style'=>$this->menu_style]);
    }
}
