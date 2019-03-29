<?php
include "config.php";

    if (isset($_POST['save'])) {
        /*
            $item_id = $_GET['item_id'];
            $item_price = $_GET['item_price'];
            $quantity = $_GET['quantity'];

            /*

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

               */


            echo '<pre>';
            print_r($_POST);
            echo '</pre>';
           $count = count($_POST['item_id']);

           echo $count;

           for($i = 0; $i<$count; $i++){
            echo $_POST['item_id'][$i].'<br/>';
           }
    }

$con->close();
?>