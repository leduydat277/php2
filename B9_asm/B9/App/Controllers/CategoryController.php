<?php
require_once 'Database.php';
require_once 'Category.php';

class CategoryController {
    private $db;
    private $category;

    public function __construct() {
        $database = new Database();
        $this->db = $database->getConnection();
        $this->category = new Category($this->db);
    }

    public function index() {
        $stmt = $this->category->read();
        $categories = $stmt->fetchAll(PDO::FETCH_ASSOC);
        include 'list-categories.php';
    }

    public function create() {
        include 'add-category.php';
    }

    public function store($data) {
        $this->category->name = $data['name'];
        if ($this->category->create()) {
            header("Location: index.php?controller=category");
        } else {
            echo "Unable to create category.";
        }
    }

    public function edit($id) {
        $this->category->id = $id;
        $stmt = $this->category->read();
        $category = $stmt->fetch(PDO::FETCH_ASSOC);
        include 'edit-category.php';
    }

    public function update($id, $data) {
        $this->category->id = $id;
        $this->category->name = $data['name'];
        if ($this->category->update()) {
            header("Location: index.php?controller=category");
        } else {
            echo "Unable to update category.";
        }
    }

    public function delete($id) {
        $this->category->id = $id;
        if ($this->category->delete()) {
            header("Location: index.php?controller=category");
        } else {
            echo "Unable to delete category.";
        }
    }
}
?>
