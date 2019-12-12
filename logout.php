<!--
DrinkTea&Travel Agency Register
Designed by: Tao Lu
Date: June 21, 2019
-->
<!docttype html>
<html>
	<head>
		<title>Logout</title>

		<?php
			session_destroy();
			header("Location: http://localhost:8080/CPRG-207/TravelAgent/index.php");
		?>
		
		<script type="text/javascript">
		</script>
	</head>
	<body>
	</body>
	
</html>