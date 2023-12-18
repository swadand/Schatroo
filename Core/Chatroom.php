<?php

namespace Core;
use Core\Database;

class Chatroom {

    public static array $rooms;
    
    public static function create($creds, $name) 
    {
        //create chatroom
        (new Database($creds))->query("insert into chatroom(name) values(?)", [$name]);
    }

    public function fetchall($creds) {
        $data = (new Database($creds))->query("select * from croom", []);
        $rooms[] = $data;
    }
}
