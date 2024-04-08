<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Erbe Laundry </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/img/favicon.ico') }}">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/progressbar_barfiller.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/gijgo.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('rontend/css/animated-headline.css') }}f">
    <link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
</head>

<body>
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{ asset('frontend/img/logo/loder.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class="header-area">
            <div class="main-header header-sticky">
                <!-- Logo -->
                <div class="header-left">
                    <div class="logo">
                        <a href="{{ url('/') }}"><img src="{{ asset('frontend/img/logo/logo.png') }}" alt=""></a>
                    </div>
                    <div class="menu-wrapper  d-flex align-items-center">
                        <!-- Main-menu -->
                        <div class="main-menu d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    <li class="{{ request()->is('/') ? 'active' : '' }}"><a href="{{ url('/') }}">Halaman Utama</a></li>
                                    <li class="{{ request()->is('tentang') ? 'active' : '' }}">   <a href="{{ url('/tentang') }}">Tentang</a></li>
                                    <li class="{{ request()->is('pelayanan') ? 'active' : '' }}"><a href="{{ url('/pelayanan') }}">Pelayanan</a></li>

                                    <li class="{{ request()->is('kontak') ? 'active' : '' }}"><a href="{{ url('/kontak') }}">Kontak</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="header-right d-none d-lg-block">
                    <a href="#" class="header-btn1"><img src="{{ asset('frontend/img/icon/call.png') }}" alt=""> (+62) 812-9614-8321

                    </a>
                    <a href="{{ url('login') }}" class="header-btn2">Masuk / Daftar</a>
                </div>
                <!-- Mobile Menu -->
                <div class="col-12">
                    <div class="mobile_menu d-block d-lg-none"></div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
