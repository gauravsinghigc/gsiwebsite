<?php foreach (WHAT_I_DO as $Key => $Services) { ?>
    <!-- Start Single Service -->
    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="100" data-aos-once="true" class="col-lg-6 col-xl-4 col-md-6 col-sm-12 col-12 mt--50 mt_md--30 mt_sm--30">
        <div class="gsi-service">
            <div class="inner">
                <div class="icon">
                    <img loading="lazy" src="<?php echo $Services['image']; ?>" alt='<?php echo $Services['name']; ?> @ <?php echo APP['APP_NAME']; ?>' loading="lazy">
                </div>
                <div class="content">
                    <h4 class="title mb-1"><a href="<?php echo $Services['link']; ?>"><?php echo $Services['name']; ?></a></h4>
                    <h6 class='mt-0 small pt-0 text-grey'>@<?php echo APP['APP_NAME_2']; ?></h6>
                    <p class="description text-justify"><?php echo $Services['desc']; ?></p>
                    <a class="read-more-button" href="<?php echo $Services['link']; ?>">
                        Explore Projects
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- End SIngle Service -->
<?php } ?>