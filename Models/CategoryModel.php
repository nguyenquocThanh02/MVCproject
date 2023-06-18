<h1>Category Model</h1>
<?php 
    class CategoryModel extends BaseModel{
        const table= 'categories';

        public function getAll($select= ['*'], $limit){
            return $this->all(self::table,$select,$limit);
        }

        public function findById($id){
            return $this->find(self::table,$id);
        }
    }


?>