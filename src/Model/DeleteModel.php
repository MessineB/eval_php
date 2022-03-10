<?php

namespace App\Model;

use PDO;
use App\database\Database;

Class DeleteModel {
    public function __construct()
    {
        $database = new Database();
        $this->pdo = $database->getPDO();
    }
    public function deletepost($id) {

        $sql = 'DELETE
        FROM post
        WHERE id = '.$id.';
';
$pdoStatement = $this->pdo->query($sql);
    }
    
}