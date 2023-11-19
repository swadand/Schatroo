<?php

namespace Core;

class Route {
    public static array $routes = [
        "/" => 'index.php',
        "/chats" => "chats.php"
    ];

    public static function get(string $uri)
    {
        $path = static::$routes[ $uri ] ?? 0;
        if(! $path){
            abort();
        }
        //var_dump($path);
        require controller_path($path);
    }
}