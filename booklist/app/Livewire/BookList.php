<?php

namespace App\Livewire;

use App\Models\Book;
use Livewire\Component;

class BookList extends Component
{

    public $name = 'Bob';

    public $count = 0;

    public $term = '';

    public function increment($n){
        $this->count+=$n;
    }

    public function delete(Book $book){
        $book->delete();
    }

    public function render()
    {
        //si chaine non vide
        if($this->term){
            return view('livewire.book-list', [
                'books' => Book::where('title', 'LIKE', "%{$this->term}%")
                ->get(),
            ]);
        }

        return view('livewire.book-list', [
            'books' => Book::all()
        ]);
    }
}
