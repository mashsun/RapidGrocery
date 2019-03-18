<?php
   include "admin/config.php";

   if(isset($_POST['but_submit'])){

       $email = mysqli_real_escape_string($con,$_POST['email']);
       $password = mysqli_real_escape_string($con,$_POST['password']);

       if ($email != "" && $password != ""){

           $sql_query = "select count(*) as cntUser from administrators where email_address='".$email."' and password='".$password."'";
           $result = mysqli_query($con,$sql_query);
           $row = mysqli_fetch_array($result);

           $count = $row['cntUser'];

           if($count > 0){
               $_SESSION['email'] = $email;
               header('Location: admin/index.php');
           }else{
               echo '<script type="text/javascript">';
               echo 'alert("Invalid email or password")';
               echo '</script>';
           }
       }
   }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Rapid Grocery Admin</title>

    <link rel="stylesheet" href="admin/css/style.css">
</head>
<body>
<header>
    <img src="img/logo.png" alt="logo" />
    <h3>Rapid Grocery Admin</h3>
</header>

<section>


    <article align="center">
        <br/><br/><br/>
        <form action="" method="post">
            <input name="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''"
                   onblur="this.placeholder = 'Enter email address'"  type="email" size="50"><br/><br/>

            <input name="password" placeholder="Enter password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter password'"
                    required="" type="password" size="50">
            <br/><br/>

            <p align="center"><input type="submit" value="Submit" name="but_submit" id="but_submit"></p>
            <br/><br/>
        </form>
    </article>

</section>

<footer>
   <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved.</p>
</footer>

</body>
</html>