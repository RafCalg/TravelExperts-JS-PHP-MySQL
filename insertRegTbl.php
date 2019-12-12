
   
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

	$table = "customers";
	$custId = mysql_insert_array($table, $_POST);
		
	//Update bookingdetails table
	session_start();
	$_SESSION["CustId"] = $custId;
	header("refresh: 1; url = http://localhost:8080/CPRG-207/TravelAgent/custReg.php"); 
	

?>

</body>
</html>