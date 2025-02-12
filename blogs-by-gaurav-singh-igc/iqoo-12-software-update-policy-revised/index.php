<?php
$RunningDir = "../..";
include $RunningDir . "/config.php";
$ServiceId = "blog18";

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
                    <h4>iQOO 12 Software Update Policy Extended: More OS & Security Updates</h4>

                    <p><strong>iQOO 12</strong>, the flagship smartphone from iQOO for <strong>2023</strong>, made its debut in <strong>India</strong> in <strong>December</strong>. Initially, the company committed to providing <strong>three years of OS updates</strong> and <strong>four years of security patches</strong>. However, with the latest revision, the device will now receive <strong>four years of Android OS updates</strong> and <strong>five years of security patches</strong>, ensuring improved <strong>longevity, security, and performance</strong>.</p>

                    <h5>📢 iQOO 12 to Get Software Support Until 2028</h5>

                    <p>In an official post on <strong>X (formerly Twitter)</strong>, <strong>iQOO India</strong> confirmed this updated policy, stating that the <strong>Android security patches</strong> will now be extended to <strong>five years</strong>. The device launched with <strong>FuntouchOS 14 (Android 14)</strong> and is set to receive <strong>software updates until 2027</strong> and security patches until <strong>2028</strong>. This move places iQOO among brands offering extended software support for flagship devices.</p>

                    <h5>📱 iQOO 12: Key Specifications & Features</h5>

                    <p>The <strong>iQOO 12</strong> is designed to deliver a premium experience with high-end hardware and an optimized software environment. Below are its standout features:</p>

                    <h6>🌟 Display & Build</h6>

                    <ul>
                        <li><strong>Screen:</strong> 6.78-inch <strong>2K AMOLED E7</strong> display with a resolution of <strong>1440x3200 pixels</strong>.</li>
                        <li><strong>Refresh Rate:</strong> Supports up to <strong>144Hz</strong> for ultra-smooth visuals.</li>
                        <li><strong>HDR & Design:</strong> HDR-ready with a <strong>92.42% screen-to-body ratio</strong> for an immersive experience.</li>
                    </ul>

                    <h6>⚡ Performance & Software</h6>

                    <ul>
                        <li><strong>Processor:</strong> <strong>Snapdragon 8 Gen 3</strong> (4nm) chipset.</li>
                        <li><strong>GPU:</strong> <strong>Adreno 750</strong> for enhanced gaming and graphics.</li>
                        <li><strong>RAM & Storage:</strong> Available in <strong>12GB/16GB LPDDR5X RAM</strong> and <strong>256GB/512GB</strong> storage options.</li>
                        <li><strong>Software:</strong> Ships with <strong>FuntouchOS 15 based on Android 15</strong> (recently updated in select markets).</li>
                    </ul>

                    <h6>📸 Camera System</h6>

                    <ul>
                        <li><strong>Rear Cameras:</strong> Triple camera setup:
                            <ul>
                                <li><strong>50MP primary sensor</strong> (OmniVision OV50H, f/1.7, 1/1.3-inch).</li>
                                <li><strong>50MP ultra-wide lens</strong> (120-degree field-of-view, f/2.0).</li>
                                <li><strong>64MP periscope telephoto lens</strong> (3x optical zoom, 100x hybrid zoom, f/2.6).</li>
                            </ul>
                        </li>
                        <li><strong>Front Camera:</strong> <strong>16MP</strong> wide-angle lens (f/2.5) for selfies & video calls.</li>
                    </ul>

                    <h6>🔋 Battery & Charging</h6>

                    <ul>
                        <li><strong>Battery:</strong> 5,000mAh with <strong>120W FlashCharge</strong>.</li>
                        <li><strong>Charging Speed:</strong> Fully charges in <strong>under 30 minutes</strong>.</li>
                    </ul>

                    <h6>📡 Connectivity & Features</h6>

                    <ul>
                        <li>5G, 4G LTE, Wi-Fi 7, Bluetooth 5.4.</li>
                        <li>GPS, NFC, infrared blaster, and USB 2.0 Type-C.</li>
                        <li>Fast & reliable <strong>fingerprint scanner</strong>.</li>
                    </ul>

                    <h5>✅ Strengths & Drawbacks of iQOO 12</h5>

                    <h6>👍 What Works Well?</h6>

                    <ul>
                        <li>Flagship-grade <strong>Snapdragon 8 Gen 3</strong> processor.</li>
                        <li>High-quality <strong>2K AMOLED display</strong> with a 144Hz refresh rate.</li>
                        <li>Reliable <strong>primary & telephoto cameras</strong>.</li>
                        <li>Solid <strong>build quality</strong> and premium design.</li>
                        <li>Fast <strong>120W charging</strong> – full charge in <strong>under 30 minutes</strong>.</li>
                        <li>Decent <strong>software support</strong> with extended updates.</li>
                    </ul>

                    <h6>👎 Areas That Could Be Improved</h6>

                    <ul>
                        <li><strong>Ultra-wide-angle camera</strong> is not as capable as the primary sensor.</li>
                        <li><strong>Low-light photography</strong> could be better.</li>
                        <li><strong>Frequent promotions</strong> from the app store may be distracting.</li>
                        <li>No <strong>wireless charging</strong> support.</li>
                    </ul>

                    <h5>📌 iQOO 12: A Future-Proof Flagship?</h5>

                    <p>With extended software support, top-tier hardware, and flagship features, the <strong>iQOO 12</strong> is a solid choice for users seeking long-term software reliability. The extended update policy makes it a future-proof investment, ensuring users get the latest security patches and Android features for years to come.</p>

                    <p><strong>🔗 Stay updated on the latest smartphone trends and software updates.</strong></p>

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