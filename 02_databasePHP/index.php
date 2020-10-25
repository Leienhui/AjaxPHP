<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- php链接数据库 -->
    <?php
        $servername = "localhost";
        $username = "root";
        $password = '123456';
        
        // 创建连接
        $conn = mysql_connect($servername, $username, $password);

        if (!$conn) {
            echo "链接失败";
            return;
        }
        // 选择数据库
        $res = mysql_select_db('newdb',$conn);

        var_dump($res);

        
        // 设置中字符集
        mysql_query('SET NAMES UTF8');
        // 查询数据库里面的所有数据

    $results = mysql_query("SELECT * FROM news");


?>
</head>
<body>
<h1>我的新闻</h1>
<a href="tianjia.php">添加新闻</a>
    <ul>
    <!-- 遍历数据库中的每条数据 -->
    <?php
        while($i =mysql_fetch_array($results)){
    ?>
    <li>
    <?php
    // 将数据库查询的id给href一起带到kan.php这个地址上
    echo "<a href='kan.php?id={$i['id']}'>{$i['biaoti']}</a>_____[<a href='delete.php?id={$i['id']}'>删除</a>]";
    // echo "<p>{$i['neirong']}</p>";
    // echo "<p>{$i['riqi']}</p>";
    // echo "<p>{$i['zuozhe']}</p>";
    ?>
    </li>
    <?php
        }
    ?>
    </ul>
</body>
</html>