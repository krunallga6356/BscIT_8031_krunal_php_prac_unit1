<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(!isset($_COOKIE["username"])){
            setcookie("username","Google",time()+(24 * 24 * 60 * 60),"/");
            echo "<h2> Welcome ! </h2>";
            echo "You're a new user";
        }
        else{
            echo "<h2> Welcome back ! </h2>";
            echo "You're a repeated user";
        }
    ?>

</body>
</html>