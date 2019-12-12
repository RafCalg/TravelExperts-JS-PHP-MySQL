
   
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Untitled Document</title>
</head>

<body>
<?php

	include "functions.php";
	include "log.php";
		
	//foreach($_POST as $name=>$value) {
	//	echo $name."<br>";
	//	echo $value."<br>";
	//}
	//print_r($_POST);
	//print_r("<br/>");
	
	//Update customer table
	$customer_array = array_slice($_POST,0,11);
	//print_r($customer_array);
	$table = "customers";
	$custId = mysql_insert_array($table, $customer_array);
	
	//Update bookings table
	$cut_array = array_slice($_POST,11,5);
	$bookings_array = [];
	$num = substr($_POST["CustFirstName"], 0, 1).substr($_POST["CustLastName"], 0, 1).$_POST["PackageId"].rand (10,99);
	$booking_no = array('BookingNo'=>$num);
	$customer_id = array('CustomerId'=>$custId);
	$booking_date = array('BookingDate'=>date("Y-m-d H:i:s"));
	$bookings_array = array_merge($cut_array, $booking_date, $customer_id, $booking_no);
	//print_r($bookings_array);
	$table = "bookings";
	$bokId = mysql_insert_array($table, $bookings_array);
		
	//Update bookingdetails table
	session_start();
	$_SESSION["PkgId"] = $_POST["PackageId"];
	$_SESSION["BokId"] = $bokId;
	$_SESSION["CustId"] = $custId;
	$_SESSION["BokNo"] = $num;
	
	//send Email
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
	//$mail->addAddress('rafik.belhaouas@edu.sait.ca');
	$mail->addAddress($_POST["CustEmail"]);
	$mail->addReplyTo('TravelExAB@gmail.com');
	$mail->isHTML(true);
	$mail->Subject ="Booking Cnfirmation";
	$mail->Body='<h1 align="center">You booking is confirmed</h1><br/><h2 align="center">Your Booking No. is '.$num.'</h2><br/><h1 align="center">Thank youuuuuu!</h1><br/>';
	
	if(!$mail->send()){
		$_SESSION["EmailMsg"]="Message could not be sent";
	}else{
		$_SESSION["EmailMsg"]="Confirmation is sent successfully to your email";
	}
	header("refresh: 1; url = http://localhost:8080/CPRG-207/TravelAgent/confirmation.php"); 
	

?>

</body>
</html>