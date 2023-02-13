<nav class="navbar bg-light navbar-expand-lg ">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="{{ Vite::asset('resources/assets/img/logo.png') }}" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
            Bootstrap
        </a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">
                        Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('products.index') }}">
                        Products
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>