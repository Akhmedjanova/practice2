<?php
declare(strict_types=1);
use MyApp\Logger\Logger;
use MyApp\User\Users;

require_once realpath("vendor/autoload.php");

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $user = new Users('users.txt');
    $result = $user->checkCredentials($username,$password);

    if ($result) {
        echo "Credentials are correct!";
    } else {
        echo 'Credentials are incorrect.';
    }

    $logger = new Logger($username);
    if ($user->checkCredentials($username, $password)) {
        $logger->success('Hello');
    } else {
        $logger->error('Goodbye');
    }
}

