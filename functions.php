<?php
	
	function mysql_insert_array($table, $data) {
		
		/*connect database*/
		$dbh = @mysqli_connect("localhost","root","") or die("can't connect<br />");

		/*connect table*/
		if (mysqli_select_db($dbh, "travelexperts"))
		{
			//print("Selected DB: travelexperts<br />");
		}
		else
		{
			print("Can't select DB: travelexperts<br />");
			exit();
		}
		
		$fields = $values = array();
		foreach( array_keys($data) as $key ) {
			$fields[] = "$key";
			$values[] = "'" . mysqli_real_escape_string($dbh, $data[$key]) . "'";
		}
		
		$fields = implode(",", $fields);
		$values = implode(",", $values);
		$sql = "INSERT INTO $table ($fields) VALUES ($values)";
		if(mysqli_query($dbh, $sql)) {
			$result = mysqli_insert_id($dbh);
			
		}else{
			$result = false;
			echo mysqli_error($dbh);
			echo mysqli_insert_id($dbh);
		}
		
		/*close database*/
		mysqli_close($dbh);
		return $result;
	}
	
	function mysql_select_agency($table_name){
		/*connect database*/
		$dbh = @mysqli_connect("localhost","root","") or die("can't connect<br />");

		/*connect table*/
		if (mysqli_select_db($dbh, "travelexperts"))
		{
			//print("Selected DB: travelexperts<br />");
		}
		else
		{
			print("Can't select DB: travelexperts<br />");
			exit();
		}
		$sql = "SELECT * FROM $table_name";
		$result = mysqli_query($dbh, $sql);
			
		/*close database*/
		mysqli_close($dbh);
		return $result;
	}
	
	function mysql_select_agent($table_name, $id){
		/*connect database*/
		$dbh = @mysqli_connect("localhost","root","") or die("can't connect<br />");

		/*connect table*/
		if (mysqli_select_db($dbh, "travelexperts"))
		{
			//print("Selected DB: travelexperts<br />");
		}
		else
		{
			print("Can't select DB: travelexperts<br />");
			exit();
		}
		$sql = "SELECT * FROM $table_name where AgencyId = $id";
		$result = mysqli_query($dbh, $sql);
			
		/*close database*/
		mysqli_close($dbh);
		return $result;
	}
	
	function mysql_update_array($table, $data, $custId) {
		
		/*connect database*/
		$dbh = @mysqli_connect("localhost","root","") or die("can't connect<br />");

		/*connect table*/
		if (mysqli_select_db($dbh, "travelexperts"))
		{
			//print("Selected DB: travelexperts<br />");
		}
		else
		{
			print("Can't select DB: travelexperts<br />");
			exit();
		}
		
		//$fields = $values = array();
		//foreach( array_keys($data) as $key ) {
		//	$fields[] = "$key";
		//	$values[] = "'" . mysqli_real_escape_string($dbh, $data[$key]) . "'";
		//}
		
		//$fields = implode(",", $fields);
		//$values = implode(",", $values);
		
		$sql = "UPDATE customers SET
				CustFirstName = '$data[CustFirstName]',
				CustLastName = '$data[CustLastName]',
				CustAddress = '$data[CustAddress]',
				CustCity = '$data[CustCity]',
				CustProv = '$data[CustProv]',
				CustPostal = '$data[CustPostal]',
				CustCountry = '$data[CustCountry]',
				CustHomePhone = '$data[CustHomePhone]',
				CustBusPhone = '$data[CustBusPhone]',
				CustEmail = '$data[CustEmail]',
				AgentId = '$data[AgentId]'		
			WHERE customerId = '$custId'";
			
		//print($sql);
		if(mysqli_query($dbh, $sql)){
			$result = $custId;
		} else {
			$result = false;
		}
	
		/*close database*/
		mysqli_close($dbh);
		return $result;
	}
	
?>