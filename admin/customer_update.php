<?php
include "config.php";

    if (isset($_POST['save'])) {

        $address_id =  $_POST['address_id'];
        $customer_id = $_POST['customer_id'];
              $line1 =  $_POST['line1'];
        $line2 =  $_POST['line2'];
        $city =  $_POST['city'];
        $state =  $_POST['state'];
        $postal =  $_POST['zip_code'];
        $phone =  $_POST['phone'];

       $sql_query = "UPDATE addresses SET line1='$line1', line2='$line2', city='$city',state='$state',zip_code='$postal',phone='$phone'
                        WHERE address_id='$address_id'";
        $result = $con->query($sql_query);

        if($result){
                echo "<strong>Success!</strong> customers updated!";
                header('location: customer.php');
        }

        else{
               echo '<script type="text/javascript">';
               echo 'alert("Update failed!")';
               echo '</script>';
        }
    }

    if (isset($_POST['cancel'])) {
        header('location: customer.php');
    }

$con->close();
?>