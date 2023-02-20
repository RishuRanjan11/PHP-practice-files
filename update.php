<?php
include 'connect.php';
$sql = "UPDATE tblstu SET Phno=6543219875 WHERE roll=1;";
$x = $con->query($sql); 
?>