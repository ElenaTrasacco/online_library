<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use Livewire\WithFileUploads;

class BookEditForm extends Component
{
    use WithFileUploads;

    public $library;
    public $title;
    public $author;
    public $cover;
    public $year;
    public $description;
    public $category_id;
    public $old_cover;

    public function update(){
        $this->library->update([
            'title' => $this->title,
            'author' => $this->author,
            'year' => $this->year,
            'description' => $this->description,
            'category_id' => $this->category_id,
            'cover' => $this->cover ? $this->cover->store('public/covers') : $this->library->cover
        ]);
        $this->reset('cover');
        session()->flash('bookEdited', 'Book edited successfully');
    }

    public function mount(){
        $this->title = $this->library->title;
        $this->author = $this->library->author;
        $this->year = $this->library->year;
        $this->description = $this->library->description;
        $this->category_id = $this->library->category_id;
        $this->old_cover = $this->library->cover;
    }




    public function render()
    {
        $categories = Category::orderBy('name')->get();
        return view('livewire.book-edit-form', compact('categories'));
    }
}
