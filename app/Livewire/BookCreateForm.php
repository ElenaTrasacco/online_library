<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Library;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;

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
    public $category_id;


    public function store()
    {
        $this->validate();

    Auth::user()->libraries()->create([
    
        'cover' => $this->cover ? $this->cover->store('/public/covers'): '/media/default.png',
        'title' => $this->title,
        'author' => $this->author,
        'year' => $this->year,
        'description' => $this->description,
        'category_id' => $this->category_id
    ]);

        $this->reset();
    return redirect()->back()->with('bookCreated', 'Book created successfully');
    }


    public function render()
    {
        $categories = Category::orderBy('name')->get();
        return view('livewire.book-create-form', compact('categories'));
    }
}
