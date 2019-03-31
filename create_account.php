<?php
include 'include/header.php';
?>

<!-- start banner Area -->
<section class="banner-area relative about-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Create Account
                </h1>
                <p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="about.html">Create Account</a></p>
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
                <form class="form-area" id="signUp" action="sign_up.php" method="post" class="contact-form text-right">
                    <div class="row">
                        <div class="col-lg-6 form-group">
                          <input type="text" id ="first_name" name="first_name" placeholder="First Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'First Name'"
                          required class="common-input mb-20 form-control">

                          <input type="text" id="last_name" name="last_name" placeholder="Last Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Last Name'"
                          required class="common-input mb-20 form-control">

                           <input id="email" name="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control" required="" type="email">

                           <input id="password" name="password" placeholder="Enter password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter password'"
                                class="common-input mb-20 form-control" required="" type="password">
                                <br>

                            <p align="center"><input id="submit" type="submit" name="submit" value="Create" class="genric-btn info">
                            <p align="center">
                                <br>
                                <a href="index.php">Return to store</a><br>
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