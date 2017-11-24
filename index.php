<?php
include 'Worker.php';

$pdo = new PDO('mysql:host=localhost;dbname=skillup;charset=utf8','root','');

$sql = 'SELECT * FROM workers WHERE salary = :salary';

$result = $pdo->prepare($sql);
$result->execute(['salary' => 500]);

while ($row = $result->fetchObject(Worker::class)) {
    var_dump($row);
}