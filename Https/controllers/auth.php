<?php

use Core\Authenticator;

$username = $_POST['username'] ?? "guest";

$slug = Authenticator::string($username);
if (!$slug) {
    redirect('/');
}

$_SESSION['user'] = $username;

var_dump($slug);
redirect('/chats');
