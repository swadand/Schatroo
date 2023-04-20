<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>  
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

<?php
    include("connection.php");

    $rname = $_POST['rname'];

    $query = "CREATE TABLE `".$rname."` (`mid` int(2) PRIMARY KEY AUTO_INCREMENT,`uname` varchar(8) NOT NULL,`umsg` varchar(60) NOT NULL,`created` date NOT NULL DEFAULT current_timestamp())";
    $query2 = "INSERT INTO `chatroom` (`rid`, `rname`, `chatters`) VALUES (NULL, '".$rname."', '0')";
    $roomque = mysqli_query($con, $query);
    $roomque2 = mysqli_query($con, $query2);

    header('location: croom.php');

?>