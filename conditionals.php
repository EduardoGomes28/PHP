<?php
	# Conditionals

	/* 
		==
		===
		<
		>
		<=
		>=
		!=
		!==
	*/

	/*
	$num = 52;

	if($num != 5){
		echo '5 passed';
	} elseif($num == 6){
		echo '6 passed';
	} else {
		echo 'did not pass';
	}
	*/

	# NESTING IF

	$num = 6;

	/*
		if($num > 5){
			if($num < 10){
			echo "$num passed"
		} else {
			echo 'whatever'
		}
	}

	/*

		logical operators

		and &&
		or ||
		xor 
	*/

		if($num > 4 OR $num < 10){
			echo "$num passed";
		}

	# SWITCH

	$favColor = 'red';

	switch($){
		case 'red':
			echo 'Your favourite color is red';
			break;
		case 'blue':
			echo 'Your favourite color is red';
			break; 
		case 'green':
			echo 'Your favourite color is red';
			break;
		case 'red':
			echo 'Your favourite color is red';
			break; 
		default:
			echo 'Your Favourite color is something else'  
	}
?>


