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

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body>
    <div id="app">
    </div>
    <div>
        <div class="pl-2">
            <a class="navbar-brand" href="{{ url('/') }}">
                <div><img src="\svg\Tweetogram.svg" style="max-height: 120px;" class="pr-3"></div>
                <div>TweetoGram</div>
            </a>
        </div>
        <nav id="sidebar">
            <!-- Sidebar Header -->
            <div class="sidebar-header">

                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="list-unstyled components ">
                        <!-- Authentication Links -->
                        @guest
                        @if (Route::has('login'))
                        <li class="nav-item list-unstyled components">
                            <a class="nav-link" href="{{ route('posts.create') }}">New TG</a>
                        </li>
                        @endif
                        @if (Route::has('login'))
                        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                            @auth
                            <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Profile</a>
                            @else
                            <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>
                            @endif
                            @endif
                        </div>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>
                        </li>
                        <ul class="navbar-nav ml-auto list-unstyled components ">
                            <!-- Authentication Links -->
                            <li class="nav-item">
                                <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Profile</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('/about') }}" class="text-sm text-gray-700 underline">About us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('posts.create') }}">New TG</a>
                            </li>
                            <li class="nav-item">
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                            </li>
                        </ul>

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
    <script src=""
</body>

</html>
