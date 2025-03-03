<section class="screen-container" style="display: none;" id="InstantConsultantForm">
    <a onclick="HidePopUpForm()" style="position: fixed;top: 2rem;right: 4rem;color: #f60000;font-size: 2rem !important;" class="gsi-btn btn-sm fs-6"><i class="fa fa-times"></i></a>
    <div class="content-box">
        <div class="container gsi-blog-area bg-gradient">
            <div class="row">
                <div class="col-md-12">
                    <center>
                        <img src="<?php echo APP['LOGO']['SQAURE']; ?>" style="margin:1% auto; width:15%;">
                    </center>
                    <h4 class="text-center pb-1 mb-0 text-black">Book Free Consultant Now</h4>
                    <p class="small fs-5 mt-0 text-center">Fill the form below and we'll reach you within 24 hours. We'll be happy to help you.</p>
                    <hr>
                    <form class="row" method="POST" action="<?php echo DOMAIN; ?>/controller/InstantBookFreeConsultant.php">
                        <div class="form-group col-md-6 col-sm-6 col-6">
                            <label for="name">Full Name</label>
                            <input type="text" class="form-control form-control-sm fs-5" name="FullName" placeholder="Enter your name" required>
                        </div>
                        <div class="form-group col-md-6 col-sm-6 col-6">
                            <label for="name">Phone Number</label>
                            <input type="tel" class="form-control form-control-sm fs-5" name="PhoneNumber" placeholder="+91" required>
                        </div>
                        <div class="form-group col-md-12">
                            <label>Requirement Tags/Remark</label>
                            <textarea class="form-control form-control-sm fs-5" row="1" name="RequirementTagsRemark" placeholder="Website, Leads Generation, Mobile App, startup & don't know/confuse"></textarea>
                        </div>
                        <div class="form-group col-md-12">
                            <button type="submit" name="BOOK_FREE_CONSULTANT_INSTANT" class="gsi-btn btn-block text-white">Book Free Consultant <i class="fa fa-angle-right"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    setTimeout(function() {
        document.getElementById("InstantConsultantForm").style.display = "block";
    }, 7000); //display pop-up enquiry form after 7s 

    function HidePopUpForm() {
        document.getElementById("InstantConsultantForm").style.display = "none";
    }
</script>