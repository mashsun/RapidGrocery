<?php
include "config.php";

    if (isset($_GET['save'])) {
            $item_id = $_GET['item_id'];
            $item_price = $_GET['item_price'];
            $quantity = $_GET['quantity'];

            $sql_query = "UPDATE order_items SET item_price='$item_price', quantity='$quantity' WHERE item_id='$item_id'";

            $result = $con->query($sql_query);

            if($result){
                    echo "<strong>Success!</strong> Item updated!" . $item_id;
                    header('location: order.php');
                    }
                    else{
                    echo '<script type="text/javascript">';
                   echo 'alert("Update failed!")';
                   echo '</script>';
                    }
    }

$con->close();
?>