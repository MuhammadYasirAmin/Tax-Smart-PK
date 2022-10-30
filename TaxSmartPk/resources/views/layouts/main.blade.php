<!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Tax Smart Pk - Tax Service</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Yasir Amin">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.webp') }}">

    <!-- Google font (font-family: 'Josefin Sans', sans-serif;) -->
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,600,700" rel="stylesheet">

    <!-- CSS
 ============================================ -->

    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/pe-icon-7-stroke.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/flaticon.css') }}">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/fakeloader.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/meanmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/slick.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/animated-headline.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/youtubepopup.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/calender.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/plyr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/datepicker.min.css') }}">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

</head>

<body>
    <!--[if lte IE 9]>
  <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
 <![endif]-->

    <!-- Add your site or application content here -->


    <div class="fakeloader"></div>

    <!-- Main wrapper -->
    <div class="wrapper" id="wrapper">

        <!-- Header -->
        <header id="header" class="header sticky--header">

            <!-- Header Top Area -->
            <div class="header__top bg--blue d-none d-lg-block">
                <div class="container">
                    <div class="header__top__inner">
                        <ul class="header__top__info">
                            <li>
                                <a href="javascript:void(0);"><i class="flaticon-old-typical-phone"></i> 01354 568 787</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);"><i class="flaticon-black-back-closed-envelope-shape"></i>
                                    info@taxco.com</a>
                            </li>
                        </ul>
                        <div class="header__top__button">
                            <a class="cr-btn cr-btn--lg" href="appointment.html">
                                <span>Make an appointment</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!--// Header Top Area -->

            <!-- Header Bottom Area -->
            <div class="header__bottom bg--white">
                <div class="container">
                    <div class="header__bottom__inner">

                        <div class="header__logo">
                            <a href="{{ route('Frontend.index') }}">
                                <img src="{{ asset('assets/images/logo/logo-theme.webp') }}" alt="header logo">
                            </a>
                        </div>

                        <!-- Main Navigation -->
                        <nav id="main-navigation" class="header__menu main-navigation d-none d-lg-flex">
                            <ul>
                                <li>
                                    <a href="{{ route('Frontend.index') }}">HOME</a>
                                </li>
                                <li><a href="{{ route('Frontend.AboutUs') }}">ABOUT</a></li>
                                <li><a href="{{ route('Frontend.features') }}">FEATURES</a></li>
                                <li>
                                    <a href="services.html">SERVICE</a>
                                    <ul class="sub-menu">
                                        <li><a href="services.html">Services</a></li>
                                        <li><a href="services-2.html">Services Style 2</a></li>
                                        <li><a href="single-service.html">Single Service</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ route('Frontend.ContactUs') }}">CONTACT</a></li>
                            </ul>
                        </nav>
                        <!--// Main Navigation -->

                        <button class="header__toggle d-lg-none" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasMenu">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>

            </div>
            <!--// Header Bottom Area -->

        </header>
        <!-- //Header -->
        @yield('BannerArea')
        <!-- Offcanvas -->
        <div class="offcanvas offcanvas-start" tabindex="2" id="offcanvasMenu">
            <div class="offcanvas-header">
                <div class="offcanvas__logo">
                    <a href="{{ route('Frontend.index') }}">
                        <img src="{{ asset('assets/images/logo/logo-theme.webp') }}" alt="header logo">
                    </a>
                </div>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">

                <ul class="offcanvas__info">
                    <li>
                        <a href="javascript:void(0);"><i class="flaticon-old-typical-phone"></i> 01354 568 787</a>
                    </li>
                    <li>
                        <a href="javascript:void(0);"><i class="flaticon-black-back-closed-envelope-shape"></i> info@taxco.com</a>
                    </li>
                </ul>

                <!-- Main Navigation -->
                <nav class="canvas-menu">
                    <ul>
                        <li>
                            <a href="{{ route('Frontend.index') }}">HOME</a>
                        </li>
                        <li><a href="{{ route('Frontend.AboutUs') }}">ABOUT</a></li>
                        <li><a href="{{ route('Frontend.features') }}">FEATURES</a></li>
                        <li>
                            <a href="services.html">SERVICE</a>
                            <ul class="sub-menu">
                                <li><a href="services.html">Services</a></li>
                                <li><a href="services-2.html">Services Style 2</a></li>
                                <li><a href="single-service.html">Single Service</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ route('Frontend.ContactUs') }}">CONTACT</a></li>
                    </ul>
                </nav>
                <!--// Main Navigation -->

                <div class="offcanvas__button">
                    <a class="cr-btn cr-btn--lg" href="appointment.html">
                        <span>Make an appointment</span>
                    </a>
                </div>
            </div>
        </div>
        <!-- //Offcanvas -->

        <!-- Page Conent -->
        <main class="page-content">
            {{ $slot }}
        </main>
        <!-- //Page Conent -->

        <!-- Footer Area -->
        <footer id="footer" class="footer-area fixed--footer">

            <!-- Footer Widgets Area -->
            <div class="footer-area__widgets section-padding--md bg--dark--light">
                <div class="container">
                    <div class="footer-area__logo text-center">
                        <a href="{{ route('Frontend.index') }}">
                            <img src="{{ asset('assets/images/logo/logo-footer.webp') }}" alt="footer logo">
                        </a>
                    </div>

                    <div class="widget-area footer--widgets">

                        <!-- Single Widget -->
                        <section class="widget widget-about">
                            <h5 class="widget-title">ABOUT Tax Smart PK</h5>
                            <p>Perspiciatis unde omnis iste natus error sit voluptatem accusantium oloremque laudantium,
                                totam rem onsectetur sires
                                to obtain pain of itself because</p>
                            <div class="social-icons social-icons--rounded">
                                <ul>
                                    <li class="facebook">
                                        <a href="https://www.facebook.com/">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li class="twitter">
                                        <a href="https://twitter.com/">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="instagram">
                                        <a href="https://www.instagram.com/">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li class="google-plus">
                                        <a href="https://plus.google.com/discover">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </section>
                        <!--// Single Widget -->

                        <!-- Single Widget -->
                        <section class="widget widget-quick-links">
                            <h5 class="widget-title">QUICK LINKS</h5>
                            <ul>
                                <li>
                                    <a href="services.html">Our Services</a>
                                </li>
                                <li>
                                    <a href="{{ route('Frontend.features') }}">Features</a>
                                </li>
                                <li>
                                    <a href="{{ route('Frontend.AboutUs') }}">About Us</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">Help Centre</a>
                                </li>
                                <li>
                                    <a href="{{ route('Frontend.ContactUs') }}">Contact Us</a>
                                </li>
                            </ul>
                        </section>
                        <!--// Single Widget -->

                        <!-- Single Widget -->
                        <section class="widget widget-twitter-feed">
                            <h5 class="widget-title">Twitter Feed</h5>
                            <ul>
                                <li>
                                    <p>
                                        <a href="">@Alex Smith</a>, unde omnis te us error sit voluptatem
                                    </p>
                                    <span class="time">
                                        <a href="javascript:void(0);">10 Mins ago</a>
                                    </span>
                                </li>
                                <li>
                                    <p>
                                        <a href="">@Justin Bieber</a>, unde omnis te us error sit voluptatem
                                    </p>
                                    <span class="time">
                                        <a href="javascript:void(0);">12 Mins ago</a>
                                    </span>
                                </li>
                            </ul>
                        </section>
                        <!--// Single Widget -->

                        <!-- Single Widget -->
                        <section class="widget widget-contact-info">
                            <h5 class="widget-title">Contact Info</h5>
                            <ul>
                                <li>
                                    <p>256 Notrh Tower, Western City Mid Town, Las Vagas, USA</p>
                                </li>
                                <li>
                                    <p>
                                        <a href="callto://+00812568987789">+008 12568 987 789</a>
                                    </p>
                                    <p>
                                        <a href="callto://+00835687567458">+008 35687 567 458</a>
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <a href="mailto://info@Tax Smart PK.com">info@Tax Smart PK.com</a>
                                    </p>
                                    <p>
                                        <a href="mailto://info@Tax Smart PK.com">www.Tax Smart PK.com</a>
                                    </p>
                                </li>
                            </ul>
                        </section>
                        <!--// Single Widget -->

                    </div>
                </div>
            </div>
            <!--// Footer Widgets Area -->

            <!-- Footer Copyright Area -->
            <div class="footer-area__copyright bg--dark">
                <div class="container">
                    <div class="copyright text-center">
                        <p>&copy; 2022 <span> Tax Smart Pk </span> Made with <i class="fa fa-heart"></i> by <a
                                href="{{ url('') }}">Tax Smart PK</a></p>
                    </div>
                </div>
            </div>
            <!--// Footer Copyright Area -->

        </footer>
        <!-- //Footer Area -->

    </div>
    <!-- //Main wrapper -->

    <!-- Back To Top Start -->
    <button id="backBTn" class="backbtn"><i class="fa fa-angle-up"></i></button>
    <!-- //Back To Top end -->




    <!-- JS
    ============================================ -->

    <!-- Modernizer & jQuery JS -->
    <script src="{{ asset('assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery-3.2.1.min.js') }}"></script>

    <!-- Bootstrap JS -->
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

    <!-- Plugins JS -->
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/ajax-mail.js') }}"></script>
    <script src="{{ asset('assets/js/active.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('assets/js/scripts.js') }}"></script>

</body>

</html>
