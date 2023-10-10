<?php

namespace src;
use PDO;

class Connection
{
    public static function getDB()
    {
        // Configure os parâmetros de conexão com o BD
        $host = "";
        $dbname = '';
        $username = '';
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