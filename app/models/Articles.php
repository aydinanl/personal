<?php

class Articles
{
    public function __construct($db)
    {
        try {
            $this->db = $db;
        } catch (PDOException $e) {
            exit('Database connection could not be established.');
        }
    }

    public function getAllArticles(){
        $get = $this->db->query("SELECT * FROM article ORDER BY art_date DESC");
        return $get->fetchAll(PDO::FETCH_OBJ);
    }
    public function getAllArticlesByCatID($catID){
        $get = $this->db->query("SELECT * FROM article WHERE cat_id = $catID ORDER BY art_date DESC");
        return $get->fetchAll(PDO::FETCH_OBJ);
    }

    public function getArticleById($articleID){
        //Not completed.
        $get = $this->db->query("SELECT * FROM article WHERE art_id = $articleID");
        return $get->fetchAll(PDO::FETCH_OBJ);
    }
}