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
                         oi.item_id, oi.item_price, oi.discount_amount, oi.quantity, oi.product_id,
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
        <h2>Edit order</h2>
        <form action="order_update.php" method="post" name="form_update">
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

                                   $item_id = $rows["item_id"];
                                   $order_date = $rows["order_date"];
                                   //$item_total = $rows["item_price"] * $rows["quantity"];
                                   $item_total = $rows["item_total"];
                                   $name = $rows["name"];
                                   $address = $rows["address"];
                                   $tax_amount = $rows["tax_amount"];
                                   $payment_date = $rows["payment_date"];
                                   $discount_amount = $rows["discount_amount"];

                                    echo "<tr>";
                                    echo "<td><input type='text' id='product_name' disabled name='product_name[]' value='" . $rows["product_name"]. "'></td>";
                                    echo "<td><input type='text' id='item_price' name='item_price[]' size='3' value='" . $rows["item_price"]. "'></td>";
                                    echo "<td><input type='text' id='quantity' name='quantity[]' size='3' value='" . $rows["quantity"]. "'></td>";
                                    echo "<td><input type='text' id='total' disabled name='total[]' value='" . $rows["item_price"] * $rows["quantity"]. "'></td>";
                                    echo "<tr>";

                                    //$item_total += $rows["item_price"] * $rows["quantity"];
                                    echo "<input type='hidden' name='item_id[]' value='$item_id'>";
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
                <td><input type="text" disabled value="<?php echo $order_date ?>" size="50"></td>
            </tr>
            <tr>
                <th>Customer Name</th>
                <td><input type="text" disabled value="<?php echo $name ?>" size="50"></td>
            </tr>
            <tr>
                <th>Address</th>
                <td><input type="text" disabled value="<?php echo $address ?>" size="50"></td>
            </tr>
            <tr>
                <th>Discount Amount</th>
                <td><input type="text" disabled value="<?php echo $discount_amount ?>"></td>
            </tr>
            <tr>
                <th>Tax Amount</th>
                <td><input type="text" disabled value="<?php echo $tax_amount ?>"></td>
            </tr>
            <tr>
                <th>Amount</th>
                <td><input type="text" disabled value="<?php echo $item_total ?>"></td>
            </tr>
        </table>

        <p align="center"><input type="submit" value="Save" name="save"> <input type="submit" value="Cancel" name="cancel"></p>
        </form>

    </article>
</section>

<?php
    $con->close();
    include "footer.php";
?>

</body>
</html>