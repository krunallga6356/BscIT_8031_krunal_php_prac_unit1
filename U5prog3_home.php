<?php
    session_start();

    if (!isset($_SESSION['username'])) {
        header("Location: U5prog3_login.html");
        exit();
    }

    echo "Welcome " . $_SESSION['username'];
    echo "<br><br>";

    echo "<a href='U5prog3_logout.php'>Logout</a>";
?>
