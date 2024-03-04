<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class WidgetPostTitle extends Component
{
    public $type;
    public $title;
    public $slug;
    public $options;

    public function mount($slug,$type,$options)
    {
        $this->type = $type;
        $this->options = json_decode($options, true);
        $this->slug = $slug;

        $count = $this->options['count'] ?? 4;

        if ($this->type == "single post") {
            $this->title = Post::where(['slug'=>$slug])->pluck('title')->first();
        }
    }

    public function render()
    {
        $title= $this->title;
        return view('livewire.widget-post-title',compact('title'));
    }
}
