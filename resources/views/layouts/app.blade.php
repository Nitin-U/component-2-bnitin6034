<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->

    <!-- Berkshire -->
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap" rel="stylesheet">

    <!-- Alegreya -->
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Alegreya&display=swap" rel="stylesheet">

    <!-- Alegreya Italics -->
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Alegreya:ital@1&display=swap" rel="stylesheet"> -->

    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <link rel="stylesheet" href="{{ asset('css/global.css') }}">

    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <script src="https://kit.fontawesome.com/f6dd6c55d1.js" crossorigin="anonymous"></script>
    
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <!-- <a class="navbar-brand" href="#">Navbar</a> -->
                <a href="{{ route('welcome') }}"><img src="{{url('images/logo.png')}}" class="nav-logo"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('products.index') }}">Products</a>
                        </li>
                        <!--li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                        </li-->
                        @guest
                        @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @endif

                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                    <form class="d-flex">
                        <div class="input-group">
                        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-primary" id="navbar-search" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </div>
                    </form>

                    <!-- <div class="input-group">
                        <div id="navbar-search-autocomplete">
                            <input type="search" placeholder="Search" id="form1"/>
                            <label class="form-label" for="form1">Search</label>
                        </div>
                        <button type="button" class="btn btn-primary">
                            <i class="fas fa-search"></i>
                        </button>
                    </div> -->
                </div>
            </div>
    </div>
    </nav>

    <main class="">
        @yield('content')
    </main>

    <div class="footer-dark">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Services</h3>
                        <ul>
                            <li><a href="#">Books</a></li>
                            <li><a href="#">Cds</a></li>
                            <li><a href="#">Games</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3>About</h3>
                        <ul>
                            <li><a href="#">Company</a></li>
                            <li><a href="#">Sellers</a></li>
                            <li><a href="#">Teams</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 item text">
                        <h3>Essential Mart</h3>
                        <p>We are a one-stop shop for all your entertainment needs. We offer a wide selection of books, CDs, and games at affordable prices. Our inventory is constantly updating, so there is always something new to discover. Whether you are looking for the latest bestseller or a classic album, you can find it here. We also have a variety of games for all ages, from board games to video games. Thank you for visiting our site, and we hope you find something you love!</p>
                    </div>
                    
                </div>
                <p class="copyright">Essential Mart | Nitin Utsav Bartaula | © 2022</p>
            </div>
        </footer>
    </div>
    </div>
</body>

</html>