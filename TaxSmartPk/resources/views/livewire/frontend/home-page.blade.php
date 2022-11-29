@section('BannerArea')
    <!-- Top Banner -->
    <div class="banner-area">
        <div class="banner banner-slider-active banner--animated-content">

            <!-- Single Banner -->
            <div class="banner__single bg-image--1" data-black-overlay="6">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-7 col-lg-8">
                            <div class="banner__single__content">
                                <h1>HAVING
                                    <span class="color--theme"> TAX?</span> PROBLEMS?
                                    <span class="color--theme"></span>
                                </h1>
                                <a href="{{ route('Frontend.ContactUs') }}" class="cr-btn">
                                    <span>Contact Us Now</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //Single Banner -->

            <!-- Single Banner -->
            <div class="banner__single bg-image--2" data-black-overlay="6">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="banner__single__content text-center">
                                <h1>ACCREDITED
                                    <span class="color--theme">AND AFFORDABLE </span>TAX
                                    <span class="color--theme"></span> SOLUTIONS
                                </h1>
                                <a href="{{ route('Frontend.ContactUs') }}" class="cr-btn">
                                    <span>Contact Us Now</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //Single Banner -->

            <!-- Single Banner -->
            <div class="banner__single bg-image--3" data-black-overlay="6">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-7 col-lg-8">
                            <div class="banner__single__content">
                                <h1>ONE STOP
                                    <span class="color--theme">SOLUTION</span> FOR ALL YOUR
                                    <span class="color--theme">TAX</span> PROBLEMS
                                </h1>
                                <a href="{{ route('Frontend.ContactUs') }}" class="cr-btn">
                                    <span>Contact Us Now</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //Single Banner -->

        </div>
    </div>
    <!-- //Top Banner -->
@endsection
<!-- About Area -->
<section id="about-area" class="cr-section about-area bg--white">
    <div class="container">
        <div class="about-area__inside">
            <div class="row">
                <div class="col-lg-5">
                    <div class="about-area__image">
                        <img class="wow slideInLeft" data-wow-delay="0"
                            src="{{ asset('assets/images/about/about-thumbnail.webp') }}" alt="about area thumb">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="about-area__content">
                        <h4>Proficient “
                            <span class="color--theme">Tax filing</span>”
                        </h4>
                        <h3 class="cd-headline cx-heading slide">at your service
                            <span class="color--theme cd-words-wrapper cd-words-wrapper-2">
                                <b class="is-visible"></b>
                                <b></b>
                                <b></b>
                            </span>

                        </h3>
                        <p>Taxsmartpk takes care of all your tax obligations. It is the only place that brings you the
                            best tax related solutions.</p>
                        <p>We're offering smart and innovative services with the top quality standards, through a great
                            organizational structure. Our main priority is our clients so we make sure that we give them
                            accurate and timely submissions through our competent team.</p>
                        <a href="{{ route('Frontend.AboutUs') }}" class="cr-btn">
                            <span>Read More</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //About Area -->

<!-- Features Area -->
<section id="features-area" class="cr-section features-area">
    <div class="row g-0">

        <!-- Single Feature -->
        <div class="col-lg-4">
            <div class="feature">
                <div class="feature__icon">
                    <span>
                        <i class="flaticon-shield"></i>
                    </span>
                    <span>
                        <i class="flaticon-shield"></i>
                    </span>
                </div>
                <div class="feature__content">
                    <h4 class="wow fadeInUp">
                        <a href="{{ route('Frontend.features') }}">ENSURE SECURITY</a>
                    </h4>
                    <p class="wow fadeInUp" data-wow-delay="0.15s">At Taxsmartpk we make sure that your important and
                        sensitive data remains safe with us and no outsider gets access of it. </p>
                </div>
            </div>
        </div>
        <!--// Single Feature -->

        <!-- Single Feature -->
        <div class="col-lg-4">
            <div class="feature active">
                <div class="feature__icon">
                    <span>
                        <i class="flaticon-team"></i>
                    </span>
                    <span>
                        <i class="flaticon-team"></i>
                    </span>
                </div>
                <div class="feature__content">
                    <h4 class="wow fadeInUp">
                        <a href="{{ route('Frontend.features') }}">EXPERT TEAM</a>
                    </h4>
                    <p class="wow fadeInUp" data-wow-delay="0.15s">Our team consists of extremely reliable professionals
                        who have more than 10 years of experience in the area of taxation. </p>
                </div>
            </div>
        </div>
        <!--// Single Feature -->

        <!-- Single Feature -->
        <div class="col-lg-4">
            <div class="feature">
                <div class="feature__icon">
                    <span>
                        <i class="flaticon-24-hours"></i>
                    </span>
                    <span>
                        <i class="flaticon-24-hours"></i>
                    </span>
                </div>
                <div class="feature__content">
                    <h4 class="wow fadeInUp">
                        <a href="{{ route('Frontend.features') }}">24/7 SUPPORT</a>
                    </h4>
                    <p class="wow fadeInUp" data-wow-delay="0.15s">Get help from us anytime you want. Our customer
                        service helpline is available 24/7 to answer all your queries. </p>
                </div>
            </div>
        </div>
        <!--// Single Feature -->

    </div>
</section>
<!--// Features Area -->

<!-- Service Area -->
<section id="service-area" class="service-area section-padding--xlg bg--white">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10">
                <div class="section-title">
                    <h4>OUR SERVICES</h4>
                    <h2>Committed To Helping You
                        <span class="color--theme">Succeed.</span>
                    </h2>
                    <p>Effective tax management is the key to manage your wealth properly. Taxsmartpk helps you make the
                        right financial decisions that will make a huge impact on your annual costs.
                        Here are some of the best services that we offer regarding your tax needs.</p>
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-8">
                <div class="service-area__services">
                    <div class="row">

                        <!-- Single Service -->
                        <div class="col-lg-6 col-md-6 wow flipInX">
                            <div class="service">
                                <div class="service__icon">
                                    <img src="{{ asset('assets/images/icons/service-icon-user.webp') }}"
                                        alt="service icon">
                                </div>
                                <div class="service__content">
                                    <h5>
                                        <a href="{{ route('Frontend.TaxServices') }}">PERSONAL TAX</a>
                                    </h5>
                                    <p>Minimizing your tax burdens by advising and creating tax planning strategies that
                                        helps in filing your taxes. </p>
                                </div>
                            </div>
                        </div>
                        <!--// Single Service -->

                        <!-- Single Service -->
                        <div class="col-lg-6 col-md-6 wow flipInX">
                            <div class="service">
                                <div class="service__icon">
                                    <img src="{{ asset('assets/images/icons/service-icon-bar.webp') }}"
                                        alt="service icon">
                                </div>
                                <div class="service__content">
                                    <h5>
                                        <a href="{{ route('Frontend.TaxServices') }}">CORPORATE TAX</a>
                                    </h5>
                                    <p>Offering up to date corporate tax services for ensuring a smoother operation for
                                        emerging companies. </p>
                                </div>
                            </div>
                        </div>
                        <!--// Single Service -->

                        <!-- Single Service -->
                        <div class="col-lg-6 col-md-6 wow flipInX">
                            <div class="service">
                                <div class="service__icon">
                                    <img src="{{ asset('assets/images/icons/service-icon-briefcase.webp') }}"
                                        alt="service icon">
                                </div>
                                <div class="service__content">
                                    <h5>
                                        <a href="{{ route('Frontend.TaxServices') }}">Business TAX</a>
                                    </h5>
                                    <p>Providing a coordinated approach towards the filing of tax that helps transform
                                        the financial position of your company. </p>
                                </div>
                            </div>
                        </div>
                        <!--// Single Service -->

                        <!-- Single Service -->
                        <div class="col-lg-6 col-md-6 wow flipInX">
                            <div class="service">
                                <div class="service__icon">
                                    <img src="{{ asset('assets/images/icons/service-icon-pie.webp') }}"
                                        alt="service icon">
                                </div>
                                <div class="service__content">
                                    <h5>
                                        <a href="{{ route('Frontend.TaxServices') }}">Finance TAX</a>
                                    </h5>
                                    <p> Helping with your financial tax problems and creating a much more sophisticated
                                        tax system. </p>
                                </div>
                            </div>
                        </div>
                        <!--// Single Service -->

                    </div>
                </div>
            </div>
            @include('livewire.frontend.partials.progress')
        </div>
    </div>
</section>
<!--// Service Area -->

<!-- Funfact Area -->
@include('livewire.frontend.partials.counters')
<!--// Funfact Area -->

<!-- Testimonial Area -->
<div id="testimonial-area" class="testimonial-area section-padding--xlg bg--grey">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <div class="testimonial text-center">
                    <h3>WHAT OUR
                        <span class="color--theme"> CLIENTS SAY ABOUT US</span>
                    </h3>
                    <!-- Testimonial Content -->
                    <div class="testimonial__content testimonial-content-slider-active">

                        <!-- Testimonial Content Single -->
                        <div class="testimonial__content__single">
                            <p>I contacted Taxsmartpk and they responded very quickly.
                                They listened to all my problems patiently and provided me with the most suitable
                                solution that helped me elevate my business even more. </p>
                        </div>
                        <!--// Testimonial Content Single -->

                        <!-- Testimonial Content Single -->
                        <div class="testimonial__content__single">
                            <p>After working with Tax smart, my tax filing system is very organised and I am able to
                                find any relevant information easily.
                                They made tax filing much much easier and I am extremely grateful for that. </p>
                        </div>
                        <!--// Testimonial Content Single -->

                        <!-- Testimonial Content Single -->
                        <div class="testimonial__content__single">
                            <p>I contacted Taxsmartpk and they responded very quickly.
                                They listened to all my problems patiently and provided me with the most suitable
                                solution that helped me elevate my business even more. </p>
                        </div>
                        <!--// Testimonial Content Single -->

                        <!-- Testimonial Content Single -->
                        <div class="testimonial__content__single">
                            <p>After working with Tax smart, my tax filing system is very organised and I am able to
                                find any relevant information easily.
                                They made tax filing much much easier and I am extremely grateful for that. </p>
                        </div>
                        <!--// Testimonial Content Single -->

                    </div>
                    <!--// Testimonial Content -->

                    <!-- Testimonial Author -->
                    <div class="testimonial__author testimonial-author-slider-active">

                        <!-- Single Author -->
                        <div class="testimonial__author__single">
                            <div class="testimonial__author__image">
                                <img src="{{ asset('assets/images/testimonial/testimonial-author-2.webp') }}"
                                    alt="testimonial author">
                            </div>
                            <div class="testimonial__author__description">
                                <h6>Umer Khan</h6>
                                <span>Client</span>
                            </div>
                        </div>
                        <!--// Single Author -->

                        <!-- Single Author -->
                        <div class="testimonial__author__single">
                            <div class="testimonial__author__image">
                                <img src="{{ asset('assets/images/testimonial/testimonial-author-3.webp') }}"
                                    alt="testimonial author">
                            </div>
                            <div class="testimonial__author__description">
                                <h6>Sarosh</h6>
                                <span>Client</span>
                            </div>
                        </div>
                        <!--// Single Author -->

                        <!-- Single Author -->
                        <div class="testimonial__author__single">
                            <div class="testimonial__author__image">
                                <img src="{{ asset('assets/images/testimonial/testimonial-author-2.webp') }}"
                                    alt="testimonial author">
                            </div>
                            <div class="testimonial__author__description">
                                <h6>Umer Khan</h6>
                                <span>Client</span>
                            </div>
                        </div>
                        <!--// Single Author -->

                        <!-- Single Author -->
                        <div class="testimonial__author__single">
                            <div class="testimonial__author__image">
                                <img src="{{ asset('assets/images/testimonial/testimonial-author-3.webp') }}"
                                    alt="testimonial author">
                            </div>
                            <div class="testimonial__author__description">
                                <h6>Sarosh</h6>
                                <span>Client</span>
                            </div>
                        </div>
                        <!--// Single Author -->

                    </div>
                    <!--// Testimonial Author -->

                </div>
            </div>
        </div>
    </div>
</div>
<!--// Testimonial Area -->

<!-- Call To Action Area -->
<section id="cta-area" class="cta-area section-padding--sm bg--grey--light bg--abstruct-mask">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="calltoaction text-center">
                    <h3>GIVING YOU MORE
                        <span class="color--theme"> FOR YOUR MONEY</span>
                    </h3>
                    <p> Your one stop solution to all your tax related problems.
                        Tax smart, the No.1 Tax solution company in pakistan providing their best services to make your
                        life easier and also to help you reach the top. </p>
                    <!--<h6>JUST DAIL-->
                    <!--    <a href="callto://+00812548359874">+008 12548 359 874</a> (TOLL FREE)-->
                    <!--</h6>-->
                </div>
            </div>
        </div>
    </div>
</section>
<!--// Call To Action Area -->
