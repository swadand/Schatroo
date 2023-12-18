<html>
<head>
    <title>PHP login system</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="public/css/login.css">
</head>
<script>
    function validation() {
        var id = document.f1.username.value;
        if (id.length == 0) {
            alert("User Name field is empty");
            return false;
        } else if (id.length > 8) {
            alert("User Name should be less than 8");
            return false;
        }
    }
</script>
<body>
        <div class="main-div">
        <form  name="f1" action="/auth" method="post" onsubmit="return validation()" autocomplete="off">
                <input class="hidden" value="POST" name="_method" disabled> 
                <div>
                    <label for="username">
                        Username
                    </label><br>
                    <input id="username" type="text" placeholder="Username"> 
                </div>
                <div>	
                    <button type="submit" id="btn" value="Login">
                        Sign In
                    </button>
                </div>
        </form>
        </div>
</body>
</html>
