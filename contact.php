<!--
DrinkTea&Travel Agency Contact
Designed by: Tao Lu
Date: June 21, 2019
-->
<!docttype html>
<html>
	<head>
		<title>Contact</title>
		<meta charset = "UTF-8"/>
		<link rel="stylesheet" type="text/css" href="css/reset.css">
		<link rel="stylesheet" type="text/css" href="css/mystyle.css">
		<style type="text/css">
		</style>
		
	</head>
	<body>
		<nav>
			<ul class="nav">
				<li><a href="index.php">Home</a></li>
				<li><a class="active" href="contact.php">Contact</a></li>
				<li><a href="link.php">Links</a></li>
			</ul>
		</nav>
		
		<header id="example1">
			<img src="images/tea_logo5.jpg" alt="Try again later" style="width:200px;height:auto;margin-top: -2em;
   				 margin-bottom: 5em;"></img>
			<h1 style="display:inline;position:relative; left:60px">Contact</h1>
		</header>
		<br/>
		<section>
			<br/>
			<div class = "div-center">
				<h2 align="center" style="background-color: #424a22; color: white;padding: 15px;">Contact Information</h2>
				<h3> Drink Tea & Travel has established offices in Canada, China (+14hrs GMT) and Japan (+15hrs GMT). </h3>
				<?php
					include "functions.php";
					$array = mysql_select_agency("agencies");
					$sourceArray =["https://maps.google.com/maps?q=1155%208th%20Ave%20SW%20%2CCalgary%20AB%20%2CT2P1N3&t=&z=13&ie=UTF8&iwloc=&output=embed"
						,"https://maps.google.com/maps?q=%2015%20McRae%20St%2C%20%23103%20Okotoks%2C%20Alberta%20T1S1N4%20Canada&t=&z=17&ie=UTF8&iwloc=&output=embed"
					];
					if (mysqli_num_rows($array) > 0) {
					// output data of each row
						echo "<hr>";
						$i =0;
						while($row = mysqli_fetch_assoc($array)) {
							print ("<h2 align='center'>Agency" . " " .$row["AgencyId"]. "</h2><br/>");
							print ("<div align='center'>");
							print ("ADDRESS: <br/>");
							print ($row["AgncyAddress"]. " ,".$row["AgncyCity"]." ".$row["AgncyProv"]." ,".$row["AgncyPostal"]."<br/><br/>");
							print ("PHONE: <br/>");
							print ($row["AgncyPhone"]. "<br/><br/>");
							print ("FAX: <br/>");
							print ($row["AgncyFax"]. "<br/><br/>");
							print ("</div>");
							$id = $row["AgencyId"];
							print('<div align="center">');
							print('<div class="mapouter">
										<div class="gmap_canvas">
											<iframe id="gmap_canvas" src='.$sourceArray[$i].' frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
											</iframe>Google Maps Generator by <a href="https://www.embedgooglemap.net">embedgooglemap.net</a>
										</div>
									</div>');
							print ("</div>");
							$i =$i+1;	
							$array_agent = mysql_select_agent("agents",$id);
							print("<br/>");
							print('<div align="center" style="overflow-x:auto;">');
							print("<table>");
								print("<tr>
										<th>First Name</th>
										<th>Last name</th>
										<th>Phone</th>
										<th>Email</th>
									</tr>");
								while($row_agent = mysqli_fetch_assoc($array_agent))
								{
									print("<tr>
										<td>".$row_agent['AgtFirstName']."</td>
										<td>".$row_agent['AgtLastName']."</td>
										<td>".$row_agent['AgtBusPhone']."</td>
										<td>".$row_agent['AgtEmail']."</td>
									</tr>");	
								}	
							print("</table>");
							print('</div>');
							echo "<hr>";
						}
					}
				?>
				<button><a href="register.php">For Agent</button>
			</div>
			
		</section>
		
		<?php include "footer.php";?>
	</body>
	
</html>