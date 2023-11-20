<?php

const BASE_PATH = __DIR__;

function controller_path($path) { 
    return BASE_PATH . str_replace('/', DIRECTORY_SEPARATOR, "/Https/controllers/") . $path;
}

function view(string $view) {
    return BASE_PATH . str_replace('/', DIRECTORY_SEPARATOR, "/views/") . $view . ".view.php";
}

function redirect(string $url) {
    header($url);
    exit();
}

function abort(int $code = 404) {
    http_response_code(404);
    require view($code);
    exit();
}

function loadChat(mysqli $con, string $rname){
    $chat_query= "select * from `".$rname."` order by created desc";
        $chat = mysqli_query($con, $chat_query);
        if ($chat){
            $chatNum = mysqli_num_rows($chat);
        } else {
            $chatNum = 0;
        }
    
    if ($chatNum > 0){
        echo "<div class=\"container\"><table class=\"table table-striped\">";
        while($row=mysqli_fetch_array($chat, MYSQLI_ASSOC)){
            echo "<tr><td class=\"col-6\">".$row['uname']."<p>".$row['umsg']."</p></td></tr>";
        }echo "</table></div>";
    }
    else
        echo "<div class=\"container mx-auto my-5 h2 text-center\">So empty.<br>Begin a conversation (●'◡'●)</div>";
}


