<?php
$RunningDir = "..";
include $RunningDir . "/config.php"; ?>
<!doctype html>
<html lang="en">

<head>
    <title>Pricing @ <?php echo APP['APP_NAME']; ?> - <?php echo APP['EXPERTISE']; ?></title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes" />
    <?php include $RunningDir . "/assets/HeaderStylesheets.php"; ?>
    <meta name="title" content="Affordable IT Solutions by Gaurav Singh (gauravsinghigc) - Full Stack Developer & IT Support Specialist">
    <meta name="description" content="Explore affordable IT services by Gaurav Singh (gauravsinghigc) in Faridabad. Offering full stack development, custom web solutions, CRM systems, mobile apps, digital marketing, and IT support, all tailored to fit your budget.">
    <meta name="keywords" content="Gaurav Singh, gauravsinghigc, affordable IT solutions, full stack developer, web development, CRM solutions, mobile app development, digital marketing services, cost-effective IT support, budget-friendly services, Faridabad, software development, small business solutions">

</head>

<body class="white-version template-color-1 spybody" data-spy="scroll" data-target=".navbar-example2" data-offset="70">
    <?php include $RunningDir . "/includes/PageHeader.php"; ?>
    <main class="main-page-wrapper">

        <div class="container" style="margin-top: 14rem;">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-left">
                        <h2 class="title mb-4">About my pricing, subscriptions and renewals <br> <?php echo APP['APP_NAME']; ?></h2>
                        <span class="subtitle">open price, subscriptions and renewal charges </span>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 mt-5 mb-5 pb-3">
                    <p>Hello, I’m <strong>Gaurav Singh</strong>, widely recognized online as <strong>gauravsinghigc</strong>. Based in <strong>Faridabad</strong>, I have been actively working in the <strong>IT industry since 2019</strong>, offering innovative solutions that drive business success at affordable prices. As a <strong>full-stack developer</strong>, <strong>CRM specialist</strong>, and <strong>IT support professional</strong>, I specialize in delivering secure, scalable, and performance-driven solutions tailored to meet unique business needs while keeping my pricing transparent and flexible.</p>

                    <h4>My Pricing</h4>
                    <p class="text-justify">I believe in providing value without compromising on quality. My pricing structure is designed to be open, affordable, and flexible to meet the diverse needs of my clients. Here’s a breakdown of the different pricing models I offer:</p>

                    <ul>
                        <li><strong>One-Time Payment:</strong> For projects with a defined scope and timeline, I offer a one-time payment option. This allows you to make a single payment for the entire service, ensuring clarity and simplicity.</li>
                        <li><strong>Subscription Model:</strong> For ongoing services, such as CRM management or regular updates to your website or app, I offer a subscription-based pricing model. This can be customized based on the frequency of service required (monthly, quarterly, or yearly). Subscription prices are affordable, ensuring long-term support without breaking the bank.</li>
                        <li><strong>On-Rent Basis:</strong> If you require specific services or features on a temporary basis, I also offer a flexible on-rent pricing model. You can rent out the service or solution for the duration of your project, with clear terms and conditions.</li>
                        <li><strong>Renewal Charges:</strong> For services that require ongoing maintenance or renewal, I offer transparent renewal charges based on the scope of work and service period. There are no hidden fees—what you see is what you get.</li>
                    </ul>

                    <h4>Payment Methods</h4>
                    <p class="text-justify">I understand the importance of convenience when it comes to payments. I offer various payment methods to make it easy for you to settle the fees:</p>

                    <ul>
                        <li><strong>Bank Transfer</strong>: Pay directly via bank transfer for one-time or subscription-based payments.</li>
                        <li><strong>Online Payment Gateways</strong>: I accept payments through popular online payment methods like <strong>PayPal</strong>, <strong>Stripe</strong>, and <strong>Razorpay</strong>.</li>
                        <li><strong>Credit/Debit Cards</strong>: Secure payments via major credit and debit cards are also accepted.</li>
                        <li><strong>Cheque Payments</strong>: For those who prefer traditional methods, I also accept cheques for one-time payments.</li>
                    </ul>

                    <h4>Why Work with Gaurav Singh (gauravsinghigc)?</h4>
                    <p class="text-justify">Partnering with me means you’ll get top-quality IT services at transparent and affordable prices. My approach ensures you know exactly what to expect, with no hidden charges or surprises. I’m committed to delivering exceptional solutions that drive your business forward while providing flexible pricing to suit your budget.</p>

                    <h4>Let’s Elevate Your Business</h4>
                    <p class="text-justify">Whether you need a secure web application, a custom CRM, or a comprehensive digital marketing strategy, I’m here to help. Let’s collaborate to create innovative solutions that drive your business forward. Contact me today for a free consultation, and let’s discuss how we can work together to achieve your goals—within your budget!</p>
                </div>

            </div>
        </div>

        <div class="container mt-5 pt-1">
            <div class="row mt-5">
                <div class="col-lg-3 col-xl-4 mb_md--40 mb_sm--40 small-margin-pricing">
                    <div class="d-block d-lg-flex text-center d-lg-left section-flex flex-wrap align-content-start h-100 pricing-bg box-shadow" style="background-image:url(<?php echo STORAGE_URL; ?>/pricing/pricing-bg-image-by-gauravsinghigc.jpg);">
                        <div class="position-sticky sticky-top rbt-sticky-top-adjust">
                            <div class="section-title text-left">
                                <span class="subtitle text-center text-lg-left">Pricing</span>
                                <h2 class="title text-center text-lg-left text-dark">My Pricing</h2>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-9 col-xl-8">
                    <!-- Pricing Area -->
                    <div class="navigation-wrapper">
                        <ul class="nav" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-style" id="test-tab" data-bs-toggle="tab" href="#test" role="tab" aria-controls="test" aria-selected="false">Starter Plans</a>
                            </li>
                            <li class="nav-item recommended">
                                <a class="nav-style active" id="profile-tab" data-bs-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="true">Standard Plans</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-style" id="contact-tab" data-bs-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Customized Plans</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade" id="test" role="tabpanel" aria-labelledby="test-tab">
                                <!-- Pricing Start -->
                                <div class="gsi-pricing">
                                    <div class="pricing-header">
                                        <div class="header-left">
                                            <h2 class="title">Landing Page + Social Media Optimization</h2>
                                            <span>Enhance online presence organically</span>

                                            <ul class="pricing-for">
                                                <li><i class="fa fa-facebook"></i></li>
                                                <li><i class="fa fa-instagram"></i></li>
                                                <li><i class="fa fa-linkedin"></i></li>
                                                <li><i class="fa fa-twitter"></i></li>
                                                <li><i class="fa fa-map-marker"></i></li>
                                            </ul>
                                        </div>
                                        <div class="header-right">
                                            <span>Rs.2999</span><br>
                                            <i class="pull-right p-2 rounded-4 mt-2">Per month</i>
                                        </div>
                                    </div>
                                    <div class="pricing-body">
                                        <p class="description text-justify mb-4">
                                            Optimize your landing page with a sleek, responsive design, compelling CTAs, and engaging content to captivate visitors instantly. Boost your online presence organically through targeted social media strategies and consistent brand messaging.
                                        </p>
                                        <div class="check-wrapper">
                                            <div class="left-area">
                                                <div class="check d-flex">
                                                    <i data-feather="check"></i>
                                                    <p>5 Page Responsive Landing Page</p>
                                                </div>
                                                <div class="check d-flex">
                                                    <i data-feather="check"></i>
                                                    <p>Instant WhatsApp Chat</p>
                                                </div>
                                                <div class="check d-flex">
                                                    <i data-feather="check"></i>
                                                    <p>Highlight Call to action Button</p>
                                                </div>
                                                <div class="check d-flex">
                                                    <i data-feather="check"></i>
                                                    <p>PopUp Form for instant queries</p>
                                                </div>
                                                <div class="check d-flex">
                                                    <i data-feather="check"></i>
                                                    <p>Live Chat Plugin (Meta Messenger)</p>
                                                </div>
                                                <div class="check d-flex">
                                                    <i data-feather="check"></i>
                                                    <p>SEO Friendly Landing Page</p>
                                                </div>
                                            </div>
                                            <div class="right-area">
                                                <div class="check d-flex">
                                                    <i data-feather="check"></i>
                                                    <p>Auto send Greeting Messages</p>
                                                </div>
                                                <div class="check d-flex">
                                                    <i data-feather="check"></i>
                                                    <p>Engage Relative Communities</p>
                                                </div>
                                                <div class="check d-flex">
                                                    <i data-feather="check"></i>
                                                    <p>Service Highlight on All Platforms</p>
                                                </div>
                                                <div class="check d-flex">
                                                    <i data-feather="check"></i>
                                                    <p>2 Creative Per Week (8 Creative/Month)</p>
                                                </div>
                                                <div class="check d-flex">
                                                    <i data-feather="check"></i>
                                                    <p>1 Reel Per Week (4 Reels/Months)</p>
                                                </div>
                                                <div class="check d-flex">
                                                    <i data-feather="check"></i>
                                                    <p>Weekly Analytics Reports</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pricing-footer">
                                        <a href="#" class="gsi-btn d-block">
                                            <span>ORDER NOW</span>
                                            <i data-feather="arrow-right"></i>
                                        </a>
                                        <div class="time-line">
                                            <div class="single-cmt d-flex">
                                                <i data-feather="clock"></i>
                                                <span>Landing Page @ 2 Days Delivery</span>
                                            </div>
                                            <div class="single-cmt d-flex">
                                                <i data-feather="activity"></i>
                                                <span> 3 Revisions Per Creative/Reels/Shorts</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End -->
                            </div>

                            <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <!-- Pricing Start -->
                                <div class="gsi-pricing">
                                    <div class="pricing-header">
                                        <div class="header-left">
                                            <h2 class="title">Landing Page +<br> Social Media Marketing (SMM) +<br> Social Media Optimization (SMO)</h2>
                                            <span>Enhance online presence organically as well as paid</span>

                                            <ul class="pricing-for">
                                                <li><i class="fa fa-facebook"></i></li>
                                                <li><i class="fa fa-instagram"></i></li>
                                                <li><i class="fa fa-linkedin"></i></li>
                                                <li><i class="fa fa-twitter"></i></li>
                                                <li><i class="fa fa-map-marker"></i></li>
                                                <li><i class="fa fa-youtube"></i></li>
                                            </ul>
                                        </div>
                                        <div class="header-right">
                                            <span>Rs.6999</span><br>
                                            <i class="pull-right p-2 rounded-4 mt-2">Per month</i>
                                        </div>
                                    </div>
                                    <div class="pricing-body">
                                        <p class="description text-justify mb-4">
                                            Enhance your landing page with a modern design, clear CTAs, and engaging content to convert visitors effectively. Strengthen your online presence with impactful Social Media Marketing (SMM) campaigns and strategic Social Media Optimization (SMO) to maximize organic reach and brand visibility.
                                        </p>
                                        <div class="check-wrapper">
                                            <div class="left-area">
                                                <div class="check d-flex">
                                                    <i data-feather="check"></i>
                                                    <p>10-12 Page Responsive Website</p>
                                                </div>
                                                <div class="check d-flex">
                                                    <i data-feather="check"></i>
                                                    <p>Instant WhatsApp Chat</p>
                                                </div>
                                                <div class="check d-flex">
                                                    <i data-feather="check"></i>
                                                    <p>Highlight Call to action Button</p>
                                                </div>
                                                <div class="check d-flex">
                                                    <i data-feather="check"></i>
                                                    <p>PopUp Form for instant queries</p>
                                                </div>
                                                <div class="check d-flex">
                                                    <i data-feather="check"></i>
                                                    <p>Live Chat Plugin (Meta Messenger)</p>
                                                </div>
                                                <div class="check d-flex">
                                                    <i data-feather="check"></i>
                                                    <p>SEO Friendly Pages & Blogs</p>
                                                </div>
                                                <div class="check d-flex">
                                                    <i data-feather="check"></i>
                                                    <p>E-Commerce Ready Upto 50 Items</p>
                                                </div>
                                                <div class="check d-flex">
                                                    <i data-feather="check"></i>
                                                    <p>1 Blogs Per Week (4 Blogs)</p>
                                                </div>
                                                <div class="check d-flex">
                                                    <i data-feather="check"></i>
                                                    <p>Events, Media & Portfolio Gallery</p>
                                                </div>
                                            </div>
                                            <div class="right-area">
                                                <div class="check d-flex">
                                                    <i data-feather="check"></i>
                                                    <p>Auto send Greeting Messages</p>
                                                </div>
                                                <div class="check d-flex">
                                                    <i data-feather="check"></i>
                                                    <p>Engage Relative Communities</p>
                                                </div>
                                                <div class="check d-flex">
                                                    <i data-feather="check"></i>
                                                    <p>Service Highlight on All Platforms</p>
                                                </div>
                                                <div class="check d-flex">
                                                    <i data-feather="check"></i>
                                                    <p>3 Creative Per Week (12 Creative/Month)</p>
                                                </div>
                                                <div class="check d-flex">
                                                    <i data-feather="check"></i>
                                                    <p>1 Reel/Short Per Week (4 Reels/Months)</p>
                                                </div>
                                                <div class="check d-flex">
                                                    <i data-feather="check"></i>
                                                    <p>1 Active Meta (Fb & Insta) Campaign</p>
                                                </div>
                                                <div class="check d-flex">
                                                    <i data-feather="check"></i>
                                                    <p>Youtube Optimization (Organically)</p>
                                                </div>
                                                <div class="check d-flex">
                                                    <i data-feather="check"></i>
                                                    <p>Appprox. 2-5 Leads Per Week</p>
                                                </div>
                                                <div class="check d-flex">
                                                    <i data-feather="check"></i>
                                                    <p>Weekly Analytics Reports</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pricing-footer">
                                        <a href="#" class="gsi-btn d-block">
                                            <span>ORDER NOW</span>
                                            <i data-feather="arrow-right"></i>
                                        </a>
                                        <div class="time-line">
                                            <div class="single-cmt d-flex">
                                                <i data-feather="clock"></i>
                                                <span>Landing Page @ 3-5 Days Delivery</span>
                                            </div>
                                            <div class="single-cmt d-flex">
                                                <i data-feather="activity"></i>
                                                <span> 3 Revisions Per Creative/Reels/Shorts</span>
                                            </div>
                                            <div class="single-cmt d-flex">
                                                <i data-feather="star"></i>
                                                <span> Estimate 2-5 Leads Per Week @ Rs.500/day Meta Ad Budget</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End -->
                            </div>

                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                <!-- Pricing Start -->
                                <div class="gsi-pricing">
                                    <div class="pricing-header">
                                        <div class="header-left">
                                            <h2 class="title">Customize Your Requirements</h2>
                                            <span>Web & Mobile App Development, Digital Marketing & Quality Leads Generation!</span>
                                            <small class="small">
                                                <small>
                                                    Please select your requirement, we will provider as much as possible best pricing and services for you.
                                                </small>
                                            </small>
                                        </div>
                                    </div>
                                    <div class="pricing-body">
                                        <div class="contact-form-wrapper customized">
                                            <div class="introduce">
                                                <form class="rwt-dynamic-form row" method="POST">
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label for="contact-name">Your Full Name</label>
                                                            <input class="form-control" name="contact-name" id="contact-name" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label for="contact-phone">Phone Number</label>
                                                            <input class="form-control" name="contact-phone" id="contact-phone" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label for="contact-email">Email-Id</label>
                                                            <input class="form-control" id="contact-email" name="contact-email" type="email">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <h6 class="">Select Services</h6>
                                                    </div>
                                                    <div class="col-lg-6 mb-3">
                                                        <div class='form-group selections'>
                                                            <label>
                                                                <input type='checkbox' name='REQUIREMENT' value=''>
                                                                <span>Landing Pages</span>
                                                            </label>
                                                        </div>
                                                        <div class='form-group selections'>
                                                            <label>
                                                                <input type='checkbox' name='REQUIREMENT' value=''>
                                                                <span>Dynamic Websites</span>
                                                            </label>
                                                        </div>
                                                        <div class='form-group selections'>
                                                            <label>
                                                                <input type='checkbox' name='REQUIREMENT' value=''>
                                                                <span>E-Commerce Websites</span>
                                                            </label>
                                                        </div>
                                                        <div class='form-group selections'>
                                                            <label>
                                                                <input type='checkbox' name='REQUIREMENT' value=''>
                                                                <span>Mobile Apps (Android & iOS App)</span>
                                                            </label>
                                                        </div>
                                                        <div class='form-group selections'>
                                                            <label>
                                                                <input type='checkbox' name='REQUIREMENT' value=''>
                                                                <span>Customized CRM & App Development</span>
                                                            </label>
                                                        </div>
                                                        <div class='form-group selections'>
                                                            <label>
                                                                <input type='checkbox' name='REQUIREMENT' value=''>
                                                                <span>Industry Automation</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 mb-3">
                                                        <div class='form-group selections'>
                                                            <label>
                                                                <input type='checkbox' name='REQUIREMENT' value=''>
                                                                <span>Social Media Optimization</span>
                                                            </label>
                                                        </div>
                                                        <div class='form-group selections'>
                                                            <label>
                                                                <input type='checkbox' name='REQUIREMENT' value=''>
                                                                <span>Social Media Marketing (Meta Ads)</span>
                                                            </label>
                                                        </div>
                                                        <div class='form-group selections'>
                                                            <label>
                                                                <input type='checkbox' name='REQUIREMENT' value=''>
                                                                <span>Google Ads</span>
                                                            </label>
                                                        </div>
                                                        <div class='form-group selections'>
                                                            <label>
                                                                <input type='checkbox' name='REQUIREMENT' value=''>
                                                                <span>Youtube Ads</span>
                                                            </label>
                                                        </div>
                                                        <div class='form-group selections'>
                                                            <label>
                                                                <input type='checkbox' name='REQUIREMENT' value=''>
                                                                <span>Leads Generation</span>
                                                            </label>
                                                        </div>
                                                        <div class='form-group selections'>
                                                            <label>
                                                                <input type='checkbox' name='REQUIREMENT' value=''>
                                                                <span>Complete Sales Automation</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 mb-3">
                                                        <div class="form-group">
                                                            <label>Industry Type</label>
                                                            <select name='' class="form-control form-control-lg p-3">
                                                                <option value="">Select Industry</option>
                                                                <option value="Insurance_And_Finance">Insurance & Finance</option>
                                                                <option value="Manufacturing_And_Logistics">Manufacturing & Logistics</option>
                                                                <option value="Healthcare_And_Pharma">Healthcare & Pharma</option>
                                                                <option value="Retail_And_Consumer_Goods">Retail & Consumer Goods</option>
                                                                <option value="Education_And_Training">Education & Training</option>
                                                                <option value="Government_And_Military">Government & Military</option>
                                                                <option value="Transportation_And_Logistics">Transportation & Logistics</option>
                                                                <option value="Marketing_And_Advertising">Marketing & Advertising</option>
                                                                <option value="Telecommunications_And_Networking">Telecommunications & Networking</option>
                                                                <option value="Energy_And_Utilities">Energy & Utilities</option>
                                                                <option value="Construction_And_Engineering">Construction & Engineering</option>
                                                                <option value="Art_And_Design">Art & Design</option>
                                                                <option value="Hospitality_And_Event_Management">Hospitality & Event Management</option>
                                                                <option value="Other">Other</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 mb-3">
                                                        <div class="form-group">
                                                            <label>Prefer Time to Contact</label>
                                                            <input type='datetime-local' min="<?php echo DATE('Y-m-d 09:00', strtotime("+1 day")); ?>" class="form-control form-control-lg" value="<?php echo DATE('Y-m-d h:m', strtotime("+1 day")); ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <div class="form-group">
                                                            <label>Message </label>
                                                            <textarea name="message" class="form-control form-control-lg" rows="2"></textarea>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12">
                                                        <button name="submit" type="submit" id="submit" class="gsi-btn">
                                                            <span>SEND DETAILS</span>
                                                            <i data-feather="arrow-right"></i>
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pricing-footer">
                                        <div class="time-line d-flex">
                                            <div class="single-cmt d-flex">
                                                <i data-feather="clock"></i>
                                                <span>We will contact you as soon as possible on prefer shared date-time.</span>
                                            </div>
                                            <div class="single-cmt d-flex">
                                                <i data-feather="activity"></i>
                                                <span>Stay Connected and online!</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End -->
                            </div>
                        </div>
                    </div>
                    <!-- End -->
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