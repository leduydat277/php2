<?php 
namespace App\Models;
use App\Common\Database;
class User{
    public $db;
    public function __construct(){
        $this->db = new Database();
    }
    public function getList() {
        $db = new Database();
        $sql = $sql = "SELECT * FROM users";
        $query = $db->pdo->query($sql);
        $result = $query->fetchAll();
        return $result;
    }
    public function adduserModel($nameUser,$ageUser,$addressUser){
    $db = new Database();
    $sql = "insert into user (name,age,address) values
    ('$nameUser','$ageUser','$addressUser')";
    $this->db->pdo->query($sql);
    }
    public function deleteUserModel($iduser){
        $sql = "delete form users where id = '$iduser' ";
    }
}
?>