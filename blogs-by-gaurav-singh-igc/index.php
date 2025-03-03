<?php
$RunningDir = "..";
include $RunningDir . "/config.php";

if (isset($_GET['search'])) {
    $SearchingValues = $_GET['search'];
} else {
    $SearchingValues = "";
} ?>
<!doctype html>
<html lang="en">

<head>
    <title>Blogs @ <?php echo APP['APP_NAME']; ?> - <?php echo APP['EXPERTISE']; ?></title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes" />
    <?php include $RunningDir . "/assets/HeaderStylesheets.php"; ?>
    <meta name="title" content="Latest Blogs by Gaurav Singh (gauravsinghigc) - Full Stack Developer & IT Solutions Expert">
    <meta name="description" content="Read the latest blogs by Gaurav Singh (gauravsinghigc) on full-stack development, custom web solutions, CRM systems, mobile app development, digital marketing, and IT support. Stay updated with industry trends, tips, and insights.">
    <meta name="keywords" content="Gaurav Singh, gauravsinghigc, IT blogs, full stack developer, web development tips, CRM solutions, mobile app development, digital marketing strategies, IT support blogs, technology trends, software development, business growth tips, Faridabad">

</head>

<body class="white-version template-color-1 spybody" data-spy="scroll" data-target=".navbar-example2" data-offset="70">
    <?php include $RunningDir . "/includes/PageHeader.php"; ?>
    <main class="main-page-wrapper">

        <div class="container" style="margin-top: 15rem;">
            <div class="row">
                <div class="col-lg-12">
                    <form action="" action='GET'>
                        <div class="form-group">
                            <label for="search-blog">Search Blogs:</label>
                            <input type="text" class="form-control box-shadow" value="<?php echo $SearchingValues; ?>" onchange='form.submit()' name="search" list='GsiBlogList' placeholder="Start Typing here..">
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
                </div>
            </div>
        </div>

        <div class="container mt-1 pt-1">
            <div class="row row--25 mt--30 mt_md--5 mt_sm--5">
                <?php
                $StartLimits = 0;
                $searchQuery = isset($_GET['search']) ? strtolower(trim($_GET['search'])) : ''; // Get search query

                foreach (APP_BLOGS as $BlogKey => $BlogValue) {
                    $blogTitle = strtolower($BlogValue['title']); // Convert blog title to lowercase for case-insensitive search

                    // Check if search query matches the blog title
                    if ($searchQuery === '' || strpos($blogTitle, $searchQuery) !== false) {
                        $StartLimits++;
                        if ($StartLimits <= 48) {  ?>
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
                                            </div>
                                            <h4 class="title">
                                                <a href="<?php echo $BlogValue['dir']; ?>"><?php echo $BlogValue['title']; ?>
                                                    <i class="fa fa-angle-right pull-right"></i>
                                                </a>
                                                <span class="small text-secondary fs-6"><i class="fa fa-clock"></i> <?php echo $BlogValue['time']; ?></span>
                                            </h4>
                                            <p class="description text-justify small">
                                                <?php echo $BlogValue['desc']; ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single blog -->
                <?php }
                    }
                } ?>
            </div>
        </div>

        <?php include $RunningDir . "/includes/sections/ContactUsSectionForm.php";  ?>

    </main>

    <?php
    include $RunningDir . "/includes/Footer.php";
    include $RunningDir . "/assets/FooterScripts.php"; ?>
</body>

</html>