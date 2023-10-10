<?php

namespace src;
use PDO;

class Connection
{
    public static function getDB()
    {
        $host = "localhost";
        $dbname = 'buffDB';
        $username = 'root';
        $password = '';
        
        try
        {
            $conn = new PDO(
                "mysql:host=$host;dbname=$dbname;",
                $username, 
                $password
            );
            return $conn;
        }
        catch(\PDOException $ex)
        {
            die("Erro de Conexão: " . $ex->getMessage());
        }
        // finally
        // {

        // }
    }
}

?>