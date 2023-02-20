<?php
include 'connect.php';
$sql= "INSERT INTO tblstu (name,fathername,mothername,phno) VALUES('Kundan', 'Promod', 'Sikha', 9678974758)";
$x = $con->query($sql);

?>