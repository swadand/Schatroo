<?php 
    session_start();
    include('connection.php');
    if (isset($_POST['user']))
        $username = $_POST['user'];  
    else 
        $username = "user";
        
    if (isset($_POST['pass']))
        $password = $_POST['pass'];  
    else
        $password = 0000;
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  

        $hash = "$2y$10$8sA2N5Sx/1zMQv2yrTDAaOFlbGWECrrgB68axL.hBb78NhQdyAqWm";
  
        // Verify the hash against the password entered
        $sql1 = "select password from login where username = '$username'";  
        $result1 = mysqli_query($con, $sql1);
        $rowpswd = mysqli_fetch_array($result1, MYSQLI_ASSOC);

        $verify = password_verify($password, $rowpswd['password']);
      
        /*$sql = "select *from login where username = '$username' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);*/
          
        if($verify){
            //echo "<h1><center> Welcome ".$username."</center></h1>";
            $_SESSION['logged_in'] = true; 
            $_SESSION['user'] = $username;
            header("location:croom.php");
            exit();
        }  
        else{
            header("location:index.php");
            exit();  
        }  
?>