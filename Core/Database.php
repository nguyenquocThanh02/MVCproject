<?php
class Database{
    const HOST= 'localhost';   
    const USERNAME= 'root'; 
    const PASSWORD= '';
    const DB_NAME= 'phpclass';
    // private $connect;

    public function connect(){
        $connect= mysqli_connect(self::HOST, self::USERNAME, self::PASSWORD, self::DB_NAME);
        mysqli_set_charset($connect, "utf8");

        if(mysqli_connect_errno() === 0){
            // $sql= 'SELECT * FROM  users WHERE id="' .$_GET['id']. '"';
            // $user= mysqli_fetch_assoc(mysqli_query($this->connect, $sql));

            return $connect;
        }
        return false;
    }
}