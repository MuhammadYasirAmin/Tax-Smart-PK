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
            <div class="col-lg-4">
                <div class="service-area__bars text-center">
                    <div class="cr-bars justify-content-lg-end justify-content-center">
                        <div class="cr-bar" data-bar-percent="25" data-bar-title="2020"></div>
                        <div class="cr-bar" data-bar-percent="45" data-bar-title="2021"></div>
                        <div class="cr-bar" data-bar-percent="40" data-bar-title="2022"></div>
                        <!--<div class="cr-bar" data-bar-percent="69" data-bar-title="2021"></div>-->
                        <!--<div class="cr-bar" data-bar-percent="88" data-bar-title="2022"></div>-->
                    </div>
                    <span class="cr-bars__name">Our progress</span>
                </div>
            </div>
        </div>
    </div>
</section>
<!--// Service Area -->

<!-- Tax Calculation Area -->
<section id="tax-calculation" class="tax-calculation-area bg--grey--light">
    <div class="taxcalc">
        <div class="row no-gutters align-items-center">

            <!-- Tax Calculation Area Left -->
            <div class="col-xl-5">
                <div class="taxcalc__content" data-black-overlay="4">
                    <div class="taxcalc__content__inner">
                        <h3>TAX
                            <span class="color--theme">CALCULATION</span>
                        </h3>
                        <p>Helping to evaluate the performance of your personal or business's financial position and
                            providing continous guidance in retaining your wealth. </p>
                    </div>
                </div>
            </div>
            <!--// Tax Calculation Area Left -->

            <!-- Tax Calculation Area Right -->
            <div class="col-xl-7">
                <div class="taxcalc__calculation">
                    <div class="taxcalc__calculation__inner">
                        <div class="row no-gutters">

                            <div class="col-lg-6 col-md-6 wow fadeInUp">
                                <div class="single-input">
                                    <label for="taxcalc-business-area">Choose Your Business Area*</label>
                                    <select name="taxcalc-business-area" id="taxcalc-business-area">
                                        <option value="1">Select your business</option>
                                        <option value="2">Marketing</option>
                                        <option value="3">IT Industries</option>
                                        <option value="4">Management Industries</option>
                                        <option value="5">Property Business</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.15">
                                <div class="single-input">
                                    <label for="taxcalc-country-residence">Country of residence*</label>
                                    <select name="taxcalc-country-residence" id="taxcalc-country-residence">
                                        <option value="1">Pakistan</option>
                                        <!--<option value="2">United States</option>-->
                                        <!--<option value="3">United Kingdom</option>-->
                                        <!--<option value="3">Germany</option>-->
                                        <!--<option value="3">Netherland</option>-->
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3">
                                <div class="single-input">
                                    <label for="taxcalc-employee-counter">Number of Employees</label>
                                    <select name="taxcalc-employee-counter" id="taxcalc-employee-counter">
                                        <option value="1">Select Here</option>
                                        <option value="2">0 - 20</option>
                                        <option value="3">21 - 50</option>
                                        <option value="4">51 - 150</option>
                                        <option value="5">151 - 500</option>
                                        <option value="6">500+</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.45">
                                <div class="single-input">
                                    <label for="taxcalc-tax-year">Tax Year*</label>
                                    <select name="taxcalc-tax-year" id="taxcalc-tax-year">
                                        <option value="1">2000 - 2005</option>
                                        <option value="2">2006 - 2010</option>
                                        <option value="3">2011 - 2015</option>
                                        <option value="4">2016 - 2022</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.6">
                                <div class="single-input">
                                    <label for="taxcalc-yearly-income">Yearly Total Income</label>
                                    <select name="taxcalc-yearly-income" id="taxcalc-yearly-income">
                                        <option value="1">Select Range</option>
                                        <option value="2">0 - 1 Million</option>
                                        <option value="3">1 Million - 3 Million</option>
                                        <option value="4">3 Million - 10 Million</option>
                                        <option value="5">10 Million - 20 Million</option>
                                        <option value="6">20 Million+</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-8 col-md-8 wow fadeInUp" data-wow-delay="0.75">
                                <div class="button-holder">
                                    <button class="cr-btn" type="submit">
                                        <span>Calculate</span>
                                    </button>
                                    <span class="equal-sign">=</span>
                                    <div class="single-input">
                                        <label for="taxcalc-total-calculation">Total Payable Tax</label>
                                        <input type="text" id="taxcalc-total-calculation" placeholder="$000.00">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!--// Tax Calculation Area Right -->

        </div>
    </div>
</section>
<!--// Tax Calculation Area -->


<!-- Funfact Area -->
<div id="funfact-area" class="funfact-area bg--white">
    <div class="funfacts">
        <div class="row g-0">

            <!--  Single Funfact -->
            <div class="col-lg-3 col-sm-6">
                <div class="funfact text-center">
                    <h1>
                        <span class="counter">750</span>
                    </h1>
                    <h5>Trusted Clients</h5>
                </div>
            </div>
            <!--//  Single Funfact -->

            <!--  Single Funfact -->
            <div class="col-lg-3 col-sm-6">
                <div class="funfact text-center">
                    <h1>
                        <span class="counter">600</span>
                    </h1>
                    <h5>Cases Won</h5>
                </div>
            </div>
            <!--//  Single Funfact -->

            <!--  Single Funfact -->
            <div class="col-lg-3 col-sm-6">
                <div class="funfact text-center">
                    <h1>
                        <span class="counter">115</span>
                    </h1>
                    <h5> Corporate Infrastructure</h5>
                </div>
            </div>
            <!--//  Single Funfact -->

            <!--  Single Funfact -->
            <div class="col-lg-3 col-sm-6">
                <div class="funfact text-center">
                    <h1>
                        <span class="counter">9</span>
                    </h1>
                    <h5>Expert Advisor &nbsp</h5>
                </div>
            </div>
            <!--//  Single Funfact -->

        </div>
    </div>
</div>
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
                            <p>Tax smart is the most competent website that I have come across. They are extremely
                                efficient at what they do.
                                They helped me get my financial poisition back on track within a small period of time.
                            </p>
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

                        <!-- Testimonial Content Single -->
                        <div class="testimonial__content__single">
                            <p>Tax smart is the most competent website that I have come across. They are extremely
                                efficient at what they do.
                                They helped me get my financial poisition back on track within a small period of time.
                            </p>
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
                                <img src="{{ asset('assets/images/testimonial/testimonial-author-1.webp') }}"
                                    alt="testimonial author">
                            </div>
                            <div class="testimonial__author__description">
                                <h6>DAVID MILLER</h6>
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
                                <h6>RAISA MARIYA</h6>
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
                                <h6>SHON SMITH</h6>
                                <span>Client</span>
                            </div>
                        </div>
                        <!--// Single Author -->

                        <!-- Single Author -->
                        <div class="testimonial__author__single">
                            <div class="testimonial__author__image">
                                <img src="{{ asset('assets/images/testimonial/testimonial-author-1.webp') }}"
                                    alt="testimonial author">
                            </div>
                            <div class="testimonial__author__description">
                                <h6>DAVID MILLER</h6>
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
                                <h6>RAISA MARIYA</h6>
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
                                <h6>SHON SMITH</h6>
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
