<?php

if(!empty($_REQUEST['email']))
{
    session_start();
    $_SESSION['email'] = $_REQUEST['email'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Почта</title>
</head>
<body>
    Введите EMail
<form method="post">

    <label>
        EMail
        <input type="email" name="email">
    </label>

    <button type="submit">Отправить</button>
</form>
</body>
</html>
