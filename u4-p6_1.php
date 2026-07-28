<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $conn = new mysqli("localhost:3307","root","","studentdb");
        if($conn->connect_error){
            die("connection failed");
        }
        $sql = "DELETE FROM students2 WHERE id = 2";
        
        if($conn->query($sql)){
            echo "record deleted successfully.";
        }
        else{
            echo"error";
        }

        $conn->close();
    ?>
</body>
</html>