<?php      
    include('connection.php');  
    $username = $_POST['user'];  
    $password = $_POST['pass'];  
      
        //to prevent from mysql injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
  
        // The hash of the password that
        // can be stored in the database
        $hash = password_hash($password, PASSWORD_DEFAULT);

        $sql = "insert into login (`username`, `password`) values('$username', '$hash')";  
        $result = mysqli_query($con, $sql);    
          
        if(!$result){  
            echo "<h1> Account Creation failed. Try Again.</h1>"; 
        }  
        else{  
            echo "<h1><center> Account Created Successfully! </center></h1>";  

        }     
?> 