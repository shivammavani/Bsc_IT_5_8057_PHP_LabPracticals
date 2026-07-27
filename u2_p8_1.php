<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $conn = new mysql("localhost","root","test");
        if ($conn->connect_error)
        {
            die("connection failed : " . $conn->connect_error);
        }
        $queries = [
        "SELECT DAYOFWEEK(CURDATE())AS DAYOFWEEK",
        "SELECT WEEKDAY(CURDATE())AS WEEKDAY",
        "SELECT DAYOFMONTH(CURDATE())AS DAYOFMONTH",
        "SELECT DAYOFYEAR(CURDATE())AS DAYOFYEAR",
        "SELECT DAYNAME(CURDATE())AS DAYNAME",
        "SELECT MONTH(CURDATE())AS MONTHNUMBER,
                MONTHNAME(CURDATE())AS MONTHNAME",
        "SELECT WEEK(CURDATE())AS WEEKNUMBER,
                NOW()AS CURRENTDATETIME",
        "SELECT SYSDATE(CURDATE())AS SYSTEMDATETIME,
                CURRENT_TIMESTAMP() AS CUURRENTTIMESTAMP"
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