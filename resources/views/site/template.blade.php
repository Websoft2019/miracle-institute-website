<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Miracle Institute</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('site/assets/img/favicon.png') }}">
    
    <!-- CSS
	============================================ -->
   
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('site/assets/css/bootstrap.min.css') }}">
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{ asset('site/assets/css/icons.min.css') }}">
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('site/assets/css/plugins.css') }}">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('site/assets/css/style.css') }}">
    <!-- Modernizer JS -->
    <script src="{{ asset('site/assets/js/vendor/modernizr-3.11.7.min.js') }}"></script>
</head>

<body>
<header class="header-area">
    <div class="header-top bg-img" style="background-image:url({{ asset('site/assets/img/icon-img/header-shape.png') }});">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-7 col-12 col-sm-8">
                    <div class="header-contact">
                        <ul>
                            <li><i class="fa fa-phone"></i> +977-61-585524</li>
                            <li><i class="fa fa-envelope-o"></i><a href="#">info@miracle.edu.np</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-5 col-12 col-sm-4">
                    <div class="login-register">
                        <ul>
                            <li><a href="" class="btn btn-primary btn-sm">Book An Appointment</a></li>
                            <li><a href="" class="btn btn-secondary btn-sm">Mock Test Registration</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom sticky-bar clearfix">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-6 col-4">
                    <div class="logo">
                        <a href="{{ route('getHome') }}">
                            <img alt="" src="{{ asset('site/img/miracle_logo.png') }}" width="100">
                        </a>
                    </div>
                </div>
                <div class="col-lg-10 col-md-6 col-8">
                    <div class="menu-cart-wrap">
                        <div class="main-menu">
                            <nav>
                                <ul>
                                    <li><a href="{{ route('getHome') }}"> HOME </a></li>
                                    <li><a href="#"> ABOUT US <i class="fa fa-angle-down"></i> </a>
                                        <ul class="submenu">
                                            <li><a href="">Company Profile</a></li>
                                            <li><a href="">Our Team</a></li>
                                            <li><a href="">Our Services</a></li>
                                            <li><a href="">Why Miracle</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#"> Study Abroad <i class="fa fa-angle-down"></i> </a>
                                        <ul class="submenu">
                                            <li><a href="">USA</a></li>
                                            <li><a href="">Australia</a></li>
                                            <li><a href="">Canada</a></li>
                                            <li><a href="">UK</a></li>
                                            <li><a href="">New Zealand</a></li>
                                            <li><a href="">Japan</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#"> Test Preparation <i class="fa fa-angle-down"></i> </a>
                                        <ul class="submenu">
                                            <li><a href="">IELTS</a></li>
                                            <li><a href="">PTE</a></li>
                                            <li><a href="">TOEFL</a></li>
                                            <li><a href="">SAT</a></li>
                                            <li><a href="">ACT</a></li>
                                            <li><a href="">GRE</a></li>
                                        </ul>
                                    </li>
                                    <li><a href=""> GALLERY </a></li>
                                    <li><a href=""> News &amp; Events </a></li>
                                    <li><a href=""> CONTACT </a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="cart-search-wrap">

                            <div class="header-search">
                                <button class="search-toggle">
                                    <i class="fa fa-search"></i>
                                </button>
                                <div class="search-content">
                                    <form action="#">
                                        <input type="text" placeholder="Search">
                                        <button>
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mobile-menu-area">
                <div class="mobile-menu">
                    <nav id="mobile-menu-active">
                        <ul class="menu-overflow">
                            <li><a href="{{ route('getHome') }}">HOME</a></li>
                             <li><a href="#"> ABOUT US </a>
                                        <ul>
                                            <li><a href="">Company Profile</a></li>
                                            <li><a href="">Our Team</a></li>
                                            <li><a href="">Our Services</a></li>
                                            <li><a href="">Why Miracle</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#"> Study Abroad</a>
                                        <ul>
                                            <li><a href="">USA</a></li>
                                            <li><a href="">Australia</a></li>
                                            <li><a href="">Canada</a></li>
                                            <li><a href="">UK</a></li>
                                            <li><a href="">New Zealand</a></li>
                                            <li><a href="">Japan</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#"> Test Preparation</a>
                                        <ul>
                                            <li><a href="">IELTS</a></li>
                                            <li><a href="">PTE</a></li>
                                            <li><a href="">TOEFL</a></li>
                                            <li><a href="">SAT</a></li>
                                            <li><a href="">ACT</a></li>
                                            <li><a href="">GRE</a></li>
                                        </ul>
                                    </li>
                                    <li><a href=""> GALLERY </a></li>
                                    <li><a href=""> News &amp; Events </a></li>
                                    <li><a href=""> CONTACT </a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
@yield('content')
<div class="fun-fact-area bg-img pt-130 pb-100" style="background-image:url({{ asset('site/assets/img/bg/bg-6.jpg') }});">
    <div class="container">
        <div class="section-title-3 section-shape-hm2-2 white-text text-center mb-100">
            <h2><span>Institutions </span> We Represent</h2>
            <p>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, <br> quis nostrud exercitation ullamco laboris nisi ut aliquip </p>
        </div>
        <div class="row">
        <div class="brand-logo-active owl-carousel owl-loaded owl-drag">
             <div class="owl-stage-outer">
                <div class="owl-stage" style="transform: translate3d(-2201px, 0px, 0px); transition: 0.25s; width: 3804px;">
                <div class="owl-item cloned" style="width: 170.167px; margin-right: 30px;"><div class="single-brand-logo">
                <a href="#"><img src="{{ asset('site/assets/img/brand-logo/2.png') }}" alt=""></a>
            </div></div><div class="owl-item cloned" style="width: 170.167px; margin-right: 30px;"><div class="single-brand-logo">
                <a href="#"><img src="{{ asset('site/assets/img/brand-logo/3.png') }}" alt=""></a>
            </div></div><div class="owl-item cloned" style="width: 170.167px; margin-right: 30px;"><div class="single-brand-logo">
                <a href="#"><img src="{{ asset('site/assets/img/brand-logo/4.png') }}" alt=""></a>
            </div></div><div class="owl-item cloned" style="width: 170.167px; margin-right: 30px;"><div class="single-brand-logo">
                <a href="#"><img src="{{ asset('site/assets/img/brand-logo/5.png') }}" alt=""></a>
            </div></div><div class="owl-item cloned" style="width: 170.167px; margin-right: 30px;"><div class="single-brand-logo">
                <a href="#"><img src="{{ asset('site/assets/img/brand-logo/6.png') }}" alt=""></a>
            </div></div><div class="owl-item cloned" style="width: 170.167px; margin-right: 30px;"><div class="single-brand-logo">
                <a href="#"><img src="{{ asset('site/assets/img/brand-logo/2.png') }}" alt=""></a>
            </div></div><div class="owl-item" style="width: 170.167px; margin-right: 30px;"><div class="single-brand-logo">
                <a href="#"><img src="{{ asset('site/assets/img/brand-logo/1.png') }}" alt=""></a>
            </div></div><div class="owl-item" style="width: 170.167px; margin-right: 30px;"><div class="single-brand-logo">
                <a href="#"><img src="{{ asset('site/assets/img/brand-logo/2.png') }}" alt=""></a>
            </div></div><div class="owl-item" style="width: 170.167px; margin-right: 30px;"><div class="single-brand-logo">
                <a href="#"><img src="{{ asset('site/assets/img/brand-logo/3.png') }}" alt=""></a>
            </div></div><div class="owl-item" style="width: 170.167px; margin-right: 30px;"><div class="single-brand-logo">
                <a href="#"><img src="{{ asset('site/assets/img/brand-logo/4.png') }}" alt=""></a>
            </div></div><div class="owl-item" style="width: 170.167px; margin-right: 30px;"><div class="single-brand-logo">
                <a href="#"><img src="{{ asset('site/assets/img/brand-logo/5.png') }}" alt=""></a>
            </div></div><div class="owl-item active" style="width: 170.167px; margin-right: 30px;"><div class="single-brand-logo">
                <a href="#"><img src="{{ asset('site/assets/img/brand-logo/6.png') }}" alt=""></a>
            </div></div><div class="owl-item active" style="width: 170.167px; margin-right: 30px;"><div class="single-brand-logo">
                <a href="#"><img src="{{ asset('site/assets/img/brand-logo/2.png') }}" alt=""></a>
            </div></div><div class="owl-item cloned active" style="width: 170.167px; margin-right: 30px;"><div class="single-brand-logo">
                <a href="#"><img src="{{ asset('site/assets/img/brand-logo/1.png') }}" alt=""></a>
            </div></div><div class="owl-item cloned active" style="width: 170.167px; margin-right: 30px;"><div class="single-brand-logo">
                <a href="#"><img src="{{ asset('site/assets/img/brand-logo/2.png') }}" alt=""></a>
            </div></div><div class="owl-item cloned active" style="width: 170.167px; margin-right: 30px;"><div class="single-brand-logo">
                <a href="#"><img src="{{ asset('site/assets/img/brand-logo/3.png') }}" alt=""></a>
            </div></div><div class="owl-item cloned active" style="width: 170.167px; margin-right: 30px;"><div class="single-brand-logo">
                <a href="#"><img src="{{ asset('site/assets/img/brand-logo/4.png') }}" alt=""></a>
            </div></div><div class="owl-item cloned" style="width: 170.167px; margin-right: 30px;"><div class="single-brand-logo">
                <a href="#"><img src="{{ asset('site/assets/img/brand-logo/5.png') }}" alt=""></a>
            </div></div><div class="owl-item cloned" style="width: 170.167px; margin-right: 30px;"><div class="single-brand-logo">
                <a href="#"><img src="{{ asset('site/assets/img/brand-logo/6.png') }}" alt=""></a>
            </div></div></div></div><div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots disabled"></div></div>
    
        </div>
    </div>
</div>

<div class="brand-logo-area pb-130" style="margin-top: 130px">
    <div class="container">
        <h4>Our Accreditations</h4>
        <div class="brand-logo-active owl-carousel owl-loaded owl-drag">
             <div class="owl-stage-outer">
                <div class="owl-stage" style="transform: translate3d(-2201px, 0px, 0px); transition: 0.25s; width: 3804px;">
                <div class="owl-item cloned" style="width: 170.167px; margin-right: 30px;"><div class="single-brand-logo">
                <a href="#"><img src="{{ asset('site/assets/img/brand-logo/2.png') }}" alt=""></a>
            </div></div><div class="owl-item cloned" style="width: 170.167px; margin-right: 30px;"><div class="single-brand-logo">
                <a href="#"><img src="{{ asset('site/assets/img/brand-logo/3.png') }}" alt=""></a>
            </div></div><div class="owl-item cloned" style="width: 170.167px; margin-right: 30px;"><div class="single-brand-logo">
                <a href="#"><img src="{{ asset('site/assets/img/brand-logo/4.png') }}" alt=""></a>
            </div></div><div class="owl-item cloned" style="width: 170.167px; margin-right: 30px;"><div class="single-brand-logo">
                <a href="#"><img src="{{ asset('site/assets/img/brand-logo/5.png') }}" alt=""></a>
            </div></div><div class="owl-item cloned" style="width: 170.167px; margin-right: 30px;"><div class="single-brand-logo">
                <a href="#"><img src="{{ asset('site/assets/img/brand-logo/6.png') }}" alt=""></a>
            </div></div><div class="owl-item cloned" style="width: 170.167px; margin-right: 30px;"><div class="single-brand-logo">
                <a href="#"><img src="{{ asset('site/assets/img/brand-logo/2.png') }}" alt=""></a>
            </div></div><div class="owl-item" style="width: 170.167px; margin-right: 30px;"><div class="single-brand-logo">
                <a href="#"><img src="{{ asset('site/assets/img/brand-logo/1.png') }}" alt=""></a>
            </div></div><div class="owl-item" style="width: 170.167px; margin-right: 30px;"><div class="single-brand-logo">
                <a href="#"><img src="{{ asset('site/assets/img/brand-logo/2.png') }}" alt=""></a>
            </div></div><div class="owl-item" style="width: 170.167px; margin-right: 30px;"><div class="single-brand-logo">
                <a href="#"><img src="{{ asset('site/assets/img/brand-logo/3.png') }}" alt=""></a>
            </div></div><div class="owl-item" style="width: 170.167px; margin-right: 30px;"><div class="single-brand-logo">
                <a href="#"><img src="{{ asset('site/assets/img/brand-logo/4.png') }}" alt=""></a>
            </div></div><div class="owl-item" style="width: 170.167px; margin-right: 30px;"><div class="single-brand-logo">
                <a href="#"><img src="{{ asset('site/assets/img/brand-logo/5.png') }}" alt=""></a>
            </div></div><div class="owl-item active" style="width: 170.167px; margin-right: 30px;"><div class="single-brand-logo">
                <a href="#"><img src="{{ asset('site/assets/img/brand-logo/6.png') }}" alt=""></a>
            </div></div><div class="owl-item active" style="width: 170.167px; margin-right: 30px;"><div class="single-brand-logo">
                <a href="#"><img src="{{ asset('site/assets/img/brand-logo/2.png') }}" alt=""></a>
            </div></div><div class="owl-item cloned active" style="width: 170.167px; margin-right: 30px;"><div class="single-brand-logo">
                <a href="#"><img src="{{ asset('site/assets/img/brand-logo/1.png') }}" alt=""></a>
            </div></div><div class="owl-item cloned active" style="width: 170.167px; margin-right: 30px;"><div class="single-brand-logo">
                <a href="#"><img src="{{ asset('site/assets/img/brand-logo/2.png') }}" alt=""></a>
            </div></div><div class="owl-item cloned active" style="width: 170.167px; margin-right: 30px;"><div class="single-brand-logo">
                <a href="#"><img src="{{ asset('site/assets/img/brand-logo/3.png') }}" alt=""></a>
            </div></div><div class="owl-item cloned active" style="width: 170.167px; margin-right: 30px;"><div class="single-brand-logo">
                <a href="#"><img src="{{ asset('site/assets/img/brand-logo/4.png') }}" alt=""></a>
            </div></div><div class="owl-item cloned" style="width: 170.167px; margin-right: 30px;"><div class="single-brand-logo">
                <a href="#"><img src="{{ asset('site/assets/img/brand-logo/5.png') }}" alt=""></a>
            </div></div><div class="owl-item cloned" style="width: 170.167px; margin-right: 30px;"><div class="single-brand-logo">
                <a href="#"><img src="{{ asset('site/assets/img/brand-logo/6.png') }}" alt=""></a>
            </div></div></div></div><div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots disabled"></div></div>
    </div>
</div>
<footer class="footer-area">
    <div class="footer-top bg-img default-overlay pt-130 pb-80" style="background-image:url({{ asset('site/assets/img/bg/bg-4.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-widget mb-40">
                        <div class="footer-title">
                            <h4>ABOUT US</h4>
                        </div>
                        <div class="footer-about">
                            
                            <div class="f-contact-info">
                                <div class="single-f-contact-info">
                                    <i class="fa fa-home"></i>
                                    <span>2nd Floor, Batas Malla Complex
                                    Chipledhunga,  Pokhara-04
                                    Kaski,Gandaki, Nepal</span>
                                </div>
                                <div class="single-f-contact-info">
                                    <i class="fa fa-envelope-o"></i>
                                    <span><a href="#">info@miracle.edu.np</a></span>
                                </div>
                                <div class="single-f-contact-info">
                                    <i class="fa fa-phone"></i>
                                    <span> 
                                    +977-61-585524</span>
                                </div>
                            </div>
                            <div class="footer-social">
                            <ul>
                                <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="youtube" href="#"><i class="fa fa-youtube-play"></i></a></li>
                                <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="footer-widget mb-40">
                        <div class="footer-title">
                            <h4>QUICK LINK</h4>
                        </div>
                        <div class="footer-list">
                            <ul>
                                <li><a href="">Study in USA</a></li>
                                <li><a href="">Study in Australia</a></li>
                                <li><a href="">Study in Canada</a></li>
                                <li><a href="#">Study in UK</a></li>
                                <li><a href="#">Study in New Zealand</a></li>
                                <li><a href="#">Study in New Japan</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="footer-widget negative-mrg-30 mb-40">
                        <div class="footer-title">
                            <h4>Test Preparation</h4>
                        </div>
                        <div class="footer-list">
                            <ul>
                                <li><a href="#">IELTS </a></li>
                                <li><a href="#">TOEFL </a></li>
                                <li><a href="#">SAT</a></li>
                                <li><a href="#">GRE</a></li>
                                <li><a href="#">GMAT</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="footer-widget mb-40">
                        <div class="footer-title">
                            <h4>GALLERY</h4>
                        </div>
                        <div class="footer-gallery">
                            <ul>
                                <li><a href="#"><img src="{{ asset('site/assets/img/gallery/gallery-1.png') }}" alt=""></a></li>
                                <li><a href="#"><img src="{{ asset('site/assets/img/gallery/gallery-2.png') }}" alt=""></a></li>
                                <li><a href="#"><img src="{{ asset('site/assets/img/gallery/gallery-3.png') }}" alt=""></a></li>
                                <li><a href="#"><img src="{{ asset('site/assets/img/gallery/gallery-4.png') }}" alt=""></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="footer-widget mb-40">
                        <div class="footer-title">
                            <h4>News Latter</h4>
                        </div>
                        <div class="subscribe-style">
                            <p>Dugiat nulla pariatur. Edeserunt mollit anim id est laborum. Sed ut perspiciatis unde</p>
                            <div id="mc_embed_signup" class="subscribe-form">
                                <form id="mc-embedded-subscribe-form" class="validate" novalidate="" target="_blank" name="mc-embedded-subscribe-form" method="post" action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef">
                                    <div id="mc_embed_signup_scroll" class="mc-form">
                                        <input class="email" type="email" required="" placeholder="Your E-mail Address" name="EMAIL" value="">
                                        <div class="mc-news" aria-hidden="true">
                                            <input type="text" value="" tabindex="-1" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef">
                                        </div>
                                        <div class="clear">
                                            <input id="mc-embedded-subscribe" class="button" type="submit" name="subscribe" value="SUBMIT">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom pt-15 pb-15">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-12">
                    <div class="copyright">
                        <p>
                            Copyright &copy;
                            <a href="#">Miracle Institute</a>
                            . All Right Reserved.
                        </p>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12">
                    <div class="footer-menu-social">
                        <div class="footer-menu">
                            Powered by <a href="">Websoft Technology Nepal</a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>













<!-- JS
============================================ -->

<!-- jQuery JS -->
<script src="{{ asset('site/assets/js/vendor/jquery-v2.2.4.min.js') }}"></script>
<!-- Popper JS -->
<script src="{{ asset('site/assets/js/popper.min.js') }}"></script>
<!-- Bootstrap JS -->
<script src="{{ asset('site/assets/js/bootstrap.min.js') }}"></script>
<!-- Plugins JS -->
<script src="{{ asset('site/assets/js/plugins.js') }}"></script>
<!-- Ajax Mail -->
<script src="{{ asset('site/assets/js/ajax-mail.js') }}"></script>
<!-- Main JS -->
<script src="{{ asset('site/assets/js/main.js') }}"></script>

</body>
</html>