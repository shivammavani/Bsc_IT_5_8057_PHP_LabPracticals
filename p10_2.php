<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        error_reporting(0);
    ?>
    <form>
    <input type="text" name="uname[0]"><br><br>
    <input type="text" name="uname[1]" ><br><br>
    <input type="text" name="uname[2]"><br><br>

    <input type="submit" value="add"><br><br>
</form>
</body>
</html>
<?php
    echo"<h3>Array 1:</h3>";
    foreach($a1 as $val)
    {
        echo $val . "<br>";
    }

    echo"<h3>Array 2:</h3>";
    foreach($a2 as $val)
    {
        echo $val . "<br>";
    }

    $merged = array_merge($a1, $a2);
    echo