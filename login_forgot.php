<?php include 'include/header.php';?>

    <!-- start banner Area -->
    <section class="banner-area relative about-banner" id="home">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        Log In
                    </h1>
                    <p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="about.html">Login</a></p>
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
                                    <div class="col-lg-6 form-group" align="center">
                                    <h4>RESET YOUR PASSWORD</h4>  <br/>
                                    <h5>We will send you an email to reset your password.</h5>  <br/>

                                        <input name="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control" required="" type="email">

                                       <br/>

                                        <p align="center"><button class="genric-btn info">Submit</button></p>
                                        <p align="center">

                                            <a href="login.php">Cancel</a>
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