<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Association name') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <script src="https://kit.fontawesome.com/77a63b4cd3.js" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <!-- Styles/CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
</head>
<body>

    <div id="app">
        <nav class="navbar is-fixed-top" role="navigation" aria-label="main navigation">
                        
                <div class="navbar-brand">

                            <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navmenu">
                            <span aria-hidden="true"></span>
                            <span aria-hidden="true"></span>
                            <span aria-hidden="true"></span>
                            </a>
                </div>

            <div id="navmenu" class="navbar-menu">

                <!-- Left Side Of Navbar -->
                <div class="navbar-start">
                        <div class="navbar-item">
                            <button class="button is-link">
                                <a href="#" class="btn">Home</a>
                                </button>
                            <button class="button is-link">
                                <a href="#" class="btn">News</a>
                                </button>
                            <button class="button is-link">
                                <a href="/posts" class="btn">Podcast</a>
                                </button>
                            <button class="button is-link">
                                <a href="#" class="btn">Essai</a>
                                </button>
                            <button class="button is-link open_contact">
                            Contact Us
                            </button>
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item">
                                <a class="nav-link" href="/posts/create">Create a comment</a>
                                </li>
                            </ul>
                    </div>
                </div>
                    <!-- Right Side Of Navbar -->
                <div class="navbar-end">
                <div class="navbar-item">
                    <button class="button is-link">
                    <span><a href="facebook" class="m-link"><i class="fab fa-facebook-f"></i></a></span>
                    </button>
                    <button class="button is-link">
                    <span><a href="twitter" class="m-link"><i class="fab fa-twitter"></i></a></span>
                    </button>
                    <button class="button is-link">
                    <span><a href="instagrame" class="m-link"><i class="fab fa-instagram"></i></a></span>
                    </button>
                    <button class="button is-link">
                    <span><a href="spotify" class="m-link"><i class="fab fa-spotify"></i></a></span>
                    </button>
                </div>
                        @guest
                                @if (Route::has('login'))
                                    <button class="button is-link">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </button>
                                @endif
                                
                                @if (Route::has('register'))
                                    <button class="button is-link">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </button>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                        @endguest
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Associationname') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                </div>
            </div>
        </nav>

        <main class="py-4 container">
            @include('inc.messages')
            @yield('content')
        </main>
    </div>
</body>
</html>