<?php

namespace src\Models;
use PDO;
use GHOST\Model\Model;

class ProdutoModel extends Model
{

    public function getProdutos()
    {
        $sql = "SELECT * FROM tb_produtos";
        $stmt = $this->db->query($sql);
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $results;
        
    }
}

?>