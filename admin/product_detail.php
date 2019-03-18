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
    <h3>Products</h3>
</header>

<section>
    <?php
        include "menu_product.html";
    ?>

    <article>
        <h2>Product Details</h2>
        <table id="customers">
            <tr>
                <th width="250">Product ID</th>
                <td>1</td>
            </tr>
            <tr>
                <th>Product Name</th>
                <td>Donut</td>
            </tr>
            <tr>
                <th>Category</th>
                <td>Bakery</td>
            </tr>
            <tr>
                <th>Price</th>
                <td>$5</td>
            </tr>
            <tr>
                <th>Discription</th>
                <td>
                    The donut is popular in many countries and prepared in various forms as a sweet snack that can be homemade or purchased in bakeries.<br/>
                    Total Fat 15g<br/>
                    Saturated Fat 7g<br/>
                    Trans Fat<br/>
                    Cholesterol 0mg<br/>
                    Sodium 350mg<br/>
                    Total Carb 38g
                </td>
            </tr>
            <tr>
                <th>Discount percent</th>
                <td>5%</td>
            </tr>
            <tr>
                <th>Image Name</th>
                <td>Bakery_002</td>
            </tr>
        </table>

        <p align="center"><input type="submit" value="Edit Product"> <input type="submit" value="Delete Product"></p>

    </article>
</section>

<?php
include "footer.php";
?>

</body>
</html>