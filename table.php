<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Зарегистрированные пользователи</title>
</head>
<body>
<table border="1" bgcolor="#00008b">
    <tr>
        <th>#</th>
        <th>Имя</th>
        <th>Фамилия</th>
        <th>E-mail</th>
        <th>Телефон</th>
    </tr>

    <?php
    $users = fopen("subscribers.txt", "r");
    $key = 1;
    while (!feof($users)) {
        $value = fgets($users, 999).'<br>';
        $user = explode("\t", $value);
        ?>

        <tr>
            <td><?=$key?></td>
            <td><?=$user[0]?></td>
            <td><?=$user[1]?></td>
            <td><?=$user[2]?></td>
            <td><?=$user[3]?></td>
        </tr>

        <?php
        $key++; }
    fclose($users);
    ?>

</body>
</html>