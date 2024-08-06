<?php
    namespace App\Controllers;
    use App\Models\User;

    
    class UserController{
        public $userModel;
        public function __construct()
        {
            $this->userModel = new User();
        }

        public function listUsers(){
            $listUser =  $this->userModel->getList();
            require_once('App/Views/users/list-users.php'); 
        }

        public function addUser(){
            require_once('App/Views/users/add-users.php'); 
        }

        public function addPostUser($nameUser, $ageUser, $addressUser, $imageUser){
            $linkImage = null;
            if($imageUser['name'] != ""){
                $photo = time() . "_" . $imageUser['name']; // Đổi tên ảnh
                move_uploaded_file($imageUser['tmp_name'], "App/Uploads/users/$photo");
                $linkImage = "App/Uploads/users/$photo";
            }


            $this->userModel->addUserModel($nameUser, $ageUser, $addressUser, $linkImage);
            header('location: ' . BASE_URL); 
        }

        public function deleteUser($iduser){
            $this->userModel->deleteUserModel($iduser);
            header('location: ' . BASE_URL); 
        }


        public function updateUser($iduser){
            $user = $this->userModel->detailUser($iduser);
            require_once "App/Views/users/update-users.php";
        }

        public function updatePostUser($iduser, $nameUser, $ageUser, $addressUser, $imageUser){
            $user = $this->userModel->detailUser($iduser);
            $linkImage = $user->image;
            
            if($imageUser['name'] != ""){
                unlink($user->image); // Xóa ảnh cũ
                $photo = time() . "_" . $imageUser['name']; // Đổi tên ảnh
                move_uploaded_file($imageUser['tmp_name'], "App/Uploads/users/$photo");
                $linkImage = "App/Uploads/users/$photo";
            }


            $this->userModel->updateUserModel($iduser, $nameUser, $ageUser, $addressUser, $linkImage);
            header('location: ' . BASE_URL); 
        }
    }