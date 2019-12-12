
   
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
		//echo $name."<br>";
		//echo $value."<br>";
	//}
	//print_r($_POST);
	
	$filename = "log.txt";
	if (touch($filename)){
	     print("File created<br/>");
	  }else{
	     print("File not created<br/>");
	  }
	$filehandle = fopen($filename, "a");
	  
	$table = "agents";
	$result = mysql_insert_array($table, $_POST);
	
	session_start();
	$_SESSION["msgInsert"] = $result;
	echo $result;
	// Results
	if( $result != False) {
		echo "Query Succeeded!<br/>";
		log_history($filehandle, "Query Succeeded! UserId = ".$result."\n"); 
		
		
	}else{
		echo "Query fails!</br>";
		log_history($filehandle, "Query fails!\n"); 
	}
	
	fclose($filehandle);
	header("refresh: 1; url = http://localhost:8080/CPRG-207/TravelAgent/register.php"); 
?>

</body>
</html>