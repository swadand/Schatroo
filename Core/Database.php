<?php 

namespace Core;
use Core\Exceptions\ConnectionError;
use PDO;

class Database {

    private $conn;

    public function __construct(array $config)
    {   
        extract($config);
        $this->conn = new PDO('pgsql:host=localhost user=postgres dbname=schatroo');

        if(! $this->conn) {
            throw new ConnectionError("Connection failed.\n");
        }
    }

    public function query(string $query, array $atrributes)
    {
        $result = $this->conn->prepare($query)->execute($atrributes);
            if(! $result) {
            throw new ConnectionError("Query Failed.\n");
        }

        return $result;
    }
}
