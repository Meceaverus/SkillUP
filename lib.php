<?php
define('USERS_FILE', __DIR__ . '/subscribers.txt');
function processRequest(array $user) {
    foreach ($user as $field => $value) {
        $user[$field] = isset($_POST[$field]) ? $_POST[$field] : '';
    }
    return $user;
}
function validateUser(array $user) {
    $errors = [];
    if (!$user['email']) {
        $errors[] = 'Введите email!';
    }
    return$errors;
}
function saveUser(array $user) {
    $file = fopen(USERS_FILE, 'a');
    $user_info = implode("<br>", $user) . PHP_EOL;
    fputs($file, $user_info);
    fclose($file);
}