<?php
namespace App\Controller;
use App\Models\Product;
use App\Controller\CategoryController;

class ProductController{
    public $category;
    public function __construct(){
        $this->category=new CategoryController();
         $this->model=new Product();
    }
    public $model;
  
    public function loadAllProduct(){
        $listProducts=$this->model->getListProducts();
        
        require_once 'App/views/products/list.php';
    }
    public function addProduct(){
        $listCategory= $this->category->loadAllCategory();
        require_once 'App/views/products/add.php';
    }
    public function addPostProducts($name,$price,$view,$img,$id_loai){
        $linkImg=null;
        if ($img['name']!="") {
            $photo=time()."_". $img['name'];
            move_uploaded_file($img['tmp_name'],"App/Uploads/products/$photo");
            $linkImg="App/uploads/products/$photo";
        }
        $this->model->addPostProductsModels($name,$price,$view,$linkImg,$id_loai);  

    }
    public function deleteProducts($id){
        $this->model->deleteProductModels($id);

    }
    public function detailProduct($id){
        $listCategory= $this->category->loadAllCategory();
        $detailProduct=$this->model->getListProduct($id);
        require_once 'App/views/products/edit.php';
    }
    public function editProduct($name,$price,$view,$img,$id_loai,$id){
        $product=$this->model->getListProduct($id);;
        $linkImg=$product->img;
       

        if ($img['name']!="") {
            unset($product->img);
            $photo=time()."_". $img['name'];
            move_uploaded_file($img['tmp_name'],"App/Uploads/products/$photo");
            $linkImg="App/uploads/products/$photo";
        }
       $this->model->editUserModel($name,$price,$view,$linkImg,$id_loai,$id);
    }
}

