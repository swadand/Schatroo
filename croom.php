<?php session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schatroom List</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <?php
        //include('auth.php');
        include('connection.php');
    
    ?>
    <script>
        function createModal(){
            //function
        }
    </script>
</head>
<body>
    <header class="p-4 font-weight-normal border-bottom row">
        <h2 class="col">Welcome <?php echo $_SESSION['user'] ?>!</h2>
        <form action="croom.php" method="post">
        <button name="newCroom" onclick="createModal()" class="btn btn-success rounded-3 mx-4">New Chatroom <img src="./icons/comment-regular.svg" width="18px" alt="message Icon"></button>
        </form>
    </header>
    <content class="container">
        <?php 
             if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['createRoom']))
             {
                
             }

            $query_chatroom = "select rname, chatters from chatroom";
            $chatroom_home_query= mysqli_query($con, $query_chatroom);

            if (mysqli_num_rows($chatroom_home_query) >0){
                echo "<table class=\"table table-striped h3 justify-content-center\"><form action=\"redirectChat.php\" method=\"post\">";
                while($row=mysqli_fetch_assoc($chatroom_home_query)){
                    echo "<tr><td><input type=\"submit\" class=\"btn btn-link\" name=\"submit\" value=\"".$row['rname']."\"></input></td><td><img src=\"./icons/user.png\" width=\"15px\">".$row['chatters']."</td></tr>";
                }echo "</form></table>";
            }
            else
                echo "No Chatrooms available. <br>You can create one!";

        ?>
    </content>
    <footer class="fixed-bottom text-sm-center">&copy Swad</footer>
</body>
</html>