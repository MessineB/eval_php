<?php

namespace App\Model;

use PDO;
use App\database\Database;

Class AddModel {

    public function __construct()
    {
        $database = new Database();
        $this->pdo = $database->getPDO();
    }
    function createpost($title , $content , $hashtag){
        $date = "2022-03-10";
        $status = "1";
        $sql = $this->pdo->prepare("INSERT INTO post (title,content,hashtag,date_ajout,status) VALUES ( :title , :content , :hashtag , :date_ajout , :status)") ; 
        $sql->bindParam(':title', $title);
        $sql->bindParam(':content', $content);
        $sql->bindParam(':hashtag', $hashtag);
        $sql->bindParam(':date_ajout', $date);
        $sql->bindParam(':status', $status);
        $sql->execute();
        }  
        
}