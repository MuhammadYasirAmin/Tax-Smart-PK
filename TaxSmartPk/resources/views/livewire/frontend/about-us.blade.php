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
                        <p>Offering smart and innovative services with top quality standards, through our great
                            organizational structure</p>
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
        <div class="row g-0">
            <div class="col-lg-12">
                <div class="about-area__content">
                    <h4>"Tax Smart Pk
                        <span class="color--theme"></span>”
                    </h4>
                    <h3 class="cd-headline cx-heading">Providing Quality Tax Services For Over 10 Years.
                        <span class="color--theme cd-words-wrapper cd-words-wrapper-2">
                            <b class="is-visible"></b>
                            <b></b>
                            <b></b>
                        </span>

                    </h3>
                    <p>Tax Smart is part of Osama Qamar and Associates, it is a tax firm providing tax solutions to
                        individuals
                        /corporates for last 5 years. The firm was first founded by an income tax practioner Osama
                        Qamar, who is also a
                        senior member of Karachi Tax Bar Association. The firm is associated with Senior Advocates and
                        CFA qualified people. </p>
                    <p>Here at Tax Smart, we offer a variety of services that solves all your Tax related issues such
                        as, filing of tax returns,
                        filing of tax returns of individuals working in corporate sector, NTN/form 181 registration for
                        individuals, response to notice received by individuals and many more.
                    </p>
                    <!--<a href="javascript:void(0)" class="cr-readmore">-->

                    <!--</a>-->
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
