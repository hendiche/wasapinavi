<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

    <style type="text/css">
        .hendi-nav {
            flex-direction: row-reverse;
        }
        .hendi-nav > li {
             padding: 20px 1.5em 0 2em;
        }
        .hendi-nav > li > a {
            font-size: 2rem;
        }
        .pos-f-t {
            position: absolute;
            top: 25px;
            left: 2%;
            right: 2%;
            z-index: 9;
            width: 96%;
        }
        button.navbar-toggler[type="button"] {
            background-color: #343a40;
        }
    </style>
</head>
<body>
    <div id="app">
        <div class="pos-f-t">
            <div class="collapse" id="navbarToggleExternalContent">
                <div class="p-4">
                    <ul class="navbar-nav ml-auto hendi-nav">
                        <!-- Authentication Links -->
                        @guest
                            <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                            <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                            <li><a class="nav-link" href="{{ route('facility') }}">{{ __('Facility') }}</a></li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
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
            <nav class="navbar navbar-dark">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation" onclick="navBarOnClick()">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </nav>
        </div>
        {{-- <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                            <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                            <li><a class="nav-link" href="{{ route('facility') }}">{{ __('Facility') }}</a></li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
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
        </nav> --}}
        <section id="header">
            <div class="text-center" id="img-logo">
                <img src="{{ asset('images/logo.png') }}">
            </div>
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="http://www.town.okutama.tokyo.jp//shared/images/main/gallery/image01.jpg">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Okutama 1</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="http://www.town.okutama.tokyo.jp//shared/images/main/gallery/image02.jpg">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Okutama 2</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="http://www.town.okutama.tokyo.jp//shared/images/main/gallery/image03.jpg">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Okutama 3</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </section>
        <main class="py-4">
            @yield('content')
        </main>
        <section id="footer">
            <div>
                <div class="footer-padding">
                    <div class="text-center">
                        <img src="{{ asset('images/logo.png') }}">
                    </div>
                    <div class="text-center">
                        <ul class="list-inline">
                            <li class="list-inline-item"> <a href="#"><h2>Home</h2></a> </li>
                            <li class="list-inline-item"> <a href="#"><h2>Facilities</h2></a> </li>
                            <li class="list-inline-item"> <a href="#"><h2>About</h2></a> </li>
                            <li class="list-inline-item"> <a href="#"><h2>Contact Us</h2></a> </li>
                        </ul>
                    </div>
                    <div class="text-center">
                        <h2>©2018年4月. All Right Reserved</h2>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script type="text/javascript">
        var onClick = false;
        function navBarOnClick() {
            var btn = document.getElementById('img-logo');
            var header = document.getElementById('header');
            if (onClick) {
                onClick = false;
                btn.style.top = '70px';
                btn.style.transition = '0.35s';

                header.style.paddingTop = '0px';
                header.style.transition = '0.35s';
            } else {
                onClick = true;
                btn.style.top = '215px';
                btn.style.transition = '0.35s';

                header.style.paddingTop = '185px';
                header.style.transition = '0.35s';
            }
        }
    </script>
</body>
</html>
