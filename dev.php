<?php
include "config.php";

foreach (APP_BLOGS as $Blogs => $BlogValues) {
?>
    <url>
        <loc><?php echo $BlogValues['dir']; ?></loc>
        <lastmod>2025-01-11T08:43:27+01:00</lastmod>
        <priority>0.87</priority>
    </url>
<?php
}
