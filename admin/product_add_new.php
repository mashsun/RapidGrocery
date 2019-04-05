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

if (isset($_POST['product_add_new'])) {

   $category_id = $_POST['category_id'];
   $product_name = $_POST['product_name'];
   $product_code = $_POST['product_code'];
   $description = $_POST['description'];
   $list_price = $_POST['list_price'];
   $discount_percent = $_POST['discount_percent'];
   $product_img = $_POST['product_img'];

   $sql_query = "INSERT INTO products (category_id, product_name, product_code, description, list_price, discount_percent, product_img)
                    VALUES ('$category_id','$product_name','$product_code', '$description','$list_price','$discount_percent','$product_img')" ;
   $result = $con->query($sql_query);

    if($result){
            echo "<strong>Success!</strong> Product added!";
            header('location: product.php?category_name=Bakery');
            }

    else{
           echo '<script type="text/javascript">';
           echo 'alert("Insert failed!")';
           echo '</script>';
           header('location: product.php?category_name=Bakery');
    }
}
if (isset($_POST['cancel'])) {
    header('location: product.php?category_name=Bakery');
}
?>

<?php
    $con->close();
?>