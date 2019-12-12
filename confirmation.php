<!--
DrinkTea&Travel Agency Register
Designed by: Tao Lu
Date: June 21, 2019
-->
<!docttype html>
<html>
	<head>
		<title>Logout</title>
		<meta charset = "UTF-8"/>
		<link rel="stylesheet" type="text/css" href="css/reset.css">
		<link rel="stylesheet" type="text/css" href="css/mystyle.css">
		<style type="text/css">
		</style>
		<?php
			$message1 = "<h3 align='center'>Thank you for choosing Drink Tea & Travel package!</h3><br/> 
			<h3 align='center'>Please confirm your booking information:</h3><br/>";
			session_start();
			$message2 =" ";
			if (isset($_SESSION["CustId"]))
			{
				$message2 .= "Customer ID: ".$_SESSION["CustId"]."<br/>";
			} 
			if (isset($_SESSION["PkgId"]))
			{
				$message2 .= "Package ID: ".$_SESSION["PkgId"]."<br/>";
			}
			
			if (isset($_SESSION["BokId"]))
			{
				$message2 .= "Booking ID: ".$_SESSION["BokId"]."<br/>";
			}
			if (isset($_SESSION["BokNo"]))
			{
				$message2 .= "Booking No.: ".$_SESSION["BokNo"]."<br/>";
			}
			if (isset($_SESSION["EmailMsg"]))
			{
				$message3 = "<h3 align='center'>".$_SESSION["EmailMsg"]."</h3><br/>";
			} 
		?>
		
		<script type="text/javascript">
		</script>
	</head>
	<body>
		<nav>
			<ul class="nav">
				<li style="float:right"><a href="index.php">Logout</a></li>
			</ul>
		</nav>
		<header id="example1">
			<img src="images/tea_logo5.jpg" alt="Try again later" style="width:200px;height:auto;margin-top: -2em;
				margin-bottom: 5em;"></img>			
			<h1 style="display:inline;position:relative; left:60px">Customer Confirmation</h1>
		</header>
		<br/>
		<section>
			<br/>
			<div class = "div-center">
				<h2 align="center" style="background-color: #424a22; color: white;padding: 15px;">Confirmation</h2>
				<form id = "myLogin" method="POST" action="" enctype="multipart/form-data">
						<?php echo $message1?>
						<p align="center"><?php echo $message2?></p>
						<?php echo $message3?>
					
					
				</form>
			</div>
			
		</section>
		
		<?php include "footer.php";?>

	</body>
	
</html>