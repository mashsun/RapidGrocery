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

   $sql_query = "select o.order_id AS 'order_id', o.order_date AS 'order_date',
                 	   CONCAT(c.first_name, ', ', c.last_name) AS 'name',
                 	   CONCAT(a.line1, a.line2, ', ' , a.city) AS 'address',
                 		((oi.item_price - oi.discount_amount) * oi.quantity) AS 'item_total'
                 from order_items oi
                 	right JOIN orders o ON oi.order_id = o.order_id
                 	right JOIN customers c ON o.customer_id = c.customer_id
                 	left JOIN addresses a ON c.customer_id = a.customer_id
                 	where o.order_id
                 GROUP BY o.order_id;";
   $result = $con->query($sql_query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8 ">
    <title>Rapid Grocery Admin</title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>
<header>
    <img src="../img/logo.png" alt="logo"  style="float:left"/>
    <h3>Orders</h3>
</header>

<section>
    <?php
    include "menu_order.html";
    ?>

    <article>
        <h2>List of order</h2>
        <table id="customers">
            <tr>
                <th>Order ID</th>
                <th>Order Date</th>
                <th>Customer Name</th>
                <th>Address</th>
                <th>Amount</th>
                <th>Manage</th>
            </tr>

            <?php
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                //for($i=0; $i < mysqli_num_rows($result); $i++){
                echo "<tr>";
                echo "<td>" . $row["order_id"]. "</td>";
                echo "<td>" . $row["order_date"]. "</td>";
                echo "<td>" . $row["name"]. "</td>";
                echo "<td>" . $row["address"]. "</td>";
                echo "<td>" . $row["item_total"]. "</td>";
                echo "<td><a href='order_detail.php?order_id=" .$row["order_id"]. "' class='material-icons' style='text-decoration:none'>list</i></a>";
                echo "<a href='order_edit.php?order_id=" .$row["order_id"]. "' class='material-icons' style='text-decoration:none'>brush</i></a>";
                echo "<a href='#?order_id=" .$row["order_id"]. "' class='material-icons' style='text-decoration:none'>clear</i></a></td>";
                echo "</tr>";
                }
            } else {
                echo "0 results";
            }
            ?>

        </table>
        <br/>

        <div align="center">
        <a href="#">1</a> | <a href="#">2</a> | <a href="#">3</a>
        </div>
    </article>
</section>

<?php
$con->close();
include "footer.php";
?>

</body>
</html>