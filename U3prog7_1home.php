<?php
    error_reporting(0);
?>

<?php
    session_start();

    if (!isset($_SESSION['username'])) {
        header("Location: U3prog7_1login.php");
        exit();
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Home Page</title>
    </head>
    <body>

        <h2>Welcome to Home Page</h2>

        <p>
            Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!
        </p>

        <p>You are successfully logged in.</p>

        <a href="U3prog7_1logout.php">Logout</a>

    </body>
</html>