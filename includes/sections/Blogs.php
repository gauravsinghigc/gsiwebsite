<?php foreach (APP_BLOGS as $BlogKey => $BlogValue) { ?>
    <!-- Start Single blog -->
    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="100" data-aos-once="true" class="col-lg-6 col-xl-4 mt--30 col-md-6 col-sm-12 col-12 mt--30">
        <div class="gsi-blog">
            <div class="inner">
                <div class="thumbnail">
                    <a href="<?php echo $BlogValue['link']; ?>">
                        <img loading="lazy" src="<?php echo $BlogValue['image']; ?>" alt="<?php echo $BlogValue['title']; ?>" title="<?php echo $BlogValue['title']; ?>">
                    </a>
                </div>
                <div class="content">
                    <div class="category-info">
                        <div class="category-list">
                            <a href="<?php echo $BlogValue['dir']; ?>"><?php echo $BlogValue['tags']; ?></a>
                        </div>
                        <div class="meta">
                            <span><i class="fa fa-clock"></i> <?php echo $BlogValue['time']; ?></span>
                        </div>
                    </div>
                    <h4 class="title">
                        <a href="<?php echo $BlogValue['dir']; ?>"><?php echo $BlogValue['title']; ?>
                            <i class="fa fa-angle-right pull-right"></i>
                        </a>
                    </h4>
                    <p class="description text-justify small">
                        <?php echo $BlogValue['desc']; ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Single blog -->
<?php } ?>