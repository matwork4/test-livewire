<div>
    
  <h3>Hello from create-book-form</h3>

  <form wire:submit="save">
    <div>
      <label>Book Title:</label>
      <input type="text" wire:model="title">
      @error('title')
        <div class=error-message>{{$message}}</div>
      @enderror
    </div>
    <div>
      <label>Author:</label>
      <input type="text" wire:model="author">
      @error('author')
        <div class=error-message>{{$message}}</div>
      @enderror
    </div>
    <div>
      <label>Rating: {{$rating}}/10</label>
      <br/>
      <input type="range" min="0" max="10" wire:model.live.debounce.800ms="rating">
      @error('rating')
        <div class=error-message>{{$message}}</div>
      @enderror
    </div>

    <button>Create</button>

  </form>

</div>
