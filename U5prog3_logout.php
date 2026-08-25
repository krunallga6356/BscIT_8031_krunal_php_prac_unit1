<?php
session_start();

session_destroy();

header("Location: U5prog3_login.html");
exit();
?>
