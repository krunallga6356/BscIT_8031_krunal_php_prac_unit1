<?php
    error_reporting(0);
?>


<?php
    session_start();

    session_destroy();

    header("Location: U3prog7_1login.php");
    exit();
?>