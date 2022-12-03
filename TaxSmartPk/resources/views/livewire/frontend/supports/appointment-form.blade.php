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
            <div class="col-xl-12 col-lg-12">
                <div class="pg-appintment">
                    <div class="pg-appintment__title text-center">
                        <h2>MAKE AN APPOINTMENT</h2>
                    </div>
                    <div class="pg-appintment__box">
                        @php
                            $year = date('Y');
                        @endphp
                        <form action="{{ route('Frontend.PostAppointment') }}" method="POST">
                            @csrf

                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="single-input">
                                        <input type="text" name="FullName" id="user-first-name"
                                            placeholder="Full Name" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="single-input">
                                        <input type="text" name="CNICNumber" maxlength="16" minlength="12"
                                            pattern="[0-9]{5}-[0-9]{7}-[0-9]{1}" placeholder="CNIC Number (12345-1234567-1)" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="single-input">
                                        <input type="email" name="UserEmail" id="user-email"
                                            placeholder="Email Address" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="single-input">
                                        <input type="text" name="UserPhone" maxlength="12" minlength="11"
                                            placeholder="Phone Number" required>
                                    </div>
                                </div>

                            </div>

                            <h3 class="pt-5">Assets Details</h3>

                            <div class="row justify-content-center">
                                <div class="col-lg-4 col-md-4">
                                    <div class="single-input">
                                        <input type="text" name="PropertyDetail[]" id="user-phone"
                                            placeholder="Property Details" required>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3">
                                    <div class="single-input">
                                        <input type="number" name="P_TaxYear2021[]" id="user-phone"
                                            placeholder="Purchase Price {{ date('Y') - 1 }}" required>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3">
                                    <div class="single-input">
                                        <input type="number" name="P_TaxYear2022[]" id="user-phone"
                                            placeholder="Purchase Price {{ date('Y') }}" required>
                                    </div>
                                </div>
                                <div class="col-lg-1">
                                    <div class="single-input button" style="margin-top: 45px;">
                                        <button type="button" id="add-property"
                                            class="btn btn-success"><span>Add</span></button>
                                    </div>
                                </div>
                            </div>
                            <div id="properties"></div>

                            <div class="row justify-content-center">
                                <div class="col-lg-4 col-md-4">
                                    <div class="single-input">
                                        <input type="text" name="BankAccount[]" id="user-phone"
                                            placeholder="Bank Details" required>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3">
                                    <div class="single-input">
                                        <input type="number" name="B_TaxYear2021[]" id="user-phone"
                                            placeholder="Tax Year {{ date('Y') - 1 }}" required>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3">
                                    <div class="single-input">
                                        <input type="number" name="B_TaxYear2022[]" id="user-phone"
                                            placeholder="Tax Year {{ date('Y') }}" required>
                                    </div>
                                </div>
                                <div class="col-lg-1">
                                    <div class="single-input button" style="margin-top: 45px;">
                                        <button type="button" id="add-bank"
                                            class="btn btn-success"><span>Add</span></button>
                                    </div>
                                </div>
                            </div>
                            <div id="banks"></div>

                            <div class="row justify-content-center">
                                <div class="col-lg-4 col-md-4">
                                    <div class="single-input">
                                        <input type="text" name="Vehciles[]" id="user-phone" placeholder="Reg#"
                                            required>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3">
                                    <div class="single-input">
                                        <input type="number" name="V_TaxYear2021[]" id="user-phone"
                                            placeholder="Tax Year {{ date('Y') - 1 }}" required>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3">
                                    <div class="single-input">
                                        <input type="number" name="V_TaxYear2022[]" id="user-phone"
                                            placeholder="Tax Year {{ date('Y') }}" required>
                                    </div>
                                </div>
                                <div class="col-lg-1">
                                    <div class="single-input button" style="margin-top: 45px;">
                                        <button type="button" id="add-vehcile"
                                            class="btn btn-success"><span>Add</span></button>
                                    </div>
                                </div>
                            </div>
                            <div id="vehciles"></div>

                            <div class="row justify-content-center">
                                <div class="col-lg-4 col-md-4">
                                    <div class="single-input">
                                        <input type="text" name="OtherAssets[]" id="user-phone"
                                            placeholder="Other Assets" required>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3">
                                    <div class="single-input">
                                        <input type="number" name="O_TaxYear2021[]" id="user-phone"
                                            placeholder="Tax Year {{ date('Y') - 1 }}" required>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3">
                                    <div class="single-input">
                                        <input type="number" name="O_TaxYear2022[]" id="user-phone"
                                            placeholder="Tax Year {{ date('Y') }}" required>
                                    </div>
                                </div>
                                <div class="col-lg-1">
                                    <div class="single-input button" style="margin-top: 45px;">
                                        <button type="button" id="add-assets"
                                            class="btn btn-success"><span>Add</span></button>
                                    </div>
                                </div>
                            </div>
                            <div id="other-assets"></div>

                            {{-- <div class="row justify-content-end">
                                <div class="col-lg-3 col-md-3">
                                    <div class="single-input">
                                        <input readonly type="text" name="grandTotal_2021" id="grand_Total_2021"
                                            placeholder="GRAND TOTAL" required>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3">
                                    <div class="single-input">
                                        <input readonly type="text" name="grandTotal_2022" id="grand_Total_2022"
                                            placeholder="GRAND TOTAL" required>
                                    </div>
                                </div>
                                <div class="col-lg-1 col-md-1">
                                </div>
                            </div> --}}

                            <h3 class="pt-5">RECONCILIATION</h3>

                            <div class="row justify-content-center">
                                <div class="col-lg-4 col-md-4">
                                    <div class="single-input">
                                        <input readonly type="text" name="Income[]" id="user-phone"
                                            value="Income From Salary" required>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3">
                                    <div class="single-input">
                                        <input type="number" name="I_TaxYear2021[]" id="user-phone"
                                            placeholder="Income of {{ date('Y') - 1 }}" required>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3">
                                    <div class="single-input">
                                        <input type="number" name="I_TaxYear2022[]" id="user-phone"
                                            placeholder="Income {{ date('Y') }}" required>
                                    </div>
                                </div>
                                <div class="col-lg-1"></div>
                            </div>

                            <div class="row justify-content-center">
                                <div class="col-lg-4 col-md-4">
                                    <div class="single-input">
                                        <input readonly type="text" name="Income[]" id="user-phone"
                                            value="Rental Income / Any Other Income" required>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3">
                                    <div class="single-input">
                                        <input type="number" name="I_TaxYear2021[]" id="user-phone"
                                            placeholder="Income of {{ date('Y') - 1 }}" required>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3">
                                    <div class="single-input">
                                        <input type="number" name="I_TaxYear2022[]" id="user-phone"
                                            placeholder="Income {{ date('Y') }}" required>
                                    </div>
                                </div>
                                <div class="col-lg-1"></div>
                            </div>

                            {{-- <div class="row justify-content-end">
                                <div class="col-lg-3 col-md-3">
                                    <div class="single-input">
                                        <input readonly type="text" name="incomingFlows_2021"
                                            id="income_Total_2021" placeholder="Incoming Flows TOTAL" required>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3">
                                    <div class="single-input">
                                        <input readonly type="text" name="incomingFlows_2022"
                                            id="income_Total_2022" placeholder="Incoming Flows TOTAL" required>
                                    </div>
                                </div>
                                <div class="col-lg-1 col-md-1">
                                </div>
                            </div> --}}

                            <div class="row justify-content-center">
                                <div class="col-lg-4 col-md-4">
                                    <div class="single-input">
                                        <input readonly type="text" name="OutFlows[]" id="user-phone"
                                            value="Personal Expenses" required>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3">
                                    <div class="single-input">
                                        <input type="number" name="OF_TaxYear2021[]" id="user-phone"
                                            placeholder="Expenses of {{ date('Y') - 1 }}" required>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3">
                                    <div class="single-input">
                                        <input type="number" name="OF_TaxYear2022[]" id="user-phone"
                                            placeholder="Expense of {{ date('Y') }}" required>
                                    </div>
                                </div>
                                <div class="col-lg-1"></div>
                            </div>

                            <div class="row justify-content-center">
                                <div class="col-lg-4 col-md-4">
                                    <div class="single-input">
                                        <input readonly type="text" name="OutFlows[]" id="user-phone"
                                            value="Tax Deducted(Salary)" required>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3">
                                    <div class="single-input">
                                        <input type="number" name="OF_TaxYear2021[]" id="user-phone"
                                            placeholder="Taxes of {{ date('Y') - 1 }}" required>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3">
                                    <div class="single-input">
                                        <input type="number" name="OF_TaxYear2022[]" id="user-phone"
                                            placeholder="Taxes of {{ date('Y') }}" required>
                                    </div>
                                </div>
                                <div class="col-lg-1"></div>
                            </div>

                            <div class="row justify-content-center">
                                <div class="col-lg-4 col-md-4">
                                    <div class="single-input">
                                        <input readonly type="text" name="OutFlows[]" id="user-phone"
                                            value="Tax Paid(Other)" required>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3">
                                    <div class="single-input">
                                        <input type="number" name="OF_TaxYear2021[]" id="user-phone"
                                            placeholder="Taxes of {{ date('Y') - 1 }}" required>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3">
                                    <div class="single-input">
                                        <input type="number" name="OF_TaxYear2022[]" id="user-phone"
                                            placeholder="Taxes of {{ date('Y') }}" required>
                                    </div>
                                </div>
                                <div class="col-lg-1"></div>
                            </div>

                            <div class="row justify-content-center">
                                <div class="col-lg-4 col-md-4">
                                    <div class="single-input">
                                        <input readonly type="text" name="OutFlows[]" id="user-phone"
                                            value="Gift / Others" required>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3">
                                    <div class="single-input">
                                        <input type="number" name="OF_TaxYear2021[]" id="user-phone"
                                            placeholder="Gift of {{ date('Y') - 1 }}" required>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3">
                                    <div class="single-input">
                                        <input type="number" name="OF_TaxYear2022[]" id="user-phone"
                                            placeholder="Gift of {{ date('Y') }}" required>
                                    </div>
                                </div>
                                <div class="col-lg-1"></div>
                            </div>

                            {{-- <div class="row justify-content-end">
                                <div class="col-lg-3 col-md-3">
                                    <div class="single-input">
                                        <input readonly type="text" name="outflowsTotal_2021"
                                            id="outflows_Total_2021" placeholder="OutFlows TOTAL" required>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3">
                                    <div class="single-input">
                                        <input readonly type="text" name="outflowsTotal_2022"
                                            id="outflows_Total_2022" placeholder="OutFlows TOTAL" required>
                                    </div>
                                </div>
                                <div class="col-lg-1 col-md-1">
                                </div>
                            </div> --}}

                            <hr class="my-3" />

                            <div class="row justify-content-center">
                                <div class="col-lg-10 col-md-10">
                                    <div class="single-input">
                                        <input type="text" name="RemarksAny" placeholder="REMARKS(IF ANY): "
                                            required>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="single-input button">
                                        <button type="submit" class="cr-btn"><span>Submit NTN Registration
                                                Form</span></button>
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
                </div>
            </div>
        </div>
    </div>
</section>
<!--// Call To Action Area -->
