<!DOCTYPE html>
<html lang="en">
	
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
        
		<title>FoodBuzz - Reservation</title>
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
                    <h3>Booking a Online Table</h3>
                    <ul class="breadcrumb">
                        <li><a href="<?php echo base_url();?>">Home</a></li>
                        <li>Reservation</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- Page Header Section Ending Here -->
       

        <!-- Booking Table Section Start Here -->
        <section class="booking-table padding-tb">
            <div class="container">
                <div class="section-header">
                    <img src="assets/images/header/sc-img.png" alt="sc-img" class="header-img">
                    <span>Book a Online Table</span>
                    <h2>Reservation Choose Your Table</h2>
                </div>
                <div class="section-wrapper">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-lg-6 col-12">
                            <div class="bg-table"></div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="contact-form">
                                <form action="http://labartisan.net/">
                                    <input type="text" name="name" placeholder="Full Name*">
                                    <input type="email" name="email" placeholder="Your Eamil*">
                                    <input type="text" name="number" placeholder="Phone Number">
                                    <div class="res-tab time-zone">
                                        <select>
                                            <option value="1">Enter Time</option>
                                            <option value="2">10:00 AM</option>
                                            <option value="3">11:00 AM</option>
                                            <option value="4">12:00 PM</option>
                                            <option value="5">01:00 PM</option>
                                            <option value="6">02:00 PM</option>
                                            <option value="7">03:00 PM</option>
                                            <option value="8">04:00 PM</option>
                                            <option value="9">05:00 PM</option>
                                        </select>
                                    </div>
                                    <div class="res-tab table-zone">
                                        <select>
                                            <option value="1">Table Size</option>
                                            <option value="2">2F - 3F</option>
                                            <option value="3">2.5F - 3.5F</option>
                                            <option value="4">3F - 4F</option>
                                            <option value="5">3.5F - 4.5F</option>
                                            <option value="6">4F - 5F</option>
                                            <option value="7">4.5F - 5.5F</option>
                                            <option value="8">5F - 6F</option>
                                            <option value="9">5.5F - 6.5F</option>
                                        </select>
                                    </div>
                                    <input type="date" name="time" data-provide="datepicker">
                                    <textarea name="message" rows="6" placeholder="Message"></textarea>
                                    <button type="submit" class="food-btn style-2"><span>book a table</span></button>
                                </form>
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Booking Table Section Ending Here -->


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