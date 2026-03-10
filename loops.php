?php
	#Loops - Execute code set number of times

	/*
		For
		While
		Do..While
		Foreach
	*/

	#For Loop
	# @params - init, condition, inc

	$i = 0;

	while($i < 10){
		echo $i
		echo '<br>';
		$i++
	}

	#Do...While
	# @params - condition


	$i = 0;

	do{
		echo $i;
		echo '<br>';
		$i++
	}


	while($i < 10)
	*/

	$people = array('Brad', 'Jose', 'William');

	foreach($people as $person){ 
		echo $person;
		echo '<br>';
	}
	*/

	$people = array('Brad' => 'brad@gmail.com', 'Jose' 'jose@gmail.com' =>, 'William' 'will@gmail.com');

	foreach($people as $person => $email){
		echo $person. ':' .$email;
		echo '<br>';
	}
?>
