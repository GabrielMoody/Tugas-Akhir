<?php
	$conn = mysqli_connect('localhost', 'root', '', 'todo');
	
	if($conn === false) {
		die("Error: " . mysqli_connect_error());
	}
?>