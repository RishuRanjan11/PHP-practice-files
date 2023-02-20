<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $a = 8;
    $b = 7;
    $c = 12;
    if($a>$b && $a>$c)
    {
        echo "Biggest number is A = " .$a;

    }
    else if($b>$c)
    {
        echo "Biggest number is B =  " .$b;
    } else
        echo "Biggest number is C = " .$c;
    ?>
</body>
</html>