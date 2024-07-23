<?php

namespace App\Livewire;

use App\Models\Library;
use Livewire\Component;

class BookList extends Component
{
    public function destroy(Library $library){
    $library->delete();
    session()->flash('bookDeleted', 'Book deleted successfully');
    }

    public function render()
    {
        return view('livewire.book-list');
    }
}
