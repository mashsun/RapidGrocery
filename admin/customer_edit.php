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
                   a.line1, a.line2, a.city, a.state, a.zip_code, a.phone, a.address_id
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
        <h2>Edit Customer</h2>
         <?php
              if ($result->num_rows > 0) {
                 // output data of each row
                   while($rows = $result->fetch_assoc()) {
                        $a_id = $rows['address_id'];
                        $customer_id = $rows["customer_id"];
                        $first_name = $rows["first_name"];
                        $last_name = $rows["last_name"];
                        $email = $rows["email_address"];
                        $line1 =  $rows['line1'];
                        $line2 =  $rows['line2'];
                        $city =  $rows['city'];
                        $state =  $rows['state'];
                        $postal =  $rows['zip_code'];
                        $phone =  $rows['phone'];
                        }
                 } else {
                    echo "0 results";
              }
          ?>
        <form action="customer_update.php" method="post" name="customer_update">
         <input type="hidden" id ="address_id" name="address_id" value="<?php echo $a_id ?>">
        <table id="customers">
            <tr>
                <th width="250">Customer ID</th>
                <td><input type="text" disabled value="<?php echo $customer_id ?>" size="50" disabled></td>
            </tr>
            <tr>
                <th>First Name</th>
                <td><input type="text" disabled value="<?php echo $first_name ?>" size="50"></td>
            </tr>
            <tr>
                <th>Last Name</th>
                <td><input type="text" disabled value="<?php echo $last_name ?>" size="50"></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><input type="text" disabled value="<?php echo $email ?>" size="50"></td>
            </tr>
            <tr>
                <th>line1</th>
                <td><input type="text" id="line1" name="line1" value="<?php echo $line1 ?>"></td>
             </tr>
            <tr>
                <th>line2</th>
                <td><input type="text" id="line2" name="line2" value="<?php echo $line2 ?>"></td>
             </tr>
             <tr>
                 <th>City</th>
                 <td>
                    <div class="form-select" id="default-select"">
                        <select name="city" id="city" required value="<?php echo $city ?>">
                            <option value="">city</option>
                            <option <?php if($city == 'Cambridge') echo 'selected'; ?> value="Cambridge">Cambridge</option>
                            <option <?php if($city == 'Guelph') echo 'selected'; ?> value="Guelph">Guelph</option>
                            <option <?php if($city == 'Kitchener') echo 'selected'; ?> value="Kitchener">Kitchener</option>
                            <option <?php if($city == 'Waterloo') echo 'selected'; ?> value="Waterloo">Waterloo</option>
                        </select>
                    </div>
                 </td>
              </tr>
              <tr>
                   <th>State</th>
                   <td>
                        <div class="form-select" id="default-select"">
                            <select name="state" id="state" required value="<?php echo $state ?>">
                                <option value="">state/province</option>
                                <option <?php if($state == 'ON') echo 'selected'; ?> value="ON">ON</option>
                            </select>
                        </div>
                    </td>
               </tr>
               <tr>
                   <th>Postal Code</th>
                   <td><input type="text" id="zip_code" name="zip_code" required value="<?php echo $postal ?>">
               </tr>
               <tr>
                    <th>Phone</th>
                    <td><input type="text" id="phone" name="phone" required value="<?php echo $phone ?>"></td>
               </tr>
        </table>

        <p align="center"><input type="submit" value="Save" name="save"> <input type="submit" value="Cancel" name="cancel"></p>
        <form>

    </article>
</section>

<?php
include "footer.php";
?>

</body>
</html>