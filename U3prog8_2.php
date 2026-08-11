<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
        <center>
            <form method="post">
                Enter username:
                <input type="text" name="name" required>
                <input type="submit" name="submit" value="Submit">
            </form>

            <?php

                if (isset($_POST["submit"])) {

                    $name = $_POST["name"];

                    if ($_COOKIE["username"]!=$name) {

                        setcookie("username", $name, time() + (24 * 60 * 60), "/");
                        echo "<h1> Welcome, " . $name . " ! </h1>";
                        echo "<h3> You are a New user </h3>";

                    } else {
                        echo "<h1>Welcome back, " . $name . " ! </h1>";
                        echo "You're a repeated user... ";
                    }
                }
            ?>

         </center>
    
    </body>
</html>

