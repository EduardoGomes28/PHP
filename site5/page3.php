<?php 
	$user = ['name' => 'Eduardo', 'email' => 'test@test.com', 'age' => 19];

	$user = serialize($user);

	setcookie('user', $user, time() + (86400 * 30));

	$user = unserialize($_COOKIE['user']);

	print_r($user);

 ?>