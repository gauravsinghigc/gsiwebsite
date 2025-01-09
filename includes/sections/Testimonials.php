<?php foreach (CUSTOMER_REVIEWS as $ReviewKey => $ReviewValues) { ?>
    <!-- Start Single testiminail -->
    <div class="testimonial mt--50 mt_md--40 mt_sm--40">
        <div class="inner">
            <div class="card-info">
                <div class="card-thumbnail">
                    <img src="<?php echo $ReviewValues['logo']; ?>" class='p-3 bg-white' alt="Testimonial-image">
                </div>
                <div class="card-content">
                    <span class="subtitle mt--10"><?php echo $ReviewValues['company']; ?></span>
                    <h3 class="title"><?php echo $ReviewValues['name']; ?></h3>
                    <span class="designation"><?php echo $ReviewValues['designation']; ?></span>
                </div>
            </div>
            <div class="card-description">
                <div class="title-area">
                    <div class="title-info">
                        <h3 class="title"><?php echo $ReviewValues['project']; ?></h3>
                        <span class="date"><?php echo $ReviewValues['date']; ?></span>
                    </div>
                    <div class="rating">
                        <img src="<?php echo STORAGE_URL; ?>/others/star-rating.png" alt="rating-image">
                    </div>
                </div>
                <div class="seperator"></div>
                <p class="discription text-justify">
                    <?php echo $ReviewValues['description']; ?>
                </p>
            </div>
        </div>
    </div>
<?php } ?>