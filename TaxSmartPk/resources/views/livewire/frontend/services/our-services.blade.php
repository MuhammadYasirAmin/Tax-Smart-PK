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
                <div class="col-lg-12">
                    <div class="pg-services__details">
                        <h4>OUR SERVICES</h4>
                        <p>Filing your annual tax return can be stressful. But with Tax Smart, you can feel free and
                            relaxed. We provide all kind of tax related services that includes registration of form
                            181/NTN, Sales Tax Registration and filing of annual tax returns for individuals as well as
                            corporates.</p>
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
                            <img src="{{ asset('assets/images/icons/service-icon-home.webp') }}" alt="service icon">
                        </div>
                        <div class="service__content">
                            <h5>
                                <a href="{{ route('Frontend.TaxServices') }}">NTN REGISTRATION</a>
                            </h5>
                            <b>[Requirements]</b>
                            <ol class="alignleft">
                                <li>CNIC number</li>
                                <li>Address</li>
                                <li>Latest Paid Electricity Bill</li>
                                <li>Cell Number</li>
                                <li>Email address</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!--// Single Service -->

                <!-- Single Service -->
                <div class="col-lg-4 col-md-6 wow flipInX">
                    <div class="service">
                        <div class="service__icon">
                            <img src="{{ asset('assets/images/icons/service-icon-briefcase-2.webp') }}"
                                alt="service icon">
                        </div>
                        <div class="service__content">
                            <h5>
                                <a href="{{ route('Frontend.TaxServices') }}">SALES TAX REGISTRATION</a>
                            </h5>
                            <b>[Requirements]</b>
                            <ol class="alignleft">
                                <li>CNIC number</li>
                                <li>Address</li>
                                <li>Latest Paid Electricity Bill</li>
                                <li>Letter Head</li>
                                <li>Nature of Business</li>
                                <li>Cell Number</li>
                                <li>Email address</li>
                            </ol>
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
                                <a href="{{ route('Frontend.TaxServices') }}">FILLING OF ANNUAL TAX RETURNS</a>
                            </h5>
                            {{-- <p>[Requirements]</p> --}}
                            <p>Tax Smart Form which requires below details:</p>
                            <ol class="alignleft">
                                <li>Employer Tax Deduction Certificate</li>
                                <li>All bank balances as on 30th June {{ date('Y') }}</li>
                                <li>All Asset details as on 30th June {{ date('Y') }}[House, Apt, Plot, Car, Bike
                                    etc]</li>
                                <li>Any Asset bought or sold in fiscal year
                                    {{ date('Y') }}[1/7/{{ date('y') - 1 }} to 30/6/{{ date('y') }}]</li>
                            </ol>
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
                        <form autocomplete="off" id="calculateTax" name="calculateTax" onsubmit="return!1">
                            <div class="row no-gutters">

                                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.45">
                                    <div class="single-input">
                                        <label for="select-tax-year">Tax Year*</label>
                                        <select name="year" id="select-tax-year">
                                            {{-- @foreach (range(date('Y'), date('Y') - 15) as $y)
                                                <option value="{{ $y }}">{{ $y }}</option>
                                            @endforeach --}}
                                            <option value="2022">2022</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.6">
                                    <div class="single-input">
                                        <label for="salary">Total Income</label>
                                        <input id="salaryssss" name="salary"
                                            onkeyup="this.value=transform(this.value)"
                                            placeholder="Enter your monthly salary" type="tel">
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-8 wow fadeInUp" data-wow-delay="0.75">
                                    <label></label>
                                    <div class="button-holder" style="margin-left: 0; margin-top: 40px;">
                                        <span class="equal-sign">=</span>
                                        <button class="cr-btn" onclick="taxCalculate(event)" type="button"
                                            style="padding: 10px 20px;">
                                            <span>Calculate</span>
                                        </button>
                                    </div>
                                </div>

                            </div>
                        </form>
                        <div class="ntn-status--table">
                            <table class="mt-5 table">
                                <tbody>
                                    <tr>
                                        <td class="border-bottom-0 border-top-0 pb-0 border-left-0"><span>Monthly
                                                Salary</span></td>
                                        <td class="border-bottom-0 border-top-0 pb-0 border-left border-right">
                                            <span>Monthly Tax</span>
                                        </td>
                                        <td class="border-bottom-0 border-top-0 pb-0 border-right-0"><span>Salary After
                                                Tax</span></td>
                                    </tr>
                                    <tr>
                                        <td class="border-top-0 pt-0 border-left-0">
                                            <h2 class="sub-heading" id="monthlySalary">0.00</h2>
                                        </td>
                                        <td class="border-top-0 pt-0 border-left border-right">
                                            <h2 class="sub-heading" id="monthlyTax">0.00</h2>
                                        </td>
                                        <td class="border-top-0 pt-0 border-right-0">
                                            <h2 class="sub-heading" id="monthlySalaryAfterTax">0.00</h2>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="border-bottom-0 pb-0 border-left-0"><span>Yearly Salary</span></td>
                                        <td class="border-bottom-0 pb-0 border-left border-right"><span>Yearly
                                                Tax</span></td>
                                        <td class="border-bottom-0 pb-0 border-right-0"><span>Salary After Tax</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="border-bottom-0 border-top-0 pt-0 border-left-0">
                                            <h2 class="sub-heading" id="yearlySalary">0.00</h2>
                                        </td>
                                        <td class="border-bottom-0 border-top-0 pt-0 border-left border-right">
                                            <h2 class="sub-heading" id="yearlyTax">0.00</h2>
                                        </td>
                                        <td class="border-bottom-0 border-top-0 pt-0 border-right-0">
                                            <h2 class="sub-heading" id="yearlySalaryAfterTax">0.00</h2>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!--// Tax Calculation Area Right -->

        </div>
    </div>
</section>
<!--// Tax Calculation Area -->

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
                                <h6>Sarosh</h6>
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
                                <h6>Umer Khan</h6>
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
                                <h6>Sarosh</h6>
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
                                <h6>Umer Khan</h6>
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
