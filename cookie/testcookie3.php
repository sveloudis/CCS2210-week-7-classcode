<?php
	// set the variable to 0, it'll matter only if the cookie for the variable is not set
	$countVisit = 0;

	// if cookie is set for the variable, it'll go to $countVisit and get added by 1; otherwise it'll show 0 for the variable
	if(isset($_COOKIE['countVisit'])){
		$countVisit = $_COOKIE['countVisit'];
		$countVisit++;
	}

	// if the last visit cookie is set, it'll pass the value to $lastVisit, and it'll be displayed below
		if(isset($_COOKIE['lastVisit']))
		$lastVisit = $_COOKIE['lastVisit'];

	// set cookie for countVisit
	setcookie('countVisit', $countVisit,  time()+3600);

	// set cookie for last visit
	setcookie('lastVisit', date("d-m-Y H:i:s"),  time()+3600);

	// show the respected values
	// is the variable is not set, say 'welcome', otherwise show the info about visit number and last visit date
	if($countVisit == 0)
		echo "Welcome, this is your first visit to my website.";
	else {
		echo "This is your visit number ".$countVisit;
		echo '<br>';
		echo "Last time, you were here ".$lastVisit;
	}
?>