<div class="gsi-footer-area gsi-section-gap section-separator">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-4">
                <div class="box-shadow p-5 rounded-3">
                    <h6 class="text-uppercase">About <?php echo APP['APP_NAME_2']; ?></h6>
                    <hr>
                    <ul class="gsi-footer-links">
                        <li><a href="<?php echo DOMAIN; ?>"><i class="fa fa-arrow-right"></i> Home</a></li>
                        <li><a href="<?php echo DOMAIN; ?>/about-gaurav-singh-faridabad"><i class="fa fa-arrow-right"></i> About Me</a></li>
                        <li><a href="<?php echo DOMAIN; ?>/what-i-do"><i class="fa fa-arrow-right"></i> What I Do</a></li>
                        <li><a href="<?php echo DOMAIN; ?>/gaurav-singh-igc-portfolio"><i class="fa fa-arrow-right"></i> My Portfolio</a></li>
                        <li><a href="<?php echo DOMAIN; ?>/gaurav-singh-igc-skills"><i class="fa fa-arrow-right"></i> My Skills</a></li>
                        <li><a href="<?php echo DOMAIN; ?>/gaurav-singh-igc-clients"><i class="fa fa-arrow-right"></i> My Clients</a></li>
                        <li><a href="<?php echo DOMAIN; ?>/gaurav-singh-igc-pricing"><i class="fa fa-arrow-right"></i> Pricing</a></li>

                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-4">
                <div class="box-shadow p-5 rounded-3">
                    <h6 class="text-uppercase">More About <?php echo APP['APP_NAME_2']; ?></h6>
                    <hr>
                    <ul class="gsi-footer-links description">
                        <li><a href="<?php echo DOMAIN; ?>/news-by-gaurav-singh-igc"><i class="fa fa-arrow-right"></i> News & Updates</a></li>
                        <li><a href="<?php echo DOMAIN; ?>/blogs-by-gaurav-singh-igc"><i class="fa fa-arrow-right"></i> My Blogs</a></li>
                        <li><a href="<?php echo DOMAIN; ?>/events-by-gaurav-singh-igc"><i class="fa fa-arrow-right"></i> Event Gallery</a></li>
                        <li><a href="<?php echo DOMAIN; ?>/contact-gaurav-singh-igc"><i class="fa fa-arrow-right"></i> Contact Me</a></li>
                        <li><a href="<?php echo DOMAIN; ?>/privacy-policy"><i class="fa fa-arrow-right"></i> Privacy Policy</a></li>
                        <li><a href="<?php echo DOMAIN; ?>/terms-and-conditions"><i class="fa fa-arrow-right"></i> Terms & Conditions</a></li>
                        <li><a href="<?php echo DOMAIN; ?>/refund-and-cancellation"><i class="fa fa-arrow-right"></i> Refund And Cancellation</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-4">
                <div class="box-shadow p-5 rounded-3">
                    <h6 class="text-uppercase">Like, Share, Follow & Subscribe </h6>
                    <hr>
                    <div class="social-icons">
                        <?php
                        foreach (APP['SOCIAL_ACCOUNS'] as $icon => $Url) { ?>
                            <a href="<?php echo $Url; ?>" class="box-shadow" target="_blank"><i class="fa fa-<?php echo $icon; ?>"></i></a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="footer-area text-center">
                    <p class="description mt--30">Copyrighted © <?php echo DATE('Y'); ?>. All rights reserved by <a target="_blank" href="<?php echo DOMAIN; ?>" class="text-primary bold"><?php echo APP['APP_NAME']; ?></a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include __DIR__ . "/FooterComponents/GSIAssistant.php";
include __DIR__ . "/FooterComponents/PopupForm.php";
include __DIR__ . "/FooterComponents/HubSpotChatBox.php";
include __DIR__ . "/FooterComponents/RightSideFixActionButtons.php";
include __DIR__ . "/FooterComponents/DownloadBrochure.php";
?>