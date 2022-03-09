<?php

namespace App\Model;

use PDO;
use App\database\Database;

class PostModel{

    protected $id;
    protected $date_ajout;
    protected $title;
    protected $content;
    protected $number_response;
    protected $status;
    protected $pdo;

    const TABLE_NAME = 'post';

    public function __construct()
    {
        $database = new Database();
        $this->pdo = $database->getPDO();
    }

    public function findPosts()
    {
        $sql = 'SELECT
                `id`
                ,`date_ajout`
                ,`title`
                ,`content`
                ,`hashtag`
                ,`status`
                FROM ' . self::TABLE_NAME . '
                ORDER BY `id` ASC;
        ';
        $pdoStatement = $this->pdo->query($sql);
        $result = $pdoStatement->fetchAll(PDO::FETCH_CLASS, self::class);
        return $result;
    }

    public function findPost($id) {
        $sql = 'SELECT * FROM ' . self::TABLE_NAME . ' WHERE id = '.$id;
        $pdoStatement = $this->pdo->query($sql);
        $result = $pdoStatement->fetchObject(self::class);
        return $result;
    }

    public function createPost($title , $content , $hashtag ) {
        $sql = "INSERT INTO post (title,content,hashtag) VALUES ( '$title','$content','$hashtag')" ;
        $pdoStatement = $this->pdo->query($sql);
        $result = $pdoStatement->fetchObject(self::class);
        return $result;
        
    }

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
     * Get the value of name
     */ 
    public function getDate_ajout()
    {
        return $this->date_ajout;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 

    public function setDate_ajout(String $date_ajout)
    {
        $this->date_ajout = $date_ajout;

        return $this;
    }
      /**
     * Get the value of name
     */ 
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setTitle(int $title)
    {
        $this->title = $title;

        return $this;
    }

    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setContent(int $content)
    {
        $this->content = $content;

        return $this;
    }
    public function getHashtag()
    {
        return $this->hashtag;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setHashtag(int $hashtag)
    {
        $this->hashtag = $hashtag;

        return $this;
    }
    public function getNumber_response()
    {
        return $this->number_response;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setNumber_response(int $number_response)
    {
        $this->number_response = $number_response;

        return $this;
    }
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setStatus(int $status)
    {
        $this->status = $status;

        return $this;
    }

}
