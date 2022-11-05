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
                        <p>Schedule a meeting with us and discuss the possible solutions with our experts. </p>
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
                        <form action="{{ route('Frontend.PostAppointment') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="single-input">
                                        <input type="text" name="FirstName" id="user-first-name"
                                            placeholder="First Name" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="single-input">
                                        <input type="text" name="LastName" id="user-last-name"
                                            placeholder="Last Name" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="single-input">
                                        <input type="email" name="UserEmail" id="user-email" placeholder="Email"
                                            required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="single-input">
                                        <input type="text" name="UserPhone" id="user-phone" placeholder="Phone"
                                            required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="single-input">
                                        <select class="select2-another" name="SelectAdvisor" id="user-select-advisor"
                                            required>
                                            <option value="">Select Advisor</option>
                                            <option value="Julia Anderson">Julia Anderson</option>
                                            <option value="David Miller">David Miller</option>
                                            <option value="Simon De Andersom">Simon De Andersom</option>
                                            <option value="Martin Smith">Martin Smith</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="single-input">
                                        <input type="text" name="SelectDate" id="user-select-date"
                                            placeholder="Select Date" data-select="datepicker" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="single-input">
                                        <textarea cols="30" rows="5" placeholder="Message" name="UserMessage" required></textarea>
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
                    <h3>GIVING MORE<span class="color--theme"> FOR YOUR MONEY</span></h3>
                    <p>Your one stop solution to all your tax related problems.
                        Tax smart, the No.1 Tax solution company in pakistan providing their best services to make your
                        life easier and also to help you reach the top. </p>
                    <h6>JUST DAIL <a href="callto://+00812548359874">+008 12548 359 874</a> (TOLL FREE)</h6>
                </div>
            </div>
        </div>
    </div>
</section>
<!--// Call To Action Area -->
