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
        // 设置中字符集
        mysql_query('SET NAMES UTF8');
        // 查询数据库里面的所有数据
        // 接收数据地址栏上的id
        $results = mysql_query("SELECT * FROM news");
        // 创建数组
        $arr=array();
        // 遍历数据库查询的结果，将查询结构push到数组中
        while($row=mysql_fetch_array($results)){
            array_push($arr,$row);
        }

        // 用json的形式显示在页面上
        echo json_encode($arr);
?>