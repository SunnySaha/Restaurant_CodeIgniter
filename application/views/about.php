<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from labartisan.net/demo/foodbuzz/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Aug 2020 11:07:00 GMT -->
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
        
		<title>About Us</title>
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

      <?php 
      
      $this->load->view('header');
      ?>
        
        <!-- Page Header Section Start Here -->
        <section class="page-header style-2">
            <div class="container">
                <div class="page-title text-center">
                    <h3>About Our FoodBuzz</h3>
                    <ul class="breadcrumb">
                        <li><a href="<?php echo base_url();?>">Home</a></li>
                        <li>About</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- Page Header Section Ending Here -->
       

		<!-- About Section Start here -->
		<section class="about padding-tb">
            <div class="container">
                <div class="row align-items-center flex-row-reverse">
                    <div class="col-lg-6 col-12">
                        <div class="about-thumb">
                            <img src="assets/images/about/01.png" alt="about-food">
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="about-content">
                            <div class="section-header">
                                <span>Welcome FoodBuzz</span>
                                <h3>About Restaurant History!</h3>
                            </div>
                            <div class="section-wrapper">
                                <p>Synergistca conceptualize leveraged inte ectual capital through virtual and the a and Proactiviely initiate lrisk highyield a platforms after realtme froms growth that awesome tently matrix robusti method powerm foistcky Sytical concepta leved ntelectua anding capita hrough virtua nteectua that capta  the and Proactiviely initiate low risk highyield platforms after realtme froms that there andin Proctive initate low risk high yeld platform aftering Conven iterate optimal paradigms reliable techno</p>
                                <a href="#" class="food-btn style-2"><span>get diraction</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
		<!-- About Section Ending here -->


      <!-- booking table here if need -->

        

        <!-- our cheff will be here if needed -->


        <!-- clients area start -->
        <section class="clients-area padding-tb bg_size p-rel" style="background-image: url(assets/images/clients/clients_bg.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="section-header text-center">
                    <img src="assets/images/header/sc-img.png" alt="sc-img" class="header-img">
                    <span>Our Valuable Client</span>
                    <h2>What People Say About us</h2>
                </div>
                <div class="section-wrapper">
                    <div class="clients-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="clients-item text-center">
                                    <div class="clients-thumb">
                                        <img src="assets/images/clients/01.jpg" alt="clients-image">
                                    </div>
                                    <div class="clients-text">
                                        <p>
                                            <span><i class="fas fa-quote-left"></i></span>
                                            Proactivel expedite cost ectve andoportunties through aeconomical are creative a souncreative theme Enthusiastical maintain creative effective anifunctionalities Conveniently are creative anarecaptiualize Conveniently are creative theme for business anarecaptiualize
                                            <span><i class="fas fa-quote-right"></i></span>
                                        </p>
                                        <div class="rating">
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fas fa-star-half-alt"></i></span>
                                        </div>
                                        <h6>Zinnat Zaara</h6>
                                        <span>Senior Ui / ux Desiner</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="clients-item text-center">
                                    <div class="clients-thumb">
                                        <img src="assets/images/clients/03.jpg" alt="clients-image">
                                    </div>
                                    <div class="clients-text">
                                        
                                        <p>
                                            <span><i class="fas fa-quote-left"></i></span>
                                            Proactivel expedite cost ectve andoportunties through aeconomical are creative a souncreative theme
                                            Enthusiastical maintain creative effective anifunctionalities Conveniently are creative anarecaptiualize
                                            Conveniently are creative theme for business anarecaptiualize
                                            <span><i class="fas fa-quote-right"></i></span>
                                        </p>
                                        <div class="rating">
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fas fa-star-half-alt"></i></span>
                                        </div>
                                        <h6>Mannan Khan</h6>
                                        <span>Head Of Idia</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="clients-item text-center">
                                    <div class="clients-thumb">
                                        <img src="assets/images/clients/02.jpg" alt="clients-image">
                                    </div>
                                    <div class="clients-text">
                                        
                                        <p>
                                            <span><i class="fas fa-quote-left"></i></span>
                                            Proactivel expedite cost ectve andoportunties through aeconomical are creative a souncreative theme
                                            Enthusiastical maintain creative effective anifunctionalities Conveniently are creative anarecaptiualize
                                            Conveniently are creative theme for business anarecaptiualize
                                            <span><i class="fas fa-quote-right"></i></span>
                                        </p>
                                        <div class="rating">
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fas fa-star-half-alt"></i></span>
                                        </div>
                                        <h6>Subrina Kabir</h6>
                                        <span>Lead Desiner</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clients-pagination"></div>
                </div>
            </div>
        </section>
        <!-- clients area ends -->


        <!-- Sponsor Section Start Here -->
		<div class="sponsor-section">
            <div class="container">
                <div class="section-wrapper">
                    <div class="sponsor-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="sponsor-item">
                                    <div class="sponsor-thumb">
                                        <a href="#"><img src="assets/images/sponsor/01.png" alt="food-sopnsor"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="sponsor-item">
                                    <div class="sponsor-thumb">
                                        <a href="#"><img src="assets/images/sponsor/02.png" alt="food-sopnsor"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="sponsor-item">
                                    <div class="sponsor-thumb">
                                        <a href="#"><img src="assets/images/sponsor/03.png" alt="food-sopnsor"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="sponsor-item">
                                    <div class="sponsor-thumb">
                                        <a href="#"><img src="assets/images/sponsor/04.png" alt="food-sopnsor"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="sponsor-item">
                                    <div class="sponsor-thumb">
                                        <a href="#"><img src="assets/images/sponsor/05.png" alt="food-sopnsor"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sponsor Section Ending Here -->

        <!-- link area start -->
        <div class="news_link">
            <div class="container">
                <div class="order-content">
                    <div class="content-logo">
                        <a href="#">
                            <img src="assets/images/logo/02.png" alt="logo">
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

       <?php
       
       $this->load->view('footer');
       ?>

        
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

<!-- Mirrored from labartisan.net/demo/foodbuzz/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Aug 2020 11:07:00 GMT -->
</html>