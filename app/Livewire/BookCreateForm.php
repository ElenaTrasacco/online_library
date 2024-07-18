<?php

namespace App\Livewire;

use App\Models\Library;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;

class BookCreateForm extends Component
{
    use WithFileUploads;
    
    #[Validate('required|min:3')]
    public $title;
    #[Validate('required|min:5')]
    public $author;
    #[Validate('required|integer')]
    public $year;
    #[Validate('required|min:5')]
    public $description;
    public $cover;


    public function store()
    {
        $this->validate();
       Library::create([
       
        'title' => $this->title,
        'author' => $this->author,
        'year' => $this->year,
        'description' => $this->description
       ]);

        $this->reset();
       return redirect()->back()->with('bookCreated', 'Book created successfully');
    }

    public function render()
    {
        return view('livewire.book-create-form');
    }
}
