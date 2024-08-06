<?php 
// require_once 'App/Common/Database.php';
// require_once 'App/Models/User.php';
// require_once 'App/Controllers/Usercontroller.php';
require_once 'App/Common/env.php';
require_once 'vendor/autoload.php';

use App\Controllers\UserController;

$act = isset($_GET['act']) ? $_GET['act'] : '/';
$userController = new UserController();
 switch($act){
    case '/' : {
      
      $userController->listUsers();
      break;
    }
    //?act=adduser
    case 'adduser':{
      $userController->adduser();
      break;
    }
    // ?act=addpostuser
    case 'addPostuser': {
      if(isset($_POST['btnsumbit'])){
        $userController = new UserController();
        $userController->addPostuser(
          $_POST['nameUser'], $_POST['ageUser'],
          $_POST['addressUser']
        );
      }
     break;
    }
    case 'deleteuser':{
      if(isset($_GET['iduser'])){
        $userController->deleteUser($_GET['iduser']);
      }
    }
 }
?>