<?php include 'include/header.php';?>
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
            <div class="row">
                <div class="menu-cat mx-auto">
                    <ul class="nav nav-pills" id="pills-tab" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="Bakery-tab" data-toggle="pill" href="#Bakery" role="tab" aria-controls="Bakery" aria-selected="true">Bakery</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="pills-Dairy-tab" data-toggle="pill" href="#pills-Dairy" role="tab" aria-controls="pills-Dairy" aria-selected="false">Dairy</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="pills-Drinks-tab" data-toggle="pill" href="#pills-Drinks" role="tab" aria-controls="pills-Drinks" aria-selected="false">Drinks</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="pills-Fresh-tab" data-toggle="pill" href="#pills-Fresh" role="tab" aria-controls="pills-Fresh" aria-selected="false">Fresh</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="pills-Frozen-tab" data-toggle="pill" href="#pills-Frozen" role="tab" aria-controls="pills-Frozen" aria-selected="false">Frozen</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="pills-Meat-tab" data-toggle="pill" href="#pills-Meat" role="tab" aria-controls="pills-Meat" aria-selected="false">Meat</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="pills-Seafood-tab" data-toggle="pill" href="#pills-Seafood" role="tab" aria-controls="pills-Seafood" aria-selected="false">Seafood</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="pills-Snacks-tab" data-toggle="pill" href="#pills-Snacks" role="tab" aria-controls="pills-Snacks" aria-selected="false">Snacks</a>
                      </li>
                    </ul>
                </div>
            </div>

            <div id="pills-tabContent" class="tab-content absolute">

                <div class="tab-pane fade show active" id="Bakery" role="tabpanel" aria-labelledby="Bakery-tab">
                    <div class="section-top-border">
                            <h3>Bakery</h3>
                            <div class="row gallery-item">
                                <div class="col-md-4">
                                    <a href="shop_sub1.php" class="single-gallery-image"><div class="single-gallery-image" style="background: url(img/elements/bakery01.jpg);"></div></a>

                                    <div class="s-price col">
                                        <h4>Donut</h4>
                                        <span>$10</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <a href="img/elements/bakery02.jpg" class="img-gal"><div class="single-gallery-image" style="background: url(img/elements/bakery02.jpg);"></div></a>

                                    <div class="s-price col">
                                        <h4>Croissant</h4>
                                        <span>$15</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <a href="img/elements/bakery03.jpg" class="img-gal"><div class="single-gallery-image" style="background: url(img/elements/bakery03.jpg);"></div></a>

                                    <div class="s-price col">
                                        <h4>Bread</h4>
                                        <span>$10</span>
                                    </div>
                                </div>
                            </div>


                            <div class="row gallery-item">
                                <div class="col-md-4">
                                    <a href="img/elements/bakery04.jpg" class="img-gal"><div class="single-gallery-image" style="background: url(img/elements/bakery04.jpg);"></div></a>

                                    <div class="s-price col">
                                        <h4>Chocolate Cake</h4>
                                        <span>$20</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <a href="img/elements/bakery05.jpg" class="img-gal"><div class="single-gallery-image" style="background: url(img/elements/bakery05.jpg);"></div></a>

                                    <div class="s-price col">
                                        <h4>Egg tart</h4>
                                        <span>$5</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <a href="img/elements/bakery06.jpg" class="img-gal"><div class="single-gallery-image" style="background: url(img/elements/bakery06.jpg);"></div></a>

                                    <div class="s-price col">
                                        <h4>Chocolate Chip Cookie</h4>
                                        <span>$10</span>
                                    </div>
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