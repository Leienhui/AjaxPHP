<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $a=$_POST['a'];
    $b=$_POST['b'];
    $sum=$a+$b;
    ?>

    <h1>
    结果是
    <?php
    echo $sum;
    ?>
    </h1>
    <!-- post请求的参数是放在http请求体中 -->
</body>
</html>