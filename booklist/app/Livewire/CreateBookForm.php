<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Book;

class CreateBookForm extends Component
{
    public $title;
    public $author;
    public $rating;

    public function save(){

        $this->validate([
            'title' => 'required|string|min:3|max:50',
            'author' => 'required|string|min:3|max:50',
            'rating' => 'required|integer|min:0|max:10',
        ]);

        Book::create([
            'title' => $this->title ?? 'No title',
            'author' => $this->author ?? 'No author',
            'rating' => $this->rating ?? 0,
        ]);


        $this->redirect('/');
    }

    public function render()
    {
        return view('livewire.create-book-form');
    }
}
