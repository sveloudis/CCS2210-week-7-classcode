<html>
<body>
	<?php
		$servername = "localhost";	
		$username = "root";
		$password = "";
		
		// Create connection
		$conn = new mysqli($servername, $username, $password);
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		echo "Connected!";
		
		// select the db that you will be working on for this connection
		mysqli_select_db($conn,"seminar_db");

		// create table sql command
		$sql = "CREATE TABLE Persons
			(
			personID int NOT NULL AUTO_INCREMENT,
			PRIMARY KEY(personID),
			FirstName varchar(15),
			LastName varchar(15),
			Age int
			);";
			
		// execute query
		if ($conn->query($sql) === TRUE)
			echo "Table Persons created successfully";
		else
			echo "Error creating table: " . $conn->error;

		$conn->close();
	?>
</body>
</html>