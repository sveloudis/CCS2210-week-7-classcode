<?php
	// set the expiration date to one hour ago
	setcookie("usera", "", time() - 3600);
	setcookie("lasttime", "", time() - 3600);
?>

<html>
<body>

<?php
	echo "Cookies 'user' and 'lasttime' are deleted.";
?>

</body>
</html>