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
                            <li>Our Process</li>
                        </ul>
                        <h1>Our Process</h1>
                        <p>Offering smart and innovative services with top quality standards, through our great
                            organizational structure</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--// Breadcrumb Area -->
@endsection

<!-- Service Area -->
<section id="service-area" class="service-area section-padding--xlg bg--white">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10">
                <div class="section-title">
                    <h4>OUR PROCESSES</h4>
                    <h2>Process for Corporate
                        <span class="color--theme"> Sector Employees.</span>
                    </h2>
                    <p>The employees who wants to file his/her tax return is supposed to simply fill a single pager form
                        along with below supporting documents. The form requires info regarding his/her income and
                        assets.</p>
                    <ol class="alignleft">
                        <li>Employer Tax Deduction Certificate.</li>
                        <li>All bank balances as on 30th June 2022.</li>
                        <li>All Asset details as on 30th June 2022[House, Apt, Plot, Car, Bike etc].</li>
                        <li>Any Asset bought or sold in that fiscal year.</li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="service-area__services">
                    <div class="row">

                        <!-- Single Service -->
                        <div class="col-lg-4 col-md-4 wow flipInX">
                            <div class="service">
                                <div class="service__icon">
                                    <img src="{{ asset('assets/images/icons/service-icon-user.webp') }}"
                                        alt="service icon">
                                </div>
                                <div class="service__content">
                                    <h5>
                                        <a href="{{ route('Frontend.TaxServices') }}">STEP 01</a>
                                    </h5>
                                    <p>Employee will fill the form provided by <b>Tax Smart PK</b></p>
                                </div>
                            </div>
                        </div>
                        <!--// Single Service -->

                        <!-- Single Service -->
                        <div class="col-lg-4 col-md-4 wow flipInX">
                            <div class="service">
                                <div class="service__icon">
                                    <img src="{{ asset('assets/images/icons/service-icon-bar.webp') }}"
                                        alt="service icon">
                                </div>
                                <div class="service__content">
                                    <h5>
                                        <a href="{{ route('Frontend.TaxServices') }}">STEP 02</a>
                                    </h5>
                                    <p>Once the form is filled, it will be emailed/Whatsapp to Tax Smart at given
                                        whatsapp number and email address</p>
                                </div>
                            </div>
                        </div>
                        <!--// Single Service -->

                        <!-- Single Service -->
                        <div class="col-lg-4 col-md-4 wow flipInX">
                            <div class="service">
                                <div class="service__icon">
                                    <img src="{{ asset('assets/images/icons/service-icon-briefcase.webp') }}"
                                        alt="service icon">
                                </div>
                                <div class="service__content">
                                    <h5>
                                        <a href="{{ route('Frontend.TaxServices') }}">STEP 03</a>
                                    </h5>
                                    <p>Once the form is reviewed by Tax Smart and once it gets reconciled with the
                                        supporting documents, the final draft will be sent to the employee for his/her
                                        endorsement. </p>
                                </div>
                            </div>
                        </div>
                        <!--// Single Service -->

                        <!-- Single Service -->
                        <div class="col-lg-4 col-md-4 wow flipInX">
                            <div class="service">
                                <div class="service__icon">
                                    <img src="{{ asset('assets/images/icons/service-icon-pie.webp') }}"
                                        alt="service icon">
                                </div>
                                <div class="service__content">
                                    <h5>
                                        <a href="{{ route('Frontend.TaxServices') }}">STEP 04</a>
                                    </h5>
                                    <p>The employee has to finally review the final draft and put his/her signature and
                                        will have to email back the signed copy through WhatsApp or email.</p>
                                </div>
                            </div>
                        </div>
                        <!--// Single Service -->

                        <!-- Single Service -->
                        <div class="col-lg-4 col-md-4 wow flipInX">
                            <div class="service">
                                <div class="service__icon">
                                    <img src="{{ asset('assets/images/icons/service-icon-briefcase-2.webp') }}"
                                        alt="service icon">
                                </div>
                                <div class="service__content">
                                    <h5>
                                        <a href="{{ route('Frontend.TaxServices') }}">STEP 05</a>
                                    </h5>
                                    <p>After receiving the final draft signed by the employee the tax return will be filed within 2-3 working days.</p>
                                </div>
                            </div>
                        </div>
                        <!--// Single Service -->

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--// Service Area -->

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
