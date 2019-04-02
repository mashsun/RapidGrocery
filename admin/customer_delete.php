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
   $customer_id = $_GET["customer_id"];
   $sql_query = "delete from addresses where customer_id=$customer_id;" ;
   $result = $con->query($sql_query);

    if($result){

           $sql_query2 = "delete from customers where customer_id=$customer_id;" ;
           $result2 = $con->query($sql_query2);

           if($result2){
            echo "<strong>Success!</strong> Customer deleted!" . $customer_id;
            header('location: customer.php');
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