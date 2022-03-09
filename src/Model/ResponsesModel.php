<?php

namespace App\Model;

use PDO;
use App\database\Database;

class ResponsesModel{

    protected $id;
    protected $date_ajout;
    protected $post_id;
    protected $message;
    protected $status;
    protected $pdo;

    const TABLE_NAME = 'responses';

    public function __construct()
    {
        $database = new Database();
        $this->pdo = $database->getPDO();
    }

    public function findResponses()
    {
        $sql = 'SELECT
                `id`
                ,`date_ajout`
                ,`post_id`
                ,`message`
                ,`status`
                FROM ' . self::TABLE_NAME . '  
                ORDER BY `id` ASC;
        ';

        $pdoStatement = $this->pdo->query($sql);
        $result = $pdoStatement->fetchAll(PDO::FETCH_CLASS, self::class);
        return $result;
    }

    public function findResponse($id)
    {
        $sql = 'SELECT
                `id`
                ,`date_ajout`
                ,`post_id`
                ,`message`
                ,`status`
                FROM ' . self::TABLE_NAME . '  WHERE `id` = :id
                ORDER BY `id` ASC;
        ';

        $pdoStatement = $this->pdo->query($sql);
        $result = $pdoStatement->fetchObject(self::class);
        return $result;
    }

    public function findbyId($id) {
        $sql = 'SELECT * FROM `responses` WHERE `post_id` = '.$id .' ';
        $pdoStatement = $this->pdo->query($sql);
        $result = $pdoStatement->fetchAll(PDO::FETCH_CLASS,self::class);
        return $result;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of date_ajout
     */ 
    public function getDate_ajout()
    {
        return $this->date_ajout;
    }

    /**
     * Set the value of date_ajout
     *
     * @return  self
     */ 
    public function setDate_ajout($date_ajout)
    {
        $this->date_ajout = $date_ajout;

        return $this;
    }

    /**
     * Get the value of post_id
     */ 
    public function getPost_id()
    {
        return $this->post_id;
    }

    /**
     * Set the value of post_id
     *
     * @return  self
     */ 
    public function setPost_id($post_id)
    {
        $this->post_id = $post_id;

        return $this;
    }

    /**
     * Get the value of message
     */ 
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set the value of message
     *
     * @return  self
     */ 
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get the value of status
     */ 
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set the value of status
     *
     * @return  self
     */ 
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }
}