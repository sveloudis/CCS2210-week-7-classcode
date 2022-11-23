<html>
<body>
	<?php
		$servername = "localhost";	
		$username = "root";
		$password = "";
		$dbname = "seminar_db";
		
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error)
			die("Connection failed: " . $conn->connect_error);

		$sql = "drop table persons;";

		// execute query
		if ($conn->query($sql) === TRUE)
			echo "Tables were dropped successfully";
		else
		    echo "Error: " . $conn->error;


	if ($conn->query("DROP DATABASE seminar_db"))
		echo "Database was dropped";
	else
		echo "Error dropping database: " . mysqli_error($con);

		$conn->close();
	?>
</body>
</html>