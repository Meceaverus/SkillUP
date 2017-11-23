<?php
session_start();
if(!empty($_SESSION['email']))
    $email = $_SESSION['email'];
else
    $email='';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Почта</title>
</head>
<body>
    Форма
<form method="post">

    <label>
        First Name
        <input type="name" name="name" placeholder="First Name">
    </label>
    <label>
        Last Name
        <input type="name" name="name" placeholder="Last Name">
    </label>
    <label>
        Password
        <input type="password" name="password">
    </label>

    <label>
        E-mail
        <input type="email" name="email" value="<?php echo $email ?>">
    </label>

    <button type="submit">Login</button>
</form>
</body>
</html>