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
   $sql_query = "DELETE FROM products WHERE product_id=$product_id;" ;
   $result = $con->query($sql_query);

    if($result){
            echo "<strong>Success!</strong> Product deleted!" . $product_id;
            header('location: product.php');
            }

    else{
           echo '<script type="text/javascript">';
           echo 'alert("Delete failed!")';
           echo '</script>';
    }
?>

<?php
    $con->close();
?>