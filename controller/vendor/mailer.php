<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require('PHPMailer/src/Exception.php');
require('PHPMailer/src/PHPMailer.php');
require('PHPMailer/src/SMTP.php');

function SEND_MAIL($to, $subject, $MESSAGE, $CCMail = null, $BCCMail =  null)
{
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host       = 'smtp.hostinger.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'enquiry@gauravsinghigc.in';
    $mail->Password   = 'Gsi@9810895713#2025';
    // $mail->SMTPDebug = 2;                            
    $mail->SMTPSecure = 'ssl';
    $mail->Port       = 465;
    //Recipients
    $mail->setFrom('enquiry@gauravsinghigc.in', "GAURAVSINGHIGC");
    if ($CCMail != "") {
        foreach ($CCMail as $ccmail) {
            $mail->addCC("$ccmail");
        }
    }
    if ($BCCMail != "") {
        foreach ($BCCMail as $bccmail) {
            $mail->addBCC("$bccmail");
        }
    }
    $mail->addAddress($to);

    //Content
    $mail->isHTML(true);
    $mail->Subject = "$subject";
    $mail->Body    = '<body style="line-height:1rem !important;font-size:0.8rem !important">
    <style>
    *, .gsi { font-size:0.8rem !important;font-family: system-ui !important;}
    </style>
    <div style="padding: 1rem !important; background-color: rgb(245, 244, 244) !important; font-family: system-ui !important; border-radius:10px !important;box-shadow:0px 0px 7px grey !important; font-weight:300 !important; color:#333 !important;">
    <h2 style="margin-bottom: 1px !important;background-image: repeating-linear-gradient(45deg, #0066ff1c, transparent 1px);padding: 0.5rem;border-radius: 5px;padding-left: 0.75rem;font-size: 15px!important;color: #3a3939!important;font-weight: 600;margin-top: 0.3rem;">
     ♣ ' . strtoupper(APP['APP_NAME_2']) . '
    </h2>
    <div class="gsi" style="font-size:0.8rem !important;font-family: system-ui !important;">
      ' . $MESSAGE . '
      <hr>
     <p style="font-size:0.75rem !important; font-weight:300 !important;color:grey !important;background-color:white;padding:0.75rem;border-radius:0.3rem;text-align:left;font-family: system-ui !important;">
     <img src="' . APP['LOGO']['SQAURE'] . '" style="width:100px !important;border-radius:0.25rem;box-shadow:0px 0px 2px grey;"><br>
        <span style="color:black;">' . APP['APP_NAME'] . '</span><br>
        <span> ' . APP['ADDRESS']['PRIMARY'] . '</span><br>
        <span>' . APP['EMAILS']['PRIMARY'] . ',</span>
        <span>' . APP['PHONE_NUMBER']['PRIMARY'] . '</span><br>
        <span>' . DOMAIN . '</span>
      </p>
    </div>
</body>';

    if (!$mail->Send()) {
        return false;
    } else {
        return true;
    }
}
