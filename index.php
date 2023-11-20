<?php

use Core\Router;

session_start();

require __DIR__ . "/vendor/autoload.php";

require "utilities.php";
//var_dump("reached Route");

$router = new Router;
require "routes.php";
$path = $_SERVER['REQUEST_URI'];

$router->route($path);
