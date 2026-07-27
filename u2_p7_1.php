<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $conn = new mysqli("localhost","root","","test");
        if($conn->connect_error){
            die("connection failed : " . $conn->connect_error);
        }
        $queries = [
        "SELECT LENGTH ('hello php')AS result",
        "SELECT CONCAT('hello',' ','php')AS result",
        "SELECT CONCAT_WS(' - ','php','mysql','html')AS result",
        "SELECT TRIM('  hello php  ')AS trimmed,
                LTRIM(' hello php  ')AS LTrimmed,
                RTRIM(' hello php  ')AS RTrimmed",
        "SELECT LPAD('PHP',8,'*')AS LPad,
                RPAD('PHP',8,'*')AS RPad,
                LOCATE('sql','mysql database')AS locate",
        "SELECT SUBSTER('hello php',1,5)AS substring",
        "SELECT "



        ];

        foreach($queries as $sql){
            echo"<br>";
            $_result = $conn->query($sql);
            if($result){
                while($row = $result->fetch_assos()){
                    foreach($row as $key => $value){
                        echo "<b>$key :</b> $value <br>";
                    }
                }
            }
            else{
                echo"query error";
            }
        }
    ?>
    
</body>
</html>