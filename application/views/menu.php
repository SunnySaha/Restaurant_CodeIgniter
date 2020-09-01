<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from labartisan.net/demo/foodbuzz/menu-card-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Aug 2020 11:07:00 GMT -->
<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		
		<!-- favicon -->
		<link rel="shortcut icon" href="<?php echo base_url().'assets/images/favicon.png'; ?>" type="image/png">
		<!-- animate scss -->
		<link rel="stylesheet" href="<?php echo base_url().'assets/css/animate.css';?>">
		<!-- bootstarp css -->
		<link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.min.css';?>">
		<!-- icofont -->
		<link rel="stylesheet" href="<?php echo base_url().'assets/css/icofont.min.css';?>">
		<link rel="stylesheet" href="<?php echo base_url().'assets/css/all.min.css';?>">
		<!-- lightcase css -->
		<link rel="stylesheet" href="<?php echo base_url().'assets/css/lightcase.css';?>">
		<!-- swiper css -->
		<link rel="stylesheet" href="<?php echo base_url().'assets/css/swiper.min.css';?>">
		<!-- cusyom scss -->
        <link rel="stylesheet" href="<?php echo base_url().'assets/css/style.css'?>">
        
        
		<title>FoodBuzz-Menu</title>
	</head>

	<body>
        <!-- preloader start here -->
        <div class="preloader">
            <div class="preloader-inner">
                <div class="preloader-icon">
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
        <!-- preloader ending here -->
        
        <!-- search area -->
        <div class="search-area">
            <div class="search-input">
                <div class="search-close">
                    <span></span>
                    <span></span>
                </div>
                <form>
                    <input type="text" name="text" placeholder="*Search Here.......">
                    <button class="search-btn"><span class="serch-icon"><i class="icofont-search-2"></i></span></button>
                </form>
            </div>
        </div>
        <!-- search area -->

       <?php $this->load->view('header');?>
        
        <!-- Page Header Section Start Here -->
        <section class="page-header style-2">
            <div class="container">
                <div class="page-title text-center">
                    <h3>Our Best Food Menu</h3>
                    <ul class="breadcrumb">
                        <li><a href="<?php echo base_url();?>">Home</a></li>
                        <li>Food Menu</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- Page Header Section Ending Here -->
       
        <!-- Food Product Section Style 2 Start here -->
        <section class="product style-2 padding-tb">
            <div class="container">
                <div class="section-wrapper">
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="foodlist-item style-2">
                                <div class="product-header text-center">
                                    <div class="bg-shape">
                                        <img src="assets/images/product/header-image/bg.png" alt="shape">
                                    </div>
                                    <div class="ph-content">
                                        <img src="assets/images/product/header-image/01.png" alt="product-bg">
                                        <h5>Breakfast Menu</h5>
                                        <div class="rating">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="tabcontent">
                                    <div class="row no-gutters">
                                        <div class="col-12">
                                            <div class="product-item style-2">
                                                <div class="product-thumb">
                                                    <img src="assets/images/product/01.jpg" alt="food-product">
                                                    <span class="price">$20</span>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-title">
                                                        <h6><a href="#">Cream Chicken Chiladas</a></h6>
                                                        <div class="rating">
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="product-desc">
                                                        <p>Conveniently imaiipact are worldwide andng datang arovem theme with there</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="product-item style-2">
                                                <div class="product-thumb">
                                                    <img src="assets/images/product/02.jpg" alt="food-product">
                                                    <span class="price">$20</span>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-title">
                                                        <h6><a href="#">Cream Chicken Chiladas</a></h6>
                                                        <div class="rating">
                                                           
                                                        </div>
                                                    </div>
                                                    <div class="product-desc">
                                                        <p>Conveniently imaiipact are worldwide andng datang arovem theme with there</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="product-item style-2">
                                                <div class="product-thumb">
                                                    <img src="assets/images/product/03.jpg" alt="food-product">
                                                    <span class="price">$20</span>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-title">
                                                        <h6><a href="#">Cream Chicken Chiladas</a></h6>
                                                        <div class="rating">
                                                          
                                                        </div>
                                                    </div>
                                                    <div class="product-desc">
                                                        <p>Conveniently imaiipact are worldwide andng datang arovem theme with there</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="product-item style-2">
                                                <div class="product-thumb">
                                                    <img src="assets/images/product/04.jpg" alt="food-product">
                                                    <span class="price">$20</span>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-title">
                                                        <h6><a href="#">Cream Chicken Chiladas</a></h6>
                                                        <div class="rating">
                                                           
                                                        </div>
                                                    </div>
                                                    <div class="product-desc">
                                                        <p>Conveniently imaiipact are worldwide andng datang arovem theme with there</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="product-item style-2">
                                                <div class="product-thumb">
                                                    <img src="assets/images/product/03.jpg" alt="food-product">
                                                    <span class="price">$20</span>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-title">
                                                        <h6><a href="#">Cream Chicken Chiladas</a></h6>
                                                        <div class="rating">
                                                           
                                                        </div>
                                                    </div>
                                                    <div class="product-desc">
                                                        <p>Conveniently imaiipact are worldwide andng datang arovem theme with there</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="foodlist-item style-2">
                                <div class="product-header text-center">
                                    <div class="bg-shape">
                                        <img src="assets/images/product/header-image/bg.png" alt="shape">
                                    </div>
                                    <div class="ph-content">
                                        <img src="assets/images/product/header-image/02.png" alt="product-bg">
                                        <h5>lunch Menu</h5>
                                        <div class="rating">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="tabcontent">
                                    <div class="row no-gutters">
                                        <div class="col-12">
                                            <div class="product-item style-2">
                                                <div class="product-thumb">
                                                    <img src="assets/images/product/05.jpg" alt="food-product">
                                                    <span class="price">$20</span>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-title">
                                                        <h6><a href="#">Cream Chicken Chiladas</a></h6>
                                                        <div class="rating">
                                                          
                                                        </div>
                                                    </div>
                                                    <div class="product-desc">
                                                        <p>Conveniently imaiipact are worldwide andng datang arovem theme with there</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="product-item style-2">
                                                <div class="product-thumb">
                                                    <img src="assets/images/product/06.jpg" alt="food-product">
                                                    <span class="price">$20</span>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-title">
                                                        <h6><a href="#">Cream Chicken Chiladas</a></h6>
                                                        <div class="rating">
                                                           
                                                        </div>
                                                    </div>
                                                    <div class="product-desc">
                                                        <p>Conveniently imaiipact are worldwide andng datang arovem theme with there</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="product-item style-2">
                                                <div class="product-thumb">
                                                    <img src="assets/images/product/07.jpg" alt="food-product">
                                                    <span class="price">$20</span>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-title">
                                                        <h6><a href="#">Cream Chicken Chiladas</a></h6>
                                                        <div class="rating">
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="product-desc">
                                                        <p>Conveniently imaiipact are worldwide andng datang arovem theme with there</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="product-item style-2">
                                                <div class="product-thumb">
                                                    <img src="assets/images/product/08.jpg" alt="food-product">
                                                    <span class="price">$20</span>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-title">
                                                        <h6><a href="#">Cream Chicken Chiladas</a></h6>
                                                        <div class="rating">
                                                           
                                                        </div>
                                                    </div>
                                                    <div class="product-desc">
                                                        <p>Conveniently imaiipact are worldwide andng datang arovem theme with there</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="product-item style-2">
                                                <div class="product-thumb">
                                                    <img src="assets/images/product/09.jpg" alt="food-product">
                                                    <span class="price">$20</span>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-title">
                                                        <h6><a href="#">Cream Chicken Chiladas</a></h6>
                                                        <div class="rating">
                                                          
                                                        </div>
                                                    </div>
                                                    <div class="product-desc">
                                                        <p>Conveniently imaiipact are worldwide andng datang arovem theme with there</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="foodlist-item style-2">
                                <div class="product-header text-center">
                                    <div class="bg-shape">
                                        <img src="assets/images/product/header-image/bg.png" alt="shape">
                                    </div>
                                    <div class="ph-content">
                                        <img src="assets/images/product/header-image/03.png" alt="product-bg">
                                        <h5>dinner Menu</h5>
                                        <div class="rating">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="tabcontent">
                                    <div class="row no-gutters">
                                        <div class="col-12">
                                            <div class="product-item style-2">
                                                <div class="product-thumb">
                                                    <img src="assets/images/product/10.jpg" alt="food-product">
                                                    <span class="price">$20</span>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-title">
                                                        <h6><a href="#">Cream Chicken Chiladas</a></h6>
                                                        <div class="rating">
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="product-desc">
                                                        <p>Conveniently imaiipact are worldwide andng datang arovem theme with there</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="product-item style-2">
                                                <div class="product-thumb">
                                                    <img src="assets/images/product/11.jpg" alt="food-product">
                                                    <span class="price">$20</span>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-title">
                                                        <h6><a href="#">Cream Chicken Chiladas</a></h6>
                                                        <div class="rating">
                                                           
                                                        </div>
                                                    </div>
                                                    <div class="product-desc">
                                                        <p>Conveniently imaiipact are worldwide andng datang arovem theme with there</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="product-item style-2">
                                                <div class="product-thumb">
                                                    <img src="assets/images/product/12.jpg" alt="food-product">
                                                    <span class="price">$20</span>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-title">
                                                        <h6><a href="#">Cream Chicken Chiladas</a></h6>
                                                        <div class="rating">
                                                           
                                                        </div>
                                                    </div>
                                                    <div class="product-desc">
                                                        <p>Conveniently imaiipact are worldwide andng datang arovem theme with there</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="product-item style-2">
                                                <div class="product-thumb">
                                                    <img src="assets/images/product/13.jpg" alt="food-product">
                                                    <span class="price">$20</span>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-title">
                                                        <h6><a href="#">Cream Chicken Chiladas</a></h6>
                                                        <div class="rating">
                                                           
                                                        </div>
                                                    </div>
                                                    <div class="product-desc">
                                                        <p>Conveniently imaiipact are worldwide andng datang arovem theme with there</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="product-item style-2">
                                                <div class="product-thumb">
                                                    <img src="assets/images/product/08.jpg" alt="food-product">
                                                    <span class="price">$20</span>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-title">
                                                        <h6><a href="#">Cream Chicken Chiladas</a></h6>
                                                        <div class="rating">
                                                           
                                                        </div>
                                                    </div>
                                                    <div class="product-desc">
                                                        <p>Conveniently imaiipact are worldwide andng datang arovem theme with there</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="foodlist-item style-2">
                                <div class="product-header text-center">
                                    <div class="bg-shape">
                                        <img src="assets/images/product/header-image/bg.png" alt="shape">
                                    </div>
                                    <div class="ph-content">
                                        <img src="assets/images/product/header-image/04.png" alt="product-bg">
                                        <h5>drink Menu</h5>
                                        <div class="rating">
                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="tabcontent">
                                    <div class="row no-gutters">
                                        <div class="col-12">
                                            <div class="product-item style-2">
                                                <div class="product-thumb">
                                                    <img src="assets/images/product/14.jpg" alt="food-product">
                                                    <span class="price">$20</span>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-title">
                                                        <h6><a href="#">Cream Chicken Chiladas</a></h6>
                                                      
                                                    </div>
                                                    <div class="product-desc">
                                                        <p>Conveniently imaiipact are worldwide andng datang arovem theme with there</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="product-item style-2">
                                                <div class="product-thumb">
                                                    <img src="assets/images/product/15.jpg" alt="food-product">
                                                    <span class="price">$20</span>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-title">
                                                        <h6><a href="#">Cream Chicken Chiladas</a></h6>
                                                       
                                                    </div>
                                                    <div class="product-desc">
                                                        <p>Conveniently imaiipact are worldwide andng datang arovem theme with there</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="product-item style-2">
                                                <div class="product-thumb">
                                                    <img src="assets/images/product/16.jpg" alt="food-product">
                                                    <span class="price">$20</span>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-title">
                                                        <h6><a href="#">Cream Chicken Chiladas</a></h6>
                                                        
                                                    </div>
                                                    <div class="product-desc">
                                                        <p>Conveniently imaiipact are worldwide andng datang arovem theme with there</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="product-item style-2">
                                                <div class="product-thumb">
                                                    <img src="assets/images/product/17.jpg" alt="food-product">
                                                    <span class="price">$20</span>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-title">
                                                        <h6><a href="#">Cream Chicken Chiladas</a></h6>
                                                        
                                                    </div>
                                                    <div class="product-desc">
                                                        <p>Conveniently imaiipact are worldwide andng datang arovem theme with there</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="product-item style-2">
                                                <div class="product-thumb">
                                                    <img src="assets/images/product/18.jpg" alt="food-product">
                                                    <span class="price">$20</span>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-title">
                                                        <h6><a href="#">Cream Chicken Chiladas</a></h6>
                                                       
                                                    </div>
                                                    <div class="product-desc">
                                                        <p>Conveniently imaiipact are worldwide andng datang arovem theme with there</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Food Product Section Style 2 Ending here -->

        <!-- link area start -->
        <div class="news_link">
            <div class="container">
                <div class="order-content">
                    <div class="content-logo">
                        <a href="#">
                            <img src="<?php echo base_url().'assets/images/logo/02.png';?>" alt="logo">
                            <p>Good Food For Good Helts</p>
                        </a>
                    </div>
                    <div class="content-link">
                        <ul>
                            <li>
                                <h5>Work with best resturant theme</h5>
                            </li>
                            <li>
                                <a href="#" class="food-btn style-2">
                                    <span>Order Now</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- link area ends -->

       <?php $this->load->view('footer');?>
        
        <!-- scrollToTop start here -->
		<a href="#" class="scrollToTop"><i class="icofont-swoosh-up"></i></a>
		<!-- scrollToTop ending here -->


		
        <script src="<?php echo base_url().'assets/js/jquery.js';?>"></script>
		<script src="<?php echo base_url().'assets/js/fontawesome.min.js';?>"></script>
		<script src="<?php echo base_url().'assets/js/waypoints.min.js';?>"></script>
		<script src="<?php echo base_url().'assets/js/bootstrap.min.js'?>"></script>
		<script src="<?php echo base_url().'assets/js/isotope.pkgd.min.js'?>"></script>
		<script src="<?php echo base_url().'assets/js/wow.min.js'?>"></script>
		<script src="<?php echo base_url().'assets/js/swiper.min.js'?>"></script>
		<script src="<?php echo base_url().'assets/js/progress.js'?>"></script>
		<script src="<?php echo base_url().'assets/js/tab.js';?>"></script>
		<script src="<?php echo base_url().'assets/js/lightcase.js';?>"></script>
		<script src="<?php echo base_url().'assets/js/jquery.countdown.min.js';?>"></script>
        <script src="<?php echo base_url().'assets/js/functions.js';?>"></script>
	</body>

</html>