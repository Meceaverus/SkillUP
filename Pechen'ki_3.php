<?php

setcookie($age, mt_rand(10, 70), time() + 3600); // час
setcookie($age, mt_rand(10, 70), time() + 3600*3); // 3 часа
setcookie($age, mt_rand(10, 70), time() + 3600*24); // 1 день
setcookie($age, mt_rand(10, 70), time() + 3600*24*30*365); // 1 год
setcookie($age, mt_rand(10, 70), time() + 3600*24*30*365*10); // 10 лет
setcookie('age', mt_rand(10,70), mktime(23,59,59,date('m'), date('d'), date('Y')));//до конца дня
setcookie('age', mt_rand(10,70), mktime(23,59,59,12,31,date('Y')));//до конца года

?>