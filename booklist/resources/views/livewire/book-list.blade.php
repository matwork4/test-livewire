
<div class="book-list-parent">

    <div>Hi {{$name}}!</div>

    <form wire:submit="$refresh">
        <span>Your name:</span>
        <input type="text" wire:model.live.debounce.800ms="name">
        <button>Update</button>
    </form>

    <div>
        <span>Count: {{$count}}</span>
        <button wire:click="increment(2)">+2</button>
    </div>

    <button>
        <a href="/create-book">Create</a>
    </button>

    <div>
        <span>Search: </span>
        <input type="text" wire:model.live.debounce.600ms="term" placeholder="Write here">
    </div>
    
    
    
    <div class="book-list">
        @foreach($books as $b)
        <div class="book" wire:key="{{ $b->id }}">
            <h2>{{ $b->title }}</h2>
            <p>Author: {{ $b->author }}</p>
            <p>Rating: {{ $b->rating }}/10</p>
            <button wire:click="delete({{ $b->id }})">Delete</button>
        </div>
        @endforeach
    </div>

    
</div>


