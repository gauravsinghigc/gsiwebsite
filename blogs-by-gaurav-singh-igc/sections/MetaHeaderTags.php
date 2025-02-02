 <!-- Meta Tags -->
 <meta name="title" content="<?php echo APP_BLOGS[$ServiceId]['title']; ?>">
 <meta name="description" content="<?php echo APP_BLOGS[$ServiceId]['desc']; ?>">
 <meta name="keywords" content="<?php echo APP_BLOGS[$ServiceId]['keywords']; ?>">

 <!-- Open Graph Tags (For Facebook, LinkedIn, etc.) -->
 <meta property="og:type" content="article">
 <meta property="og:title" content="<?php echo APP_BLOGS[$ServiceId]['title']; ?>">
 <meta property="og:description" content="<?php echo APP_BLOGS[$ServiceId]['desc']; ?>">
 <meta property="og:image" content="<?php echo APP_BLOGS[$ServiceId]['image']; ?>">
 <meta property="og:url" content="<?php echo APP_BLOGS[$ServiceId]['link']; ?>">
 <meta property="og:site_name" content="<?php echo APP['APP_NAME']; ?> Blogs">
 <meta property="og:locale" content="en_US">
 <meta property="og:updated_time" content="<?php echo date('c'); ?>">

 <!-- Twitter Cards Tags -->
 <meta name="twitter:card" content="summary_large_image">
 <meta name="twitter:title" content="<?php echo APP_BLOGS[$ServiceId]['title']; ?>">
 <meta name="twitter:description" content="<?php echo APP_BLOGS[$ServiceId]['desc']; ?>">
 <meta name="twitter:image" content="<?php echo APP_BLOGS[$ServiceId]['image']; ?>">
 <meta name="twitter:url" content="<?php echo APP_BLOGS[$ServiceId]['link']; ?>">
 <meta name="twitter:site" content="@<?php echo APP['APP_NAME_2']; ?>"> <!-- Replace with actual Twitter handle if needed -->

 <!-- LinkedIn Tags -->
 <meta name="linkedin:title" content="<?php echo APP_BLOGS[$ServiceId]['title']; ?>">
 <meta name="linkedin:description" content="<?php echo APP_BLOGS[$ServiceId]['desc']; ?>">
 <meta name="linkedin:image" content="<?php echo APP_BLOGS[$ServiceId]['image']; ?>">

 <!-- Facebook Open Graph Tags -->
 <meta property="og:type" content="article">
 <meta property="og:title" content="<?php echo APP_BLOGS[$ServiceId]['title']; ?>">
 <meta property="og:description" content="<?php echo APP_BLOGS[$ServiceId]['desc']; ?>">
 <meta property="og:image" content="<?php echo APP_BLOGS[$ServiceId]['image']; ?>">
 <meta property="og:url" content="<?php echo APP_BLOGS[$ServiceId]['link']; ?>">
 <meta property="og:site" content="@<?php echo APP['APP_NAME_2']; ?>">

 <!-- Additional social media meta tags for better optimization -->
 <meta property="og:section" content="<?php echo APP_BLOGS[$ServiceId]['tags']; ?>">
 <meta property="og:subsection" content="<?php echo APP_BLOGS[$ServiceId]['keywords']; ?>">
 <meta property="article:author" content="<?php echo APP['AUTHOR']; ?>">
 <meta property="article:publisher" content="<?php echo DOMAIN; ?>"> <!-- Publisher URL -->
 <meta property="article:published_time" content="<?php echo APP_BLOGS[$ServiceId]['time']; ?>"> <!-- Date of publishing -->
 <meta property="article:modified_time" content="<?php echo APP_BLOGS[$ServiceId]['time']; ?>"> <!-- Last modified time -->