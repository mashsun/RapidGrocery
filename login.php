<?php include 'include/header.html';?>

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

 <!-- Start contact-page Area -->
            <section class="contact-page-area section-gap">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-4 d-flex flex-column address-wrap">
                        </div>
                        <div class="col-lg-8">
                            <form class="form-area " id="myForm" action="login_check.php" method="post" class="contact-form text-right">
                                <div class="row">
                                    <div class="col-lg-6 form-group">

                                        <input name="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control" required="" type="email">

                                        <input name="password" placeholder="Enter password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter password'"
                                            class="common-input mb-20 form-control" required="" type="password">
                                            <br>

                                        <p align="center"><button class="genric-btn info">Sign In</button></p>
                                        <p align="center">
                                            <br>
                                            <a href="#">Create Account</a><br>
                                            <a href="#">Forgot your password?</a>
                                        </p>

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End contact-page Area -->


<?php include 'include/footer.html';?>