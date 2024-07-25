<?php

namespace App\Livewire;

use App\Models\Library;
use Livewire\Component;

class SearchBar extends Component
{
    public $search = "";

    public function render()
    {
        $results = [];
        if(strlen($this->search) >= 1){
            $results = Library::where('title', 'like', '%' .$this->search. '%')->limit(5)->get();
            $results = Library::where('author', 'like', '%' .$this->search. '%')->limit(5)->get();
        }

        return view('livewire.search-bar', [
            'books' => $results
        ]);
    }
}
