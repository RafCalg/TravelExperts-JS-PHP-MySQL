<?php
	
	function log_history($filehandle, $text) 
	{
		$curDate = date("Y-m-d h:i:sa");
		$logText = $curDate."	".$text;
		if(fwrite($filehandle, $logText)){
			echo "File written successfully<br/>";
		}else{
			echo "File not written<br/>";
		}
	}
	
?>