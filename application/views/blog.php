<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from labartisan.net/demo/foodbuzz/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Aug 2020 11:07:00 GMT -->
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
        
		<title>FoodBuzz - Blog Page</title>
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
					<a href="<?php echo base_url().'index.php/Main/home';?>"><img src="<?php echo base_url().'assets/images/logo/01.png';?>" alt="logo"></a>
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
                            <li><a href="<?php echo base_url().'index.php/Main/home';?>">Home</a></li>
                            <li><a href="#">Pages</a>
                                <ul>
                                    <li><a href="<?php echo base_url().'index.php/Main/about';?>">About Us</a></li>
                                    <li><a href="<?php echo base_url().'index.php/Main/comming_soon';?>">Coming Soon</a></li>
                                    <!-- <li><a href="404.html">404</a></li> -->
                                </ul>
                            </li>
                            <li><a href="<?php echo base_url().'index.php/Main/Menu';?>">Our Menu</a>
                                <!-- <ul>
                                    <li><a href="menu-card.html">Menu Card</a></li>
                                    <li><a href="menu-card-2.html">Menu Card 2</a></li>
                                    <li><a href="menu-card-3.html">Menu Card 3</a></li>
                                </ul> -->
                            </li>   
                            <li><a href="<?php echo base_url().'index.php/Main/Reservation';?>">Reservation</a></li>
                            <li class="active"><a href="<?php echo base_url().'index.php/Main/Blog';?>">Blog</a>
                               
                            </li>
                            <!-- <li><a href="#">Shop</a>
                                <ul>
                                    <li><a href="shop-page.html">Shop Page</a></li>
                                    <li><a href="shop-single.html">Shop Single</a></li>
                                    <li><a href="cart-page.html">Cart Page</a></li>
                                </ul>
                            </li> -->
                            <li><a href="<?php echo base_url().'index.php/Main/Contact_Us';?>">Contact</a></li>
                        </ul>
					</div>
				</div>
			</nav>
		</div>
		<!-- Mobile Menu Ending Here -->


		<!-- desktop menu start here -->
		<header class="header-section">
			<div class="header-area">
                <div class="header-bottom">
                    <div class="container">
                        <div class="primary-menu">
                            <div class="logo">
                                <a href="<?php echo base_url().'index.php/Main/home';?>"><img src="<?php echo base_url().'index.php/Main/home';?>assets/images/logo/01.png" alt="logo"></a>
                            </div>
                            <div class="main-area">
                                <div class="main-menu">
                                    <ul>
                                        <li><a href="<?php echo base_url().'index.php/Main/home';?>">Home</a></li>
                                        <li><a href="#">Pages</a>
                                            <ul>
                                                <li><a href="<?php echo base_url().'index.php/Main/about';?>">About Us</a></li>
                                                <li><a href="<?php echo base_url().'index.php/Main/comming_soon';?>">Coming Soon</a></li>
                                                <!-- <li><a href="404.html">404</a></li> -->
                                            </ul>
                                        </li>
                                        <li><a href="<?php echo base_url().'index.php/Main/Menu';?>">Our Menu</a>
                                            <!-- <ul>
                                                <li><a href="menu-card.html">Menu Card</a></li>
                                                <li><a href="menu-card-2.html">Menu Card 2</a></li>
                                                <li><a href="menu-card-3.html">Menu Card 3</a></li>
                                            </ul> -->
                                        </li>   
                                        <li><a href="<?php echo base_url().'index.php/Main/Reservation';?>">Reservation</a></li>
                                        <li class="active"><a href="<?php echo base_url().'index.php/Main/Blog';?>">Blog</a>
                                            
                                        </li>
                                        <!-- <li><a href="#">Shop</a>
                                            <ul>
                                                <li><a href="shop-page.html">Shop Page</a></li>
                                                <li><a href="shop-single.html">Shop Single</a></li>
                                                <li><a href="cart-page.html">Cart Page</a></li>
                                            </ul>
                                        </li> -->
                                        <li><a href="<?php echo base_url().'index.php/Main/Contact_Us';?>">Contact</a></li>
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
                                                                        <a href="#"><img src="assets/images/product/01.jpg" alt=""></a>
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
        
        <!-- Page Header Section Start Here -->
        <section class="page-header style-2">
            <div class="container">
                <div class="page-title text-center">
                    <h3>Blog Grid View</h3>
                    <ul class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li>Blog</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- Page Header Section Ending Here -->
       
        <!-- Blog Section Start Here -->
		<section class="blog-section blog-page padding-tb">
            <div class="container">
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
                        <div class="col-lg-4 col-sm-6 col-12">
                            <div class="post-item">
                                <div class="post-item-inner">
                                    <div class="post-thumb">
                                        <a href="blog-single.html"><img src="assets/images/blog/04.jpg" alt="lab-blog"></a>
                                    </div>
                                    <div class="post-content">
                                        <h5><a href="blog-single.html">Business Ueporting Rouncil Them Could Plan...</a></h5>
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
                                        <a href="blog-single.html"><img src="assets/images/blog/05.jpg" alt="lab-blog"></a>
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
                                        <a href="blog-single.html"><img src="assets/images/blog/06.jpg" alt="lab-blog"></a>
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
                        <div class="col-lg-4 col-sm-6 col-12">
                            <div class="post-item">
                                <div class="post-item-inner">
                                    <div class="post-thumb">
                                        <a href="blog-single.html"><img src="assets/images/blog/07.jpg" alt="lab-blog"></a>
                                    </div>
                                    <div class="post-content">
                                        <h5><a href="blog-single.html">Business Ueporting Rouncil Them Could Plan...</a></h5>
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
                                        <a href="blog-single.html"><img src="assets/images/blog/08.jpg" alt="lab-blog"></a>
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
                                        <a href="blog-single.html"><img src="assets/images/blog/09.jpg" alt="lab-blog"></a>
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
                    <div class="paginations">
                        <ul class="d-flex flex-wrap justify-content-center">
                            <li>
                                <a href="#">1</a>
                            </li>
                            <li class="d-none d-sm-block">
                                <a href="#">2</a>
                            </li>
                            <li class="d-none d-sm-block">
                                <a href="#">3</a>
                            </li>
                            <li>
                                <a class="dot">...</a>
                            </li>
                            <li class="d-none d-sm-block">
                                <a href="#">9</a>
                            </li>
                            <li class="d-none d-sm-block">
                                <a href="#">10</a>
                            </li>
                            <li>
                                <a href="#">11</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog Section Ending Here -->

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
                            <!-- <div class="header-menu d-none d-lg-block">
                                <nav class="primary-menu">
                                    <div class="main-menu-area">
                                        <ul class="main-menu">
                                            <li><a href="#">Home</a></li>
                                            <li><a href="#">Food Menu</a></li>
                                            <li><a href="#">Pages</a></li>
                                            <li><a href="#">Blog</a></li>
                                            <li><a href="#">Shop</a></li>
                                            <li><a href="#">Elements</a></li>
                                            <li><a href="#">Contact</a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div> -->
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

<!-- Mirrored from labartisan.net/demo/foodbuzz/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Aug 2020 11:07:00 GMT -->
</html>