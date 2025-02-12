<?php if (isset($_GET['msg'])) { ?>
    <section class="screen-container">
        <div class="content-box">
            <div class="container gsi-blog-area bg-gradient">
                <div class="row">
                    <div class="col-md-12">
                        <?php if ($_GET['msg'] == true) { ?>
                            <div class="section-title text-center">
                                <h2 class="statusMsg"><i class="fa fa-check-circle text-white"></i></h2><br>
                                <span class="subtitle">Thanking you for contact me, i have received your message.</span>
                                <p class="mb-5">I will get back to you as soon as possible.</p><br>
                                <a href="<?php echo DOMAIN; ?>" class="gsi-btn m-2"><i class="fa fa-angle-left"></i> Back to Home</a>
                                <a href="<?php echo DOMAIN; ?>/blogs-by-gaurav-singh-igc" class="gsi-btn m-2">Read Blogs <i class="fa fa-angle-right"></i></a>
                            </div>
                        <?php } else { ?>
                            <div class="section-title text-center">
                                <h2 class="statusMsg"><i class="fa fa-warning text-white"></i></h2><br>
                                <span class="subtitle">Sorry! Unable to send your message at the moment!</span>
                                <p class="mb-5">Please try again after some time.</p><br>
                                <a href="<?php echo DOMAIN; ?>" class="gsi-btn m-2"><i class="fa fa-angle-left"></i> Back to Home</a>
                                <a href="<?php echo DOMAIN; ?>/blogs-by-gaurav-singh-igc" class="gsi-btn m-2">Read Blogs <i class="fa fa-angle-right"></i></a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>