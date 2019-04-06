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
                        p.discount_percent, p.product_img, p.category_id
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
        <h2>Edit Product</h2>
        <?php

         if ($result->num_rows > 0) {
            // output data of each row
            while($rows = $result->fetch_assoc()) {

                $product_id = $rows['product_id'];
                $product_name = $rows['product_name'];
                $category = $rows['category_name'];
                $category_id = $rows['category_id'];
                $list_price = $rows['list_price'];
                $description = $rows['description'];
                $discount_percent = $rows['discount_percent'];
                $product_img = $rows['product_img'];
            }
         }
         else {
            echo "0 results";
         }
         ?>

        <form action="product_update.php" method="post" name="product_update">
        <table id="customers">
         <input type="hidden" id ="product_id" name="product_id" value="<?php echo $product_id ?>">

            <tr>
                <th>Product Name</th>
                <td><input type="text" name="product_name" value="<?php echo $product_name ?>" size="50"></td>
            </tr>
            <tr>
                <th>Category</th>
                <td>
                <div class="form-select" id="default-select">
                <select name="category_id" id="category_id" required value="<?php echo $category_id ?>">
                    <option value="">======== Select Category =========</option>
                    <option <?php if($category == 'Bakery') echo 'selected'; ?> value="1">Bakery</option>
                    <option <?php if($category == 'Dairy') echo 'selected'; ?> value="2">Dairy</option>
                    <option <?php if($category == 'Drink') echo 'selected'; ?> value="3">Drink</option>
                    <option <?php if($category == 'Fresh') echo 'selected'; ?> value="4">Fresh</option>
                    <option <?php if($category == 'Frozen') echo 'selected'; ?> value="5">Frozen</option>
                    <option <?php if($category == 'Meat') echo 'selected'; ?> value="6">Meat</option>
                    <option <?php if($category == 'Seafood') echo 'selected'; ?> value="7">Seafood</option>
                    <option <?php if($category == 'Snacks') echo 'selected'; ?> value="8">Snacks</option>
                </select>
                </div>
                </td>
            </tr>
            <tr>
                <th>Price</th>
                <td><input type="text" name="list_price"  value="<?php echo $list_price ?>" size="50"></td>
            </tr>
            <tr>
                <th>Description</th>
                <td>
                <textarea cols="80" name="description" value="<?php echo $description ?>" rows="5"><?php echo $description ?></textarea>
                </td>
            </tr>
            <tr>
                <th>Discount percent</th>
                <td><input type="text" name="discount_percent" value="<?php echo $discount_percent ?>" size="3"></td>
            </tr>
            <tr>
                <th>Image Name</th>
                <td><input type="text" name="product_img" value="<?php echo $product_img ?>" size="20"></td>
            </tr>
        </table>

        <p align="center">
        <input type="submit" name="save" value="Save">
        <input type="submit" name="cancel" value="Cancel"></p>
        </form>

    </article>
</section>

<?php
$con->close();
include "footer.php";
?>

</body>
</html>
