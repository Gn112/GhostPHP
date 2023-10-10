<?php

namespace src\Models;
use PDO;
use GHOST\Model\Model;

class InfoModel extends Model
{

    public function getInfo()
    {
        $sql = "SELECT titulo, descricao FROM tb_info";
        $stmt = $this->db->query($sql);
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $results;
        
    }
}

?>