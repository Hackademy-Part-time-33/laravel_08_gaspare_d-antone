<x-main>

  <div class="rounded-3 py-5 px-4 px-md-5 mb-5 ">

    <div class="container text-center text-danger">
        @if (session('success'))
    {{session('success')}} 
    </div>

   
        
    @endif
    <div class="container mt-5 bg-white">
        <div
            class="align-middle gap-2 d-flex justify-content-between">
            <h3>Elenco Libri inseriti</h3>
            <form class="d-flex" role="search" action="#"
                method="POST">
                <input class="form-control me-2" name="search"
                    type="search" placeholder="Cerca Articolo"
                    aria-label="Search">
            </form>
            <a href="{{route('books.create')}}" type="button"
                class="btn btn btn-success me-md-2">
                Crea Nuovo Libro
            </a>
        </div>
        <table class="table border mt-2">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Immagine</th>
                    <th scope="col">Titolo</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
              @forelse ($books as $book )

                <tr>
                    <th scope="row">#{{$book->id}}</th>
                    <td>
                        <img class="card-img-top" style="width:3rem"src="{{Storage::url($book->image)}}"alt="..." />
                            
                            
                    </td>
                    <td>{{ $book->title}}</td>
                    <td>

                        <div
                            class="d-grid gap-2 d-md-flex justify-content-md-end">

                            <a href="{{ route('books.show',['book'=>$book->id] )}}"
                                class="btn btn-primary me-md-2">
                                Visualizza
                            </a>
                            <a href="#"
                                class="btn btn-warning me-md-2">
                                Modifica
                            </a>
                            <button type="button"
                                class="btn btn-danger me-md-2">Elimina</button>
                        </div>
                    </td>
                </tr>
                @empty
                Nessun libro trovato
                 @endforelse
            </tbody>
        </table>
        {{$books->links()}}
    </div>

    </div>






</x-main>