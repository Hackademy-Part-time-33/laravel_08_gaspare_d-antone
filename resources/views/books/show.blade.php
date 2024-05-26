<x-main>
 <div class="container mt-5">
    <div class="row g-5">
        <div class="col-md-12">
            <div class="pb-5">
                <h1 class="text-white">
                    {{$book->title}}
                </h1>
                <div>
                    <ul>
                        <li>
                            <p class="text-white">Numero pagine:{{$book->pages ?? 'sconosciuto'}}</p>
                        </li>
                        <li>
                            <p class="text-white">Anno libro:{{$book->years ?? 'ignoto'}}</p>
                        </li>
                    </ul>
                </div>
            </div>

        </div>

    </div>

 </div>



</x-main>