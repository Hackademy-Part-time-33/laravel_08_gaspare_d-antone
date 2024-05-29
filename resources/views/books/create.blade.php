<x-main>

    <div class="px-4 px-md-5 mb-5">
        <div class="row gx-5 justify-content-center ">
            <div class="col-lg-8 col-xl-6 border p-5 rounded">

                <form action="{{route('books.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                    
                    <div class="form-floating mb-3">
                        <input class="form-control" id="title" value="{{old('title')}}"
                            name="title" type="text">
                        <label for="title">Titolo libro</label>
                        @error('title')
                            {{$message}}
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="years" value="{{old('years')}}"
                            name="years" type="text">
                        <label for="years">Anno di scrittura</label>
                        @error('years')
                            {{$message}}
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="pages" value="{{old('pages')}}"
                            name="pages" type="text">
                        <label for="pages">Numero Pagine</label>
                        @error('pages')
                            {{$message}}
                        @enderror
                    </div>
                   
                    <div class="form-floating mb-3">
                    
                         
                        <input class="form-control" id="image" name="image" value type="file">
                    </div>        
                    @error('image')
                        {{$message}}
                    @enderror

                    
                    <div class="d-grid">
                        <button class="btn btn-primary btn-lg"
                            type="submit">Salva</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


</x-main>