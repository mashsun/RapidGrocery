<?php
include 'include/header.php';
include "config.php";

$category_name = $_GET["category_name"];

$sql_query = "select * from products p join categories c on p.category_id = c.category_id
                where category_name='$category_name';";
$result = $con->query($sql_query);
?>

<!-- start banner Area -->
<section class="banner-area relative about-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Shop List
                </h1>
                <p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="shop.php?category_name=Bakery"> Shop</a></p>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->

<!-- Start menu-list Area -->
<section class="menu-list-area section-gap">
    <div class="container">
        <div align="center">
            <a href="shop.php?category_name=Bakery" class="genric-btn primary-border e-large">Bakery</a> &nbsp;
            <a href="shop.php?category_name=Dairy" class="genric-btn primary-border e-large">Dairy</a> &nbsp;
            <a href="shop.php?category_name=Drinks" class="genric-btn primary-border e-large">Drinks</a> &nbsp;
            <a href="shop.php?category_name=Fresh" class="genric-btn primary-border e-large">Fresh</a> &nbsp;
            <a href="shop.php?category_name=Frozen" class="genric-btn primary-border e-large">Frozen</a> &nbsp;
            <a href="shop.php?category_name=Meat" class="genric-btn primary-border e-large">Meat</a> &nbsp;
            <a href="shop.php?category_name=Seafood" class="genric-btn primary-border e-large">Seafood</a> &nbsp;
            <a href="shop.php?category_name=Snacks" class="genric-btn primary-border e-large">Snacks</a> &nbsp;
        </div>

        <div id="pills-tabContent" class="tab-content absolute">

            <div class="tab-pane fade show active" id="Bakery" role="tabpanel" aria-labelledby="Bakery-tab">
                <div class="section-top-border">
                   <h3><?php echo $category_name ?></h3>
                        <div class="row gallery-item">

                    <?php
                        if ($result->num_rows > 0) {
                            // output data of each row
                           while($rows = $result->fetch_assoc()) {

                           $product_id = $rows["product_id"];
                           $category_id = $rows["category_id"];
                           $product_name = $rows["product_name"];
                           $list_price = $rows["list_price"];
                           $product_img = $rows["product_img"];
                           $category_name = $rows["category_name"];
                    ?>

                            <div class="col-md-4">
                                <a href="shop_sub.php?product_id=<?php echo $product_id ?>" class="single-gallery-image"><div class="single-gallery-image" style="background: url(img/elements/<?php echo $product_img ?>.jpg);"></div></a>

                                <div class="s-price col">
                                    <h4><?php echo $product_name ?></h4>
                                    <span><?php echo $list_price ?></span>
                                </div>
                            </div>

                     <?php
                             }
                         } else {
                             echo "0 results";
                         }
                     ?>
                    </div>
                 </div>
            </div>

        </div>
    </div>

</section>
<!-- End menu-list Area -->

<?php
$con->close();
include 'include/footer.html';
?>