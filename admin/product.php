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

$category_name = $_GET["category_name"];

    $sql_query = "select p.product_id, p.product_name, ca.category_name, p.list_price, p.description
                       from products p JOIN categories ca ON p.category_id = ca.category_id
                       where category_name='$category_name'
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
        <h2>List of Product</h2>
        <div>
            <select name="category_id" onchange="location = this.value;">
                <option value="">======== Select Category =========</option>
                <option value="product.php?category_name=Bakery">Bakery</option>
                <option value="product.php?category_name=Dairy">Dairy</option>
                <option value="product.php?category_name=Drinks">Drink</option>
                <option value="product.php?category_name=Fresh">Fresh</option>
                <option value="product.php?category_name=Frozen">Frozen</option>
                <option value="product.php?category_name=Meat">Meat</option>
                <option value="product.php?category_name=Seafood">Seafood</option>
                <option value="product.php?category_name=Snacks">Snacks</option>
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

            <?php
            if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {

                   echo "<tr>";
                   echo "<td>" . $row["product_id"]. "</td>";
                   echo "<td>" . $row["product_name"]. "</td>";
                   echo "<td>" . $row["category_name"]. "</td>";
                   echo "<td>" . $row["list_price"]. "</td>";
                   echo "<td>" . $row["description"]. "</td>";
                   echo "<td><a href='product_detail.php?product_id=" .$row["product_id"]. "' class='material-icons' style='text-decoration:none'>list</i></a>";
                   echo "<a href='product_edit.php?product_id=" .$row["product_id"]. "' class='material-icons' style='text-decoration:none'>brush</i></a>";
                   echo "<a href='javascript:del_Products(" .$row["product_id"]. ")' class='material-icons' style='text-decoration:none'>clear</i></a></td>";
                   echo "</tr>";
                   }
                  } else {
                      echo "0 results";
                  }
            ?>
        </table>
        <br/>

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
$con->close();
include "footer.php";
?>

</body>
</html>