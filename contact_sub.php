<?php include 'include/header.html';?>

			<!-- start banner Area -->
            <section class="banner-area relative about-banner" id="home">
                <div class="overlay overlay-bg"></div>
                <div class="container">
                    <div class="row d-flex align-items-center justify-content-center">
                        <div class="about-content col-lg-12">
                            <h1 class="text-white">
                                Contact Us
                            </h1>
                            <p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="contact.php"> Contact Us</a></p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End banner Area -->


            <!-- Start contact-page Area -->
            <section class="contact-page-area section-gap">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-4 d-flex flex-column address-wrap">
                            <div class="single-contact-address d-flex flex-row">
                                <div class="icon">
                                    <span class="lnr lnr-home"></span>
                                </div>
                                <div class="contact-details">
                                    <h5>Kitchener, Ontario N2G 4M4, Canada</h5>
                                    <p>
                                        299 Doon Valley Drive
                                    </p>
                                </div>
                            </div>
                            <div class="single-contact-address d-flex flex-row">
                                <div class="icon">
                                    <span class="lnr lnr-phone-handset"></span>
                                </div>
                                <div class="contact-details">
                                    <h5>00 (958) 9865 562</h5>
                                    <p>Mon to Fri 9am to 6 pm</p>
                                </div>
                            </div>
                            <div class="single-contact-address d-flex flex-row">
                                <div class="icon">
                                    <span class="lnr lnr-envelope"></span>
                                </div>
                                <div class="contact-details">
                                    <h5>support@rapidgrocery.com</h5>
                                    <p>Send us your query anytime!</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <form class="form-area " id="myForm" action="mail.php" method="post" class="contact-form text-right">
                                <div class="row">

                                    <div class="col-lg-4"></div>
                                    <div class="col-lg-6">
                                        <div class="alert-msg" style="padding-top:20px;padding-left:30px;padding-bottom:20px">Sent your message!</div>
                                        <br/>
                                        <button class="genric-btn primary">Return Contact Page</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End contact-page Area -->


<?php include 'include/footer.html';?>