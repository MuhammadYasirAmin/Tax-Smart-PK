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
                            <li>About</li>
                        </ul>
                        <h1>About Us</h1>
                        <p>perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam
                            rem </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--// Breadcrumb Area -->
@endsection

<!-- About Area -->
<section id="about-area" class="cr-section about-area bg--white">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-10">
                <div class="about-area__content2 text-center">
                    <h4>WE ARE “
                        <span class="color--theme">Tax Smart Pk</span>”
                    </h4>
                    <h3 class="cd-headline cx-heading slide">PROVIDE BEST TAX SOLUTION FOR YOUR
                        <span class="color--theme cd-words-wrapper cd-words-wrapper-2">
                            <b class="is-visible">Business</b>
                            <b>Performance</b>
                            <b>Success</b>
                        </span>
                        TO GROWUP
                    </h3>
                    <p>perspiciatis unde omnis iste natus error sit voluptatem accusantium que laudantium, totam rem
                        aperiam, eaque ipsa
                        quae pursue pleasure rationally encounter consequences pursue pleasure rationally encounter
                        consequencesp</p>
                    <p>parchitecto beatae vitae dicta sunt explicabo. Nemo enim ipsam tatem quia voluptas sit aspernatur
                        aut odit aut fugit,
                        sed quia tur magni dolores eos qui ratione voluptatem sequi nesciunt pursue pleasure rationally
                        encounter consequences
                        that are extremely painful pursue pleasure rationally encounter consequences that are extremely
                        painful</p>
                    <a href="javascript:void(0)" class="cr-readmore">
                        <span>Read More</span>
                    </a>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="about-area__image2">
                    <img src="{{ asset('assets/images/about/about-thumbnail-3.webp') }}" alt="about area image">
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
                    <p class="wow fadeInUp" data-wow-delay="0.15s">Perspiciatis unde omnis ist natus error sit
                        voluptatem accusantium loremque tium totam rem aperiam eaque </p>
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
                    <p class="wow fadeInUp" data-wow-delay="0.15s">Perspiciatis unde omnis ist natus error sit
                        voluptatem accusantium loremque tium totam rem aperiam eaque </p>
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
                    <p class="wow fadeInUp" data-wow-delay="0.15s">Perspiciatis unde omnis ist natus error sit
                        voluptatem accusantium loremque tium totam rem aperiam eaque </p>
                </div>
            </div>
        </div>
        <!--// Single Feature -->

    </div>
</section>
<!--// Features Area -->

<!-- Service Area -->
<section id="service-area" class="service-area section-padding-top--xlg bg--white">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10">
                <div class="section-title">
                    <h4>OUR SERVICES</h4>
                    <h2>PROVIDE BEST
                        <span class="color--theme">SERVICES</span>
                    </h2>
                    <p>Perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam
                        rem aperiam, eaque
                        ipsa quae</p>
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
                                    <img src="{{ asset('assets/images/icons/service-icon-user.webp') }}" alt="service icon">
                                </div>
                                <div class="service__content">
                                    <h5>
                                        <a href="{{ route('Frontend.TaxServices') }}">PERSONAL TAX</a>
                                    </h5>
                                    <p>Perspiciatis unde omnis ist natus error sit voluptatem accusantium loremque tium
                                        totam rem per </p>
                                </div>
                            </div>
                        </div>
                        <!--// Single Service -->

                        <!-- Single Service -->
                        <div class="col-lg-6 col-md-6 wow flipInX">
                            <div class="service">
                                <div class="service__icon">
                                    <img src="{{ asset('assets/images/icons/service-icon-bar.webp') }}" alt="service icon">
                                </div>
                                <div class="service__content">
                                    <h5>
                                        <a href="{{ route('Frontend.TaxServices') }}">CORPORATE TAX</a>
                                    </h5>
                                    <p>Perspiciatis unde omnis ist natus error sit voluptatem accusantium loremque tium
                                        totam rem per </p>
                                </div>
                            </div>
                        </div>
                        <!--// Single Service -->

                        <!-- Single Service -->
                        <div class="col-lg-6 col-md-6 wow flipInX">
                            <div class="service">
                                <div class="service__icon">
                                    <img src="{{ asset('assets/images/icons/service-icon-briefcase.webp') }}" alt="service icon">
                                </div>
                                <div class="service__content">
                                    <h5>
                                        <a href="{{ route('Frontend.TaxServices') }}">Business TAX</a>
                                    </h5>
                                    <p>Perspiciatis unde omnis ist natus error sit voluptatem accusantium loremque tium
                                        totam rem per </p>
                                </div>
                            </div>
                        </div>
                        <!--// Single Service -->

                        <!-- Single Service -->
                        <div class="col-lg-6 col-md-6 wow flipInX">
                            <div class="service">
                                <div class="service__icon">
                                    <img src="{{ asset('assets/images/icons/service-icon-pie.webp') }}" alt="service icon">
                                </div>
                                <div class="service__content">
                                    <h5>
                                        <a href="{{ route('Frontend.TaxServices') }}">Finance TAX</a>
                                    </h5>
                                    <p>Perspiciatis unde omnis ist natus error sit voluptatem accusantium loremque tium
                                        totam rem per </p>
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
                        <div class="cr-bar" data-bar-percent="25" data-bar-title="2013"></div>
                        <div class="cr-bar" data-bar-percent="45" data-bar-title="2014"></div>
                        <div class="cr-bar" data-bar-percent="37" data-bar-title="2015"></div>
                        <div class="cr-bar" data-bar-percent="69" data-bar-title="2016"></div>
                        <div class="cr-bar" data-bar-percent="88" data-bar-title="2017"></div>
                    </div>
                    <span class="cr-bars__name">Our progress</span>
                </div>
            </div>
        </div>
    </div>
</section>
<!--// Service Area -->

<!-- Team Area -->
<section id="team-area" class="advisor-area bg--white section-padding--xlg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <div class="section-title text-center">
                    <h4>OUR TEAM</h4>
                    <h2>MEET OUR
                        <span class="color--theme">TAX ADVISOR</span>
                    </h2>
                    <p>Perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam
                        rem aperiam, eaque
                        ipsa quae</p>
                </div>
            </div>
        </div>
        <div class="row advisors">

            <!-- Single Advisor -->
            <div class="col-lg-3 col-sm-6">
                <figure class="advisor">
                    <div class="advisor__image">
                        <img src="{{ asset('assets/images/advisors/advisor-1.webp') }}" alt="team member">
                    </div>
                    <figcaption class="advisor__content">
                        <h6>
                            <a href="advisor-details.html">SIMON DE ANDERSON</a>
                        </h6>
                        <p>Senior Advisor</p>
                    </figcaption>
                </figure>
            </div>
            <!--// Single Advisor -->

            <!-- Single Advisor -->
            <div class="col-lg-3 col-sm-6">
                <figure class="advisor">
                    <div class="advisor__image">
                        <img src="{{ asset('assets/images/advisors/advisor-2.webp') }}" alt="team member">
                    </div>
                    <figcaption class="advisor__content">
                        <h6>
                            <a href="advisor-details.html">JUlia ANDERSON</a>
                        </h6>
                        <p>Senior Advisor</p>
                    </figcaption>
                </figure>
            </div>
            <!--// Single Advisor -->

            <!-- Single Advisor -->
            <div class="col-lg-3 col-sm-6">
                <figure class="advisor">
                    <div class="advisor__image">
                        <img src="{{ asset('assets/images/advisors/advisor-3.webp') }}" alt="team member">
                    </div>
                    <figcaption class="advisor__content">
                        <h6>
                            <a href="advisor-details.html">David Miller</a>
                        </h6>
                        <p>Tax Advisor</p>
                    </figcaption>
                </figure>
            </div>
            <!--// Single Advisor -->

            <!-- Single Advisor -->
            <div class="col-lg-3 col-sm-6">
                <figure class="advisor">
                    <div class="advisor__image">
                        <img src="{{ asset('assets/images/advisors/advisor-4.webp') }}" alt="team member">
                    </div>
                    <figcaption class="advisor__content">
                        <h6>
                            <a href="advisor-details.html">Martin Smith</a>
                        </h6>
                        <p>Tax Advisor</p>
                    </figcaption>
                </figure>
            </div>
            <!--// Single Advisor -->

        </div>
    </div>
</section>
<!--// Team Area -->

<!-- Funfact Area -->
<div id="funfact-area" class="funfact-area bg--white">
    <div class="funfacts">
        <div class="row g-0">

            <!--  Single Funfact -->
            <div class="col-lg-3 col-sm-6">
                <div class="funfact text-center">
                    <h1>
                        <span class="counter">349</span>
                    </h1>
                    <h5>TRUSTED CLIENTS</h5>
                </div>
            </div>
            <!--//  Single Funfact -->

            <!--  Single Funfact -->
            <div class="col-lg-3 col-sm-6">
                <div class="funfact text-center">
                    <h1>
                        <span class="counter">109</span>
                    </h1>
                    <h5>Awards Win</h5>
                </div>
            </div>
            <!--//  Single Funfact -->

            <!--  Single Funfact -->
            <div class="col-lg-3 col-sm-6">
                <div class="funfact text-center">
                    <h1>
                        <span class="counter">459</span>
                    </h1>
                    <h5>Project Done</h5>
                </div>
            </div>
            <!--//  Single Funfact -->

            <!--  Single Funfact -->
            <div class="col-lg-3 col-sm-6">
                <div class="funfact text-center">
                    <h1>
                        <span class="counter">19</span>
                    </h1>
                    <h5>Expert Advisor</h5>
                </div>
            </div>
            <!--//  Single Funfact -->

        </div>
    </div>
</div>
<!--// Funfact Area -->



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