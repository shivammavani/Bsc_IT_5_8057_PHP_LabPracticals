<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $var = "12345";
        echo "<b>Orignal Value:</b>" .$var . "<br>";
        echo "<b>Orignal Data Type:</b>" .gettype($var) ."<br><br>";
        settype($var,"integer");

        echo "<b>After Type Casting:</b>" .$var ."<br>";
        echo "<b>New Data Type:<b>" .gettype($var) ."<br><br>";
        settype($var,"double");

        echo "<b>After Converting To Double:</b>" .$var ."<br>";
        echo "<b> Data Type:<b>" .gettype($var) ."<br><br>";
        settype($var,"boolean");

        echo "<b>After Converting To Boolean:</b>";
        var_dump($var);
        echo"<br><b>Date Type:</b>" .gettype($var);
    ?>
</body>
</html>