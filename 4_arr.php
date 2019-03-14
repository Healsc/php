<?php
/**
 * Created by PhpStorm.
 * User: sunchuang
 * Date: 2019/3/14
 * Time: 18:21
 */
    $arr = array(1,2,3,4,5,
        "name" => "lisi",//键值对数组
        "age" => 1
        );
    echo $arr['name'];//输出：lisi
    foreach($arr as $key){
        echo $key." | ";
        //输出：1 | 2 | 3 | 4 | 5 | lisi | 1 |
        //php 使用 “.”做连字符
    }