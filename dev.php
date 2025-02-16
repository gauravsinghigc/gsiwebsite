<?php
include "config.php";
date_default_timezone_set("UTC");
foreach (APP_BLOGS as $Blogs => $BlogValues) {
?>
    <url>
        <loc><?php echo $BlogValues['dir']; ?></loc>
        <lastmod><?php echo date("Y-m-d\Th:i:s A P"); ?></lastmod>
        <priority>0.90</priority>
    </url>
    <url>
        <loc><?php echo $BlogValues['dir']; ?>/</loc>
        <lastmod><?php echo date("Y-m-d\Th:i:s A P"); ?></lastmod>
        <priority>0.90</priority>
    </url>
<?php
}
