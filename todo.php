<?php
	session_start();
	
	if(!isset($_SESSION['logged_in'])) {
		header("Location: login");
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="stylesheet" href="css/todo.css">

  <script src="https://kit.fontawesome.com/9338fcac57.js" crossorigin="anonymous"></script>
  <title>To Do List</title>
</head>
<body>

  <nav class="navbar">
    <a href="index" class="nav-logo">TODO LIST</a>
    <ol class="nav-menu">
        <li class="nav-item">
            <a href="index" class="nav-link">Home</a>
        </li>
        <li class="nav-item">
            <a href="profile" class="nav-link">About Us</a>
        </li>
        <li class="nav-item">
            <a href="logout" class="nav-link">Logout</a>
        </li>
    </ol>
    <div class="bars">
        <i class="fa-solid fa-bars"></i>
    </div>
  </nav>

  <div class="container">
    <h2>ToDo List App</h2>
      
    <input type="text" id="task" placeholder="Add task...">
    <button id="add" onclick="add()">Add</button>

    <ul id="list"></ul>
    <div id="error"></div>
  </div>    

  <!--<script src="js/todo.js"></script> 
  <script src="js/index.js"></script>-->
</body>
</html>