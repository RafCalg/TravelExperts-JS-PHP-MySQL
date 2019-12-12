<!--
DrinkTea&Travel Agency Register
Designed by: Tao Lu
Date: June 21, 2019
-->
<!docttype html>
<html>
	<head>
		<title>Login</title>
		<meta charset = "UTF-8"/>
		<link rel="stylesheet" type="text/css" href="css/reset.css">
		<link rel="stylesheet" type="text/css" href="css/mystyle.css">
		<style type="text/css">
		</style>
		<?php
			$message = "";
			if(isset($_POST["userid"]))
			{
				array_pop($_POST);
				$userLogin=$_POST;
				
				$userKey = array_keys($userLogin);
				$userValue = array_values($userLogin);
				//$userIdHash = md5($userValue[0]); 
				//$userPwdHash = md5($userValue[1]);
				
				/*connect database*/
				$dbh = @mysqli_connect("localhost","root","") or die("can't connect<br />");

				/*connect table*/
				if (mysqli_select_db($dbh, "travelexperts"))
				{
					print("Selected DB: travelexperts<br />");
				}
				else
				{
					print("Can't select DB: travelexperts<br />");
					exit();
				}
				
				$sql = "SELECT * FROM customers WHERE CustomerId= $userValue[0]";
				$result = mysqli_query($dbh, $sql);
				$row = mysqli_fetch_assoc($result);
				//print_r($result);
				//echo "<br/>";
				//print_r($row);
				//echo "<br/>";
				if ($row["CustomerId"] == $userValue[0]){
					$message .= "user id exists.<br/>";
					if(strcmp($row["CustHomePhone"],$userValue[1])== 0){
						session_start();
						$_SESSION["PkgInfo"] = $userValue[2];
						$_SESSION["custInfo"] = $row;
						header("Location: http://localhost:8080/CPRG-207/TravelAgent/custBook.php");
					}else{
						session_start();
						$_SESSION["custMsg"] = "Password is not correct!";
						header("Location: http://localhost:8080/CPRG-207/TravelAgent/login.php");
					}
				}else{
						session_start();
						$_SESSION["custMsg"] =  "User Id does not exist!";
						header("Location: http://localhost:8080/CPRG-207/TravelAgent/login.php");
				}
				mysqli_close($dbh);
			}
	
?>
		
		<script type="text/javascript">
		</script>
	</head>
	<body>
		
		</body>
	
</html>