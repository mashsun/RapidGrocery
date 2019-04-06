<?php
include (dirname(__DIR__). "/config.php");

if(isset($_POST['submit'])) {

       $reviewer_name = $_POST['reviewer_name'];
       $review_content = $_POST['review_content'];
       $review_star =  $_POST['review_star'];

       $query = "INSERT INTO review (review_id, reviewer_name, review_content, review_star, review_date)
                        VALUES (default,'$reviewer_name','$review_content','$review_star', now())";

       $data = mysqli_query ($con,$query) or die("Could Not Perform the Query");
       if($data)
       {
           echo '<script type="text/javascript">';
           echo 'alert("Added")';
           echo '</script>';

           header("Location: ../index.php");
        }
}
?>
