<?php
if (isset($_GET['search'])) {
    $SearchingValues = $_GET['search'];
} else {
    $SearchingValues = "";
}
?>
<div class="col-md-4 mt-5 mb-5 pb-3">
    <form action="" action='GET'>
        <div class="form-group">
            <label for="search-blog">Search Blogs:</label>
            <input type="text" class="form-control box-shadow" value="<?php echo $SearchingValues; ?>" onchange='form.submit()' name="search" list='GsiBlogList'>
            <datalist id='GsiBlogList'>
                <?php foreach (APP_BLOGS as $key => $blog) { ?>
                    <option value="<?php echo $blog['title']; ?>"></option>
                <?php } ?>
            </datalist>
        </div>
    </form>
    <?php if (isset($_GET['search'])) { ?>
        <a href="<?php echo DOMAIN; ?>/blogs-by-gaurav-singh-igc" class="gsi-btn"><i class="fa fa-times"></i> Remove Search Filters</a>
    <?php  } ?>

    <h5>Browse More Blogs</h5>
    <hr>
    <ul class='gsi-service-nav mb-5'>
        <?php
        $StartLimits = 0;
        $searchQuery = isset($_GET['search']) ? strtolower(trim($_GET['search'])) : ''; // Get search query

        foreach (APP_BLOGS as $BlogKey => $BlogValue) {
            $blogTitle = strtolower($BlogValue['title']); // Convert blog title to lowercase for case-insensitive search

            // Check if search query matches the blog title
            if ($searchQuery === '' || strpos($blogTitle, $searchQuery) !== false) {
                $StartLimits++;
                if ($StartLimits <= 30) {
                    if ($ServiceId == $BlogKey) {
                        $Selected = "active";
                    } else {
                        $Selected = "";
                    } ?>
                    <li>
                        <a href="<?php echo $BlogValue['dir']; ?>" class="<?php echo $Selected; ?>">
                            <img src="<?php echo $BlogValue['image']; ?>">
                            <span><?php echo $BlogValue['title']; ?></span>
                        </a>
                    </li>
        <?php }
            }
        } ?>
    </ul>
</div>