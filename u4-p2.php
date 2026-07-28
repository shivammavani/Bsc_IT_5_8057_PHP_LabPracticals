<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $conn = new mysqli("localhost","root","","studentdb");
        if($conn){
            die ("Connection Failed:" .mysqli_connect_errno());
        }
        $sql = "CREATE TABLE IF NOT EXISTS students1";

        //CREATE TABLE IF NOT EXISTS studentdb
        if(mysqli_query($conn,$sql)){
            echo "Table Created Successfully";
        }
        else{
            echo "Error:" .$conn->error;
        }
        $conn->close();
    ?>
</body>
</html>