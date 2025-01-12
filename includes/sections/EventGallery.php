<?php foreach (EVENT_GALLERY as $Events => $EventsValues) { ?>
    <!-- Start Single blog -->
    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="100" data-aos-once="true" class="col-lg-6 col-xl-4 mt--30 col-md-6 col-sm-12 col-12 mt--30">
        <div class="gsi-blog">
            <div class="inner">
                <div class="thumbnail">
                    <a href="<?php echo $EventsValues['link']; ?>">
                        <img loading="lazy" src="<?php echo $EventsValues['image']; ?>" alt="<?php echo $EventsValues['title']; ?>" title="<?php echo $EventsValues['title']; ?>">
                    </a>
                </div>
                <div class="content">
                    <div class="category-info">
                        <div class="category-list">
                            <a href="<?php echo $EventsValues['dir']; ?>"><?php echo $EventsValues['tags']; ?></a>
                        </div>
                        <div class="meta">
                            <span><i class="fa fa-clock"></i> <?php echo $EventsValues['time']; ?></span>
                        </div>
                    </div>
                    <h4 class="title">
                        <a href="<?php echo $EventsValues['dir']; ?>"><?php echo $EventsValues['title']; ?>
                            <i class="fa fa-angle-right pull-right"></i>
                        </a>
                    </h4>
                    <p class="description text-justify small">
                        <?php echo $EventsValues['desc']; ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Single blog -->
<?php } ?>