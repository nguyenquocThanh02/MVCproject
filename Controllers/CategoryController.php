<?php 
    class CategoryController extends BaseController{
        private $categoryModel;

        public function __construct(){
            $this->loadModel('CategoryModel');
            $this->categoryModel = new CategoryModel;
        }

        public function index(){
            $pageTitle= 'Danh sách các sản phẩm trong danh mục';
            
            $categories= $this->categoryModel->getAll(['id', 'name'], 1);

            return $this->view('frontend.categories.index', [
                'categories' => $categories,
                'pageTitle' => $pageTitle,
            ]);
        }

        public function show(){
            $id= $_GET['id'];
            $category= $this->categoryModel->findById($id);
            print_r($category);
        }
    }
?>