<?php
namespace App\Controllers;

use App\Models\Product;
use App\Models\Category;

class ProductController {
    protected $product;
    protected $category;

    public function __construct() {
        $this->product = new Product();
        $this->category = new Category();
    }

    public function index() {
        $products = $this->product->getAll();
        include 'views/products/list-products.php';
    }

    public function create() {
        $categories = $this->category->getAll();
        include 'views/products/add-product.php';
    }

    public function store($data) {
        $name = $data['name'];
        $category_id = $data['category_id'];
        $price = $data['price'];
        $image = $this->uploadImage($_FILES['image']);

        $this->product->addProduct($name, $image, $category_id, $price);
        header('Location: index.php?controller=product&action=index');
    }

    public function edit($id) {
        $product = $this->product->getProductById($id);
        $categories = $this->category->getAll();
        include 'views/products/edit-product.php';
    }

    public function update($id, $data) {
        $name = $data['name'];
        $category_id = $data['category_id'];
        $price = $data['price'];
        $image = isset($_FILES['image']) ? $this->uploadImage($_FILES['image']) : $data['current_image'];

        $this->product->updateProduct($id, $name, $image, $category_id, $price);
        header('Location: index.php?controller=product&action=index');
    }

    public function delete($id) {
        $this->product->deleteProduct($id);
        header('Location: index.php?controller=product&action=index');
    }

    private function uploadImage($file) {
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($file["name"]);
        move_uploaded_file($file["tmp_name"], $target_file);
        return $target_file;
    }
}
?>
