<!--
DrinkTea&Travel Agency Main
Designed by: Tao Lu
Date: June 21, 2019
-->
<!docttype html>
<html>

	<?php 
		session_start();
		$_SESSION["custMsg"]="";//for remove notice error in login page
		include "header.php";

	?>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<body onload="loadImg()">
		<nav>
			<ul>
				<li><a class="active" href="index.php">Home</a></li>
				<li><a href="contact.php">Contact</a></li>
				<li><a href="link.php">Links</a></li>
			</ul>
		</nav>
		<header id="example1">
			<img src="images/tea_logo5.jpg" alt="Try again later" style="width:200px;height:auto;margin-top: -2em;
    margin-bottom: 5em;"></img>
			<h1 style="display:inline;position:relative; left:60px;">Welcome to Travel Experts</h1>
			<div style="display:none;">
			<?php
					$hours = date('G');
					if($hours>=0 and $hours<12){
						$greetings = "Good morming!";
					}elseif($hours<18){
						$greetings = "Good afternoon!";
					}else{
						$greetings = "Good evening!";
					}
					$curDate = date("l jS \of F Y h:i:s A");
					print($greetings."  ".$curDate);
					
					session_start();
					$_SESSION["custMsg"]="";
			?>
			</div>
		</header>
		<br/>
		<section>
		
		<br/>
			<article>
				<h2 class="h2_center">TEA CULTURE & TRAVEL PACKAGE</h2>
				<p class="LocationInfo">Relaxation, spirituality, tradition and pleasure; 
				tea isn’t just a drink, and all across the world, at any given time, millions of us enjoy the drink, 
				for many different reasons. Continuing on our tea tales journey, 
				we’d like to invite you to join us as we jet around the four corners of the world and explore the different types of tea enjoyed in various countries, 
				as well as the associated customs, rituals and legends that are out there.
				</p>
			</article>
			
			<div class = "cards" style ="display: flex">
            
				<script>
					document.write("<div class = 'row'>");
					for (i = 0; i<imgArray.length;i++){
					startDate = stToDate(paraArray[i][2].slice(0,10));
					currDate = todayDate();
					console.log(currDate);
					document.write("<div class = 'column'>");
                    document.write("<div class = 'card'>");
                    document.write("<img src="+imgArray[i]+" alt='Jane' style='width:100%'>");
					document.write('<div class="container">');
                    document.write('<h2>'+paraArray[i][1]+'</h2>');
                    document.write('<p>'+paraArray[i][4] +'</p>');
					document.write('<p>Price: $'+paraArray[i][5].slice(0,7) +'</p>');
                    if(currDate>startDate){
						document.write(`<p class ='boldRed'>Duration:  ${paraArray[i][2].slice(0,10)}  to  ${paraArray[i][3].slice(0,10)}  </p>`);
					}else{
						document.write( '<p>Duration:  '+paraArray[i][2].slice(0,10)+'  to  '+paraArray[i][3].slice(0,10) +' </p>');	
					}
                    
                    document.write('<p><form id = "pkgId" method="POST" action="login.php" enctype="multipart/form-data"></p>');
                    document.write('<p><button class="button">Book Now</button></p>');
                    document.write('<p> <input type ="hidden" value="'+paraArray[i][0]+'" " name="PackageId"></p>');
                    document.write('<p></form></p>');
                    document.write('</div>');
                    document.write('</div>');
                    document.write('</div>');

					/*document.write("<td>" + "<form id = 'pkgId' method='POST' action='custBook.php' enctype='multipart/form-data'>"
					+"<button class='button button1'>Book Now</button>"+"<input type ='hidden' value='"+paraArray[i][0]+"' ' name='PackageId'>" + "</form>"+"</td>");
					document.write("</tr>");*/
					}
					
					
					
				</script>
			</div>
			
		</section>
		
		<?php include "footer.php";?>
	</body>
</html>