<?php
class BaseModel extends Database{

    protected $connect;

    public function __construct(){
        $this->connect= $this->connect();
    }

    public function all($table, $select, $limit){
        $column= implode(',', $select);
        
        $sql= "SELECT ${column} FROM ${table} LIMIT ${limit}";
        $query= $this->_query($sql);

        // print_r($query);
        $data= [];
        while($row = mysqli_fetch_assoc($query)){
            array_push($data,$row);
            // var_dump($row);
        }
        return $data;
    }

    public function find($table,$id){
        $sql= "SELECT * FROM ${table} WHERE id = ${id} LIMIT 1";
        $query= $this->_query($sql);
        return mysqli_fetch_assoc($query);
    }

    public function createStore($table, $data= []){
        $columns = implode(',', array_keys($data));

        $newValues=array_map(function($value){
            return "'".$value."'";
        }, array_values($data));

        $newValues= implode(',', $newValues);
        $sql= "INSERT INTO ${table}(${columns}) VALUES (${newValues});";
        // $query= $this->_query($sql);
        echo $sql;
        return $this->_query($sql);
    }

    public function updateById($table, $data=[], $id){
        $dataSets= [];
        foreach($data as $key=>$val){
            array_push($dataSets,"${key}='".$val."'");
        }

        $dataSetsString= implode(',',$dataSets);
        echo $sql= "UPDATE ${table} SET ${dataSetsString} WHERE id= ${id}";
        $this->_query($sql);
    }

    public function deleteById($table, $id){
        $sql= "DELETE FROM ${table} WHERE id=${id}";
        $this->_query($sql);
    }

    private function _query($sql){
        return mysqli_query($this->connect, $sql);
    }


}
