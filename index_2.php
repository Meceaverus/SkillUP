<?php


$arr=array_fill(1, 10, 'x');
var_dump($arr); //#4

$arr=range(1,10);
shuffle($arr);
var_dump($arr); //#5

$num = 4;
$arr=range(1,$num);
$result = array_product($arr);
var_dump($result); //#6

