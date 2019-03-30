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
    $sql_query = "UPDATE data SET customer_id='' SET first_name = "" SET last_name = "" SET email_address = "" SET password = "" SET shipping_address_id = ""
	SET billing_address_id = "" SET membership_id = "" WHERE = customer_id "1"; 
   $sql_query = "select customer_id, email_address, password, first_name, last_name,
   shipping_address_id, billing_address_id, membership_id AS 'customers' from customers
                        right JOIN customers c ON o.customer_id = c.customer_id
                        left JOIN addresses a ON c.customer_id = a.customer_id
                 WHERE o.customer_id=$customer_id
                 GROUP BY o.customer_id;"
   ;
   if($mysqli->query($sql_query) === true){ 
    echo "Records was updated successfully."; 
   } else{ 
    echo "ERROR: Could not able to execute $sql. "  
                                        . $mysqli->error; 
}           
   $result = $con->query($sql_query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Rapid Grocery Admin</title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>
<header>
    <img src="../img/logo.png" alt="logo"  style="float:left"/>
    <h3>Customers</h3>
</header>

<section>
    <?php
        include "menu_customer.html";
    ?>

    <article>
        <h2>Edit Customer</h2>
        <table id="customers">
            <tr>
                <th width="250">Customer ID</th>
                <td>1</td>
            </tr>
            <tr>
                <th>First Name</th>
                <td><input type="text" placeholder="Youngsun"></td>
            </tr>
            <tr>
                <th>Last Name</th>
                <td><input type="text" placeholder="Chang"></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><input type="text" placeholder="Ychang0138@conestogac.on.ca" size="50"></td>
            </tr>
            <tr>
                <th>Shipping Address</th>
                <td><input type="text" placeholder="123 Old Huron rd" size="50"></td>
            </tr>
            <tr>
                <th>Billing Address</th>
                <td><input type="text" placeholder="123 Old Huron rd" size="50"></td>
            </tr>
            <tr>
                <th>Membership</th>
                <td><input type="checkbox" checked></td>
            </tr>
            <tr>
                <th>Membership Point</th>
                <td><input type="text" placeholder="100" size="3"></td>
            </tr>
            <tr>
                <th>Point Consumed</th>
                <td><input type="text" placeholder="10" size="3"></td>
            </tr>
            <tr>
                <th>Join Date</th>
                <td><input type="date" value="2019-02-01"></td>
            </tr>
			 <?php
            if ($result->num_rows > 0) {
                           // output data of each row
                             while($rows = $result->fetch_assoc()) {

                              $customer_id = $rows["customer_id"];
                           $first_name = $rows["first_name"];
                           $last_name = $rows["last_name"];
                           $email = $rows["email_address"];
                           $shipping_address_id = $rows["shipping_address_id"];
						   $billing_address_id = $rows["billing_address_id"];
                           $membership_id = $rows["membership_id"];
						   $membership_point = $rows["membership_point"];
						   $point_consumed = $rows["point_consumed"];
                                    echo "<tr>";
                                    echo "<td><input type='text' id='customer_id' disabled name='customer_id' value='" . $rows["customer_id"]. "'></td>";
                                    echo "<td><input type='text' id='first_name' name='first_name' size='3' value='" . $rows["first_name"]. "'></td>";
                                    echo "<td><input type='text' id='last_name' name='last_name' size='3' value='" . $rows["last_name"]. "'></td>";
									echo "<td><input type='text' id='email_address' name='email_address' size='3' value='" . $rows["email_address"]. "'></td>";
									echo "<td><input type='text' id='shipping_address_id' name='shipping_address_id' size='3' value='" . $rows["shipping_address_id"]. "'></td>";
									 echo "<td><input type='text' id='billing_address_id' name='billing_address_id' size='3' value='" . $rows["billing_address_id"]. "'></td>";
									  echo "<td><input type='text' id='membership_point' name='membership_point' size='3' value='" . $rows["membership_point"]. "'></td>";
									   echo "<td><input type='text' id='point_consumed' name='point_consumed' size='3' value='" . $rows["point_consumed"]. "'></td>";
                                    echo "<tr>";
                                   }
                            } else {
                               echo "0 results";
                            }
            ?>
        </table>

        <p align="center"><input type="submit" value="Save"> <input type="submit" value="Cancel"></p>

    </article>
</section>

<?php
include "footer.php";
?>

</body>
</html>