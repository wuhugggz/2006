<?php
    $host ='127.0.0.1';
    $user = 'root';
    $pass= 'rootroot';
    $db ='2004';
    $port ='3306';
    $mysqli = new mysqli($host,$user,$pass,$db,$port);
    $sql = "select * from p_goods where goods_id=223";
    $res = $mysqli->query($sql);
    $data = $res->fetch_assoc();
    echo json_encode($data);
?>