<?php 
	if(isset($_GET['name'])){
		//print_r($_GET);
		//$name = htmlentities($_GET['name']);
		//echo $name
	
	}
	if(isset($_GET['name'])){
		//print_r($_GET);
		$name = htmlentities($_GET['name']);
		echo $name
	
	}

 ?>
<!DOCTYPE html>
<html>
	<head>
		<title>FabLab</title>
	</head>
<body>
	<form method="GET" action="get-post.php">
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
</body>
</html>
