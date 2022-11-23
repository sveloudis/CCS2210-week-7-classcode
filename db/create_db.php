<html>
<body>
<?php
	$con = mysqli_connect("localhost","root","");
	if (!$con)
		die("Could not connect: " . mysql_error());
	
	echo "Connected!";
	
	if ($con->query("CREATE DATABASE seminar_db;"))
		echo "Database created";
	else
		echo "Error creating database: " . mysqli_error($con);
	
	
	$con->close();

?>