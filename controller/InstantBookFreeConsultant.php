<?php
require "../config.php";
require "vendor/mailer.php";

if (isset($_POST['BOOK_FREE_CONSULTANT_INSTANT'])) {
    $FULL_NAME = $_POST['FullName'];
    $PHONE_NUMBER = $_POST['PhoneNumber'];
    $MESSAGE = $_POST['RequirementTagsRemark'];
    $SUBJECT_SENT = "FREE GUIDANCE BOOKED (INSTANT)";
    $ENQUIRY_DATE = date("Y-m-d H:i:s");

    //mail variables
    $SENT_TO = "gauravsinghigc@gmail.com";
    $SUBJECT = $SUBJECT_SENT . " @ " . $TimeToContact . " (" . $FULL_NAME . " @ " . $PHONE_NUMBER . ")";
    $EMAIL_MSG = "<h3 style='margin-bottom:0.5rem !important;'>Dear <b>Gaurav Singh</b>,</h3>";
    $EMAIL_MSG .= "<p>";
    $EMAIL_MSG .= "<span>Someone booked free guidance from (" . DOMAIN . "). Requirement and contact details are mentioned below.</span><br><br>";
    $EMAIL_MSG .= "<span><b>Enquiry Date: </b>" . DATE("d M, Y h:i A", strtotime($ENQUIRY_DATE)) . "</span><br>";
    $EMAIL_MSG .= "<span><b>Subject: </b>" . $SUBJECT_SENT . "</span><br>";
    $EMAIL_MSG .= "<span><b>Full Name: </b>" . $FULL_NAME . "</span><br>";
    $EMAIL_MSG .= "<span><b>Phone Number: </b>" . $PHONE_NUMBER . "</span><br>";
    $EMAIL_MSG .= "<span><b>Message: </b>" . $MESSAGE . "</span><br>";
    $EMAIL_MSG .= "</p>";


    //create mail message
    $Response = SEND_MAIL($SENT_TO, $SUBJECT, $EMAIL_MSG);

    if ($Response == true) {
        header("location: ../?msg=true");
    } else {
        header("location: ../?msg=false");
    }
}
