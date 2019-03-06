<?php
    define('DB_HOST', 'localhost');
    define('DB_USER','root');
    define('DB_PASSWORD','');
    define('DB_NAME', 'rapid_grocery_shop');

    $con = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
    if(!$con){
     die('Could not Connect My Sql:' .mysql_error());
    }
    $db = mysqli_select_db($con,DB_NAME) or die("Failed to connect to MySQL: " . mysqli_error());
?>

<?php include 'include/header.html';?>

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

                    <div class="row">
                        <div class="col-lg-6 form-group" align="center">
                            <h4>Thank you!</h4>  <br/>
                            <h5>

                            <?php
                                function NewUser()
                                {
                                    $con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
                                    $firstName = $_POST['first_name'];
                                    $lastName = $_POST['last_name'];
                                    $email = $_POST['email_address'];
                                    $password =  $_POST['password'];
                                    $query = "INSERT INTO customers (customer_id,first_name,last_name,email_address,password) VALUES (default,'$firstName','$lastName','$email','$password')";
                                    $data = mysqli_query ($con,$query) or die("Could Not Perform the Query");
                                    if($data)
                                    {
                                        echo "YOUR REGISTRATION IS COMPLETED.";
                                    }
                                }

                                function SignUp()
                                {
                                    $con = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
                                    $firstName = $_POST['first_name'];
                                    $lastName = $_POST['last_name'];
                                    $email = $_POST['email_address'];
                                    $password =  $_POST['password'];
                                    if(!empty($_POST['email_address']))   //checking the 'email_address' name which is from Sign-Up.html, is it empty or have some text
                                    {
                                        $query = "SELECT * FROM customers WHERE email_address = '$email' AND password = '$password'";

                                        if(!$row = mysqli_fetch_array($con, $query))
                                        {
                                            NewUser();
                                        }
                                        else
                                        {
                                            echo "SORRY...YOU ARE ALREADY REGISTERED USER...";
                                        }
                                    }
                                }

                                 if(isset($_POST['submit']))
                                 {
                                    SignUp();
                                 }
                            ?>

                            </h5>  <br/>

                            <p align="center"><button class="genric-btn info">View My profile</button></p>
                            <p align="center">
                                <br>
                                <a href="index.php">Return to store</a><br>
                            </p>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End contact-page Area -->

<?php include 'include/footer.html';?>