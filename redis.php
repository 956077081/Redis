<?php

//通过php使用redis

//在php里边，redis就是一个类，通过实例化对象，对象调用成员就可以使用redis
$redis = new Redis();

//连接redis服务
$redis -> connect('192.168.30.22','6379');

$redis -> select(3);

//给redis设置key
//redis中的许多指令就是php中对象调用的成员，参数与redis指令的参数一致
$redis -> set('flower','rose');


//调用方法有多个参数情况（key-value格式）
//$redis -> mset('addr1','beijing','addr2','tianjin','addr3','shanghai');
$redis -> mset(array('addr1'=>'beijing','addr2'=>'tianjin','addr3'=>'shanghai'));

//调用方法有多个参数(v,v,v,v,v)
$result = $redis -> mget(array('addr1','addr2','addr3'));
var_dump($result);

echo "success";
