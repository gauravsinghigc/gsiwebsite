 <h6 class="text-uppercase mt-5">Share details @ </h6>
 <hr>
 <div class="social-icons">
     <!-- Facebook Share Button -->
     <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(APP_BLOGS[$ServiceId]['link']); ?>&quote=<?php echo urlencode(APP_BLOGS[$ServiceId]['title']); ?>" class="box-shadow" target="_blank">
         <i class="fa fa-facebook"></i>
     </a>

     <!-- Instagram Share Button -->
     <a href="https://www.instagram.com/?url=<?php echo urlencode(APP_BLOGS[$ServiceId]['link']); ?>" class="box-shadow" target="_blank">
         <i class="fa fa-instagram"></i>
     </a>

     <!-- LinkedIn Share Button -->
     <a href="https://www.linkedin.com/feed/?linkOrigin=LI_BADGE&shareActive=true&shareUrl=<?php echo APP_BLOGS[$ServiceId]['dir']; ?>" class="box-shadow" target="_blank">
         <i class="fa fa-linkedin"></i>
     </a>

     <!-- Twitter Share Button -->
     <a href="https://twitter.com/intent/tweet?url=<?php echo urlencode(APP_BLOGS[$ServiceId]['link']); ?>&text=<?php echo urlencode(APP_BLOGS[$ServiceId]['title']); ?>" class="box-shadow" target="_blank">
         <i class="fa fa-twitter"></i>
     </a>

     <!-- WhatsApp Share Button -->
     <a href="whatsapp://send?text=<?php echo urlencode(APP_BLOGS[$ServiceId]['title'] . ' ' . APP_BLOGS[$ServiceId]['link']); ?>" class="box-shadow" target="_blank">
         <i class="fa fa-whatsapp"></i>
     </a>

     <!-- GitHub Share Button -->
     <a href="https://github.com/?url=<?php echo urlencode(APP_BLOGS[$ServiceId]['link']); ?>" class="box-shadow" target="_blank">
         <i class="fa fa-github"></i>
     </a>

     <!-- Medium Share Button -->
     <a href="https://medium.com/share?url=<?php echo urlencode(APP_BLOGS[$ServiceId]['link']); ?>" class="box-shadow" target="_blank">
         <i class="fa fa-medium"></i>
     </a>

     <!-- Threads Share Button -->
     <a href="https://www.threads.net/share?url=<?php echo urlencode(APP_BLOGS[$ServiceId]['link']); ?>" class="box-shadow" target="_blank">
         <i class="fa fa-link"></i>
     </a>

 </div>