<?php

namespace App\Livewire;


use App\Models\Slider;
use Livewire\Component;

class WidgetSliders extends Component
{
    public $type;
    public $sliders;
    public $options;

    public function mount($type,$options)
    {
        $this->type = $type;
        $this->options = json_decode($options, true);

        if ($this->type == "selection") {
            $sliderName = $this->options['name'] ?? null;
            $imageIds = $this->options['images'] ?? [];

            $this->sliders = Slider::where('name', $sliderName)
                ->whereHas('images', function ($query) use ($imageIds) {
                    $query->whereIn('id', $imageIds);
                })->get();
        }


    }


    public function render()
    {
        $sliders= $this->sliders;
        return view('livewire.widget-sliders',compact('sliders'));
    }
}
