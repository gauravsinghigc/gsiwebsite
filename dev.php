<?php
include "config.php";

foreach (APP_BLOGS as $Blogs => $BlogValues) {
?>
    <url>
        <loc><?php echo $BlogValues['dir']; ?></loc>
        <lastmod>2025-01-11T08:43:27+01:00</lastmod>
        <priority>0.90</priority>
    </url>
    <url>
        <loc><?php echo $BlogValues['dir']; ?>/</loc>
        <lastmod>2025-01-11T08:43:27+01:00</lastmod>
        <priority>0.90</priority>
    </url>
<?php
}
