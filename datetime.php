<?php
error_reporting(E_ALL);
ini_set('display_errors', true);
$time = new DateTime('yesterday 14:00');
echo $time->format('d.m.Y H:i:s') . '<br>';
$newTime = $time->sub(new DateInterval('P3DT5M'));
echo $newTime->format('d.m.Y H:i:s') . '<br>';
$birthDate = new DateTime('1980-02-14 16:00:00');
$age = $birthDate->diff(new DateTime());
echo $age->format('%y лет %m месяцев %d дней');