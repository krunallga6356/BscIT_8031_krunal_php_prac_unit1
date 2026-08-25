<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php
        session_start();
    ?>
    <form method="post" action="U5prog3_login.php">

        Enter Username: <input type="text" name="username" required> <br><br>

        Enter Password: <input type="password" name="password" required> <br><br>

        <input type="submit" name="login" value="Submit">

    </form>

    <script>
        function Checklogin(username,password){
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;
            
            if(username == "admin" || password == "1234"){
                alert("Enter valid username or password");
                return false;
            }
            
            return true;
        }
    </script>

</body>
</html>
