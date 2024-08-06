<?php
namespace App\Models;
use App\Commom\Database;

class Product{
    public $db;
    public function __construct(){
        $this->db =new Database();
    }
    public function getListProducts(){
        $sql="SELECT * FROM `product`";
        $query=$this->db->pdo->query($sql);
        $result=$query->fetchAll();
        return $result;

    }
    public function addPostProductsModels($name,$price,$view,$linkImg,$id_loai){
        $sql="INSERT INTO `product`( `name`, `price`, `view`, `img`, `category_id`) VALUES ('$name','$price','$view','$linkImg','$id_loai')";
        $query=$this->db->pdo->query($sql);
    }
    public function deleteProductModels($id){
        $sql="DELETE FROM `product` WHERE id=".$id;
        $query=$this->db->pdo->query($sql);
    }
    public function getListProduct($id){
        $sql="SELECT * FROM `product` WHERE id=".$id;
        $query=$this->db->pdo->query($sql);
        $result=$query->fetch();
        return $result;

    }
    public function editUserModel($name,$price,$view,$linkImg,$id_loai,$id){
        $sql="UPDATE `product` SET `name`='$name',`price`='$price',`view`='$view',`img`='$linkImg',`category_id`='$id_loai' WHERE id=".$id;
        $query=$this->db->pdo->query($sql);
    }
    public function loadtenloai($id){
        $sql="SELECT `name` FROM `category` WHERE id=".$id;
        $query=$this->db->pdo->query($sql);
        $result=$query->fetch();
        return $result;
    }

}