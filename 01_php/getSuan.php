<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $a=$_GET['a'];
    $b=$_GET['b'];
    $sum=$a+$b;
    ?>

    <h1>
    结果是
    <?php
    echo $sum;
    ?>
    
    </h1>
</body>
</html>