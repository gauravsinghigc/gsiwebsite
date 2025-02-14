<main class="main-page-wrapper">
    <div class="container-fluid gsi-blogs-image" style="background-image:url('<?php echo APP_BLOGS[$ServiceId]['image']; ?>')"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-left">
                    <h1 class="title mb-4 h2"><?php echo APP_BLOGS[$ServiceId]['title']; ?></h1>
                    <span class="subtitle">by <?php echo APP['APP_NAME_2']; ?></span>
                    <p class="description small text-justify mb-2">
                        <span>Tags : <strong><?php echo APP_BLOGS[$ServiceId]['tags']; ?></strong></span> |
                        <span>Published at : <strong><?php echo APP_BLOGS[$ServiceId]['time']; ?></strong></span> |
                        <span>Author : <strong><?php echo APP['APP_NAME']; ?></strong></span>
                    </p>
                    <p class="description text-justify small"><?php echo APP_BLOGS[$ServiceId]['desc']; ?></p>

                    <a class="gsi-btn btn-lg" href="<?php echo APP_BLOGS[$ServiceId]['link']; ?>" target="_blank">KNOW MORE <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8 mt-5 mb-5 pb-3">