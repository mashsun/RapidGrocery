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

    $sql_query = "select customer_id, email_address, password, first_name, last_name,
   shipping_address_id, billing_address_id, membership_id AS 'customers' from customers";
                 
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
                <th>Shipping Address</th>
                <th>Member</th>
                <th>Manage</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Youngsun</td>
                <td>Chang</td>
                <td>Ychang@conestogac.on.ca</td>
                <td>123 Old Huron rd</td>
                <td><input type="checkbox" checked></td>
                <td>
                    <a href="customer_detail.php"><i class="material-icons">list</i></a>
                    <a href="customer_edit.php"><i class="material-icons">brush</i></a>
                    <a href="#"><i class="material-icons">clear</i></a>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Komal</td>
                <td>Randhawa</td>
                <td>Komal@conestogac.on.ca</td>
                <td>156 King street</td>
                <td><input type="checkbox" checked></td>
                <td>
                    <a href="#"><i class="material-icons">list</i></a>
                    <a href="#"><i class="material-icons">brush</i></a>
                    <a href="#"><i class="material-icons">clear</i></a>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>Jody</td>
                <td>Bhamra</td>
                <td>Jody@conestogac.on.ca</td>
                <td>548 Queen court</td>
                <td><input type="checkbox"></td>
                <td>
                    <a href="#"><i class="material-icons">list</i></a>
                    <a href="#"><i class="material-icons">brush</i></a>
                    <a href="#"><i class="material-icons">clear</i></a>
                </td>
            </tr>
            <tr>
                <td>4</td>
                <td>Justin</td>
                <td>Kim</td>
                <td>justin@conestogac.on.ca</td>
                <td>123 Old Huron rd</td>
                <td><input type="checkbox" checked></td>
                <td>
                    <a href="order_detail.php"><i class="material-icons">list</i></a>
                    <a href="order_edit.php"><i class="material-icons">brush</i></a>
                    <a href="#"><i class="material-icons">clear</i></a>
                </td>
            </tr>
            <tr>
                <td>5</td>
                <td>Karen</td>
                <td>April</td>
                <td>karen@conestogac.on.ca</td>
                <td>156 King street</td>
                <td><input type="checkbox"></td>
                <td>
                    <a href="#"><i class="material-icons">list</i></a>
                    <a href="#"><i class="material-icons">brush</i></a>
                    <a href="#"><i class="material-icons">clear</i></a>
                </td>
            </tr>
            <tr>
                <td>6</td>
                <td>Martin</td>
                <td>Hwang</td>
                <td>martin@conestogac.on.ca</td>
                <td>856 Queen court</td>
                <td><input type="checkbox"></td>
                <td>
                    <a href="#"><i class="material-icons">list</i></a>
                    <a href="#"><i class="material-icons">brush</i></a>
                    <a href="#"><i class="material-icons">clear</i></a>
                </td>
            </tr>
            <tr>
                <td>7</td>
                <td>Jay</td>
                <td>Jhang</td>
                <td>jay@conestogac.on.ca</td>
                <td>365 Queen court</td>
                <td><input type="checkbox" checked></td>
                <td>
                    <a href="#"><i class="material-icons">list</i></a>
                    <a href="#"><i class="material-icons">brush</i></a>
                    <a href="#"><i class="material-icons">clear</i></a>
                </td>
            </tr>
            <tr>
                <td>8</td>
                <td>Kelly</td>
                <td>Zhang</td>
                <td>kelly@conestogac.on.ca</td>
                <td>548 Queen court</td>
                <td><input type="checkbox"></td>
                <td>
                    <a href="#"><i class="material-icons">list</i></a>
                    <a href="#"><i class="material-icons">brush</i></a>
                    <a href="#"><i class="material-icons">clear</i></a>
                </td>
            </tr>
            <tr>
                <td>9</td>
                <td>Jimin</td>
                <td>An</td>
                <td>jimin@conestogac.on.ca</td>
                <td>53 Queen court</td>
                <td><input type="checkbox" checked></td>
                <td>
                    <a href="#"><i class="material-icons">list</i></a>
                    <a href="#"><i class="material-icons">brush</i></a>
                    <a href="#"><i class="material-icons">clear</i></a>
                </td>
            </tr>
            <tr>
                <td>10</td>
                <td>JK</td>
                <td>May</td>
                <td>jk@conestogac.on.ca</td>
                <td>6 Queen street</td>
                <td><input type="checkbox"></td>
                <td>
                    <a href="#"><i class="material-icons">list</i></a>
                    <a href="#"><i class="material-icons">brush</i></a>
                    <a href="#"><i class="material-icons">clear</i></a>
                </td>
            </tr>
			 <?php
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                //for($i=0; $i < mysqli_num_rows($result); $i++){
                echo "<tr>";
                echo "<td>" . $row["customer_id"]. "</td>";
                echo "<td>" . $row["email_address"]. "</td>";
                echo "<td>" . $row["first_name"]. "</td>";
                echo "<td>" . $row["last_name"]. "</td>";
                echo "<td>" . $row["shipping_address_id"]. "</td>";
				echo  "<td>" . $row["membership_point"]. "</td>";
                echo "<td><a href='customer_detail.php?customer_id=" .$row["customer_id"]. "' class='material-icons' style='text-decoration:none'>list</i></a>";
                echo "<a href='customer_edit.php?customer_id=" .$row["customer_id"]. "' class='material-icons' style='text-decoration:none'>brush</i></a>";
                echo "<a href='#?customer_id=" .$row["customer_id"]. "' class='material-icons' style='text-decoration:none'>clear</i></a></td>";
                echo "</tr>";
                }
            } else {
                echo "0 results";
            }
            ?>
        </table>
		
        <br/>
    
        <div align="center">
            <a href="#">1</a> | <a href="#">2</a> | <a href="#">3</a>
        </div>
    </article>
</section>

<?php
$con->close();
include "footer.php";
?>

</body>
</html>