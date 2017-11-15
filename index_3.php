<?php

$num="122214";
$arr=str_split($num, 1);
$result=array_sum($arr);
var_dump($result); //#7

$str='ngfjtdkd';
$elem=substr($str,-1);
$elem=strtoupper($elem);
$str=substr_replace($str, $elem, -1);
var_dump($str); //#8

$arr=[1, 4, 49, 64, 81];
$result=array_map('sqrt', $arr);
var_dump($result); //#9


$arr_values=range(1,26);
$arr_keys=range(a,z);
$result=array_combine($arr_keys, $arr_values);
var_dump($result); //#10

$str='1234567890';
$arr=str_split($str, 2);
$sum=array_sum($arr);
var_dump($sum); //#11