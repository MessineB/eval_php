<?php

namespace App\Model;

use PDO;
use App\database\Database;

Class AddCommentModel {

    public function __construct()
    {
        $database = new Database();
        $this->pdo = $database->getPDO();
    }
    function createcomment($message,$post_id){
        $date = "2022-03-10";
        $status = "1";
        $sql = $this->pdo->prepare("INSERT INTO responses (message,post_id,date_ajout,status) VALUES ( :message , :post_id , :date_ajout , :status)") ; 
        $sql->bindParam(':message', $message);
        $sql->bindParam(':post_id', $post_id);
        $sql->bindParam(':date_ajout', $date);
        $sql->bindParam(':status', $status);
        $sql->execute();
        }  
        
}