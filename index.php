<?php
include 'lib.php';
$user = [
    'email' => '',
];
$errors =[];
if ($_SERVER ['REQUEST_METHOD'] == 'POST') {
    $user = processRequest($user);
    $errors = validateUser($user);
    if (!$errors) {
        saveUser($user);
        header('Location: /success2.html');
        exit();
    }
}
include 'form.php';