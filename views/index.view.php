<!DOCTYPE html>
<html>

<head>
    <title>PHP login system</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
        <div class="h-screen flex items-center justify-center" id="frm">
            <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" name="f1" action="auth.php" onsubmit="return validation()" autocomplete="off" method="POST">
                <div class="mb-4">
                    <label class="block text-gray-700 text-xl text-center font-bold mb-2" for="username">
                        Username
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Username" id="user"> 
                </div>
                <div class="flex place-content-center">	
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit" id="btn" value="Login">
                        Sign In
                    </button>
                </div>
            </form>
        </div>
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
</body>

</html>