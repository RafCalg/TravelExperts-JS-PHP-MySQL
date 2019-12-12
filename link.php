<!--
DrinkTea&Travel Agency Contact
Designed by: Tao Lu
Date: June 21, 2019
-->
<!docttype html>
<html>
	<head>
		<title>Link</title>
		<meta charset = "UTF-8"/>
		<link rel="stylesheet" type="text/css" href="css/reset.css">
		<link rel="stylesheet" type="text/css" href="css/mystyle.css">
		<style type="text/css">
		</style>
		
		<script>
		</script>
	</head>
	<body>
		<nav>
			<ul class="nav">
				<li><a href="index.php">Home</a></li>
				<li><a href="contact.php">Contact</a></li>
				<li><a class="active" href="link.php">Links</a></li>
			</ul>
		</nav>
		<?php //include "menu.php";for test?> 
		<header id="example1">
			<img src="images/tea_logo5.jpg" alt="Try again later" style="width:200px;height:auto;margin-top: -2em;
   		 margin-bottom: 5em;"></img>
			<h1 style="display:inline;position:relative; left:60px">Links</h1>
		</header>
		<br/>
		<section>
			<br/>
			<div class = "div-center">
				<h2 align="center" style="background-color: #424a22; color: white;padding: 15px;">Link List</h2>
				<h3> There are several links below for your reference</h3>
				<?php
					$myLinkPhps= array("link_1.php","link_2.php","link_3.php","link_4.php","link_5.php","link_6.php");
					include 'variables.php';
					print ("<div align='center'>");
					print("<table>");
					print("<tr>
							<th><div style=''>Names</div></th>
							<th><div style=''>Links</div></th>
						</tr>");
					foreach($myLinks as $myLink=>$linkName)
					{
						print("<tr>
								<td><div style=''>".$linkName."</div></td>
								<td>"."<div style=''><a target = '_blank' href=\"".$myLink."\">".$myLink."</a>"."</div></td></tr>");
					}	
					print("</table>");
					print("</div>");
				?>
			</div>
			
		</section>
		
		<?php include "footer.php";?>
	</body>
	
</html>