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

    if(isset($_POST['cart'])){
        $product_id=$_POST["product_id"];
        $list_price=$_POST["list_price"];
        $product_name=$_POST["product_name"];
        $quantity=$_POST["qty"];

        $sql = "SELECT * FROM order_items oi JOIN orders o ON o.order_id = oi.order_id WHERE product_id = '$product_id' AND customer_id = '$customer_id'";
        $result = $con->query($sql);

        if ($result->num_rows <= 0)
        {

            $sql = "SELECT * FROM addresses WHERE customer_id = '$customer_id'";
            $result = $con->query($sql);

            if ($result->num_rows > 0)
            {
                while($rows = $result->fetch_assoc())
                {
                   $address_id = $rows["address_id"];
                }
            }
            else
            {
               echo "<script type='text/javascript'>";
               echo "alert('need to add address information')";
               echo "</script>";
            }

            $sql_query ="SELECT o.order_id FROM payment p
                            right JOIN orders o ON p.order_id = o.order_id
                            right join order_items oi ON o.order_id = oi.order_id
                            right join products pr ON oi.product_id = pr.product_id
                             WHERE customer_id = '$customer_id' and payment_id is null";
            $result = $con->query($sql_query);
            if ($result->num_rows > 0)
            {
                while($rows = $result->fetch_assoc())
                {
                   $order_id = $rows['order_id'];
                }
                $sql="UPDATE orders SET last_updated=now()";
                $result = $con->query($sql);
            }
            else
            {
                $sql="INSERT INTO orders(customer_id, order_date, ship_amount, ship_date, ship_address_id, billing_address_id, last_updated)
                             VALUES('$customer_id',now(),'5.00',now()+INTERVAL 1 DAY,'$address_id','$address_id',now())";
                $result = $con->query($sql);
            }

            $sql_query = "select * from orders where customer_id='$customer_id' order by last_updated desc limit 1";
            $result = $con->query($sql_query);

            if ($result->num_rows > 0)
            {
                while($rows = $result->fetch_assoc())
                {
                   $order_id = $rows['order_id'];
                }
            }

             $sql="INSERT INTO order_items(order_id, product_id, item_price, discount_amount, quantity)
                        VALUES('$order_id', '$product_id', '$list_price', '0.00', '$quantity')";
             $result = $con->query($sql);
        }
    }

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

<form action="cart_update.php" method="post" name="cart_update">
<?php
   if ($result->num_rows > 0)
   {
        while($rows = $result->fetch_assoc())
        {
            $product_id=$rows['product_id'];

            echo  "<div class='table-row'>";
            echo  "<div class='visit'></div>";
            echo  "<div class='visit'> <img src='img/elements/" .$rows['product_img']. ".jpg' width='70' height='70'></div>";
            echo  "<div class='visit'><input type='text' style='border:none;background-color:#f9f9ff;' id='product_name' disabled name='product_name[]' value='" . $rows["product_name"]. "'></div>";
            echo  "<div class='visit'><input type='text' style='background-color:#f9f9ff;' size='2' id='quantity' name='quantity[]' value='" . $rows["quantity"]. "'></div>";
            echo  "<div class='visit'><input type='text' style='border:none;background-color:#f9f9ff;' id='list_price' disabled name='list_price[]' value='" . $rows["list_price"]. "'></div>";
            echo  "<div class='percentage'>$".$rows['quantity']*$rows['list_price']."</div>";
            echo  "</div>";

            echo "<input type='hidden' name='item_id[]' value='".$rows['item_id']."'>";
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

                <p><a href="shop.php?category_name=Bakery"><strong>Continue Shopping</strong></a></p>

                Shipping, taxes, and discounts calculated at checkout. <br/>

                 <?php
                 $sql_query = "select * from orders where customer_id='$customer_id' order by last_updated desc limit 1";
                 $result = $con->query($sql_query);

                 if ($result->num_rows > 0)
                 {
                     while($rows = $result->fetch_assoc())
                     {
                        $order_id = $rows['order_id'];
                     }

                     echo "<a href='javascript:del_Orders(" .$order_id. ")' class='genric-btn danger' style='text-decoration:none'>Delete all items</a>";
                     echo "<input type='submit' value='Update Cart' name='save' class='genric-btn primary'>";
                     echo "<a class='genric-btn info' href='checkout.php?order_id=" .$order_id. "'>Checkout</a>";
                 }
                 ?>

                </div>
            </div>
</form>

        </div>
    </div>

<!-- End home-about Area -->
<script>
function del_Orders(id)
{
    if(confirm("Are you sure want to delete all items?"))
    {
        document.location.href = "cart_delete.php?order_id=" + id;
     }
}
</script>
<!-- End review Area -->
<?php
$con->close();
include 'include/footer.html';
?>