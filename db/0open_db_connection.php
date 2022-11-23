<html>
<body>
<?php
	$con = mysqli_connect("localhost","root","");
	if (!$con)
		die("Could not connect: " . mysqli_connect_error());
	
	echo "Connected!";

	mysqli_close($con);


?>