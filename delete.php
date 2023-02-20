<?php
include 'connect.php';
$sql = "DELETE FROM tblstu WHERE roll=2;";
$x = $con->query($sql);
?>