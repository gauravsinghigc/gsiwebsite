<?php
$RunningDir = "../..";
include $RunningDir . "/config.php";
$ServiceId = "blog10";

?>
<!doctype html>
<html lang="en">

<head>
    <title><?php echo APP_BLOGS[$ServiceId]['title']; ?> @ <?php echo APP['APP_NAME']; ?> Blogs</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes" />
    <?php include $RunningDir . "/assets/HeaderStylesheets.php"; ?>
    <meta name="title" content="<?php echo APP_BLOGS[$ServiceId]['title']; ?>">
    <meta name="description" content="<?php echo APP_BLOGS[$ServiceId]['desc']; ?>">
    <meta name="keywords" content="<?php echo APP_BLOGS[$ServiceId]['keywords']; ?>">
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
                    <h4>Case Registered for Developing a Fake Cybercrime Reporting Portal, Investigation in Progress</h4>

                    <p class="text-justify">Cybercrooks are finding new ways to deceive unsuspecting people. The Central Division <strong>Cyber Crime</strong> police have registered a case against an unidentified person who created a fraudulent <strong>National Cybercrime</strong> reporting portal to exploit people in need of assistance.</p>

                    <p class="text-justify">Based on the complaint lodged by <strong>Srinivas R.</strong>, a police sub-inspector with the <strong>1930 Cyber Crime Helpline</strong>, the police on Monday registered an FIR against the unknown individual, charging him under section 318(2) (<strong>deceptively obtaining money</strong>, property, or an unfair advantage) and 318(4) (<strong>fraudulently inducing the delivery of property</strong>) for further investigation.</p>

                    <p class="text-justify">According to the complainant, the 1930-cyber crime helpline was established to provide help to victims of cybercrimes and assist in filing cases through the <strong>NCRP portal</strong>.</p>

                    <p class="text-justify">However, the helpline team discovered that someone had created a link under the banner "<strong>Cyber Fraud Online Complaint</strong> - <strong>Cyber Crime Complaint Number 7501141599</strong>, Customers Legal Advice (<a href="http://www.customerslegaladvice.in">www.customerslegaladvice.in</a>)" and promoted it as a sponsored ad on <strong>Google</strong>.</p>

                    <p class="text-justify">Recently, a <strong>victim of cybercrime</strong> fraud from Bagalkote called the number to report an incident on January 26. The person who responded to the call assured the victim of assistance and fraudulently charged ₹1,999 as a “fee.” The victim later reported the matter to the police.</p>

                    <p class="text-justify">"This is a new form of <strong>cybercrime</strong>, and people should not be paying any money to report cybercrime incidents through the helpline," said a senior police officer.</p>

                    <p class="text-justify">"We have created awareness statewide and at station levels on how to prevent cybercrimes and avoid falling for such scams. Anyone who demands money or seeks sensitive information like <strong>bank account details</strong> and personal IDs should be reported," the official added.</p>

                    <p class="text-justify">The police are currently working on blocking the fraudulent link that was promoted on Google to prevent further harm, while efforts are underway to trace the accused using the <strong>money trail</strong>.</p>

                </div>



                <?php include $RunningDir . "/includes/sections/BlogsNavigationForDetails.php"; ?>
            </div>
        </div>

        <?php include $RunningDir . "/includes/sections/ContactUsSectionForm.php";  ?>
    </main>

    <?php
    include $RunningDir . "/includes/Footer.php";
    include $RunningDir . "/assets/FooterScripts.php"; ?>
</body>

</html>