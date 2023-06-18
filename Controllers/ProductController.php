<?php 

    class ProductController extends BaseController{
        private $productModel;
        
        // Mục đích hàm construct để chỉ một lần khai báo 
        // thì tất cả các hàm sao nó đều dùng được mà 
        // không cần khai báo lại
        public function __construct(){
            $this->loadModel('ProductModel');
            $this->productModel =  new ProductModel;

        }
        public function index(){

            $products= $this->productModel->getAll(['id', 'name'], 1);

            return $this->view('frontend.products.index', [
                'pageTitle' => 'Trang danh sach san pham',
                'products' => $products,
            ]);
        }

        public function store(){
            $data= [
                'id' => '16',
                'name' => 'Iphone 16',
                'price' => '60000000',
                'image' => '',
                'category_id' => '16',
            ];

            $this->productModel->store($data);
        }

        public function update(){
            $id= $_GET['id'];
            $data= [
                'id' => '11',
                'name' => 'Iphone 16',
                'price' => '60000000',
                'image' => '',
                'category_id' => '16',
            ];

            $this->productModel->update($data, $id);
        }
        
        public function show(){
            $product= $this->productModel->findById(1);
            return $this->view('frontend.products.show', [
                'product' => $product,
            ]);
        }
        public function delete(){
            $id= $_GET['id'];
            $this->productModel->delete($id);
        }
    }

    
?>