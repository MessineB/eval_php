<?php

namespace App\Model;

use PDO;
use App\database\Database;

Class ModifModel {
    public function __construct()
    {
        $database = new Database();
        $this->pdo = $database->getPDO();
    }
    public function modifpost($id) {

        $sql = 'UPDATE post
        SET status = 0
        WHERE id = '.$id.';
';
$pdoStatement = $this->pdo->query($sql);
    }
    
}