<?php
include 'connect.php';
$sql = "SELECT * FROM tblstu;";
$x = $con->query($sql);

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select</title>
</head>
<body>
    <table border=2 style="background-color:grey;">
        <tr>
            <th>Roll</th>
            <th>Name</th>
            <th>Father name</th>
            <th>Mother name</th>
            <th>Phn no</th>
        </tr>
        <?php
        while($row=$x->fetch_assoc()) 
        {
        ?>
            <tr>
                <td><?php echo $row['roll']?></td>
                <td><?php echo $row['name']?></td>
                <td><?php echo $row['fathername']?></td>
                <td><?php echo $row['mothername']?></td>
                <td><?php echo $row['Phno']?></td>
        <?php
        }
        ?>
    </table>
</body>
</html>