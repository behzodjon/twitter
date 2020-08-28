<!DOCTYPE html>
<html lang="en">

<head>
    <title>Meranda &mdash; Website Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <script src="{{ asset('js/app.js') }}" defer></script>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=B612+Mono|Cabin:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">
    <link href="css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">


</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
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
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->username }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('profile.show',auth()->user()->id) }}">
                                Cabinet
                            </a>

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
</nav>

<div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>


    <div class="header-top">
        <div class="container">

            <div class="row align-items-center">
                <div class="col-12 col-lg-6 d-flex">
                    <a href="index.html" class="site-logo">
                        Meranda
                    </a>

                    <a href="#"
                       class="ml-auto d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span
                            class="icon-menu h3"></span></a>

                </div>
                <div class="col-12 col-lg-6 ml-auto d-flex">


                    <div class="ml-md-auto top-social d-none d-lg-inline-block">
                        <a href="#" class="d-inline-block p-3"><span class="icon-facebook"></span></a>
                        <a href="#" class="d-inline-block p-3"><span class="icon-twitter"></span></a>
                        <a href="#" class="d-inline-block p-3"><span class="icon-instagram"></span></a>
                    </div>
                    <form action="#" class="search-form d-inline-block">

                        <div class="d-flex">
                            <input type="email" class="form-control" placeholder="Search...">
                            <button type="submit" class="btn btn-secondary"><span class="icon-search"></span></button>
                        </div>
                    </form>


                </div>
                <div class="col-6 d-block d-lg-none text-right">

                </div>
            </div>
        </div>


        <div class="site-navbar py-2 js-sticky-header site-navbar-target d-none pl-0 d-lg-block" role="banner">

            <div class="container">
                <div class="d-flex align-items-center">

                    <div class="mr-auto">
                        <nav class="site-navigation position-relative text-right" role="navigation">
                            <ul class="site-menu main-menu js-clone-nav mr-auto d-none pl-0 d-lg-block">
                                <li class="active">
                                    <a href="index.html" class="nav-link text-left">Home</a>
                                </li>
                                <li>
                                    <a href="categories.html" class="nav-link text-left">Categories</a>
                                </li>
                                <li>
                                    <a href="categories.html" class="nav-link text-left">Politics</a>
                                </li>
                                <li>
                                    <a href="categories.html" class="nav-link text-left">Business</a>
                                </li>
                                <li>
                                    <a href="categories.html" class="nav-link text-left">Health</a>
                                </li>
                                <li><a href="categories.html" class="nav-link text-left">Design</a></li>
                                <li>
                                    <a href="categories.html" class="nav-link text-left">Sport</a>
                                </li>
                                <li><a href="contact.html" class="nav-link text-left">Contact</a></li>
                            </ul>
                        </nav>

                    </div>

                </div>
            </div>

        </div>

    </div>

    <div id="app">
        @yield('content')
    </div>

    <div class="footer">
        <div class="container">


            <div class="row">
                <div class="col-12">
                    <div class="copyright">
                        <p>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                            All rights reserved | This template is made with <i class="icon-heart text-danger"
                                                                                aria-hidden="true"></i> by <a
                                href="https://colorlib.com" target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
<!-- .site-wrap -->


<!-- loader -->
<div id="loader" class="show fullscreen">
    <svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#ff5e15"/>
    </svg>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/jquery.countdown.min.js"></script>
<script src="js/bootstrap-datepicker.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/aos.js"></script>
<script src="js/jquery.fancybox.min.js"></script>
<script src="js/jquery.sticky.js"></script>
<script src="js/jquery.mb.YTPlayer.min.js"></script>


<script src="js/main.js"></script>

</body>

</html>
