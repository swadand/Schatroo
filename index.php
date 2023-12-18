<?php

use Core\Database;
use Core\Exceptions\ConnectionError;
use Core\Router;

session_start();

require __DIR__ . "/vendor/autoload.php";

require "utilities.php";

$iniarray = parse_ini_file("config.ini");

try {
    $con = new Database($iniarray);
    $con->query("create table test(name int(2))", []);
} catch (ConnectionError $e){
    echo $e->getMessage();
}


$router = new Router;
require "routes.php";
$path = $_SERVER['REQUEST_URI'];

$router->route($path);
