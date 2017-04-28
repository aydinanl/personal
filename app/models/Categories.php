<?php

class Categories
{
    public function __construct($db)
    {
        try {
            $this->db = $db;
        } catch (PDOException $e) {
            exit('Database connection could not be established.');
        }
    }

    public function getCat(){
        //$get = $this->db->query("SELECT * FROM categories");
        $sql = "SELECT * FROM categories";
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public function getCatById($videoid){
        //Not completed.
        $get = $this->db->query("SELECT * FROM categories WHERE ");
        return $get->fetchAll();
    }
}