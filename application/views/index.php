<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from labartisan.net/demo/foodbuzz/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Aug 2020 11:06:57 GMT -->
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
        
		<title>FoodBuzz</title>
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

       <!-- Mobile Menu Start Here -->
		<div class="mobile-menu">
			<nav class="mobile-header">
				<div class="header-logo">
					<a href="<?php echo base_url().'index.php/Main/home';?>"><img src="<?php echo base_url().'/assets/images/logo/01.png';?>" alt="logo"></a>
				</div>
				<div class="header-bar">
					<span></span>
					<span></span>
					<span></span>
				</div>
			</nav>
			<nav class="mobile-menu">
				<div class="mobile-menu-area">
					<div class="mobile-menu-area-inner">
						<ul>
                            <li class="active"><a href="<?php echo base_url().'index.php/Main/home';?>">Home</a></li>
                            <li><a href="#">Pages</a>
                                <ul>
                                    <li><a href="<?php echo base_url().'index.php/Main/about';?>">About Us</a></li>
                                    <li><a href="<?php echo base_url().'index.php/Main/comming_soon';?>">Coming Soon</a></li>
                                    <!-- <li><a href="404.html">404</a></li> -->
                                </ul>
                            </li>
                            <li><a href="<?php echo base_url().'index.php/Main/Menu'?>">Our Menu</a>
                                <!-- <ul>
                                    <li><a href="menu-card.html">Menu Card</a></li>
                                    <li><a href="menu-card-2.html">Menu Card 2</a></li>
                                    <li><a href="menu-card-3.html">Menu Card 3</a></li>
                                </ul> -->
                            </li>
                            <li><a href="reserv.html">Reservation</a></li>
                            <li><a href="blog.html">Blog</a>
                                <!-- <ul>
                                    <li><a href="blog.html">Blog Style 1</a></li>
                                    <li><a href="blog-2.html">Blog Style 2</a></li>
                                    <li><a href="blog-single.html">Blog Single</a></li>
                                </ul> -->
                            </li>
                            <!-- <li><a href="#">Shop</a>
                                <ul>
                                    <li><a href="shop-page.html">Shop Page</a></li>
                                    <li><a href="shop-single.html">Shop Single</a></li>
                                    <li><a href="cart-page.html">Cart Page</a></li>
                                </ul>
                            </li> -->
                            <li><a href="contact-us.html">Contact</a></li>
                        </ul>
					</div>
				</div>
			</nav>
		</div>
		<!-- Mobile Menu Ending Here -->


		<!-- desktop menu start here -->
		<header class="header-section">
			<div class="header-area">
                <div class="header-top">
                    <div class="container">
                        <div class="top">
                            <ul class="left">
                                <li>
                                    <i class="far fa-clock"></i>
                                    Sun-Fri: 9am-6pm Saterday Closed 
                                </li>
                                <li>
                                    <i class="fas fa-map-marker-alt"></i>
                                    60/A Soft Road 24th Street, NY 1200
                                </li>
                                <li>
                                    <i class="fas fa-headset"></i>
                                    Support@foodbuzz.com
                                </li>
                            </ul>
                            <ul class="right">
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="header-bottom">
                    <div class="container">
                        <div class="primary-menu">
                            <div class="logo">
                                <a href="<?php echo base_url().'index.php/Main/home'?>"><img src="<?php echo base_url().'assets/images/logo/01.png';?>" alt="logo"></a>
                            </div>
                            <div class="main-area">
                                <div class="main-menu">
                                    <ul>
                                        <li class="active"><a href="<?php echo base_url().'index.php/Main/home'?>">Home</a></li>
                                        <li><a href="#">Pages</a>
                                            <ul>
                                                <li><a href="<?php echo base_url().'index.php/Main/about';?>">About Us</a></li>
                                                <li><a href="<?php echo base_url().'index.php/Main/comming_soon';?>">Coming Soon</a></li>
                                                <!-- <li><a href="404.html">404</a></li> -->
                                            </ul>
                                        </li>
                                        <li><a href="<?php echo base_url().'index.php/Main/Menu'?>">Our Menu</a>
                                            <!-- <ul>
                                                <li><a href="menu-card.html">Menu Card</a></li>
                                                <li><a href="menu-card-2.html">Menu Card 2</a></li>
                                                <li><a href="menu-card-3.html">Menu Card 3</a></li>
                                            </ul> -->
                                        </li>   
                                        <li><a href="reserv.html">Reservation</a></li>
                                        <li><a href="blog.html">Blog</a>
                                           
                                        </li>
                                        <!-- <li><a href="#">Shop</a>
                                            <ul>
                                                <li><a href="shop-page.html">Shop Page</a></li>
                                                <li><a href="shop-single.html">Shop Single</a></li>
                                                <li><a href="cart-page.html">Cart Page</a></li>
                                            </ul>
                                        </li> -->
                                        <li><a href="contact-us.html">Contact</a></li>
                                    </ul>
                                </div>
                                <div class="cart-search">
                                    <ul>
                                        <li class="search"><i class="icofont-search-2"></i></li>
                                        <li class="cart-area">
                                            <div class="cart-icon">
                                                <i class="icofont-cart-alt"></i>
                                            </div>
                                            <div class="count-item">04</div>
                                            <div class="cart-content">
                                                <div class="cart-title">
                                                    <div class="add-item">4 Items Added</div>
                                                    <div class="list-close"><a href="#">Close</a></div>
                                                </div>
                                                <div class="cart-scr scrollbar">
                                                    <div class="cart-con-item">
                                                        <div class="cart-item">
                                                            <div class="cart-inner">
                                                                <div class="cart-top">
                                                                    <div class="thumb">
                                                                        <a href="#"><img src="<?php echo base_url().'assets/images/product/01.jpg';?>" alt=""></a>
                                                                    </div>
                                                                    <div class="content">
                                                                        <a href="#">Split Remedy Split End Shampoo</a>
                                                                    </div>
                                                                    <div class="remove-btn">
                                                                        <a href="#"><i class="icofont-close"></i></a>
                                                                    </div>
                                                                </div>
                                                                <div class="cart-bottom">
                                                                    <div class="sing-price">Tk. 140</div>
                                                                    <div class="cart-plus-minus"><div class="dec qtybutton">-</div>
                                                                        <div class="dec qtybutton">-</div>
                                                                        <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1">
                                                                        <div class="inc qtybutton">+</div>
                                                                    <div class="inc qtybutton">+</div></div>
                                                                    <div class="total-price">Tk. 280.00</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="cart-item">
                                                            <div class="cart-inner">
                                                                <div class="cart-top">
                                                                    <div class="thumb">
                                                                        <a href="#"><img src="assets/images/product/02.jpg" alt=""></a>
                                                                    </div>
                                                                    <div class="content">
                                                                        <a href="#">Split Remedy Split End Shampoo</a>
                                                                    </div>
                                                                    <div class="remove-btn">
                                                                        <a href="#"><i class="icofont-close"></i></a>
                                                                    </div>
                                                                </div>
                                                                <div class="cart-bottom">
                                                                    <div class="sing-price">Tk. 140</div>
                                                                    <div class="cart-plus-minus"><div class="dec qtybutton">-</div>
                                                                        <div class="dec qtybutton">-</div>
                                                                        <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1">
                                                                        <div class="inc qtybutton">+</div>
                                                                    <div class="inc qtybutton">+</div></div>
                                                                    <div class="total-price">Tk. 280.00</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="cart-item">
                                                            <div class="cart-inner">
                                                                <div class="cart-top">
                                                                    <div class="thumb">
                                                                        <a href="#"><img src="assets/images/product/03.jpg" alt=""></a>
                                                                    </div>
                                                                    <div class="content">
                                                                        <a href="#">Split Remedy Split End Shampoo</a>
                                                                    </div>
                                                                    <div class="remove-btn">
                                                                        <a href="#"><i class="icofont-close"></i></a>
                                                                    </div>
                                                                </div>
                                                                <div class="cart-bottom">
                                                                    <div class="sing-price">Tk. 140</div>
                                                                    <div class="cart-plus-minus"><div class="dec qtybutton">-</div>
                                                                        <div class="dec qtybutton">-</div>
                                                                        <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1">
                                                                        <div class="inc qtybutton">+</div>
                                                                    <div class="inc qtybutton">+</div></div>
                                                                    <div class="total-price">Tk. 280.00</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="cart-item">
                                                            <div class="cart-inner">
                                                                <div class="cart-top">
                                                                    <div class="thumb">
                                                                        <a href="#"><img src="assets/images/product/04.jpg" alt=""></a>
                                                                    </div>
                                                                    <div class="content">
                                                                        <a href="#">Split Remedy Split End Shampoo</a>
                                                                    </div>
                                                                    <div class="remove-btn">
                                                                        <a href="#"><i class="icofont-close"></i></a>
                                                                    </div>
                                                                </div>
                                                                <div class="cart-bottom">
                                                                    <div class="sing-price">Tk. 140</div>
                                                                    <div class="cart-plus-minus"><div class="dec qtybutton">-</div>
                                                                        <div class="dec qtybutton">-</div>
                                                                        <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1">
                                                                        <div class="inc qtybutton">+</div>
                                                                    <div class="inc qtybutton">+</div></div>
                                                                    <div class="total-price">Tk. 280.00</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="cart-scr-bottom">
                                                    <ul>
                                                        <li>
                                                            <div class="title">Subtotal</div>
                                                            <div class="price">Tk. 1045.00</div>
                                                        </li>
                                                        <li>
                                                            <div class="title">Shipping</div>
                                                            <div class="price">Tk. 40.00</div>
                                                        </li>
                                                        <li>
                                                            <div class="title">Cart Total</div>
                                                            <div class="price">Tk. 1085.00</div>
                                                        </li>
                                                    </ul>
                                                    <a href="#" class="food-btn"><span>Place Order</span></a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
			</div>
		</header>
		<!-- desktop menu ending here -->
        

        <!-- banner section satrt here -->
        <section class="banner-area bg_size" style="background-image: url(<?php echo base_url().'assets/css/bg-image/banner-bg.jpg';?>);">
            <div class="overlay"></div>
            <div class="container">
                <div class="banner-content text-center">
                    <span>Welcome to our foodbuzz</span>
                    <h2>It's The Food You Love</h2>
                    <h3>Best Food Near At You</h3>
                    <div class="banner-btn-group">
                        <!-- <a href="#" class="food-btn"><span>Order Now</span></a> -->
                        <a href="reserv.html" class="food-btn style-2"><span>Book A Table</span></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner section ending here -->
       


		<!-- About Section Start here -->
		<section class="about padding-tb">
            <div class="container">
                <div class="row align-items-center flex-row-reverse">
                    
                    <div class="col-lg-6 col-12">
                        <div class="about-content">
                            <div class="section-header">
                                <span>Welcome FoodBuzz</span>
                                <h3 style="color:orange;">About Restaurant History!</h3>
                            </div>
                            <div class="section-wrapper">
                                <p>Synergistca conceptualize leveraged inte ectual capital through virtual and the a and Proactiviely initiate lrisk highyield a platforms after realtme froms growth that awesome tently matrix robusti method powerm foistcky Sytical concepta leved ntelectua anding capita hrough virtua nteectua that capta  the and Proactiviely initiate low risk highyield platforms after realtme froms that there andin Proctive initate low risk high yeld platform aftering Conven iterate optimal paradigms reliable techno</p>
                                <a href="#" class="food-btn style-2"><span>Read More</span></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-12">
                        <div class="about-thumb">
                            <img src="<?php echo base_url().'assets/images/about/01.png';?>" alt="about-food">
                        </div>
                    </div>
                </div>
            </div>
        </section>
		<!-- About Section Ending here -->

		<!-- Food Product Section Start here -->
        <section class="product bg_size p-rel padding-tb" style="background-image: url(assets/css/bg-image/product-bg.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="section-header">
                    <img src="assets/images/header/sc-img.png" alt="sc-img" class="header-img">
                    <span id="span">Special Today</span>
                    <h2 style="color:orange;">Restaurant With Special Foods</h2>
                </div>
                <div class="section-wrapper">
                    <div class="row">
                        <div class="col-xl-3 col-md-6 col-12">
                            <div class="product-item">
                                <div class="product-thumb">
                                    <img src="assets/images/product/01.jpg" alt="food-product">
                                    <span class="price">$10</span>
                                </div>
                                <div class="product-content">
                                    <p>Mexican Food</p>
                                    <h6><a href="#">Cream Chicken Chiladas</a></h6>
                                    <div class="rating">
                                        <i class="icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <i class="icofont-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-12">
                            <div class="product-item">
                                <div class="product-thumb">
                                    <img src="assets/images/product/02.jpg" alt="food-product">
                                    <span class="price">$20</span>
                                </div>
                                <div class="product-content">
                                    <p>Mexican Food</p>
                                    <h6><a href="#">Cream Chicken Chiladas</a></h6>
                                    <div class="rating">
                                        <i class="icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <i class="icofont-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-12">
                            <div class="product-item">
                                <div class="product-thumb">
                                    <img src="assets/images/product/03.jpg" alt="food-product">
                                    <span class="price">$30</span>
                                </div>
                                <div class="product-content">
                                    <p>Mexican Food</p>
                                    <h6><a href="#">Cream Chicken Chiladas</a></h6>
                                    <div class="rating">
                                        <i class="icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <i class="icofont-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-12">
                            <div class="product-item">
                                <div class="product-thumb">
                                    <img src="assets/images/product/04.jpg" alt="food-product">
                                    <span class="price">$40</span>
                                </div>
                                <div class="product-content">
                                    <p>Mexican Food</p>
                                    <h6><a href="#">Cream Chicken Chiladas</a></h6>
                                    <div class="rating">
                                        <i class="icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <i class="icofont-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Food Product Section Ending here -->
        
        <!-- Food Product Section Style 2 Start here -->
        <section class="product style-2 padding-tb" style="background-image: url(assets/css/bg-image/product-2.jpg);">
            <div class="container">
                <div class="section-header">
                    <img src="assets/images/header/sc-img.png" alt="sc-img" class="header-img">
                    <span>Foods Item</span>
                    <h2>Our Tasty Menu Today</h2>
                </div>
                <div class="section-wrapper">
                    <ul class="tab-bar">
                        <li class="tablinks" id="defaultOpen" onclick="openCity(event, 'burger')">
                            <img src="assets/images/product/icon/01.png" alt="food-product">
                            <span>Burger Menu</span>
                        </li>
                        <li class="tablinks" onclick="openCity(event, 'pizza')">
                            <img src="assets/images/product/icon/02.png" alt="food-product">
                            <span>fizza menu</span>
                        </li>
                        <li class="tablinks" onclick="openCity(event, 'snaks')">
                            <img src="assets/images/product/icon/03.png" alt="food-product">
                            <span>snaks Menu</span>
                        </li>
                        <li class="tablinks" onclick="openCity(event, 'drinks')">
                            <img src="assets/images/product/icon/04.png" alt="food-product">
                            <span>drinks Menu</span>
                        </li>
                    </ul>
                    <div id="burger" class="tabcontent">
                        <div class="row no-gutters">
                            <div class="col-lg-6 col-12">
                                <div class="product-item style-2">
                                    <div class="product-thumb">
                                        <img src="assets/images/product/01.jpg" alt="food-product">
                                        <span class="price">$20</span>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-title">
                                            <h6><a href="#">Cream Chicken Chiladas</a></h6>
                                            <div class="rating">
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                            </div>
                                        </div>
                                        <div class="product-desc">
                                            <p>Conveniently imaiipact are worldwide andng datang arovem theme with there</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="product-item style-2">
                                    <div class="product-thumb">
                                        <img src="assets/images/product/02.jpg" alt="food-product">
                                        <span class="price">$20</span>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-title">
                                            <h6><a href="#">Cream Chicken Chiladas</a></h6>
                                            <div class="rating">
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                            </div>
                                        </div>
                                        <div class="product-desc">
                                            <p>Conveniently imaiipact are worldwide andng datang arovem theme with there</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="product-item style-2">
                                    <div class="product-thumb">
                                        <img src="assets/images/product/03.jpg" alt="food-product">
                                        <span class="price">$20</span>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-title">
                                            <h6><a href="#">Cream Chicken Chiladas</a></h6>
                                            <div class="rating">
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                            </div>
                                        </div>
                                        <div class="product-desc">
                                            <p>Conveniently imaiipact are worldwide andng datang arovem theme with there</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="product-item style-2">
                                    <div class="product-thumb">
                                        <img src="assets/images/product/04.jpg" alt="food-product">
                                        <span class="price">$20</span>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-title">
                                            <h6><a href="#">Cream Chicken Chiladas</a></h6>
                                            <div class="rating">
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                            </div>
                                        </div>
                                        <div class="product-desc">
                                            <p>Conveniently imaiipact are worldwide andng datang arovem theme with there</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="product-item style-2">
                                    <div class="product-thumb">
                                        <img src="assets/images/product/05.jpg" alt="food-product">
                                        <span class="price">$20</span>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-title">
                                            <h6><a href="#">Cream Chicken Chiladas</a></h6>
                                            <div class="rating">
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                            </div>
                                        </div>
                                        <div class="product-desc">
                                            <p>Conveniently imaiipact are worldwide andng datang arovem theme with there</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="product-item style-2">
                                    <div class="product-thumb">
                                        <img src="assets/images/product/06.jpg" alt="food-product">
                                        <span class="price">$20</span>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-title">
                                            <h6><a href="#">Cream Chicken Chiladas</a></h6>
                                            <div class="rating">
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                            </div>
                                        </div>
                                        <div class="product-desc">
                                            <p>Conveniently imaiipact are worldwide andng datang arovem theme with there</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="product-item style-2">
                                    <div class="product-thumb">
                                        <img src="assets/images/product/07.jpg" alt="food-product">
                                        <span class="price">$20</span>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-title">
                                            <h6><a href="#">Cream Chicken Chiladas</a></h6>
                                            <div class="rating">
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                            </div>
                                        </div>
                                        <div class="product-desc">
                                            <p>Conveniently imaiipact are worldwide andng datang arovem theme with there</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="product-item style-2">
                                    <div class="product-thumb">
                                        <img src="assets/images/product/08.jpg" alt="food-product">
                                        <span class="price">$20</span>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-title">
                                            <h6><a href="#">Cream Chicken Chiladas</a></h6>
                                            <div class="rating">
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
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
                    <div id="pizza" class="tabcontent">
                        <div class="row no-gutters">
                            <div class="col-lg-6 col-12">
                                <div class="product-item style-2">
                                    <div class="product-thumb">
                                        <img src="assets/images/product/09.jpg" alt="food-product">
                                        <span class="price">$20</span>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-title">
                                            <h6><a href="#">Cream Chicken Chiladas</a></h6>
                                            <div class="rating">
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                            </div>
                                        </div>
                                        <div class="product-desc">
                                            <p>Conveniently imaiipact are worldwide andng datang arovem theme with there</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="product-item style-2">
                                    <div class="product-thumb">
                                        <img src="assets/images/product/10.jpg" alt="food-product">
                                        <span class="price">$20</span>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-title">
                                            <h6><a href="#">Cream Chicken Chiladas</a></h6>
                                            <div class="rating">
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                            </div>
                                        </div>
                                        <div class="product-desc">
                                            <p>Conveniently imaiipact are worldwide andng datang arovem theme with there</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="product-item style-2">
                                    <div class="product-thumb">
                                        <img src="assets/images/product/11.jpg" alt="food-product">
                                        <span class="price">$20</span>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-title">
                                            <h6><a href="#">Cream Chicken Chiladas</a></h6>
                                            <div class="rating">
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                            </div>
                                        </div>
                                        <div class="product-desc">
                                            <p>Conveniently imaiipact are worldwide andng datang arovem theme with there</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="product-item style-2">
                                    <div class="product-thumb">
                                        <img src="assets/images/product/12.jpg" alt="food-product">
                                        <span class="price">$20</span>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-title">
                                            <h6><a href="#">Cream Chicken Chiladas</a></h6>
                                            <div class="rating">
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
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
                    <div id="snaks" class="tabcontent">
                        <div class="row no-gutters">
                            <div class="col-lg-6 col-12">
                                <div class="product-item style-2">
                                    <div class="product-thumb">
                                        <img src="assets/images/product/13.jpg" alt="food-product">
                                        <span class="price">$20</span>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-title">
                                            <h6><a href="#">Cream Chicken Chiladas</a></h6>
                                            <div class="rating">
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                            </div>
                                        </div>
                                        <div class="product-desc">
                                            <p>Conveniently imaiipact are worldwide andng datang arovem theme with there</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="product-item style-2">
                                    <div class="product-thumb">
                                        <img src="assets/images/product/14.jpg" alt="food-product">
                                        <span class="price">$20</span>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-title">
                                            <h6><a href="#">Cream Chicken Chiladas</a></h6>
                                            <div class="rating">
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                            </div>
                                        </div>
                                        <div class="product-desc">
                                            <p>Conveniently imaiipact are worldwide andng datang arovem theme with there</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="product-item style-2">
                                    <div class="product-thumb">
                                        <img src="assets/images/product/15.jpg" alt="food-product">
                                        <span class="price">$20</span>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-title">
                                            <h6><a href="#">Cream Chicken Chiladas</a></h6>
                                            <div class="rating">
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                            </div>
                                        </div>
                                        <div class="product-desc">
                                            <p>Conveniently imaiipact are worldwide andng datang arovem theme with there</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="product-item style-2">
                                    <div class="product-thumb">
                                        <img src="assets/images/product/16.jpg" alt="food-product">
                                        <span class="price">$20</span>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-title">
                                            <h6><a href="#">Cream Chicken Chiladas</a></h6>
                                            <div class="rating">
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                            </div>
                                        </div>
                                        <div class="product-desc">
                                            <p>Conveniently imaiipact are worldwide andng datang arovem theme with there</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="product-item style-2">
                                    <div class="product-thumb">
                                        <img src="assets/images/product/17.jpg" alt="food-product">
                                        <span class="price">$20</span>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-title">
                                            <h6><a href="#">Cream Chicken Chiladas</a></h6>
                                            <div class="rating">
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                            </div>
                                        </div>
                                        <div class="product-desc">
                                            <p>Conveniently imaiipact are worldwide andng datang arovem theme with there</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="product-item style-2">
                                    <div class="product-thumb">
                                        <img src="assets/images/product/18.jpg" alt="food-product">
                                        <span class="price">$20</span>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-title">
                                            <h6><a href="#">Cream Chicken Chiladas</a></h6>
                                            <div class="rating">
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
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
                    <div id="drinks" class="tabcontent">
                        <div class="row no-gutters">
                            <div class="col-lg-6 col-12">
                                <div class="product-item style-2">
                                    <div class="product-thumb">
                                        <img src="assets/images/product/19.jpg" alt="food-product">
                                        <span class="price">$20</span>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-title">
                                            <h6><a href="#">Cream Chicken Chiladas</a></h6>
                                            <div class="rating">
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                            </div>
                                        </div>
                                        <div class="product-desc">
                                            <p>Conveniently imaiipact are worldwide andng datang arovem theme with there</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="product-item style-2">
                                    <div class="product-thumb">
                                        <img src="assets/images/product/20.jpg" alt="food-product">
                                        <span class="price">$20</span>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-title">
                                            <h6><a href="#">Cream Chicken Chiladas</a></h6>
                                            <div class="rating">
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                            </div>
                                        </div>
                                        <div class="product-desc">
                                            <p>Conveniently imaiipact are worldwide andng datang arovem theme with there</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="product-item style-2">
                                    <div class="product-thumb">
                                        <img src="assets/images/product/01.jpg" alt="food-product">
                                        <span class="price">$20</span>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-title">
                                            <h6><a href="#">Cream Chicken Chiladas</a></h6>
                                            <div class="rating">
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                            </div>
                                        </div>
                                        <div class="product-desc">
                                            <p>Conveniently imaiipact are worldwide andng datang arovem theme with there</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="product-item style-2">
                                    <div class="product-thumb">
                                        <img src="assets/images/product/02.jpg" alt="food-product">
                                        <span class="price">$20</span>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-title">
                                            <h6><a href="#">Cream Chicken Chiladas</a></h6>
                                            <div class="rating">
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
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
        </section>
        <!-- Food Product Section Style 2 Ending here -->

        <!-- Booking Table Section Start Here -->
        <section class="booking-table bg_size p-rel padding-tb" style="background-image: url(assets/css/bg-image/contact-bg.jpg);">
            <div class="overlay"></div>
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
                                <form action="" method="post">
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
                                            <option value="1">Persons</option>
                                            <option value="2">1</option>
                                            <option value="3">2</option>
                                            <option value="4">3</option>
                                            <option value="5">4+</option>
                                            
                                        </select>
                                    </div>
                                    <input type="date" name="time" data-provide="datepicker">
                                    <textarea name="message" rows="6" placeholder="Any Special Requirements"></textarea>
                                    <button type="submit" class="food-btn style-2"><span>book a table</span></button>
                                </form>
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Booking Table Section Ending Here -->


        <!-- Team Member Section Start here -->
        <div class="team-section style-2 padding-tb">
            <div class="container">
                <div class="section-header">
                    <img src="assets/images/header/sc-img.png" alt="sc-img" class="header-img">
                    <span>Meet Our Chef</span>
                    <h2>Meet Our Very Best Chefs</h2>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="team-bottom">
                            <div class="team-bottom-area">
                                <div class="row justify-content-center align-items-center">
                                    <div class="col-xl-4 col-md-6 col-12">
                                        <div class="team-item style-2">
                                            <div class="team-item-inner">
                                                <div class="team-thumb">
                                                    <div class="t-thumb">
                                                        <img src="assets/images/team/01.jpg" alt="team-membar">
                                                    </div>
                                                    <div class="self-intregration">
                                                        <div class="intregration-head">
                                                            <span>Follow Me</span>
                                                        </div>
                                                        <div class="intregration-icon">
                                                            <ul>
                                                                <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
                                                                <li><a href="#" class="pinterest"><i class="fab fa-pinterest-p"></i></a></li>
                                                                <li><a href="#" class="twitter"><i class="fab fa-twitter"></i></a></li>
                                                                <li><a href="#" class="globe"><i class="fas fa-globe"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="team-content">
                                                    <a href="homechef-single.html"><h5 class="member-name">Zinnat Zara</h5></a>
                                                    <span class="member-dagi">Founder & CEO</span>
                                                    <p class="member-details">Proce Aran Manu Proucs Rahe Conen Cuve Manu Produ Rahe Cuvaes Mana The Conen Testin Motin</p>
                                                    <ul class="icon-style-list codex">
                                                        <li><i class="icofont-phone"></i><span>+880 9234 567 890</span></li>
                                                        <li><i class="icofont-envelope"></i><span>zinnatzara@gmail.com</span></li>
                                                        <li>
                                                            <i class="fas fa-share-alt-square"></i>
                                                            <ul class="d-flex flex-wrap justify-content-start codex">
                                                                <li><a class="twitter" href="#"><i class="fab fa-twitter"></i></a></li>
                                                                <li><a class="instagram" href="#"><i class="fab fa-instagram"></i></a></li>
                                                                <li><a class="basketball" href="#"><i class="fas fa-basketball-ball"></i></a></li>
                                                                <li><a class="vimeo" href="#"><i class="fab fa-vimeo-v"></i></a></li>
                                                                <li><a class="behance" href="#"><i class="fab fa-behance"></i></a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-md-6 col-12">
                                        <div class="team-item style-2">
                                            <div class="team-item-inner">
                                                <div class="team-thumb">
                                                    <div class="t-thumb">
                                                        <img src="assets/images/team/02.jpg" alt="team-membar">
                                                    </div>
                                                    <div class="self-intregration">
                                                        <div class="intregration-head">
                                                            <span>Follow Me</span>
                                                        </div>
                                                        <div class="intregration-icon">
                                                            <ul>
                                                                <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
                                                                <li><a href="#" class="pinterest"><i class="fab fa-pinterest-p"></i></a></li>
                                                                <li><a href="#" class="twitter"><i class="fab fa-twitter"></i></a></li>
                                                                <li><a href="#" class="globe"><i class="fas fa-globe"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="team-content">
                                                    <a href="homechef-single.html"><h5 class="member-name">Tom Holland</h5></a>
                                                    <span class="member-dagi">Founder & CEO</span>
                                                    <p class="member-details">Proce Aran Manu Proucs Rahe Conen Cuve Manu Produ Rahe Cuvaes Mana The Conen Testin Motin</p>
                                                    <ul class="icon-style-list codex">
                                                        <li><i class="icofont-phone"></i><span>+880 9234 567 890</span></li>
                                                        <li><i class="icofont-envelope"></i><span>tomholland@gmail.com</span></li>
                                                        <li>
                                                            <i class="fas fa-share-alt-square"></i>
                                                            <ul class="d-flex flex-wrap justify-content-start codex">
                                                                <li><a class="twitter" href="#"><i class="fab fa-twitter"></i></a></li>
                                                                <li><a class="instagram" href="#"><i class="fab fa-instagram"></i></a></li>
                                                                <li><a class="basketball" href="#"><i class="fas fa-basketball-ball"></i></a></li>
                                                                <li><a class="vimeo" href="#"><i class="fab fa-vimeo-v"></i></a></li>
                                                                <li><a class="behance" href="#"><i class="fab fa-behance"></i></a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-md-6 col-12">
                                        <div class="team-item style-2">
                                            <div class="team-item-inner">
                                                <div class="team-thumb">
                                                    <div class="t-thumb">
                                                        <img src="assets/images/team/03.jpg" alt="team-membar">
                                                    </div>
                                                    <div class="self-intregration">
                                                        <div class="intregration-head">
                                                            <span>Follow Me</span>
                                                        </div>
                                                        <div class="intregration-icon">
                                                            <ul>
                                                                <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
                                                                <li><a href="#" class="pinterest"><i class="fab fa-pinterest-p"></i></a></li>
                                                                <li><a href="#" class="twitter"><i class="fab fa-twitter"></i></a></li>
                                                                <li><a href="#" class="globe"><i class="fas fa-globe"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="team-content">
                                                    <a href="homechef-single.html"><h5 class="member-name">Zarina Wahab</h5></a>
                                                    <span class="member-dagi">Founder & CEO</span>
                                                    <p class="member-details">Proce Aran Manu Proucs Rahe Conen Cuve Manu Produ Rahe Cuvaes Mana The Conen Testin Motin</p>
                                                    <ul class="icon-style-list codex">
                                                        <li><i class="icofont-phone"></i><span>+880 9234 567 890</span></li>
                                                        <li><i class="icofont-envelope"></i><span>zarinawahab@gmail.com</span></li>
                                                        <li>
                                                            <i class="fas fa-share-alt-square"></i>
                                                            <ul class="d-flex flex-wrap justify-content-start codex">
                                                                <li><a class="twitter" href="#"><i class="fab fa-twitter"></i></a></li>
                                                                <li><a class="instagram" href="#"><i class="fab fa-instagram"></i></a></li>
                                                                <li><a class="basketball" href="#"><i class="fas fa-basketball-ball"></i></a></li>
                                                                <li><a class="vimeo" href="#"><i class="fab fa-vimeo-v"></i></a></li>
                                                                <li><a class="behance" href="#"><i class="fab fa-behance"></i></a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
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
        <!-- Team Member Section Ending here -->


        <!-- Blog Section Start Here -->
		<section class="blog-section blog-page padding-tb">
            <div class="container">
                <div class="section-header">
                    <img src="assets/images/header/sc-img.png" alt="sc-img" class="header-img">
                    <span>Our Blog Posts</span>
                    <h2>The Latest News And Articles</h2>
                </div>
                <div class="section-wrapper">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-sm-6 col-12">
                            <div class="post-item">
                                <div class="post-item-inner">
                                    <div class="post-thumb">
                                        <a href="blog-single.html"><img src="assets/images/blog/01.jpg" alt="lab-blog"></a>
                                    </div>
                                    <div class="post-content">
                                        <h5><a href="blog-single.html">Business Ueporting Rouncil Them Could Plan...</a></h5>
                                        <div class="author-date">
                                            <a href="#" class="date"><i class="icofont-calendar"></i>July 12, 2019</a>
                                            <a href="#" class="admin"><i class="icofont-ui-user"></i>Somrat Islam</a>
                                        </div>
                                        <p>Pluoresntly customize pranci an plcentered  customer service anding strategic amerials Interacvely cordinate performe</p>
                                        <div class="post-footer">
                                            <a href="blog-single.html" class="text-btn" style="color:orange;">Read More<i class="icofont-double-right"></i></a>
                                            <a href="#" class="comments" ><i class="icofont-comment"></i><span>2</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-12">
                            <div class="post-item">
                                <div class="post-item-inner">
                                    <div class="post-thumb">
                                        <a href="blog-single.html"><img src="assets/images/blog/02.jpg" alt="lab-blog"></a>
                                    </div>
                                    <div class="post-content">
                                        <h5><a href="blog-single.html">Financial Reporting Qouncil What Could More...</a></h5>
                                        <div class="author-date">
                                            <a href="#" class="date"><i class="icofont-calendar"></i>July 12, 2019</a>
                                            <a href="#" class="admin"><i class="icofont-ui-user"></i>Somrat Islam</a>
                                        </div>
                                        <p>Pluoresntly customize pranci an plcentered  customer service anding strategic amerials Interacvely cordinate performe</p>
                                        <div class="post-footer">
                                            <a href="blog-single.html" class="text-btn">Read More<i class="icofont-double-right"></i></a>
                                            <a href="#" class="comments"><i class="icofont-comment"></i><span>2</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-12">
                            <div class="post-item">
                                <div class="post-item-inner">
                                    <div class="post-thumb">
                                        <a href="blog-single.html"><img src="assets/images/blog/03.jpg" alt="lab-blog"></a>
                                    </div>
                                    <div class="post-content">
                                        <h5><a href="blog-single.html">Consulting Reporting Qounc Arei Could More...</a></h5>
                                        <div class="author-date">
                                            <a href="#" class="date"><i class="icofont-calendar"></i>July 12, 2019</a>
                                            <a href="#" class="admin"><i class="icofont-ui-user"></i>Somrat Islam</a>
                                        </div>
                                        <p>Pluoresntly customize pranci an plcentered  customer service anding strategic amerials Interacvely cordinate performe</p>
                                        <div class="post-footer">
                                            <a href="blog-single.html" class="text-btn">Read More<i class="icofont-double-right"></i></a>
                                            <a href="#" class="comments"><i class="icofont-comment"></i><span>2</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog Section Ending Here -->


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

        <!-- footer area start -->
        <footer class="padding-tb" style="background-image: url(assets/css/bg-image/footer-bg.jpg);">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                        <div class="contant-info">
                            <h5>Contact info</h5>
                            <ul class="info">
                                <li>
                                    <i class="fas fa-home"></i>
                                    <span>Suite 02 Level Tropical Center</span>
                                </li>
                                <li>
                                    <i class="fas fa-phone"></i>
                                    <span>+880 1234 567890, 025984712</span>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fas fa-globe-asia"></i>
                                        <span>www.foodbuzz@gmail,com</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fas fa-headphones"></i>
                                        <span>support@codexcoder.com</span>
                                    </a>
                                </li>
    
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                        <div class="opening-time">
                            <h5>Opening Hours</h5>
                            <ul>
                                <li>
                                    <p><i class="far fa-clock"></i>Saterday</p>
                                    <span>06:00 am - 08:00 pm</span>
                                </li>
                                <li>
                                    <p><i class="far fa-clock"></i>Sunday</p>
                                    <span>09:00 am - 02:00 pm</span>
                                </li>
                                <li>
                                    <p><i class="far fa-clock"></i>Monday</p>
                                    <span>07:00 am - 09:00 pm</span>
                                </li>
                                <li>
                                    <p><i class="far fa-clock"></i>Tuesday</p>
                                    <span>02:00 am - 06:00 pm</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                        <div class="news_letter">
                            <h5>Subscribe Newsletter</h5>
                            <p>
                                Sign Up For Our Latest News & Articles. 
                                We Wont Give You Spam Mails.
                            </p>
                            <div class="contact-search">
                                <form class="searchForm" method="get" action="http://labartisan.net/demo/foodbuzz/0">              
                                    <input class="searchTerm"  placeholder="Your Email" autocomplete="off">
                                    <input type="submit" class="searchBtn" value="Subscribe!"/> 
                                </form> 
                            </div>
                            <ul class="follow_us">
                                <li>
                                    <p>Follow Us : </p>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-wifi"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-globe"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-behance"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer area ends -->

        <!-- footer menu start -->
        <div class="fotter-header">
            <header>
                <div class="footer-bg">
                    <div class="container">
                        <div class="header-item">
                            <div class="header-logo">
                                <p>&copy; 2020<a href="index.html">FoodBuzz</a>Designed by<a href="https://themeforest.net/user/labartisan">Labartisan</a></p>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </header>
            <!-- <div class="footer-bottom"></div> -->
        </div>
        <!-- footer menu ends -->

        
        <!-- scrollToTop start here -->
		<a href="#" class="scrollToTop"><i class="icofont-swoosh-up"></i></a>
		<!-- scrollToTop ending here -->


        <script>
       $("body").on("submit", .contact-form, function(e){

e.preventDefault();

$.ajax({

url: '<?php echo base_url().'index.php/Main/home'?>'
type: 'POST'
data:{},
dataType: 'json',
success: function(response){
$(#response).html(response["html"]);
}


});

});
        
        </script>


		
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

<!-- Mirrored from labartisan.net/demo/foodbuzz/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Aug 2020 11:06:57 GMT -->
</html>