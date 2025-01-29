<div class="col-md-4 mt-5 mb-5 pb-3">
    <h5>Browse More Blogs</h5>
    <hr>
    <ul class='gsi-service-nav mb-5'>
        <?php foreach (APP_BLOGS as $AppBlogs => $AppBlogsValues) {
            if ($ServiceId == $AppBlogs) {
                $Selected = "active";
            } else {
                $Selected = "";
            } ?>
            <li>
                <a href="<?php echo $AppBlogsValues['dir']; ?>" class="<?php echo $Selected; ?>">
                    <img src="<?php echo $AppBlogsValues['image']; ?>">
                    <span><?php echo $AppBlogsValues['title']; ?></span>
                </a>
            </li>
        <?php } ?>
    </ul>
</div>