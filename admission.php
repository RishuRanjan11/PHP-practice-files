<?php
 include 'connect3.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission Form</title>
</head>
<body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <div class="container" style="border-bottom:dashed; border-color:green;">
        <h3 style="text-align: center; border-bottom: dashed; border-color:green;">Enquiry Form</h3><br><br><br><br>
    <form method="post">
    <input type="text" name="name" placeholder="Enter Your Name" class="form-control">    <br>
    <input type="email" name="email" placeholder="Enter Your Email" class="form-control">  <br>
    <input type="number" name="contact" placeholder="Enter Your Contact" class="form-control">  <br>
    <select name="courses" class="form-control">
        <option value="C">C</option>
        <option value="C++">C++</option>
        <option value="Java">Java</option>
        <option value="Python">Python</option>
    </select> <br>
    <textarea name="Message" id="" cols="8" rows="5" class="form-control" placeholder="Message"></textarea><br>
    <input type="submit" value="Enquiry" name="Enquirybtn" class="btn-primary form-control">
    </form><br><br>
    </div>
</body>
</html>


<?php
if(isset($_POST['Enquirybtn']))
{
    $n = $_POST['name'];
    $e = $_POST['email'];
    $p = $_POST['contact'];
    $c = $_POST['courses'];
    $m = $_POST['Message'];
    $sql= "INSERT INTO tbladd (Name,Email,Contact,course,message) VALUES('$n', '$e', '$p', '$c','$m');";
    $con->query($sql);
}

include 'display.php';
?>