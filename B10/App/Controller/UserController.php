<?php
namespace App\Controller;
use App\Models\User;

class UserController{
    public $model;
    public function __construct(){
        $this->model=new User();
    }
    public function listUser(){
     
        $listUser= $this->model->getList();
        
        require_once('App/views/users/list.php');
    }
    public function addUser(){
        require_once('App/views/users/add.php');
    }
    public function addPostUser($name,$age,$address,$img){
        $linkImg=null;
        if ($img['name']!="") {
            $photo=time()."_". $img['name'];
            move_uploaded_file($img['tmp_name'],"App/Uploads/users/$photo");
            $linkImg="App/uploads/users/$photo";
        }
        $this->model->addPostUser($name,$age,$address,$linkImg);

    }
    public function deleteUser($id){
        $this->model->deleteUserModel($id);
        

    }
    public function detailUsers($id){
        $detailUser=$this->model->detailUserModel($id);
        require_once('App/views/users/edit.php');
    }
    public function editUser($name,$age,$address,$img,$id){

        $user=$this->model->detailUserModel($id);
        $linkImg=$user->img;
       

        if ($img['name']!="") {
            unset($user->img);
            $photo=time()."_". $img['name'];
            move_uploaded_file($img['tmp_name'],"App/Uploads/users/$photo");
            $linkImg="App/uploads/users/$photo";
        }
       $this->model->editUserModel($name,$age,$address,$linkImg,$id);
    }
}