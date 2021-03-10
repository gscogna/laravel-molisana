<header>
    <div id="logo">
        <img src=" {{ asset('img/logo.png') }} " alt="immagine-logo">
    </div>
    <div class="class-menu">
        <nav>
            <ul>
                {{-- è possibile usare sia questa soluzione --}}
                <li><a href="{{ route('pagina-home') }}">Home</a></li>
                <li><a href="{{ url('/products') }} ">Prodotti</a></li>
                {{-- che questa soluzione --}}
                <li><a href=" {{ route('pagina-notizie') }} ">News</a></li>
            </ul>
        </nav>
    </div>
</header>