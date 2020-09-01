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

    <?php
        $this->load->view('header');
    
    ?>


    <!-- banner section satrt here -->
    <section class="banner-area bg_size"
        style="background-image: url(<?php echo base_url().'assets/css/bg-image/banner-bg.jpg';?>);">
        <div class="overlay"></div>
        <div class="container">
            <div class="banner-content text-center">
                <span>Welcome to our foodbuzz</span>
                <h2>It's The Food You Love</h2>
                <h3>Best Food Near At You</h3>
                <div class="banner-btn-group">
                    <!-- <a href="#" class="food-btn"><span>Order Now</span></a> -->
                    <a href="<?php echo base_url().'reservation';?>" class="food-btn style-2"><span>Book
                            A Table</span></a>
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
                            <p>Synergistca conceptualize leveraged inte ectual capital through virtual and the a and
                                Proactiviely initiate lrisk highyield a platforms after realtme froms growth that
                                awesome tently matrix robusti method powerm foistcky Sytical concepta leved ntelectua
                                anding capita hrough virtua nteectua that capta the and Proactiviely initiate low risk
                                highyield platforms after realtme froms that there andin Proctive initate low risk high
                                yeld platform aftering Conven iterate optimal paradigms reliable techno</p>
                            <a href="<?php echo base_url().'about_us';?>" class="food-btn style-2"><span>Read More</span></a>
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

   

    <!-- Food Product Section Style 2 Start here -->
    <section class="product style-2 padding-tb"
        style="background-image: url(<?php echo base_url().'assets/css/bg-image/product-2.jpg';?>);">
        <div class="container">
            <div class="section-header">
                <img src="<?php echo base_url().'assets/images/header/sc-img.png';?>" alt="sc-img" class="header-img">
                <span>Foods Item</span>
                <h2>Our Tasty Menu Today</h2>
            </div>
            <div class="section-wrapper">
                <ul class="tab-bar">
                    <li class="tablinks" id="defaultOpen" onclick="openCity(event, 'burger')">
                        <img src="<?php echo base_url().'assets/images/product/icon/01.png';?>" alt="food-product">
                        <span>Burger Menu</span>
                    </li>
                    <li class="tablinks" onclick="openCity(event, 'pizza')">
                        <img src="<?php echo base_url().'assets/images/product/icon/02.png';?>" alt="food-product">
                        <span>fizza menu</span>
                    </li>
                    <li class="tablinks" onclick="openCity(event, 'snaks')">
                        <img src="<?php echo base_url().'assets/images/product/icon/03.png';?>" alt="food-product">
                        <span>snaks Menu</span>
                    </li>
                    <li class="tablinks" onclick="openCity(event, 'drinks')">
                        <img src="<?php echo base_url().'assets/images/product/icon/04.png';?>" alt="food-product">
                        <span>drinks Menu</span>
                    </li>
                </ul>
                <div id="burger" class="tabcontent">
                    <div class="row no-gutters">
                        <div class="col-lg-6 col-12">
                            <div class="product-item style-2">
                                <div class="product-thumb">
                                    <img src="<?php echo base_url().'assets/images/product/01.jpg'?>"
                                        alt="food-product">
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
                        <div class="col-lg-6 col-12">
                            <div class="product-item style-2">
                                <div class="product-thumb">
                                    <img src="<?php echo base_url().'assets/images/product/02.jpg';?>"
                                        alt="food-product">
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
                        <div class="col-lg-6 col-12">
                            <div class="product-item style-2">
                                <div class="product-thumb">
                                    <img src="<?php echo base_url().'assets/images/product/03.jpg';?>"
                                        alt="food-product">
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
                        <div class="col-lg-6 col-12">
                            <div class="product-item style-2">
                                <div class="product-thumb">
                                    <img src="<?php echo base_url().'assets/images/product/04.jpg';?>"
                                        alt="food-product">
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
                        <div class="col-lg-6 col-12">
                            <div class="product-item style-2">
                                <div class="product-thumb">
                                    <img src="<?php echo base_url().'assets/images/product/05.jpg';?>"
                                        alt="food-product">
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
                        <div class="col-lg-6 col-12">
                            <div class="product-item style-2">
                                <div class="product-thumb">
                                    <img src="<?php echo base_url().'assets/images/product/06.jpg';?>"
                                        alt="food-product">
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
                        <div class="col-lg-6 col-12">
                            <div class="product-item style-2">
                                <div class="product-thumb">
                                    <img src="<?php echo base_url().'assets/images/product/07.jpg';?>"
                                        alt="food-product">
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
                        <div class="col-lg-6 col-12">
                            <div class="product-item style-2">
                                <div class="product-thumb">
                                    <img src="<?php echo base_url().'assets/images/product/08.jpg';?>"
                                        alt="food-product">
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
                <div id="pizza" class="tabcontent">
                    <div class="row no-gutters">
                        <div class="col-lg-6 col-12">
                            <div class="product-item style-2">
                                <div class="product-thumb">
                                    <img src="<?php echo base_url().'assets/images/product/09.jpg';?>"
                                        alt="food-product">
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
                        <div class="col-lg-6 col-12">
                            <div class="product-item style-2">
                                <div class="product-thumb">
                                    <img src="<?php echo base_url().'assets/images/product/10.jpg';?>"
                                        alt="food-product">
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
                        <div class="col-lg-6 col-12">
                            <div class="product-item style-2">
                                <div class="product-thumb">
                                    <img src="assets/images/product/11.jpg" alt="food-product">
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
                        <div class="col-lg-6 col-12">
                            <div class="product-item style-2">
                                <div class="product-thumb">
                                    <img src="assets/images/product/12.jpg" alt="food-product">
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
                                    <img src="<?php echo base_url().'assets/images/product/19.jpg';?>"
                                        alt="food-product">
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
                        <div class="col-lg-6 col-12">
                            <div class="product-item style-2">
                                <div class="product-thumb">
                                    <img src="<?php echo base_url().'assets/images/product/20.jpg';?>"
                                        alt="food-product">
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
                        <div class="col-lg-6 col-12">
                            <div class="product-item style-2">
                                <div class="product-thumb">
                                    <img src="<?php echo base_url().'assets/images/product/01.jpg';?>"
                                        alt="food-product">
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
                        <div class="col-lg-6 col-12">
                            <div class="product-item style-2">
                                <div class="product-thumb">
                                    <img src="<?php echo base_url().'assets/images/product/02.jpg';?>"
                                        alt="food-product">
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
    </section>
    <!-- Food Product Section Style 2 Ending here -->

    <!-- Booking Table Section Start Here -->
    <section class="booking-table bg_size p-rel padding-tb"
        style="background-image: url(<?php echo base_url().'assets/css/bg-image/contact-bg.jpg';?>);">
        <div class="overlay"></div>
        <div class="container">
            <div class="section-header">
                <img src="<?php echo base_url().'assets/images/header/sc-img.png';?>" alt="sc-img" class="header-img">
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
                                    <h5><a href="blog-single.html">Business Ueporting Rouncil Them Could Plan...</a>
                                    </h5>
                                    <div class="author-date">
                                        <a href="#" class="date"><i class="icofont-calendar"></i>July 12, 2019</a>
                                        <a href="#" class="admin"><i class="icofont-ui-user"></i>Somrat Islam</a>
                                    </div>
                                    <p>Pluoresntly customize pranci an plcentered customer service anding strategic
                                        amerials Interacvely cordinate performe</p>
                                    <div class="post-footer">
                                        <a href="blog-single.html" class="text-btn" style="color:orange;">Read More<i
                                                class="icofont-double-right"></i></a>
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
                                    <h5><a href="blog-single.html">Financial Reporting Qouncil What Could More...</a>
                                    </h5>
                                    <div class="author-date">
                                        <a href="#" class="date"><i class="icofont-calendar"></i>July 12, 2019</a>
                                        <a href="#" class="admin"><i class="icofont-ui-user"></i>Somrat Islam</a>
                                    </div>
                                    <p>Pluoresntly customize pranci an plcentered customer service anding strategic
                                        amerials Interacvely cordinate performe</p>
                                    <div class="post-footer">
                                        <a href="blog-single.html" class="text-btn">Read More<i
                                                class="icofont-double-right"></i></a>
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
                                    <h5><a href="blog-single.html">Consulting Reporting Qounc Arei Could More...</a>
                                    </h5>
                                    <div class="author-date">
                                        <a href="#" class="date"><i class="icofont-calendar"></i>July 12, 2019</a>
                                        <a href="#" class="admin"><i class="icofont-ui-user"></i>Somrat Islam</a>
                                    </div>
                                    <p>Pluoresntly customize pranci an plcentered customer service anding strategic
                                        amerials Interacvely cordinate performe</p>
                                    <div class="post-footer">
                                        <a href="blog-single.html" class="text-btn">Read More<i
                                                class="icofont-double-right"></i></a>
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
    <section class="clients-area padding-tb bg_size p-rel"
        style="background-image: url(assets/images/clients/clients_bg.jpg);">
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
                                        Proactivel expedite cost ectve andoportunties through aeconomical are creative a
                                        souncreative theme Enthusiastical maintain creative effective anifunctionalities
                                        Conveniently are creative anarecaptiualize Conveniently are creative theme for
                                        business anarecaptiualize
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
                                        Proactivel expedite cost ectve andoportunties through aeconomical are creative a
                                        souncreative theme
                                        Enthusiastical maintain creative effective anifunctionalities Conveniently are
                                        creative anarecaptiualize
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
                                        Proactivel expedite cost ectve andoportunties through aeconomical are creative a
                                        souncreative theme
                                        Enthusiastical maintain creative effective anifunctionalities Conveniently are
                                        creative anarecaptiualize
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


    <script>
    $("body").on("submit", .contact - form, function(e) {

        e.preventDefault();

        $.ajax({

            url: '<?php echo base_url().'
            index.php / Main / home '?>'
            type: 'POST'
            data: {},
            dataType: 'json',
            success: function(response) {
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