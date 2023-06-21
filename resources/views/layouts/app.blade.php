<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">



    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <style>
    body #app {
        background-color: #5d5dff;
        min-height: 100vh;
    }

    .card-width{
        width: 550px;
    }

    .test {
        min-height: 80vh;
        align-items: center;
        justify-content: center;
        display: flex;
        width: 400px;
    }

    .bg-white {
        background-color: #001234 !important;
        color: #fff;
        position: fixed;
        z-index: 1;
        width: 100%;
    }

    .navbar-brand {
        color: #fff;
    }

    .navbar-brand:hover {
        color: #b5a5a5;
    }

    .nav-link {
        color: #fff;
    }

    .activePage {
        background-color: #500094;
        color: #fff;
        border-bottom: 5px solid #ff6700;
        opacity: 1;
    }

    .activePage:hover {
        color: #fff;
        opacity: 1;
    }

    .nav-link:hover {
        color: #fff;
        opacity: 0.5;

    }


    .card {
        background: transparent;
        color: #fff;
        border: 1px solid #fff;
    }

    .card-header {
        border: none;
    }

    .card-body {
        border-top: 1px solid #fff;
    }

    .table {
        --bs-table-bg: none;
    }

    .table tr th {
        color: #001234;
    }

    .modal-content {
        background-color: #6565b1;
    }

    .form-control {
        background-color: #e3e3f3;
    }

    .form-group label {
        color: #00091a;
    }

    .modal-title b {
        color: #e3e3f3;
    }

    .card-body tr th {
        color: #eee;
    }

    .card-body tr td {
        color: #eee;
    }

    .py-4 .container .row .col-md-12 {
        padding-top: 55px;
    }
    </style>
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ route('home') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                        @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @endif


                        <!-- @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif -->
                        @else

                        <li class="nav-item">
                            <a class="nav-link {{ $activePage == 'adminDashboard' ? 'activePage' : '' }}"
                                href="{{ route('home')}}">{{ __('Dashboard') }}
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link {{ $activePage == 'Category' ? 'activePage' : '' }}"
                                href="{{ route('getAdminCategoryManage') }}">{{ __('Category') }}
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link {{ $activePage == 'Product' ? 'activePage' : '' }}"
                                href="{{ route('getAdminProductManage')}}">{{ __('Products') }}
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link {{ $activePage == 'Services' ? 'activePage' : '' }}"
                                href="{{ route('getAdminServicesManage')}}">{{ __('Services') }}
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link {{ $activePage == 'Slider' ? 'activePage' : '' }}"
                                href="{{ route('getAdminSliderManage')}}">{{ __('Slider') }}
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link {{ $activePage == 'aboutUsPage' ? 'activePage' : '' }}"
                                href="{{ route('getAdminAboutUsManage')}}">{{ __('About Us') }}
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link {{ $activePage == '' ? 'activePage' : '' }}"
                                href="{{ route('getAdminOrderManage')}}">{{ __('Order  ') }}
                            </a>
                        </li>

                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <i style="padding-left: 5px;"
                                    class="fa-solid fa-user-secret adminIcon"></i>
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
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

</html>