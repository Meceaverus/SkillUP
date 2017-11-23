<?php
include 'init.php';
$error = '';
if (isset($_POST['username'])) {
    if ($_POST['username'] == 'user' && $_POST['password'] == 'pass') {
        $_SESSION['user'] = $_POST['username'];
        header('Location: index.php');
        exit();
    }
    else {
        $error = 'Неверное имя пользователя или пароль';
        unset($_SESSION['user']);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        label {
            display: block;
        }
    </style>
</head>
<body>
Вход
<?= $error ?>
<form method="post">
    <label>
        Username
        <input name="username">
    </label>
    <label>
        Password
        <input type="password" name="password">
    </label>
    <button type="submit">Login</button>
</form>

</body>
</html>