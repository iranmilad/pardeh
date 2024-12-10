<?php

namespace App\Livewire;


use App\Models\Menu;
use Livewire\Component;

class WidgetMenus extends Component
{
    public $type;
    public $menu;
    private $slug;
    public $options;

    public function mount($slug=null, $type, $options)
    {
        $this->type = $type;
        $this->options = json_decode($options, true);
        $this->slug = $slug;

        if ($this->type == "category") {

            $alias = $this->options['alias'] ?? [];

            $this->menu = Menu::where(['alias'=>$alias,])
            ->first();
        }
        elseif ($this->type == "menu_category") {

            $alias = $slug ?? null;
            if ($alias) {
                $this->menu = Menu::where(['alias'=>$alias,])
                ->first();
            }
            else{
                $this->menu =null;
            }
        }
        else {

            $alias = $this->options['alias'] ?? [];

            $this->menu = Menu::where(['alias'=>$alias,])
            ->first();
        }


    }


    public function render()
    {
        $menu= $this->menu;
        return view('livewire.widget-menus',compact('menu'));
    }
}
