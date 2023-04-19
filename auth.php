<?php 
    session_start();
    include('connection.php');
    if (isset($_POST['user']))
        $username = $_POST['user'];  
    else 
        $username = "user";
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $username = mysqli_real_escape_string($con, $username);  
          
        //echo "<h1><center> Welcome ".$username."</center></h1>"; 
        $_SESSION['user'] = $username;
        header("location:croom.php");
 	exit(); 
?>
