<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
$error = '';
$idsender = '';
$idresever = '';
$email = '';
$date = '';
$message = '';
function clean_text($string){
    $string = trim($string);
    $string = stripslashes($string);
    $string = htmlspecialchars($string);
    return $string;
}
if (isset($_SESSION["trans"])) {

    $mail = new PHPMailer();

    $mail->IsSMTP();        //Sets Mailer to send message using SMTP
    $mail->Mailer = "smtp";
    $mail->Host = 'smtp.gmail.com';  //Sets the SMTP hosts
    $mail->SMTPDebug = 0;
    $mail->SMTPAuth = TRUE;
    $mail->SMTPSecure = "tls";
    $mail->Port = 587;
    $mail->Host = "smtp.gmail.com";
    $mail->Username = "s12042772@stu.najah.edu";
    $mail->Password = "tro@206476";
    $mail->IsHTML(true);
    $mail->AddAddress($_SESSION["email"]);
    $mail->SetFrom("mohammad.khamalan@gmail.com", "from-name");
    $mail->Subject = "Test is Test Email sent via Gmail SMTP Server using PHP Mailer";
    $content = $_SESSION["message"];
    $mail->MsgHTML($content);
    if ($mail->Send()) {
        $message = 1;
    }}


?>
