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

    $sql_query = "select customer_id, email_address, password, first_name, last_name,
   shipping_address_id, billing_address_id, membership_id AS 'customers' from customers";
                 
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
        <h2>Customer Details</h2>
        <table id="customers">
            <tr>
                <th width="250">Customer ID</th>
                <td>1</td>
            </tr>
            <tr>
                <th>First Name</th>
                <td>Youngsun</td>
            </tr>
            <tr>
                <th>Last Name</th>
                <td>Chang</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>Ychang0138@conestogac.on.ca</td>
            </tr>
            <tr>
                <th>Shipping Address</th>
                <td>123 Old Huron rd</td>
            </tr>
            <tr>
                <th>Billing Address</th>
                <td>123 Old Huron rd</td>
            </tr>
            <tr>
                <th>Membership</th>
                <td><input type="checkbox" checked></td>
            </tr>
            <tr>
                <th>Membership Point</th>
                <td>100</td>
            </tr>
            <tr>
                <th>Point Consumed</th>
                <td>10</td>
            </tr>
            <tr>
                <th>Join Date</th>
                <td>2019-02-01</td>
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
								echo "<td>" . $rows["customer_id"]. "</td>";
								echo "<td>" . $rows["first_name"]. "</td>";
                                echo "<td>" . $rows["last_name"]. "</td>";
                                echo "<td>" . $rows["email_address"]. "</td>";
                                echo "<td>" . $rows["shipping_address_id"]. "</td>";
                                echo "<td>" . $rows["billing_address_id"] "</td>";
								echo "<td>" . $rows["membership_id"]. "</td>";
								echo "<td>" . $rows["membership_point"]. "</td>";
								echo "<td>" . $rows["point_consumed"]. "</td>";
                                echo "<tr>";
                               }
                        } else {
                           echo "0 results";
                        }
            ?>
        </table>

        <p align="center"><input type="submit" value="Edit Customer"> <input type="submit" value="Delete Customer"></p>

    </article>
</section>

<?php
$con->close();
include "footer.php";
?>

</body>
</html>