
<?php
    session_start();

    $conn = mysqli_connect("localhost:3307", "root", "", "login");

        if (!$conn) {
            die("Database connection failed: " . mysqli_connect_error());
        }

        if (isset($_POST["login"])) {

            $username = $_POST["username"];
            $password = $_POST["password"];


            $sql = "SELECT * FROM users
                    WHERE username='$username' AND password='$password'";

            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) == 1) {

                $_SESSION["username"] = $username;

            
                header("Location:  U3prog7_1home.php");
                exit();

            } else {
                echo "<p style='color:red;'>Invalid Username or Password</p>";
            }
        }

    mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
</head>
<body>

    <h2>Login</h2>

    <form method="post">

        <label>Username:</label>
        <input type="text" name="username" required>
        <br><br>

        <label>Password:</label>
        <input type="password" name="password" required>
        <br><br>

        <input type="submit" name="login" value="Login">

    </form>

</body>
</html>

