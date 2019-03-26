<?php
    include 'include/header.php';
?>
<?php
   include "config.php";

   if(isset($_POST['cus_submit'])){

       $email = mysqli_real_escape_string($con,$_POST['email']);
       $password = mysqli_real_escape_string($con,$_POST['password']);

       if ($email != "" && $password != ""){

           $sql_query = "select count(*) as cntUser from customers where email_address='".$email."' and password='".$password."'";
           $result = mysqli_query($con,$sql_query);
           $row = mysqli_fetch_array($result);

           $count = $row['cntUser'];

           if($count > 0){
               $_SESSION["cus_email"] = "$email";
               header('Location: index.php');
           }else{
               echo '<script type="text/javascript">';
               echo 'alert("Invalid email or password")';
               echo '</script>';

           }
       }
   }
?>
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
                            <form class="form-area " id="loginForm" action="" method="post" class="contact-form text-right">
                                <div class="row">
                                    <div class="col-lg-6 form-group">

                                        <input name="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control" required="" type="email">

                                        <input name="password" placeholder="Enter password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter password'"
                                            class="common-input mb-20 form-control" required="" type="password">
                                            <br>

                                        <p align="center"><button class="genric-btn info"  name="cus_submit" id="cus_submit" onclick="document.forms["loginForm"].submit()">Sign In</button></p>
                                        <p align="center">
                                            <br>
                                            <a href="create_account.php">Create Account</a><br>
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