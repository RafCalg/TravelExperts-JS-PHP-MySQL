
    
    function stToDate(string1){
        var parts =string1.split('-');
        // Please pay attention to the month (parts[1]); JavaScript counts months from 0:
        // January - 0, February - 1, etc.
        var mydate = new Date(parts[0], parts[1] - 1, parts[2]); 
        
        return mydate;
    }

    
    function todayDate(){
        testDate = new Date();
        year = testDate.getFullYear();
        //year comes in as a number so we transform it in string
        year =year.toString();
        // we add 1 to the months as January is 0 in getMonth() method
        month = testDate.getMonth()+1;
        day = testDate.getDate();
        strDate = year.concat("-",month,"-",day)
        currDate = stToDate(strDate);
        return currDate;
        
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
		}
		
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
			fnameP.style.color ="gray"
		}else if(textId == "lnameT"){
			var lnameP = document.getElementById("lname");
			lnameP.innerHTML = "Please less than 30 characters";
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
		}
	}
	
	function blurFunc(textId){
		if(textId == "fnameT"){
			var fnameP = document.getElementById("fname");
			fnameP.innerHTML = "";
		}else if(textId == "lnameT"){
			var lnameP = document.getElementById("lname");
			lnameP.innerHTML = "";
		}else if(textId == "addrT"){
			var addrP = document.getElementById("addr");
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
		}
	}