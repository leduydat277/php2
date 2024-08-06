<?php

namespace App\Models;
use App\Commom\Database;
class User{
    public $db;
    public function __construct(){
        $this->db = new Database();
    }
    public function getList(){
    
        $sql="SELECT * FROM `user` ";
        $query = $this->db->pdo->query($sql);
        $result = $query->fetchAll();
        return $result;
    }
    public function addPostUser($name,$age,$address,$img){
        $sql= "INSERT INTO `user`(`username`, `age`, `ad`,`img`) VALUES ('$name','$age','$address','$img')";
        $query = $this->db->pdo->query($sql);
    }   
    public function deleteUserModel($id){
        $sql= "DELETE FROM `user` WHERE id=".$id;
        $query = $this->db->pdo->query($sql);
    }
    public function detailUserModel($id){
        $sql="SELECT * FROM `user` WHERE id=".$id;
        $query = $this->db->pdo->query($sql);
        $result = $query->fetch();
        return $result;
    }
    public function editUserModel($name,$age,$address,$img,$id){
        $sql= "UPDATE `user` SET `username`='$name',`age`='$age',`ad`='$address',`img`='$img' WHERE id=".$id;
        $query = $this->db->pdo->query($sql);
    }
}