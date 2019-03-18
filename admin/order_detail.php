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
                <td>1</td>
            </tr>
            <tr>
                <th>Order Date</th>
                <td>2019-02-03</td>
            </tr>
            <tr>
                <th>Customer Name</th>
                <td>Youngsun</td>
            </tr>
            <tr>
                <th>Address</th>
                <td>123 Old Huron rd</td>
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
                        <tr>
                            <td>Bread</td>
                            <td>$10</td>
                            <td>5</td>
                            <td>$50</td>
                        </tr>
                        <tr>
                            <td>Milk</td>
                            <td>$10</td>
                            <td>5</td>
                            <td>$50</td>
                        </tr>
                        <tr>
                            <td>Water</td>
                            <td>$10</td>
                            <td>5</td>
                            <td>$50</td>
                        </tr>
                    </table>

                </td>
            </tr>
            <tr>
                <th>Amount</th>
                <td>$150</td>
            </tr>
            <tr>
                <th>Tax Amount</th>
                <td>$15</td>
            </tr>
            <tr>
                <th>Payment Date</th>
                <td>2019-02-03</td>
            </tr>
        </table>

        <p align="center"><input type="submit" value="Edit order"> <input type="submit" value="Delete order"></p>

    </article>
</section>

<?php
include "footer.php";
?>

</body>
</html>