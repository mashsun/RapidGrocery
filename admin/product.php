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
        <h2>List of Product</h2>
        <div>
            <select name="category">
                <option value="">======== Select Category =========</option>
                <option value="Bakery">Bakery</option>
                <option value="Dairy">Dairy</option>
                <option value="Drink">Drink</option>
                <option value="Fresh">Fresh</option>
                <option value="Frozen">Frozen</option>
                <option value="Meat">Meat</option>
                <option value="Seafood">Seafood</option>
                <option value="Snacks">Snacks</option>
            </select>

            <button type="button" class="button"  onclick="window.location.href='product_add.php'">Add Product</button>
        </div>

        <br/>
        <table id="customers">
            <tr>
                <th>Product ID</th>
                <th>Product Name</th>
                <th>Category</th>
                <th>Price</th>
                <th>Discription</th>
                <th>Manage</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Donut</td>
                <td>Bakery</td>
                <td>$10</td>
                <td>prepared in various forms</td>
                <td>
                    <a href="product_detail.php"><i class="material-icons">list</i></a>
                    <a href="product_edit.php"><i class="material-icons">brush</i></a>
                    <a href="#"><i class="material-icons">clear</i></a>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Water</td>
                <td>Drink</td>
                <td>$3</td>
                <td>fresh</td>
                <td>
                    <a href="product_detail.php"><i class="material-icons">list</i></a>
                    <a href="product_edit.php"><i class="material-icons">brush</i></a>
                    <a href="#"><i class="material-icons">clear</i></a>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>Milk</td>
                <td>Dairy</td>
                <td>$5</td>
                <td>provide everyday</td>
                <td>
                    <a href="product_detail.php"><i class="material-icons">list</i></a>
                    <a href="product_edit.php"><i class="material-icons">brush</i></a>
                    <a href="#"><i class="material-icons">clear</i></a>
                </td>
            </tr>
            <tr>
                <td>4</td>
                <td>Croissant</td>
                <td>Bakery</td>
                <td>$15</td>
                <td>delicious</td>
                <td>
                    <a href="product_detail.php"><i class="material-icons">list</i></a>
                    <a href="product_edit.php"><i class="material-icons">brush</i></a>
                    <a href="#"><i class="material-icons">clear</i></a>
                </td>
            </tr>
            <tr>
                <td>5</td>
                <td>Chocolate Cake</td>
                <td>Bakery</td>
                <td>$10</td>
                <td>popular in many countries</td>
                <td>
                    <a href="product_detail.php"><i class="material-icons">list</i></a>
                    <a href="product_edit.php"><i class="material-icons">brush</i></a>
                    <a href="#"><i class="material-icons">clear</i></a>
                </td>
            </tr>
            <tr>
                <td>6</td>
                <td>Beef</td>
                <td>Meat</td>
                <td>$30</td>
                <td>fresh</td>
                <td>
                    <a href="product_detail.php"><i class="material-icons">list</i></a>
                    <a href="product_edit.php"><i class="material-icons">brush</i></a>
                    <a href="#"><i class="material-icons">clear</i></a>
                </td>
            </tr>
            <tr>
                <td>7</td>
                <td>Shrimp</td>
                <td>Seafood</td>
                <td>$10</td>
                <td>fresh</td>
                <td>
                    <a href="product_detail.php"><i class="material-icons">list</i></a>
                    <a href="product_edit.php"><i class="material-icons">brush</i></a>
                    <a href="#"><i class="material-icons">clear</i></a>
                </td>
            </tr>
            <tr>
                <td>8</td>
                <td>Egg tart</td>
                <td>Bakery</td>
                <td>$5</td>
                <td>prepared in various forms</td>
                <td>
                    <a href="product_detail.php"><i class="material-icons">list</i></a>
                    <a href="product_edit.php"><i class="material-icons">brush</i></a>
                    <a href="#"><i class="material-icons">clear</i></a>
                </td>
            </tr>
            <tr>
                <td>9</td>
                <td>Donut</td>
                <td>Bakery</td>
                <td>$10</td>
                <td>popular in many countries</td>
                <td>
                    <a href="product_detail.php"><i class="material-icons">list</i></a>
                    <a href="product_edit.php"><i class="material-icons">brush</i></a>
                    <a href="#"><i class="material-icons">clear</i></a>
                </td>
            </tr>
            <tr>
                <td>10</td>
                <td>Pork</td>
                <td>Meat</td>
                <td>$10</td>
                <td>fresh</td>
                <td>
                    <a href="product_detail.php"><i class="material-icons">list</i></a>
                    <a href="product_edit.php"><i class="material-icons">brush</i></a>
                    <a href="#"><i class="material-icons">clear</i></a>
                </td>
            </tr>
        </table>
        <br/>

        <div align="center">
            <a href="#">1</a> | <a href="#">2</a> | <a href="#">3</a>
        </div>
    </article>
</section>

<?php
include "footer.php";
?>

</body>
</html>