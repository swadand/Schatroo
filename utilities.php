<?php
include("connection.php");
function loadChat(mysqli $con, string $rname){
    $chat_query= "select * from ".$rname;
        $chat = mysqli_query($con, $chat_query);
        if ($chat){
            $chatNum = mysqli_num_rows($chat);
        } else {
            $chatNum = 0;
        }
    
    if ($chatNum > 0){
        echo "<div class=\"container\"><table class=\"table table-striped\">";
        while($row=mysqli_fetch_array($chat, MYSQLI_ASSOC)){
            echo "<tr><td class=\"col-6\"><h5>".$row['uname']."</h5><p>".$row['umsg']."</p></td></tr>";
        }echo "</table></div>";
    }
    else
        echo "<div class=\"container mx-auto my-5 h2 text-center\">So empty.<br>Begin a conversation (●'◡'●)</div>";
}

?>