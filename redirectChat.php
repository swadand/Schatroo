<meta name="viewport" content="width=device-width, initial-scale=1">
<?php
    session_start();
    include("connection.php");
    
    $rname = $_POST['submit'];

        
    $chat_query= "select * from ".$rname;
    $chats = mysqli_query($con, $chat_query);
    $chatNum = mysqli_num_rows($chats);

    if ($chatNum > 0){
        echo "<div class=\"container\"><table class=\"table-striped h3 row justify-content-center d-md-table-cell\">";
        while($row=mysqli_fetch_array($chats, MYSQLI_ASSOC)){
            echo "<tr><td class=\"col-6\">".$row['uname']."</td><td>".$row['umsg']."</td></a></tr>";
        }echo "</table></div>";
    }
    else
        echo "<div class=\"container mx-auto text-center\">So empty.<br>Begin a conversation (●'◡'●)</div>";
        
    unset($_SESSION['rname']);
?>