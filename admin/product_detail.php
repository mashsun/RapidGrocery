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
    $sql_query = "select p.product_id, p.product_name, ca.category_name, p.list_price, p.description, p.discount_percent, p.product_img
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
        <h2>Product Details</h2>
        <?php

            if ($result->num_rows > 0) {
            // output data of each row
                 while($rows = $result->fetch_assoc()) {
                 $product_id = $rows["product_id"];
                 $product_name = $rows["product_name"];
                 $category = $rows["category_name"];
                 $price = $rows["list_price"];
                 $description = $rows["description"];
                 $discount_percent = $rows["discount_percent"];
                 $product_img = $rows["product_img"];
                 }
            }
            else {
                echo "0 results";
            }
        ?>
        <table id="customers">
            <tr>
                <th width="250">Product ID</th>
                <td><?php echo $product_id ?></td>
            </tr>
            <tr>
                <th>Product Name</th>
                <td><?php echo $product_name ?></td>
            </tr>
            <tr>
                <th>Category</th>
                <td><?php echo $category ?></td>
            </tr>
            <tr>
                <th>Price</th>
                <td><?php echo $price ?></td>
            </tr>
            <tr>
                <th>Discription</th>
                <td><?php echo $description ?></td>
            </tr>
            <tr>
                <th>Discount percent</th>
                <td><?php echo $discount_percent ?></td>
            </tr>
            <tr>
                <th>Image Name</th>
                <td><?php echo $product_img ?></td>
            </tr>
        </table>

        <p align="center"><input type="submit" value="Edit Product" onclick="
            <?php
                echo "window.location='product_edit.php?product_id=" .$product_id."'";
            ?> ;">

        <input type="submit" value="Delete Product" onclick="
            <?php
                echo "window.location='javascript:del_Products(" .$product_id.")'";
            ?> ;">
        </p>

    </article>
</section>
<script>
function del_Products(id)
{
    if(confirm("Are you sure want to delete this ?"))
    {
        document.location.href = "product_delete.php?product_id=" + id;
     }
}
</script>
<?php
include "footer.php";
?>

</body>
</html>
