<?php include 'include/header.php';?>

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

                            <form class="form-area " id="myForm"  name="contactform" action="mail.php" method="post" class="contact-form text-right">
                                <div class="row">
                                    <div class="col-lg-6 form-group">
                                        <input name="name" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="common-input mb-20 form-control" required="" type="text">

                                        <input name="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control" required="" type="email">

                                        <input name="subject" placeholder="Enter subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter subject'" class="common-input mb-20 form-control" required="" type="text">
                                    </div>
                                    <div class="col-lg-6 form-group">
                                        <textarea class="common-textarea form-control" name="message" placeholder="Enter Message" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Messege'" required=""></textarea>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="alert-msg" style="text-align: left;"></div>
                                        <button class="genric-btn primary" style="float: right;">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End contact-page Area -->


<?php include 'include/footer.html';?>