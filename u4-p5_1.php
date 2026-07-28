<?php
        $conn = new mysqli("localhost:3307","root","","studentdb");
        if($conn->connect_error)
        {
            dia("Connnection failed");
        }
        $sql = "SELECT * FROM students2";
        $result = $conn->query($sql);
        ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> 
    <table border="1px solid black">
        <thead>
            <th>id</th>
            <th>name</th>
            <th>email</th>
            <th>city</th>
        </thead>
        <tbody>
        <?php
            while($row = mysqli_fetch_assoc($result))
            {
                ?>
                <tr>
                <td><?php echo  $row['id']."<br>"?> </td>
                <td><?php echo  $row['name']."<br>"?> </td>
                <td><?php echo  $row['email']."<br>"?> </td>
                <td><?php echo  $row['city']."<br>"?> </td>
                </tr>
                <?php
            }
    ?>
    </tbody>
    </table>
</body>
</html>