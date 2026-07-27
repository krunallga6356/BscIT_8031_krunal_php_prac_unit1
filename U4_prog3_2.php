<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $conn = new PDO("mysql:host=localhost:3307;dbname=student2","root","");

        $sql = "INSERT INTO student2(NAME, EMAIL, CITY)
            VALUES ('KRUNAL', 'krunal@gmail.com', 'RAJKOT')";

        $conn->exec($sql);
        echo "Record Inserted Successfully";
    ?>
</body>
</html>