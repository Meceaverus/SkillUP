<?php
$a = [];
$a[1] = 'html';
$a[2] = 'css';
$a[3] = 'php';
$a[4] = 'js';
$a[5] = 'jq';
foreach ($a as $value) {
    echo $value . PHP_EOL;
}
$a = [10, 20, 15, 17, 24, 35];
$result = 0;
foreach ($a as $elem) {
    $result += $elem;
}
echo $result . PHP_EOL;
$w = 1;
while ($w <= 100) {
    echo $w;
    $w++;
}
echo PHP_EOL;
$s = 1;
for ($s = 1; $s <= 100; $s++) {
    echo $s;
}
echo PHP_EOL;
$a = [1, 2, 3, 4, 5];
$result = 0;
foreach ($a as $elem) {
    $result += $elem;
}
echo $result . PHP_EOL;
$a = [1, 2, 3, 4, 5];
$result = 0;
foreach ($a as $elem) {
    $result += $elem*$elem;
}
echo $result . PHP_EOL;
$arr = ['green'=>'зеленый', 'red'=>'красный','blue'=>'голубой'];
foreach ($arr as $key => $value) {
    echo $key . '-' .$value . PHP_EOL;
}
$arr = ['Kolya' => '2000','Vasya' => '3000', 'Petya' => '4000' ];
foreach ($arr as $key => $value) {
    echo $key . ' - зарплата ' .$value.' долларов.'. PHP_EOL;
}
$w = 1;
while ($w <= 10) {
    echo $w . PHP_EOL;
    $w++;
}
$s = 1;
for ($s = 1; $s <= 9; $s++) {
    echo $s . PHP_EOL;
}
$r = 11;
while ($r <= 33) {
    echo $r . PHP_EOL;
    $r++;
}
$t = 0;
while ($t <= 10) {
    echo $t . PHP_EOL;
    $t += 2;
}
$u = 1;
$sum = 0;
while ($u <= 100) {
    $sum += $u;
    $u++;
}
echo $sum . PHP_EOL;
$a = [2, 5, 9, 15, 0, 4];
foreach ($a as $elem) {
    if ($elem >= 3 && $elem <= 10) {
        echo $elem . PHP_EOL;
    }
}
$a = [-2, 5, 9, -15, 0, 4];
$sum = 0;
foreach ($a as $elem)
    if ($elem > 0) {
        $sum += $elem;
    }
echo $sum . PHP_EOL;
$a = [1, 2, 5, 9, 4, 13, 4, 10];
foreach ($a as $elem) {
    if ($elem == 4) ;
    {
        echo 'have';
        break;
    }
}
$a = ['10', '20', '30', '50', '235', '3000'];
foreach ($a as $elem) {
    if ($elem[0] == '1' or $elem[0] == '2' or $elem[0] == '5')
    {
        echo $elem . PHP_EOL;
    }
}
$a = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$str = '';
foreach ($a as $elem) {
    $str .= '-'.$elem;
}
echo $str.'-' . PHP_EOL;
$w = ['пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'];
foreach ($w as $key => $elem) {
    if ($key == 5 || $key == 6) {
        echo '<b>' .$elem. '</b>'. PHP_EOL;
    }
    else {
        echo $elem . PHP_EOL;
    }
}
$d = ['пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'];
$day = 5;
foreach ($d as $key => $elem) {
    if ($key == $day) {
        echo '<i>' .$elem. '</i>'. PHP_EOL;
    }
    else {
        echo $elem . PHP_EOL;
    }
}
$a = [];
for ($i = 1; $i <= 100; $i++) {
    $a [] = $i;
}
var_dump($a);
$arr = ['green'=>'зеленый', 'red'=>'красный', 'blue'=>'голубой'];
foreach ($arr as $key=>$elem) {
    $en[] = $key;
    $ru[] = $elem;
}
var_dump($en);
var_dump($ru);
$num  = 1000;
$result = 0;
while ($num > 50) {
    $num /= 2;
    $result++;
}
echo $result . PHP_EOL;
echo $num . PHP_EOL;
$num  = 1000;
$result = 0;
for ($num = 1000, $result = 0; $num > 50; $num /= 2, $result++);
echo $result . PHP_EOL;
echo $num . PHP_EOL;