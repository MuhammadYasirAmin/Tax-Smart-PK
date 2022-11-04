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
                        <p>perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam
                            rem </p>
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
                        <p>perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                            totam rem aperiam, eaque
                            ipsa quae </p>
                        <p>perspiciatis unde omnis ist natus error sit voluptatem accusantium loremque tium totam rem
                            aperiam eaque numquam
                            eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad
                            minima veniam,</p>
                        <p>perspiciatis unde omnis ist natus error sit voluptatem accusantium loremque tium totam rem
                            aperiam eaque numquam
                            eius modi tempora incidunt ut labore</p>
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
                            <p>Perspiciatis unde omnis ist natus error sit voluptatem accusantium loremque tium totam
                                rem per </p>
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
                            <p>Perspiciatis unde omnis ist natus error sit voluptatem accusantium loremque tium totam
                                rem per </p>
                        </div>
                    </div>
                </div>
                <!--// Single Service -->

                <!-- Single Service -->
                <div class="col-lg-4 col-md-6 wow flipInX">
                    <div class="service">
                        <div class="service__icon">
                            <img src="{{ asset('assets/images/icons/service-icon-home.webp') }}" alt="service icon">
                        </div>
                        <div class="service__content">
                            <h5>
                                <a href="{{ route('Frontend.TaxServices') }}">PROPERTY TAX</a>
                            </h5>
                            <p>Perspiciatis unde omnis ist natus error sit voluptatem accusantium loremque tium totam
                                rem per </p>
                        </div>
                    </div>
                </div>
                <!--// Single Service -->

                <!-- Single Service -->
                <div class="col-lg-4 col-md-6 wow flipInX">
                    <div class="service">
                        <div class="service__icon">
                            <img src="{{ asset('assets/images/icons/service-icon-briefcase.webp') }}" alt="service icon">
                        </div>
                        <div class="service__content">
                            <h5>
                                <a href="{{ route('Frontend.TaxServices') }}">Business TAX</a>
                            </h5>
                            <p>Perspiciatis unde omnis ist natus error sit voluptatem accusantium loremque tium totam
                                rem per </p>
                        </div>
                    </div>
                </div>
                <!--// Single Service -->

                <!-- Single Service -->
                <div class="col-lg-4 col-md-6 wow flipInX">
                    <div class="service">
                        <div class="service__icon">
                            <img src="{{ asset('assets/images/icons/service-icon-briefcase-2.webp') }}" alt="service icon">
                        </div>
                        <div class="service__content">
                            <h5>
                                <a href="{{ route('Frontend.TaxServices') }}">International TAX</a>
                            </h5>
                            <p>Perspiciatis unde omnis ist natus error sit voluptatem accusantium loremque tium totam
                                rem per </p>
                        </div>
                    </div>
                </div>
                <!--// Single Service -->

                <!-- Single Service -->
                <div class="col-lg-4 col-md-6 wow flipInX">
                    <div class="service">
                        <div class="service__icon">
                            <img src="{{ asset('assets/images/icons/service-icon-pie.webp') }}" alt="service icon">
                        </div>
                        <div class="service__content">
                            <h5>
                                <a href="{{ route('Frontend.TaxServices') }}">Finance TAX</a>
                            </h5>
                            <p>Perspiciatis unde omnis ist natus error sit voluptatem accusantium loremque tium totam
                                rem per </p>
                        </div>
                    </div>
                </div>
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
                    <h2>WHAT
                        <span class="color--theme">CLIENTS SAY</span>
                    </h2>
                    <p>perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudanti, totam
                        rem aperiam, eaque
                        ipsa quae so something new for tax calculation </p>
                </div>
            </div>

            <div class="col-lg-8">
                <div class="testimonial testimonial-slider-style3-active testimonial--style3">

                    <!-- Testimonial Single -->
                    <div class="testimonial__single">

                        <!-- Testimonial Content Single -->
                        <div class="testimonial__content__single">
                            <p>parchitecto beatae vitae dicta sunt abo no enim ipsam voluptatem quia voluptas sit rnatur
                                aut odit aut fugit, sed
                                quia</p>
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
                                <span>President</span>
                            </div>
                        </div>
                        <!--// Single Author -->

                    </div>
                    <!--// Testimonial Single -->

                    <!-- Testimonial Single -->
                    <div class="testimonial__single">

                        <!-- Testimonial Content Single -->
                        <div class="testimonial__content__single">
                            <p>parchitecto beatae vitae dicta sunt abo no enim ipsam voluptatem quia voluptas sit rnatur
                                aut odit aut fugit, sed
                                quia</p>
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
                                <span>Ceo</span>
                            </div>
                        </div>
                        <!--// Single Author -->

                    </div>
                    <!--// Testimonial Single -->

                    <!-- Testimonial Single -->
                    <div class="testimonial__single">

                        <!-- Testimonial Content Single -->
                        <div class="testimonial__content__single">
                            <p>parchitecto beatae vitae dicta sunt abo no enim ipsam voluptatem quia voluptas sit rnatur
                                aut odit aut fugit, sed
                                quia</p>
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
                                <span>Executive</span>
                            </div>
                        </div>
                        <!--// Single Author -->

                    </div>
                    <!--// Testimonial Single -->

                    <!-- Testimonial Single -->
                    <div class="testimonial__single">

                        <!-- Testimonial Content Single -->
                        <div class="testimonial__content__single">
                            <p>parchitecto beatae vitae dicta sunt abo no enim ipsam voluptatem quia voluptas sit rnatur
                                aut odit aut fugit, sed
                                quia</p>
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
                                <span>President</span>
                            </div>
                        </div>
                        <!--// Single Author -->

                    </div>
                    <!--// Testimonial Single -->

                    <!-- Testimonial Single -->
                    <div class="testimonial__single">

                        <!-- Testimonial Content Single -->
                        <div class="testimonial__content__single">
                            <p>parchitecto beatae vitae dicta sunt abo no enim ipsam voluptatem quia voluptas sit rnatur
                                aut odit aut fugit, sed
                                quia</p>
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
                                <span>Ceo</span>
                            </div>
                        </div>
                        <!--// Single Author -->

                    </div>
                    <!--// Testimonial Single -->

                    <!-- Testimonial Single -->
                    <div class="testimonial__single">

                        <!-- Testimonial Content Single -->
                        <div class="testimonial__content__single">
                            <p>parchitecto beatae vitae dicta sunt abo no enim ipsam voluptatem quia voluptas sit rnatur
                                aut odit aut fugit, sed
                                quia</p>
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
                                <span>Executive</span>
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
                    <h3>NEED ANY HELP AT
                        <span class="color--theme"> YOUR TAX SOLUTION?</span>
                    </h3>
                    <p>Perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam
                        rem aperiam, eaque
                        ipsa Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci </p>
                    <h6>JUST DAIL
                        <a href="callto://+00812548359874">+008 12548 359 874</a> (TOLL FREE)
                    </h6>
                </div>
            </div>
        </div>
    </div>
</section>
<!--// Call To Action Area -->