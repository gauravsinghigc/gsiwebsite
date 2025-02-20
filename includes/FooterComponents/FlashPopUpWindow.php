<?php if (isset($_GET['hide_popup_form'])) {
    $HideForm = "none";
    $DisplayPopUpForm = 30000;
} else {
    $HideForm = "none";
    $DisplayPopUpForm = 5000;
} ?>
<section class="screen-container" style="display: <?php echo $HideForm; ?>;" id="InstantConsultantForm">
    <div class="content-box">
        <div class="container gsi-blog-area bg-gradient">
            <div class="row">
                <div class="col-md-7 pt-5 pb-5 mt-2 mb-2">
                    <img src="<?php echo STORAGE_URL; ?>/others/gaurav-singh-igc-gauravsinghigc-full-stack-developer-faridabad-visiting-card.JPG" class="img-fluid" title="<?php echo APP['APP_NAME']; ?>" alt="<?php echo APP['APP_NAME']; ?>">
                </div>
                <div class="col-md-5 pt-5 pb-5">
                    <h4 class="text-white">Book Free Consultant Now</h4>
                    <hr>
                    <form class="row" method="POST" action="<?php echo DOMAIN; ?>/controller/InstantBookFreeConsultant.php">
                        <div class="form-group col-md-6 col-sm-6 col-6">
                            <label for="name" class="text-white">Full Name</label>
                            <input type="text" class="form-control form-control-sm fs-5" name="FullName" placeholder="Enter your name" required>
                        </div>
                        <div class="form-group col-md-6 col-sm-6 col-6">
                            <label for="name" class="text-white">Phone Number</label>
                            <input type="tel" class="form-control form-control-sm fs-5" name="PhoneNumber" placeholder="+91" required>
                        </div>
                        <div class="form-group col-md-12">
                            <label class="text-white">Requirement Tags/Remark</label>
                            <textarea class="form-control form-control-sm fs-5" row="1" name="RequirementTagsRemark" placeholder="Website, Leads Generation, Mobile App, startup & don't know/confuse"></textarea>
                        </div>
                        <div class="form-group col-md-12">
                            <button type="submit" name="BOOK_FREE_CONSULTANT_INSTANT" class="gsi-btn btn-block">Book Free Consultant <i class="fa fa-angle-right"></i></button>
                        </div>
                    </form>
                </div>

                <div class="col-md-12 text-center">
                    <hr>
                    <a href="?hide_popup_form=true" class="gsi-btn btn-sm fs-6">CANCEL <i class="fa fa-times"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    setTimeout(function() {
        document.getElementById("InstantConsultantForm").style.display = "block";
    }, <?php echo $DisplayPopUpForm; ?>);
</script>