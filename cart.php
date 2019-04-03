<?php
include 'include/header.php';
include "config.php";


if(!(isset($_SESSION['cus_email']))) {
    echo "<script type='text/javascript'>";
    echo "alert('Please login')";
    echo "</script>";
    header('location: login.php');
 ;}
else {
    $customer_id=$_SESSION["cus_id"];

    $sql_query ="SELECT *  FROM payment p
                    right JOIN orders o ON p.order_id = o.order_id
                    right join order_items oi ON o.order_id = oi.order_id
                    right join products pr ON oi.product_id = pr.product_id
                    WHERE customer_id = '$customer_id' and payment_id is null";
    $result = $con->query($sql_query);

?>

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
                            <div class="visit">NAME</div>
                            <div class="visit">QUANTITY</div>
                            <div class="visit">PRICE</div>
                            <div class="percentage">TOTAL</div>
                        </div>

<?php
   if ($result->num_rows > 0) {

     while($rows = $result->fetch_assoc()) {

        $product_id=$rows['product_id'];

        echo  "<div class='table-row'>";
        echo  "<div class='visit'></div>";
        echo  "<div class='visit'> <img src='img/elements/" .$rows['product_img']. ".jpg' width='70' height='70'></div>";
        echo  "<div class='visit'><input type='text' style='border:none;background-color:#f9f9ff;' id='product_name' disabled name='product_name[]' value='" . $rows["product_name"]. "'></div>";
        echo  "<div class='visit'><input type='text' style='background-color:#f9f9ff;' size='2' id='quantity' name='quantity[]' value='" . $rows["quantity"]. "'></div>";
        echo  "<div class='visit'><input type='text' style='border:none;background-color:#f9f9ff;' id='list_price' disabled name='list_price[]' value='" . $rows["list_price"]. "'></div>";
        echo  "<div class='percentage'>$".$rows['quantity']*$rows['list_price']."</div>";
        echo  "</div>";

        }
    }
    else {

    }
}
?>
                 </div>
<?php

    $sql_query2 ="SELECT sum(list_price*quantity) as total FROM payment p
                    right JOIN orders o ON p.order_id = o.order_id
                    right join order_items oi ON o.order_id = oi.order_id
                    right join products pr ON oi.product_id = pr.product_id
                     WHERE customer_id = '$customer_id' and payment_id is null";
    $result2 = $con->query($sql_query2);
    $row = mysqli_fetch_array($result2);
    $subtotal = $row['total'];
?>

               <div class="button-group-area mt-10" align="center">
                <h3 class="mb-30">SUBTOTAL &nbsp; $ <?php echo $subtotal ?></h3>
                Shipping, taxes, and discounts calculated at checkout. <br/>
                    <a class="genric-btn primary" href="#">Update Cart</a>
                    <a class="genric-btn info" href="#">Checkout</a>
                </div>
            </div>
        </div>
    </div>

<!-- End home-about Area -->

<!-- End review Area -->
<?php
$con->close();
include 'include/footer.html';
?>