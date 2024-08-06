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
        
        $listUser = $this->userModel->getList();
        require_once('App/Views/User/List-user.php');
    }
    public function addUser(){
       require_once('App/Views/User/add-user.php');  
    }
   public function addPostuser($nameUser,$ageUser,$addressUser)
   {
    $this->userModel->adduserModel($nameUser,$ageUser,$addressUser);
    header('location:' . BASE_URL);
   }
   public function deleteUser($iduser){
    $this->userModel->deleteUserModel($iduser);
    header('location' .BASE_URL);
   }
}
?>