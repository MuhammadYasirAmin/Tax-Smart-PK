@section('BannerArea')
    <!-- Breadcrumb Area -->
    <div id="cr-breadcrumb-area" class="cr-breadcrumb-area section-padding--md">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-6 col-md-8">
                    <div class="cr-breadcrumb">
                        <ul class="cr-breadcrumb__pagination">
                            <li><a href="{{ route('Frontend.index') }}">Home</a></li>
                            <li>Appointment</li>
                        </ul>
                        <h1>Appointment</h1>
                        <p>perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam
                            rem </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--// Breadcrumb Area -->
@endsection

<!-- Appointment -->
<div class="appointment bg--white section-padding--xlg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-10">
                <div class="pg-appintment">
                    <div class="pg-appintment__title text-center">
                        <h2>MAKE AN APPOINTMENT</h2>
                    </div>
                    <div class="pg-appintment__box">
                        <form action="#">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="single-input">
                                        <input type="text" name="user-first-name" id="user-first-name"
                                            placeholder="First Name">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="single-input">
                                        <input type="text" name="user-last-name" id="user-last-name"
                                            placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="single-input">
                                        <input type="email" name="user-email" id="user-email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="single-input">
                                        <input type="text" name="user-phone" id="user-phone" placeholder="Phone">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="single-input">
                                        <select class="select2-another" name="user-select-advisor"
                                            id="user-select-advisor">
                                            <option value="0">Select Advisor</option>
                                            <option value="1">Julia Anderson</option>
                                            <option value="2">David Miller</option>
                                            <option value="3">Simon De Andersom</option>
                                            <option value="4">Martin Smith</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="single-input">
                                        <input type="text" name="user-select-date" id="user-select-date"
                                            placeholder="Select Date" data-select="datepicker">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="single-input">
                                        <textarea cols="30" rows="5" placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="single-input button">
                                        <button type="submit" class="cr-btn"><span>Submit</span></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--// Appointment -->

<!-- Call To Action Area -->
<section id="cta-area" class="cta-area section-padding--sm bg--grey--light bg--abstruct-mask">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="calltoaction text-center">
                    <h3>NEED ANY HELP AT<span class="color--theme"> YOUR TAX SOLUTION?</span></h3>
                    <p>Perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam
                        rem aperiam, eaque ipsa Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,
                        consectetur, adipisci </p>
                    <h6>JUST DAIL <a href="callto://+00812548359874">+008 12548 359 874</a> (TOLL FREE)</h6>
                </div>
            </div>
        </div>
    </div>
</section>
<!--// Call To Action Area -->
