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

        $sql = "DELETE FROM student2 WHERE ID=2";
        $conn->exec($sql);
        echo "Record Deleted Successfully..."
        
    ?>
</body>
</html>