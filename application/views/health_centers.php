<!DOCTYPE HTML>
<html lang="en">
<head>
    <!--=============== basic  ===============-->
    <meta charset="UTF-8">
    <title>Domik - Responsive Architecture Template</title>
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
            </div>
            <div class="nav-button-holder">
                <div class="nav-button vis-m"><span></span><span></span><span></span></div>
            </div>
            <div class="nav-holder">
                <nav>
                    <ul>
                        <li><a href="/" class="ajax">Home</a></li>
                        <li><a href="/ad_med" class="ajax pp act-link">Ad-Med</a></li>
                        <li>
                            <a href="/about" class="ajax pa">About us </a>
                            <!-- Scroll navigation  -->
                            <ul>
                                <li><a href="/about#sec1" class="ajax custom-scroll-link">About us </a></li>
                                <li><a href="/about#sec3" class="ajax custom-scroll-link">Story </a></li>
                                <li><a href="/about#sec4" class="ajax custom-scroll-link">Services</a></li>
                            </ul>
                        </li>

                        <li><a href="/health_centers" class="ajax">Health Centers</a></li>
                        <li><a href="/contact" class="ajax">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="share-container isShare"></div>
        <a class="selectMe shareSelector transition">Social Media</a>
    </header>
    <!--=============== wrapper ===============-->
    <div id="wrapper">
        <div class="content-holder elem scale-bg2 transition3">
            <div class="content  mm">
                <div class="filter-holder fixed-filter">
                    <div class="gallery-filters vis-filter">
                        <a href="#" class="gallery-filter gallery-filter-active" data-filter="*">All</a>
                        <a href="#" class="gallery-filter " data-filter=".houses">Hospitals</a>
                        <!--                                <a href="#" class="gallery-filter" data-filter=".industrial">Pharmacies</a>-->
                        <!--                                <a href="#" class="gallery-filter" data-filter=".interior">Clinics</a>-->
                    </div>
                </div>
                <div class="wrapper-inner no-padding full-width-wrap">
                    <section class="no-padding no-border">
                        <div class="gallery-items   hid-port-info">
                            <?php
                            foreach ($data as $center) {
                                ?>
                                <div class="gallery-item houses">
                                    <div class="grid-item-holder">
                                        <div class="box-item">
                                            <a href="/location?id=<?php echo $center->id; ?>" class="ajax">
                                                <span class="overlay"></span>
                                                <img src="/resources/images/health%20centers/<?php echo strtolower($center->contact_id->full_name).".jpg" ?>" alt="">
                                            </a>
                                        </div>
                                        <div class="grid-item ">
                                            <h3><a href="/location" class="ajax portfolio-link"><?php echo $center->contact_id->full_name; ?></a>
                                            </h3>
                                            <span>wandegeya, kampala</span>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                        <!-- end gallery items -->
                    </section>
                </div>
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