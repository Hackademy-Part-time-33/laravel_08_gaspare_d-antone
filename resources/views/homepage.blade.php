
<x-main>       
       <!-- Header-->

        <header class=" py-5">
            <div class="container px-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-6">
                        <div class="text-center my-5">
                            <h1 class="display-5 fw-bolder text-danger mb-2">Welcome</h1>
                            <p class="lead text-white mb-4 ">Benvenuti a babilonia

                            </p>
                        
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="row gx-4 gx-lg-5 mx-5 ">
            <div class="col-md-4 mb-5 ">
                <div class="card h-100 bg-primary">
                    <div class="card-body">
                        <h2 class="card-title">Libreria</h2>
                        <p class="card-text">Archivia, carica e gestisci i tuoi libri</p>
                    </div>
                    <div class="card-footer"><a class="btn btn-danger btn-sm" href="{{route('books.index')}}">Entra</a></div>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="card h-100">
                    <div class="card-body">
                        <h2 class="card-title">Categorie</h2>
                        <p class="card-text">Gestisci il tuo archivio per categorie</p>
                    </div>
                    <div class="card-footer"><a class="btn btn-danger btn-sm" href="#!">entra</a></div>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="card h-100">
                    <div class="card-body">
                        <h2 class="card-title">Autori</h2>
                        <p class="card-text">Scrittori, Autori ,Casa editrice</p>
                    </div>
                    <div class="card-footer"><a class="btn btn-danger btn-sm" href="#!">entra</a></div>
                </div>
            </div>
        </div>
</x-main>        
 