<?php 
    class CategoryController extends BaseController{
        public function index(){
            $pageTitle= 'Danh sách các sản phẩm trong danh mục';
            $categories= [
                [
                    'id' => 1,
                    'name' => 'Phone',
                ], 
                [
                    'id' => 2,
                    'name' => 'PC',
                ],
                [
                    'id' => 3,
                    'name' => 'Tablet',
                ],
                [
                    'id' => 4,
                    'name' => 'printer',
                ],
            ];
            return $this->view('frontend.categories.index', [
                'categories' => $categories,
                'pageTitle' => $pageTitle,
            ]);
        }

        public function show(){
            echo __METHOD__;
        }
    }
?>