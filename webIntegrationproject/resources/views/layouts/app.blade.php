<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div>
            <a href="{{ url('/') }}" role="button" focusable="true" class="navbar-brand">
            <img alt="logo" src={{('\svg\Tweetogram.svg')}} style="max-height: 120px;" class="pr-3"></a>
            </div>
 
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">

                    <!-- Authentication Links -->
                    @guest
                    @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/search') }}">Search</a>
                    </li>
                    @endif
                    @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('posts.create') }}">New TG</a>
                    </li>
                    @endif
                    @if (Route::has('login'))
                    @auth
                    <li class="nav-item">
                        <a class="nav-link" href="/profile/{{ Auth::user()->username }}">My Profile</a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    @endif
                    @endif

                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                    @endif
                    @else
                    <!-- Authentication Links -->

                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/search') }}">Search</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('posts.create') }}">New TG</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="/profile/{{ Auth::user()->username }}">My Profile</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                 @csrf
                            </form>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('faq.show') }}">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/contact') }}">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/about') }}">About us</a>
                    </li>
                    
                </ul>
                
                @endguest
            </nav>
            </div>

        <div id="app">
        </div>
        <div>
            <main id="contentWrapper">
                @yield('content')
            </main>
        </div>

        
 
</body>

</html>
