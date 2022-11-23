<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<body>

<?php
	// remove all session variables
	session_unset();

	// destroy the session
	session_destroy();
?>

<BR><BR>
	All session variables and session id are cleared <BR><BR>
	<A HREF="session1.php">Back to Session 1 page</A>

</body>
</html>
