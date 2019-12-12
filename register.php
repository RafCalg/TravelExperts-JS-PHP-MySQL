<!--
DrinkTea&Travel Agency Register
Designed by: Tao Lu
Date: June 21, 2019
-->
<!docttype html>
<html>
	<head>
		<title>Agent Registration</title>
		<meta charset = "UTF-8"/>
		<link rel="stylesheet" type="text/css" href="css/reset.css">
		<link rel="stylesheet" type="text/css" href="css/mystyle.css">
		<style type="text/css">
		</style>
		
		<?php
			$message = "";
			session_start();
			if (isset($_SESSION["msgInsert"]))
			{
				if($_SESSION["msgInsert"] != 1)
					$message = "Insertion is successful! UserId =".$_SESSION["msgInsert"];
				else
					$message = "Insertion Fails";
			}

			if (isset($_SESSION["msgUser"]))
			{
				if($_SESSION["msgUser"] != NULL)
					$message = "You have successful login with user ID ".$_SESSION["msgUser"].
					".<br/>Please fill in the Form to register";
				else
					$message = ".....";
			}
			session_unset(); 
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
		
		function validateRadio(radioName)
		{
			var radioList = document.getElementsByName(radioName);
			for(var i = 0; i < radioList.length; i++){
				if(radioList[i].checked == true){
				return true;
				}
			}
			return false;
		}
		
		function validateSelect(selectId)
		{
			var selector = document.getElementById(selectId);
			//alert(selector.selectedIndex);
			//alert(selector[selector.selectedIndex].value);
			if(selector.selectedIndex == 0){
				return false;
			}
			return true;
		}
		
		function validationForm()
        {
			document.getElementById("Msg").innerHTML = "";
			var count =0;
			
			if(document.getElementById("fnameT").value == ""){
				var elementMsg = document.createElement("P");
				elementMsg.innerHTML = "Firstname must have a value.";
				fnameT.style.borderColor = "#FF0000";
				document.getElementById("Msg").appendChild(elementMsg);	
				count++;
			}else{
				fnameT.style.borderColor = "#ccc";
			}
			
			/*if(validateRadio("age") == false){
				var elementMsg = document.createElement("P");
				elementMsg.innerHTML = "Age must be selected.";
				document.getElementById("Msg").appendChild(elementMsg);	
				count++;
			}
			
			if(document.getElementById("postcT").value == ""){
				var elementMsg = document.createElement("P");
				elementMsg.innerHTML = "Postcode must have a value.";
				postcT.style.borderColor = "#FF0000";
				document.getElementById("Msg").appendChild(elementMsg);
				count++;
			}else{
				postcT.style.borderColor = "#ccc";
			}
			
			if(document.getElementById("postcT").value != ""){
				var myExp = RegExp(/^[A-Z]\d[A-Z] ?\d[A-Z]\d$/);
					var result = myExp.test(document.getElementById("postcT").value);
					if(result == false)
					{
						var elementMsg = document.createElement("P");
						elementMsg.innerHTML = "Postcode must be valid.";
						postcT.style.borderColor = "#FF0000";
						document.getElementById("Msg").appendChild(elementMsg);
						count++;
					}else{
						postcT.style.borderColor = "#ccc";
					}
			}
			
			if(validateSelect("countryT")== false){
				var elementMsg = document.createElement("P");
				elementMsg.innerHTML = "Country must be selected.";
				document.getElementById("Msg").appendChild(elementMsg);
				count++;
			}*/
			
			if(document.getElementById("emailT").value == ""){
				var elementMsg = document.createElement("P");
				elementMsg.innerHTML = "Email must have a value.";
				emailT.style.borderColor = "#FF0000";
				document.getElementById("Msg").appendChild(elementMsg);
				count++;
			}else{
				emailT.style.borderColor = "#ccc";
			}
	
			if(count == 0)
				return true;
			else
				return false;
			//document.form.submit();*/
         }
		 
		function focusFunc(textId){
			if(textId == "fnameT"){
				var fnameP = document.getElementById("fname");
				fnameP.innerHTML = "Required, please less than 30 characters";
				fnameP.style.color ="gray";
			}else if(textId == "mnameT"){
				var mnameP = document.getElementById("mname");
				mnameP.innerHTML = "Please less than 30 characters";
				mnameP.style.color ="gray";
			}else if(textId == "lnameT"){
				var lnameP = document.getElementById("lname");
				lnameP.innerHTML = "Please less than 30 characters";
				lnameP.style.color ="gray";
			}else if(textId == "ageT"){
				var lnameP = document.getElementById("age");
				lnameP.innerHTML = "Please select age";
				lnameP.style.color ="gray";
			}else if(textId == "genderT"){
				var lnameP = document.getElementById("gender");
				lnameP.innerHTML = "Please select gender";
				lnameP.style.color ="gray";
			}else if(textId == "addrT"){
				var addrP = document.getElementById("addr");
				addrP.innerHTML = "Please fill in valid home address";
				addrP.style.color ="gray";
			}else if(textId == "cityT"){
				var cityP = document.getElementById("city");
				cityP.innerHTML = "Please fill in city name";
				cityP.style.color ="gray";
			}else if(textId == "provT"){
				var provP = document.getElementById("prov");
				provP.innerHTML = "Please fill in province name";
				provP.style.color ="gray";
			}else if(textId == "countryT"){
				var provP = document.getElementById("country");
				provP.innerHTML = "Please select country";
				provP.style.color ="gray";
			}else if(textId == "postcT"){
				var postcP = document.getElementById("postc");
				postcP.innerHTML = "Required, please fill in post code";
				postcP.style.color ="gray";
			}else if(textId == "emailT"){
				var emailP = document.getElementById("email");
				emailP.innerHTML = "Required, please fill in valid email address";
				emailP.style.color ="gray";
			}else if(textId == "phoneT"){
				var phoneP = document.getElementById("phone");
				phoneP.innerHTML = "Please fill in valid phone number";
				phoneP.style.color ="gray";
			}else if(textId == "pwdT"){
				var pwdP = document.getElementById("pwd");
				pwdP.innerHTML = "Minimum 6 characters in length";
				pwdP.style.color ="gray";
			}else if(textId == "repwdT"){
				var repwdP = document.getElementById("repwd");
				repwdP.innerHTML = "The same as password";
				repwdP.style.color ="gray";
			}else if(textId == "posT"){
				var posP = document.getElementById("pos");
				posP.innerHTML = "Junior or Intermediate or Senior Agent";
				posP.style.color ="gray";
			}else if(textId == "agcyT"){
				var agcyP = document.getElementById("agcy");
				agcyP.innerHTML = "1 or 2";
				agcyP.style.color ="gray";
			}
		}
	
		function blurFunc(textId){
			if(textId == "fnameT"){
				var fnameP = document.getElementById("fname");
				fnameP.innerHTML = "";
			}else if(textId == "mnameT"){
				var mnameP = document.getElementById("mname");
				mnameP.innerHTML = "";
			}else if(textId == "lnameT"){
				var lnameP = document.getElementById("lname");
				lnameP.innerHTML = "";
			}else if(textId == "addrT"){
				var addrP = document.getElementById("addr");
				addrP.innerHTML = "";
			}else if(textId == "ageT"){
				var lnameP = document.getElementById("age");
				lnameP.innerHTML = "";
			}else if(textId == "genderT"){
				var addrP = document.getElementById("gender");
				addrP.innerHTML = "";
			}else if(textId == "cityT"){
				var cityP = document.getElementById("city");
				cityP.innerHTML = "";
			}else if(textId == "provT"){
				var provP = document.getElementById("prov");
				provP.innerHTML = "";
			}else if(textId == "postcT"){
				var postcP = document.getElementById("postc");
				postcP.innerHTML = "";	
			}else if(textId == "emailT"){
				var emailP = document.getElementById("email");
				emailP.innerHTML = "";
			}else if(textId == "phoneT"){
				var phoneP = document.getElementById("phone");
				phoneP.innerHTML = "";
			}else if(textId == "pwdT"){
				var pwdP = document.getElementById("pwd");
				pwdP.innerHTML = "";
			}else if(textId == "repwdT"){
				var repwdP = document.getElementById("repwd");
				repwdP.innerHTML = "";
			}else if(textId == "posT"){
				var posP = document.getElementById("pos");
				posP.innerHTML = "";
			}else if(textId == "agcyT"){
				var agcyP = document.getElementById("agcy");
				agcyP.innerHTML = "";
			}
		}
	</script>
	</head>
	<body>
		<nav>
			<ul class="nav">
				<li><a href="index.php">Home</a></li>
				<li style="float:right"><a href="">About</a></li>
			</ul>
		</nav>
		<?php //include "menu.php"; for test?>
		<header id="example1">
			<img src="images/tea_logo5.jpg" alt="Try again later" style="width:200px;height:auto;margin-top: -2em;
    margin-bottom: 5em;"></img>
			<h1 style="display:inline;position:relative; left:60px">Agent Registration</h1>
		</header>
		<br/>
		<section>
			<br/>
			<div>
				<h2 align="center" style="background-color: #424a22; color: white;padding: 15px;">Agent Registration Form</h2>
				<form id = "myForm" method="POST" action="insertTbl.php">
					
					<label for="fname">First Name</label><br/>
					<input type="text" id="fnameT" name="AgtFirstName" onfocus="focusFunc(this.id)" onblur="blurFunc(this.id)" required placeholder="Your first name..">
					<p class="instruc" id="fname" ></p><br/>
					
					<label for="mname">Middle Name</label><br/>
					<input type="text" id="mnameT" name="AgtMiddleInitial" onfocus="focusFunc(this.id)" onblur="blurFunc(this.id)" placeholder="Your middle name..">
					<p class="instruc" id="mname" ></p><br/>
					
					<label for="lname">Last Name</label><br/>
					<input type="text" id="lnameT" name="AgtLastName" onfocus="focusFunc(this.id)" onblur="blurFunc(this.id)" placeholder="Your last name..">
					<p class="instruc" id="lname" ></p><br/>
					
					<label for="email">Email</label><br/>
					<input type="email" id="emailT" name="AgtEmail" onfocus="focusFunc(this.id)" onblur="blurFunc(this.id)" required placeholder="Your email..">
					<p class="instruc" id="email" ></p><br/>
					
					<label for="phone">Phone</label><br/>
					<input type="number" id="phoneT" name="AgtBusPhone" onfocus="focusFunc(this.id)" onblur="blurFunc(this.id)" placeholder="Your phone..">
					<p class="instruc" id="phone" ></p><br/>
		
					<label for="pwd">Password</label><br/>
					<input type="password" id="pwdT" name="AgentPwd" onfocus="focusFunc(this.id)" onblur="blurFunc(this.id)" placeholder="Your password.." >
					<p class="instruc" id="pwd" ></p><br/>
		
					<label for="repwd">Repeat Password</label><br/>
					<input type="password" id="repwdT" name="repeatpassword" onfocus="focusFunc(this.id)" onblur="blurFunc(this.id)" placeholder="Your password again.." 
								style = "background-color: #cccccc" disabled>
					<p class="instruc" id="repwd" ></p><br/>
					
					<label for="position">Agent Position</label><br/>
					<input type="text" id="posT" name="AgtPosition" onfocus="focusFunc(this.id)" onblur="blurFunc(this.id)" placeholder="Your position..">
					<p class="instruc" id="pos" ></p><br/>
					
					<label for="agency">Agency</label><br/>
					<input type="text" id="agcyT" name="AgencyId" onfocus="focusFunc(this.id)" onblur="blurFunc(this.id)" placeholder="Your agency..">
					<p class="instruc" id="agcy" ></p><br/>
					
					<input type="submit" value="Submit" onclick="return submitComf()"><br/>
					<input type="reset"  value="Reset" onclick="return clearComf()"><br/>	
					<div id = "Msg" class= "alertMsg">
						<p>Message Board</p>
						<p><?php echo $message?></p>
					</div>
						
					</p>
					
				</form>
			</div>
		
		</section>
		<!--<footer>
			<h5 align = "right">&copy Copyright 2019 DrinkTea&Travel. All Rights Reserved</h5>
		</footer>-->
		<?php include "footer.php";?>
		</body>
	
</html>