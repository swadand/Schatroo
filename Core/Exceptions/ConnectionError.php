<?php

namespace Core\Exceptions;

class ConnectionError extends \Exception {
    public function __construct($message, $previous=null)
    {
        parent::__construct($message, $previous);
    }
}

