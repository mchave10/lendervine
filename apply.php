<?php 
$title = 'LenderVine - Apply for a Business Loan';
include 'header.php'; ?>

    <!-- Header -->
    <header style="background-image:url(images/header-background-mobile.jpg);" id="header" class="header">
        <div class="header-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        
                        <h1 class="h1-large">Business Loans</h1>
                        <p class="p-heading p-large">Simply apply below and get pre-qualified. </p>
                        <!-- end of get quote form -->
                        
                        <div id="wizard_container">
				
			
<form name="example-1" id="wrapped" method="POST" action="form_send_without_branch.php" class="wizard-form">
					<input id="website" name="website" type="text" value="">
					<!-- Leave for security protection, read docs for details -->
					<div id="middle-wizard" class="wizard-branch wizard-wrapper">
						<div class="step wizard-step current" style="display: block;">
							<div class="question_title">
                                <h3>Choose Loan Amount</h3>
							</div>
							<div class="row justify-content-center">
								<div class="col-lg-12">
									<div class="item">
										<label id="loan_amount_label" class="rangeText" for="customRange3">$300,000</label>
                                        <input id="loan_amount" type="range" class="mc-custom-range" name="loan_amount" value="5000"  min="5000" max="600000" step="5000" id="customRange3">
                                        
									</div>
								</div>
								
							</div>
							<!-- /row-->
						</div>
						<!-- /step-->
                        <div class="step wizard-step" style="display: none;">
							<div class="question_title">
                                <h3>Monthly Revenue</h3>
							</div>
							<div class="row justify-content-center">
								<div class="col-lg-12">
									<div class="item">
										<label id="monthly_revenue_label" class="rangeText" for="customRange3">$300,000</label>
                                        <input id="monthly_revenue"  type="range" class="mc-custom-range" name="monthly_revenue"  value="1000"  min="1000" max="100000" step="1000" id="customRange3">
                                        
									</div>
								</div>
								
							</div>
							<!-- /row-->
						</div>
                        <div class="step wizard-step" style="display: none;">
							<div class="question_title">
                                <h3>What is your credit score?</h3>
							</div>
							<div class="row justify-content-center">
								<div class="col-lg-12">
									<div class="item">
										<label id="credit_score_label" class="rangeText" for="customRange3">300+</label>
                                        <input id="credit_score"  type="range" class="mc-custom-range" name="credit_score"  value="300"  min="300" max="800" step="10" id="customRange3">
                                        
									</div>
								</div>
								
							</div>
							<!-- /row-->
						</div>

						
						
						<!-- Last step ============================== -->
						<div class="finalstep submit step wizard-step" disabled="disabled" style="display: none;">
							<div class="question_title">
								<h3>Final Step</h3>
								<p>Fill the form below to get pre-qualified for your business loan.</p>
							</div>
							<div class="form-row align-items-center justify-content-center">
								<div class="col-lg-12">
									<div class="box_general">
                                        <div class="form-group">
											<input id="company_name" type="text" name="company_name" class="required form-control mb-2">
                                            <label for="company_name">Company Name</label>
										</div>
                                        <div class="form-group">
								
												<select id="business_age" class="required form-control" name="business_age">
													<option value="Start Up">Start Up</option>
													<option value="Six months or less">Less Than 6 Months</option>
													<option value="Six months to year">6 Months-1 Year</option>
													<option value="One to Two Years">1-2 Years</option>
													<option value="Two Years Plus">2 Years +</option>
												</select>
                                                <label for="business_age">Time in Business</label>
										</div>
										<div class="form-group">
											<input id="first_name" type="text" name="first_name" class="required form-control">
                                            <label for="first_name">First Name</label>
										</div>
                                        <div class="form-group">
											<input id="last_name" type="text" name="last_name" class="required form-control">
                                            <label for="last_name">Last Name</label>
										</div>
										<div class="form-group">
											<input id="email" type="email" name="email" class="required form-control" >
                                             <label for="email">Email Address</label>
										</div>
										<div class="form-group">
											<input id="telephone" type="tel" name="telephone" class="required form-control" >
                                             <label for="telephone">Phone Number</label>
										</div>
                                        <div class="form-group">
											<input id="zip" type="tel" name="zip" class="required form-control" >
                                             <label for="zip">Zip Code</label>
										</div>
										
								
									</div>
									<!-- /box_general -->
								</div>
							</div>
							<!-- /row -->
						</div>
						<!-- /Last step ============================== -->
					</div>
					<!-- /middle-wizard -->
					<div id="bottom-wizard">
						<button type="button" name="backward" class="backward" disabled="disabled">Previous Step </button>
						<button type="button" name="forward" class="forward">Next Step</button>
						<button type="submit" name="process" class="submit" disabled="disabled">Submit</button>
					</div>
					<!-- /bottom-wizard -->
				</form>
                
        </div>
			<!-- /Wizard container -->        
                        
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of header-content -->
    </header> <!-- end of header -->
    <!-- end of header -->
  <!-- Get Quote Form -->
                      
    
    <!-- Approval -->
    <div id="fastprocess" class="accordion">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center">Quick & Easy Process</h2>
                    <p class="p-heading p-large text-center">Applying for a loan shouldn't be complicated or intimidating. Let us do the heavy lifting.</p>

                    <!-- Accordion -->     
                    <div id="detailsAccordion" data-children=".item">
                        <div class="item">
                            <a data-toggle="collapse" href="#detailsAccordion1" aria-expanded="true">
                                <span class="circle-numbering">1</span><span class="accordion-title">Apply for your business loan in just minutes.</span>
                            </a>
                
                        </div>
                        <div class="item">
                            <a data-toggle="collapse" href="#detailsAccordion2" aria-expanded="false">
                                <span class="circle-numbering">2</span><span class="accordion-title">You will quickly be connected to a lender.</span>
                            </a>
                          
                        </div>
                        <div class="item">
                            <a data-toggle="collapse" href="#detailsAccordion3" aria-expanded="false">
                                <span class="circle-numbering">3</span><span class="accordion-title">Enjoy next day funding if qualified.</span>
                            </a>
                      
                        </div>
                        <div class="item">
                            <a data-toggle="collapse" href="#detailsAccordion4" aria-expanded="false">
                                <span class="circle-numbering">4</span><span class="accordion-title">Fund your dream business.</span>
                            </a>
                         
                        </div>
                    </div> <!-- end of detailsAccordion -->
                    <!-- end of accordion -->
                    <a class="cta  page-scroll" href="#header">Apply Now</a>

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of accordion -->
    <!-- end of approval -->
    <!-- Testimonials -->
    <div id="newapproach" class="slider-2 text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3>The New Wave In Business Loans</h3>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
        <div class="container">
            <div class="row">
                
                <!-- Card Slider -->
                <div class="swiper-container card-slider">
                    <div class="swiper-wrapper">
                         <!-- Slide -->
                        <div class="swiper-slide">
                            <div class="card">
                                <img class="card-image rounded-circle" src="images/testi1.jpg" alt="Quote">
                                <div class="card-body">
                                    <p class="testimonial-text">LenderVine is definitely the best and quickest way to apply for a business loan.</p>
                               
                                </div>
                            </div>        
                        </div> <!-- end of swiper-slide -->
                        <!-- Slide -->
                        <div class="swiper-slide">
                            <div class="card">
                                <img class="card-image rounded-circle" src="images/testi2.jpg" alt="Quote">
                                <div class="card-body">
                                    <p class="testimonial-text">It is so easy to apply and the site is very user friendly.</p>
                            
                                </div>
                            </div>
                        </div> <!-- end of swiper-slide -->
                        <!-- end of slide -->

                        <!-- Slide -->
                        <div class="swiper-slide">
                            <div class="card">
                                <img class="card-image rounded-circle" src="images/testi3.jpg" alt="Quote">
                                <div class="card-body">
                                    <p class="testimonial-text">You can get your money the day after you apply. It doesn't get any better.</p>
                                   
                                </div>
                            </div>        
                        </div> <!-- end of swiper-slide -->
                        <!-- end of slide -->
                         <!-- Slide -->
                        <div class="swiper-slide">
                            <div class="card">
                                <img class="card-image rounded-circle" src="images/testi4.jpg" alt="Quote">
                                <div class="card-body">
                                    <p class="testimonial-text">This company makes it so easy and super quick to apply for a loan.</p>
                             
                                </div>
                            </div>
                        </div> <!-- end of swiper-slide -->
                        <!-- end of slide -->
                        <!-- Slide -->
                        <div class="swiper-slide">
                            <div class="card">
                                <img class="card-image rounded-circle" src="images/testi5.jpg" alt="Quote">
                                <div class="card-body">
                                    <p class="testimonial-text">The lender contacted me minutes after applying. LenderVine is as fast as they say they are.</p>
               
                                </div>
                            </div>        
                        </div> <!-- end of swiper-slide -->
                        <!-- end of slide -->

                       

                        <!-- Slide -->
                        <div class="swiper-slide">
                            <div class="card">
                                <img class="card-image rounded-circle" src="images/testi6.jpg" alt="Quote">
                                <div class="card-body">
                                    <p class="testimonial-text">Applying on this site gave me the confidence to really give it my all.</p>
                                   
                                </div>
                            </div>        
                        </div> <!-- end of swiper-slide -->
                        <!-- end of slide -->

                       
                        <!-- end of slide -->
                    
                    </div> <!-- end of swiper-wrapper -->

                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
                    <!-- end of add pagination -->

                </div> <!-- end of swiper-container -->
                <!-- end of card slider -->

            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of slider-2 -->

    <!-- Loan Options -->
    <div id="aboutus" class="cards-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center">About LenderVine</h2>
                    <p class="text-center">We are a company dedicated to creating a quick and easy process for business owners to apply for loans. We use our proprietary technology  to automate the connection of your application to the lenders that best fit your qualifications. We value your success and we value your business.  </p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            

        </div> <!-- end of container -->
    </div> <!-- end of cards-1 -->
    <!-- end of loan options -->

    
    
<?php include 'footer.php'; ?>



  