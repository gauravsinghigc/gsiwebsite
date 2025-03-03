 <div class="gsi-contact-area gsi-section-gap section-separator" id="contacts">
     <div class="container">
         <div class="row">
             <div class="col-lg-12">
                 <div class="section-title text-center">
                     <span class="subtitle">Contact Me & Get Latest Offers</span>
                     <h2 class="title">Connect With Me</h2>
                 </div>
             </div>
         </div>

         <div class="row mt--50 mt_md--40 mt_sm--40 mt-contact-sm">
             <div class="col-lg-5">
                 <div class="contact-about-area">
                     <div class="thumbnail">
                         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3510.5098971346247!2d77.35559239999999!3d28.373663399999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cdb7bc6e052ed%3A0xe5e8508a6f57c413!2sGAURAVSINGHIGC!5e0!3m2!1sen!2sin!4v1736417567378!5m2!1sen!2sin" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                     </div>
                     <div class="title-area">
                         <h4 class="title"><?php echo APP['APP_NAME']; ?></h4>
                         <span><?php echo APP['EXPERTISE']; ?></span>
                     </div>
                     <div class="description text-justify">
                         <p>I am available for freelance work like web development, crm and mobile app development, digital marketing and promotions, leads generations and industry automation.
                         </p>
                         <span class="phone">Address: <a href="https://www.google.com/maps/search/gauravsinghigc/" class="text-decoration-underline"><?php echo APP['ADDRESS']['PRIMARY']; ?></a></span>
                         <span class="phone">Phone: <a href="tel:<?php echo APP['PHONE_NUMBER']['PRIMARY']; ?>" class="text-decoration-underline">+91-<?php echo APP['PHONE_NUMBER']['PRIMARY']; ?></a></span>
                         <span class="mail">Email: <a href="mailto:<?php echo APP['EMAILS']['PRIMARY']; ?>" class="text-decoration-underline"><?php echo APP['EMAILS']['PRIMARY']; ?></a></span>
                     </div>
                 </div>
             </div>
             <div data-aos-delay="600" class="col-lg-7 contact-input">
                 <div class="contact-form-wrapper">
                     <div class="introduce">
                         <form class="GSI-WEBSITE-CONTACT-FORM rnt-contact-form row" method="POST" action="<?php echo DOMAIN; ?>/controller/ContactHandler.php">
                             <div class="col-lg-6">
                                 <div class="form-group">
                                     <label for="contact-name">Your Name</label>
                                     <input class="form-control form-control-lg" name="FULL_NAME" type="text">
                                 </div>
                             </div>

                             <div class="col-lg-6">
                                 <div class="form-group">
                                     <label for="contact-phone">Phone Number</label>
                                     <input class="form-control" name="PHONE_NUMBER" type="text">
                                 </div>
                             </div>

                             <div class="col-lg-12">
                                 <div class="form-group">
                                     <label for="contact-email">Email</label>
                                     <input class="form-control form-control-sm" name="EMAIL_ID" type="email">
                                 </div>
                             </div>

                             <div class="col-lg-12">
                                 <div class="form-group">
                                     <label for="subject">subject/topic/reason</label>
                                     <input class="form-control form-control-sm" name="SUBJECT" type="text">
                                 </div>
                             </div>

                             <div class="col-lg-12">
                                 <div class="form-group">
                                     <label for="contact-message">Your Message</label>
                                     <textarea name="MESSAGE" cols="30" rows="10"></textarea>
                                 </div>
                             </div>

                             <div class="col-lg-12">
                                 <button name="SEND_CONTACT_FORM" type="submit" class="gsi-btn">
                                     <span>SEND MESSAGE</span>
                                     <i data-feather="arrow-right"></i>
                                 </button>
                             </div>
                         </form>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>