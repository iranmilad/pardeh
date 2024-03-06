<?php

namespace App\Livewire;


use App\Models\Menu;
use Livewire\Component;

class WidgetMenus extends Component
{
    public $type;
    public $menus;
    public $options;

    public function mount($type,$options)
    {
        $this->type = $type;
        $this->options = json_decode($options, true);

        if ($this->type == "category") {

            $alias = $this->options['alias'] ?? [];

            $this->menus = Menu::where(['alias'=>$alias,])
            ->first();
        }
        else {

            $alias = $this->options['alias'] ?? [];

            $this->menus = Menu::where(['alias'=>$alias,])
            ->first();
        }


    }


    public function render()
    {
        $menus= $this->menus;
        return view('livewire.widget-menus',compact('menus'));
    }
}
