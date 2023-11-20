<?php

//var_dump("reached route");
$router->get('/', 'index.php');
$router->get('/chats', 'chats.php');

$router->get('/404', 'error_page.php');
