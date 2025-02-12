<?php
$RunningDir = "../..";
include $RunningDir . "/config.php";
$ServiceId = "blog17";

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
                    <h4>Tinder Launches Dating Safety Guide in Four Indian Languages</h4>

                    <p>To promote <strong>secure online dating</strong>, Tinder has introduced its <strong>Dating Safety Guide</strong> in <strong>Bengali, Hindi, Kannada, and Marathi</strong>. This initiative, developed in partnership with the <strong>Centre for Social Research (CSR)</strong>, aligns with the company’s commitment to raising awareness about digital safety ahead of <strong>Safer Internet Day</strong> on <strong>February 11</strong>.</p>

                    <h5>📌 Why Tinder Released a Regional Language Safety Guide?</h5>

                    <p>Originally launched in <strong>September 2023</strong> in English, the guide has garnered over <strong>one million views</strong> and <strong>50,000 downloads</strong>. After conducting a recent <strong>survey in India</strong>, Tinder discovered that user <strong>safety and security</strong> are top priorities for online daters. The survey also revealed that <strong>37% of users prefer a video call</strong> before meeting their match in person.</p>

                    <h6>📢 Key Insights from the Survey:</h6>

                    <ul>
                        <li>Most users prioritize <strong>personal safety</strong> before going on a first date.</li>
                        <li>A significant number of respondents suggested <strong>educational resources in regional languages</strong>.</li>
                        <li>Tinder aims to enhance <strong>inclusive and informed dating experiences</strong> for its diverse user base in India.</li>
                    </ul>

                    <h5>📲 In-App Awareness & Educational Content</h5>

                    <p>Throughout the month, Tinder users in India will receive <strong>in-app notifications</strong> promoting the new guide. These notifications will provide:</p>

                    <ul>
                        <li><strong>Tips for recognizing "red flags"</strong> (warning signs of unsafe behavior).</li>
                        <li><strong>Understanding "green flags"</strong> (positive signs like respect and kindness).</li>
                        <li>Insights on <strong>safe dating practices</strong> and security tools available in the Tinder app.</li>
                    </ul>

                    <h6>🔐 How to Access the Guide?</h6>

                    <p>The <strong>Dating Safety Guide</strong> is now available for <strong>download</strong> in multiple regional languages. Users can access it through the Tinder app or the official <strong>online resource center</strong> dedicated to digital safety.</p>

                    <h5>🌟 The Future of Online Dating Safety in India</h5>

                    <p>By offering this guide in <strong>multiple Indian languages</strong>, Tinder aims to foster a <strong>safe, inclusive, and informed dating environment</strong>. This step reinforces the growing emphasis on <strong>digital well-being, online security, and responsible interactions</strong> in the online dating world.</p>

                    <p><strong>🔗 Stay informed and date safely with Tinder’s latest safety initiatives.</strong></p>

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