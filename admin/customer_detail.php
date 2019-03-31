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

    $customer_id = $_GET["customer_id"];
    $sql_query = "select c.customer_id, c.email_address, c.password, c.first_name, c.last_name,
                   CONCAT(a.line1, a.line2, ', ' , a.city, ', ' , a.state, ', ' , a.zip_code) AS 'address'
                    from customers c JOIN addresses a ON c.customer_id = a.customer_id
                    where c.customer_id=$customer_id
                    group by c.customer_id;";
                 
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
    <h3>Customers</h3>
</header>

<section>
    <?php
        include "menu_customer.html";
    ?>

    <article>
        <h2>Customer Details</h2>
          <?php
          if ($result->num_rows > 0) {
                 // output data of each row
                   while($rows = $result->fetch_assoc()) {

                         $customer_id = $rows["customer_id"];
                         $first_name = $rows["first_name"];
                         $last_name = $rows["last_name"];
                         $email = $rows["email_address"];
                         $address = $rows["address"];
                        }
                 } else {
                    echo "0 results";
              }
          ?>
        <table id="customers">
            <tr>
                <th width="250">Customer ID</th>
                <td><?php echo $customer_id ?></td>
            </tr>
            <tr>
                <th>First Name</th>
                <td><?php echo $first_name ?></td>
            </tr>
            <tr>
                <th>Last Name</th>
                <td><?php echo $last_name ?></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><?php echo $email ?></td>
            </tr>
            <tr>
                <th>Address</th>
                <td><?php echo $address ?></td>
            </tr>

        </table>

        <p align="center"><input type="submit" value="Edit Customer"onclick="
                            <?php
                                echo "window.location='customer_edit.php?customer_id=" .$customer_id."'";
                            ?> ;">
                    <input type="submit" value="Delete Customer"></p>

    </article>
</section>

<?php
$con->close();
include "footer.php";
?>

</body>
</html>