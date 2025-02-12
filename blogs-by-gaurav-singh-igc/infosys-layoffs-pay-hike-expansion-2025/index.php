<?php
$RunningDir = "../..";
include $RunningDir . "/config.php";
$ServiceId = "blog46";

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
                        <h4>⚠️ Infosys Layoffs, Pay Hikes, and Expansion: Key Updates</h4>

                        <p>India’s <strong>second-largest IT company, Infosys</strong>, is facing backlash for laying off <strong>700 employees</strong> who were onboarded in <strong>October</strong> after waiting for more than <strong>2.5 years</strong>. However, the company has claimed that the actual number of layoffs is <strong>fewer than 350</strong>, citing its <strong>internal assessment process</strong> as the reason.</p>

                        <h5>📉 Infosys Layoffs: Internal Assessments Lead to Job Cuts</h5>

                        <ul>
                            <li>🔴 <strong>Nascent Information Technology Employees Senate (NITES)</strong> and affected students criticized the layoffs.</li>
                            <li>📢 Infosys defended its decision, stating that freshers undergo a <strong>rigorous hiring and training process</strong> at its <strong>Mysuru campus</strong>.</li>
                            <li>📊 Employees get <strong>three attempts</strong> to clear internal assessments, failing which they are let go as per their contract.</li>
                        </ul>

                        <h6>📜 Infosys’ Official Statement on Layoffs</h6>

                        <p>Infosys clarified that its <strong>training and assessment process</strong> has been in place for <strong>over two decades</strong> to ensure a <strong>high-quality talent pool</strong> for clients.</p>

                        <hr>

                        <h4>💰 Infosys Pay Hike Update: Compensation Revisions in March</h4>

                        <p>Infosys has informed employees that their <strong>annual compensation revision letters</strong> will be released by <strong>the end of March</strong>, based on recommendations from <strong>delivery units</strong>, sources told ET.</p>

                        <h5>📈 Key Infosys Salary Hike Updates</h5>

                        <ul>
                            <li>📩 Employees previously received hike letters in <strong>June</strong> for raises effective in <strong>April</strong>.</li>
                            <li>📊 The last <strong>company-wide salary revision</strong> took effect on <strong>November 1, 2023</strong>.</li>
                            <li>💼 Infosys had <strong>frozen salary hikes</strong> in <strong>FY2022</strong> to conserve cash, but resumed annual appraisals in <strong>October 2023</strong>.</li>
                        </ul>

                        <hr>

                        <h4>🏢 Infosys Campus Expansion in Telangana</h4>

                        <p>Infosys has announced plans to <strong>expand its IT campus at Pocharam</strong>, Telangana, creating an additional <strong>17,000 jobs</strong>. The announcement was made at the <strong>World Economic Forum in Davos</strong> this year.</p>

                        <h5>🌍 Infosys Hiring and Onboarding Delays</h5>

                        <ul>
                            <li>📢 In <strong>October 2023</strong>, after waiting over <strong>two years</strong>, <strong>1,000 engineering graduates</strong> were finally onboarded.</li>
                            <li>⏳ However, around <strong>2,000 graduates</strong> from the same batch are still facing <strong>joining delays</strong>, despite having offer letters.</li>
                            <li>💰 These graduates were offered roles as <strong>System Engineers (SE)</strong> and <strong>Digital SEs</strong>, with annual salaries between <strong>₹3.2 lakh to ₹3.7 lakh</strong>.</li>
                        </ul>

                        <hr>

                        <h6>📌 Keywords:</h6>
                        <p>Infosys layoffs, Infosys pay hikes, IT job cuts, Infosys expansion, Infosys Telangana campus, onboarding delays, Infosys salary hike update, Infosys job market trends, Blogs by Gaurav Singh (gauravsinghigc)</p>

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