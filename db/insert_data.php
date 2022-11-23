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
	echo "Connected!";

	$sql = "INSERT INTO persons (FirstName, LastName, Age)
	VALUES ('John', 'Doe', '22')";


	// if (mysqli_query($conn, $sql)) is the procedural method
	if ($conn->query($sql) === TRUE) {
		$last_id = $conn->insert_id;
		echo "New record created successfully. Last inserted ID is: " . $last_id;
	}
	else
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);

	$conn->close();
?> 