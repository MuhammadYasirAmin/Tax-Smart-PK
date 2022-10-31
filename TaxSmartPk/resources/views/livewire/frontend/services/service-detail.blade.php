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
                            <li>
                                <a href="{{ route('Frontend.OurServices') }}">Services</a>
                            </li>
                            <li>Tax Service</li>
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
			<section id="pg-service-area" class="cr-section bg--white pg-service-area section-padding-top--xlg">

				<!-- Service Page Top -->
				<div class="pg-service__top">
					<div class="container">
						<div class="row align-items-xl-center align-items-start">
							<div class="col-lg-6">
								<div class="pg-service__thumb wow fadeInLeft">
									<img src="{{ asset('assets/images/service/pg-service-thumb.webp') }}" alt="service page thumb">
								</div>
							</div>
							<div class="col-lg-6">
								<div class="pg-service__content">
									<h2>CORPORATE
										<span class="color--theme">TAX</span>
									</h2>
									<p>perspiciatis unde omnis iste natus error sit voluptatem accusantium ue laudantium, totam rem aperiam, eaque ipsa
										quae </p>
									<p>perspiciatis unde omnis ist natus error sit voluptatem accusantium ue tium totam rem aperiam eaque numquam eius
										modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem</p>
									<p>perspiciatis unde omnis ist natus error sit voluptatem accusantium que tium totam rem aperiam eaque numquam eius
										modi tempora incidunt ut labore</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--// Service Page Top -->

				<!-- Service Page Bottom -->
				<div class="pg-service__bottom">
					<div class="container">
						<div class="row align-items-end">
							<div class="col-lg-7 order-2 order-lg-1">
								<div class="pg-service__blocks">
									<div class="pg-service__block">
										<h3>ANALYSIS</h3>
										<p>perspiciatis unde omnis ist natus error sit voluptatem accusantium ue tium totam rem aperiam eaque numquam eius
											modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem</p>
										<p>perspiciatis unde omnis ist natus error sit voluptatem accusantium ue tium totam rem aperiam eaque numquam eius
											modi tempora incidunt ut labore et </p>
									</div>
									<div class="pg-service__block">
										<h3>TAX CALCULATION</h3>
										<p>perspiciatis unde omnis ist natus error sit voluptatem accusantium ue totam rem aperiam eaque numquam eius modi
											tempora incidunt ut labore </p>
										<div class="row pg-service__insideblocks">
											<div class="col-lg-6 col-md-6">
												<div class="pg-service__insideblock">
													<h6>Step # 01</h6>
													<p>perspiciatis unde omnis ist natus lac sit voluptatem accusantium ue tium totam rem aperiam eaque </p>
												</div>
											</div>
											<div class="col-lg-6 col-md-6">
												<div class="pg-service__insideblock">
													<h6>Step # 02</h6>
													<p>perspiciatis unde omnis ist natus lac sit voluptatem accusantium ue tium totam rem aperiam eaque </p>
												</div>
											</div>
											<div class="col-lg-6 col-md-6">
												<div class="pg-service__insideblock">
													<h6>Step # 03</h6>
													<p>perspiciatis unde omnis ist natus lac sit voluptatem accusantium ue tium totam rem aperiam eaque </p>
												</div>
											</div>
											<div class="col-lg-6 col-md-6">
												<div class="pg-service__insideblock">
													<h6>Step # 04</h6>
													<p>perspiciatis unde omnis ist natus lac sit voluptatem accusantium ue tium totam rem aperiam eaque </p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-5 order-1 order-lg-2">
								<div class="pg-service__thumb-bottom text-center wow fadeInRight">
									<img src="{{ asset('assets/images/service/service-bottom-thumb.webp') }}" alt="service bottom thumb">
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--// Service Page Bottom -->

				<!-- Service Page Pagination -->
				<div class="pg-service__pagination">
					<a href="{{ route('Frontend.TaxServices') }}" class="service-pagination prev">Prev</a>
					<a href="{{ route('Frontend.TaxServices') }}" class="service-pagination next">Next</a>
				</div>
				<!--// Service Page Pagination -->

			</section>
			<!--// Page Service Area -->

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
								<p>Perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque
									ipsa Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci </p>
								<h6>JUST DAIL<a href="callto://+00812548359874">+008 12548 359 874</a> (TOLL FREE)</h6>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--// Call To Action Area -->