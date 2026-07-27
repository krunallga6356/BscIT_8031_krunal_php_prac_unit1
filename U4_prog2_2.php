<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Table</title>
</head>
<body>
    <?php
        try {
            $conn = new PDO("mysql:host=localhost:3307;dbname=student2", "root", "");
            
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = "CREATE TABLE IF NOT EXISTS student2 ( 
                ID INT AUTO_INCREMENT PRIMARY KEY,
                NAME VARCHAR(60),
                EMAIL VARCHAR(60),
                CITY VARCHAR(50)
            )";
            
            $conn->exec($sql);
            echo "Table Created Successfully.";

        } 
        
        catch(PDOException $e) {
            echo "Connection/Query Failed: " . $e->getMessage();
        }
        
        $conn = null;
    ?>
</body>
</html>