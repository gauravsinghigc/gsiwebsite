<?php
$RunningDir = ".";
include $RunningDir . "/config.php"; ?>
<!doctype html>
<html lang="en">

<head>
    <title><?php echo APP['APP_NAME']; ?> @ <?php echo APP['EXPERTISE']; ?></title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes" />
    <?php include $RunningDir . "/assets/HeaderStylesheets.php"; ?>
    <meta name="title" content="Gaurav Singh (gauravsinghigc) @ Full Stack Developer & IT Support ">
    <meta name="description" content="Gaurav Singh (gauravsinghigc) Faridabad, experienced full stack developer, digital marketing services and all type technical service provider.">
    <meta name="keywords" content="gauravsinghigc, full stack developer, software development, web development, web design, php development, javascript development, node.js development, react.js development, angular.js development, vue.js development, e-commerce development, digital marketing, digital marketing agency, digital marketing company, digital marketing agency in noida, digital marketing company in noida, digital marketing company in delhi, digital marketing agency in delhi">
</head>

<body class="white-version template-color-1 spybody" data-spy="scroll" data-target=".navbar-example2" data-offset="70">
    <?php include $RunningDir . "/includes/PageHeader.php"; ?>
    <main class="main-page-wrapper">

        <div id="home" class="gsi-slider-area">
            <div class="slide slider-style-1">
                <div class="container">
                    <div class="row row--30 align-items-center">
                        <div class="order-2 order-lg-1 col-lg-7 mt_md--50 mt_sm--50 mt_lg--30">
                            <div class="content">
                                <div class="inner">
                                    <span class="subtitle">Welcome to digital world</span>
                                    <h1 class="title">Hi, I’m <span><?php echo APP['NAME']; ?></span><br>
                                        <span class="header-caption" id="page-top">
                                            <!-- type headline start-->
                                            <span class="cd-headline clip is-full-width">
                                                <span>a </span>
                                                <!-- ROTATING TEXT -->
                                                <span class="cd-words-wrapper">
                                                    <b class="is-visible">Full Stack Developer.</b>
                                                    <b class="is-hidden">Professional Coder.</b>
                                                    <b class="is-hidden">CRM Developer.</b>
                                                    <b class="is-hidden">Web App Developer.</b>
                                                    <b class="is-hidden">Mobile App Developer.</b>
                                                    <b class="is-hidden">Digital Expert.</b>
                                                    <b class="is-hidden">IT Support Provider.</b>
                                                </span>
                                            </span>
                                            <!-- type headline end -->
                                        </span>
                                    </h1>

                                    <div>
                                        <p class="description text-justify">I’m Gaurav Singh (gauravsinghigc)! I specialize in digital marketing, IT support, full-stack development, and CRM solutions. I have expertise in creating custom web solutions, advanced authentication systems, and Android/iOS cross-platform mobile app development. I’m here to help your business thrive with professional, end-to-end IT services tailored to your needs. Let’s bring your ideas to life together!</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12 col-12">
                                        <div class="social-share-inner-left">
                                            <span class="title">find me @</span>
                                            <ul class="social-share d-flex liststyle">
                                                <?php
                                                foreach (APP['SOCIAL_ACCOUNS'] as $icon => $Url) { ?>
                                                    <li class="<?php echo $icon; ?>">
                                                        <a href="<?php echo $Url; ?>" target="_blank"><i class="fa fa-<?php echo $icon; ?>"></i></a>
                                                    </li>
                                                <?php } ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="order-1 order-lg-2 col-lg-5">
                            <div class="thumbnail">
                                <div class="inner">
                                    <img src="<?php echo STORAGE_URL; ?>/bg/gaurav-singhigc-author-gauravsinghigc.gif" alt="<?php echo APP['AUTHOR']; ?>" title='<?php echo APP['AUTHOR']; ?>"'>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="gsi-service-area gsi-section-gap section-separator" id="Services">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-left" data-aos="fade-up" data-aos-duration="500" data-aos-delay="100" data-aos-once="true">
                            <span class="subtitle">Services</span>
                            <h2 class="title">What I Do</h2>
                        </div>
                    </div>
                </div>
                <div class="row row--25 mt_md--10 mt_sm--10">
                    <?php include __DIR__ . "/includes/sections/WhatWeDo.php"; ?>
                </div>
            </div>
        </div>

        <div class="gsi-portfolio-area gsi-section-gap section-separator" id="portfolio">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <span class="subtitle">Visit my portfolio and keep your feedback</span>
                            <h2 class="title">My Portfolio</h2>
                        </div>
                    </div>
                </div>

                <div class="row row--25 mt--10 mt_md--10 mt_sm--10">
                    <?php
                    $StartLimits = 0;
                    foreach (APP_PORTFOLIO as $PortfolioKey => $PortfolioValues) {
                        $StartLimits++;
                        if ($StartLimits <= 6) { ?>
                            <!-- Start Single Portfolio -->
                            <div data-aos="fade-up" data-aos-delay="100" data-aos-once="true" class="col-lg-6 col-xl-4 col-md-6 col-12 mt--50 mt_md--30 mt_sm--30">
                                <div class="gsi-portfolio" data-bs-toggle="modal" data-bs-target="#<?php echo $PortfolioKey; ?>">
                                    <div class="inner">
                                        <div class="thumbnail">
                                            <a href="javascript:void(0)">
                                                <img loading="lazy" src="<?php echo $PortfolioValues['image']; ?>" alt="Personal Portfolio Images">
                                            </a>
                                        </div>
                                        <div class="content">
                                            <div class="category-info">
                                                <div class="category-list">
                                                    <a href="javascript:void(0)"><?php echo $PortfolioValues['tag']; ?></a>
                                                </div>
                                            </div>
                                            <h4 class="title small">
                                                <a class="small">
                                                    <?php echo $PortfolioValues['name']; ?>
                                                </a>
                                            </h4>
                                            <p class="describe text-justify small"><?php echo $PortfolioValues['shortdesc']; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Portfolio -->
                            <!-- Modal Portfolio Body area Start -->
                            <div class="modal fade" id="<?php echo $PortfolioKey; ?>" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true"><i data-feather="x"></i></span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row align-items-center">

                                                <div class="col-lg-6">
                                                    <div class="portfolio-popup-thumbnail">
                                                        <div class="image">
                                                            <img class="w-100" src="<?php echo $PortfolioValues['image']; ?>" alt="slide">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="text-content">
                                                        <h3>
                                                            <span><?php echo $PortfolioValues['tag']; ?></span> <?php echo $PortfolioValues['name']; ?>
                                                        </h3>
                                                        <p class="mb--30 text-justify">
                                                            <?php echo $PortfolioValues['longdesc']; ?>
                                                        </p>

                                                        <a target="_blank" href="<?php echo $PortfolioValues['link']; ?>" class="gsi-btn">Browse Project</a>
                                                    </div>
                                                    <!-- End of .text-content -->
                                                </div>
                                            </div>
                                            <!-- End of .row Body-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Modal Portfolio area -->
                    <?php }
                    } ?>
                </div>
            </div>
        </div>

        <div class="gsi-resume-area gsi-section-gap section-separator" id="resume">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <span class="subtitle"><?php echo date("Y") - 2018; ?>+ Years of Experience</span>
                            <h2 class="title">Professional Skills & Expertises</h2>
                        </div>
                    </div>
                </div>
                <div class="row mt--45">
                    <div class="col-lg-12">
                        <!-- Start Tab Content Wrapper  -->
                        <div class="gsi-nav-content tab-content" id="myTabContents">
                            <!-- Start Single Tab  -->
                            <div class="tab-pane show active fade single-tab-area" id="professional" role="tabpanel" aria-labelledby="professional-tab">
                                <div class="personal-experience-inner mt--40">
                                    <div class="row row--40">

                                        <!-- Start Single Progressbar  -->
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="progress-wrapper">
                                                <div class="content">
                                                    <!-- Start Single Progress Charts -->
                                                    <div class="progress-charts">
                                                        <h6 class="heading heading-h6">Adobe Photoshop</h6>
                                                        <div class="progress">
                                                            <div class="progress-bar wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay=".3s" role="progressbar" style="width: 45%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span
                                                                    class="percent-label">45%</span></div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single Progress Charts -->

                                                    <!-- Start Single Progress Charts -->
                                                    <div class="progress-charts">
                                                        <h6 class="heading heading-h6">Canva</h6>
                                                        <div class="progress">
                                                            <div class="progress-bar wow fadeInLeft" data-wow-duration="0.6s" data-wow-delay=".4s" role="progressbar" style="width: 50%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span
                                                                    class="percent-label">50%</span></div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single Progress Charts -->

                                                    <!-- Start Single Progress Charts -->
                                                    <div class="progress-charts">
                                                        <h6 class="heading heading-h6">Microsoft Designer</h6>
                                                        <div class="progress">
                                                            <div class="progress-bar wow fadeInLeft" data-wow-duration="0.7s" data-wow-delay=".5s" role="progressbar" style="width: 65%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span
                                                                    class="percent-label">65%</span></div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single Progress Charts -->

                                                    <!-- Start Single Progress Charts -->
                                                    <div class="progress-charts">
                                                        <h6 class="heading heading-h6">Microsoft Clipchamp</h6>
                                                        <div class="progress">
                                                            <div class="progress-bar wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay=".6s" role="progressbar" style="width: 75%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span
                                                                    class="percent-label">75%</span></div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single Progress Charts -->

                                                    <!-- Start Single Progress Charts -->
                                                    <div class="progress-charts">
                                                        <h6 class="heading heading-h6">ChatGPT Designing Prompt</h6>
                                                        <div class="progress">
                                                            <div class="progress-bar wow fadeInLeft" data-wow-duration="0.9s" data-wow-delay=".7s" role="progressbar" style="width: 45%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span
                                                                    class="percent-label">45%</span></div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single Progress Charts -->

                                                    <!-- Start Single Progress Charts -->
                                                    <div class="progress-charts">
                                                        <h6 class="heading heading-h6">UI/UX Website & CRMs</h6>
                                                        <div class="progress">
                                                            <div class="progress-bar wow fadeInLeft" data-wow-duration="0.9s" data-wow-delay=".7s" role="progressbar" style="width: 80%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span
                                                                    class="percent-label">80%</span></div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single Progress Charts -->
                                                    <!-- Start Single Progress Charts -->
                                                    <div class="progress-charts">
                                                        <h6 class="heading heading-h6">UI/UX Mobile App</h6>
                                                        <div class="progress">
                                                            <div class="progress-bar wow fadeInLeft" data-wow-duration="0.9s" data-wow-delay=".7s" role="progressbar" style="width: 75%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span
                                                                    class="percent-label">75%</span></div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single Progress Charts -->

                                                    <!-- Start Single Progress Charts -->
                                                    <div class="progress-charts">
                                                        <h6 class="heading heading-h6">Social Media Marketing</h6>
                                                        <div class="progress">
                                                            <div class="progress-bar wow fadeInLeft" data-wow-duration="0.9s" data-wow-delay=".7s" role="progressbar" style="width: 75%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span
                                                                    class="percent-label">75%</span></div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single Progress Charts -->

                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Single Progressbar  -->

                                        <!-- Start Single Progressbar  -->
                                        <div class="col-lg-6 col-md-6 col-12 mt_sm--60">
                                            <div class="progress-wrapper">
                                                <div class="content">
                                                    <!-- Start Single Progress Charts -->
                                                    <div class="progress-charts">
                                                        <h6 class="heading heading-h6">Front-end Development (HTML, CSS, Javascript)</h6>
                                                        <div class="progress">
                                                            <div class="progress-bar wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay=".3s" role="progressbar" style="width: 75%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span
                                                                    class="percent-label">75%</span></div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single Progress Charts -->

                                                    <!-- Start Single Progress Charts -->
                                                    <div class="progress-charts">
                                                        <h6 class="heading heading-h6">Reactjs/Nodejs</h6>
                                                        <div class="progress">
                                                            <div class="progress-bar wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay=".3s" role="progressbar" style="width: 60%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span
                                                                    class="percent-label">60%</span></div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single Progress Charts -->

                                                    <!-- Start Single Progress Charts -->
                                                    <div class="progress-charts">
                                                        <h6 class="heading heading-h6">Flutter Designing & Development</h6>
                                                        <div class="progress">
                                                            <div class="progress-bar wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay=".3s" role="progressbar" style="width: 70%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span
                                                                    class="percent-label">70%</span></div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single Progress Charts -->

                                                    <!-- Start Single Progress Charts -->
                                                    <div class="progress-charts">
                                                        <h6 class="heading heading-h6">Database Designing</h6>
                                                        <div class="progress">
                                                            <div class="progress-bar wow fadeInLeft" data-wow-duration="0.6s" data-wow-delay=".4s" role="progressbar" style="width: 80%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span
                                                                    class="percent-label">80%</span></div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single Progress Charts -->

                                                    <!-- Start Single Progress Charts -->
                                                    <div class="progress-charts">
                                                        <h6 class="heading heading-h6">Backend Development (Advance PHP)</h6>
                                                        <div class="progress">
                                                            <div class="progress-bar wow fadeInLeft" data-wow-duration="0.7s" data-wow-delay=".5s" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span
                                                                    class="percent-label">85%</span></div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single Progress Charts -->

                                                    <!-- Start Single Progress Charts -->
                                                    <div class="progress-charts">
                                                        <h6 class="heading heading-h6">ON-PAGE SEO</h6>
                                                        <div class="progress">
                                                            <div class="progress-bar wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay=".6s" role="progressbar" style="width: 80%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span
                                                                    class="percent-label">80%</span></div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single Progress Charts -->

                                                    <!-- Start Single Progress Charts -->
                                                    <div class="progress-charts">
                                                        <h6 class="heading heading-h6">Social Media Optimization</h6>
                                                        <div class="progress">
                                                            <div class="progress-bar wow fadeInLeft" data-wow-duration="0.9s" data-wow-delay=".7s" role="progressbar" style="width: 70%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span
                                                                    class="percent-label">70%</span></div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single Progress Charts -->

                                                    <!-- Start Single Progress Charts -->
                                                    <div class="progress-charts">
                                                        <h6 class="heading heading-h6">Google Ads</h6>
                                                        <div class="progress">
                                                            <div class="progress-bar wow fadeInLeft" data-wow-duration="0.9s" data-wow-delay=".7s" role="progressbar" style="width: 70%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span
                                                                    class="percent-label">70%</span></div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single Progress Charts -->

                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Single Progressbar  -->

                                    </div>
                                </div>
                            </div>
                            <!-- End Single Tab  -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="gsi-testimonial-area gsi-section-gap section-separator" id="testimonial">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <span class="subtitle">What Clients Say about me</span>
                            <h2 class="title">Testimonial & Reviews</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="testimonial-activation testimonial-pb mb--30">
                            <?php include __DIR__ . "/includes/sections/Testimonials.php"; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="gsi-pricing-area gsi-section-gap section-separator" id="pricing">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-xl-4 mb_md--40 mb_sm--40 small-margin-pricing">
                        <div class="d-block d-lg-flex text-center d-lg-left section-flex flex-wrap align-content-start h-100 pricing-bg box-shadow" style="background-image:url(<?php echo STORAGE_URL; ?>/pricing/pricing-bg-image-by-gauravsinghigc.jpg);">
                            <div class="position-sticky sticky-top rbt-sticky-top-adjust">
                                <div class="section-title text-left">
                                    <span class="subtitle text-center text-lg-left">Pricing</span>
                                    <h2 class="title text-center text-lg-left">My Pricing</h2>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-9 col-xl-8">
                        <!-- Pricing Area -->
                        <div class="navigation-wrapper">
                            <ul class="nav" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-style" id="test-tab" data-bs-toggle="tab" href="#test" role="tab" aria-controls="test" aria-selected="false">Starter Plans</a>
                                </li>
                                <li class="nav-item recommended">
                                    <a class="nav-style active" id="profile-tab" data-bs-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="true">Standard Plans</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-style" id="contact-tab" data-bs-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Customized Plans</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade" id="test" role="tabpanel" aria-labelledby="test-tab">
                                    <!-- Pricing Start -->
                                    <div class="gsi-pricing">
                                        <div class="pricing-header">
                                            <div class="header-left">
                                                <h2 class="title">Landing Page + Social Media Optimization</h2>
                                                <span>Enhance online presence organically</span>

                                                <ul class="pricing-for">
                                                    <li><i class="fa fa-facebook"></i></li>
                                                    <li><i class="fa fa-instagram"></i></li>
                                                    <li><i class="fa fa-linkedin"></i></li>
                                                    <li><i class="fa fa-twitter"></i></li>
                                                    <li><i class="fa fa-map-marker"></i></li>
                                                </ul>
                                            </div>
                                            <div class="header-right">
                                                <span>Rs.2999</span><br>
                                                <i class="pull-right p-2 rounded-4 mt-2">Per month</i>
                                            </div>
                                        </div>
                                        <div class="pricing-body">
                                            <p class="description text-justify mb-4">
                                                Optimize your landing page with a sleek, responsive design, compelling CTAs, and engaging content to captivate visitors instantly. Boost your online presence organically through targeted social media strategies and consistent brand messaging.
                                            </p>
                                            <div class="check-wrapper">
                                                <div class="left-area">
                                                    <div class="check d-flex">
                                                        <i data-feather="check"></i>
                                                        <p>5 Page Responsive Landing Page</p>
                                                    </div>
                                                    <div class="check d-flex">
                                                        <i data-feather="check"></i>
                                                        <p>Instant WhatsApp Chat</p>
                                                    </div>
                                                    <div class="check d-flex">
                                                        <i data-feather="check"></i>
                                                        <p>Highlight Call to action Button</p>
                                                    </div>
                                                    <div class="check d-flex">
                                                        <i data-feather="check"></i>
                                                        <p>PopUp Form for instant queries</p>
                                                    </div>
                                                    <div class="check d-flex">
                                                        <i data-feather="check"></i>
                                                        <p>Live Chat Plugin (Meta Messenger)</p>
                                                    </div>
                                                    <div class="check d-flex">
                                                        <i data-feather="check"></i>
                                                        <p>SEO Friendly Landing Page</p>
                                                    </div>
                                                </div>
                                                <div class="right-area">
                                                    <div class="check d-flex">
                                                        <i data-feather="check"></i>
                                                        <p>Auto send Greeting Messages</p>
                                                    </div>
                                                    <div class="check d-flex">
                                                        <i data-feather="check"></i>
                                                        <p>Engage Relative Communities</p>
                                                    </div>
                                                    <div class="check d-flex">
                                                        <i data-feather="check"></i>
                                                        <p>Service Highlight on All Platforms</p>
                                                    </div>
                                                    <div class="check d-flex">
                                                        <i data-feather="check"></i>
                                                        <p>2 Creative Per Week (8 Creative/Month)</p>
                                                    </div>
                                                    <div class="check d-flex">
                                                        <i data-feather="check"></i>
                                                        <p>1 Reel Per Week (4 Reels/Months)</p>
                                                    </div>
                                                    <div class="check d-flex">
                                                        <i data-feather="check"></i>
                                                        <p>Weekly Analytics Reports</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pricing-footer">
                                            <a href="#" class="gsi-btn d-block">
                                                <span>ORDER NOW</span>
                                                <i data-feather="arrow-right"></i>
                                            </a>
                                            <div class="time-line">
                                                <div class="single-cmt d-flex">
                                                    <i data-feather="clock"></i>
                                                    <span>Landing Page @ 2 Days Delivery</span>
                                                </div>
                                                <div class="single-cmt d-flex">
                                                    <i data-feather="activity"></i>
                                                    <span> 3 Revisions Per Creative/Reels/Shorts</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End -->
                                </div>

                                <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <!-- Pricing Start -->
                                    <div class="gsi-pricing">
                                        <div class="pricing-header">
                                            <div class="header-left">
                                                <h2 class="title">Landing Page +<br> Social Media Marketing (SMM) +<br> Social Media Optimization (SMO)</h2>
                                                <span>Enhance online presence organically as well as paid</span>

                                                <ul class="pricing-for">
                                                    <li><i class="fa fa-facebook"></i></li>
                                                    <li><i class="fa fa-instagram"></i></li>
                                                    <li><i class="fa fa-linkedin"></i></li>
                                                    <li><i class="fa fa-twitter"></i></li>
                                                    <li><i class="fa fa-map-marker"></i></li>
                                                    <li><i class="fa fa-youtube"></i></li>
                                                </ul>
                                            </div>
                                            <div class="header-right">
                                                <span>Rs.6999</span><br>
                                                <i class="pull-right p-2 rounded-4 mt-2">Per month</i>
                                            </div>
                                        </div>
                                        <div class="pricing-body">
                                            <p class="description text-justify mb-4">
                                                Enhance your landing page with a modern design, clear CTAs, and engaging content to convert visitors effectively. Strengthen your online presence with impactful Social Media Marketing (SMM) campaigns and strategic Social Media Optimization (SMO) to maximize organic reach and brand visibility.
                                            </p>
                                            <div class="check-wrapper">
                                                <div class="left-area">
                                                    <div class="check d-flex">
                                                        <i data-feather="check"></i>
                                                        <p>10-12 Page Responsive Website</p>
                                                    </div>
                                                    <div class="check d-flex">
                                                        <i data-feather="check"></i>
                                                        <p>Instant WhatsApp Chat</p>
                                                    </div>
                                                    <div class="check d-flex">
                                                        <i data-feather="check"></i>
                                                        <p>Highlight Call to action Button</p>
                                                    </div>
                                                    <div class="check d-flex">
                                                        <i data-feather="check"></i>
                                                        <p>PopUp Form for instant queries</p>
                                                    </div>
                                                    <div class="check d-flex">
                                                        <i data-feather="check"></i>
                                                        <p>Live Chat Plugin (Meta Messenger)</p>
                                                    </div>
                                                    <div class="check d-flex">
                                                        <i data-feather="check"></i>
                                                        <p>SEO Friendly Pages & Blogs</p>
                                                    </div>
                                                    <div class="check d-flex">
                                                        <i data-feather="check"></i>
                                                        <p>E-Commerce Ready Upto 50 Items</p>
                                                    </div>
                                                    <div class="check d-flex">
                                                        <i data-feather="check"></i>
                                                        <p>1 Blogs Per Week (4 Blogs)</p>
                                                    </div>
                                                    <div class="check d-flex">
                                                        <i data-feather="check"></i>
                                                        <p>Events, Media & Portfolio Gallery</p>
                                                    </div>
                                                </div>
                                                <div class="right-area">
                                                    <div class="check d-flex">
                                                        <i data-feather="check"></i>
                                                        <p>Auto send Greeting Messages</p>
                                                    </div>
                                                    <div class="check d-flex">
                                                        <i data-feather="check"></i>
                                                        <p>Engage Relative Communities</p>
                                                    </div>
                                                    <div class="check d-flex">
                                                        <i data-feather="check"></i>
                                                        <p>Service Highlight on All Platforms</p>
                                                    </div>
                                                    <div class="check d-flex">
                                                        <i data-feather="check"></i>
                                                        <p>3 Creative Per Week (12 Creative/Month)</p>
                                                    </div>
                                                    <div class="check d-flex">
                                                        <i data-feather="check"></i>
                                                        <p>1 Reel/Short Per Week (4 Reels/Months)</p>
                                                    </div>
                                                    <div class="check d-flex">
                                                        <i data-feather="check"></i>
                                                        <p>1 Active Meta (Fb & Insta) Campaign</p>
                                                    </div>
                                                    <div class="check d-flex">
                                                        <i data-feather="check"></i>
                                                        <p>Youtube Optimization (Organically)</p>
                                                    </div>
                                                    <div class="check d-flex">
                                                        <i data-feather="check"></i>
                                                        <p>Appprox. 2-5 Leads Per Week</p>
                                                    </div>
                                                    <div class="check d-flex">
                                                        <i data-feather="check"></i>
                                                        <p>Weekly Analytics Reports</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pricing-footer">
                                            <a href="#" class="gsi-btn d-block">
                                                <span>ORDER NOW</span>
                                                <i data-feather="arrow-right"></i>
                                            </a>
                                            <div class="time-line">
                                                <div class="single-cmt d-flex">
                                                    <i data-feather="clock"></i>
                                                    <span>Landing Page @ 3-5 Days Delivery</span>
                                                </div>
                                                <div class="single-cmt d-flex">
                                                    <i data-feather="activity"></i>
                                                    <span> 3 Revisions Per Creative/Reels/Shorts</span>
                                                </div>
                                                <div class="single-cmt d-flex">
                                                    <i data-feather="star"></i>
                                                    <span> Estimate 2-5 Leads Per Week @ Rs.500/day Meta Ad Budget</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End -->
                                </div>

                                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                    <!-- Pricing Start -->
                                    <div class="gsi-pricing">
                                        <div class="pricing-header">
                                            <div class="header-left">
                                                <h2 class="title">Customize Your Requirements</h2>
                                                <span>Web & Mobile App Development, Digital Marketing & Quality Leads Generation!</span>
                                                <small class="small">
                                                    <small>
                                                        Please select your requirement, we will provider as much as possible best pricing and services for you.
                                                    </small>
                                                </small>
                                            </div>
                                        </div>
                                        <div class="pricing-body">
                                            <div class="contact-form-wrapper customized">
                                                <div class="introduce">
                                                    <form class="rwt-dynamic-form row" method="POST">
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="contact-name">Your Full Name</label>
                                                                <input class="form-control" name="contact-name" id="contact-name" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="contact-phone">Phone Number</label>
                                                                <input class="form-control" name="contact-phone" id="contact-phone" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label for="contact-email">Email-Id</label>
                                                                <input class="form-control" id="contact-email" name="contact-email" type="email">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <h6 class="">Select Services</h6>
                                                        </div>
                                                        <div class="col-lg-6 mb-3">
                                                            <div class='form-group selections'>
                                                                <label>
                                                                    <input type='checkbox' name='REQUIREMENT' value=''>
                                                                    <span>Landing Pages</span>
                                                                </label>
                                                            </div>
                                                            <div class='form-group selections'>
                                                                <label>
                                                                    <input type='checkbox' name='REQUIREMENT' value=''>
                                                                    <span>Dynamic Websites</span>
                                                                </label>
                                                            </div>
                                                            <div class='form-group selections'>
                                                                <label>
                                                                    <input type='checkbox' name='REQUIREMENT' value=''>
                                                                    <span>E-Commerce Websites</span>
                                                                </label>
                                                            </div>
                                                            <div class='form-group selections'>
                                                                <label>
                                                                    <input type='checkbox' name='REQUIREMENT' value=''>
                                                                    <span>Mobile Apps (Android & iOS App)</span>
                                                                </label>
                                                            </div>
                                                            <div class='form-group selections'>
                                                                <label>
                                                                    <input type='checkbox' name='REQUIREMENT' value=''>
                                                                    <span>Customized CRM & App Development</span>
                                                                </label>
                                                            </div>
                                                            <div class='form-group selections'>
                                                                <label>
                                                                    <input type='checkbox' name='REQUIREMENT' value=''>
                                                                    <span>Industry Automation</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 mb-3">
                                                            <div class='form-group selections'>
                                                                <label>
                                                                    <input type='checkbox' name='REQUIREMENT' value=''>
                                                                    <span>Social Media Optimization</span>
                                                                </label>
                                                            </div>
                                                            <div class='form-group selections'>
                                                                <label>
                                                                    <input type='checkbox' name='REQUIREMENT' value=''>
                                                                    <span>Social Media Marketing (Meta Ads)</span>
                                                                </label>
                                                            </div>
                                                            <div class='form-group selections'>
                                                                <label>
                                                                    <input type='checkbox' name='REQUIREMENT' value=''>
                                                                    <span>Google Ads</span>
                                                                </label>
                                                            </div>
                                                            <div class='form-group selections'>
                                                                <label>
                                                                    <input type='checkbox' name='REQUIREMENT' value=''>
                                                                    <span>Youtube Ads</span>
                                                                </label>
                                                            </div>
                                                            <div class='form-group selections'>
                                                                <label>
                                                                    <input type='checkbox' name='REQUIREMENT' value=''>
                                                                    <span>Leads Generation</span>
                                                                </label>
                                                            </div>
                                                            <div class='form-group selections'>
                                                                <label>
                                                                    <input type='checkbox' name='REQUIREMENT' value=''>
                                                                    <span>Complete Sales Automation</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 mb-3">
                                                            <div class="form-group">
                                                                <label>Industry Type</label>
                                                                <select name='' class="form-control form-control-lg p-3">
                                                                    <option value="">Select Industry</option>
                                                                    <option value="Insurance_And_Finance">Insurance & Finance</option>
                                                                    <option value="Manufacturing_And_Logistics">Manufacturing & Logistics</option>
                                                                    <option value="Healthcare_And_Pharma">Healthcare & Pharma</option>
                                                                    <option value="Retail_And_Consumer_Goods">Retail & Consumer Goods</option>
                                                                    <option value="Education_And_Training">Education & Training</option>
                                                                    <option value="Government_And_Military">Government & Military</option>
                                                                    <option value="Transportation_And_Logistics">Transportation & Logistics</option>
                                                                    <option value="Marketing_And_Advertising">Marketing & Advertising</option>
                                                                    <option value="Telecommunications_And_Networking">Telecommunications & Networking</option>
                                                                    <option value="Energy_And_Utilities">Energy & Utilities</option>
                                                                    <option value="Construction_And_Engineering">Construction & Engineering</option>
                                                                    <option value="Art_And_Design">Art & Design</option>
                                                                    <option value="Hospitality_And_Event_Management">Hospitality & Event Management</option>
                                                                    <option value="Other">Other</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 mb-3">
                                                            <div class="form-group">
                                                                <label>Prefer Time to Contact</label>
                                                                <input type='datetime-local' min="<?php echo DATE('Y-m-d 09:00', strtotime("+1 day")); ?>" class="form-control form-control-lg" value="<?php echo DATE('Y-m-d h:m', strtotime("+1 day")); ?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 mb-3">
                                                            <div class="form-group">
                                                                <label>Message </label>
                                                                <textarea name="message" class="form-control form-control-lg" rows="2"></textarea>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-12">
                                                            <button name="submit" type="submit" id="submit" class="gsi-btn">
                                                                <span>SEND DETAILS</span>
                                                                <i data-feather="arrow-right"></i>
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pricing-footer">
                                            <div class="time-line d-flex">
                                                <div class="single-cmt d-flex">
                                                    <i data-feather="clock"></i>
                                                    <span>We will contact you as soon as possible on prefer shared date-time.</span>
                                                </div>
                                                <div class="single-cmt d-flex">
                                                    <i data-feather="activity"></i>
                                                    <span>Stay Connected and online!</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End -->
                                </div>
                            </div>
                        </div>
                        <!-- End -->
                    </div>
                </div>
            </div>
        </div>

        <div class="gsi-blog-area gsi-section-gap section-separator" id="blog">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="100" data-aos-once="true" class="section-title text-center">
                            <span class="subtitle">Visit my blog and keep your feedback</span>
                            <h2 class="title">My Blog</h2>
                        </div>
                    </div>
                </div>
                <div class="row row--25 mt--30 mt_md--10 mt_sm--10">
                    <?php include $RunningDir . "/includes/sections/Blogs.php"; ?>
                </div>
            </div>
        </div>

        <?php include $RunningDir . "/includes/sections/ContactUsSectionForm.php";  ?>
    </main>

    <?php
    include $RunningDir . "/includes/Footer.php";
    include $RunningDir . "/assets/FooterScripts.php"; ?>
</body>

</html>