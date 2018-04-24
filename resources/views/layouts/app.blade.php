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
        <nav class="navbar navbar-expand-md navbar-light fixed-top">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Chatbot') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    @guest
                    <ul class="navbar-nav ml-auto">
                        <li><a class="nav-link pr-4" href="#showcase"><i class="fas fa-home fa-lg mr-2"></i>Home</a></li>
                        <li><a class="nav-link pr-4" href="#about"><i class="fas fa-users fa-lg mr-2"></i>About Us</a></li>
                        <li><a class="nav-link pr-4" href="#services"><i class="fas fa-wrench fa-lg mr-2"></i>Services</a></li>
                        <li><a class="nav-link" href="#contact"><i class="fas fa-phone-volume fa-lg mr-2"></i>Contact</a></li>
                    </ul>

                    @else
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                        <i class="fas fa-sign-out-alt fa-md mr-2"></i>{{ __('Logout') }}
                                    </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                    @endguest
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <!-- Scripts -->

    <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- Scripts -->
    <script>
        window.sr = ScrollReveal({
            reset: true
        });

        sr.reveal('#showcase', {
            duration: 2000,
            origin: 'bottom'
        });

        sr.reveal('.showcase-btn', {
            duration: 2000,
            origin: 'bottom'
        });

        sr.reveal('#about div', {
            duration: 2000,
            origin: 'bottom'
        });

        sr.reveal('#services .service', {
            duration: 2000,
            origin: 'bottom'
        });

        sr.reveal('.info-right', {
            duration: 2000,
            origin: 'bottom',
        });
        
        sr.reveal('#contact', {
            duration: 2000,
            origin: 'bottom'
        });

    </script>

    <script>
        $(function() {
            //Smooth Scrolling
            $('a[href*="#"]:not([href="#"])').click(function() {
                if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                    if (target.length) {
                        $('html, body').animate({
                            scrollTop: target.offset().top
                        }, 1000);
                        return false;
                    }
                }
            });
        });

    </script>

</body>

</html>
