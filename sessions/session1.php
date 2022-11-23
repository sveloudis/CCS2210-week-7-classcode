 <?php
	// Start the session
	session_start();
	$_SESSION['views']=1;
?>

<!DOCTYPE html>
<html>
	<body>

		<?php
			// Set session variables
			$_SESSION["favcolor"] = "green";
			$_SESSION["favanimal"] = "dog";
			echo "Session variables are set." . "<br>";
			echo session_id() . "<br>" ;
			
			echo "Pageviews:" . $_SESSION['views']; //retrieve data
		?>


<BR><BR>
<A HREF="session2.php">Go to session2 page</A>

	</body>
</html> 