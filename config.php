<?php

//list of local server IPV4 address
/**
 * This will enable local access of app on local Network acress all devices that are connected 
 * In any method over same interent connection.
 * 
 * to check your IPV4 Address
 * Open CMD
 * Type : ipconfig
 * Copy and Paste IPV4 value in LOCAL_HOST array 
 * That's IT
 * 
 * Now open/share This IPV4 value to any user or device connected on same interenet connection. They will
 * access the App for testing, overview, demo or other
 * 
 * **** IMPORTANT ****
 * THIS WILL ONLY WORK ON LOCAL NETWORKS ONLY
 * FOR 
 * LIVE MODE
 * YOU CAN OPEN DIRECTLY ROOT/DOMAIN WHERE IT IS UPLOADED
 * 
 * THANKS
 * 
 */

//Display Errors
ini_set("display_errors", 1);

ini_set("log_errors", 1);
date_default_timezone_set("Asia/Calcutta");
ini_set('error_log', dirname(__FILE__) . '/storage/logs/err_log_for_' . date("d_M_Y") . '.txt');

//session_start()
session_start();
ob_start();

//App Configurations
//Change configuration according to your need and project requirements

//check SSL is installed or not
if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
    $link = "https";
} else {
    $link = "http";
}

// Here append the common URL characters.
$link .= "://";

//dir & domain setup
define("HOST", $HOST = $_SERVER['SERVER_NAME']);


define("LOCAL_HOST", [
    "127.0.0.1",
    "192.168.1.7",
    "::1",
    "localhost",
    "192.168.1.9",
    "192.168.43.14",
    "192.168.1.10",
    "192.168.1.11",
    "192.168.1.5",
    "192.168.1.10",
    "192.168.1.15",
    "192.168.1.83",
    "192.168.1.18",
    "192.168.1.19",
    "192.168.1.8",
    "192.168.1.3",
]);

//filter domain from local or live server
if (in_array("" . HOST . "", LOCAL_HOST)) {
    define("DOMAIN", $link . HOST . "/gsiwebsite");
} else {
    define("DOMAIN", $link . HOST);
}

//URL Constants
DEFINE("ASSETS_URL", DOMAIN . "/assets");
DEFINE("STORAGE_URL", DOMAIN . "/storage");

//App Informations
DEFINE("APP", [
    "NAME" => "Gaurav Singh",
    "APP_NAME" => "Gaurav Singh (gauravsinghigc)",
    "APP_NAME_2" => "gauravsinghigc",
    "AUTHOR" => "Gaurav Singh",
    "TAGLINE" => "Working on digital dreams",
    "EXPERTISE" => "Full Stack Developer & IT Support",
    "SHORT_DESCRIPTION" => "Gaurav Singh (gauravsinghigc), a full-stack developer specializing in digital marketing, IT support, CRM, custom web solutions, and Android/iOS cross-platform mobile app development. Contact for professional, end-to-end IT services tailored to your needs.",
    "LONG_DESCRIPTION" => "Gaurav Singh (gauravsinghigc) is a highly skilled full-stack developer with expertise in delivering end-to-end IT services. With a passion for innovative technology, Gaurav specializes in custom web development, including dynamic websites, web applications, and CRM solutions. His services also extend to digital marketing, where he helps businesses build their online presence and optimize marketing strategies. In addition, Gaurav offers robust IT support, ensuring seamless business operations and technical assistance for clients. Known for his work with PHP and advanced authentication systems, Gaurav Singh is your go-to expert for tailored web solutions that elevate your business to the next level.",
    "COPYRIGHT" => [
        "AUTHOR" => "Gaurav Singh",
        "YEAR" => date("Y"),
        "LICENSE" => "MIT",
        "GIT_PUBLICATION" => "publication",
        "GIT_REPO" => "https://github.com/gauravsinghigc/gauravsinghigc.in",
        "GIT_EMAIL" => "gauravsinghigc@gmail.com",
    ],
    "PHONE_NUMBER" => [
        "PRIMARY" => "9266882565",
    ],
    "EMAILS" => [
        "PRIMARY" => "gauravsinghigc@gmail.com",
        "SECONDARY" => "hello@" . DOMAIN
    ],
    "ADDRESS" => [
        "PRIMARY" => "Sector 76, Faridabad, Haryana-121004"
    ],
    "LOGO" => [
        "SQAURE" => STORAGE_URL . "/images/logo/gauravsinghigc-square-logo-image.png",
        "RECTANGLE" => STORAGE_URL . "/images/logo/gauravsinghigc-rectangle-logo-image.png",
        "FAVICON" => STORAGE_URL . "/images/logo/gauravsinghigc-favicon-logo-image.png",
    ],
    "SOCIAL_ACCOUNS" => [
        "facebook" => "https://facebook.com/gauravsinghigcofficial",
        "instagram" => "https://instagram.com/gauravsinghigc",
        "linkedin" => "https://www.linkedin.com/in/gauravsinghigc",
        "twitter" => "https://twitter.com/gauravsinghigc",
        "github" => "https://github.com/gauravsinghigc",
        "map-marker" => "https://maps.app.goo.gl/ZyeHMXpJQi9bc5FZA",
        "codepen" => "https://codepen.io/gauravsinghigc",
        "medium" => "https://medium.com/@gauravsinghigc",
        "link" => "https://www.threads.net/@gauravsinghigc",
    ]
]);

//get all modules 
if ($handle = opendir(__DIR__ . "/modules")) {

    while (false !== ($entry = readdir($handle))) {
        if ($entry != "." && $entry != "..") {
            include __DIR__ . "/modules/$entry";
        }
    }
    closedir($handle);
}
