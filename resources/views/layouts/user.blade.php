<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-signin-client_id" content="567471925340-ikhv4f1pjb2j8dficl7lf2guagrd3mbm.apps.googleusercontent.com">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Chatbot') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Scroll JS -->
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Chatbot') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Guest Side Of User Navbar -->
                    @guest
                    <ul class="navbar-nav ml-auto">
                        <li><a class="nav-link" href="{{ route('login') }}"><i class="fas fa-sign-in-alt fa-md mr-2"></i>{{ __('Login') }}</a></li>
                        <li><a class="nav-link" href="{{ route('register') }}"><i class="fas fa-user-plus fa-md mr-2"></i>{{ __('Register') }}</a></li>
                    </ul>

                    @else
                    <!-- User Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->                          
                        
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="fas fa-sign-out-alt fa-md mr-2"></i>{{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
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

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
