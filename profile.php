<?php
include 'include/header.php';
include 'config.php';

$email_address = $_POST['email_address'];

$sql_query = "select customer_id, first_name, last_name, password  from customers where email_address='".$email."'";
$result = mysqli_query($con,$sql_query);
$row = mysqli_fetch_array($result);

$id = $row['customer_id'];
$firstName = $row['first_name'];
$lastName = $row['last_name'];
$password =  $row['password'];
?>

<!-- start banner Area -->
<section class="banner-area relative about-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    My Page
                </h1>
                <p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="about.html">My page</a></p>
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
                <form class="form-area" id="addInfo" name="addInfo" action="profile_up.php" method="post" class="contact-form text-right">
                    <div class="row">
                        <div class="col-lg-6 form-group">

                          <input type="hidden" id ="customer_id" name="customer_id" value="<?php echo $id ?>">

                          <input type="text" id ="first_name" name="first_name" value="<?php echo $firstName ?>" disabled
                            required class="common-input mb-20 form-control">

                          <input type="text" id="last_name" name="last_name"  value="<?php echo $lastName ?>" disabled
                            required class="common-input mb-20 form-control">

                            <input id="email_address" name="email_address"  value="<?php echo $email_address ?>" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$"
                                        disabled class="common-input mb-20 form-control" required="" type="email">

                          <label for="password">Password</label>
                            <input id="password" name="password" value="<?php echo $password ?>" class="common-input mb-20 form-control" required="" type="password">

                          <input type="text" id="line1" name="line1" placeholder="address1" onfocus="this.placeholder=''" onblur="this.placeholder='address1'"
                             class="common-input mb-20 form-control" required>

                          <input type="text" id="line2" name="line2" placeholder="address2" onfocus="this.placeholder=''" onblur="this.placeholder='address2'"
                             class="common-input mb-20 form-control">

                        <div class="form-select" id="default-select"">
                            <select name="city" id="city" required>
                                <option value="">city</option>
                                <option value="Cambridge">Cambridge</option>
                                <option value="Guelph">Guelph</option>
                                <option value="Kitchener">Kitchener</option>
                                <option value="Waterloo">Waterloo</option>
                            </select>
                        </div><br/>

                        <div class="form-select" id="default-select"">
                            <select name="state" id="state" required>
                                <option value="">state/province</option>
                                <option value="ON">ON</option>
                            </select>
                        </div><br/>

                          <input type="text" id="zip_code" name="zip_code" placeholder="postal code" onfocus="this.placeholder=''" onblur="this.placeholder='postal code'"
                             class="common-input mb-20 form-control" required>

                          <input type="number" id="phone" name="phone" placeholder="phone number" onfocus="this.placeholder=''" onblur="this.placeholder='phone number'"
                             class="common-input mb-20 form-control" required>
                            <br>

                            <div class="col-lg-12">
                                        <div class="alert-msg" style="text-align: left;"></div>
                            <p align="center"><input type="submit" id="addInfo" name="addInfo" value="Add Information" class="genric-btn info">
                            </div>

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


<?php
$con->close();
include 'include/footer.html';
?>