<?php
	session_start();
	$arr_names = array('Feta Cheese', 'Blue Cheese', 'Mozzarella', 'Cheddar');
	
	echo session_id() . "<br>" ;
	
	if (isset($_SESSION['views']))
		$_SESSION['views'] = $_SESSION['views'] + 1;
	else		
		$_SESSION['views'] = 1;

	$_SESSION['names'] = $arr_names;
	
	echo "Names are stored now in session! " . "<BR>"; 
	
	$info_msg = "Counter: " . $_SESSION['views'] . " in this particular session!";
?>


<html>

<body>

<?php
	echo $info_msg  ;
	
	$_SESSION ['names'][1] = "Goat Cheese"; 
	
	foreach ($_SESSION['names'] as $key=>$value){
		echo "<BR>" . "Key of this session is : " . $key . " and value is " . $value ;
	}
?>

<BR><BR>
	<A HREF="session5.php">Clear the session</A>

</body>

</html>