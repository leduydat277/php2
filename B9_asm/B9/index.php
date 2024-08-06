<?php
require_once 'App/Common/env.php';
require_once 'vendor/autoload.php';

use App\Controllers\UserController;
use App\Controllers\ProductController;
use App\Controllers\CategoryController;

$act = isset($_GET['act']) ? $_GET['act'] : '/';
$controller = isset($_GET['controller']) ? $_GET['controller'] : 'user';

switch($controller) {
    case 'user':
        $userController = new UserController();
        switch($act){
            case '/': 
                $userController->listUsers();
                break;
            case 'adduser':
                $userController->addUser();
                break;
            case 'addpostuser':
                if(isset($_POST['btnSubmit'])){
                    $userController->addPostUser(
                        $_POST['nameUser'], $_POST['ageUser'], 
                        $_POST['addressUser'], $_FILES['imageUser']
                    );
                }
                break;
            case 'deleteuser':
                if(isset($_GET['iduser'])){
                    $userController->deleteUser($_GET['iduser']);
                }
                break;
            case 'updateuser':
                if(isset($_GET['iduser'])){
                    $userController->updateUser($_GET['iduser']);
                }
                break;
            case 'updatepostuser':
                if(isset($_POST['iduser']) && isset($_POST['btnSubmit'])){
                    $userController->updatePostUser(
                        $_POST['iduser'],
                        $_POST['nameUser'],
                        $_POST['ageUser'],
                        $_POST['addressUser'],
                        $_FILES['imageUser']
                    );
                }
                break;
        }
        break;
    
    case 'product':
        $productController = new ProductController();
        switch($act) {
            case '/':
                $productController->index();
                break;
            case 'create':
                $productController->create();
                break;
            case 'store':
                if(isset($_POST['name'])) {
                    $productController->store($_POST);
                }
                break;
            case 'edit':
                if(isset($_GET['id'])) {
                    $productController->edit($_GET['id']);
                }
                break;
            case 'update':
                if(isset($_GET['id']) && isset($_POST['name'])) {
                    $productController->update($_GET['id'], $_POST);
                }
                break;
            case 'delete':
                if(isset($_GET['id'])) {
                    $productController->delete($_GET['id']);
                }
                break;
        }
        break;

    case 'category':
        $categoryController = new CategoryController();
        switch($act) {
            case '/':
                $categoryController->index();
                break;
            case 'create':
                $categoryController->create();
                break;
            case 'store':
                if(isset($_POST['name'])) {
                    $categoryController->store($_POST);
                }
                break;
            case 'edit':
                if(isset($_GET['id'])) {
                    $categoryController->edit($_GET['id']);
                }
                break;
            case 'update':
                if(isset($_GET['id']) && isset($_POST['name'])) {
                    $categoryController->update($_GET['id'], $_POST);
                }
                break;
            case 'delete':
                if(isset($_GET['id'])) {
                    $categoryController->delete($_GET['id']);
                }
                break;
        }
        break;
}
?>
