<?php
include "config.php";

    if (isset($_POST['save'])) {
            $count = count($_POST['item_id']);

            for($i = 0; $i<$count; $i++){

                $item_id = $_POST['item_id'][$i];
                $item_price = $_POST['item_price'][$i];
                $quantity = $_POST['quantity'][$i];

                $sql_query = "UPDATE order_items SET item_price='$item_price', quantity='$quantity' WHERE item_id='$item_id'";

                $result = $con->query($sql_query);

                if($result){
                        echo "<strong>Success!</strong> Item updated!" . $item_id;
                        header('location: cart.php');
                }
                else{
                       echo '<script type="text/javascript">';
                       echo 'alert("Update failed!")';
                       echo '</script>';
                }
            }
    }

    if (isset($_POST['cancel'])) {
        header('location: cart.php');
    }

$con->close();
?>