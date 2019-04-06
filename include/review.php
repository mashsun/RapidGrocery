<?php
include (dirname(__DIR__). "/config.php");

 $sql = "SELECT * FROM review order by review_date desc limit 6";
 $result = $con->query($sql);
?>
<!-- Start review Area -->
<section class="review-area section-gap relative">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-9 pb-40 header-text text-center">
                <h1 class="pb-10 text-white">Enjoy our Client’s Review</h1>
            </div>
        </div>
        <div class="row">
            <div class="active-review-carusel">

            <?php
             if ($result->num_rows > 0)
             {
                 while($rows = $result->fetch_assoc())
                 {
                    $review_id = $rows["review_id"];
                    $reviewer_name = $rows["reviewer_name"];
                    $review_content = $rows["review_content"];
                    $review_star = $rows["review_star"];
            ?>

                <div class="single-review item">
                    <img src="img/r1.png" alt="">
                    <div class="title justify-content-start d-flex">
                        <h4><?php echo $reviewer_name?></h4>
                        <div class="star">
                            <span class="fa fa-star <?php if($review_star!='0'){ echo checked; } ?>"></span>
                            <span class="fa fa-star <?php if($review_star!='0' | $review_star!='1' ){ echo checked; } ?>"></span>
                            <span class="fa fa-star <?php if($review_star=='3' | $review_star=='4' | $review_star=='5'){ echo checked; } ?>"></span>
                            <span class="fa fa-star <?php if($review_star=='4' | $review_star=='5'){ echo checked; } ?>"></span>
                            <span class="fa fa-star <?php if($review_star=='5'){ echo checked; } ?>"></span>
                        </div>
                    </div>
                    <p><?php echo $review_content?></p>
                </div>

              <?php
                     }
                 }
                 else
                 {
                    echo "<script type='text/javascript'>";
                    echo "alert('need to add address information')";
                    echo "</script>";
                 }
             ?>
            </div>
        </div>

        <div class="row d-flex justify-content-center">
            <div class="col-md-9 pb-40 header-text text-center">
                 <br/>
                 <form class="form-area" id="review" action="include/review_up.php" method="post">
                  <input type="text" id ="reviewer_name" name="reviewer_name" value="name" required>
                  <input type="text" id="review_content" name="review_content" value="review" required size="50">
                   <input type="number" id="review_star" name="review_star" value="rate" required size="1" min="0" max="5" placeholder="5">
                   <input id="submit" type="submit" name="submit" value="Write Review" class="genric-btn small info">
                </form>
            </div>
        </div>
    </div>
</section>
<?php $con->close(); ?>
<!-- End review Area -->