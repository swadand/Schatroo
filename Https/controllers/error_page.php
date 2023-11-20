<?php


$code = $_SERVER['REQUEST_URI'];

require view($code);
exit();
