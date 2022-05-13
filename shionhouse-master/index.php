<?php
session_start();
 include 'header.php';
?>
    <main>
        <!--? Hero Area Start-->
        <div class="container-fluid">
            <div class="slider-area">
                <!-- Mobile Device Show Menu-->
                <div class="header-right2 d-flex align-items-center">
                    <!-- Social -->
                    <div class="header-social  d-block d-md-none">
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="https://bit.ly/sai4ull"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                    </div>
                    <!-- Search Box -->
                    <div class="search d-block d-md-none">
                        <ul class="d-flex align-items-center">
                            <li class="mr-15">
                                <div class="nav-search search-switch">
                                    <i class="ti-search"></i>
                                </div>
                            </li>
                            <li>
                                <div class="card-stor">
                                    <img src="assets/img/gallery/card.svg" alt="">
                                    <span>0</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /End mobile  Menu-->

                <div class="slider-active dot-style">
                    <!-- Single -->
                    <div class="single-slider slider-bg1 hero-overly slider-height d-flex align-items-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-xl-8 col-lg-9">
                                    <!-- Hero Caption -->
                                    <div class="hero__caption">
                                        <h1>Books<br>changing<br>always</h1>
                                        <a href="shop.php" class="btn">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single -->
                    <div class="single-slider slider-bg2 hero-overly slider-height d-flex align-items-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-xl-8 col-lg-9">
                                    <!-- Hero Caption -->
                                    <div class="hero__caption">
                                        <h1>Books<br>changing<br>always</h1>
                                        <a href="shop.php" class="btn">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single -->
                    <div class="single-slider slider-bg3 hero-overly slider-height d-flex align-items-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-xl-8 col-lg-9">
                                    <!-- Hero Caption -->
                                    <div class="hero__caption">
                                        <h1>Books<br>changing<br>always</h1>
                                        <a href="shop.php" class="btn">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Hero -->
        <!--? Popular Items Start -->
        <div class="popular-items pt-50">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-popular-items mb-50 text-center wow fadeInUp" data-wow-duration="1s"
                            data-wow-delay=".1s">
                            <div class="popular-img">
                                <img src="assets/img/gallery/popular1.png" alt="">
                                <div class="img-cap">
                                    <span>Novels</span>
                                </div>
                                <div class="favorit-items">
                                    <a href="novels.php" class="btn">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-popular-items mb-50 text-center wow fadeInUp" data-wow-duration="1s"
                            data-wow-delay=".2s">
                            <div class="popular-img">
                                <img src="assets/img/gallery/popular2.png" alt="">
                                <div class="img-cap">
                                    <span>AutoBiography</span>
                                </div>
                                <div class="favorit-items">
                                    <a href="autobiography.php" class="btn">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-popular-items mb-50 text-center wow fadeInUp" data-wow-duration="1s"
                            data-wow-delay=".4s">
                            <div class="popular-img">
                                <img src="assets/img/gallery/popular3.png" alt="">
                                <div class="img-cap">
                                    <span>Comics</span>
                                </div>
                                <div class="favorit-items">
                                    <a href="comics.php" class="btn">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-popular-items mb-50 text-center wow fadeInUp" data-wow-duration="1s"
                            data-wow-delay=".6s">
                            <div class="popular-img">
                                <img src="assets/img/gallery/popular4.png" alt="">
                                <div class="img-cap">
                                    <span>Spiritual</span>
                                </div>
                                <div class="favorit-items">
                                    <a href="spiritual.php" class="btn">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Popular Items End -->
        <!--? New Arrival Start -->
        <div class="new-arrival">
            <div class="container py-5">
                <!-- Section tittle -->
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8 col-md-10">
                        <div class="section-tittle mb-60 text-center wow fadeInUp" data-wow-duration="2s"
                            data-wow-delay=".2s">
                            <h2>new<br>arrival</h2>
                        </div>
                    </div>
                </div>
                <div class="container py-5">
                            <div class="row mt-4">
                            <?php
                           include 'connect.php';
                            $query = "select * from productdb WHERE type='shop'";
                            $query_run=mysqli_query($conn,$query);
                            $check_books=mysqli_num_rows($query_run)>0;
                            if($check_books)
                            {
                                while($row=mysqli_fetch_assoc($query_run)){
                                    ?>
                                    <div class="col-md-4 mt-2">
                                        <div class="card"  style=" height: 45rem;" >
                                         <?php echo '<center><img src="data:image/jpg;base64,'.base64_encode( $row['product_image'] ).'"alt="books images" style="width:300px; height:350px;">';?>
                                         <div class="card-body d-flex flex-column">                                        
                                                        <h2 class="card-title"><?php echo $row['product_name'];?></h2>
                                                    <h4 class="card-title"><?php echo "Rs.".$row['product_price'];?></h4>
                                                            <p>
                                                                <a class="brand-text " href="books_detail.php?id=<?php echo $row['id']?>" 
                                                                style="color:#f44242 ;align-content: flex-end;" >View Details</a>
                                                            </p>                                          
                                          </div>
                                        </div>
                                    </div>  
                        
                            <?php 
                                }
                            }
                            else{
                                echo 'No results';
                            }
                            ?>
                          </div>
                    </div>
                <!-- </div> -->
                <!-- Button -->
                <div class="row justify-content-center">
                    <div class="room-btn">
                        <a href="shop.php" class="border-btn">Browse More</a>
                    </div>
                    <h5>User is:<?php echo $_SESSION['id'];?></h5>
                    
                </div>
            </div>
        </div>
        <!--? New Arrival End -->
        <?php include 'footer.php';
        ?>