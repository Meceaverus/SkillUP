<?php

include 'worker.php';
$pdo = new PDO('mysql:host=localhost;dbname=skillup;charset=utf8','root','');

//* 23. Поставьте Васе зарплату в 200$

echo '<b><i>Задача 23:</i></b>' .'<p>' ;
$sql='UPDATE workers SET salary=200 WHERE name="Кирилл"';
$upd=$pdo->exec($sql);
$sql='SELECT * FROM workers WHERE name="Кирилл"  ';
$result=$pdo->query($sql);

while ($row=$result->fetch(PDO::FETCH_ASSOC)){
    foreach ($row as $key=>$value){
        echo $key .'-' .$value .' | ';
    }
    echo '<p>';
}

//* 24. Работнику с id=4 поставьте возраст 35 лет. Показать решение

echo '<b><i>Задача 24:</i></b>' .'<p>' ;
$sql='UPDATE workers SET age=35 WHERE id=2';
$upd=$pdo->exec($sql);
$sql='SELECT * FROM workers WHERE id=2  ';
$result=$pdo->query($sql);

while ($row=$result->fetch(PDO::FETCH_ASSOC)){
    foreach ($row as $key=>$value){
        echo $key .'-' .$value .' | ';
    }
    echo '<p>';
}

//* 25. Всем, у кого зарплата 500$ сделайте ее 700$

echo '<b><i>Задача 25:</i></b>' .'<p>' ;
$sql='UPDATE workers SET salary=700 WHERE salary=500';
$upd=$pdo->exec($sql);
$sql='SELECT * FROM workers WHERE salary=700  ';
$result=$pdo->query($sql);

while ($row=$result->fetch(PDO::FETCH_ASSOC)){
    foreach ($row as $key=>$value){
        echo $key .'-' .$value .' | ';
    }
    echo '<p>';
}

//* 26.Работникам с id больше 2 и меньше 5 включительно поставьте возраст 23

echo '<b><i>Задача 26:</i></b>' .'<p>' ;
$sql='UPDATE workers SET age=23 WHERE id>=2 AND id<=5';
$upd=$pdo->exec($sql);
$sql='SELECT * FROM workers WHERE id=id  ';
$result=$pdo->query($sql);

while ($row=$result->fetch(PDO::FETCH_ASSOC)){
    foreach ($row as $key=>$value){
        echo $key .'-' .$value .' | ';
    }
    echo '<p>';
}

//* 27. Поменяйте Васю на Женю и прибавьте ему зарплату до 900$

echo '<b><i>Задача 27:</i></b>' .'<p>' ;
$sql='UPDATE workers SET name="Женя" WHERE name="Кирилл"';
$upd=$pdo->exec($sql);
$sql='SELECT * FROM workers WHERE id=id  ';
$result=$pdo->query($sql);
while ($row=$result->fetch(PDO::FETCH_ASSOC)){
    foreach ($row as $key=>$value){
        echo $key .'-' .$value .' | ';
    }
    echo '<p>';
}