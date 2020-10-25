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
        $id=$_GET['id'];

    $sql = "DELETE FROM news WHERE id=$id";
        $result = mysql_query($sql);
        if(!$result){
             echo "删除失败</br>";
        }
        else{
            
        }
?>
</head>
<body>
</body>
</html>