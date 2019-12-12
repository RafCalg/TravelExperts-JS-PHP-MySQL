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
			session_start();
			$message = "";
			$message = $_SESSION["custMsg"];
			//echo "<script type='text/javascript'>alert('$msg');</script>";
		?>
		
		<script type="text/javascript">
		</script>
	</head>
	<body>
		<nav>
			<ul class="nav">
				<li><a href="index.php">Home</a></li>
				<li><a href="contact.php">Contact</a></li>
				<li><a href="link.php">Links</a></li>
			</ul>
		</nav>
		<?php //include "menu.php"; for test?>
		<header id="example1">
			<img src="images/tea_logo5.jpg" alt="Try again later" style="width:200px;height:auto;margin-top: -2em;
    margin-bottom: 5em;"></img>			
	<h1 style="display:inline;position:relative; left:60px">Customer Login</h1>
		</header>
		
		<br/>
		<section>
			<br/>
			<div class = "div-center" >
				<h2 align="center" style="background-color: #424a22; color: white;padding: 15px;">Customer Login Form</h2>
				<div class = "divform" style="border-style: ridge;">
				<form  align="left" id = "myLogin" method="POST" action="loginValidation.php" enctype="multipart/form-data">
					<label for="userid">User ID</label><br/>
					<input type="text" id="uidT" name="userid" required placeholder="Your user ID..">
					<p class="instruc" id="uid" ></p><br/>
					
					<label for="userpwd">User Password</label><br/>
					<input type="text" id="upassT" name="userpassword" placeholder="Your password..">
					<p class="instruc" id="upass" ></p><br/>
				
					<input type="hidden" name="PkgIdd" value="<?php echo $_POST['PackageId']; ?>">
					<input type="submit" value="Login" name="submit"><br/>
					<div id = "Msg">
						<p align="center" style="color:#FF0000";><?php echo $message?></p>
					</div>
				</form>
				</div>
				<div class = "divform">
				<form id = "mySignup" method="POST" action="custBookNon.php" enctype="multipart/form-data">
					<button class="btn success">New Customer Sign Up</button>
					<input type ='hidden' value="<?php echo $_POST['PackageId']; ?>" name="PkgIdd">
				</form>
				<div>
			</div>
		</section>
		
		<?php include "footer.php";?>

		</body>
	
</html>