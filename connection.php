<?php   
    $ini_array = parse_ini_file("cred.ini");

    $host = $ini_array['host'];
    $user = $ini_array['user'];  
    $password = $ini_array['password'];
    $db_name = $ini_array['db_name'];
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }
?>
