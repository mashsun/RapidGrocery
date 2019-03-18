<?php
include "config.php";

// Check user login or not
if(!isset($_SESSION['email'])){
    header('Location: index.php');
}

// logout
if(isset($_POST['but_logout'])){
    session_destroy();
    header('Location: ../admin_login.php');
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Rapid Grocery Admin</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header>
    <img src="../img/logo.png" alt="logo"  style="float:left"/>
    <h3>Dashboard</h3>
</header>

<section>
    <nav>
        <ul>
            <li><a class="active" href="index.php">Dashboard</a></li>
            <li><a href="order.php">Orders</a></li>
            <li><a href="product.php">Products</a></li>
            <li><a href="customer.php">Customers</a></li>
        </ul>
    </nav>

    <article>

        <div align="center"><img src="../img/banner_admin.png" alt="logo" />

        <br><br>
        <form method='post' action="">
             <input type="submit" value="Logout" name="but_logout">
        </form>

        </div>

    </article>
</section>

<?php
include "footer.php";
?>

</body>
</html>