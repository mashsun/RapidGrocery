<?php
include "config.php";

if(isset($_POST['customer_id'])) {

       $customer_id =  $_POST['customer_id'];
       $email_address = $_SESSION["cus_email"];
       $line1 = $_POST['line1'];
       $line2 = $_POST['line2'];
       $city = $_POST['city'];
       $state =  $_POST['state'];
       $zip_code =  $_POST['zip_code'];
       $phone =  $_POST['phone'];

    if(isset($_POST['addInfo'])){

       $query = "INSERT INTO addresses (address_id, customer_id,line1,line2,city,state,zip_code,phone)
                                VALUES (default,'$customer_id','$line1','$line2','$city','$state','$zip_code','$phone')";

       $data = mysqli_query ($con,$query) or die("Could Not Perform the Query");
       if($data)
       {
           echo '<script type="text/javascript">';
           echo 'alert("Added")';
           echo '</script>';

           header("Location: mypage.php?email_address=" .$email_address. "");
        }
    }

    if(isset($_POST['updateInfo'])){

       $address_id =  $_POST['address_id'];

       $query = "UPDATE addresses SET line1='$line1',line2='$line2', city='$city',state='$state',zip_code='$zip_code',phone='$phone'
                 WHERE address_id='$address_id'";

       $data = mysqli_query ($con,$query) or die("Could Not Perform the Query");
       if($data)
       {
           echo '<script type="text/javascript">';
           echo 'alert("Updated")';
           echo '</script>';

           header("Location: mypage.php?email_address=" .$email_address. "");
        }
    }
 }
?>
