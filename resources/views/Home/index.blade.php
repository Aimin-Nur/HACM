<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>HACM - Healthcare & Medical Bootstrap HTML5 Template</title>
    <meta name="description" content="Medilix - Healthcare & Medical Bootstrap HTML5 Template">
    <meta name="author" content="ahmmedsabbirbd">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/imgs/favicon.svg">
    <!-- CSS here -->
    <link rel="stylesheet" href="{{ URL::asset('home/assets/css/vendor/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('home/assets/css/vendor/animate.min.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('home/assets/css/plugins/swiper.min.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('home/assets/css/vendor/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('home/assets/css/vendor/fontawesome-pro.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('home/assets/css/vendor/spacing.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('home/assets/css/plugins/odometer-theme-default.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('home/assets/css/main.css')}}">
</head>

<body class="body-1">

<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->

<!-- preloader start -->
<div id="preloader">
    <div class="preloader-close">x</div>
    <div class="sk-three-bounce">
        <div class="sk-child sk-bounce1"></div>
        <div class="sk-child sk-bounce2"></div>
        <div class="sk-child sk-bounce3"></div>
    </div>
</div>
<!-- preloader end -->

<!-- preloader start -->
<div class="loading-form">
    <div class="sk-three-bounce">
        <div class="sk-child sk-bounce1"></div>
        <div class="sk-child sk-bounce2"></div>
        <div class="sk-child sk-bounce3"></div>
    </div>
</div>
<!-- preloader end -->

<!-- Backtotop start -->
<div id="scroll-percentage">
    <span id="scroll-percentage-value"></span>
</div>
<!-- Backtotop end -->

<!-- Offcanvas area start -->
<div class="fix">
    <div class="offcanvas__area">
        <div class="offcanvas__wrapper">
            <div class="offcanvas__content">
                <div class="offcanvas__top d-flex justify-content-between align-items-center">
                    <div class="offcanvas__logo">
                        <a href="index.html">
                            <img src="assets/imgs/logo/logo-white.svg" alt="logo not found">
                        </a>
                    </div>
                    <div class="offcanvas__close">
                        <button class="offcanvas-close-icon animation--flip">
                                <span class="offcanvas-m-lines">
                              <span class="offcanvas-m-line line--1"></span><span class="offcanvas-m-line line--2"></span><span class="offcanvas-m-line line--3"></span>
                                </span>
                        </button>
                    </div>
                </div>
                <div class="mobile-menu fix"></div>
                <div class="offcanvas__social">
                    <h4 class="offcanvas__title mb-20">Subscribe & Follow</h4>
                    <p class="mb-30">Medical practices evolved over millennia, from ancient civilizations like Egypt and Mesopotamia to the groundbreaking</p>
                    <ul class="header-top-socail-menu d-flex">
                        <li><a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="https://twitter.com/"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="https://www.pinterest.com/"><i class="fa-brands fa-pinterest-p"></i></a></li>
                        <li><a href="https://vimeo.com/"><i class="fa-brands fa-vimeo-v"></i></a></li>
                    </ul>
                </div>
                <div class="offcanvas__btn d-sm-none">
                    <div class="header__btn-wrap">
                        <a href="https://themeforest.net/user/rrdevs/portfolio" class="rr-btn rr-btn__theme rr-btn__theme-white mt-40 mt-sm-35 mt-xs-30">
                            <span class="btn-wrap">
                                <span class="text-one">Purchase Now</span>
                                <span class="text-two">Purchase Now</span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="offcanvas__overlay"></div>
<div class="offcanvas__overlay-white"></div>
<!-- Offcanvas area start -->

<!-- Header area start -->
<header>
    <div id="header-sticky" class="header__area header-1">
        <div class="container">
            <div class="mega__menu-wrapper p-relative">
                <div class="header__main">
                    <div class="header__logo">
                        <a href="index.html">
                            <div class="logo">
                                <img src="assets/imgs/logo/lodgo.svg" alt="logo not found">
                            </div>
                        </a>
                    </div>

                    <div class="mean__menu-wrapper d-none d-lg-block">
                        <div class="main-menu onepagenav">
                            <nav id="mobile-menu">
                                <ul>
                                    <li class="active"><a href="#banner">Home</a></li>
                                    <li><a href="#service">Services</a></li>
                                    <li><a href="#about-us">About Us</a></li>
                                    <li><a href="#pricing">Pricing</a></li>
                                    <li><a href="#testimonial">Testimonial</a></li>
                                    <li><a href="#appointment">Appointment</a></li>
                                    <li><a href="#blog">Blog</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                    <div class="header__right">
                        <div class="header__action d-flex align-items-center">
                            <div class="header__btn-wrap d-none d-sm-inline-flex">
                                <a href="{{route('login')}}" class="rr-btn rr-btn__primary">
                                    <span class="btn-wrap">
                                        <span class="text-one">Login <i class="fa-solid fa-plus"></i></span>
                                        <span class="text-two">Login <i class="fa-solid fa-plus"></i></span>
                                    </span>
                                </a>
                            </div>

                            <div class="header__hamburger ml-20 d-xl-none">
                                <div class="sidebar__toggle">
                                    <a class="bar-icon" href="javascript:void(0)">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header area end -->

<!-- Body main wrapper start -->
<main class="body-background"> <!--for use #F2F7FD..  you can remove it any time-->
    <!-- Banner area start -->
    <section id="banner" class="banner banner__space overflow-hidden">
        <div class="container">
            <div class="banner__shape">
                <img src="{{ URL::asset('home/assets/imgs/banner/banner-shape.png')}}" alt="image not found">
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="banner__content text-center">
                        <h1 class="mb-25 mb-xs-20 title-animation">Meet Your Compassion In HACM With Us</h1>
                        <a href="about-us.html" class="rr-btn">
                            <div class="panel wow"></div>
                            <span class="btn-wrap">
                                <span class="text-one">Read More <i class="fa-solid fa-plus"></i></span>
                                <span class="text-two">Read More <i class="fa-solid fa-plus"></i></span>
                            </span>
                        </a>
                        <div class="banner__media mt-45 mt-xs-35 position-relative">
                            <div class="panel wow"></div>
                            <img class="img-fluid" data-parallax='{"scale": 1.2, "smoothness": 15}' src="{{ URL::asset('home/assets/imgs/banner/banner.jpg')}}" alt="images not found">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner area end -->

    <!-- service area start -->
    <section id="service" class="service service__space">
        <div class="container">
            <div class="row mb-minus-30">
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="service__item mb-30">
                        <div class="service__item-icon mb-20 mb-xs-15">
                            <img src="assets/imgs/service/service__item-1.png" alt="icon not found">
                        </div>

                        <h4 class="mb-25 mb-xs-20"><a href="service-details.html">Harbor Health</a></h4>

                        <p class="mb-40 mb-xs-30">Et purus duis sollicitudin sed dign issim habi tant. Egestas nulla quis venenatis Et purus </p>

                        <a class="rr-a-btn" href="service-details.html">Read More <i class="fa-solid fa-circle-plus"></i></a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="service__item mb-30">
                        <div class="service__item-icon mb-20 mb-xs-15">
                            <img src="assets/imgs/service/service__item-2.png" alt="icon not found">
                        </div>

                        <h4 class="mb-25 mb-xs-20"><a href="service-details.html">Radius Wellness</a></h4>

                        <p class="mb-40 mb-xs-30">Et purus duis sollicitudin sed dign issim habi tant. Egestas nulla quis venenatis Et purus </p>

                        <a class="rr-a-btn" href="service-details.html">Read More <i class="fa-solid fa-circle-plus"></i></a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="service__item mb-30">
                        <div class="service__item-icon mb-20 mb-xs-15">
                            <img src="assets/imgs/service/service__item-3.png" alt="icon not found">
                        </div>

                        <h4 class="mb-25 mb-xs-20"><a href="service-details.html">Radius Wellness</a></h4>

                        <p class="mb-40 mb-xs-30">Et purus duis sollicitudin sed dign issim habi tant. Egestas nulla quis venenatis Et purus </p>

                        <a class="rr-a-btn" href="service-details.html">Read More <i class="fa-solid fa-circle-plus"></i></a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="service__item mb-30">
                        <div class="service__item-icon mb-20 mb-xs-15">
                            <img src="assets/imgs/service/service__item-4.png" alt="icon not found">
                        </div>

                        <h4 class="mb-25 mb-xs-20"><a href="service-details.html">Net Healthcare</a></h4>

                        <p class="mb-40 mb-xs-30">Et purus duis sollicitudin sed dign issim habi tant. Egestas nulla quis venenatis Et purus </p>

                        <a class="rr-a-btn" href="service-details.html">Read More <i class="fa-solid fa-circle-plus"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- service area end -->

    <!-- about-us area start -->
    <section id="about-us" class="about-us section-space overflow-hidden">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6">
                    <div class="section__title-wrapper about-us__content">
                        <h5 class="section__subtitle color-theme-primary mb-15 mb-xs-10 title-animation"><img src="assets/imgs/ask-quesiton/heart.png" alt="icon not found" class="img-fluid"> About us</h5>
                        <h2 class="section__title mb-30 mb-xs-20 title-animation">Nurture Nature Blossoming in Health and Happiness</h2>

                        <p class="mb-30 mb-xs-25">Et purus duis sollicitudin dignissim habitant. Egestas nulla quis venenatis cras sed eu massa eu faucibus Urna fusce Et purus duis sollicitudin dignissim habitant.</p>

                        <div class="skill-one__progress">
                            <div class="skill-one__progress-single">
                                <h5 class="skill-one__progress-title mb-10">Last mile delivery</h5>
                                <div class="bar">
                                    <div class="bar-inner count-bar counted" data-percent="90%">
                                        <div class="count-text">90%</div>
                                    </div>
                                </div>
                            </div>
                            <div class="skill-one__progress-single">
                                <h5 class="skill-one__progress-title mb-10">Cross docking </h5>
                                <div class="bar">
                                    <div class="bar-inner count-bar counted" data-percent="76%">
                                        <div class="count-text">76%</div>
                                    </div>
                                </div>
                            </div>
                            <div class="skill-one__progress-single">
                                <h5 class="skill-one__progress-title mb-10">Inventory management </h5>
                                <div class="bar">
                                    <div class="bar-inner count-bar counted" data-percent="76%">
                                        <div class="count-text">80%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="about-us__media d-flex flex-column flex-sm-row align-items-sm-start align-items-center justify-content-xl-end justify-content-center">
                        <img class="img-fluid about-us__media-big-shape" src="assets/imgs/about-us/shape-big.png" alt="icon not found">

                        <div class="about-us__media-experience-box__wrapper text-end">
                            <div class="about-us__media-img img1">
                                <img class="img-fluid shape downUp" src="assets/imgs/about-us/shape-2.png" alt="icon not found">
                                <img class="img-fluid" src="assets/imgs/about-us/about-us__media-1.jpg" alt="icon not found">
                            </div>
                            <div class="about-us__media-experience-box d-inline-flex mt-20 text-start">
                                <h2 class="mb-0"><span class="odometer" data-count="25">0</span></h2>
                                <p class="mb-0">Years Of experience</p>
                            </div>
                        </div>
                        <div class="about-us__media-img img2">
                            <img class="img-fluid shape upDown" src="assets/imgs/about-us/shape-1.png" alt="icon not found">
                            <img class="img-fluid" src="assets/imgs/about-us/about-us__media-2.jpg" alt="icon not found">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-us area end -->

    <!-- treatment-process area start -->
    <section class="treatment-process section-space__bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section__title-wrapper treatment-process__content text-center mb-60 mb-xs-40">
                        <h2 class="section__title mb-20 mb-xs-15 title-animation">Our Workshop Agenda</h2>
                        <p class="mb-0">Medical science encompasses a vast array of fields dedicated to understanding and treating ailments, promoting health, and enhanci quality of life. Here's a brief exploration into this multifaceted</p>
                    </div>

                    <div class="treatment-process__media mb-30">
                        <img class="img-fluid" data-parallax='{"scale": 1.2, "smoothness": 15}' src="assets/imgs/treatment-process/treatment-process.jpg" alt="image not found">

                        <a href="https://www.youtube.com/watch?v=dyNpojnbNT4" class="popup-video zooming" data-effect="mfp-move-from-top vertical-middle">
                            <i class="fa-thin fa-play"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="row mb-minus-30">
                <div class="col-xxl-3 col-lg-4 col-md-6">
                    <div class="treatment-process__item mb-30 text-center">
                        <div class="treatment-process__item-icon mb-20 mb-xs-15">
                            <img src="assets/imgs/treatment-process/treatment-process__item-1.png" alt="icon not found">
                        </div>
                        <h4 class="mb-15 mb-xs-10"><a href="service-details.html">Catalyst Services</a></h4>
                        <p class="mb-0">Et purus duis sollicitudin sed dign issim habi tant.</p>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-4 col-md-6">
                    <div class="treatment-process__item mb-30 text-center">
                        <div class="treatment-process__item-icon mb-20 mb-xs-15">
                            <img src="assets/imgs/treatment-process/treatment-process__item-2.png" alt="icon not found">
                        </div>
                        <h4 class="mb-15 mb-xs-10"><a href="service-details.html">Wave Solutions</a></h4>
                        <p class="mb-0">Et purus duis sollicitudin sed dign issim habi tant.</p>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-4 col-md-6">
                    <div class="treatment-process__item mb-30 text-center">
                        <div class="treatment-process__item-icon mb-20 mb-xs-15">
                            <img src="assets/imgs/treatment-process/treatment-process__item-3.png" alt="icon not found">
                        </div>
                        <h4 class="mb-15 mb-xs-10"><a href="service-details.html">Health Hub</a></h4>
                        <p class="mb-0">Et purus duis sollicitudin sed dign issim habi tant.</p>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-4 col-md-6">
                    <div class="treatment-process__item mb-30 text-center">
                        <div class="treatment-process__item-icon mb-20 mb-xs-15">
                            <img src="assets/imgs/treatment-process/treatment-process__item-4.png" alt="icon not found">
                        </div>
                        <h4 class="mb-15 mb-xs-10"><a href="service-details.html">Weave Solutions</a></h4>
                        <p class="mb-0">Et purus duis sollicitudin sed dign issim habi tant.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- treatment-process area end -->

    <!-- pricing area start -->
    <section id="pricing" class="pricing section-space__bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section__title-wrapper text-center mb-60 mb-xs-40">
                        <h2 class="section__title mb-0 title-animation">Cost Breakdown Summary</h2>
                    </div>
                </div>
            </div>

            <div class="row mb-minus-30">
                <div class="col-xl-4 col-md-6">
                    <div class="pricing__item mb-30">
                        <h3 class="mb-15 mb-xs-10">Consult</h3>

                        <h2 class="pricing__item-price mb-25 mb-xs-20">Rp.400.000 <span class="body-font"></span></h2>

                        <p class="mb-20 pb-20 pricing__item__border-bottom">Lorem Ipsum is simply dummy text the printing and typese Lorem Ipsum</p>

                        <div class="pricing__item-body">
                            <ul>
                                <li><i class="fa-solid fa-angle-right"></i> Mistakes To Avoid</li>
                                <li><i class="fa-solid fa-angle-right"></i> Your Startup</li>
                                <li><i class="fa-solid fa-angle-right"></i> Knew About Fonts</li>
                                <li><i class="fa-solid fa-angle-right"></i> Knew About Fonts</li>
                            </ul>
                        </div>

                        <a href="pricing.html" class="rr-btn mt-40 mt-xs-30">
                            <span class="btn-wrap">
                                <span class="text-one">Start now <i class="fa-solid fa-circle-plus"></i></span>
                                <span class="text-two">Start now <i class="fa-solid fa-circle-plus"></i></span>
                            </span>
                        </a>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6">
                    <div class="pricing__item active mb-30">
                        <h3 class="mb-15 mb-xs-10">Intensive</h3>

                        <h2 class="pricing__item-price mb-25 mb-xs-20">Rp.500.000 <span class="body-font"></span></h2>

                        <p class="mb-20 pb-20 pricing__item__border-bottom">Lorem Ipsum is simply dummy text the printing and typese Lorem Ipsum</p>

                        <div class="pricing__item-body">
                            <ul>
                                <li><i class="fa-solid fa-angle-right"></i> Mistakes To Avoid</li>
                                <li><i class="fa-solid fa-angle-right"></i> Your Startup</li>
                                <li><i class="fa-solid fa-angle-right"></i> Knew About Fonts</li>
                                <li><i class="fa-solid fa-angle-right"></i> Knew About Fonts</li>
                            </ul>
                        </div>

                        <a href="pricing.html" class="rr-btn mt-40 mt-xs-30">
                            <span class="btn-wrap">
                                <span class="text-one">Start now <i class="fa-solid fa-circle-plus"></i></span>
                                <span class="text-two">Start now <i class="fa-solid fa-circle-plus"></i></span>
                            </span>
                        </a>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6">
                    <div class="pricing__item mb-30">
                        <h3 class="mb-15 mb-xs-10">Private</h3>

                        <h2 class="pricing__item-price mb-25 mb-xs-20">Rp.600.000 <span class="body-font"></span></h2>

                        <p class="mb-20 pb-20 pricing__item__border-bottom">Lorem Ipsum is simply dummy text the printing and typese Lorem Ipsum</p>

                        <div class="pricing__item-body">
                            <ul>
                                <li><i class="fa-solid fa-angle-right"></i> Mistakes To Avoid</li>
                                <li><i class="fa-solid fa-angle-right"></i> Your Startup</li>
                                <li><i class="fa-solid fa-angle-right"></i> Knew About Fonts</li>
                                <li><i class="fa-solid fa-angle-right"></i> Knew About Fonts</li>
                            </ul>
                        </div>

                        <a href="pricing.html" class="rr-btn mt-40 mt-xs-30">
                            <span class="btn-wrap">
                                <span class="text-one">Start now <i class="fa-solid fa-circle-plus"></i></span>
                                <span class="text-two">Start now <i class="fa-solid fa-circle-plus"></i></span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- pricing area end -->

    <!-- testimonial area start -->
    <section id="testimonial" class="testimonial section-space__bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6">
                    <div class="testimonial__media">
                        <img class="img-fluid" src="assets/imgs/testimonial/testimonial.png" alt="image not found">
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="swiper testimonial__slider mt-lg-40 mt-md-40 mt-sm-40 mt-xs-40">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testimonial__item">
                                    <div class="testimonial__item-icon mb-20 mb-xs-15">
                                        <img class="img-fluid" src="assets/imgs/testimonial/qoute.png" alt="icon not found">
                                    </div>

                                    <div class="testimonial__item-content mb-35 mb-xs-30">
                                        <p class="mb-0">Leverage agile frameworks to provide a robust synopsis for strategy foster Leverage agile frame works to provide a robust synopsis for strateg foster collaborative thinking to further</p>
                                    </div>

                                    <div class="testimonial__item-author d-flex align-items-center">
                                        <div class="testimonial__item-thumb">
                                            <img class="img-fluid" src="assets/imgs/testimonial/thumb.png" alt="icon not found">
                                        </div>
                                        <div class="testimonial__item-text">
                                            <h4>Eleanor Pena</h4>
                                            <p class="mb-0">Fuel Company</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial__item">
                                    <div class="testimonial__item-icon mb-20 mb-xs-15">
                                        <img class="img-fluid" src="assets/imgs/testimonial/qoute.png" alt="icon not found">
                                    </div>

                                    <div class="testimonial__item-content mb-35 mb-xs-30">
                                        <p class="mb-0">Leverage agile frameworks to provide a robust synopsis for strategy foster Leverage agile frame works to provide a robust synopsis for strateg foster collaborative thinking to further</p>
                                    </div>

                                    <div class="testimonial__item-author d-flex align-items-center">
                                        <div class="testimonial__item-thumb">
                                            <img class="img-fluid" src="assets/imgs/testimonial/thumb.png" alt="icon not found">
                                        </div>
                                        <div class="testimonial__item-text">
                                            <h4>Eleanor Pena</h4>
                                            <p class="mb-0">Fuel Company</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial__slider__arrow d-flex">
                            <div class="testimonial__slider__arrow-prev">
                                <svg width="51" height="16" viewBox="0 0 51 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.292893 7.29289C-0.0976311 7.68342 -0.0976311 8.31658 0.292893 8.70711L6.65685 15.0711C7.04738 15.4616 7.68054 15.4616 8.07107 15.0711C8.46159 14.6805 8.46159 14.0474 8.07107 13.6569L2.41421 8L8.07107 2.34315C8.46159 1.95262 8.46159 1.31946 8.07107 0.928932C7.68054 0.538408 7.04738 0.538408 6.65685 0.928932L0.292893 7.29289ZM1 9H51V7H1V9Z" fill="#071C3C"/>
                                </svg>
                            </div>

                            <div class="testimonial__slider__arrow-next">
                                <svg width="51" height="16" viewBox="0 0 51 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M50.7071 7.29289C51.0976 7.68342 51.0976 8.31658 50.7071 8.70711L44.3431 15.0711C43.9526 15.4616 43.3195 15.4616 42.9289 15.0711C42.5384 14.6805 42.5384 14.0474 42.9289 13.6569L48.5858 8L42.9289 2.34315C42.5384 1.95262 42.5384 1.31946 42.9289 0.928932C43.3195 0.538408 43.9526 0.538408 44.3431 0.928932L50.7071 7.29289ZM50 9H2.98023e-08V7H50V9Z" fill="#071C3C"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial area end -->

    <!-- ask-question area start -->
    <section class="ask-question section-space__top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="section__title-wrapper ask-question__content mb-40 mb-xs-30">
                        <h5 class="section__subtitle color-theme-primary mb-15 mb-xs-10 title-animation"><img src="assets/imgs/ask-quesiton/heart.png" alt="icon not found" class="img-fluid"> Ask Question</h5>
                        <h2 class="section__title mb-0 title-animation">Healing Harmony Uniting Care and Compassion by HACM</h2>
                    </div>

                    <div class="rr__faq">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h5 class="accordion-header" id="headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        How Your Path to Ultimate Wellness?
                                    </button>
                                </h5>
                                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Lorem Ipsum is simply dummy text the printing and typese Lorem Ipsum has been the industry's standard dummy text ever</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h5 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapse" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                        Where Your Health Finds a Home?
                                    </button>
                                </h5>
                                <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Lorem Ipsum is simply dummy text the printing and typese Lorem Ipsum has been the industry's standard dummy text ever</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h5 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                        Where Your Health Finds a Home?
                                    </button>
                                </h5>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Lorem Ipsum is simply dummy text the printing and typese Lorem Ipsum has been the industry's standard dummy text ever</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="ask-question__media text-lg-end text-center mt-xs-40 mt-sm-40 mt-md-40 position-relative overflow-hidden">
                        <img class="img-fluid" src="assets/imgs/ask-quesiton/ask-question.png" alt="image not found">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ask-question area end -->

    <!-- Brand area start -->
    <div class="brand__area section-space">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="swiper brand__active">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="brand__item text-center">
                                    <div class="brand__thumb">
                                        <img class="img-fluid" src="assets/imgs/brand/brand-1.png" alt="image not found">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand__item text-center">
                                    <div class="brand__thumb">
                                        <img class="img-fluid" src="assets/imgs/brand/brand-2.png" alt="image not found">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand__item text-center">
                                    <div class="brand__thumb">
                                        <img class="img-fluid" src="assets/imgs/brand/brand-3.png" alt="image not found">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand__item text-center">
                                    <div class="brand__thumb">
                                        <img class="img-fluid" src="assets/imgs/brand/brand-4.png" alt="image not found">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand__item text-center">
                                    <div class="brand__thumb">
                                        <img class="img-fluid" src="assets/imgs/brand/brand-5.png" alt="image not found">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Brand area end -->

    <!-- team area start -->
    <section class="team section-space__bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section__title-wrapper text-center mb-60 mb-xs-40">
                        <h2 class="section__title mb-0 title-animation">Board Members</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="swiper team__slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="team__item">
                                    <div class="team__item-media">
                                        <img class="img-fluid" src="assets/imgs/team/team__item-1.jpg" alt="image not found">
                                    </div>

                                    <div class="team__item-content">
                                        <div class="team__item-content-left">
                                            <h4 class="mb-10"><a href="doctor-details.html">Kathryn Murphy</a></h4>
                                            <p class="mb-0">Medical Assistant</p>
                                        </div>

                                        <div class="team__item-content-right">
                                            <div class="team__item-content-share">
                                                <a href="https://x.com/">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M9.52217 6.77686L15.4785 0.00195312H14.0671L8.89516 5.88451L4.76437 0.00195312H0L6.24656 8.89742L0 16.002H1.41155L6.87321 9.78977L11.2356 16.002H16L9.52183 6.77686H9.52217ZM7.58887 8.97579L6.95596 8.09L1.92015 1.04169H4.0882L8.15216 6.72991L8.78507 7.61569L14.0677 15.0095H11.8997L7.58887 8.97613V8.97579Z" fill="#071C3C"/>
                                                    </svg>
                                                </a>
                                                <a href="https://www.facebook.com/"><i class="fa-brands fa-facebook-f"></i></a>
                                                <a href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a>
                                                <a href="https://bd.linkedin.com/"><i class="fa-brands fa-linkedin-in"></i></a>
                                            </div>
                                            <button><i class="fa-regular fa-share-nodes"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="team__item">
                                    <div class="team__item-media">
                                        <img class="img-fluid" src="assets/imgs/team/team__item-2.jpg" alt="image not found">
                                    </div>

                                    <div class="team__item-content">
                                        <div class="team__item-content-left">
                                            <h4 class="mb-10"><a href="doctor-details.html">Savannah Nguyen</a></h4>
                                            <p class="mb-0">Medical Assistant</p>
                                        </div>

                                        <div class="team__item-content-right">
                                            <div class="team__item-content-share">
                                                <a href="https://x.com/">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M9.52217 6.77686L15.4785 0.00195312H14.0671L8.89516 5.88451L4.76437 0.00195312H0L6.24656 8.89742L0 16.002H1.41155L6.87321 9.78977L11.2356 16.002H16L9.52183 6.77686H9.52217ZM7.58887 8.97579L6.95596 8.09L1.92015 1.04169H4.0882L8.15216 6.72991L8.78507 7.61569L14.0677 15.0095H11.8997L7.58887 8.97613V8.97579Z" fill="#071C3C"/>
                                                    </svg>
                                                </a>
                                                <a href="https://www.facebook.com/"><i class="fa-brands fa-facebook-f"></i></a>
                                                <a href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a>
                                                <a href="https://bd.linkedin.com/"><i class="fa-brands fa-linkedin-in"></i></a>
                                            </div>
                                            <button><i class="fa-regular fa-share-nodes"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="team__item">
                                    <div class="team__item-media">
                                        <img class="img-fluid" src="assets/imgs/team/team__item-3.jpg" alt="image not found">
                                    </div>

                                    <div class="team__item-content">
                                        <div class="team__item-content-left">
                                            <h4 class="mb-10"><a href="doctor-details.html">Courtney Henry</a></h4>
                                            <p class="mb-0">Medical Assistant</p>
                                        </div>

                                        <div class="team__item-content-right">
                                            <div class="team__item-content-share">
                                                <a href="https://x.com/">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M9.52217 6.77686L15.4785 0.00195312H14.0671L8.89516 5.88451L4.76437 0.00195312H0L6.24656 8.89742L0 16.002H1.41155L6.87321 9.78977L11.2356 16.002H16L9.52183 6.77686H9.52217ZM7.58887 8.97579L6.95596 8.09L1.92015 1.04169H4.0882L8.15216 6.72991L8.78507 7.61569L14.0677 15.0095H11.8997L7.58887 8.97613V8.97579Z" fill="#071C3C"/>
                                                    </svg>
                                                </a>
                                                <a href="https://www.facebook.com/"><i class="fa-brands fa-facebook-f"></i></a>
                                                <a href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a>
                                                <a href="https://bd.linkedin.com/"><i class="fa-brands fa-linkedin-in"></i></a>
                                            </div>
                                            <button><i class="fa-regular fa-share-nodes"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="team__item">
                                    <div class="team__item-media">
                                        <img class="img-fluid" src="assets/imgs/team/team__item-1.jpg" alt="image not found">
                                    </div>

                                    <div class="team__item-content">
                                        <div class="team__item-content-left">
                                            <h4 class="mb-10"><a href="doctor-details.html">Kathryn Murphy</a></h4>
                                            <p class="mb-0">Medical Assistant</p>
                                        </div>

                                        <div class="team__item-content-right">
                                            <div class="team__item-content-share">
                                                <a href="https://x.com/">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M9.52217 6.77686L15.4785 0.00195312H14.0671L8.89516 5.88451L4.76437 0.00195312H0L6.24656 8.89742L0 16.002H1.41155L6.87321 9.78977L11.2356 16.002H16L9.52183 6.77686H9.52217ZM7.58887 8.97579L6.95596 8.09L1.92015 1.04169H4.0882L8.15216 6.72991L8.78507 7.61569L14.0677 15.0095H11.8997L7.58887 8.97613V8.97579Z" fill="#071C3C"/>
                                                    </svg>
                                                </a>
                                                <a href="https://www.facebook.com/"><i class="fa-brands fa-facebook-f"></i></a>
                                                <a href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a>
                                                <a href="https://bd.linkedin.com/"><i class="fa-brands fa-linkedin-in"></i></a>
                                            </div>
                                            <button><i class="fa-regular fa-share-nodes"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="team__item">
                                    <div class="team__item-media">
                                        <img class="img-fluid" src="{{ URL::asset('home/assets/imgs/team/team__item-2.jpg')}}" alt="image not found">
                                    </div>

                                    <div class="team__item-content">
                                        <div class="team__item-content-left">
                                            <h4 class="mb-10"><a href="doctor-details.html">Savannah Nguyen</a></h4>
                                            <p class="mb-0">Medical Assistant</p>
                                        </div>

                                        <div class="team__item-content-right">
                                            <div class="team__item-content-share">
                                                <a href="https://x.com/">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M9.52217 6.77686L15.4785 0.00195312H14.0671L8.89516 5.88451L4.76437 0.00195312H0L6.24656 8.89742L0 16.002H1.41155L6.87321 9.78977L11.2356 16.002H16L9.52183 6.77686H9.52217ZM7.58887 8.97579L6.95596 8.09L1.92015 1.04169H4.0882L8.15216 6.72991L8.78507 7.61569L14.0677 15.0095H11.8997L7.58887 8.97613V8.97579Z" fill="#071C3C"/>
                                                    </svg>
                                                </a>
                                                <a href="https://www.facebook.com/"><i class="fa-brands fa-facebook-f"></i></a>
                                                <a href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a>
                                                <a href="https://bd.linkedin.com/"><i class="fa-brands fa-linkedin-in"></i></a>
                                            </div>
                                            <button><i class="fa-regular fa-share-nodes"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="team__item">
                                    <div class="team__item-media">
                                        <img class="img-fluid" src="{{ URL::asset('home/assets/imgs/team/team__item-3.jpg')}}" alt="image not found">
                                    </div>

                                    <div class="team__item-content">
                                        <div class="team__item-content-left">
                                            <h4 class="mb-10"><a href="doctor-details.html">Courtney Henry</a></h4>
                                            <p class="mb-0">Medical Assistant</p>
                                        </div>

                                        <div class="team__item-content-right">
                                            <div class="team__item-content-share">
                                                <a href="https://x.com/">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M9.52217 6.77686L15.4785 0.00195312H14.0671L8.89516 5.88451L4.76437 0.00195312H0L6.24656 8.89742L0 16.002H1.41155L6.87321 9.78977L11.2356 16.002H16L9.52183 6.77686H9.52217ZM7.58887 8.97579L6.95596 8.09L1.92015 1.04169H4.0882L8.15216 6.72991L8.78507 7.61569L14.0677 15.0095H11.8997L7.58887 8.97613V8.97579Z" fill="#071C3C"/>
                                                    </svg>
                                                </a>
                                                <a href="https://www.facebook.com/"><i class="fa-brands fa-facebook-f"></i></a>
                                                <a href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a>
                                                <a href="https://bd.linkedin.com/"><i class="fa-brands fa-linkedin-in"></i></a>
                                            </div>
                                            <button><i class="fa-regular fa-share-nodes"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="team__scrollbar mt-80 mt-sm-60 mt-xs-45"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- team area end -->

    <!-- take-appointment area start -->
    <section id="appointment" class="take-appointment section-space overflow-hidden">
        <div class="container">
            <div class="take-appointment__container-shape" data-background="assets/imgs/take-appointment/container-shape.png">
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="section__title-wrapper take-appointment__content">
                        <h5 class="section__subtitle color-theme-primary mb-15 mb-xs-10 title-animation"><img src="assets/imgs/ask-quesiton/heart.png" alt="icon not found" class="img-fluid"> Take appointment</h5>
                        <h2 class="section__title mb-20 mb-xs-15 title-animation">Infinite Wellness Where Possibilities Unfold</h2>

                        <p class="mb-30 mb-xs-25">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet rcus nunc. Duis egestas ac ante sed  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet rcus nunc. Duis egestas ac ante sed </p>

                        <div class="take-appointment__call d-flex align-items-center">
                            <div class="take-appointment__call-icon">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div class="take-appointment__call-text">
                                <p class="mb-0">Requesting A Call:</p>
                                <h5 class="mb-0"><a href="tel:6295550129">(+62) 878-12364164</a></h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="take-appointment__form mt-md-50 mt-sm-40 mt-xs-40">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="take-appointment__form-input">
                                    <label for="name">Your name</label>
                                    <div class="input-wrapper">
                                        <input name="name" id="name" type="text" placeholder="Your name...">
                                        <i class="fa-solid fa-user"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="take-appointment__form-input">
                                    <label for="phone">Your Phone</label>
                                    <div class="input-wrapper">
                                        <input name="phone" id="phone" type="text" placeholder="Your phone...">
                                        <i class="fa-solid fa-phone"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="take-appointment__form-input">
                                    <label for="phone">health type</label>
                                    <div class="take-appointment__form-input-select">
                                        <select id="health">
                                            <option>Choose one...</option>
                                            <option>Good</option>
                                            <option>Very Good</option>
                                            <option>Week</option>
                                            <option>Very Week</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="take-appointment__form-input">
                                    <label for="email">Your Email</label>
                                    <div class="input-wrapper">
                                        <input name="email" id="email" type="text" placeholder="Your email...">
                                        <i class="fa-solid fa-paper-plane"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="take-appointment__form-input">
                                    <label for="phone">Select doctor</label>
                                    <div class="take-appointment__form-input-select">
                                        <select id="doctor">
                                            <option>Your doctor...</option>
                                            <option>Dr. Paul</option>
                                            <option>Dr. Sabbir</option>
                                            <option>Dr. Rubel</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="take-appointment__form-input">
                                    <label for="datepicker">Select Date</label>
                                    <div class="input-wrapper">
                                        <input id="datepicker" name="date" type="text" placeholder="YY/MM/DD">
                                        <i class="fa-solid fa-calendar-days"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="rr-btn rr-btn__primary-color mt-10 mt-xs-10">
                                    <span class="btn-wrap">
                                        <span class="text-one">Appointment now <i class="fa-solid fa-plus"></i></span>
                                        <span class="text-two">Appointment now <i class="fa-solid fa-plus"></i></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- take-appointment area end -->

    <!-- blog area start -->
    <section id="blog" class="blog section-space__bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section__title-wrapper text-center mb-60 mb-xs-40">
                        <h2 class="section__title mb-0 title-animation">Latest Blog Hub</h2>
                    </div>
                </div>
            </div>

            <div class="row mb-minus-30">
                <div class="col-xl-4 col-md-6">
                    <div class="blog__item mb-30">
                        <a href="blog-details.html" class="blog__item-media d-block position-relative overflow-hidden">
                            <div class="panel wow"></div>
                            <img class="img-fluid" src="assets/imgs/blog/blog-item-1.jpg" alt="image not found">
                        </a>

                        <div class="blog__item-content">
                            <div class="blog__item-content-date mb-15 mb-xs-10"><i class="fa-solid fa-calendar-days"></i> <span>October 19, 2022</span></div>
                            <h4 class="mb-15 mb-xs-10"><a href="blog-details.html">Optimal Oasis Nurturing Health in Every Aspect</a></h4>
                            <p class="mb-40 mb-xs-30">Explore the dynamic commerce through our insightful blogs. Learn Explore the dynamic</p>

                            <a class="rr-a-btn" href="blog-details.html">View More <i class="fa-solid fa-circle-plus"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6">
                    <div class="blog__item mb-30">
                        <a href="blog-details.html" class="blog__item-media d-block position-relative overflow-hidden">
                            <div class="panel wow"></div>
                            <img class="img-fluid" src="assets/imgs/blog/blog-item-2.jpg" alt="image not found">
                        </a>

                        <div class="blog__item-content">
                            <div class="blog__item-content-date mb-15 mb-xs-10"><i class="fa-solid fa-calendar-days"></i> <span>October 19, 2022</span></div>
                            <h4 class="mb-15 mb-xs-10"><a href="blog-details.html">Embark on Health Wellness Begins</a></h4>
                            <p class="mb-40 mb-xs-30">Explore the dynamic commerce through our insightful blogs. Learn Explore the dynamic</p>

                            <a class="rr-a-btn" href="blog-details.html">View More <i class="fa-solid fa-circle-plus"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6">
                    <div class="blog__item mb-30">
                        <a href="blog-details.html" class="blog__item-media d-block position-relative overflow-hidden">
                            <div class="panel wow"></div>
                            <img class="img-fluid" src="assets/imgs/blog/blog-item-3.jpg" alt="image not found">
                        </a>

                        <div class="blog__item-content">
                            <div class="blog__item-content-date mb-15 mb-xs-10"><i class="fa-solid fa-calendar-days"></i> <span>October 19, 2022</span></div>
                            <h4 class="mb-15 mb-xs-10"><a href="blog-details.html">Flourishing Healthier Revive Radiance</a></h4>
                            <p class="mb-40 mb-xs-30">Explore the dynamic commerce through our insightful blogs. Learn Explore the dynamic</p>

                            <a class="rr-a-btn" href="blog-details.html">View More <i class="fa-solid fa-circle-plus"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog area end -->

</main>
<!-- Body main wrapper end -->

<section class="footer__cta footer__cta-bottom-up theme-bg-1">
    <div class="container">
        <div class="row mb-minus-30">
            <div class="col-md-6">
                <div class="footer__cta-item mb-30 theme-bg-primary d-flex flex-lg-row flex-column align-items-lg-center">
                    <div class="footer__cta-item-icon d-flex align-items-center justify-content-center">
                        <img class="img-fluid" src="assets/imgs/footer__cta/footer__cta-item-1.png" alt="icon not found">
                    </div>

                    <div class="footer__cta-item-text">
                        <h4 class="color-white mb-15 mb-10">HACM Purpose Event</h4>
                        <p class="color-white mb-0">Et purus duis sollicitudin dignissim habitant. Egestas nulla quis venenatis cras sed eu massa eu faucibus</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="footer__cta-item mb-30 theme-bg-glow d-flex flex-lg-row flex-column align-items-lg-center">
                    <div class="footer__cta-item-icon d-flex align-items-center justify-content-center">
                        <img class="img-fluid" src="assets/imgs/footer__cta/footer__cta-item-2.png" alt="icon not found">
                    </div>

                    <div class="footer__cta-item-text">
                        <h4 class="color-white mb-15 mb-10">HACM Purpose Eventr</h4>
                        <p class="color-white mb-0">Et purus duis sollicitudin dignissim habitant. Egestas nulla quis venenatis cras sed eu massa eu faucibus</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Footer area start -->
<footer>
    <section class="footer__area-common white-bg overflow-hidden" data-background="assets/imgs/footer/background.png">
        <div class="container">
            <div class="row mb-minus-50">
                <div class="col-lg-3 col-6">
                    <div class="footer__widget footer__widget-item-1">
                        <div class="footer__logo mb-30 mb-xs-25">
                            <a href="index.html">
                                <img class="img-fluid" src="assets/imgs/logo/footers-logo.svg" alt="logo not found">
                            </a>
                        </div>

                        <div class="footer__content">
                            <p class="mb-0">It is a long established fact that a reader will be distracted</p>
                        </div>

                        <div class="footer__social mt-30 mt-xs-30">
                            <a href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a>
                            <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://twitter.com/">
                                <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.0596 6.77295L15.8879 -0.00195312H14.5068L9.44607 5.8806L5.40411 -0.00195312H0.742188L6.85442 8.89352L0.742188 15.998H2.12338L7.4676 9.78587L11.7362 15.998H16.3981L10.0593 6.77295H10.0596ZM8.16787 8.97189L7.54857 8.0861L2.62104 1.03779H4.74248L8.71905 6.726L9.33834 7.61179L14.5074 15.0056H12.386L8.16787 8.97223V8.97189Z" fill="#071C3C"/>
                                </svg>
                            </a>
                            <a href="https://www.linkedin.com/"><i class="fa-brands fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-6">
                    <div class="footer__widget footer__widget-item-2">
                        <div class="footer__widget-title">
                            <h4>Services</h4>
                        </div>
                        <div class="footer__link">
                            <ul>
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="about-us.html">Get a Appointment</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-6">
                    <div class="footer__widget footer__widget-item-3">
                        <div class="footer__widget-title">
                            <h4>Our newsletter</h4>
                        </div>

                        <div class="footer__subscribe-content">
                            <p class="mb-30 mb-xs-25">Custom Software Development Tailored Solutions for Your Business Custom </p>

                            <div class="footer__subscribe d-flex mt-30 mt-xs-25">
                                <input type="text" placeholder="Enter e-mail">
                                <button type="submit" class="rr-btn rr-btn__theme">
                                <span class="btn-wrap">
                                    <span class="text-one"><i class="fa-solid fa-paper-plane"></i></span>

                                    <span class="text-two"><i class="fa-solid fa-paper-plane"></i></span>
                                </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <div class="footer__widget footer__widget-item-4">
                        <div class="footer__widget-title">
                            <h4>Our Office</h4>
                        </div>

                        <div class="footer__link footer__link-location">
                            <ul>
                                <li><a href="mailto:debra.holt@example.com"><i class="fa-solid fa-envelope"></i> hacm@gmail.com</a></li>
                                <li><a href="https://maps.app.goo.gl/4XYAPDmpesGnSbsC8"><i class="fa-solid fa-location-dot"></i> Office Building Nipah Park</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer__bottom-wrapper">
            <div class="container">
                <div class="footer__bottom">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="footer__copyright text-lg-start text-center">
                                <p class="mb-0">© <a href="index.html">Aiminnur</a>  2024 | All Rights Reserved</p>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="footer__copyright-menu">
                                <ul>
                                    <li><a href="about-us.html">Trams & Condition</a></li>
                                    <li><a href="about-us.html">Privacy Policy</a></li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</footer>
<!-- Footer area end -->

<!-- JS here -->
<script src="{{ URL::asset('home/assets/js/vendor/jquery-3.7.1.min.js')}}"></script>
<script src="{{ URL::asset('home/assets/js/plugins/waypoints.min.js')}}"></script>
<script src="{{ URL::asset('home/assets/js/vendor/bootstrap.bundle.min.js')}}"></script>
<script src="{{ URL::asset('home/assets/js/plugins/meanmenu.min.js')}}"></script>
<script src="{{ URL::asset('home/assets/js/plugins/odometer.min.js')}}"></script>
<script src="{{ URL::asset('home/}assets/js/plugins/swiper.min.js')}}"></script>
<script src="{{ URL::asset('home/ssets/js/plugins/wow.js')}}a"></script>
<script src="{{ URL::asset('home/assets/js/vendor/magnific-popup.min.js')}}"></script>
<script src="{{ URL::asset('home/assets/js/vendor/type.js')}}"></script>
<script src="{{ URL::asset('home/assets/js/plugins/nice-select.min.js')}}"></script>
<script src="{{ URL::asset('home/assets/js/vendor/jquery-ui.min.js')}}"></script>
<script src="{{ URL::asset('home/assets/js/vendor/jquery.appear.js')}}"></script>
<script src="{{ URL::asset('home/assets/js/plugins/parallax.min.js')}}"></script>
<script src="{{ URL::asset('home/assets/js/plugins/parallax-scroll.js')}}"></script>
<script src="{{ URL::asset('home/assets/js/plugins/gsap.min.js')}}"></script>
<script src="{{ URL::asset('home/assets/js/plugins/ScrollTrigger.min.js')}}"></script>
<script src="{{ URL::asset('home/assets/js/plugins/SplitText.js')}}"></script>
<script src="{{ URL::asset('home/assets/js/plugins/tween-max.min.js')}}"></script>
<script src="{{ URL::asset('home/assets/js/plugins/draggable.min.js')}}"></script>
<script src="{{ URL::asset('home/assets/js/plugins/smoothscroll.js')}}"></script>
<script src="{{ URL::asset('home/assets/js/vendor/ajax-form.js')}}"></script>
<script src="{{ URL::asset('home/assets/js/main.js')}}"></script>
</body>

</html>