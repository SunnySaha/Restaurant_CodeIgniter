<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from labartisan.net/demo/foodbuzz/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Aug 2020 11:07:01 GMT -->
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
        
		<title>FoodBuzz - Contact-Us</title>
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
                    <h3>contact information</h3>
                    <ul class="breadcrumb">
                        <li><a href="<?php echo base_url();?>">Home</a></li>
                        <li>Contact Us</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- Page Header Section Ending Here -->
       

         <!-- Contact Us Section Start Here -->
         <section class="contact-information padding-tb pb-xl-0">
            <div class="container">
                <div class="section-wrapper">
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <h5>Contact Information</h5>
                            <div class="post-item">
                                <div class="post-content">
                                    <h6>office adress</h6>
                                    <p>Suite 02, Level 12, Sahera Tropical Center 218</p>
                                    <p>New Elephant Road, Dhaka - 1205</p>
                                </div>
                            </div>
                            <div class="post-item">
                                <div class="post-content">
                                    <h6>phone number : </h6>
                                    <p>+8801678170593, 01919-264687</p>
                                    <p>02-9611936</p>
                                </div>
                            </div>
                            <div class="post-item">
                                <div class="post-content">
                                    <h6>email adress : </h6>
                                    <p>support@foodbuzz.com</p>
                                </div>
                            </div>
                            <div class="post-item">
                                <div class="post-content">
                                    <h6>website adress</h6>
                                    <p>http://foodbuzz.com</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <h5>Send Us A Message</h5>
                            <form class="d-flex flex-wrap justify-content-between">
                                <input type="text" placeholder="Your Name">
                                <input type="text" placeholder="Your Email">
                                <input class="w-100" type="text" placeholder="Subject">
                                <textarea rows="8" placeholder="Your Message"></textarea>
                                <button type="submit" class="food-btn style-2"><span>Submit Message</span></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Us Section Ending Here -->


        <!-- G-Map Section Start Here -->
        <div class="gmaps-section">
            <div class="map-area">
                <iframe src="https://maps.google.com/maps?q=new%40codexcoder&amp;t=&amp;z=17&amp;ie=UTF8&amp;iwloc=&amp;output=embed" style="border:0" allowfullscreen></iframe>
                
            </div>
        </div>
        <!-- G-Map Section Ending Here -->


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

<!-- Mirrored from labartisan.net/demo/foodbuzz/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Aug 2020 11:07:01 GMT -->
</html>