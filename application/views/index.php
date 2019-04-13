<!DOCTYPE HTML>
<html lang="en">
<head>
    <!--=============== basic  ===============-->
    <meta charset="UTF-8">
    <title>Home : Ad-hoc Referral</title>
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="robots" content="index, follow"/>
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <!--=============== css  ===============-->
    <link type="text/css" rel="stylesheet" href="/resources/css/reset.css">
    <link type="text/css" rel="stylesheet" href="/resources/css/plugins.css">
    <link type="text/css" rel="stylesheet" href="/resources/css/style.css">
    <!--=============== favicons ===============-->
    <link rel="shortcut icon" href="/resources/images/favicon.ico">
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="/resources/js/ajax-loading.js"></script>
</head>
<body>
<div class="loader"><i class="fa fa-refresh fa-spin"></i></div>
<!--================= main start ================-->
<div id="main">
    <!--=============== header ===============-->
    <header>
        <div class="header-inner">
            <div class="logo-holder">
                <a href="/" class="ajax"><img src="/resources/images/logo.png" alt=""></a>
                <span style="font-size: 15px; font-weight: bolder; font-style: normal;"> AD HOC REFERRAL</span>
            </div>
            <div class="nav-button-holder">
                <div class="nav-button vis-m"><span></span><span></span><span></span></div>
            </div>
            <div class="nav-holder">
                <nav>
                    <ul>
                        <li><a href="/" class="ajax act-link">Home</a></li>
                        <li><a href="/ad_med" class="ajax pp">Ad-Med</a></li>
                        <li>
                            <a href="/about" class="ajax pa">About us </a>
                            <!-- Scroll navigation  -->
<!--                            <ul>-->
<!--<!--                                <li><a href="/about#sec1" class="ajax custom-scroll-link">About us </a></li>-->
<!--<!--                                <li><a href="/about#sec3" class="ajax custom-scroll-link">Story </a></li>-->
<!--<!--                                <li><a href="/about#sec4" class="ajax custom-scroll-link">Services</a></li>-->
<!--                            </ul>-->
                        </li>
                        <!--                                <li><a href="/health_centers" class="ajax pp">Health Centers</a></li>-->
                        <li><a href="/contact" class="ajax">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="share-container isShare"></div>
        <a class="selectMe shareSelector transition"> Social Media</a>
    </header>
    <!--=============== wrapper ===============-->
    <div id="wrapper">
        <div class="content-holder elem scale-bg2 transition3">
            <div class="content full-height">
                <!--=============== Change the value data-mwa="0" - at your in milliseconds. If you put a value of 0 - the function to turn off autoplay  ===============-->
                <div class="swiper-container" id="horizontal-slider" data-mwc="1" data-mwa="0">
                    <div class="swiper-wrapper">
                        <!--=============== 1 ===============-->
                        <div class="swiper-slide">
                            <div class="bg" style="background-image:url(/resources/images/bg/app_main.jpg)"></div>
                            <div class="overlay"></div>
                            <div class="slide-title-holder">
                                <div class="slide-title">
<!--                                    <h3 class="transition">-->
<!--                                        <a class="ajax transition2" href="#">Increase your referral options.</a></h3>-->
<!--                                    <h4>Take control of your referral destination and medical assistant with efficient-->
<!--                                        technology at your convenience.</h4>-->
                                </div>
                            </div>
                        </div>
                        <!--=============== 2 ===============-->
                        <div class="swiper-slide">
                            <div class="bg" style="background-image:url(/resources/images/bg/professional_closer_main.jpg)"></div>
                            <div class="overlay"></div>
                            <div class="slide-title-holder">
                                <div class="slide-title">
<!--                                    <h3 class="transition"><a class="ajax transition2" href="#">-->
<!--                                            A you a medical professional?</a></h3>-->
<!--                                    <h4>Take control of your patients' list with our referral app.</h4>-->
                                </div>
                            </div>
                        </div>
                        <!--=============== 3 ===============-->
                        <div class="swiper-slide">
                            <div class="bg" style="background-image:url(/resources/images/bg/decongest_main.jpg)"></div>
                            <div class="overlay"></div>
                            <div class="slide-title-holder">
                                <div class="slide-title">
<!--                                    <h3 class="transition"><a class="ajax transition2" href="#">-->
<!--                                            Streamline reach with referrals network-wide.</a></h3>-->
<!--                                    <h4>Ut wisi enim ad minim veniam, quis nostrud exerci</h4>-->
                                </div>
                            </div>
                        </div>
<!--                        <!--=============== 4 ===============-->-->
<!--                        <div class="swiper-slide">-->
<!--                            <div class="bg" style="background-image:url(/resources/images/bg/4.jpg)"></div>-->
<!--                            <div class="overlay"></div>-->
<!--                            <div class="slide-title-holder">-->
<!--                                <div class="slide-title">-->
<!--                                    <h3 class="transition"><a class="ajax transition2" href="#">Are you a patient?</a></h3>-->
<!--                                    <h4>Are you in need of an expert or you just want quick access to your clinic?</h4>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
                    </div>
                    <div class="swiper-nav-holder hor">
                        <a class="swiper-nav arrow-left transition " href="#"><i class="fa fa-long-arrow-left"></i></a>
                        <a class="swiper-nav  arrow-right transition" href="#"><i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
                <div class="pagination"></div>
            </div>
        </div>
    </div>
    <!-- wrapper end -->
</div>
<!-- Main end -->
<!--=============== google map ===============-->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY" type="text/javascript"></script>
<!--=============== scripts  ===============-->
<script type="text/javascript" src="/resources/js/jquery.min.js"></script>
<script type="text/javascript" src="/resources/js/plugins.js"></script>
<script type="text/javascript" src="/resources/js/core.js"></script>
<script type="text/javascript" src="/resources/js/scripts.js"></script>
</body>
</html>