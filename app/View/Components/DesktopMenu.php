<?php

namespace App\View\Components;

use App\Models\Menu;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DesktopMenu extends Component
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
        $menu_style=$this->menu_style;
        $menu= $this->menu;
        return view('components.desktop-menu',compact("menu","menu_style"));
    }
}
