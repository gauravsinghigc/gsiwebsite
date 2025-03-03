<?php
$RunningDir = "..";
include $RunningDir . "/config.php"; ?>
<!doctype html>
<html lang="en">

<head>
    <title>Event Gallery @ <?php echo APP['APP_NAME']; ?> - <?php echo APP['EXPERTISE']; ?></title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes" />
    <?php include $RunningDir . "/assets/HeaderStylesheets.php"; ?>
    <meta name="title" content="Event Gallery by Gaurav Singh (gauravsinghigc) - Full Stack Developer & IT Solutions Expert">
    <meta name="description" content="Explore the event gallery of Gaurav Singh (gauravsinghigc), showcasing his participation in industry events, technology exhibitions, and conferences. Get insights into his experiences, highlights, and key moments from various events in full-stack development, CRM solutions, IT support, and digital marketing.">
    <meta name="keywords" content="Gaurav Singh, gauravsinghigc, event gallery, technology events, industry conferences, exhibitions, full stack developer, IT solutions, CRM solutions, IT support events, mobile app development exhibitions, digital marketing events, Faridabad, tech highlights">

</head>

<body class="white-version template-color-1 spybody" data-spy="scroll" data-target=".navbar-example2" data-offset="70">
    <?php include $RunningDir . "/includes/PageHeader.php"; ?>
    <main class="main-page-wrapper">

        <div class="container" style="margin-top: 14rem;">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-left">
                        <h2 class="title mb-4">Events Gallery <br> <?php echo APP['APP_NAME']; ?></h2>
                        <span class="subtitle">event gallery for short events and highlights</span>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 mt-5 mb-5 pb-3">
                    <p class="text-justify">Hello, I’m <strong>Gaurav Singh</strong>, known online as <strong>gauravsinghigc</strong>. Based in <strong>Faridabad</strong>, I have been an active participant in numerous industry <strong>events</strong> and <strong>technology conferences</strong> since 2019, where I’ve had the honor of showcasing my work and achievements. My focus is on sharing the latest updates on <strong>technology trends</strong>, <strong>IT support</strong>, and emerging innovations, while also celebrating the <strong>awards</strong> and <strong>accomplishments</strong> I’ve earned throughout my career.</p>

                    <h4>Explore My Event Gallery</h4>
                    <p class="text-justify">Here, you can explore key moments from the <strong>events</strong>, <strong>conferences</strong>, and <strong>seminars</strong> where I have shared my insights on <strong>full-stack development</strong>, <strong>CRM solutions</strong>, and new technologies. These events highlight my contributions to the IT industry and the recognition I’ve received for my expertise.</p>

                    <ul>
                        <li><strong>Industry Events:</strong> From keynote speeches to panel discussions, get a glimpse of my participation in leading industry events that focus on <strong>digital transformation</strong> and <strong>emerging technologies</strong>.</li>
                        <li><strong>Awards and Recognitions:</strong> I have been honored with several awards that recognize my contributions in <strong>full-stack development</strong>, <strong>IT support</strong>, and <strong>CRM solutions</strong>, showcasing my dedication to advancing the technology landscape.</li>
                        <li><strong>Technology Achievements:</strong> Discover the cutting-edge projects I’ve been a part of, including collaborations with industry leaders and innovators in <strong>cloud computing</strong>, <strong>artificial intelligence</strong>, and <strong>blockchain technology</strong>.</li>
                        <li><strong>Event Highlights:</strong> View highlights from various <strong>tech exhibitions</strong>, where I’ve had the chance to present solutions that aim to shape the future of technology.</li>
                    </ul>

                    <h4>Technology Achievements and Awards</h4>
                    <p class="text-justify">Over the years, I’ve had the privilege of earning recognition for my work in several technology domains. Some of my notable <strong>achievements</strong> include:</p>

                    <ul>
                        <li><strong>Tech Innovation Awards:</strong> Recognized for introducing innovative solutions in <strong>mobile app development</strong>, <strong>CRM systems</strong>, and <strong>custom web development</strong>.</li>
                        <li><strong>Leadership in IT Support:</strong> Awarded for my efforts in providing excellent <strong>IT support</strong> services, resolving critical issues, and ensuring smooth business operations.</li>
                        <li><strong>Excellence in Full-Stack Development:</strong> Recognized for my contributions in <strong>full-stack development</strong>, delivering high-performance and scalable solutions.</li>
                        <li><strong>Outstanding Digital Marketing Contributions:</strong> Awarded for integrating <strong>digital marketing strategies</strong> into IT solutions to drive business growth.</li>
                    </ul>

                    <h4>Stay Updated with My Latest Achievements and Event News</h4>
                    <p class="text-justify">Keep following my <strong>event gallery</strong> to stay up-to-date with my latest achievements, awards, and events. Through these updates, I share valuable insights into the technologies I am working with, as well as my continuous journey toward innovation in the tech world.</p>

                    <h4>Contact Me for Collaboration and Innovation</h4>
                    <p class="text-justify">If you’re interested in collaborating, learning about my latest projects, or discussing how my <strong>technology achievements</strong> and <strong>awards</strong> can benefit your business, feel free to get in touch. Let’s explore innovative solutions and achieve great success together!</p>
                </div>



            </div>
        </div>

        <div class="container mt-5 pt-1 mb-5">
            <div class="row mt-3">
                <div class="col-lg-12">
                    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="100" data-aos-once="true" class="section-title text-center">
                        <span class="subtitle">latets event gallery</span>
                        <h2 class="title">Latest Events & Archievements</h2>
                    </div>
                </div>
            </div>
            <div class="row row--25 mt--30 mt_md--10 mt_sm--10">
                <?php include $RunningDir . "/includes/sections/EventGallery.php"; ?>
            </div>
        </div>

        <?php include $RunningDir . "/includes/sections/ContactUsSectionForm.php";  ?>
    </main>

    <?php
    include $RunningDir . "/includes/Footer.php";
    include $RunningDir . "/assets/FooterScripts.php"; ?>
</body>

</html>