<?php
if (!empty($_REQUEST['hide'])) {
    setcookie('show', 'hide', time()+3600*24*30);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
</head>
<body>
<?php if (!isset($_COOKIE['show']))
    echo '<img src="http://i.online-torg.club/site_upload/Games/WOT/5f05377a4c1b870c562cc2fc8ad44e11.jpg">';?>
<form action="" method="POST">
    <input type="submit" name="hide" value="Больше не показывать!">
</form>

</body>
</html>