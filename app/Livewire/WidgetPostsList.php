<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class WidgetPostsList extends Component
{
    use WithPagination;
    private $type= "new post";
    private $posts;
    public $options;
    protected $paginationTheme = 'bootstrap';

    public function mount($type,$options)
    {
        $this->type = $type;
        $this->options = json_decode($options, true);
        $count = $this->options['count'] ?? 10;

        $this->posts = Post::latest()->paginate($count);

    }

    public function render()
    {


        $posts = Post::latest()->paginate(10);
        return view('livewire.widget-posts-list', compact('posts'));
    }
}
