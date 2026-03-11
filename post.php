<?php 
	/*
	if(isset($_GET['name'])){
		print_r($_GET);
		echo $name
	
	}
	if(isset($_POST['name'])){
		print_r($_POST);
		$name = htmlentities($_POST['name']);
		//echo $name
	
	}
 
	f(isset($_REQUEST['name'])){
		print_r($_REQUEST);
		$name = htmlentities($_REQUEST['name']);
		echo $name
	}
	
	echo $_SERVER['QUERY_STRING'];
	*/
 ?>
<!DOCTYPE html>
<html>
	<head>
		<title>FabLab</title>
	</head>
<body>
	<form method="POST" action="get-post.php">
		<div>
			<label>Name</label><br>
			<input type="text" name="name">
			<div>	
			</div>
				<label>Email</label><br>
				<input type="text" name="email">
		</div>
		<input type="submit" value="Submit">
	</form>  
	<ul> 
		<li>
			<a href="get-post.php?name=vrad">Vrad<a>
		</li>
		<li>
			<a href="get-post.php?name=steez">Steez<a>
		</li>
	</u1>
	<h1><?php echo "{$name}' s Profile"; ?></h1> 
</body>
</html>
