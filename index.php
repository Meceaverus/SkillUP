<?php
include 'init.php';
setcookie('user', '', time() - 3 * 3600);
?>
<a href="readcookie.php">Узнать значение cookie</a>
<a href="logout.php">Выйти</a>