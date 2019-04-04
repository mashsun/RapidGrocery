<?php

include "config.php";

// Check user login or not
if(!isset($_SESSION['email'])){
 }

// logout
if(isset($_POST['but_logout'])){
    session_destroy();
    header('Location: ../admin_login.php');
}
   $product_id = $_GET["product_id"];
   $sql_query = "INSERT INTO products (product_id, category_id, product_name, description, list_price, discount_percent, product_img)
   VALUES (?,?,?,?,?,?,?)
   WHERE product_id=$product_id;" ;
   $result = $con->query($sql_query);

    if($result){
            echo "<strong>Success!</strong> Product added!" . $product_id;
            header('location: product.php');
            }

    else{
           echo '<script type="text/javascript">';
           echo 'alert("Delete failed!")';
           echo '</script>';
    }

    if (isset($_POST['cancel'])) {
            header('location: product.php');
        }
?>

<?php
    $con->close();
?>