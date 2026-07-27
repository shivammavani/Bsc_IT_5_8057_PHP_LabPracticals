<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Calculator</h2>
    <form method="post">
                
        <label for="">No 1 :</label> <br>
        <input type="text" name="num1"> <br> <br>
                      
        <label for="">No 2 :</label> <br>
        <input type="text" name="num2"> <br> <br>
        
        <label for="">Select Operater :</label>
        <select name="operation"> <br>
            <option value="+">Add(+)</option>
            <option value="-">Sub(-)</option>
            <option value="*">Mul(*)</option>
            <option value="/">Div(/)</option>
        </select> <br> <br>
                
        <input type="submit" name="submit" value="Calculate"> <br>
    </form>
    <?php
        function calculate($num1,$num2,$op) {
            switch($op){
                case '+':
                    return $num1+$num2;

                case '-':
                    return $num1-$num2;

                case '*':
                    return $num1*$num2;

                case '/':
                        return $num2 !=0 ? $num1/$num2 : "cannot divide by Zero";
                default:
                    return "Invalid operator";
            }
        }
        if(isset($_POST['submit'])){
            $num1=$_POST['num1'];
            $num2=$_POST['num2'];
            $op=$_POST['operation'];

            $Result = calculate($num1,$num2,$op);
            echo "<h3>Result: $Result </h3>";
        }
    ?>
</body>
</html>