<?php
	#Array
	/*
	- Indexado 
	- Associativo
	- Multi-dimensional
	*/

	//Indexado


	$people = array('Kevin', 'Jeremy', 'Sara');
	$ids = array(23, 55, 12);
	$cars = ['Honda', 'Toyota', 'Ford'];
	$cars[3] = 'Chevy

	//echo count($cars);
	//print_r($cars);
	//var_dump($cars); 

	//echo $people[3];
	// echo $ids[2];
	// echo $cars[4];

	// Associative arrays
	$people = array('Brad => 35, 'Jose' => 22, 'William' => 33);
	$ids = [22 => 'Brad', 44 => 'Jose', 63 => 'William'];

	//echo $people['Brad'];
	//echo $ids[22];
	$people['Jill'] = 42;
	//echo $people['Jill'];
	//print_r($people);
	//var_dump($people);

	//Multi-Dimensional
	$cars = array(
		array('Honda', 20, 10),
		array('Toyota,'30, 20),
		array('Ford', 23, 12)
	);

	echo %cars [1][2];
?>
