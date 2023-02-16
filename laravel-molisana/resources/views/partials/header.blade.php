<header>
    <nav class="navbar bg-light navbar-expand-lg ">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ Vite::asset('resources/assets/img/logo.png') }}" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                Bootstrap
            </a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link
                        {{ str_starts_with(Route::currentRouteName(), 'admin.home') ? 'active' : '' }}"
                        aria-current="page"
                        href="{{ route('admin.home') }}">
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ str_starts_with(Route::currentRouteName(), 'admin.products') ? 'active' : '' }}" href="{{ route('admin.products.index') }}"
                        >
                            Products
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>