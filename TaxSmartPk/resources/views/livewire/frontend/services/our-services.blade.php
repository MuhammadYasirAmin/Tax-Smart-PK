@section('BannerArea')
    <!-- Breadcrumb Area -->
    <div id="cr-breadcrumb-area" class="cr-breadcrumb-area section-padding--md">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-6 col-md-8">
                    <div class="cr-breadcrumb">
                        <ul class="cr-breadcrumb__pagination">
                            <li>
                                <a href="{{ route('Frontend.index') }}">Home</a>
                            </li>
                            <li>Services</li>
                        </ul>
                        <h1>Our Services</h1>
                        <p>Our top quality services let's you explore the world of taxes and then develop the best tax
                            strategies that suits you. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--// Breadcrumb Area -->
@endsection

<!-- Page Service Area -->
<section id="pg-services-area" class="cr-section pg-services-area section-padding--xlg">

    <!-- Pg Service Area Top -->
    <div class="pg-services-area__description">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 order-2 order-lg-1">
                    <div class="pg-services__details">
                        <h4>CAN’T SOLVE YOUR TAX PROBLEM?</h4>
                        <h3>WE PROVIDE BEST
                            <span class="color--theme">SERVICES FOR YOU</span>
                        </h3>
                        <p>Effective tax management is the key to manage your wealth properly. Taxsmartpk helps you make
                            the right financial decisions that will make a huge impact on your annual costs. </p>
                        <p>We provide comprehensive and strategic tax assistance that would help you with your tax
                            troubles.
                            Our team is full of competent people with over 10 years of experience in the tax industry.
                            They will make sure to cater to all your needs.</p>
                        <p>Here are some of the best services that we offer regarding your tax needs.</p>
                    </div>
                </div>
                <div class="col-lg-5 order-1 order-lg-2">
                    <div class="pg-services__thumb wow fadeInRight">
                        <img src="{{ asset('assets/images/services/sevices-thumb-right.webp') }}" alt="services thumb">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--// Pg Service Area Top -->

    <!-- Services Styles Bottom -->
    <div class="pg-services-area__srevicelist servicelist--style2">
        <div class="container">
            <div class="row">

                <!-- Single Service -->
                <div class="col-lg-4 col-md-6 wow flipInX">
                    <div class="service">
                        <div class="service__icon">
                            <img src="{{ asset('assets/images/icons/service-icon-user.webp') }}" alt="service icon">
                        </div>
                        <div class="service__content">
                            <h5>
                                <a href="{{ route('Frontend.TaxServices') }}">PERSONAL TAX</a>
                            </h5>
                            <p>Minimizing your tax burdens by advising and creating tax planning strategies that helps
                                in filing your taxes. </p>
                        </div>
                    </div>
                </div>
                <!--// Single Service -->

                <!-- Single Service -->
                <div class="col-lg-4 col-md-6 wow flipInX">
                    <div class="service">
                        <div class="service__icon">
                            <img src="{{ asset('assets/images/icons/service-icon-bar.webp') }}" alt="service icon">
                        </div>
                        <div class="service__content">
                            <h5>
                                <a href="{{ route('Frontend.TaxServices') }}">CORPORATE TAX</a>
                            </h5>
                            <p>Offering up to date corporate tax services for ensuring a smoother operation for emerging
                                companies. </p>
                        </div>
                    </div>
                </div>
                <!--// Single Service -->

                <!-- Single Service -->
                <!--<div class="col-lg-4 col-md-6 wow flipInX">-->
                <!--    <div class="service">-->
                <!--        <div class="service__icon">-->
                <!--            <img src="{{ asset('assets/images/icons/service-icon-home.webp') }}" alt="service icon">-->
                <!--        </div>-->
                <!--        <div class="service__content">-->
                <!--            <h5>-->
                <!--                <a href="{{ route('Frontend.TaxServices') }}">PROPERTY TAX</a>-->
                <!--            </h5>-->
                <!--            <p>Perspiciatis unde omnis ist natus error sit voluptatem accusantium loremque tium totam-->
                <!--                rem per </p>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
                <!--// Single Service -->

                <!-- Single Service -->
                <div class="col-lg-4 col-md-6 wow flipInX">
                    <div class="service">
                        <div class="service__icon">
                            <img src="{{ asset('assets/images/icons/service-icon-briefcase.webp') }}"
                                alt="service icon">
                        </div>
                        <div class="service__content">
                            <h5>
                                <a href="{{ route('Frontend.TaxServices') }}">Business TAX</a>
                            </h5>
                            <p>Providing a coordinated approach towards the filing of tax that helps transform the
                                financial position of your company. </p>
                        </div>
                    </div>
                </div>
                <!--// Single Service -->

                <!-- Single Service -->
                <!--<div class="col-lg-4 col-md-6 wow flipInX">-->
                <!--    <div class="service">-->
                <!--        <div class="service__icon">-->
                <!--            <img src="{{ asset('assets/images/icons/service-icon-briefcase-2.webp') }}" alt="service icon">-->
                <!--        </div>-->
                <!--        <div class="service__content">-->
                <!--            <h5>-->
                <!--                <a href="{{ route('Frontend.TaxServices') }}">International TAX</a>-->
                <!--            </h5>-->
                <!--            <p>Perspiciatis unde omnis ist natus error sit voluptatem accusantium loremque tium totam-->
                <!--                rem per </p>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
                <!--// Single Service -->

                <!-- Single Service -->
                <!--<div class="col-lg-4 col-md-6 wow flipInX">-->
                <!--    <div class="service">-->
                <!--        <div class="service__icon">-->
                <!--            <img src="{{ asset('assets/images/icons/service-icon-pie.webp') }}" alt="service icon">-->
                <!--        </div>-->
                <!--        <div class="service__content">-->
                <!--            <h5>-->
                <!--                <a href="{{ route('Frontend.TaxServices') }}">Finance TAX</a>-->
                <!--            </h5>-->
                <!--            <p>Helping with your financial tax problems and creating a much more sophisticated tax system. </p>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
                <!--// Single Service -->

            </div>
        </div>
    </div>
    <!--// Services Styles Bottom -->

</section>
<!--// Page Service Area -->

<!-- Testimonial Area -->
<div id="testimonial-area" class="testimonial-area section-padding--xlg bg--white">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="section-title no-padding">
                    <h2>WHAT OUR
                        <span class="color--theme">CLIENTS SAY ABOUT US</span>
                    </h2>
                    <p>Take a look at our happy customers sharing their positive experience with Tax Smart. </p>
                </div>
            </div>

            <div class="col-lg-8">
                <div class="testimonial testimonial-slider-style3-active testimonial--style3">

                    <!-- Testimonial Single -->
                    <div class="testimonial__single">

                        <!-- Testimonial Content Single -->
                        <div class="testimonial__content__single">
                            <p>Tax smart is the most competent website that I have come across. They are extremely
                                efficient at what they do.
                                They helped me get my financial poisition back on track within a small period of time.
                            </p>
                        </div>
                        <!--// Testimonial Content Single -->

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
                    <!--// Testimonial Single -->

                    <!-- Testimonial Single -->
                    <div class="testimonial__single">

                        <!-- Testimonial Content Single -->
                        <div class="testimonial__content__single">
                            <p>I contacted Taxsmartpk and they responded very quickly.
                                They listened to all my problems patiently and provided me with the most suitable
                                solution that helped me elevate my business even more.</p>
                        </div>
                        <!--// Testimonial Content Single -->

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

                    </div>
                    <!--// Testimonial Single -->

                    <!-- Testimonial Single -->
                    <div class="testimonial__single">

                        <!-- Testimonial Content Single -->
                        <div class="testimonial__content__single">
                            <p>After working with Tax smart, my tax filing system is very organised and I am able to
                                find any relevant information easily.
                                They made tax filing much much easier and I am extremely grateful for that.</p>
                        </div>
                        <!--// Testimonial Content Single -->

                        <!-- Single Author -->
                        <div class="testimonial__author__single">
                            <div class="testimonial__author__image">
                                <img src="{{ asset('assets/images/testimonial/testimonial-author-1.webp') }}"
                                    alt="testimonial author">
                            </div>
                            <div class="testimonial__author__description">
                                <h6>John Patrik</h6>
                                <span>Client</span>
                            </div>
                        </div>
                        <!--// Single Author -->

                    </div>
                    <!--// Testimonial Single -->

                    <!-- Testimonial Single -->
                    <div class="testimonial__single">

                        <!-- Testimonial Content Single -->
                        <div class="testimonial__content__single">
                            <p>Tax smart is the most competent website that I have come across. They are extremely
                                efficient at what they do.
                                They helped me get my financial poisition back on track within a small period of time.
                            </p>
                        </div>
                        <!--// Testimonial Content Single -->

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
                    <!--// Testimonial Single -->

                    <!-- Testimonial Single -->
                    <div class="testimonial__single">

                        <!-- Testimonial Content Single -->
                        <div class="testimonial__content__single">
                            <p>I contacted Taxsmartpk and they responded very quickly.
                                They listened to all my problems patiently and provided me with the most suitable
                                solution that helped me elevate my business even more.</p>
                        </div>
                        <!--// Testimonial Content Single -->

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

                    </div>
                    <!--// Testimonial Single -->

                    <!-- Testimonial Single -->
                    <div class="testimonial__single">

                        <!-- Testimonial Content Single -->
                        <div class="testimonial__content__single">
                            <p>After working with Tax smart, my tax filing system is very organised and I am able to
                                find any relevant information easily.
                                They made tax filing much much easier and I am extremely grateful for that.</p>
                        </div>
                        <!--// Testimonial Content Single -->

                        <!-- Single Author -->
                        <div class="testimonial__author__single">
                            <div class="testimonial__author__image">
                                <img src="{{ asset('assets/images/testimonial/testimonial-author-1.webp') }}"
                                    alt="testimonial author">
                            </div>
                            <div class="testimonial__author__description">
                                <h6>John Patrik</h6>
                                <span>Client</span>
                            </div>
                        </div>
                        <!--// Single Author -->

                    </div>
                    <!--// Testimonial Single -->

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
                    <p>Your one stop solution to all your tax related problems.
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
