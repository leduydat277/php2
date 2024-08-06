<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<?php
use App\Controller\CategoryController;
use App\Controller\ProductController;
require_once("App/Commom/env.php");
require_once('vendor/autoload.php');
// require_once('App/commom/DataBase.php');
// require_once('App/models/User.php');
// require_once('App/controllers/UserController.php');
use App\Controller\UserController;


$user=new UserController();
$product=new ProductController();
$category=new CategoryController();
$act= isset($_GET['act'])? $_GET['act'] :'/';
switch ($act) {
    case '/':
        
        $user->listUser();
        break;
    case 'addUser':
        $user->addUser();
        
        break;
    case 'addPostUser':
        if(isset($_POST['btnSubmit'])){
          
            $user->addPostUser($_POST['username'],$_POST['age'],$_POST['address'],$_FILES['img']);
            header('Location: '.BASE_URL);
        }
        break;
    case 'deleteUser':
        $user->deleteUser($_GET['id']);
        header('Location: '.BASE_URL);
        break;
    case 'detailUser':
        $user->detailUsers($_GET['id']);
        break;
    case 'editUser':
        if(isset($_POST['btnSubmit'])){
        $user->editUser($_POST['username'],$_POST['age'],$_POST['address'],$_FILES['img'],$_POST['id']);
        header('Location: '.BASE_URL);
        }
        break;
    //sanpham
 
    case 'listProduct':
       
        $product->loadAllProduct();
        break;
    case 'addProduct':
        $listCategory= $category->loadAllCategory();
        $product->addProduct();
        break;
    case 'addPostProduct':
        if(isset($_POST['btnSubmit'])){
            $product->addPostProducts($_POST['name'],$_POST['price'],$_POST['view'],$_FILES['img'],$_POST['category_id']);
            header('Location: '.BASE_URL.'?act=listProduct');
        }
        break;
    case 'deleteProduct':
        $product->deleteProducts($_GET['id']);
        header('Location: '.BASE_URL.'?act=listProduct');
        break;
    case 'detailProduct':

        $product->detailProduct($_GET['id']);
    break;
    case 'editProduct':
        if(isset($_POST['btnSubmit'])){
            $product->editProduct($_POST['name'],$_POST['price'],$_POST['view'],$_FILES['img'],$_POST['category_id'],$_POST['id']);
           
            header('Location: '.BASE_URL.'?act=listProduct');
        }
      
        break;
}
?>