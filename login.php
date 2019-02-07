<?php include 'header.html';?>

			<!-- start banner Area -->
			<section class="banner-area relative about-banner" id="home">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Log In
							</h1>
							<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="about.html"> About Us</a></p>
						</div>
					</div>
				</div>
			</section>
			<!-- End banner Area -->

            <!-- Start home-about Area -->
			<section class="home-about-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-9">

                                    <form action="#">
                                        <div class="mt-10">
                                            <input type="text" name="first_name" placeholder="First Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'First Name'" required class="single-input">
                                        </div>
                                        <div class="mt-10">
                                            <input type="text" name="last_name" placeholder="Last Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Last Name'" required class="single-input">
                                        </div>
                                        <div class="mt-10">
                                            <input type="email" name="EMAIL" placeholder="Email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" required class="single-input">
                                        </div>
                                        <br/><br/>
                                        <div class="button-group-area">
                                            <a href="#" class="genric-btn primary">Log In</a>
                                            <a href="#" class="genric-btn success">Sign Up</a>
                                        </div>
                                    </form>
						</div>
					</div>
				</div>
			</section>
			<!-- End home-about Area -->


<?php include 'footer.html';?>