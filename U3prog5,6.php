<?php
    if(isset($_POST['Create'])){
        $_SESSION['username'] = $_POST['username'];
        echo "<h1> Session Created ! <br> Username :" . $_SESSION['username'] . "</h1>";
    }

    if(isset($_POST['Destroy'])){
        session_unset();
        session_destroy();
        echo "<h1> Session Destroy ! </h1>";
    }

    echo "<a href='U3prog5,6_Session.html'> Go Back </a>";
?>