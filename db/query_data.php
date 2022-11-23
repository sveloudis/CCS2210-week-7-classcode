<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "seminar_db";

	$conn = new mysqli($servername, $username, $password, $dbname);

	if ($conn->connect_error)
		die("Connection failed: " . $conn->connect_error);
	echo "Connected!";

	$sql = "SELECT personID, FirstName, Lastname FROM persons where personID>3;";

	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc())
			echo "id: " . $row["personID"]. " - Name: " . $row["FirstName"]. " " . $row["Lastname"]. "<br>";
	}		
	else
		echo "0 results";

	$conn->close();
?> 