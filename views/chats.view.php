<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schatroom List</title>
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
    <header class="">
        <h2 class="">
            Welcome <?= $_SESSION['user']; ?>!
        </h2>
        <div class="modal">
            <form>
                <label for="chatroomName"></label>
                <input type="text" name="chatroomName">
            </form>
        </div>
    </header>
    <content class="">
        <table>
        <?php foreach ($chatrooms as $chatroom) : ?>
           <tr>
            <td>
            <a href="/"<?= $chatroom['id']; ?>">
                <?= $chatroom['name']; ?>
            </a>
            </td>
           </tr>
        <?php endforeach; ?>
        </table>
    </content>
    <footer class="">&copy Swad</footer>
</body>
</html>
