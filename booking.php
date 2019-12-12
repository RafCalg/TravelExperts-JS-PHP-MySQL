<!--
DrinkTea&Travel Agency Main
Designed by: Tao Lu
Date: June 21, 2019
-->
<!docttype html>
<html>
	<?php include "header.php";?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	
	<body onload="loadImg()">
		<nav>
			<ul>
				<li><a class="active" href="index.php">Home</a></li>
				<li style="float:right"><a href="">About</a></li>
			</ul>
		</nav>
		<header id="example1">
			<img src="images/tea_logo5.jpg" alt="Try again later" style="width:200px;height:auto;margin-top: -2em;
    margin-bottom: 5em;"></img>
			<h1 style="display:inline;position:relative; left:60px;">Welcome to Travel Experts</h1>-->
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

			?>
			
			</div>
		</header>
		<br/>
		<section>
		<br/>
			<article>
				<h2 class="h2_center">TEA CULTURE</h2>
				<p class="LocationInfo">Relaxation, spirituality, tradition and pleasure; 
				tea isn’t just a drink, and all across the world, at any given time, millions of us enjoy the drink, 
				for many different reasons. Continuing on our tea tales journey, 
				we’d like to invite you to join us as we jet around the four corners of the world and explore the different types of tea enjoyed in various countries, 
				as well as the associated customs, rituals and legends that are out there.
				</p>
			</article>
			<div style ='display: flex;justify-content: center'>
				<input type="submit" value="New Customer" onclick="location.href='custBook.php'"><br/>
				<input type="submit"  value="Return Customer" onclick="return clearComf()"><br/>
			</div>	
		</section>
		<?php include "footer.php";?>
	</body>
</html>