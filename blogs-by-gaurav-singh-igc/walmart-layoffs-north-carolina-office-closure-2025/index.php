<?php
$RunningDir = "../..";
include $RunningDir . "/config.php";
$ServiceId = "blog48";

?>
<!doctype html>
<html lang="en">

<head>
    <title><?php echo APP_BLOGS[$ServiceId]['title']; ?> @ <?php echo APP['APP_NAME']; ?> Blogs</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes" />
    <?php include $RunningDir . "/assets/HeaderStylesheets.php"; ?>
    <?php include __DIR__ . "/../sections/MetaHeaderTags.php"; ?>
</head>

<body id='MainBody' class="template-color-1 spybody" data-spy="scroll" data-target=".navbar-example2" data-offset="70">
    <?php include $RunningDir . "/includes/PageHeader.php"; ?>
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
                    <div>
                        <h4>⚠️ Walmart Layoffs: US’ Largest Private Employer to Cut Jobs & Relocate Staff</h4>

                        <p><strong>Walmart</strong>, the largest private employer in the US, has announced <strong>job cuts and office closures</strong> as part of a restructuring effort. The company will shut down its <strong>Charlotte, North Carolina office</strong> while relocating corporate employees to its <strong>main hubs in Arkansas and California</strong>, according to an internal memo.</p>

                        <h5>🏢 Office Closures & Employee Relocation</h5>

                        <ul>
                            <li>📍 Walmart is closing its <strong>Charlotte, North Carolina office</strong>, affecting <strong>267 employees</strong>.</li>
                            <li>🚚 Corporate employees in <strong>Hoboken, New Jersey</strong>, and other smaller offices must <strong>relocate</strong> to the company’s headquarters in <strong>Bentonville, Arkansas</strong> or its office in <strong>Sunnyvale, California</strong>.</li>
                            <li>📅 Employees who do not secure a new position within the company will be <strong>terminated effective June 13</strong>.</li>
                        </ul>

                        <h6>📜 Walmart’s Official Statement on Workforce Relocation</h6>

                        <p>Walmart’s <strong>Chief People Officer, Donna Morris</strong>, emphasized that the restructuring will help <strong>enhance collaboration and speed</strong>. She stated:</p>

                        <blockquote>
                            “Our values and culture are strategic differentiators for us as a company, and they are fostered by being together.”
                        </blockquote>

                        <hr>

                        <h4>📉 Walmart Joins Other Corporations in Workforce Restructuring</h4>

                        <p>Walmart is among several corporations, including <strong>Amazon</strong> and <strong>Microsoft</strong>, that have implemented a <strong>return-to-office mandate</strong> and restructuring efforts. <strong>Bloomberg</strong> reports that <strong>hundreds of jobs</strong> could be eliminated as part of this transition.</p>

                        <h5>🔄 Previous Relocation Moves by Walmart</h5>

                        <ul>
                            <li>🏢 Last year, Walmart asked employees in <strong>Dallas, Atlanta, and Toronto</strong> to relocate to <strong>larger corporate hubs</strong>.</li>
                            <li>📍 Most employees were moved to the company’s <strong>headquarters in Bentonville</strong>.</li>
                            <li>💼 Walmart emphasized that in-person collaboration strengthens <strong>company culture</strong> and <strong>employee development</strong>.</li>
                        </ul>

                        <hr>

                        <h6>📌 Keywords:</h6>
                        <p>Walmart layoffs, corporate job cuts, employee relocation, Walmart office closures, retail job market, return to office mandate, workforce restructuring, Blogs by Gaurav Singh (gauravsinghigc)</p>
                    </div>

                    <?php include $RunningDir . "/blogs-by-gaurav-singh-igc/sections/BlogShareOptions.php"; ?>
                </div>
                <?php include $RunningDir . "/includes/sections/BlogsNavigationForDetails.php"; ?>
            </div>
        </div>
    </main>

    <?php
    include $RunningDir . "/includes/Footer.php";
    include $RunningDir . "/assets/FooterScripts.php"; ?>
</body>

</html>