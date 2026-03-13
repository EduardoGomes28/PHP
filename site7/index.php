<?php 
	$path = '/dir0/dirl/myfile.php';
	$file = 'file1.txt';

	/*
	// Return filename
	echo basename($path);

	// Return filename without ext
	echo basename($path, '.php');

	

	//Return the dir name from path
	echo dirname('$path');

	
	// Check if file exists
	echo file_exists('file1.txt');

	
	// Get abs path
	echo realpath($file);

	

	// Check  to see if file
	echo is_file('$file'); 

	// Check if  writable
	echo is_writable('$file');

	// Check if  readable
	echo is_readable('$file');

	// Get file size 
	echo filesize($file);

	// Create a directory
	mkdir('testing')

	// Remove dir if empty
	rmdir('testing');

	// Copy file
	echo copy('file1.txt', 'file2.txt');

	// Rename File
	rename('file2.txt', 'myfile.txt');

	// Delete file
	unlink('myfile.txt');

	// Writefrom file to string
	echo file_get_contents($file);

	// Write string to file
	echo file_put_contents($file, 'Goodbye World');
	
	$current = file_get_contents($file);

	$current = 'Goodbye World';

	file_put_contents($file, $current);

	// Open file for reading
	$handle = fopen($file, 'r');
	$data = fread($handle, filesize($file));
	echo $data;
	*/

	// Open File for writing
	$handle =fopen('file2.txt', 'w');
	$txt = 'Eduardo Gomes';
	fwrite($handle, $txt);
	$txt = "Kobe Bryant\n";
	fwrite($handle, $txt);
	fclose($handle);
 ?>