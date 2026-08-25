<?php
    session_start();

    $username = $_POST['username'];
    $password = $_POST['password'];

        if($username=="admin" && $password=="1234"){
            echo "Login Successfull...";
            $_SESSION['username'] = $username;
            echo "Welcome " . $_SESSION['username'];

            echo "<a href='U5prog3_home.php'> Go to logout</a>";
        }
        else{
            echo "Enter valid username or password";
            echo "<a href='U5prog3_login.html'></a>";
        }
?>