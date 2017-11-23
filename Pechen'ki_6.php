<?php

    header('Content-Type: text/html; charset=UTF-8');
    setcookie('visit',0);

    if (isset($_COOKIE['visit'])) {
    setcookie('visit',$_COOKIE['visit']+1);
}
    echo 'Вы посещали наш сайт '.$_COOKIE['visit'].' раз!';

?>