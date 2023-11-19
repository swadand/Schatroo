<?php

//include('connection.php');

$username = $_POST['username'] ?? "";

//to prevent from mysqli injection  
$username = stripcslashes($username);
$username = mysqli_real_escape_string($con, $username);

$_SESSION['user'] = $username;

redirect('/chats');