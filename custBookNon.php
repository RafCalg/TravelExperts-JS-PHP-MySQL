<!--
DrinkTea&Travel Agency Register
Designed by: Tao Lu
Date: June 21, 2019
-->
<!docttype html>
<html>
	<head>
		<script type="text/javascript" src="validation.js"></script> 
		
		<title>Customer Booking Form</title>
		<meta charset = "UTF-8"/>
		<link rel="stylesheet" type="text/css" href="css/reset.css">
		<link rel="stylesheet" type="text/css" href="css/mystyle.css">
		<style type="text/css">
		</style>
		
		<?php
			$message = "";
			session_start();
			if (isset($_SESSION["CustId"]))
			{
				$message = "Customer ID: ".$_SESSION["CustId"]."<br/>";
			} 
			if (isset($_SESSION["PkgId"]))
			{
				$message .= "Package ID: ".$_SESSION["PkgId"]."<br/>";
			}
			
			if (isset($_SESSION["BokId"]))
			{
				$message .= "Booking ID: ".$_SESSION["BokId"]."<br/>";
			}
			if (isset($_SESSION["BokNo"]))
			{
				$message .= "Booking No.: ".$_SESSION["BokNo"];
			}
			?>
		<script type="text/javascript">
		
		function submitComf(form){
			var validaResult = validationForm(form);
			if(validaResult == true){
				var subReturn = confirm("Would you like to submit?");
				if (subReturn == true){
					//alert("You pressed submit OK!");
					return true;
				}else{
					//alert("You pressed submit Cancel!");
					return false;
				}
			}
			return false;
		}
		
		function clearComf(){
			var clsReturn = confirm("Are you sure to clear all data?");
			if (clsReturn == true){
				//alert("You pressed clear OK!")
				document.getElementById("Msg").innerHTML = "Message Board";
				return true;
			}else{
				//alert("You pressed clear Cancel!");
				return false;
			}
		}
		
		
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
				<h1 style="display:inline;position:relative; left:60px">Package Booking Form</h1>
		</header>
		
		<br/>
		<section>
			<br/>
			<div class = "div-center">
				<h2 align="center" style="background-color: #424a22; color: white;padding: 15px;">Booking Form</h2>
				<div class = "divform" style="border-style: ridge;">
				<form id = "myForm" method="POST" action="insertBookTblNon.php">
					
					<label for="fname">First Name</label><br/>
					<input type="text" id="fnameT" name="CustFirstName" onfocus="focusFunc(this.id)" onblur="blurFunc(this.id)" required placeholder="Your first name..">
					<p class="instruc" id="fname" ></p><br/>
									
					<label for="lname">Last Name</label><br/>
					<input type="text" id="lnameT" name="CustLastName" onfocus="focusFunc(this.id)" onblur="blurFunc(this.id)" placeholder="Your last name..">
					<p class="instruc" id="lname" ></p><br/>
								
					<br/>
					<label for="address">Address</label><br/>
					<input type="text" id="addrT" name="CustAddress" onfocus="focusFunc(this.id)" onblur="blurFunc(this.id)" placeholder="Your address.." >
					<p class="instruc" id="addr" ></p><br/>
					
					<label for="city">City</label><br/>
					<input type="text" id="cityT" name="CustCity" onfocus="focusFunc(this.id)" onblur="blurFunc(this.id)" placeholder="Your city.." >
					<p class="instruc" id="city" ></p><br/>
					
					<label for="prov">Province</label><br/>
					<input type="text" id="provT" name="CustProv" onfocus="focusFunc(this.id)" onblur="blurFunc(this.id)" placeholder="Your province.. " >
					<p class="instruc" id="prov" ></p><br/>
					
					<label for="postc">Post Code</label><br/>
					<input type="text" id="postcT" name="CustPostal" onfocus="focusFunc(this.id)" onblur="blurFunc(this.id)" required placeholder="Your postcode.. " >
					<p class="instruc" id="postc" ></p><br/>
					
					<label for="country">Country</label><br/>
					<select id="countryT" name="CustCountry" >
						<option value="null" selected="selected"></option>
						<option value="Australia">Australia</option>
						<option value="Canada">Canada</option>
						<option value="China">China</option>
						<option value="Japan">Japan</option>
						<option value="USA">USA</option>
						<option value="Others">Others</option>
					</select><br/>
					<p class="instruc" id="country" ></p><br/>
					
					<label for="hphone">Home Phone</label><br/>
					<input type="number" id="hphoneT" name="CustHomePhone" onfocus="focusFunc(this.id)" onblur="blurFunc(this.id)" placeholder="Your home phone..">
					<p class="instruc" id="hphone" ></p><br/>
					
					<label for="bphone">Business Phone</label><br/>
					<input type="number" id="bphoneT" name="CustBusPhone" onfocus="focusFunc(this.id)" onblur="blurFunc(this.id)" placeholder="Your home phone..">
					<p class="instruc" id="bphone" ></p><br/>
					
					<label for="email">Email</label><br/>
					<input type="email" id="emailT" name="CustEmail" onfocus="focusFunc(this.id)" onblur="blurFunc(this.id)" required placeholder="Your email..">
					<p class="instruc" id="email" ></p><br/>
					
					<!--<div id = "Msg" class = "comMsg">-->
						<!--<p>Comfirmation Board</p>-->
						<!--<p><--?php echo $message?></p>-->
					<!--</div>-->
					
					<label for="agentid">Agent Id</label><br/>
					<input type="text" id="agentidT" name="AgentId" onfocus="focusFunc(this.id)" onblur="blurFunc(this.id)" placeholder="Your agent Id..">
					<p class="instruc" id="agentid" ></p><br/>
					
					<label for="triptype">Trip Type</label><br/>
					<select id="triptypeT" name="TripTypeId" >
						<option value="null" selected="selected"></option>
						<option value="B">B</option>
						<option value="G">G</option>
						<option value="L">L</option>
					</select><br/>
					<p class="instruc" id="triptype" ></p><br/>
					
					<label for="travelnum">Traveller Number</label><br/>
					<input type="text" id="travelnumT" name="TravelerCount" onfocus="focusFunc(this.id)" onblur="blurFunc(this.id)" placeholder="Your traveler number..">
					<p class="instruc" id="travelnum" ></p><br/>
					
					<input type="hidden" name="PackageId" value="<?php echo $_POST['PkgIdd']; ?>">
					
					<input type="submit" value="Submit" onclick="return submitComf()"><br/>
					<input type="reset"  value="Reset" onclick="return clearComf()"><br/>	
						
					</p>
					
				</form>
				</div>
			</div>
			<br/><hr/>
		</section>
		
		<?php include "footer.php";?>
		</body>
	
</html>