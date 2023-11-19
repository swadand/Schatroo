<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schatroom List</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <script>  
        function validation()  
        {  
            var id=document.newRoom.rname.value;    
            if(id.length==0) {  
                alert("Room Name field is empty");  
                return false;  
            }
            else if(id.length > 8) {
                    alert("Room Name should be less than 8");
                    return false;
                }
            }
    </script>  
</head>
<body>
    <header class="p-4 font-weight-normal border-bottom row">
        <h2 class="col-8">
            Welcome <?= $_SESSION['user']; ?>!
        </h2>
        <div class="container col-4">
            <button name="newCroom" type="button" data-toggle="modal" data-target="#create" class="btn btn-success rounded-3 float-right">New Chatroom</button>
            <div class="modal" id="create">
                <div class="modal-dialog modal-dialog-centered modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalTitleId">New Room</h5>
                            <button type="button" class="btn btn-danger btn-close" data-dismiss="modal" aria-label="Close">X</button>
                        </div>
                        <form action="signup.php" onsubmit = "return validation()" method="post" name="newRoom" autocomplete="off">
                        <div class="modal-body">
                            <input type="text" name="rname" placeholder="New Chatroom Name" autocomplete="off" readonly onfocus="this.removeAttribute('readonly');">
                        </div>
                        <div class="modal-footer">
                                <button type="submit" class="btn btn-primary mx-auto">Create</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <content class="container">
        <?php 

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
