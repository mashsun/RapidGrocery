<?php
include "config.php";

   $order_id = $_GET['order_id'];
   $subtotal = $_GET['subtotal'];

    $sql_query = "INSERT INTO payment (order_id, amount, payment_date)
                  VALUES ('$order_id','$subtotal',now())" ;
    $result = $con->query($sql_query);

    if($result){
        echo "<script type='text/javascript'>";
        echo "alert('Payment completed!')";
        echo "</script>";
        header('location: cart_complete.php');
    }
    else{
        echo "<script type='text/javascript'>";
        echo "alert('Payment insert failed!')";
        echo "</script>";
        header('location: cart.php');
    }

$con->close();
?>