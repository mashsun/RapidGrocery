<?php
include "config.php";

   $order_id = $_GET["order_id"];
   $sql_query = "delete from order_items where order_id=$order_id;" ;
   $result = $con->query($sql_query);

    if($result){

           $sql_query2 = "delete from orders where order_id=$order_id;" ;
           $result2 = $con->query($sql_query2);

           if($result2){
            echo "<strong>Success!</strong> Order deleted!" . $order_id;
            header('location: cart.php');
            }
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