<?php include 'include/header.html';?>

			<!-- start banner Area -->
			<section class="banner-area relative about-banner" id="home">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Cart
							</h1>
							<p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="cart.php"> Cart</a></p>
						</div>
					</div>
				</div>
			</section>
			<!-- End banner Area -->

			<!-- Start home-about Area -->
			<div class="whole-wrap">
				<div class="container">
				    <div class="section-top-border">
                            <h3 class="mb-30" align="center">Your Cart</h3>
							<div class="progress-table-wrap">
                                <div class="progress-table">
                                    <div class="table-head">
                                        <div class="visit"></div>
                                        <div class="visit"></div>
                                        <div class="visit"></div>
                                        <div class="visit">QUANTITY</div>
                                        <div class="percentage">TOTAL</div>
                                    </div>
                                    <div class="table-row">
                                        <div class="visit"></div>
                                        <div class="visit"> <img src="img/elements/bakery01.jpg" width="70" height="70"></div>
                                        <div class="visit">Donut</div>
                                        <div class="visit">5</div>
                                        <div class="percentage">$50</div>
                                    </div>
                                    <div class="table-row">
                                        <div class="visit"></div>
                                        <div class="visit"> <img src="img/elements/bakery02.jpg" width="70" height="70"></div>
                                        <div class="visit">Croissant</div>
                                        <div class="visit">2</div>
                                        <div class="percentage">30</div>
                                    </div>
                                </div>
						     </div>


                           <div class="button-group-area mt-10" align="center">
                            <h3 class="mb-30">SUBTOTAL &nbsp; $80</h3>
                            Shipping, taxes, and discounts calculated at checkout. <br/>
							    <a class="genric-btn primary" href="#">Update Cart</a>
							    <a class="genric-btn info" href="#">Checkout</a>
							</div>
						</div>
					</div>
				</div>

			<!-- End home-about Area -->


            <!-- Start review Area -->
			<?php include 'include/review.html';?>
			<!-- End review Area -->

<?php include 'include/footer.html';?>