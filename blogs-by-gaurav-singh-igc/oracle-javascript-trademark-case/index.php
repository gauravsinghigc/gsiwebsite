<?php
$RunningDir = "../..";
include $RunningDir . "/config.php";
$ServiceId = "blog27";

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
                        <h4>Oracle Seeks Dismissal of Fraud Claim in JavaScript Trademark Dispute</h4>

                        <p><strong>Oracle</strong> has filed a motion to dismiss a fraud claim in an ongoing <strong>trademark dispute</strong> over its long-standing ownership of the <strong>"JAVASCRIPT" trademark</strong>. The company’s legal filing, submitted to the <strong>United States Patent and Trademark Office (USPTO) Trademark Trial and Appeal Board (TTAB)</strong>, asserts that the claim lacks sufficient legal grounds.</p>

                        <p>The dispute was initiated by <strong>Deno Land Inc.</strong>, which filed a petition to cancel Oracle’s <strong>trademark registration No. 2416017</strong>, alleging fraud in the renewal process. Oracle, however, argues that Deno Land’s claim fails to meet the <strong>heightened legal standards</strong> required for fraud allegations.</p>

                        <h5>🔍 Oracle’s Motion to Dismiss</h5>

                        <p>Oracle’s motion, filed under <strong>Federal Rule of Civil Procedure 12(b)(6)</strong>, seeks to dismiss the fraud claim on the basis that Deno Land has not provided a <strong>plausible legal argument</strong> to support its allegations.</p>

                        <h6>🔹 Key Arguments in Oracle’s Filing</h6>

                        <ul>
                            <li><strong>Failure to Meet Fraud Standards</strong>: Oracle asserts that the petition does not provide <strong>clear and convincing evidence</strong> of fraud.</li>
                            <li><strong>Unchallenged Primary Specimen</strong>: The petition ignores Oracle’s <strong>primary evidence</strong> submitted for renewal, which remains valid.</li>
                            <li><strong>No Proof of Deceptive Intent</strong>: The filing argues that Deno Land has not demonstrated that Oracle acted <strong>with intent to deceive</strong>.</li>
                            <li><strong>Materiality Not Established</strong>: The petition does not prove that the USPTO relied <strong>solely</strong> on the contested evidence for renewal approval.</li>
                        </ul>

                        <h5>📌 Background of the JavaScript Trademark Dispute</h5>

                        <p>Oracle has held the <strong>JAVASCRIPT</strong> trademark since at least <strong>1996</strong>, using it in relation to <strong>developer tools, educational services, and software</strong>. The mark was officially registered on <strong>December 26, 2000</strong>, and has undergone multiple renewals, including the most recent renewal on <strong>December 26, 2019</strong>.</p>

                        <h6>🔹 2019 Renewal & Fraud Allegation</h6>

                        <ul>
                            <li>Oracle submitted two specimens for renewal:
                                <ul>
                                    <li><strong>Primary Specimen:</strong> Displayed the JAVASCRIPT mark in use on Oracle’s website via the <strong>JavaScript Extension Toolkit</strong>.</li>
                                    <li><strong>Node.js Specimen:</strong> A screenshot of the <strong>Node.js website</strong>, which Deno Land claims was fraudulent.</li>
                                </ul>
                            </li>
                            <li><strong>Deno Land’s Claim:</strong> The company alleges that the <strong>Node.js Specimen</strong> was misleading and that Oracle knowingly submitted <strong>fraudulent evidence</strong> to the USPTO.</li>
                            <li><strong>Oracle’s Defense:</strong> The motion argues that the fraud claim is <strong>invalid</strong> because the <strong>Primary Specimen</strong> remains unchallenged and was sufficient for renewal.</li>
                        </ul>

                        <h5>🛡️ Legal Standards for Fraud Claims</h5>

                        <p>Oracle’s motion emphasizes that <strong>fraud in trademark law</strong> requires proof of <strong>deceptive intent and material misrepresentation</strong>. Under Rule <strong>12(b)(6)</strong>, a claim must present a <strong>plausible case</strong> to proceed.</p>

                        <h6>🔹 Oracle’s Key Legal Arguments</h6>

                        <ul>
                            <li>🚨 <strong>Fraud Must Be Pled with Particularity</strong>: The petition does not specify any <strong>false statements</strong> related to the Primary Specimen.</li>
                            <li>🔍 <strong>No Proof of Materiality</strong>: The USPTO did not rely <strong>exclusively</strong> on the contested specimen for approval.</li>
                            <li>🔑 <strong>Lack of Deceptive Intent</strong>: The petition does not demonstrate that Oracle intentionally misled the USPTO.</li>
                        </ul>

                        <h5>📅 Oracle’s Request to the TTAB</h5>

                        <p>Oracle has asked the <strong>Trademark Trial and Appeal Board (TTAB)</strong> to:</p>

                        <ul>
                            <li>✅ <strong>Dismiss the fraud claim with prejudice</strong>, preventing further amendments to the petition.</li>
                            <li>✅ <strong>Reset its response deadline</strong> for the remaining claims to at least <strong>30 days after</strong> the Board’s decision.</li>
                        </ul>

                        <h5>📝 Conclusion</h5>

                        <p>The legal battle over the <strong>JavaScript trademark</strong> continues, with Oracle pushing back against Deno Land Inc.'s fraud allegations. Oracle argues that the <strong>fraud claim lacks merit</strong> and should be dismissed outright. As the case progresses, the TTAB’s ruling on this motion will determine the next steps in this high-profile <strong>trademark dispute</strong>.</p>

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