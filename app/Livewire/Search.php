<?php

namespace App\Livewire;

use Livewire\Component;

class Search extends Component
{

    public $searchResults;
    public $searchTerm = '';
    public $results = [];


    protected $rules = [
        'searchTerm' => 'required|min:2',
    ];

    public function rules()
    {
        return [
            'searchTerm' => 'required|min:3',
        ];
    }


    public function updatedSearchTerm()
    {

        if (strlen($this->searchTerm) < 3) {
            $this->results = [];
        }

        $validated = $this->validate();

        if ($validated) {
            // Simulate making an API call to fetch search results
            $this->results = (object) [
                'categories' => collect([
                    (object) [
                        'id' => 1,
                        'name' => 'پرده مخمل',
                        'link' => '#',
                    ],
                    (object) [
                        'id' => 2,
                        'name' => 'موکت',
                        'link' => '#'
                    ],
                    (object) [
                        'id' => 3,
                        'name' => 'پرده آماده حریر',
                        'link' => '#'
                    ],
                ]),
                'products' => collect([
                    (object) [
                        'id' => 1,
                        'name' => 'محصول 1',
                        'category_id' => 1,
                        'description' => 'Description1',
                        'thumbnail' => 'https://placehold.co/80x80'
                    ],
                    (object) [
                        'id' => 2,
                        'name' => 'محصول 2',
                        'category_id' => 2,
                        'description' => 'Description2',
                        'thumbnail' => 'https://placehold.co/80x80'
                    ],
                    (object) [
                        'id' => 3,
                        'name' => 'محصول 3',
                        'category_id' => 3,
                        'description' => 'Description3',
                        'thumbnail' => 'https://placehold.co/80x80'
                    ],
                ]),
            ];
        } else {
            $this->results = [];
        }
    }

    public function clear(){
        $this->searchTerm = '';
        $this->results = [];
    }


    public function render()
    {

        return view(
            'livewire.search');
    }
}
