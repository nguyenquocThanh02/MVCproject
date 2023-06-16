<?php
class BaseModel extends Database{

    protected $connect;

    public function __construct(){
        $this->connect= $this->connect();
    }

    public function all($table, $select){
        $column= implode(',', $select);
        
        $sql= "SELECT ${column} FROM ${table}";
        $query= $this->_query($sql);

        // print_r($query);
        $data= [];
        while($row = mysqli_fetch_assoc($query)){
            array_push($data,$row);
            // var_dump($row);
        }
        return $data;
    }

    public function find($id){

    }

    public function store(){

        
    }

    public function update(){

    }

    public function delete(){

    }

    private function _query($sql){
        return mysqli_query($this->connect, $sql);
    }


}
