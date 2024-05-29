<div>
    <nav class="navbar navbar-expand-lg navbar-dark ">
        <div class="container px-5">
            <a class="navbar-brand" href="{{route('homepage')}}">homepage</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                  
                    @auth
                        
                    <span class="text-white">Benvenuto,{{Auth::user()->name}}</span>
                    @endauth
                    @guest
                    <a class="btn btn-outline-light " href="{{ route('login') }}">Login</a>
                    <a class="btn btn-outline-light" href="{{ route('register') }}">Registrati</a>
                        
                    @endguest
                    @auth
                    <form action="{{route('logout')}}" method="POST">
                        @csrf
                        <button class="btn btn-outline-light" type="submit" href="{{ route('logout') }}">Logout</button>
                    </form>
                        
                    @endauth

                </ul>
            </div>
        </div>
    </nav><!-- I have not failed. I've just found 10,000 ways that won't work. - Thomas Edison -->
</div>