<h1>Product Model</h1>
<?php 
    class ProductModel extends BaseModel{
        const TABLE= 'products';

        public function getAll($select= ['*'], $limit){
            return $this->all(self::TABLE, $select, $limit);
        }

        public function findById($id){
            return [
                'id' => 12,
                'name' => 'Iphone 12',
            ];
        }

        public function store($data=[]){
            return $this->createStore(self::TABLE,$data);
        }
        public function update($data=[], $id){
            return $this->updateById(self::TABLE,$data, $id);
        }

        public function delete($id){
            return $this->deleteById(self::TABLE,$id);
        }


    }
?>