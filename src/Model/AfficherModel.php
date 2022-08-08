<?php

namespace App\Model;

use PDO;
use App\database\Database;

Class AfficherModel {
    public function __construct()
    {
        $database = new Database();
        $this->pdo = $database->getPDO();
    }
    public function affichepost($id) {

        $sql = 'UPDATE post
        SET status = 1
        WHERE id = '.$id.';
';
$pdoStatement = $this->pdo->query($sql);
    }
    
}