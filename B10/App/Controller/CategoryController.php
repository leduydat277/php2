<?php
namespace App\Controller;
use App\Models\Category;

class CategoryController{
    public $model;
    public function __construct(){
        $this->model=new Category();
    }
    public function loadAllCategory(){
        $listCategorys=$this->model->getListCategory();
        return $listCategorys;
       
    }
   
}

