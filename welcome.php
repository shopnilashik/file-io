<?php 	
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Welcome page!</title>
</head>
<body>

	<h1>Welcome</h1>
	<p><?php 
		echo $_SESSION['username'];
	?>
	
	</p>

</body>
</html>