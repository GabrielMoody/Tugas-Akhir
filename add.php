<?php
	require_once 'database.php';
	
	session_start();
		
	$task = $_GET['task'];
	$username = $_SESSION['username'];
		
	$sql = "INSERT INTO tasks (task_name, user_id) VALUES(?, (SELECT id FROM users WHERE username=?))";
	$prepare = mysqli_prepare($conn, $sql);
	mysqli_stmt_bind_param($prepare, "ss", $task, $username);
	mysqli_stmt_execute($prepare);

	$result = mysqli_stmt_get_result($prepare);
	
	header('Location: todo');
