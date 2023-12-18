<?php 


namespace Core;

class Authenticator {
    
    public static function string(string $string)
    {
        $count = strlen($string); 
        return ($count < 8) && ($count > 0);
    }
}
