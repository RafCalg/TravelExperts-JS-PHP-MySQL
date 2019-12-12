<?php
require 'phpmailer/PHPMailerAutoload.php';
$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail-> SMTPAuth =true;
$mail->SMTPSecure ='tls';
$mail->Username = 'TravelExAB@gmail.com';
$mail->Password = 'Calgary2017';
$mail->setFrom ('TravelExAB@gmail.com','TravelExperts');
$mail->addAddress('rafik.belhaouas@edu.sait.ca');
$mail->addReplyTo('TravelExAB@gmail.com');
$mail->isHTML(true);
$mail->Subject ="Booking Cnfirmation";
$mail->Body='<h1 align="center">You booking is confirmed</h1>';

if(!$mail->send()){
    echo "Message could not be sent";
}else{
    echo "Message sent";
}



?> 