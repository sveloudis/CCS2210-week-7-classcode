<?php
	// set the expiration date to one hour ago
	setcookie("countVisit", "", time() - 3600);
	setcookie("lastVisit", "", time() - 3600);
?>

<html>
<body>

<?php
	echo "Cookies 'countVisit' and 'lastVisit' are deleted.";
?>

</body>
</html>