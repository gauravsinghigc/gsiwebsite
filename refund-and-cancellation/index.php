<?php
$RunningDir = "..";
include $RunningDir . "/config.php"; ?>
<!doctype html>
<html lang="en">

<head>
    <title>Refund & Cancellation @ <?php echo APP['APP_NAME']; ?> - <?php echo APP['EXPERTISE']; ?></title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes" />
    <?php include $RunningDir . "/assets/HeaderStylesheets.php"; ?>
    <meta name="title" content="Refund and Cancellation Policy of Gaurav Singh (gauravsinghigc) - Full Stack Developer & IT Solutions Expert">
    <meta name="description" content="Learn about the Refund and Cancellation Policy for Gaurav Singh (gauravsinghigc) services. Understand the terms related to refunds, service cancellations, and conditions for full-stack development, CRM solutions, mobile app development, and IT support services.">
    <meta name="keywords" content="Gaurav Singh, gauravsinghigc, refund policy, cancellation policy, full stack developer, CRM solutions, mobile app development, IT support services, website refunds, service cancellations, Faridabad">

</head>

<body class="white-version template-color-1 spybody" data-spy="scroll" data-target=".navbar-example2" data-offset="70">
    <?php include $RunningDir . "/includes/PageHeader.php"; ?>
    <main class="main-page-wrapper">

        <div class="container" style="margin-top: 14rem;">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-left">
                        <h2 class="title mb-4">Refund And Cancellation <br> <?php echo APP['APP_NAME']; ?></h2>
                        <span class="subtitle">Last Updated at : 11 JAN, 2025 10:00 PM </span>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 mt-5 mb-5 pb-3">
                    <p class="text-justify"><strong>Refund and Cancellation Policy</strong></p>
                    <p class="text-justify">Welcome to Gaurav Singh (gauravsinghigc). By using our services, including our website, mobile applications, and any other services provided (collectively referred to as the "Services"), you agree to comply with and be bound by this Refund and Cancellation Policy. If you do not agree with these terms, please do not use our Services.</p>

                    <p class="text-justify"><strong>1. Refund Eligibility</strong></p>
                    <p class="text-justify">You may request a refund for the development charges paid for our services under the following conditions:</p>
                    <ul>
                        <li>Refunds are applicable only for development charges, and 40% of the paid amount is refundable.</li>
                        <li>Refund requests must be submitted within 45 days of the request date for processing.</li>
                        <li>Refund requests should be accompanied by a valid reason for the refund. We reserve the right to reject any refund request that does not provide a reasonable explanation.</li>
                    </ul>

                    <p class="text-justify"><strong>2. Non-Refundable Charges</strong></p>
                    <p class="text-justify">Certain charges are non-refundable, including but not limited to:</p>
                    <ul>
                        <li>Fees and charges paid to third-party vendors, service providers, or marketing ad budgets.</li>
                        <li>Any payments made for services that have already been fully rendered or initiated.</li>
                        <li>Payments related to hosting, software licenses, or any third-party services used for your project.</li>
                    </ul>

                    <p class="text-justify"><strong>3. Service Cancellation</strong></p>
                    <p class="text-justify">You may request a cancellation of services at any time, but please note that:</p>
                    <ul>
                        <li>Cancellation requests should be submitted in writing to our contact email address.</li>
                        <li>If the cancellation request is received after the service has been initiated, you may still be liable for the full service fee, excluding refundable development charges as stated above.</li>
                    </ul>

                    <p class="text-justify"><strong>4. Refund Processing Time</strong></p>
                    <p class="text-justify">Once a refund request is approved, the refundable amount (40% of the development charge) will be processed within 30 days. Please allow time for any delays depending on your payment method and bank processing times.</p>

                    <p class="text-justify"><strong>5. Exceptions</strong></p>
                    <p class="text-justify">We reserve the right to refuse any refund request in cases of misuse, fraudulent activity, or violation of our terms and conditions. If you have any concerns regarding the refund process, please reach out to us directly.</p>

                    <p class="text-justify"><strong>6. Contact Information</strong></p>
                    <p class="text-justify">If you have any questions or concerns regarding our Refund and Cancellation Policy, please contact us at:</p>
                    <span class="phone">Address: <a href="<?php echo APP['SOCIAL_ACCOUNS']['map-marker']; ?>" class="text-decoration-underline"><?php echo APP['ADDRESS']['PRIMARY']; ?></a></span><br>
                    <span class="phone">Phone: <a href="tel:<?php echo APP['PHONE_NUMBER']['PRIMARY']; ?>" class="text-decoration-underline">+91-<?php echo APP['PHONE_NUMBER']['PRIMARY']; ?></a></span><br>
                    <span class="mail">Email: <a href="mailto:<?php echo APP['EMAILS']['PRIMARY']; ?>" class="text-decoration-underline"><?php echo APP['EMAILS']['PRIMARY']; ?></a></span>
                </div>




            </div>
        </div>

        <?php include $RunningDir . "/includes/sections/ContactUsSectionForm.php";  ?>
    </main>

    <?php
    include $RunningDir . "/includes/Footer.php";
    include $RunningDir . "/assets/FooterScripts.php"; ?>
</body>

</html>