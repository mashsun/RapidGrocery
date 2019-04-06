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
    $order_id = $_GET["order_id"];

    $sql_query ="SELECT sum(list_price*quantity) as total FROM payment p
                       right JOIN orders o ON p.order_id = o.order_id
                       right join order_items oi ON o.order_id = oi.order_id
                       right join products pr ON oi.product_id = pr.product_id
                        WHERE customer_id = '$customer_id' and payment_id is null";
       $result = $con->query($sql_query);
       $row = mysqli_fetch_array($result);
       $subtotal = $row['total'];
}
?>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
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
        <div align="section-top-border">

            <script src="https://www.paypal.com/sdk/js?client-id=Acjfa4CiuNrq3soim_s6DG9rfji6NIZJNQRKaGfxh7J6000IJMd6B8kywVHWYxvIYOIJfv0lY1IJSkTx&currency=CAD"></script>
            <div id="paypal-button-container" align="center" style="padding:40px;"></div>

            <script>
              paypal.Buttons({
                createOrder: function(data, actions) {
                  return actions.order.create({
                    purchase_units: [{
                      amount: {
                        value: '<?php echo $subtotal ?>'
                      }
                    }]
                  });
                },
                onApprove: function(data, actions) {
                  return actions.order.capture().then(function(details) {
                    alert('Transaction completed by ' + details.payer.name.given_name);
                    // Call your server to save the transaction
                     <?php
                        $sql_query = "INSERT INTO payment (order_id, amount, payment_date)
                                      VALUES ('$order_id','$subtotal',now())" ;
                        $result = $con->query($sql_query);
                     ?>
                    return fetch('/paypal-transaction-complete', {
                      method: 'post',
                      headers: {
                        'content-type': 'application/json'
                      },
                      body: JSON.stringify({
                        orderID: data.orderID
                      })
                    });
                  });
                }

              }).render('#paypal-button-container');
            </script>
        </div>
    </div>
</div>

<!-- End home-about Area -->

<!-- End review Area -->
<?php
$con->close();
include 'include/footer.html';
?>

