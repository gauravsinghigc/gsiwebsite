<?php foreach (NEWS_AND_UPDATES as $News => $NewsValue) { ?>
    <!-- Start Single blog -->
    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="100" data-aos-once="true" class="col-lg-6 col-xl-4 mt--30 col-md-6 col-sm-12 col-12 mt--30">
        <div class="gsi-blog">
            <div class="inner">
                <div class="thumbnail">
                    <a href="<?php echo $NewsValue['link']; ?>">
                        <img loading="lazy" src="<?php echo $NewsValue['image']; ?>" alt="<?php echo $NewsValue['title']; ?>" title="<?php echo $NewsValue['title']; ?>">
                    </a>
                </div>
                <div class="content">
                    <div class="category-info">
                        <div class="category-list">
                            <a href="<?php echo $NewsValue['dir']; ?>"><?php echo $NewsValue['tags']; ?></a>
                        </div>
                        <div class="meta">
                            <span><i class="fa fa-clock"></i> <?php echo $NewsValue['time']; ?></span>
                        </div>
                    </div>
                    <h4 class="title">
                        <a href="<?php echo $NewsValue['dir']; ?>"><?php echo $NewsValue['title']; ?>
                            <i class="fa fa-angle-right pull-right"></i>
                        </a>
                    </h4>
                    <p class="description text-justify small">
                        <?php echo $NewsValue['desc']; ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Single blog -->
<?php } ?>