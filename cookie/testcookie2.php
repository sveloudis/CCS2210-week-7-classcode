<?php
	$cookie_name = "usera";
	$cookie_value = "Elon Musk";
	setcookie($cookie_name, $cookie_value, time()+3600);
	setcookie("lasttime", date("h:i:sa"), time()+3600);
?>

<html>
<body>

<?php						
	if(isset($_COOKIE['usera'])) 
		echo "Welcome back!" . $_COOKIE['usera'] . "Last visit on: " . $_COOKIE['lasttime'];
	else
		echo "Welcome to our site!";
?>

	
</body>
</html>