<?php
namespace App\Models;
use App\Commom\Database;

class Category{
    public $db;
    public function __construct(){
        $this->db =new Database();
    }
    public function getListCategory(){
        $sql="SELECT * FROM `category`";
        $query=$this->db->pdo->query($sql);
        $result=$query->fetchAll();
        return $result;

    }
}