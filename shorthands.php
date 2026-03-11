<?php
	$loggedIn = true ;
	/*
	if($loggedIn){
		echo 'You are logged in';
	} else {
		echo 'You are not logged in'
	} 
	
	//echo ($loggedIn) ? 'You are logged in' : 'You are not logged in';

	$isRegistered = ($loggedIn == true) ? true : false;
	echo $isRegistered;

	$age = 19;
	$score = 25;

	echo 'Your score is:'.($score > 10 ? ($age > 10 ? 'Average': 'Exceptional'):($age > 10 ? 'Horrible':'Average'));
*/
?>

<div> 
<?php if($loggedIn)	{ ?>
	<h1>Welcome User</h1>
<?php} else { ?>
	<h1>Welcome Guest</h1>
<?php } ?>
</div>
