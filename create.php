<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>  
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</html>

<?php    
    session_start();
    include("utilities.php");
    include("connection.php");

    $rname = $_POST['rname'];
    $msg = $_POST['msg'];
    $msg_query= "insert into `".$rname."` (uname, umsg) values('".$_SESSION['user']."', '".$msg."')";
    $msgres = mysqli_query($con, $msg_query);
    loadChat($con, $rname);

	echo "<form action=\"create.php\" class=\"row\" method=\"post\">
        <div class=\"input-group fixed-bottom\">
            <input type=\"text\" name=\"msg\" class=\"input-group-text col\" placeholder=\"Your Message\" />
            <button class=\"btn btn-success\" type=\"submit\" name=\"rname\" value=\"".$rname."\"/>-></button>
        </div></form></body>";
?> 
