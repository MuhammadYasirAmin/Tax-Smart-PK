@section('BannerArea')
    <!-- Breadcrumb Area -->
    <div id="cr-breadcrumb-area" class="cr-breadcrumb-area section-padding--md">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-6 col-md-8">
                    <div class="cr-breadcrumb">
                        <ul class="cr-breadcrumb__pagination">
                            <li><a href="{{ route('Frontend.index') }}">Home</a></li>
                            <li>Contact</li>
                        </ul>
                        <h1>Contact Us</h1>
                        <p>Want to get in touch with us? </p>
                        <p>We would love to help you out.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--// Breadcrumb Area -->
@endsection

<!-- Pg Contact -->
<div class="pg-contact bg--white">

    <!-- Contact Form -->
    <div class="pg-contact-form-area bg--white section-padding--xlg">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="pg-appintment">
                        <div class="pg-appintment__title">
                            <h2>SEND A MESSAGE</h2>
                        </div>
                        <div class="pg-appintment__box">
                            <form id="contact-form" action="{{ route('Frontend.PostContact') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-input">
                                            <input type="text" name="UserName" id="name" placeholder="Name"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-input">
                                            <input type="email" name="UserEmail" id="email" placeholder="Email"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-input">
                                            <input type="text" name="UserSubject" id="subject"
                                                placeholder="Subject" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-input">
                                            <input type="text" name="UserPhone" id="phone" placeholder="Phone"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="single-input">
                                            <textarea name="UserMessage" cols="30" rows="5" placeholder="Message" required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="single-input button text-left">
                                            <button type="submit" class="cr-btn"><span>Submit</span></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <p class="form-message"></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 d-none d-lg-block">
                    <div class="pg-contact-img ml-xl-5 ml-0">
                        <img src="{{ asset('assets/images/others/contact-image.webp') }}" alt="contact image">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--// Contact Form -->

    <div class="google-map-wrapper">
        <div id="google-map" class="google-map"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-9">
                    <div class="pg-contact__content">
                        <h1>Say hello to us</h1>
                        <p>Reach our team and ask us anything you want. We would get back to you shortly. </p>

                        <div class="pg-contact__blocks">
                            <div class="single-block address">
                                <h6>address</h6>
                                <p>Office # Building 5C, Ground Floor, Street # 17, Phase 6, DHA, Karachi.</p>
                            </div>
                            <div class="single-block phone">
                                <h6>Phone</h6>
                                <p><a href="javascript:void(0)">+92 317 5902778</a></p>

                            </div>
                            <div class="single-block web">
                                <h6>Web</h6>
                                <p><a href="javascript:void(0)">info@taxsmartpk.com</a></p>
                                <p><a href="javascript:void(0)">www.TaxSmartPK.com</a></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="pg-contact__newsletter">
                                    <h5> Subscribe to our newsletter</h5>
                                    <form
                                        action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef"
                                        method="post" target="_blank">
                                        <input type="email" name="EMAIL" class="email" id="mce-EMAIL"
                                            placeholder="Your Email here" required>
                                        <button type="submit"><i class="fa fa-paper-plane-o"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!--// Pg Contact -->

<!-- Call To Action Area -->
<section id="cta-area" class="cta-area section-padding--sm bg--grey--light bg--abstruct-mask">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="calltoaction text-center">
                    <h3>GIVING YOU <span class="color--theme"> MORE YOUR MONEY</span></h3>
                    <p>Your one stop solution to all your tax related problems.
                        Tax smart, the No.1 Tax solution company in pakistan providing their best services to make your
                        life easier and also to help you reach the top. </p>
                    <!--<h6>JUST DAIL <a href="callto://+00812548359874">+008 12548 359 874</a> (TOLL FREE)</h6>-->
                </div>
            </div>
        </div>
    </div>
</section>
<!--// Call To Action Area -->
