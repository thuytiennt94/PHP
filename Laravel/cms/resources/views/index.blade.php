<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="codelean Template">
    <meta name="keywords" content="codelean, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{URL::asset('css/style.css')}}" type="text/css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CodeLean | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{URL::asset('css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{URL::asset('css/themify-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{URL::asset('css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{URL::asset('css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{URL::asset('css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{URL::asset('css/jquery-ui.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{URL::asset('css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
{{--    <link rel="stylesheet" href="css/style.css" type="text/css">--}}
</head>

<body>
    <!-- Start coding here -->

    <!-- page preloder -->
    <div id="preloder">
        <div class="loader">

        </div>
    </div>


    <!-- header section begin -->
    <header class="header-section">
        <div class="header-top">
            <div class="container">
                <div class="ht-left">
                    <div class="mail-service">
                        <i class="fa fa-envelope" aria-hidden="true"></i>ntttien@gmail.com
                    </div>
                    <div class="phone-service">
                        <i class="fa fa-phone"></i>
                            +84 98.51.88.648
                    </div>
                </div>

                <div class="ht-right">
                    <a href="login.html" class="login-panel">
                        <i class="fa fa-user"></i>
                        Login
                    </a>
                    <div class="lan-selector">
                        <select name="countries" id="countries" class="language_drop" style="width: 300px ;">
                            <option value="yu" data-image="img/flag-1.jpg" alt="" data-imagecss="flag yu"
                                data-title="English">English
                            </option>
                            <option value="yu" data-image="img/flag-2.jpg" alt="" data-imagecss="flag yu"
                                data-title="Bangladesh">German
                            </option>
                        </select>
                    </div>
                    <div class="top-social">
                        <a href="#"><i class="ti-facebook"></i></a>
                        <a href="#"><i class="ti-twitter-alt"></i></a>
                        <a href="#"><i class="ti-linkedin"></i></a>
                        <a href="#"><i class="ti-pinterest"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="inner-header">
                <div class="row">
                    <div class="col-lg-2 col-md-2">
                        <div class="logo">
                            <a href="index.html">
                                <img src="{{URL::asset('img/logo.png')}} " height="25" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7">
                        <div class="advanced-search">
                            <button type="button" class="category-btn">All Categories</button>
                            <div class="input-group">
                                <input type="text" placeholder="What do you need">
                                <button type="button"><i class="ti-search"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 text-white">
                        <ul class="nav-right">
                            <li class="heart-icon">
                                <a href="#">
                                    <i class="icon_heart_alt"></i>
                                    <span>1</span>
                                </a>
                            </li>
                            <li class="cart-icon">
                                <a href="#">
                                    <i class="icon_bag_alt"></i>
                                    <span>3</span>
                                </a>
                                <div class="cart-hover">
                                    <div class="select-items">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td class="si-pic"><img src="{{URL::asset('img/select-product-1.jpg')}} " alt=""></td>
                                                    <td class="si-text">
                                                        <div class="product-selected">
                                                            <p>$68.00 x 1</p>
                                                            <h6>Kabino Bedside Table</h6>
                                                        </div>
                                                    </td>
                                                    <td class="si-close">
                                                        <i class="ti-close"></i>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="select-total">
                                        <span>total:</span>
                                        <h5>$120.00</h5>
                                    </div>
                                    <div class="select-button">
                                        <a href="shopping-cart.html" class="primary-btn view-card">View Card</a>
                                        <a href="check-out.html" class="primary-btn checkout-btn">Check out</a>
                                    </div>
                                </div>
                            </li>
                            <li class="cart-price">$158.00</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="nav-item">
            <div class="container">
                <div class="nav-depart">
                    <div class="depart-btn">
                        <i class="ti-menu"></i>
                        <span>All departments</span>
                        <ul class=" depart-hover">
                            <li class="active"><a href="#">Women's Clothing</a></li>
                            <li><a href="#">Men's Clothing</a></li>
                            <li><a href="#">Underwear</a></li>
                            <li><a href="#">Kid's Clothing</a></li>
                            <li><a href="#">Brand codeleanon</a></li>
                            <li><a href="#">Accessories/Shoes</a></li>
                            <li><a href="#">Luxury Brands</a></li>
                            <li><a href="#">Brand Outdoor Apparel</a></li>
                        </ul>
                    </div>
                </div>
                <nav class="nav-menu mobile-menu">
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="shop.html">Shop</a></li>
                        <li><a href="">Collection</a>
                            <ul class="dropdown">
                                <li><a href="">Men's</a></li>
                                <li><a href="">Women's</a></li>
                                <li><a href="">Kid's</a></li>
                            </ul>
                        </li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="contact.html">Contact</a></li>
                        <li><a href="">Pages</a>
                            <ul class="dropdown">
                                <li><a href="blog-details.html">Blog Details</a></li>
                                <li><a href="shopping-cart.html">Shopping Cart</a></li>
                                <li><a href="check-out.html">Checkout</a></li>
                                <li><a href="faq.html">Faq</a></li>
                                <li><a href="register.html">Register</a></li>
                                <li><a href="login.html">Login</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <div id="mobile-menu-wrap">

                </div>
            </div>
        </div>
    </header>
    <!-- header section end  -->


    <!-- Hero Section begin -->
    <section class="hero-section">
        <div class="hero-items owl-carousel">
            <div class="single-hero-items set-bg" data-setbg="{{URL::asset('img/hero-1.jpg')}} ">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <span>Bag,kids</span>
                            <h1>Black friday</h1>
                            <p>lorem ipsum dolor sit amet, consectetur adipisicing elit, sed da elusmod tempor incididunt ut labore et dolore</p>
                            <a href="#" class="primary-btn">Shop Now</a>
                        </div>
                    </div>
                    <div class="off-card">
                        <h2>SALE <span>50%</span></h2>
                    </div>
                </div>
            </div>
            <div class="single-hero-items set-bg" data-setbg="{{URL::asset('img/hero-2.jpg')}} ">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <span>Bag,kids</span>
                            <h1>Black friday</h1>
                            <p>lorem ipsum dolor sit amet, consectetur adipisicing elit, sed da elusmod tempor incididunt ut labore et dolore</p>
                            <a href="#" class="primary-btn">Shop Now</a>
                        </div>
                        <!-- <div class="col-lg-5">

                        </div> -->
                    </div>
                    <div class="off-card">
                        <h2>SALE <span>50%</span></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero section end -->


    <!-- Banner section begin -->
    <div class="banner-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-banner">
                        <img src="{{URL::asset('img/banner-1.jpg')}} " alt="">
                        <div class="inner-text">
                            <h4>Men's</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-banner">
                        <img src="{{URL::asset('img/banner-2.jpg')}} " alt="">
                        <div class="inner-text">
                            <h4>Women's</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-banner">
                        <img src="{{URL::asset('img/banner-3.jpg')}} " alt="">
                        <div class="inner-text">
                            <h4>Kid's</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner section end -->


    <!-- Women Banner Section Begin -->
    <section class="women-banner spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 product-large set-bg " data-setbg="{{URL::asset('img/products/women-large.jpg')}} ">
                    <h2>Women's</h2>
                    <a href="#">Discover More</a>
                </div>
                <div class="col-lg-8 offset-lg-1">
                    <div class="filter-control">
                        <ul>
                            <li class="active">Clothings</li>
                            <li>HandBag</li>
                            <li>Shoes</li>
                            <li>Accessories</li>
                        </ul>
                    </div>
                    <div class="product-slider owl-carousel">
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="{{URL::asset(img/products/women-1.jpg'')}} " alt="">
                                <div class="sale">Sale</div>
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href=""><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="product.html">+ Quick View</a></li>
                                    <li class="w-icon"><a href=""><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="category-name">Coat</div>
                                <a href="">
                                    <h5>Pure Pineapple</h5>
                                </a>
                                <div class="product-price">
                                    $14.00
                                    <span>$55.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="{{URL::asset('img/products/women-2.jpg')}} " alt="">

                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href=""><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="product.html">+ Quick View</a></li>
                                    <li class="w-icon"><a href=""><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="category-name">Coat</div>
                                <a href="">
                                    <h5>Guangzhou sewater</h5>
                                </a>
                                <div class="product-price">
                                    $13.00
                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="{{URL::asset('img/products/women-3.jpg')}} " alt="">

                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href=""><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="product.html">+ Quick View</a></li>
                                    <li class="w-icon"><a href=""><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="category-name">Coat</div>
                                <a href="">
                                    <h5>Pure Pineopple</h5>
                                </a>
                                <div class="product-price">
                                    $34.00
                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="{{URL::asset('img/products/women-4.jpg')}} " alt="">

                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href=""><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="product.html">+ Quick View</a></li>
                                    <li class="w-icon"><a href=""><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="category-name">Coat</div>
                                <a href="">
                                    <h5>Converse Shoes0</h5>
                                </a>
                                <div class="product-price">
                                    $34.00
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Women Banner Section End -->


    <!-- Deal of the weel section begin -->
    <section class="deal-of-week set-bg spad" data-setbg="{{URL::asset('img/time-bg.jpg')}} ">
        <div class="container">
            <div class="col-lg-6 text-center">
                <div class="section-title">
                    <p>Lorem insum dolor sit amet, consectetur  adipisicing elit, sed <br> do ipsum dolor sit amet,
                    consectetur adipisicing elit</p>
                    <div class="product-price">
                        $35.00
                        <span>/HarBag</span>
                    </div>
                </div>
                <div class="countdown-timer" id="countdown">
                    <div class="cd-item">
                        <span>56</span>
                        <p>Days</p>
                    </div>
                    <div class="cd-item">
                        <span>12</span>
                        <p>Hrs</p>
                    </div>
                    <div class="cd-item">
                        <span>68</span>
                        <p>Mins</p>
                    </div>
                    <div class="cd-item">
                        <span>52</span>
                        <p>Seces</p>
                    </div>
                </div>
                <a href="" class="primary-btn">Shop now</a>
            </div>
        </div>
    </section>
    <!-- Deal of the weel section end -->


    <!-- Man Banner section begin -->
    <section class="man-banner spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 ">
                    <div class="filter-control">
                        <ul>
                            <li class="active">Clothings</li>
                            <li>HandBag</li>
                            <li>Shoes</li>
                            <li>Accessories</li>
                        </ul>
                    </div>
                    <div class="product-slider owl-carousel">
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="{{URL::asset('img/products/man-1.jpg')}} " alt="">
                                <div class="sale">Sale</div>
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href=""><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="product.html">+ Quick View</a></li>
                                    <li class="w-icon"><a href=""><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="category-name">Coat</div>
                                <a href="">
                                    <h5>Pure Pineapple</h5>
                                </a>
                                <div class="product-price">
                                    $14.00
                                    <span>$55.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="{{URL::asset('img/products/man-2.jpg')}} " alt="">

                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href=""><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="product.html">+ Quick View</a></li>
                                    <li class="w-icon"><a href=""><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="category-name">Coat</div>
                                <a href="">
                                    <h5>Guangzhou sewater</h5>
                                </a>
                                <div class="product-price">
                                    $13.00
                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="{{URL::asset('img/products/man-3.jpg')}} " alt="">

                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href=""><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="product.html">+ Quick View</a></li>
                                    <li class="w-icon"><a href=""><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="category-name">Coat</div>
                                <a href="">
                                    <h5>Pure Pineopple</h5>
                                </a>
                                <div class="product-price">
                                    $34.00
                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="{{URL::asset('img/products/man-4.jpg')}} " alt="">

                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href=""><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="product.html">+ Quick View</a></li>
                                    <li class="w-icon"><a href=""><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="category-name">Coat</div>
                                <a href="">
                                    <h5>Converse Shoes0</h5>
                                </a>
                                <div class="product-price">
                                    $34.00
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1 product-large set-bg " data-setbg="{{URL::asset('img/products/man-large.jpg')}} ">
                    <h2>Men's</h2>
                    <a href="#">Discover More</a>
                </div>

            </div>
        </div>
    </section>
    <!-- Man Banner section end -->


    <!-- Instagram section Begin -->
    <div class="instagram-photo">
        <div class="insta-item set-bg" data-setbg="{{URL::asset('img/insta-1.jpg')}} ">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">CodeLean_Collection</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="{{URL::asset('img/insta-2.jpg')}} ">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">CodeLean_Collection</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="{{URL::asset('img/insta-3.jpg')}} ">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">CodeLean_Collection</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="{{URL::asset('img/insta-4.jpg')}} ">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">CodeLean_Collection</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="{{URL::asset('img/insta-5.jpg')}} ">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">CodeLean_Collection</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="{{URL::asset('img/insta-6.jpg')}}">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">CodeLean_Collection</a></h5>
            </div>
        </div>
    </div>
    <!-- Instagram section end -->


    <!-- Lastest Blog section begin -->
    <section class="latest-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>From The Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-latest-blog">
                        <img src="{{URL::asset('img/latest-1.jpg')}} " alt="">
                        <div class="latest-text">
                            <div class="tag-list">
                                <div class="tag-item">
                                    <i class="fa fa-calendar-o"></i>
                                    May 4, 2022
                                </div>
                                <div class="tag-item">
                                    <i class="fa fa-camment-o"></i>
                                    5
                                </div>
                            </div>
                            <a href="">
                                <h4>The best street style from london CodeLean Week</h4>
                            </a>
                            <p>Sed quia non numquan modi tengora indunt vt labore et dolore magham aliquam quaerat</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-latest-blog">
                        <img src="{{URL::asset('img/latest-2.jpg')}}" alt="">
                        <div class="latest-text">
                            <div class="tag-list">
                                <div class="tag-item">
                                    <i class="fa fa-calendar-o"></i>
                                    May 4, 2022
                                </div>
                                <div class="tag-item">
                                    <i class="fa fa-camment-o"></i>
                                    5
                                </div>
                            </div>
                            <a href="">
                                <h4>Voduw's Ultimate Guide To Autumn/Winter 2022 Shoes</h4>
                            </a>
                            <p>Sed quia non numquan modi tengora indunt vt labore et dolore magham aliquam quaerat</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-latest-blog">
                        <img src="{{URL::asset('img/latest-3.jpg')}}" alt="">
                        <div class="latest-text">
                            <div class="tag-list">
                                <div class="tag-item">
                                    <i class="fa fa-calendar-o"></i>
                                    May 4, 2022
                                </div>
                                <div class="tag-item">
                                    <i class="fa fa-camment-o"></i>
                                    5
                                </div>
                            </div>
                            <a href="">
                                <h4>How To Brighten Your Wardrobe With A Dash Of Lime</h4>
                            </a>
                            <p>Sed quia non numquan modi tengora indunt vt labore et dolore magham aliquam quaerat</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="benefit-items">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="single-benefit">
                            <div class="sb-icon">
                                <img src="{{URL::asset('img/icon-1.png')}} " alt="">
                            </div>
                            <div class="sb-text">
                                <h6>Free Shipping</h6>
                                <p>For all order over 99$</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-benefit">
                            <div class="sb-icon">
                                <img src="{{URL::asset('img/icon-2.png')}} " alt="">
                            </div>
                            <div class="sb-text">
                                <h6>Delivery on time</h6>
                                <p>If good have prolems</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-benefit">
                            <div class="sb-icon">
                                <img src="{{URL::asset('img/icon-3.png')}}  " alt="">
                            </div>
                            <div class="sb-text">
                                <h6>Secure Payment</h6>
                                <p>100% secure payment</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Lastest Blog section end -->

    <!-- partner logo section begin -->
    <div class="partner-logo">
        <div class="container">
            <div class="logo-carousel owl-carousel">
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="{{URL::asset('img/logo-carousel/logo-1.png')}} " alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="{{URL::asset('img/logo-carousel/logo-2.pn')}} g" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="{{URL::asset('img/logo-carousel/logo-3.png')}} " alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="{{URL::asset('img/logo-carousel/logo-4.png')}} " alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="{{URL::asset('img/logo-carousel/logo-5.png')}} " alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- parter logo section end -->


    <!-- footer section begin -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer-left">
                        <div class="footer-logo">
                            <a href="index.html">
                                <img src="{{URL::asset('img/footer-logo.png')}} " height="25" alt="">
                            </a>
                        </div>
                        <ul>
                            <li>1A yet kieu - ha noi</li>
                            <li>Phone: +84 98.51.88.608</li>
                            <li>Email: ntttien@gmail.com</li>
                        </ul>
                        <div class="footer-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1">
                    <div class="footer-widget">
                        <h5>Information</h5>
                        <ul>
                            <li><a href="">About Us</a></li>
                            <li><a href="">Checkout</a></li>
                            <li><a href="">Contact</a></li>
                            <li><a href="">Serivius</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="footer-widget">
                        <h5>Information</h5>
                        <ul>
                            <li><a href="">My Account</a></li>
                            <li><a href="">Contact</a></li>
                            <li><a href="">Shopping Cart</a></li>
                            <li><a href="">Shop</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="newslatter-item">
                        <h5>Join Our Newsletter Now</h5>
                    <p>Get e-mail update about our latest shop and special offers.</p>
                    <form action="#" class="subscribe-form">
                        <input type="text" name="" id="" placeholder="Enter your mail">
                        <button type="button">Subscribe</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-reserved">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright-text">
                            Copyright
                            <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is nade with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://CodeLean.vn" target="_blank">CodeLean</a>
                        </div>
{{--                        <div class="payment-pic">--}}
{{--                            <img src="{{URL::asset('img/payment-method.png')}} " alt="">--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer section end -->

    <!-- Js Plugins -->
    <script src="{{URL::asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('js/jquery-ui.min.js')}}"></script>
    <script src="{{URL::asset('js/jquery.countdown.min.js')}}"></script>
    <script src="{{URL::asset('js/jquery.nice-select.min.js')}}"></script>
    <script src="{{URL::asset('js/jquery.zoom.min.js')}}"></script>
    <script src="{{URL::asset('js/jquery.dd.min.js')}}"></script>
    <script src="{{URL::asset('js/jquery.slicknav.js')}}"></script>
    <script src="{{URL::asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{URL::asset('js/main.js')}}"></script>
</body>

