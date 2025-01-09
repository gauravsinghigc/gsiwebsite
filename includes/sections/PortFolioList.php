<?php
foreach (APP_PORTFOLIO as $PortfolioKey => $PortfolioValues) { ?>
    <!-- Start Single Portfolio -->
    <div data-aos="fade-up" data-aos-delay="100" data-aos-once="true" class="col-lg-6 col-xl-4 col-md-6 col-12 mt--50 mt_md--30 mt_sm--30">
        <div class="gsi-portfolio" data-bs-toggle="modal" data-bs-target="#<?php echo $PortfolioKey; ?>">
            <div class="inner">
                <div class="thumbnail">
                    <a href="javascript:void(0)">
                        <img src="<?php echo $PortfolioValues['image']; ?>" alt="Personal Portfolio Images">
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
<?php } ?>