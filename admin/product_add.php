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
    $product_id = $_GET["product_id"];
    $sql_query = "select p.product_id, p.product_name, ca.category_name, p.list_price, p.description,
                        p.discount_percent, p.product_img
                       from products p JOIN categories ca ON p.category_id = ca.category_id
                       where p.product_id=$product_id
                       group by p.product_id;";

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
    <h3>Products</h3>
</header>

<section>
    <?php
        include "menu_product.html";
    ?>

    <article>
        <h2>Add Product</h2>
        <table id="customers">
            <tr>
                <th width="250">Product ID</th>
                <td>1</td>
            </tr>
            <tr>
                <th>Product Name</th>
                <td><input type="text"></td>
            </tr>
            <tr>
                <th>Category</th>
                <td>
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
                </td>
            </tr>
            <tr>
                <th>Price</th>
                <td><input type="text" size="3"></td>
            </tr>
            <tr>
                <th>Discription</th>
                <td>
<textarea cols="80" rows="5">

</textarea>
                </td>
            </tr>
            <tr>
                <th>Discount percent</th>
                <td><input type="text" size="3"></td>
            </tr>
            <tr>
                <th>Image Name</th>
                <td><input type="text"></td>
            </tr>
        </table>

        <p align="center"><input type="submit" value="Add" name="add"> <input type="submit" value="Cancel" name="cancel"></p>

    </article>
</section>

<?php
include "footer.php";
?>

</body>
</html>
