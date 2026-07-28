<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    try
        {
            $conn = new PDO("mysql:host =localhost;dbname=studentdb","root","");
            $conn->swtAttribute(pod::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $sql = "CREATE TABLE IF NOT EXISTS students2
            (
                id INT AUTO_INCREMENT PRIMARY KEY,
                name VARCHAR(50),
                email VARCHAR(50),
                city VARCHAR(30) 
            )";
            $conn->exec($sql);
            echo"Table Created successfully.";
        }
        catch(PDOException $e){
            echo"connnection failed: " . $e->getmessage();
        }
        $conn = null;
    ?>
</body>
</html>