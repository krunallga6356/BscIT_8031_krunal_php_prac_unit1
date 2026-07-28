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

        $sql = "SELECT * FROM student1";
        $result = $conn->query($sql);

        

        if($result->num_rows > 0){
            echo "<table border=2> Student Data 
                    <tr>
                        <th> ID </th>
                        <th> NAME </th>
                        <th> EMAIL </th>
                        <th> CITY </th>
                    </tr>";
            while($row = $result->fetch_assoc()){
                echo "<tr>";
                echo "<td>" . $row["ID"] . "</td>";
                echo "<td>" . $row["NAME"] . "</td>";
                echo "<td>" . $row["EMAIL"] . "</td>";
                echo "<td>" . $row["CITY"] . "</td>";
                echo "</tr>";
               
            }
            echo "</table>";
        }
    ?>
</body>
</html>