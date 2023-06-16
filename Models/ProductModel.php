<h1>Product Model</h1>
<?php 
    class ProductModel extends BaseModel{
        const TABLE= 'products';

        public function getAll($select= ['*']){
            return $this->all(self::TABLE, $select);
        }

        public function findById($id){
            return [
                'id' => 12,
                'name' => 'Iphone 12',
            ];
        }

        public function delete(){
            return __METHOD__;
        }


    }
?>