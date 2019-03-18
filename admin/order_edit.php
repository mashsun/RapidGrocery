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
                <td><input type="text" placeholder="123 Old Huron rd" size="50"></td>
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
                            <td><input type="text" placeholder="Bread"></td>
                            <td><input type="text" placeholder="$10" size="3"></td>
                            <td><input type="text" placeholder="5" size="3"></td>
                            <td><input type="text" placeholder="$50" size="3"></td>
                        </tr>
                        <tr>
                            <td><input type="text" placeholder="Milk"></td>
                            <td><input type="text" placeholder="$10" size="3"></td>
                            <td><input type="text" placeholder="5" size="3"></td>
                            <td><input type="text" placeholder="$50" size="3"></td>
                        </tr>
                        <tr>
                            <td><input type="text" placeholder="Water"></td>
                            <td><input type="text" placeholder="$10" size="3"></td>
                            <td><input type="text" placeholder="5" size="3"></td>
                            <td><input type="text" placeholder="$50" size="3"></td>
                        </tr>
                    </table>

                </td>
            </tr>
            <tr>
                <th>Amount</th>
                <td><input type="text" placeholder="$150"></td>
            </tr>
            <tr>
                <th>Tax Amount</th>
                <td><input type="text" placeholder="$15"></td>
            </tr>
            <tr>
                <th>Payment Date</th>
                <td>2019-02-03</td>
            </tr>
        </table>

        <p align="center"><input type="submit" value="Save"> <input type="submit" value="Cancel"></p>

    </article>
</section>

<?php
include "footer.php";
?>

</body>
</html>