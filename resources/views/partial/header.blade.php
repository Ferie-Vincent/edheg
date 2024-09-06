<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link rel="stylesheet" href="{{ asset('front/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('front/css/owl.theme.default.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('front/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('front/css/remixicon.css') }}" />
    <link rel="stylesheet" href="{{ asset('front/css/flaticon.css') }}" />
    <link rel="stylesheet" href="{{ asset('front/css/meanmenu.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('front/css/animate.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('front/css/odometer.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('front/css/magnific-popup.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('front/css/date-picker.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('front/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('front/css/responsive.css') }}" />

    {{-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    {!! NoCaptcha::renderJs() !!} --}}

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>



    <link rel="icon" type="image/png" href="https://placehold.co/32" />
    <title>@yield('title') | GPE-EDHEG - Abidjan
    </title>



</head>

<body>
    <!-- Start Preloader Area -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="pl-flip-1 pl-flip-2"></div>
        </div>
    </div>
    <!-- End Preloader Area -->

    <!-- Start Header Area -->
    <header class="header-area">
        <!-- Start Top Header -->
        <div class="top-header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-sm-6">
                        <ul class="header-left-content">
                            <li>
                                <a>
                                    <i class="ri-phone-fill"></i>
                                    +225 06 41 42 33
                                </a>
                            </li>
                            <li>
                                <a id="emailLink">
                                    <i class="ri-mail-fill"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Top Header -->

        <!-- Start Navbar Area -->
        <div class="navbar-area">
            <div class="mobile-responsive-nav">
                <div class="container">
                    <div class="mobile-responsive-menu">
                        <div class="logo">
                            <a href="index.html">
                                <img src="{{ asset('front/images/logo-head.png') }}" alt="logo GPE-EDHEG Abidjan" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="desktop-nav">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a href="index.php">
                            <img src="{{ asset('front/images/logo-head.png') }}" alt="logo GPE-EDHEG Abidjan" />
                        </a>

                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav m-auto">
                                <li class="nav-item">
                                    <a href="{{ route('home') }}"
                                        class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}"> Accueil </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route('about') }}"
                                        class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}"> Edheg </a>
                                </li>

                                <li class="nav-item">
                                    <a href="#"
                                        class="nav-link {{ request()->routeIs('tertiaire', 'industrielle') ? 'active' : '' }}">
                                        Nos Filières
                                        <i class="ri-arrow-down-s-line"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="{{ route('industrielle') }}"
                                                class="nav-link {{ request()->routeIs('industrielle') ? 'active' : '' }}">
                                                Industrielle
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('tertiaire') }}"
                                                class="nav-link {{ request()->routeIs('tertiaire') ? 'active' : '' }}">
                                                Tertiaire
                                            </a>
                                        </li>
                                    </ul>
                                </li>


                                <li class="nav-item">
                                    <a href="{{ route('faq') }}"
                                        class="nav-link {{ request()->routeIs('faq') ? 'active' : '' }}"> FAQs </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route('event') }}"
                                        class="nav-link {{ request()->routeIs('event') ? 'active' : '' }}"> Évènements
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route('contact') }}"
                                        class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
                                </li>
                            </ul>

                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- End Navbar Area -->
    </header>
    <!-- End Header Area -->
