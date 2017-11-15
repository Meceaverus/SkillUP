<?php

$arr=[4,89,31,45];
$result=array_sum($arr)/count($arr);
var_dump($result); //#1

$arr=range(1, 100);
$result = array_sum($arr);
var_dump($result); //#2

$arr = range(1,100);
$str = implode('<br>', $arr);
print_r($str); //#3
