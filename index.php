<?php session_start(); ?>
<!DOCTYPE html>
<html>  
<head>  
    <title>PHP login system</title> 
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>  
<body>  
    <div id = "frm" class="container mx-auto text-center mt-5">  
        <h1>Login</h1>  
        <form name="f1" action = "auth.php" onsubmit = "return validation()" method = "POST">  
            <p>  
                <label> UserName: </label>  
                <input type = "text" id ="user" name  = "user" />  
            </p>   
            <p>     
                <input type =  "submit" id = "btn" value = "Login" class="btn btn-success"/>  
            </p>
        </form>  
    </div>    
    <script>  
            function validation()  
            {  
                var id=document.f1.user.value;    
                if(id.length==0) {  
                    alert("User Name field is empty");  
                    return false;  
                }
                else if(id.length > 8) {
                        alert("User Name should be less than 8");
                        return false;
                    }
                }
        </script>  
</body>     
</html>
