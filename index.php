<?php
    include 'include/header.php';
?>

    <!-- start banner Area -->
    <section class="banner-area relative" id="home">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row fullscreen d-flex justify-content-center align-items-center">
                <div class="banner-content col-lg-10 col-md-12 justify-content-center">
                    <h6 class="text-uppercase">Whenever you want, fresh local produce and groceries</h6>
                    <h1>
                    Love with Rapid Grocery
                    </h1>
                    <p class="text-white mx-auto">
                        Your one-stop-shop for local produce and groceries. We believe everything is better when fresh <br>— that’s why we roll with the seasons.
                    </p>
                    <a href="shop.php?category_name=Bakery" class="primary-btn squire text-uppercase mt-10">Check Our Menu</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->

    <!-- Start item-category Area -->
    <section class="item-category-area section-gap">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-12 pb-80 header-text text-center">
                    <h1 class="pb-10">Category of available items</h1>
                    <p>
                        Shopping fresh  local produce and groceries
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="single-cat-item">
                        <div class="thumb">
                            <img class="img-fluid" src="img/c1.jpg" alt="">
                        </div>
                        <a href="shop.php?category_name=Fresh"><h4>Fresh</h4></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-cat-item">
                        <div class="thumb">
                            <img class="img-fluid" src="img/c2.jpg" alt="">
                        </div>
                        <a href="shop.php?category_name=Bakery"><h4>Bakery</h4></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-cat-item">
                        <div class="thumb">
                            <img class="img-fluid" src="img/c3.jpg" alt="">
                        </div>
                        <a href="shop.php?category_name=Meat"><h4>Meat</h4></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-cat-item">
                        <div class="thumb">
                            <img class="img-fluid" src="img/c4.jpg" alt="">
                        </div>
                        <a href="shop.php?category_name=Dairy"><h4>Dairy</h4></a>
                    </div>
                </div>
                <a class="primary-btn mx-auto mt-80" href="shop.php?category_name=Bakery">View Full Menu</a>
            </div>
        </div>
    </section>
    <!-- End item-category Area -->

<?php include 'include/review.php';?>
<?php include 'include/footer.html';?>