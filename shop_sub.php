<?php
include 'include/header.php';
include "config.php";

$product_id = $_GET["product_id"];
$sql_query = "select * from products p join categories c on p.category_id = c.category_id
                where product_id=$product_id;";
$result = $con->query($sql_query);
?>

<?php
if ($result->num_rows > 0) {
     // output data of each row
       while($rows = $result->fetch_assoc()) {
           $product_id = $rows["product_id"];
           $category_id = $rows["category_id"];
           $product_code = $rows["product_code"];
           $product_name = $rows["product_name"];
           $description = $rows["description"];
           $list_price = $rows["list_price"];
           $discount_percent = $rows["discount_percent"];
           $product_img = $rows["product_img"];
           $category_name = $rows["category_name"];
       }
} else {
    echo "0 results";
}
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
                <p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="shop.php"> Shop</a></p>
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

                            <div class="row gallery-item">
                                <div class="col-md-6">
                                    <img src="img/elements/<?php echo $product_img ?>.jpg" width="500" height="400">

                                </div>
                                <div class="col-md-6" align="center">
                                    <br/>
                                    <h1 class="typo-list"><?php echo $product_name ?></h1>
                                    <br/>
                                    <h4 class="typo-list"><?php echo $list_price ?></h4>
                                    <br/>
                                    <input type="text" name="qty" placeholder="1" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Qty'" size="1">

                                    <div class="button-group-area mt-40">
                                    	<a href="cart.php" class="genric-btn success circle arrow">Add to Cart<span class="lnr lnr-arrow-right"></span></a>
                                    </div>

                                    <br/>
                                    <blockquote class="generic-blockquote" align="left" width="400">
                                		<?php echo $description ?>
                                	 </blockquote>

                                </div>
                            </div>


                        </div>
                </div>

                 <div class="tab-pane fade" id="pills-Dairy" role="tabpanel" aria-labelledby="pills-Dairy-tab">

                 </div>

            </div>
        </div>

    </section>
    <!-- End menu-list Area -->

<?php include 'include/footer.html';?>