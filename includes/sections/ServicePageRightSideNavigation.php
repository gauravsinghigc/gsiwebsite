<div class="col-md-4 mt-5 mb-5 pb-3">
    <h5>Browse More Services</h5>
    <hr>
    <ul class='gsi-service-nav mb-5'>
        <?php foreach (WHAT_I_DO as $Services => $ServicesValues) { ?>
            <li>
                <a href="<?php echo $ServicesValues['link']; ?>">
                    <img src="<?php echo $ServicesValues['image']; ?>">
                    <span><?php echo $ServicesValues['name']; ?></span>
                </a>
            </li>
        <?php } ?>
    </ul>
    <br>
    <h5 class="mb-1">Book Free Consultant</h5>
    <p class="small">for understanding your requirements and provider better solutions for it.</p>
    <hr>
    <form class="box-shadow p-5 rounded-3">
        <div class="form-group">
            <label>Full Name</label>
            <input type="text" class="form-control" placeholder="">
        </div>
        <div class="form-group">
            <label>Phone Number</label>
            <input type="tel" class="form-control" placeholder="">
        </div>
        <div class="form-group">
            <label>Email-ID</label>
            <input type="email" class="form-control" placeholder="">
        </div>
        <div class="form-group">
            <label>Service Required</label>
            <select required class="form-control form-control-lg">
                <option value="">Select Service</option>
                <option value='Website Development'>Website Development</option>
                <option value='CRM Solutions'>CRM Solutions</option>
                <option value='Mobile App Development'>Mobile App Development</option>
                <option value='Digital Marketing'>Digital Marketing</option>
                <option value='Lead Generation'>Lead Generation</option>
                <option value='IT Support and Maintenance'>IT Support and Maintenance</option>
                <option value='Cloud Solutions'>Cloud Solutions</option>
                <option value='Other'>Other</option>
            </select>
        </div>
        <div class="form-group">
            <label>Enter Message </label>
            <textarea class="form-control" rows="5" placeholder="Start typing your requirement"></textarea>
        </div>
        <div class="form-group mt-3">
            <button type="submit" class="gsi-btn btn-primary btn-block">BOOK FREE CONSULTANT</button>
        </div>
    </form>
</div>