@section('BannerArea')
    <!-- Breadcrumb Area -->
    <div id="cr-breadcrumb-area" class="cr-breadcrumb-area section-padding--md">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-6 col-md-8">
                    <div class="cr-breadcrumb">
                        <ul class="cr-breadcrumb__pagination">
                            <li><a href="{{ route('Frontend.index') }}">Home</a></li>
                            <li>Advisor</li>
                        </ul>
                        <h1>Our Advisors</h1>
                        <p>Your one stop solution to all your tax related problems.
                        Tax smart, the No.1 Tax solution company in pakistan providing their best services to make your
                        life easier and also to help you reach the top.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--// Breadcrumb Area -->
@endsection

<section id="about-area" class="cr-section about-area bg--white section-padding--md">
    <div class="container">
        <div class="row align-items-center">
            <h4 class="text-center">WE ARE “
                <span class="color--theme">Tax Smart PK</span>”
            </h4>
            <h3 class="cd-headline cx-heading slide text-center">PROVIDE BEST TAX SOLUTION FOR YOUR
                <span class="color--theme cd-words-wrapper cd-words-wrapper-2" style="width: 207.641px;">
                    <b class="is-hidden">Business</b>
                    <b class="is-visible">Performance</b>
                    <b class="is-hidden">Success</b>
                </span>
                TO GROWUP
            </h3>
            <p class="text-center">Tax Smart is a part of Osama Qamar & Associates, a tax firm who is providing tax
                solutions to
                individuals/corporates for last 5 years. The firm was founded by an Income Tax Practitioner Osama Qamar,
                who is also a senior member of Karachi Tax Bar Association. The firm is associated with Senior Advocates
                and CFA qualified persons.
            </p>
            <h4><span>Please find below services that are being offered by us:</span></h4>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-6 order-2 order-kg-1">
                <div class="about-area__content about-area__content--left">
                    <a href="javascript:void(0);" class="cr-readmore">
                        <span>Tax Smart Pk</span>
                    </a>
                    <ol class="alignleft">
                        <li>Filing of tax returns of sole proprietor’s.</li>
                        <li>Filing of tax returns of individuals working in corporate sector.</li>
                        <li>NTN/Form 181 Registration for individuals.</li>
                        <li>Response to notice received by individuals.</li>
                    </ol>

                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 text-lg-right">
                <div class="about-area__content about-area__content--left">
                    <a href="javascript:void(0);" class="cr-readmore">
                        <span>OSAMA QAMAR & ASSOCIATES</span>
                    </a>
                    <ol class="alignleft">
                        <li>Filing of monthly statements of Income Tax and SRB of corporates.</li>
                        <li>Filing of quarterly form 165 along with annual form 149 of corporate clients.</li>
                        <li>Ensure compliance against issued FBR notices for amendments, audit, explanation and
                            miscellaneous by/within the due date/deadline.</li>
                        <li>Calculation of withholding taxes, and likewise issuance of tax deduction certificates to
                            employees, land lord and vendor’s</li>
                        <li>Registration/formation services for AOP and PVT Ltd Company</li>
                    </ol>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- Team Area -->
<section id="team-area" class="advisor-area bg--white section-padding--md">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <div class="section-title text-center">
                    <h4>OUR TEAM</h4>
                    <h2>MEET OUR <span class="color--theme">TAX ADVISOR</span></h2>
                </div>
            </div>
        </div>
        <div class="row advisors advisors--style2">

            <!-- Single Advisor -->
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="advisor advisor--style2">
                    <div class="advisor__image">
                        <img src="{{ asset('assets/images/advisors/advisor-1.webp') }}" alt="team member">

                    </div>
                    <div class="advisor__content">
                        <h5>Osama Omar</h5>
                        <p>CEO & Founder</p>
                    </div>
                </div>
            </div>
            <!--// Single Advisor -->

            <!-- Single Advisor -->
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="advisor advisor--style2">
                    <div class="advisor__image">
                        <img src="{{ asset('assets/images/advisors/advisor-2.webp') }}" alt="team member">
                    </div>
                    <div class="advisor__content">
                        <h5>Osama Omar</h5>
                        <p>Advocate</p>
                    </div>
                </div>
            </div>
            <!--// Single Advisor -->

        </div>

    </div>
</section>
<!--// Team Area -->

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
