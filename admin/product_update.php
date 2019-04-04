<?php
include "config.php";

    if (isset($_POST['save'])) {


        $product_id =  $_POST['product_id'];
        $product_name = $_POST['product_name'];
        $category = $_POST['category_name'];
        $price = $_POST['list_price'];
        $description = $_POST['description'];
        $discount_percent = $_POST['discount_percent'];
        $product_img = $_POST['product_img'];



                $sql_query = "UPDATE products SET product_name='$product_name', category_id='$category', list_price='$price', description='$description', discount_percent='$discount_percent', product_img='$product_img'
                 WHERE product_id='$product_id'";

                $result = $con->query($sql_query);

                if($result){
                        echo "<strong>Success!</strong> Product updated!" ;
                        header('location: product.php');
                }
                else{
                       echo '<script type="text/javascript">';
                       echo 'alert("Update failed!")';
                       echo '</script>';
                }

    }

    if (isset($_POST['cancel'])) {
        header('location: product.php');
    }

$con->close();
?>