<?php
	# Function - Bloco de código que pode ser repetido quando for chamado

	/* 
	Camel Case - myFunction()
	Lower Case - my_function()
	Pascal Case - MyFunction()
	*/

	// Create Simple Function
	functiom simpleFunction(){
		echo 'Hello World';
	}

	// Run Simple Function
	simpleFunction();

	// Function With Param
	function sayHello($name){
		echo "Hello $name<br>";
	}

	//sayHello('Joe');
	//sayHello('Bob');
	//sayHello('Tim');

	// Return Value
	function addNumbers($num1, $num2){
		echo $num1 + $num2;
	}

	//echo addNumbers(2,3);

	// By Reference

	$myNum = 10;

	function addFive($num){
		$num += 5;
	}

	function addFive($num){
		$num += 10;
	}

	addFive($myNum);

	echo "Value : $myNum<br>";
	?>
