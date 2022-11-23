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

		echo "Connected!";
		
		$sql = "CREATE TABLE Persons
			(
			personID int NOT NULL AUTO_INCREMENT,
			PRIMARY KEY(personID),
			FirstName varchar(15),
			LastName varchar(15),
			Age int	
			)";
		
		// execute query
		if ($conn->query($sql) === TRUE) 
			echo "Table Persons created successfully";
		else
			echo "Error creating table: " . $conn->error;
		
		$conn->close();
		
	?>