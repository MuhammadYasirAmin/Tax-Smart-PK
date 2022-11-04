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
                                <a href="javascript:void(0);"><i class="flaticon-old-typical-phone"></i> (+92) 317 5902778</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);"><i class="flaticon-black-back-closed-envelope-shape"></i>
                                    info@taxsmartpk.com</a>
                            </li>
                        </ul>
                        <div class="header__top__button">
                            <a class="cr-btn cr-btn--lg" href="{{ route('Frontend.Appointment') }}">
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
                                <li><a href="{{ route('Frontend.OurServices') }}">SERVICES</a></li>
                                <!--<li>-->
                                <!--    <a href="{{ route('Frontend.OurServices') }}">SERVICE</a>-->
                                <!--    <ul class="sub-menu">-->
                                <!--        <li><a href="{{ route('Frontend.TaxServices') }}">Tax Services</a></li>-->
                                <!--    </ul>-->
                                <!--</li>-->
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
                        <li><a href="{{ route('Frontend.OurServices') }}">SERVICES</a></li>
                        <!--<li>-->
                        <!--    <a href="{{ route('Frontend.OurServices') }}">SERVICE</a>-->
                        <!--    <ul class="sub-menu">-->
                        <!--        <li><a href="{{ route('Frontend.TaxServices') }}">Services</a></li>-->
                        <!--    </ul>-->
                        <!--</li>-->
                        <li><a href="{{ route('Frontend.ContactUs') }}">CONTACT</a></li>
                    </ul>
                </nav>
                <!--// Main Navigation -->

                <div class="offcanvas__button">
                    <a class="cr-btn cr-btn--lg" href="{{ route('Frontend.Appointment') }}">
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
                            <img src="{{ asset('assets/images/logo/logo-theme.webp') }}" style="max-width: 205px;" alt="footer logo">
                        </a>
                    </div>

                    <div class="widget-area footer--widgets">

                        <!-- Single Widget -->
                        <section class="widget widget-about">
                            <h5 class="widget-title">ABOUT TaxSmartPK</h5>
                            <p>Perspiciatis unde omnis iste natus error sit voluptatem accusantium oloremque laudantium,
                                totam rem onsectetur sires
                                to obtain pain of itself because</p>
                            <div class="social-icons social-icons--rounded">
                                <ul>
                                    <li class="facebook">
                                        <a href="https://www.facebook.com/profile.php?id=100063563576480">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li class="instagram">
                                        <a href="https://instagram.com/taxsmartpk?igshid=YmMyMTA2M2Y=">
                                            <i class="fa fa-instagram"></i>
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
                                    <a href="{{ route('Frontend.index') }}">Home</a>
                                </li>
                                <li>
                                    <a href="{{ route('Frontend.AboutUs') }}">About Us</a>
                                </li>
                                <li>
                                    <a href="{{ route('Frontend.OurServices') }}">Our Services</a>
                                </li>
                                <li>
                                    <a href="{{ route('Frontend.ContactUs') }}">Contact Us</a>
                                </li>
                            </ul>
                        </section>
                        <!--// Single Widget -->

                        <!-- Single Widget -->
                        <section class="widget widget-twitter-feed">
                            <h5 class="widget-title">Social Media</h5>
                            <ul>
                                <li>
                                    <p>
                                        <a href="https://www.facebook.com/profile.php?id=100063563576480" target="_blank">@Facbook</a>
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <a href="https://instagram.com/taxsmartpk?igshid=YmMyMTA2M2Y=" target="_blank">@Instagram</a>
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <a href="https://youtube.com/channel/UC_XHxl8SIQ0mU_5Paz6mGZQ" target="_blank">@Youtube</a>
                                    </p>
                                </li>
                            </ul>
                        </section>
                        <!--// Single Widget -->

                        <!-- Single Widget -->
                        <section class="widget widget-contact-info">
                            <h5 class="widget-title">Contact Info</h5>
                            <ul>
                                <li>
                                    <p>Office # Building 5C, Ground Floor, Street # 17, Phase 6, DHA, Karachi.</p>
                                </li>
                                <li>
                                    <p>
                                        <a href="callto://(+92) 317 5902778">(+92) 317 5902778</a>
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <a href="mailto://info@taxsmartpk.com">info@taxsmartpk.com</a>
                                    </p>
                                    <p>
                                        <a href="{{ url('') }}">www.TaxSmartPK.com</a>
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
