<?php
    define("DB_HOST", "localhost");
    define("DB_USER", "root");
    define("DB_PASS", "root123456");
    define("DB_NAME", "review_app");
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);             //新建连接
    if($conn->connect_error){                                           //检查连接是否成功
        die("数据库连接失败：" . $conn->connect_error);
    }
    //echo "数据库连接成功！";
?>