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
			echo "Pageviews:" . $_SESSION['views']; //retrieve data
		?>


<BR><BR>
	<A HREF="session3.php">Go session 3 page</A>

	</body>
</html> 