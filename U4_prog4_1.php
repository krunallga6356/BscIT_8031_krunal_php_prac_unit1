<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $conn = new mysqli("localhost:3307","root","","student1");
        if($conn->connect_error){
            die("Connection Failed : ");
        }

        $stmt = $conn->prepare("INSERT INTO student1(NAME, EMAIL, CITY) VALUES(?, ?, ?)");

        $NAME = "VANSH";
        $EMAIL = "vansh@gmail>com";
        $CITY = "BANGLORE";

        $stmt ->bind_param("sss", $NAME, $EMAIL, $CITY);

        if($stmt->execute()){
            echo "Record Inserted Successfully.";
        }
        else{
            echo "Error";
        }

        $stmt->close();
        $conn->close();
    ?>
</body>
</html>