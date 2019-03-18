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
        </table>

        <p align="center"><input type="submit" value="Edit Customer"> <input type="submit" value="Delete Customer"></p>

    </article>
</section>

<?php
include "footer.php";
?>

</body>
</html>