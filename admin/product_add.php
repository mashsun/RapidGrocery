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
        <form action="product_add_new.php" method="post" name="product_add_new" id="product_add_new">
        <table id="customers">
            <tr>
                <th>Product Name</th>
                <td><input type="text" name="product_name"></td>
            </tr>
            <tr>
                <th>Product Code</th>
                <td><input type="text" name="product_code"></td>
            </tr>
            <tr>
                <th>Category</th>
                <td>
                    <select name="category_id">
                        <option value="">======== Select Category =========</option>
                        <option value="1">Bakery</option>
                        <option value="2">Dairy</option>
                        <option value="3">Drink</option>
                        <option value="4">Fresh</option>
                        <option value="5">Frozen</option>
                        <option value="6">Meat</option>
                        <option value="7">Seafood</option>
                        <option value="8">Snacks</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th>Price</th>
                <td><input type="text" size="3" name="list_price"></td>
            </tr>
            <tr>
                <th>Discription</th>
                <td>
                    <textarea cols="80" rows="5" name="description">

                    </textarea>
                </td>
            </tr>
            <tr>
                <th>Discount percent</th>
                <td><input type="text" size="3" name="discount_percent"></td>
            </tr>
            <tr>
                <th>Image Name</th>
                <td><input type="text" name="product_img"></td>
            </tr>
        </table>

        <p align="center"><input type="submit" value="Add" name="product_add_new"> <input type="submit" value="Cancel" name="cancel"></p>
        </form>

    </article>
</section>

<?php
$con->close();
include "footer.php";
?>

</body>
</html>
