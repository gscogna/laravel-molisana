<header>
    <div id="logo">
        <img src=" {{ asset('img/logo.png') }} " alt="immagine-logo">
    </div>
    <div class="class-menu">
        <nav>
            <ul>
                {{-- è possibile usare sia questa soluzione --}}
                <li><a href="{{ route('pagina-home') }}" class="{{(Request::route()->getname() == 'pagina-home') ? 'active' : ''  }} ">
                Home
                </a></li>
                {{-- che questa soluzione --}}
                {{-- <li><a href="{{ url('/products') }} ">Prodotti</a></li> --}}
                <li><a href="{{ route('pagina-prodotti') }}" class="{{(Request::route()->getname() == 'pagina-prodotti') ? 'active' : ''  }} "
                    >Prodotti
                </a></li>
                <li><a href=" {{ route('pagina-notizie') }}"class="{{(Request::route()->getname() == 'pagina-notizie') ? 'active' : ''  }} "
                    >News
                </a></li>
            </ul>
        </nav>
        {{ Request::route()->getname() }}
    </div>
</header>