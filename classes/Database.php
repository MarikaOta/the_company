<?php

class Database{

    // to connect mySQL
    private $server_name = 'localhost';
    private $username = 'root';
    private $password = 'root';
    private $db_name = 'the_company';
    protected $conn;

    public function __construct(){
        // localhostで指定しても良いが、後で見るときにわかりにくい
        $this->conn = new mysqli($this->server_name, $this->username, $this->password, $this->db_name);


        if($this->conn->connect_error){
            die("Unable to connect the datebase: ". $this->conn->connect_error);
        }
    }


}



?>