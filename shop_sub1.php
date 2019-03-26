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

                            <div class="row gallery-item">
                                <div class="col-md-6">
                                    <img src="img/elements/bakery01.jpg" width="500" height="400">

                                </div>
                                <div class="col-md-6" align="center">
                                    <br/>
                                    <h1 class="typo-list">Donut</h1>
                                    <br/>
                                    <h4 class="typo-list">$10</h4>
                                    <br/>
                                    <input type="text" name="qty" placeholder="1" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Qty'" size="1">

                                    <div class="button-group-area mt-40">
                                    	<a href="#" class="genric-btn success circle arrow">Add to Cart<span class="lnr lnr-arrow-right"></span></a>
                                    </div>

                                    <br/>
                                    <blockquote class="generic-blockquote" align="left" width="400">
                                		The donut is popular in many countries and prepared in various forms as a sweet snack that can be homemade or purchased in bakeries.
                                		<br/>
                                		<p>Total Fat 15g	<br/>
                                           Saturated Fat 7g	<br/>
                                           Trans Fat<br/>
                                           Cholesterol 0mg<br/>
                                           Sodium 350mg	<br/>
                                           Total Carb 38g</p>
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