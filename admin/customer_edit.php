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
        </table>

        <p align="center"><input type="submit" value="Save"> <input type="submit" value="Cancel"></p>

    </article>
</section>

<?php
include "footer.php";
?>

</body>
</html>