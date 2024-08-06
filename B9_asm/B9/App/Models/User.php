<?php 
    namespace App\Models;
    use App\Common\Database;
    class User{
        public $db;
        public function __construct()
        {
            $this->db = new Database();
        }
        public function getList(){
            $sql = 'select * from users';
            $query =  $this->db->pdo->query($sql);
            $result = $query->fetchAll();
            return $result;
        }

        public function addUserModel($nameUser, $ageUser, $addressUser, $linkImage){
            $sql = "insert into users (name, age, address, image) values ('$nameUser', '$ageUser', '$addressUser', '$linkImage')";
            $this->db->pdo->query($sql);
        }

        public function deleteUserModel($iduser){
            $sql = "delete from users where id = '$iduser'";
            $this->db->pdo->query($sql);
        }


        public function detailUser($iduser){
            $sql = "select * from users where id=$iduser";
            $query = $this->db->pdo->query($sql);
            $result = $query->fetch();
            return $result;
        }

        public function updateUserModel($iduser, $nameUser, $ageUser, $addressUser, $linkImage){
            $sql = "update users SET name='$nameUser', age = '$ageUser', address='$addressUser', image='$linkImage' where id='$iduser'";
            $this->db->pdo->query($sql);
        }
    }