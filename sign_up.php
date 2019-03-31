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
                                $email = $_POST['email'];
                                $password =  $_POST['password'];
                                $query = "INSERT INTO customers (customer_id,first_name,last_name,email_address,password) VALUES (default,'$firstName','$lastName','$email','$password')";
                                $data = mysqli_query ($con,$query) or die("Could Not Perform the Query");
                                if($data)
                                {
                                    echo "YOUR REGISTRATION IS COMPLETED.<br/><br/>";

                                    echo "<form class='form-area' id='profileForm' action='profile.php' method='post' class='contact-form text-right'>";
                                    echo "<input type='hidden' name='first_name' id='firstName' value='" . $firstName. "'>";
                                    echo "<input type='hidden' name='last_name' id='last_name' value='" . $lastName. "'>";
                                    echo "<input type='hidden' name='email' id='email' value='" . $email. "'>";
                                    echo "<input type='hidden' name='password' id='password' value='" . $password. "'>";

                                    echo "<input type='submit' class='genric-btn info'  name='add_submit' id='add_submit' value='Add Information'>";
                                    echo "</form>";
                                }
                            }

                            function SignUp()
                            {
                                $con = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
                                $firstName = $_POST['first_name'];
                                $lastName = $_POST['last_name'];
                                $email = $_POST['email'];
                                $password =  $_POST['password'];
                                if(!empty($_POST['email']))   //checking the 'email_address' name which is from Sign-Up.html, is it empty or have some text
                                {
                                    $sql_query = "SELECT * FROM customers WHERE email_address='$email' AND password='$password'";
                                    $result = $con->query($sql_query);
                                    if($result->num_rows > 0)
                                    {
                                        //$_SESSION["cus_email"] = "$email";
                                        echo "SORRY...YOU ARE ALREADY REGISTERED USER...<br/><br/>";

                                         echo "<form class='form-area' id='profileForm' action='profile.php' method='post' class='contact-form text-right'>";
                                           echo "<input type='hidden' name='first_name' id='firstName' value='" . $firstName. "'>";
                                           echo "<input type='hidden' name='last_name' id='last_name' value='" . $lastName. "'>";
                                           echo "<input type='hidden' name='email' id='email' value='" . $email. "'>";
                                           echo "<input type='hidden' name='password' id='password' value='" . $password. "'>";

                                        echo "<input type='submit' class='genric-btn info'  name='add_submit' id='add_submit' value='Add Information'>";
                                        echo "</form>";
                                    }
                                    else
                                    {
                                        NewUser();
                                    }
                                }
                            }

                             if(isset($_POST['submit']))
                             {
                                SignUp();
                             }
                        ?>

                        </h5>  <br/>



                        <br>
                        <p align="center"><a href="login.php">Go to Login page</a></p>
                        <p align="center"><a href="index.php">Go to store</a><br></p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End contact-page Area -->

<?php
 $con->close();
 include 'include/footer.html';
 ?>