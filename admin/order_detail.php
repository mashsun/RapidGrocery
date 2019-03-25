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
   $order_id = $_GET["order_id"];
   $sql_query = "select o.order_id, o.order_date,
                 	   CONCAT(c.first_name, ', ', c.last_name) AS 'name',
                 	   CONCAT(a.line1, a.line2, ', ' , a.city, ', ' , a.state, ', ' , a.zip_code) AS 'address',
                 		((oi.item_price - oi.discount_amount) * oi.quantity) AS 'item_total',
                         oi.item_price AS item_price, oi.discount_amount, oi.quantity, oi.product_id,
                         p.payment_date, p.tax_amount, pr.product_name
                 from payment p
                        right JOIN orders o ON p.order_id = o.order_id
                        right join order_items oi ON o.order_id = oi.order_id
                        right join products pr ON oi.product_id = pr.product_id
                        right JOIN customers c ON o.customer_id = c.customer_id
                        left JOIN addresses a ON c.customer_id = a.customer_id
                 WHERE o.order_id=$order_id
                 GROUP BY oi.item_id;" ;
   $result = $con->query($sql_query);

   //$rows = $result->fetch_assoc();
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
    <h3>Orders</h3>
</header>

<section>
    <?php
    include "menu_order.html";
    ?>

    <article>
        <h2>Order Details</h2>
        <table id="customers">
            <tr>
                <th width="250">Order ID</th>
                <td><?php echo $order_id ?></td>
            </tr>
            <tr>
                <th>Order Items</th>
                <td>

                    <table id="subtable">
                        <tr>
                            <th width="120">Item</th>
                            <th width="100">Price</th>
                            <th width="100">Qty</th>
                            <th width="100">Total</th>
                        </tr>
                        <?php

                       if ($result->num_rows > 0) {
                       // output data of each row
                         while($rows = $result->fetch_assoc()) {

                           $item_total = $rows["item_total"];
                           $order_date = $rows["order_date"];
                           $name = $rows["name"];
                           $address = $rows["address"];
                           $tax_amount = $rows["tax_amount"];
                           $payment_date = $rows["payment_date"];
                                echo "<tr>";
                                echo "<td>" . $rows["product_name"]. "</td>";
                                echo "<td>" . $rows["item_price"]. "</td>";
                                echo "<td>" . $rows["quantity"]. "</td>";
                                echo "<td>" . $rows["item_price"] * $rows["quantity"]. "</td>";
                                echo "<tr>";
                               }
                        } else {
                           echo "0 results";
                        }

                        ?>
                    </table>

                </td>
            </tr>
            <tr>
                <th>Order Date</th>
                <td><?php echo $order_date ?></td>
            </tr>
            <tr>
                <th>Customer Name</th>
                <td><?php echo $name ?></td>
            </tr>
            <tr>
                <th>Address</th>
                <td><?php echo $address ?></td>
            </tr>
            <tr>
                <th>Amount</th>
                <td><?php echo $item_total ?></td>
            </tr>
            <tr>
                <th>Tax Amount</th>
                <td><?php echo $tax_amount ?></td>
            </tr>
            <tr>
                <th>Payment Date</th>
                <td><?php echo $payment_date ?></td>
            </tr>
        </table>

        <p align="center"><input type="submit" value="Edit order"> <input type="submit" value="Delete order"></p>

    </article>
</section>

<?php
$con->close();
include "footer.php";
?>

</body>
</html>