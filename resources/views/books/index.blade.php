<x-main>
<ul>
    @forelse ($books as $book )
      <li>{{ $book->title}} - {{$book->years ?? 'data ignota'}} - {{$book->pages ?? 'numero pagine nn disponibile'}}</li>  
    @empty
        Nessun libro trovato
    @endforelse
    
</ul>
<form class="container" method="POST" action="{{route('store')}}">
  @csrf
  <div class="mb-3">
    <label for="titolo" class="form-label">Titolo</label>
    <input type="text" name="title" class="form-control" value="{{old('title')}}">
    @error('title')
      {{$message}}
    @enderror
  </div>
  <div class="mb-3">
    <label for="anno" class="form-label">Anno</label>
    <input type="text" name="years" class="form-control" value="{{old('years')}}">
    @error('years')
      {{$message}}
    @enderror
  </div>
  <div class="mb-3">
    <label for="pagine" class="form-label">Pagine</label>
    <input type="text" name="pages" class="form-control" value="{{old('pages')}}">
    @error('pages')
      {{$message}}
    @enderror
  </div>
 
  </div>
  <button type="submit" class="btn btn-primary">Salva</button>
</form>




</x-main>