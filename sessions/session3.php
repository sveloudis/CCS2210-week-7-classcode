 <?php
	// Start the session
	session_start();
?>
<!DOCTYPE html>
<html>
	<body>

		<?php
			echo session_id() . "<br>" ;

			echo $_SESSION["favcolor"] . "<BR>";
			echo $_SESSION["favanimal"] . "<BR>";
			echo "Pageviews:" . $_SESSION['views'];


			$_SESSION["favcolor"] = "Very Dark Blue close to black";
			$_SESSION["favanimal"] = "Capuchin Monkey";
		?>


<BR><BR>
	<A HREF="session2.php">Go back to session2 page</A>
	<A HREF="session4.php">Go to session 4 page</A>

	</body>
</html> 