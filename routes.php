<?php

use Core\Route;

//var_dump("reached route");
$uri = $_SERVER['REQUEST_URI'];

require Route::get($uri);
