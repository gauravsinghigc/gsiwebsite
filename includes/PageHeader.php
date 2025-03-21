<header class="gsi-header haeder-default black-logo-version header--fixed header--sticky">
    <div class="header-wrapper gsi-popup-mobile-menu m--0 row align-items-center">
        <!-- Start Header Left -->
        <div class="col-lg-3 col-8">
            <div class="header-left">
                <div class="logo ml-3">
                    <a href="<?php echo DOMAIN; ?>" class="ml-3">
                        <img class="img-fluid rounded-3 ml-2" src="<?php echo APP['LOGO']['SQAURE']; ?>" alt="<?php echo APP['APP_NAME']; ?> - <?php echo APP['TAGLINE']; ?>">
                        <span class="h6 p-1 ml-2 text-black"><?php echo APP['NAME']; ?></span>
                    </a>
                </div>
            </div>
        </div>
        <!-- End Header Left -->
        <!-- Start Header Center -->
        <div class="col-lg-9 col-4">
            <div class="header-center">
                <nav id="sideNav" class="mainmenu-nav navbar-example2 d-none d-xl-block onepagenav">
                    <!-- Start Mainmanu Nav -->
                    <ul class="primary-menu nav nav-pills">
                        <li class="nav-item"><a class="nav-link" href="<?php echo DOMAIN; ?>">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo DOMAIN; ?>/about-gaurav-singh-faridabad">About Me</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo DOMAIN; ?>/what-i-do">What I Do</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo DOMAIN; ?>/gaurav-singh-igc-portfolio">Portfolio</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo DOMAIN; ?>/gaurav-singh-igc-skills">Expertise</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo DOMAIN; ?>/gaurav-singh-igc-pricing">Pricing</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo DOMAIN; ?>/blogs-by-gaurav-singh-igc">Blog</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo DOMAIN; ?>/digital-store-by-gaurav-singh-igc-faridabad">Digital Store</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo DOMAIN; ?>/contact-gaurav-singh-igc">Contact Me</a></li>
                    </ul>
                    <!-- End Mainmanu Nav -->
                </nav>
                <!-- Start Header Right  -->
                <div class="header-right">
                    <a href="<?php echo DOMAIN; ?>/book-free-consultant" class="gsi-btn"><span>BOOK FREE CONSULTANT</span></a>
                    <div class="hamberger-menu d-block d-xl-none gsi-mobile-menu-icon" onclick="MobileNavigation()">
                        <i id="menuBtn" class="fa fa-bars"></i>
                    </div>
                </div>
                <!-- End Header Right  -->

            </div>
        </div>
        <!-- End Header Center -->
    </div>
</header>

<div class="gsi-mobile-navigations" id='GsiMobileNavigation'>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="p-3">
                    <a class="gsi-close-btn" onclick="MobileNavigation()"><i class="fa fa-times"></i></a>
                    <a href="<?php echo DOMAIN; ?>">
                        <img class="img-fluid rounded-3" src="<?php echo APP['LOGO']['SQAURE']; ?>" alt="<?php echo APP['APP_NAME']; ?> - <?php echo APP['TAGLINE']; ?>">
                        <h5 class="mt-5"><?php echo APP['APP_NAME']; ?></h5>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <ul>
                    <li><a class="nav-link" href="<?php echo DOMAIN; ?>">Home</a></li>
                    <li><a class="nav-link" href="<?php echo DOMAIN; ?>/about-gaurav-singh-faridabad">About Me</a></li>
                    <li><a class="nav-link" href="<?php echo DOMAIN; ?>/what-i-do">What I Do</a></li>
                    <li><a class="nav-link" href="<?php echo DOMAIN; ?>/gaurav-singh-igc-portfolio">Portfolio</a></li>
                    <li><a class="nav-link" href="<?php echo DOMAIN; ?>/gaurav-singh-igc-skills">Expertise</a></li>
                    <li><a class="nav-link" href="<?php echo DOMAIN; ?>/gaurav-singh-igc-pricing">Pricing</a></li>
                    <li><a class="nav-link" href="<?php echo DOMAIN; ?>/blogs-by-gaurav-singh-igc">Blog</a></li>
                    <li><a class="nav-link" href="<?php echo DOMAIN; ?>/digital-store-by-gaurav-singh-igc-faridabad">Digital Store</a></li>
                    <li><a class="nav-link" href="<?php echo DOMAIN; ?>/contact-gaurav-singh-igc">Contact Me</a></li>
                </ul>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 mt-2">
                <h6 class="mb-3">Like, Share, Follow & Subscribe</h6>
                <div class="gsi-social-icons mt-3">
                    <?php
                    foreach (APP['SOCIAL_ACCOUNS'] as $icon => $Url) { ?>
                        <a href="<?php echo $Url; ?>" target="_blank"><i class="fa fa-<?php echo $icon; ?>"></i></a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <div class="fixed-bottom-btn">
        <a href="<?php echo DOMAIN; ?>/book-free-consultant" class="gsi-btn mb-1 btn-block">
            BOOK FREE CONSULTANT
        </a>
    </div>
</div>