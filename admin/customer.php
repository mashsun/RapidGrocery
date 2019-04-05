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

    $sql_query = "select c.customer_id, c.email_address, c.password, c.first_name, c.last_name,
                 	   CONCAT(a.line1, a.line2, ', ' , a.city, ', ' , a.state, ', ' , a.zip_code) AS 'address'
                       from customers c JOIN addresses a ON c.customer_id = a.customer_id
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
        <h2>List of Customer</h2>
        <table id="customers">
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Manage</th>
            </tr>
            <?php
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {

                echo "<tr>";
                echo "<td>" . $row["customer_id"]. "</td>";
                echo "<td>" . $row["first_name"]. "</td>";
                echo "<td>" . $row["last_name"]. "</td>";
                echo "<td>" . $row["email_address"]. "</td>";
                echo "<td>" . $row["address"]. "</td>";
                echo "<td><a href='customer_detail.php?customer_id=" .$row["customer_id"]. "' class='material-icons' style='text-decoration:none'>list</i></a>";
                echo "<a href='customer_edit.php?customer_id=" .$row["customer_id"]. "' class='material-icons' style='text-decoration:none'>brush</i></a>";
                echo "<a href='javascript:del_Customers(" .$row["customer_id"]. ")' class='material-icons' style='text-decoration:none'>clear</i></a></td>";
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
function del_Customers(id)
{
    if(confirm("Are you sure want to delete this ?"))
    {
        document.location.href = "customer_delete.php?customer_id=" + id;
     }
}
</script>
<?php
$con->close();
include "footer.php";
?>

</body>
</html>